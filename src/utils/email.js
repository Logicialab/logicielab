const nodemailer = require('nodemailer');
module.exports = class email{

  // no-reply@gobabar.com
  // contact@gobabar.com

    static async verify(){

        // const transporter = nodemailer.createTransport({
        //     host: 'smtp.gmail.com',
        //     port: 587,
        //     auth: {
        //       user: 'gobabar@gmail.com',
        //       pass: 'xyjzpzxgpprmbbga',
        //     },
        //   });
        //   try {
        //       let resp = await transporter.verify();
        //       console.log(resp);
        //   } catch (error) {
        //     console.log(error);
        //   }
    }

    static async send(to,subject,replyTo = 'insuranceiacheck@gmail.com',html){
        const transporter = nodemailer.createTransport({ 
            service: 'gmail',
            port: 465,
            secure: true,
            auth: { user: 'insuranceiacheck@gmail.com', pass: 'dbkfmobogpqvqyre' } });
        try {
            let message = {
                from: '"Insurance iacheck contact" <insuranceiacheck@gmail.com>', 
                replyTo: replyTo, 
                to,
                subject,
                html
              };
            let resp = await transporter.sendMail(message);
            console.log("MAIL TO =>", to);
            console.log(resp);
            console.log("-------------------");
        } catch (error) {
            console.log(error);
        }
    }

    static getTemplate(templateName, options= {}){
        let tmp = null;
        if (!templateName || templateName.split('_').length == 0) return tmp;
        let folderName = templateName.split('_')[0];
        let nameFile = templateName.split(`${folderName}_`)[1];
        try {
            tmp = require(`../templates/${folderName}/${nameFile}.js`);
        } catch (e) { }
        if (!tmp) return tmp;

        for (const key in options) {
            tmp = tmp.split(`[${key}]`).join(options[key]);
        }
        return tmp;
    }
}