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
                    <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Wireframing-&-Prototyping.php">Wireframing & Prototyping</a>
                    <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Interface-(UI)-Design.php">User Interface (UI) Design</a>
                    <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Experience-(UX)-Optimization.php">User Experience (UX) Optimization</a>
                    <a href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Accessibility-&-Usability-Testing.php">Accessibility & Usability Testing</a>
                    
                    <a href="/pages/services/web-design/Website-Redesign-&-Revamp/Mobile-First-Design.php">Mobile-First Design</a>
                    <a href="/pages/services/web-design/Website-Redesign-&-Revamp/Speed-&-Performance-Optimization.php">Speed & Performance Optimization</a>
                    <a href="/pages/services/web-design/Website-Redesign-&-Revamp/Modernizing-Old-Websites.php">Modernizing Old Websites</a>
                    
                    <a href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Mobile-UI-UX-Optimization.php">Mobile UI/UX Optimization</a>
                    <a href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Cross-Browser-Compatibility.php">Cross-Browser Compatibility</a>
                    <a href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Adaptive-Web-Design.php">Adaptive Web Design</a>
                    
                    <a href="/pages/services/web-design/CMS-Based-Website-Development/WordPress-Website-Design.php">WordPress Website Design</a>
                    <a href="/pages/services/web-design/CMS-Based-Website-Development/Webflow-Development.php">Webflow Development</a>
                    <a href="/pages/services/web-design/CMS-Based-Website-Development/Custom-CMS-Solutions.php">Custom CMS Solutions</a>
                    
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Healthcare-Websites.php">Healthcare Websites</a>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Real-Estate-Websites.php">Real Estate Websites</a>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Finance-Websites.php">Finance Websites</a>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Education-Websites.php">Education Websites</a>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Hospitality-Websites.php">Hospitality Websites</a>
                    <a href="/pages/services/web-design/Industry-Specific-Website-Design/Legal-Websites.php">Legal Websites</a>
                    
                    <a href="/pages/services/web-design/E-commerce-Website-Design/Shopify-Development.php">Shopify Development</a>
                    <a href="/pages/services/web-design/E-commerce-Website-Design/WooCommerce-Development.php">WooCommerce Development</a>
                    <a href="/pages/services/web-design/E-commerce-Website-Design/Custom-E-commerce-Solutions.php">Custom E-commerce Solutions</a>
                    
                    <a href="/pages/services/web-design/Custom-Website-Design/Business-Websites.php">Business Websites</a>
                    <a href="/pages/services/web-design/Custom-Website-Design/Portfolio-Websites.php">Portfolio Websites</a>
                    <a href="/pages/services/web-design/Custom-Website-Design/Personal-Blogs.php">Personal Blogs</a>
                    <a href="/pages/services/web-design/Custom-Website-Design/Landing-Pages.php">Landing Pages</a>
                </div>
                
                <!-- App Development -->
                <a href="#" class="drawer-item dropdown-toggle">App Development</a>
                <div class="drawer-submenu">
                    <a href="/pages/services/app-development/web-application-devlopment/custom-web-apps.php">Custom Web Apps</a>
                    <a href="/pages/services/app-development/web-application-devlopment/API-Development-&-Integration.php">API Development & Integration</a>
                    <a href="/pages/services/app-development/web-application-devlopment/Progressive-Web-Apps.php">Progressive Web Apps</a>
                    <a href="/pages/services/app-development/web-application-devlopment/E-commerce-Solutions.php">E-commerce Solutions</a>
                    <a href="/pages/services/app-development/web-application-devlopment/SaaS-Development.php">SaaS Development</a>
                    
                    <a href="/pages/services/app-development/Backend-&-Database/Database-Design-&-Management.php">Database Design & Management</a>
                    <a href="/pages/services/app-development/Backend-&-Database/DevOps-&-CI-CD.php">DevOps & CI/CD</a>
                    <a href="/pages/services/app-development/Backend-&-Database/Serverless-Architecture.php">Serverless Architecture</a>
                    
                    <a href="/pages/services/app-development/Custom-Software-Solutions/AI-Powered-Applications.php">AI-Powered Applications</a>
                    <a href="/pages/services/app-development/Custom-Software-Solutions/CRM-&-ERP-Solutions.php">CRM & ERP Solutions</a>
                    <a href="/pages/services/app-development/Custom-Software-Solutions/IoT-&-Embedded-Systems.php">IoT & Embedded Systems</a>
                </div>
                
                <!-- AI Services -->
                <a href="#" class="drawer-item dropdown-toggle">AI Services</a>
                <div class="drawer-submenu">
                    <a href="/pages/services/ai-services/chatbots-virtual-assistants.php">AI-Powered Chatbots & Virtual Assistants</a>
                    <a href="/pages/services/ai-services/business-automation.php">AI for Business Automation</a>
                    <a href="/pages/services/ai-services/natural-language-processing.php">Natural Language Processing (NLP)</a>
                    <a href="/pages/services/ai-services/machine-learning-solutions.php">AI & Machine Learning Solutions</a>
                    <a href="/pages/services/ai-services/model-training.php">AI Model Training & Fine-Tuning</a>
                    <a href="/pages/services/ai-services/computer-vision.php">Computer Vision Solutions</a>
                    <a href="/pages/services/ai-services/voice-speech.php">Voice & Speech AI Solutions</a>
                    <a href="/pages/services/ai-services/ai-digital-marketing.php">AI in Digital Marketing</a>
                    <a href="/pages/services/ai-services/industry-applications.php">AI for Industry-Specific Applications</a>
                </div>
                
                <!-- Digital Marketing -->
                <a href="#" class="drawer-item dropdown-toggle">Digital Marketing</a>
                <div class="drawer-submenu">
                    <a href="/pages/services/digital-marketing/seo.php">SEO</a>
                    <a href="/pages/services/digital-marketing/content-marketing.php">Content Marketing</a>
                    <a href="/pages/services/digital-marketing/social-media.php">Social Media Marketing</a>
                    <a href="/pages/services/digital-marketing/email-marketing.php">Email Marketing</a>
                    <a href="/pages/services/digital-marketing/google-ads.php">Google Ads</a>
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
                        <ul class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <li>
                                        <h6 class="dropdown-header">UI/UX Design & Prototyping</h6>
                                        <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Wireframing-&-Prototyping.php">Wireframing & Prototyping</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Interface-(UI)-Design.php">UI Design</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/User-Experience-(UX)-Optimization.php">UX Optimization</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/UI-UX-Design-&-Prototyping/Accessibility-&-Usability-Testing.php">Accessibility Testing</a>
                                    </li>
                                    <li>
                                        <h6 class="dropdown-header">Website Redesign & Revamp</h6>
                                        <a class="dropdown-item" href="/pages/services/web-design/Website-Redesign-&-Revamp/Mobile-First-Design.php">Mobile-First Design</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Website-Redesign-&-Revamp/Speed-&-Performance-Optimization.php">Speed Optimization</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Website-Redesign-&-Revamp/Modernizing-Old-Websites.php">Modernizing Old Websites</a>
                                    </li>
                                </div>
                                <div class="col-md-3">
                                    <li>
                                        <h6 class="dropdown-header">Responsive Design</h6>
                                        <a class="dropdown-item" href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Mobile-UI-UX-Optimization.php">Mobile UI/UX Optimization</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Cross-Browser-Compatibility.php">Cross-Browser Compatibility</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Responsive-&-Mobile-Friendly-Design/Adaptive-Web-Design.php">Adaptive Web Design</a>
                                    </li>
                                    <li>
                                        <h6 class="dropdown-header">CMS Development</h6>
                                        <a class="dropdown-item" href="/pages/services/web-design/CMS-Based-Website-Development/WordPress-Website-Design.php">WordPress Design</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/CMS-Based-Website-Development/Webflow-Development.php">Webflow Development</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/CMS-Based-Website-Development/Custom-CMS-Solutions.php">Custom CMS Solutions</a>
                                    </li>
                                </div>
                                <div class="col-md-3">
                                    <li>
                                        <h6 class="dropdown-header">Industry-Specific Design</h6>
                                        <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Healthcare-Websites.php">Healthcare</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Real-Estate-Websites.php">Real Estate</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Finance-Websites.php">Finance</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Education-Websites.php">Education</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Hospitality-Websites.php">Hospitality</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website-Design/Legal-Websites.php">Legal</a>
                                    </li>
                                </div>
                                <div class="col-md-3">
                                    <li>
                                        <h6 class="dropdown-header">E-commerce Design</h6>
                                        <a class="dropdown-item" href="/pages/services/web-design/E-commerce-Website-Design/Shopify-Development.php">Shopify Development</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/E-commerce-Website-Design/WooCommerce-Development.php">WooCommerce Development</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/E-commerce-Website-Design/Custom-E-commerce-Solutions.php">Custom E-commerce</a>
                                    </li>
                                    <li>
                                        <h6 class="dropdown-header">Custom Web Design</h6>
                                        <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Business-Websites.php">Business Websites</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Portfolio-Websites.php">Portfolio Websites</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Personal-Blogs.php">Personal Blogs</a>
                                        <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Design/Landing-Pages.php">Landing Pages</a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    
                    <!-- App Development Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">App Development</a>
                        <ul class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <li>
                                        <h6 class="dropdown-header">Web Application Development</h6>
                                        <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/custom-web-apps.php">Custom Web Applications</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/API-Development-&-Integration.php">API Development & Integration</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/Progressive-Web-Apps.php">Progressive Web Apps</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/E-commerce-Solutions.php">E-commerce Solutions</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/web-application-devlopment/SaaS-Development.php">SaaS Development</a>
                                    </li>
                                </div>
                                <div class="col-md-4">
                                    <li>
                                        <h6 class="dropdown-header">Backend & Database</h6>
                                        <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Database/Database-Design-&-Management.php">Database Design & Management</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Database/DevOps-&-CI-CD.php">DevOps & CI/CD</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Database/Serverless-Architecture.php">Serverless Architecture</a>
                                    </li>
                                </div>
                                <div class="col-md-4">
                                    <li>
                                        <h6 class="dropdown-header">Custom Software Solutions</h6>
                                        <a class="dropdown-item" href="/pages/services/app-development/Custom-Software-Solutions/AI-Powered-Applications.php">AI-Powered Applications</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/Custom-Software-Solutions/CRM-&-ERP-Solutions.php">CRM & ERP Solutions</a>
                                        <a class="dropdown-item" href="/pages/services/app-development/Custom-Software-Solutions/IoT-&-Embedded-Systems.php">IoT & Embedded Systems</a>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    
                    <!-- AI Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">AI Services</a>
                        <ul class="dropdown-menu mega-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <li>
                                        <h6 class="dropdown-header">Chatbots & Automation</h6>
                                        <a class="dropdown-item" href="/pages/services/ai-services/chatbots-virtual-assistants.php">AI-Powered Chatbots & Virtual Assistants</a>
                                        <ul class="submenu">
                                            <li><a href="/pages/services/ai-services/chatbots-virtual-assistants.php#custom">Custom Chatbot Development</a></li>
                                            <li><a href="/pages/services/ai-services/chatbots-virtual-assistants.php#support">AI Agents for Customer Support</a></li>
                                            <li><a href="/pages/services/ai-services/chatbots-virtual-assistants.php#multilingual">Multilingual Chatbots</a></li>
                                            <li><a href="/pages/services/ai-services/chatbots-virtual-assistants.php#platforms">WhatsApp, Messenger & Website Chatbots</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/services/ai-services/business-automation.php">AI for Business Automation</a>
                                        <ul class="submenu">
                                            <li><a href="/pages/services/ai-services/business-automation.php#workflow">Workflow Automation</a></li>
                                            <li><a href="/pages/services/ai-services/business-automation.php#data">AI-Powered Data Processing</a></li>
                                            <li><a href="/pages/services/ai-services/business-automation.php#crm">Intelligent CRM & ERP Integration</a></li>
                                            <li><a href="/pages/services/ai-services/business-automation.php#document">AI-Based Document Processing</a></li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="col-md-4">
                                    <li>
                                        <h6 class="dropdown-header">Language & Learning</h6>
                                        <a class="dropdown-item" href="/pages/services/ai-services/natural-language-processing.php">Natural Language Processing (NLP)</a>
                                        <ul class="submenu">
                                            <li><a href="/pages/services/ai-services/natural-language-processing.php#sentiment">Sentiment Analysis</a></li>
                                            <li><a href="/pages/services/ai-services/natural-language-processing.php#text">Text Summarization & Classification</a></li>
                                            <li><a href="/pages/services/ai-services/natural-language-processing.php#search">AI-Powered Search & Recommendations</a></li>
                                            <li><a href="/pages/services/ai-services/natural-language-processing.php#speech">Speech-to-Text & Text-to-Speech</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/pages/services/ai-services/machine-learning-solutions.php">AI & Machine Learning Solutions</a>
                                        <ul class="submenu">
                                            <li><a href="/pages/services/ai-services/machine-learning-solutions.php#predictive">Predictive Analytics & Forecasting</a></li>
                                            <li><a href="/pages/services/ai-services/machine-learning-solutions.php#recommendation">AI-Based Recommendation Systems</a></li>
                                            <li><a href="/pages/services/ai-services/machine-learning-solutions.php#fraud">Fraud Detection & Risk Management</a></li>
                                            <li><a href="/pages/services/ai-services/machine-learning-solutions.php#financial">AI for Financial Analysis</a></li>
                                        </ul>
                                    </li>
                                </div>
                                <div class="col-md-4">
                                    <li>
                                        <h6 class="dropdown-header">Specialized Applications</h6>
                                        <a class="dropdown-item" href="/pages/services/ai-services/model-training.php">AI Model Training & Fine-Tuning</a>
                                        <a class="dropdown-item" href="/pages/services/ai-services/computer-vision.php">Computer Vision Solutions</a>
                                        <a class="dropdown-item" href="/pages/services/ai-services/voice-speech.php">Voice & Speech AI Solutions</a>
                                        <a class="dropdown-item" href="/pages/services/ai-services/ai-digital-marketing.php">AI in Digital Marketing</a>
                                        <a class="dropdown-item" href="/pages/services/ai-services/industry-applications.php">Industry-Specific AI Applications</a>
                                        <ul class="submenu">
                                            <li><a href="/pages/services/ai-services/industry-applications.php#healthcare">Healthcare AI</a></li>
                                            <li><a href="/pages/services/ai-services/industry-applications.php#ecommerce">E-commerce AI</a></li>
                                            <li><a href="/pages/services/ai-services/industry-applications.php#finance">Finance & Banking AI</a></li>
                                            <li><a href="/pages/services/ai-services/industry-applications.php#realestate">Real Estate AI</a></li>
                                            <li><a href="/pages/services/ai-services/industry-applications.php#education">Education AI</a></li>
                                        </ul>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    
                    <!-- Digital Marketing Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Digital Marketing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/pages/services/digital-marketing/seo.php">SEO Services</a></li>
                            <li><a class="dropdown-item" href="/pages/services/digital-marketing/social-media.php">Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing.php">Content Marketing</a></li>
                            <li><a class="dropdown-item" href="/pages/services/digital-marketing/email-marketing.php">Email Marketing</a></li>
                            <li><a class="dropdown-item" href="/pages/services/digital-marketing/google-ads.php">Google Ads</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item"><a class="nav-link" href="/pages/about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/contact.php">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-2" href="/pages/contact.php#quote">Get Quote</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html> 