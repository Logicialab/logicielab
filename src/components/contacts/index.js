module.exports = class Contact extends Core {
    static Actions = ['send'];

    static async send(req){
        if (!req.body.captcha)  return { status:false, data:"ERROR_REQUEST_VERIFY" }
        try {
            let resp = await Utils.http.post("https://www.google.com/recaptcha/api/siteverify",{},{ headers:{ 'content-type': 'application/x-www-form-urlencoded', }, params:{  secret: "6LfKq_UjAAAAAPoPqy8z0Qll4j1tWPydvU-1WXgU", response:req.body.captcha } });
             console.log(resp.data,'resp.data');
            if (!resp.data.success) return { status:false, data:"ERROR_REQUEST_VERIFY" };
        } catch (error) {
            return { status:false, data:"ERROR_REQUEST_VERIFY" };
        }
        //return { status:true, data: "OK" };
        let template = `
            - Nom complet: <b> ${ req.body.fullName } </b> <br>
            - Email: <b> ${ req.body.email } </b> <br>
            - company: <b> ${ req.body.companyName } </b> <br>
            - Poste: <b> ${ req.body.jobTitle } </b> <br>
            - Message: <b> ${ req.body.textMessage } </b> <br>
        `
        let to = 'contact@iacheck.com';
        let subject = 'insurance iacheck contact';
        let replyTo = req.body.email;
        console.log(template,'template');
        Utils.email.send(to,subject,replyTo,template);
        return { status:true, data: "OK" };
    }
}