const axios = require('axios');
const https = require('https');

const http = axios.create({
    httpsAgent: new https.Agent({
        rejectUnauthorized: false,
    }),
});

module.exports = http;
