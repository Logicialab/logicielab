const express = require('express');
const router = express.Router();

const page = require('../components/pages');
const contact = require('../components/contacts');




/**
 *   Views /pages/:action
*/

router.get('/:lang?/bookDemo',(req,res)=>{ page.render(req,res,'bookDemo') });
router.get('/:lang?',(req,res)=>{ page.render(req,res,'index') });
// router.get('/pages/:action/*',(req,res)=>{ page.render(req,res) });
router.post('/contacts/:action',(req,res)=>{ contact.run(req,res) });


////////////////////////////////////////
// router.get('/:lang?/about',(req,res)=>{ page.render(req,res,'about') });
// router.get('/:lang?/web-design',(req,res)=>{ page.render(req,res,'webDesign') });
// router.get('/:lang?/mobile-app-design',(req,res)=>{ page.render(req,res,'mobileAppDesign') });
// router.get('/:lang?/services',(req,res)=>{ page.render(req,res,'services') });



// Route middleware to handle language
router.use('/:lang?', (req, res, next) => {
    let lang = req.params.lang || req.cookies.locale || 'en';
    res.cookie('locale', lang);
    res.setLocale(lang);
    next();
  });
  
  // Define your routes
  router.get('/:lang?/about', (req, res) => {
    page.render(req, res, 'about');
  });

  router.get('/:lang?/contact-us', (req, res) => {
    page.render(req, res, 'contactUs');
  });

  router.get('/:lang?/mobile-app-design', (req, res) => {
    page.render(req, res, 'mobileAppDesign');
  });

  
  router.get('/:lang?/web-design', (req, res) => {
    page.render(req, res, 'webDesign');
  });

  router.get('/:lang?/services', (req, res) => {
    page.render(req, res, 'services');
  });

  router.get('/:lang?/cloud-hosting', (req, res) => {
    page.render(req, res, 'cloudHosting');
  });

  router.get('/:lang?/web-hosting', (req, res) => {
    page.render(req, res, 'webHosting');
  });

  router.get('/:lang?/server-management', (req, res) => {
    page.render(req, res, 'serverManagement');
  });

  router.get('/:lang?/digital-marketing', (req, res) => {
    page.render(req, res, 'digitalMarketing');
  });

  router.get('/:lang?/technical-analysis', (req, res) => {
    page.render(req, res, 'technicalAnalysis');
  });
  
  router.get('/:lang?/design-services', (req, res) => {
    page.render(req, res, 'designServices');
  });

  router.get('/:lang?/software-testing', (req, res) => {
    page.render(req, res, 'softwareTesting');
  });
  router.get('/:lang?/technical-support', (req, res) => {
    page.render(req, res, 'technicalSupport');
  });

  router.get('/:lang?/dedicated-server', (req, res) => {
    page.render(req, res, 'dedicatedServer');
  });

  router.get('/:lang?/project-management', (req, res) => {
    page.render(req, res, 'projectManagement');
  });

  router.get('/:lang?/solutions', (req, res) => {
    page.render(req, res, 'solutions');
  });

  router.get('/:lang?/systems', (req, res) => {
    page.render(req, res, 'systems');
  });
  
   

  
  
  

  
  
  










module.exports = router;