<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Progressive Web Apps
$why_hire_us = getWhyHireUsContent('progressive-web-apps');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Progressive Web Apps (PWA)</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Combine the best of web and mobile app experiences with cutting-edge PWA technology
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Service Overview -->
<section class="service-overview py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="/assets/images/services/progressive-web-apps.svg" alt="Progressive Web Apps" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Progressive Web App Development Services</h2>
                <p>
                    Our Progressive Web App (PWA) development services enable businesses to deliver app-like experiences through the web. PWAs combine the reach of websites with the functionality of native mobile applications, offering fast loading times, offline capabilities, and engaging user experiences across all devices without the hassle of app store installations.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-bolt text-primary"></i>
                        </div>
                        <div>
                            <h5>Lightning-Fast Performance</h5>
                            <p>Optimized loading speeds and smooth interactions even on slow networks.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-wifi-slash text-primary"></i>
                        </div>
                        <div>
                            <h5>Offline Functionality</h5>
                            <p>Continues to work with limited or no internet connection using service workers.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Device Integration</h5>
                            <p>Access to device features like camera, geolocation, and push notifications.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-download text-primary"></i>
                        </div>
                        <div>
                            <h5>Installable Experience</h5>
                            <p>Users can add your PWA to their home screen without app store friction.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

<!-- Process -->
<section class="process-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our PWA Development Process</h2>
                <p class="section-description">
                    A comprehensive approach to building engaging Progressive Web Apps
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery & Planning</h4>
                    <p>We analyze your requirements and define the PWA's features, user flow, and technical architecture.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>UI/UX Design</h4>
                    <p>We create intuitive and responsive interfaces that work seamlessly across all devices.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build the PWA using modern frameworks and implement progressive enhancement features.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Testing & Deployment</h4>
                    <p>We thoroughly test across devices and network conditions before optimizing for production.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Progressive Web Apps</h2>
                <p class="section-description">
                    Why PWAs are transforming digital experiences for businesses
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4>Wider Reach</h4>
                    <p>Accessible to anyone with a web browser, eliminating the barrier of app store downloads.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>Cost-Effective</h4>
                    <p>Single codebase for all platforms reduces development and maintenance costs compared to native apps.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>SEO Friendly</h4>
                    <p>Discoverable through search engines, increasing organic traffic and user acquisition.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-sync-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Easy Updates</h4>
                    <p>Updates are immediately available to all users without app store approval processes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Improved Conversion</h4>
                    <p>Faster loading times and smoother experiences lead to higher engagement and conversion rates.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bell fa-2x text-primary"></i>
                    </div>
                    <h4>Re-Engagement</h4>
                    <p>Push notifications keep users engaged even when they're not actively using your app.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="use-cases-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">PWA Use Cases</h2>
                <p class="section-description">
                    Industries and applications where PWAs excel
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                    </div>
                    <h4>E-commerce</h4>
                    <p>Fast-loading product catalogs, offline browsing, and seamless checkout experiences that boost conversion rates.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-newspaper fa-2x text-primary"></i>
                    </div>
                    <h4>Media & Publishing</h4>
                    <p>Offline reading capabilities, push notifications for breaking news, and improved content engagement.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-briefcase fa-2x text-primary"></i>
                    </div>
                    <h4>Enterprise Tools</h4>
                    <p>Internal business applications with offline functionality and secure authentication.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="mb-3">Ready to Build Your Progressive Web App?</h2>
                <p class="lead mb-0">
                    Let's create a fast, engaging, and accessible digital experience for your users.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-header">
            <h2 class="faq-title">Progressive Web Apps FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What makes a Progressive Web App different from a regular website?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Progressive Web Apps differ from traditional websites in several key ways: they work offline or with poor connectivity, can be installed on users' home screens, offer app-like navigation and interactions, support push notifications, and provide full-screen experiences without browser UI. PWAs use modern web capabilities to deliver experiences that look and feel like native applications while maintaining the broad reach of web technologies.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Are Progressive Web Apps supported on all browsers and devices?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>PWAs are supported by all major modern browsers including Chrome, Firefox, Safari, Edge, and Opera across desktop and mobile devices. While core functionality works everywhere, some features like push notifications and home screen installation have varying levels of support across browsers. We build PWAs with a progressive enhancement approach, ensuring that all users get a great experience regardless of their browser, with advanced features available where supported.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Should I choose a Progressive Web App over a native mobile app?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The choice between PWAs and native apps depends on your specific business needs. PWAs are ideal when you want to reach the widest audience possible, have budget constraints, need faster development cycles, or want to maintain a single codebase. Native apps may be better when you need deep integration with device features, maximum performance for graphics-intensive applications, or if your app store presence is critical to your business model. Many businesses choose PWAs as their initial approach and later develop native apps for specific use cases if needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
