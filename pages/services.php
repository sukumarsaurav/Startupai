<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Our Services - StartupAI';
$pageDescription = 'Explore our comprehensive range of services including web development, app development, AI solutions, and digital marketing';
$pageKeywords = 'web development, app development, AI solutions, digital marketing, web design, SEO';

// Include header
include_once '../components/header.php';
?>

<!-- Page Header -->
<div class="page-header bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="fw-bold">Our Services</h1>
                <p class="lead">We provide a comprehensive range of technology solutions tailored to your business needs</p>
            </div>
        </div>
    </div>
</div>

<!-- Services Overview -->
<section class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fw-bold mb-3">Comprehensive Solutions for Modern Businesses</h2>
                <p class="lead">We combine cutting-edge technology with strategic thinking to deliver solutions that drive growth and innovation for your business.</p>
            </div>
        </div>

        <!-- Service Categories -->
        <div class="row g-4">
            <!-- Web Design -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="fas fa-desktop fa-3x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Web Design</h3>
                        <p class="card-text">Beautiful, responsive websites that convert visitors into customers.</p>
                        <div class="mt-4">
                            <a href="/pages/services/web-design/ui-ux-design.php" class="btn btn-sm btn-outline-primary">UI/UX Design</a>
                            <a href="/pages/services/web-design/figma-design.php" class="btn btn-sm btn-outline-primary mt-2">Figma Design</a>
                            <a href="/pages/services/web-design/xd-design.php" class="btn btn-sm btn-outline-primary mt-2">XD Design</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- App Development -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">App Development</h3>
                        <p class="card-text">Custom web applications and content management systems.</p>
                        <div class="mt-4">
                            <a href="/pages/services/app-development/wordpress.php" class="btn btn-sm btn-outline-primary">WordPress</a>
                            <a href="/pages/services/app-development/woocommerce.php" class="btn btn-sm btn-outline-primary mt-2">WooCommerce</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Services -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="fas fa-robot fa-3x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">AI Solutions</h3>
                        <p class="card-text">Cutting-edge artificial intelligence solutions to automate and enhance your business.</p>
                        <div class="mt-4">
                            <a href="/pages/services/ai-services/chatbots-virtual-assistants.php" class="btn btn-sm btn-outline-primary">AI Chatbots</a>
                            <a href="/pages/services/ai-services/machine-learning-solutions.php" class="btn btn-sm btn-outline-primary mt-2">Machine Learning</a>
                            <a href="/pages/services/ai-services/computer-vision.php" class="btn btn-sm btn-outline-primary mt-2">Computer Vision</a>
                            <a href="/pages/services/ai-services/model-training.php" class="btn btn-sm btn-outline-primary mt-2">AI Model Training</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body text-center p-4">
                        <div class="icon-box mb-4">
                            <i class="fas fa-chart-line fa-3x text-primary"></i>
                        </div>
                        <h3 class="h4 mb-3">Digital Marketing</h3>
                        <p class="card-text">Strategic digital marketing to increase your visibility and drive conversions.</p>
                        <div class="mt-4">
                            <a href="/pages/services/digital-marketing/seo.php" class="btn btn-sm btn-outline-primary">SEO</a>
                            <a href="/pages/services/digital-marketing/google-ads.php" class="btn btn-sm btn-outline-primary mt-2">Google Ads</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fw-bold mb-4">Ready to Transform Your Business?</h2>
                <p class="lead mb-4">Contact us today for a free consultation and let us help you achieve your business goals.</p>
                <a href="/pages/contact.php" class="btn btn-primary btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../components/footer.php';
?> 