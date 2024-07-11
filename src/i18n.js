// src/i18n.js
const i18n = require('i18n');
const path = require('path');

i18n.configure({
  locales: ['en', 'fr'], // Add your supported locales here
  directory: path.join(__dirname, 'locales'), // Path to the translation files
  defaultLocale: 'en',
  cookie: 'locale', // Cookie name to store the locale
  queryParameter: 'lang', // Query parameter to change locale
  autoReload: true,
  syncFiles: true,
  objectNotation: true
});

module.exports = i18n;
