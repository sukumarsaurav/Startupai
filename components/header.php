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
            <a href="index.html" class="drawer-logo">StartupAI</a>
            <button class="drawer-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="drawer-body">
            <nav class="drawer-nav">
                <a href="index.html" class="drawer-item active">Home</a>
                <a href="#" class="drawer-item dropdown-toggle">Web Design</a>
                <div class="drawer-submenu">
                    <a href="pages/services/web-design/responsive-design.html">Responsive Web Design</a>
                    <a href="pages/services/web-design/ui-ux-design.html">UI/UX Design</a>
                    <a href="pages/services/web-design/e-commerce-design.html">Ecommerce Design</a>
                    <a href="pages/services/web-design/figma-design.html">Figma Design</a>
                    <a href="pages/services/web-design/wordpress.html">WordPress</a>
                    <a href="pages/services/web-design/woocommerce.html">WooCommerce</a>
                </div>
                <a href="#" class="drawer-item dropdown-toggle">App Development</a>
                <div class="drawer-submenu">
                    <a href="pages/services/app-development/react-development.html">React Development</a>
                    <a href="pages/services/app-development/nextjs-development.html">Next.js Development</a>
                    <a href="pages/services/app-development/react-native.html">React Native</a>
                    <a href="pages/services/app-development/flutter-development.html">Flutter Development</a>
                    <a href="pages/services/app-development/kotlin-development.html">Android Development (Kotlin)</a>
                    <a href="pages/services/app-development/swift-development.html">iOS Development (Swift)</a>
                </div>
                <a href="#" class="drawer-item dropdown-toggle">AI Services</a>
                <div class="drawer-submenu">
                    <a href="pages/services/ai-services/ai-chatbot.html">AI Chatbot</a>
                    <a href="pages/services/ai-services/machine-learning.html">Machine Learning</a>
                    <a href="pages/services/ai-services/ai-agent.html">AI Agent</a>
                    <a href="pages/services/ai-services/voice-agent.html">Voice Agent</a>
                </div>
                <a href="#" class="drawer-item dropdown-toggle">Digital Marketing</a>
                <div class="drawer-submenu">
                    <a href="pages/services/digital-marketing/seo.html">SEO</a>
                    <a href="pages/services/digital-marketing/content-marketing.html">Content Marketing</a>
                    <a href="pages/services/digital-marketing/social-media.html">Social Media Marketing</a>
                    <a href="pages/services/digital-marketing/email-marketing.html">Email Marketing</a>
                    <a href="pages/services/digital-marketing/google-ads.html">Google Ads</a>
                </div>
                <a href="pages/about.html" class="drawer-item">About Us</a>
                <a href="pages/blog/index.html" class="drawer-item">Blog</a>
                <a href="pages/contact.html" class="drawer-item">Contact</a>
            </nav>
        </div>
    </div>

    <!-- Navigation -->
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler border-0" type="button" id="drawerToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">StartupAI</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Web Design</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/services/web-design/responsive-design.html">Responsive Web Design</a></li>
                            <li><a class="dropdown-item" href="pages/services/web-design/ui-ux-design.html">UI/UX Design</a></li>
                            <li><a class="dropdown-item" href="pages/services/web-design/e-commerce-design.html">Ecommerce Design</a></li>
                            <li><a class="dropdown-item" href="pages/services/web-design/figma-design.html">Figma Design</a></li>
                            <li><a class="dropdown-item" href="pages/services/web-design/wordpress.html">WordPress</a></li>
                            <li><a class="dropdown-item" href="pages/services/web-design/woocommerce.html">WooCommerce</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">App Development</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/services/app-development/react-development.html">React Development</a></li>
                            <li><a class="dropdown-item" href="pages/services/app-development/nextjs-development.html">Next.js Development</a></li>
                            <li><a class="dropdown-item" href="pages/services/app-development/react-native.html">React Native</a></li>
                            <li><a class="dropdown-item" href="pages/services/app-development/flutter-development.html">Flutter Development</a></li>
                            <li><a class="dropdown-item" href="pages/services/app-development/kotlin-development.html">Android Development (Kotlin)</a></li>
                            <li><a class="dropdown-item" href="pages/services/app-development/swift-development.html">iOS Development (Swift)</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">AI Services</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/services/ai-services/ai-chatbot.html">AI Chatbots</a></li>
                            <li><a class="dropdown-item" href="pages/services/ai-services/machine-learning.html">Machine Learning</a></li>
                            <li><a class="dropdown-item" href="pages/services/ai-services/ai-agent.html">AI Agent</a></li>
                            <li><a class="dropdown-item" href="pages/services/ai-services/voice-agent.html">Voice Agent</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Digital Marketing</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/services/digital-marketing/seo.html">SEO Services</a></li>
                            <li><a class="dropdown-item" href="pages/services/digital-marketing/social-media.html">Social Media Marketing</a></li>
                            <li><a class="dropdown-item" href="pages/services/digital-marketing/content-marketing.html">Content Marketing</a></li>
                            <li><a class="dropdown-item" href="pages/services/digital-marketing/email-marketing.html">Email Marketing</a></li>
                            <li><a class="dropdown-item" href="pages/services/digital-marketing/google-ads.html">Google Ads</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/contact.html">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-2" href="pages/quote.html">Get Quote</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html> 