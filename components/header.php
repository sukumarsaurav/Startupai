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
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- FAQ CSS -->
    <link rel="stylesheet" href="/assets/css/faq.css">
</head>
<body>
    <!-- Drawer Overlay -->
    <div class="drawer-overlay"></div>
    
    <!-- Side Drawer -->
    <div class="side-drawer">
        <div class="drawer-header">
            <a href="/" class="drawer-logo">StartupAI</a>
            <button class="drawer-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="drawer-body">
            <nav class="drawer-nav">
                <a href="/" class="drawer-item">Home</a>
                <a href="#" class="drawer-item dropdown-toggle">Web Design</a>
                <div class="drawer-submenu">
                    <a href="/services/web-design/responsive-design">Responsive Web Design</a>
                    <a href="/services/web-design/ui-ux-design">UI/UX Design</a>
                    <a href="/services/web-design/figma-design">Figma Design</a>
                    <a href="/services/web-design/wordpress">WordPress</a>
                    <a href="/services/web-design/woocommerce">WooCommerce</a>
                </div>
                <!-- Add other navigation items -->
            </nav>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler border-0" type="button" id="drawerToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">StartupAI</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Web Design</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/services/web-design/ui-ux-design">UI/UX Design</a></li>
                            <li><a class="dropdown-item" href="/services/web-design/figma-design">Figma Design</a></li>
                            <li><a class="dropdown-item" href="/services/web-design/wordpress">WordPress</a></li>
                            <li><a class="dropdown-item" href="/services/web-design/woocommerce">WooCommerce</a></li>
                        </ul>
                    </li>
                    <!-- Add other navigation items -->
                </ul>
            </div>
        </div>
    </nav>
</body>
</html> 