const moment = require('moment');
require('moment/locale/fr.js');
moment.locale('fr');
const _ = require('lodash');
const fs = require('fs');
const { promisify } = require('util')

module.exports.sleep = (ms) => { return new Promise(resolve => { setTimeout(resolve, ms); }); };
module.exports.pick = _.pick;
module.exports.omit = _.omit;
module.exports.merge = _.merge;
module.exports.moment = moment;
module.exports.cloneDeep = _.cloneDeep;

function joiErrorParser(errors) {
    const myCustomError = {};
    errors.details.forEach((error) => {
        const type = error.type.split('.');
        myCustomError[error.context.label] = `errors_${type[type.length - 1]}`;
    });

    return myCustomError;
}
module.exports.joiErrorParser = joiErrorParser;

module.exports.randomId = () => {
    const head = Date.now().toString(36);
    const tail = Math.random().toString(36).substring(2);
    return head + tail;
}
module.exports.getRandomInt = (min, max) => { return Math.floor(Math.random() * (max - min + 1) + min); };
module.exports.isValidEmail = (email) => {
    if (!email) return false;
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};






module.exports.writeFile = promisify(fs.writeFile);
module.exports.appendFile = promisify(fs.appendFile);

module.exports.readFile = promisify(fs.readFile);
module.exports.copyFile = promisify(fs.copyFile);
