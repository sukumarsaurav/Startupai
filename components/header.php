<?php
require_once __DIR__ . '/../config/seo.php';

// Get the current page category and service from URL
$current_url = $_SERVER['REQUEST_URI'];
$url_parts = explode('/', trim($current_url, '/'));

$category = isset($url_parts[1]) ? $url_parts[1] : 'home';
$service = isset($url_parts[2]) ? $url_parts[2] : null;

// Get SEO data for current page
$seo_data = get_seo_data($category, $service);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($seo_data['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo_data['keywords']); ?>">
    <title><?php echo htmlspecialchars($seo_data['title']); ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- FAQ CSS -->
    <link rel="stylesheet" href="/assets/css/faq.css">
    <!-- Why Hire Us CSS -->
    <link rel="stylesheet" href="/assets/css/why-hire-us.css">
    
    <!-- Mega Menu Custom CSS -->
    <style>
        /* Mega Menu Styles */
        .dropdown-menu.mega-menu {
            width: 100%;
            left: 0;
            right: 0;
            padding: 20px;
            border-radius: 0;
            border-top: 2px solid var(--primary-color, #0d6efd);
        }
        
        @media (min-width: 992px) {
            .dropdown-menu.mega-menu {
                position: absolute;
                margin-top: 0;
                min-width: 700px;
                max-width: 1200px;
                left: 50%;
                transform: translateX(-50%);
            }
            
            .navbar .nav-item.dropdown:hover .dropdown-menu.mega-menu {
                display: block;
            }
            
            .mega-menu .row {
                width: 100%;
                margin: 0;
            }
            
            .mega-menu .dropdown-header {
                padding: 8px 0;
                font-weight: 600;
                color: var(--primary-color, #0d6efd);
                border-bottom: 1px solid #eee;
                margin-bottom: 8px;
            }
            
            .mega-menu .dropdown-item {
                padding: 5px 15px;
                font-size: 0.9rem;
            }
            
            .mega-menu .col-md-3, .mega-menu .col-md-4 {
                padding: 0 15px;
            }
            
            .mega-menu li {
                list-style: none;
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Drawer Overlay -->
    <div class="drawer-overlay"></div>
    
    <!-- Side Drawer -->
    <div class="drawer-overlay"></div>
    <div class="side-drawer">
        <div class="drawer-header">
            <a href="/index.php" class="drawer-logo">StartupAI</a>
            <button class="drawer-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="drawer-body">
            <nav class="drawer-nav">
                <a href="/index.php" class="drawer-item active">Home</a>
                
                <!-- Web Design -->
                <a href="#" class="drawer-item dropdown-toggle">Web Design</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">UI/UX Design & Prototyping</h6>
                        <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Wireframing-&-Prototyping.php">Wireframing & Prototyping</a>
                        <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Interface-(UI)-Design.php">User Interface (UI) Design</a>
                        <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Experience-(UX)-Optimization.php">User Experience (UX) Optimization</a>
                        <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Accessibility-&-Usability-Testing.php">Accessibility & Usability Testing</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Website Redesign & Revamp</h6>
                        <a href="/pages/services/web-design/Website-Redesign-&-Revamp/Mobile-First-Design.php">Mobile-First Design</a>
                        <a href="/pages/services/web-design/Website-Redesign-&-Revamp/Speed-&-Performance-Optimization.php">Speed & Performance Optimization</a>
                        <a href="/pages/services/web-design/Website-Redesign-&-Revamp/Modernizing-Old-Websites.php">Modernizing Old Websites</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Responsive & Mobile Friendly Design</h6>
                        <a href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Mobile-UI-UX-Optimization.php">Mobile UI/UX Optimization</a>
                        <a href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Cross-Browser-Compatibility.php">Cross-Browser Compatibility</a>
                        <a href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Adaptive-Web-Design.php">Adaptive Web Design</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">CMS Based Website Development</h6>
                        <a href="/pages/services/web-design/CMS-Based-Website-Development/WordPress-Website-Design.php">WordPress Website Design</a>
                        <a href="/pages/services/web-design/CMS-Based-Website-Development/Webflow-Development.php">Webflow Development</a>
                        <a href="/pages/services/web-design/CMS-Based-Website-Development/Custom-CMS-Solutions.php">Custom CMS Solutions</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Industry Specific Website Design</h6>
                        <a href="/pages/services/web-design/Industry-Specific-Website-Design/Healthcare-Websites.php">Healthcare Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website-Design/Real-Estate-Websites.php">Real Estate Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website-Design/Finance-Websites.php">Finance Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website-Design/Education-Websites.php">Education Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website-Design/Hospitality-Websites.php">Hospitality Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website-Design/Legal-Websites.php">Legal Websites</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">E-commerce Website Design</h6>
                        <a href="/pages/services/web-design/E-commerce-Website-Design/Shopify-Development.php">Shopify Development</a>
                        <a href="/pages/services/web-design/E-commerce-Website-Design/WooCommerce-Development.php">WooCommerce Development</a>
                        <a href="/pages/services/web-design/E-commerce-Website-Design/Custom-E-commerce-Solutions.php">Custom E-commerce Solutions</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Custom Website Design</h6>
                        <a href="/pages/services/web-design/Custom-Website-Design/Business-Websites.php">Business Websites</a>
                        <a href="/pages/services/web-design/Custom-Website-Design/Portfolio-Websites.php">Portfolio Websites</a>
                        <a href="/pages/services/web-design/Custom-Website-Design/Personal-Blogs.php">Personal Blogs</a>
                        <a href="/pages/services/web-design/Custom-Website-Design/Landing-Pages.php">Landing Pages</a>
                    </div>
                </div>
                
                <!-- App Development -->
                <a href="#" class="drawer-item dropdown-toggle">App Development</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Web Application Development</h6>
                        <a href="/pages/services/app-development/web-application-devlopment/custom-web-apps.php">Custom Web Apps</a>
                        <a href="/pages/services/app-development/web-application-devlopment/API-Development-&-Integration.php">API Development & Integration</a>
                        <a href="/pages/services/app-development/web-application-devlopment/Progressive-Web-Apps.php">Progressive Web Apps</a>
                        <a href="/pages/services/app-development/web-application-devlopment/E-commerce-Solutions.php">E-commerce Solutions</a>
                        <a href="/pages/services/app-development/web-application-devlopment/SaaS-Development.php">SaaS Development</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Backend & Database</h6>
                        <a href="/pages/services/app-development/Backend-&-Database/Database-Design-&-Management.php">Database Design & Management</a>
                        <a href="/pages/services/app-development/Backend-&-Database/DevOps-&-CI-CD.php">DevOps & CI/CD</a>
                        <a href="/pages/services/app-development/Backend-&-Database/Serverless-Architecture.php">Serverless Architecture</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Custom Software Solutions</h6>
                        <a href="/pages/services/app-development/Custom-Software-Solutions/AI-Powered-Applications.php">AI-Powered Applications</a>
                        <a href="/pages/services/app-development/Custom-Software-Solutions/CRM-&-ERP-Solutions.php">CRM & ERP Solutions</a>
                        <a href="/pages/services/app-development/Custom-Software-Solutions/IoT-&-Embedded-Systems.php">IoT & Embedded Systems</a>
                    </div>
                </div>
                
                <!-- AI Services -->
                <a href="#" class="drawer-item dropdown-toggle">AI Services</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Conversational AI</h6>
                        <a href="/pages/services/ai-services/chatbots-virtual-assistants.php">AI Chatbots & Virtual Assistants</a>
                        <a href="/pages/services/ai-services/chatbots/customer-support-bots.php">Customer Support Bots</a>
                        <a href="/pages/services/ai-services/chatbots/sales-bots.php">Conversational Sales Bots</a>
                        <a href="/pages/services/ai-services/chatbots/multilingual-bots.php">Multilingual Chatbots</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Business AI</h6>
                        <a href="/pages/services/ai-services/business-automation.php">AI for Business Automation</a>
                        <a href="/pages/services/ai-services/business-automation/workflow-automation.php">Workflow Automation</a>
                        <a href="/pages/services/ai-services/business-automation/document-processing.php">Document Processing</a>
                        <a href="/pages/services/ai-services/business-automation/predictive-analytics.php">Predictive Analytics</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Language AI</h6>
                        <a href="/pages/services/ai-services/natural-language-processing.php">Natural Language Processing</a>
                        <a href="/pages/services/ai-services/natural-language-processing/sentiment-analysis.php">Sentiment Analysis</a>
                        <a href="/pages/services/ai-services/natural-language-processing/text-classification.php">Text Classification</a>
                        <a href="/pages/services/ai-services/natural-language-processing/translation-services.php">AI Translation Services</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Machine Learning</h6>
                        <a href="/pages/services/ai-services/machine-learning-solutions.php">Machine Learning Solutions</a>
                        <a href="/pages/services/ai-services/machine-learning/recommendation-systems.php">Recommendation Systems</a>
                        <a href="/pages/services/ai-services/machine-learning/anomaly-detection.php">Anomaly Detection</a>
                        <a href="/pages/services/ai-services/machine-learning/forecasting.php">Predictive Forecasting</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Advanced AI</h6>
                        <a href="/pages/services/ai-services/model-training.php">AI Model Training & Fine-Tuning</a>
                        <a href="/pages/services/ai-services/computer-vision.php">Computer Vision Solutions</a>
                        <a href="/pages/services/ai-services/voice-speech.php">Voice & Speech AI Solutions</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">AI Applications</h6>
                        <a href="/pages/services/ai-services/ai-digital-marketing.php">AI in Digital Marketing</a>
                        <a href="/pages/services/ai-services/industry-applications.php">Industry-Specific AI</a>
                        <a href="/pages/services/ai-services/industry-applications/healthcare-ai.php">Healthcare AI</a>
                        <a href="/pages/services/ai-services/industry-applications/fintech-ai.php">Fintech AI</a>
                        <a href="/pages/services/ai-services/industry-applications/retail-ai.php">Retail & E-commerce AI</a>
                    </div>
                </div>
                
                <!-- Digital Marketing -->
                <a href="#" class="drawer-item dropdown-toggle">Digital Marketing</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">SEO Services</h6>
                        <a href="/pages/services/digital-marketing/seo/on-page-seo.php">On-Page SEO</a>
                        <a href="/pages/services/digital-marketing/seo/off-page-seo.php">Off-Page SEO</a>
                        <a href="/pages/services/digital-marketing/seo/technical-seo.php">Technical SEO</a>
                        <a href="/pages/services/digital-marketing/seo/local-seo.php">Local SEO</a>
                        <a href="/pages/services/digital-marketing/seo/ecommerce-seo.php">E-commerce SEO</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Content Marketing</h6>
                        <a href="/pages/services/digital-marketing/content-marketing/content-strategy.php">Content Strategy</a>
                        <a href="/pages/services/digital-marketing/content-marketing/blogging-services.php">Blogging Services</a>
                        <a href="/pages/services/digital-marketing/content-marketing/copywriting.php">Copywriting</a>
                        <a href="/pages/services/digital-marketing/content-marketing/video-marketing.php">Video Marketing</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Social Media Marketing</h6>
                        <a href="/pages/services/digital-marketing/social-media/social-media-management.php">Social Media Management</a>
                        <a href="/pages/services/digital-marketing/social-media/social-media-advertising.php">Social Media Advertising</a>
                        <a href="/pages/services/digital-marketing/social-media/influencer-marketing.php">Influencer Marketing</a>
                        <a href="/pages/services/digital-marketing/social-media/community-management.php">Community Management</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">PPC Advertising</h6>
                        <a href="/pages/services/digital-marketing/ppc/google-ads-management.php">Google Ads Management</a>
                        <a href="/pages/services/digital-marketing/ppc/facebook-ads.php">Facebook Ads</a>
                        <a href="/pages/services/digital-marketing/ppc/linkedin-ads.php">LinkedIn Ads</a>
                        <a href="/pages/services/digital-marketing/ppc/remarketing-campaigns.php">Remarketing Campaigns</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Email Marketing</h6>
                        <a href="/pages/services/digital-marketing/email-marketing/email-campaigns.php">Email Campaigns</a>
                        <a href="/pages/services/digital-marketing/email-marketing/newsletter-management.php">Newsletter Management</a>
                        <a href="/pages/services/digital-marketing/email-marketing/automation-sequences.php">Automation Sequences</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Conversion Rate Optimization</h6>
                        <a href="/pages/services/digital-marketing/cro/ab-testing.php">A/B Testing</a>
                        <a href="/pages/services/digital-marketing/cro/landing-page-optimization.php">Landing Page Optimization</a>
                        <a href="/pages/services/digital-marketing/cro/user-experience-analysis.php">User Experience Analysis</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Reputation Management</h6>
                        <a href="/pages/services/digital-marketing/reputation-management/review-management.php">Review Management</a>
                        <a href="/pages/services/digital-marketing/reputation-management/brand-monitoring.php">Brand Monitoring</a>
                        <a href="/pages/services/digital-marketing/reputation-management/crisis-management.php">Crisis Management</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Industry-Specific Marketing</h6>
                        <a href="/pages/services/digital-marketing/industry-specific/healthcare-marketing.php">Healthcare Marketing</a>
                        <a href="/pages/services/digital-marketing/industry-specific/real-estate-marketing.php">Real Estate Marketing</a>
                        <a href="/pages/services/digital-marketing/industry-specific/ecommerce-marketing.php">E-commerce Marketing</a>
                        <a href="/pages/services/digital-marketing/industry-specific/saas-marketing.php">SaaS Marketing</a>
                    </div>
                </div>
                
                <a href="/pages/about.php" class="drawer-item">About Us</a>
                <a href="/pages/blog.php" class="drawer-item">Blog</a>
                <a href="/pages/contact.php" class="drawer-item">Contact</a>
            </nav>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler border-0" type="button" id="drawerToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/index.php">StartupAI</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/index.php">Home</a></li>
                    
                    <!-- Web Design Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Web Design</a>
                        <div class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">UI/UX Design & Prototyping</h6>
                                    <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Wireframing-&-Prototyping.php">Wireframing & Prototyping</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Interface-(UI)-Design.php">UI Design</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Experience-(UX)-Optimization.php">UX Optimization</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Accessibility-&-Usability-Testing.php">Accessibility Testing</a>
                                    
                                    <h6 class="dropdown-header mt-3">Website Redesign & Revamp</h6>
                                    <a class="dropdown-item" href="/pages/services/web-design/Website-Redesign-&-Revamp/Mobile-First-Design.php">Mobile-First Design</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Website-Redesign-&-Revamp/Speed-&-Performance-Optimization.php">Speed Optimization</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Website-Redesign-&-Revamp/Modernizing-Old-Websites.php">Modernizing Old Websites</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">Responsive Design</h6>
                                    <a class="dropdown-item" href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Mobile-UI-UX-Optimization.php">Mobile UI/UX Optimization</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Cross-Browser-Compatibility.php">Cross-Browser Compatibility</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Adaptive-Web-Design.php">Adaptive Web Design</a>
                                    
                                    <h6 class="dropdown-header mt-3">CMS Development</h6>
                                    <a class="dropdown-item" href="/pages/services/web-design/CMS-Based-Website-Development/WordPress-Website-Design.php">WordPress Design</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/CMS-Based-Website-Development/Webflow-Development.php">Webflow Development</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/CMS-Based-Website-Development/Custom-CMS-Solutions.php">Custom CMS Solutions</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">Industry-Specific Design</h6>
                                    <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Healthcare-Websites.php">Healthcare</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Real-Estate-Websites.php">Real Estate</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Finance-Websites.php">Finance</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Education-Websites.php">Education</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Hospitality-Websites.php">Hospitality</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Legal-Websites.php">Legal</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">E-commerce Design</h6>
                                    <a class="dropdown-item" href="/pages/services/web-design/E-commerce-Website-Design/Shopify-Development.php">Shopify Development</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/E-commerce-Website-Design/WooCommerce-Development.php">WooCommerce Development</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/E-commerce-Website-Design/Custom-E-commerce-Solutions.php">Custom E-commerce</a>
                                    
                                    <h6 class="dropdown-header mt-3">Custom Web Design</h6>
                                    <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Business-Websites.php">Business Websites</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Portfolio-Websites.php">Portfolio Websites</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Personal-Blogs.php">Personal Blogs</a>
                                    <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Landing-Pages.php">Landing Pages</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- App Development Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">App Development</a>
                        <div class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Web Application Development</h6>
                                    <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/custom-web-apps.php">Custom Web Applications</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/API-Development-&-Integration.php">API Development & Integration</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/Progressive-Web-Apps.php">Progressive Web Apps</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/E-commerce-Solutions.php">E-commerce Solutions</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/SaaS-Development.php">SaaS Development</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Backend & Database</h6>
                                    <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Database/Database-Design-&-Management.php">Database Design & Management</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Database/DevOps-&-CI-CD.php">DevOps & CI/CD</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Database/Serverless-Architecture.php">Serverless Architecture</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Custom Software Solutions</h6>
                                    <a class="dropdown-item" href="/pages/services/app-development/Custom-Software-Solutions/AI-Powered-Applications.php">AI-Powered Applications</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/Custom-Software-Solutions/CRM-&-ERP-Solutions.php">CRM & ERP Solutions</a>
                                    <a class="dropdown-item" href="/pages/services/app-development/Custom-Software-Solutions/IoT-&-Embedded-Systems.php">IoT & Embedded Systems</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- AI Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">AI Services</a>
                        <div class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Conversational AI</h6>
                                    <a class="dropdown-item" href="/pages/services/ai-services/chatbots-virtual-assistants.php">AI Chatbots & Assistants</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/chatbots/customer-support-bots.php">Customer Support Bots</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/chatbots/sales-bots.php">Conversational Sales Bots</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/chatbots/multilingual-bots.php">Multilingual Chatbots</a>
                                    
                                    <h6 class="dropdown-header mt-3">Business AI</h6>
                                    <a class="dropdown-item" href="/pages/services/ai-services/business-automation.php">Business Automation</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/business-automation/workflow-automation.php">Workflow Automation</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/business-automation/document-processing.php">Document Processing</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/business-automation/predictive-analytics.php">Predictive Analytics</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Language AI</h6>
                                    <a class="dropdown-item" href="/pages/services/ai-services/natural-language-processing.php">Natural Language Processing</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/natural-language-processing/sentiment-analysis.php">Sentiment Analysis</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/natural-language-processing/text-classification.php">Text Classification</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/natural-language-processing/translation-services.php">AI Translation Services</a>
                                    
                                    <h6 class="dropdown-header mt-3">Machine Learning</h6>
                                    <a class="dropdown-item" href="/pages/services/ai-services/machine-learning-solutions.php">Machine Learning Solutions</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/machine-learning/recommendation-systems.php">Recommendation Systems</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/machine-learning/anomaly-detection.php">Anomaly Detection</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/machine-learning/forecasting.php">Predictive Forecasting</a>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="dropdown-header">Advanced AI</h6>
                                    <a class="dropdown-item" href="/pages/services/ai-services/model-training.php">Model Training & Fine-Tuning</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/computer-vision.php">Computer Vision Solutions</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/voice-speech.php">Voice & Speech AI</a>
                                    
                                    <h6 class="dropdown-header mt-3">Industry Solutions</h6>
                                    <a class="dropdown-item" href="/pages/services/ai-services/ai-digital-marketing.php">AI in Digital Marketing</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/industry-applications.php">Industry-Specific AI</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/industry-applications/healthcare-ai.php">Healthcare AI</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/industry-applications/fintech-ai.php">Fintech AI</a>
                                    <a class="dropdown-item" href="/pages/services/ai-services/industry-applications/retail-ai.php">Retail & E-commerce AI</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Digital Marketing Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Digital Marketing</a>
                        <div class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">SEO Services</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/seo/on-page-seo.php">On-Page SEO</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/seo/off-page-seo.php">Off-Page SEO</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/seo/technical-seo.php">Technical SEO</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/seo/local-seo.php">Local SEO</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/seo/ecommerce-seo.php">E-commerce SEO</a>
                                    
                                    <h6 class="dropdown-header mt-3">PPC Advertising</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/ppc/google-ads-management.php">Google Ads Management</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/ppc/facebook-ads.php">Facebook Ads</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/ppc/linkedin-ads.php">LinkedIn Ads</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/ppc/remarketing-campaigns.php">Remarketing</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">Content Marketing</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/content-strategy.php">Content Strategy</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/blogging-services.php">Blogging Services</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/copywriting.php">Copywriting</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/video-marketing.php">Video Marketing</a>
                                    
                                    <h6 class="dropdown-header mt-3">Email Marketing</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/email-marketing/email-campaigns.php">Email Campaigns</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/email-marketing/newsletter-management.php">Newsletter Management</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/email-marketing/automation-sequences.php">Automation Sequences</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">Social Media Marketing</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/social-media-management.php">Social Media Management</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/social-media-advertising.php">Social Media Advertising</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/influencer-marketing.php">Influencer Marketing</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/community-management.php">Community Management</a>
                                    
                                    <h6 class="dropdown-header mt-3">Conversion Optimization</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/cro/ab-testing.php">A/B Testing</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/cro/landing-page-optimization.php">Landing Page Optimization</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/cro/user-experience-analysis.php">UX Analysis</a>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="dropdown-header">Reputation Management</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/reputation-management/review-management.php">Review Management</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/reputation-management/brand-monitoring.php">Brand Monitoring</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/reputation-management/crisis-management.php">Crisis Management</a>
                                    
                                    <h6 class="dropdown-header mt-3">Industry Marketing</h6>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/industry-specific/healthcare-marketing.php">Healthcare Marketing</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/industry-specific/real-estate-marketing.php">Real Estate Marketing</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/industry-specific/ecommerce-marketing.php">E-commerce Marketing</a>
                                    <a class="dropdown-item" href="/pages/services/digital-marketing/industry-specific/saas-marketing.php">SaaS Marketing</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="/pages/about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html> 