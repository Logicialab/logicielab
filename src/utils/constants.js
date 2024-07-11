const { domains: blockedDomains,names:subdomains,emails:blockedEmails } = require('./blacklists');
exports.BLACKLIST_DOMAINS = ['alikar.com', 'alikar.ma', 'alikar.world', ...blockedDomains];
exports.BLACKLIST_SUBDOMAINS = ['http', 'https', 'wwww', 'events', 'admin', 'new', 'default','developer', 'developers', 'apps', 'contact', 'faq',
    'storeino', 'webmail', 'www', 'ftp', 'support', 'info', 'academy', 'videos', 'photos', 'images', 'files', 'mail', 'cdn', 'forum',
    'templates', 'demo', 'shipping', 'provider', 'job', 'testimonials', 'design', 'auth', 'login', 'register', 'join', 'community', 'university',
    'products', 'themes', 'dashboard', 'business', 'api', 'services', 'service', 'ns1', 'ns2', 'ns3', 'ns4', 'ns5', 'ns6', 'my', 'user', 'git', 'ssh', 'ssl', 'security',
    'wwww', 'rss', 'feed', 'facebook', 'twitter', 'instagram', 'google', 'github', 'youtube', 'whatsapp', 'chat',...subdomains];

exports.BLACKLIST_EMAIL = [...blockedEmails]