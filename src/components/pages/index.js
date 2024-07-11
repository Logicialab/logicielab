// import {en} from '../../locales/en.json';
const fs = require('fs');
const path = require('path');


module.exports = class Page extends Core {
    // static ViewAction = ['buildpage'];
    // static Allowedpages = require('../../global/links');
    // static async buildpage(req){

    //     let slug = req.path.replace('/pages/buildpage','');
    //     slug = slug.trim();
    //     if (slug.startsWith('/'))slug = slug.replace('/','');
    //     console.log(slug);
    //     slug = slug.replace(/\/+$/, '');
    //     if (!this.Allowedpages[slug]) return { status:false, data: "error" };
    //     let config = this.Allowedpages[slug];

    //     return { status:true, data: { config } };
    // }


    static Actions = ['index','bookDemo','about','webDesign','mobileAppDesign','services','cloudHosting','webHosting','contactUs','serverManagement','digitalMarketing','technicalAnalysis','designServices','softwareTesting','technicalSupport','dedicatedServer','projectManagement','solutions','systems'];

    static async index(req) {
        return this.generatePageData(req);
    }

    static async bookDemo(req) {
        return this.generatePageData(req);
    }

    static async about(req) {
        return this.generatePageData(req);
    }

    static async webDesign(req) {
        return this.generatePageData(req);
    }

    static async mobileAppDesign(req) {
        return this.generatePageData(req);
    }
    static async services(req) {
        return this.generatePageData(req);
    }
    static async cloudHosting(req) {
        return this.generatePageData(req);
    }
    static async webHosting(req) {
        return this.generatePageData(req);
    }
    static async contactUs(req) {
        return this.generatePageData(req);
    }
    static async serverManagement(req) {
        return this.generatePageData(req);
    }
    static async digitalMarketing(req) {
        return this.generatePageData(req);
    }
    static async technicalAnalysis(req) {
        return this.generatePageData(req);
    }
    static async designServices(req) {
        return this.generatePageData(req);
    }

    static async softwareTesting(req) {
        return this.generatePageData(req);
    }

    static async technicalSupport(req) {
        return this.generatePageData(req);
    }
    
    static async dedicatedServer(req) {
        return this.generatePageData(req);
    }

    static async projectManagement(req) {
        return this.generatePageData(req);
    }   

    static async solutions(req) {
        return this.generatePageData(req);
    }  

    static async systems(req) {
        return this.generatePageData(req);
    }   

    
    
    
    
    
    static generatePageData(req) {
        const lang = req.params.lang === 'en' ? 'en' : 'fr';
        
        const langHeader = req.headers['accept-language'];
        const langus = langHeader && langHeader.includes('fr') ? 'fr' : 'en';

        const en = path.join(__dirname, '../../locales/en.json'); // adjust the path to your JSON file
        const fr = path.join(__dirname, '../../locales/fr.json'); // adjust the path to your JSON file
        let jsonData = {};


        try {
            const data = fs.readFileSync(en, 'utf8');
            jsonData = JSON.parse(data);
        } catch (err) {
            console.error("Error reading JSON file:", err);
        }
    

        const metadata = {
            title: "Logicie Lab",
            description: lang === 'fr' 
                ? "Unlock a revolutionary InsurTech solution featuring Multi-AI Agents, transforming claim management effortlessly. Harness AI car inspection, 3D/AR accident views, and robust anti-fraud measures for a seamless experience. Ideal for insurers, insurance seekers, experts, and garagistes"
                : "Découvrez notre solution InsurTech révolutionnaire : agents multi-IA, inspection automobile IA, vues 3D/AR, mesures anti-fraude robustes. Idéal pour assureurs, demandeurs d'assurance, experts et garagistes, simplifiez votre gestion des réclamations",
            keywords: "Multi-AI Agents, InsurTech Innovation, Efficient Claim Management, AI Car Inspection, 3D/AR Accident Views, Anti-Fraud Measures, Seamless Claim Processing, Insurance Technology Advancements, Insurer Solutions, Insurance Seeker Tools, Expert Claims Management, Garagiste Efficiency, Agents Multi-IA, Innovation InsurTech, Gestion des Réclamations Efficace, Inspection Automobile IA, Vues d'Accidents 3D/AR, Mesures Anti-Fraude, Traitement des Réclamations Sans Effort, Avancées Technologiques en Assurance, Solutions pour Assureurs, Outils pour Demandeurs d'Assurance, Gestion Efficace des Réclamations pour Experts, Efficacité pour Garagistes, inspection des véhicules",
            color: "#ffffff",
            lang
        };
        return { status: true, data: { metadata, jsonData }};
    }


   
}
