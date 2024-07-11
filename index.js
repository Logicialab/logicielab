const express = require('express');
const app = express();

const compression = require('compression');
app.use(compression());

const cookieParser = require("cookie-parser");

const i18n = require('./src/i18n');
app.use(i18n.init);
app.use(cookieParser());

const nunjucks =  require('nunjucks');
nunjucks.configure('src/views', { autoescape: true, express: app ,noCache:true });
app.use(express.static('src/views/public'))

const cors = require('cors');
app.use(cors());

const http = require('http').Server(app);

const global = require('./src/global');
global();

app.use(express.json({ limit: '10mb' }));
app.use(express.urlencoded({ extended: true }));

app.use((req, res, next) => {
  let lang = req.params.lang || req.cookies.locale || 'en';
  res.setLocale(lang);
  next();
});


const routes = require('./src/router');
app.use('/', routes);




const config = require('config');
console.log("ENV:", config.get('app.env'));
const APP_PORT = config.has('app.port') ? config.get('app.port') : 3033;
http.listen(APP_PORT, () => {
  console.log(`Listening on port ${APP_PORT}`);
});
