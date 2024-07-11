module.exports = class Core {

    static async run(req, res) {
        if ( this.Actions.indexOf(req.params.action) == -1 == -1 ) return res.status(404).send('ERROR_INVALID_ACTION');
        let result,code = 200;
        if (typeof this[req.params.action] != 'undefined') {
            result = await this[req.params.action](req);
            if (!result.status) code = result.code ? result.code : 400;
            if (result.auth) res.cookie('x-auth',result.auth, {signed: true})
            if (result.removeAuth) res.clearCookie('x-auth');
            return res.status(code).send(result.data);
        }
        return res.status(400).send('ERROR_INVALID_ACTION');
    }

    static async render(req, res,page, basePage = 'base') {
        if (!page || this.Actions.indexOf(page) == -1) return res.status(404).render('error/404.html');
        let result,code = 200;
        if (typeof this[page] != 'undefined') {
            result = await this[page](req);
            if (result.redirect) res.redirect(result.redirect);
            if (result.auth) res.cookie('x-auth',result.auth, {signed: true});
            if (result.removeAuth) res.clearCookie('x-auth');
            if (!result.status) code = result.code ? result.code  : 400;
            if (code != 200) return res.status(404).render('error/400.html');
            result.data.page = page;
            return res.render(`${basePage}.html`,result.data);
        }
        return res.status(404).render('error/400.html');
    }


    static async auth(req){
        let token = req.headers['x-auth-token'];
        if (!token) return { status: false, data:'ACCESS_DENIED' };
        const decoded = Utils.jwt.verify(token,'access');
        if (decoded.errors) return { status: false, data:'INVALID_TOKEN' };
        if (decoded.user && decoded.user) {
            let params = {_id: decoded.user , status : { "$nin": ['BANNED','DELETED'] }};
            try {
                const user = await Models.users.findOne(params, [], { populate:[{ path: "country", model: Models['countries'] }, { path: "role", model: Models['roles'] }] });
                if (!user) return { status: false, data:'USER_NOT_FOUNED' };
                // req.session = { user };
                return {status:true,  data:user};
            } catch (error) {
                return { status: false, data:error };
            }
        }
        return res.status(401).send('INVALID_TOKEN');
    }

    static async get(modelName,params){
        try {
            return await Models[modelName].findOne(...params);
        } catch (error) {
            return this.error(error);
        }
    }
    static async create(modelName,params) {
        try {
            // /*console.log(doc);*/
            const model = new Models[modelName](...params);
            const data = await model.save();
            return data;
        } catch (error) {
            return this.error(error);
        }
    }

    static async search(modelName,params) {
        try {
            if (params.length == 0) params = [{}];
            if (params.length == 1) params.push(['-__v']);
            if (params.length == 2) params.push({});

            params[2]['limit'] = params[2]['limit'] ? parseInt(params[2]['limit'], 10) : 10;
            params[2]['page'] = params[2]['page'] ? parseInt(params[2]['page'], 10) : 1;
            params[2]['skip'] = (params[2]['page']  - 1) * params[2]['limit'];
            let limit = params[2]['limit'];

            if (params[2]['noLimit']) delete (params[2]['limit']);
            const result = await Models[modelName].find(...params);

            const total = await Models[modelName].countDocuments(params[0]);
            const pages = Math.floor(total / limit);

            return {
                results: result,
                paginate: {
                    total: total,
                    current_page: params[2]['page'],
                    last_page: (pages % limit) == 0 ? pages : pages + 1,
                },
            };
        } catch (error) {
            return this.error(error);
        }
    }

    static async aggregate(modelName,params,paginate={}){
        try {
            paginate['limit'] = paginate['limit'] ? parseInt(paginate['limit'], 10) : 15;
            paginate['page'] = paginate['page'] ? parseInt(paginate['page'], 10) : 1;
            paginate['skip'] = (paginate['page']  - 1) * paginate['limit'];
            // if (paginate['noLimit']) delete (paginate['limit']);

            let pagination = {
                $facet: {
                    results: [{ $skip: paginate.skip }, { $limit: paginate.limit }],
                    paginate: [
                        {
                            $count: 'total',
                            // limit: 'per_page',
                            // skip: 'current_page'
                        }
                    ]
                }
            }
            params.push(pagination);
            const dataList = await Models[modelName].aggregate(params);
            if (!dataList.length)  return { results:[], paginate:{ total: 0,per_page: paginate['limit'] ,current_page:paginate['page'] } };
            // console.log(dataList[0]);
            return {
                results: dataList[0].results,
                paginate:{ 
                    total: !dataList[0].paginate.length ? 0 : dataList[0].paginate[0].total,
                    per_page: paginate['limit'],
                    current_page:paginate['page']
                }
            }
        } catch (error) {
            console.log(error);
            return this.error(error);
        }
    }

    static async update(modelName,params) {
        try {
            if (params.length == 2) {
                params.push({ new : true })
            }
            else if ( params.length == 3 ) params[2].new = true;
            params[2]['runValidators'] = true;
            return await Models[modelName].findOneAndUpdate(...params);
        } catch (error) {
            console.log(error);
            return this.error(error);
        }
    }
    static async bulkUpdate(modelName,params) {
        try {
            if (!params.length) params = [{},{}];
            else if (params.length == 1) params.push({ $set: {} });
            else if(params.length >= 2) params[1] = { $set: params[1] };
            return await Models[modelName].updateMany(...params);
        } catch (error) {
            return this.error(error);
        }
    }
    static async count(modelName,params){
        try {
            const total = await Models[modelName].countDocuments(params[0]);
            return total;
        } catch (error) {
            return this.error(error);
        }
    }
    static async remove(modelName,params,type='normal') {
        try {
            let data = null;
            if (type == 'normal') data = await Models[modelName].findOneAndRemove(params[0]);
            else data = await Models[modelName].findOneAndUpdate(...params);
            return data;
        } catch (error) {
            console.log(error);
            return this.error(error);
        }
    }
    static async bulkRemove(modelName,params) {
        try {
            const data = await Models[modelName].deleteMany(params[0]);
            return data;
        } catch (error) {
            console.log(error);
            return this.error(error);
        }
    }

    static validate(modelName,body,isUpdate = false) {
        // { stripUnknown: true } validate option => https://joi.dev/api/?v=17.7.0#anyvalidatevalue-options
        try {
            const data = JSON.parse(JSON.stringify(body));
            // console.log(data);
            let result = null;
            if (isUpdate) {
                let result1 = this.validateObject(Validation[modelName], data);
                if (result1 && result1.error) result = result1;
            }
            if (!result) result = Validation[modelName].validate(data,{ stripUnknown: true });

            result.error = result.error ? Utils.fc.joiErrorParser(result.error) : null;
            // console.log(result);
            return result;
        } catch (error) {
            console.log(error);
            throw new Error(`${modelName}_error_validation_data`);
        }
    }

    static validateArray(object, newObject) {
        for (let index = 0; index < object.$_terms.items.length; index++) {
            if (object.$_terms.items[index].type == 'object') {
                for (let index2 = 0; index2 < newObject.length; index2++) {
                    const newSchema = Utils.fc.cloneDeep(object.$_terms.items[index]);
                    this.validateObject(newSchema, newObject[index2]);
                    return newSchema.validate(newObject[index2]);
                }
            } else if (object.$_terms.items[index].schema && object.$_terms.items[index].schema.type == 'array') {
                this.validateArray(object.$_terms.items[index], newObject[index]);
            }
        }
        return { value: {} };
    }
    
    static validateObject(object, newObject) {
        if (object.$_terms.keys == null) return { value: {} };
        for (let index = 0; index < object.$_terms.keys.length; index++) {
            if (!(object.$_terms.keys[index].key in newObject)) {
                object.$_terms.keys.splice(index, 1);
                index--;
            } else if (object.$_terms.keys[index].schema.type == 'object') {
                this.validateObject(object.$_terms.keys[index].schema, newObject[object.$_terms.keys[index].key]);
            } else if (object.$_terms.keys[index].schema.type == 'array') {
                const result = this.validateArray(object.$_terms.keys[index].schema, newObject[object.$_terms.keys[index].key]);
                if (result.error) {
                    return result;
                }
                delete (newObject[object.$_terms.keys[index].key]);
                object.$_terms.keys.splice(index, 1);
                index--;
            }
        }
        return { value: {} };
    }

    static error(error) {
        /*console.log('MongoERROR : ', JSON.stringify(error));*/
        Utils.sentry.log(error);
        if (error.errmsg) {
            /*console.log(error.errmsg);*/
            if (error.code && error.code === 11000) {
                let field;
                /*console.log('1');*/

                if (!error.keyValue) {
                    /*console.log('2');*/
                    field = (/(index: (\w+)(_\d+))/).exec(error.message)[2].toLowerCase();
                    // error.message = `duplicate_${field}`;
                } else {
                    /*console.log('3');*/
                    field = Object.keys(error.keyValue).join(',').toLowerCase();
                    // error.message = `duplicate_${field}`;
                }
                /*console.log('4');*/
                error.errors = { [field]: 'errors_duplicate' };
            }
        } else if (error.errors) {
            /*console.log('error.errors', error.errors);*/
            const keys = Object.keys(error.errors);
            /*console.log('keys', keys);*/
            const myCustomError = {};
            keys.forEach((field) => {
                myCustomError[field] = `errors_${error.errors[field].kind || error.errors[field]}`;
            });
            error.errors = myCustomError;
            // const firstError = error.errors ? error.errors[Object.keys(error.errors)[0]] : error.message;
            // error.message = `${firstError.path}_${firstError.kind}`.toLowerCase();
        } else { error.errors = {}; }
        if (!error.status) error.status = 500;
        return error;
    }
}