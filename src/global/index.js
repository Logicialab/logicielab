const fs = require('fs');
module.exports = function () {
    global.Utils = {};
    global.Core = require(`./core.js`);
    global.Models = {};
    fs.readdirSync('src/utils').forEach((util) => {
        global.Utils[util.split('.')[0]] = require(`../utils/${util}`);
    });

}