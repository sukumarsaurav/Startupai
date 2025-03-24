<?php
/**
 * Web App Design Service Page
 */

// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('web-app-design');

// Page specific content
$pageTitle = "Web App Design Services";
$pageDescription = "Create powerful, user-friendly web applications with our expert design and development team";
$serviceName = "Web App Design";
$serviceSlug = "web-app-design";

// Include the header
include_once '../../../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="../../../assets/images/services/web-app-design.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Transform Your Business with Custom Web Applications</h2>
                <p class="lead">Powerful web apps that solve complex business challenges and enhance productivity</p>
                <p>Web applications bridge the gap between traditional websites and desktop software, offering the accessibility of the web with the functionality of specialized tools. Our web app design services focus on creating intuitive, scalable, and secure applications that solve specific business problems, streamline workflows, and improve efficiency.</p>
                <p>We specialize in developing custom web applications that integrate with your existing systems and adapt to your unique business requirements. From internal tools for team productivity to customer-facing portals, our experienced designers and developers work together to deliver web applications that balance powerful functionality with exceptional user experience.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> User-centered interface design</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Custom functionality development</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Database integration and management</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Authentication and security features</li>
                        <li><i class="fas fa-check text-primary me-2"></i> API development and integration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php
// Define reasons for hiring us
$reasons = [
    [
        'icon' => 'fas fa-flask',
        'title' => 'User Experience Expertise',
        'description' => 'We design web applications with a focus on intuitive user experience, ensuring your application is easy to use and adoption rates are high.',
        'delay' => 100
    ],
    [
        'icon' => 'fas fa-cogs',
        'title' => 'Technical Excellence',
        'description' => 'Our development team brings expertise in modern frameworks and technologies to build robust, scalable web applications.',
        'delay' => 200
    ],
    [
        'icon' => 'fas fa-shield-alt',
        'title' => 'Security-First Approach',
        'description' => 'We implement industry best practices for security, protecting your data and ensuring compliance with relevant regulations.',
        'delay' => 300
    ],
    [
        'icon' => 'fas fa-rocket',
        'title' => 'Scalable Solutions',
        'description' => 'Our web applications are designed to grow with your business, accommodating increased users and expanded functionality.',
        'delay' => 400
    ]
];
renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Web App Development Process</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Discovery</h3>
                    <p>We analyze your business requirements, user needs, and technical constraints to define the scope of your web application.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3>UX/UI Design</h3>
                    <p>Our designers create intuitive interfaces and user flows that make your web application easy and enjoyable to use.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Development</h3>
                    <p>Our engineers build your application using modern technologies and frameworks, following best practices for clean, maintainable code.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Testing & Launch</h3>
                    <p>We rigorously test your application for functionality, security, and performance before deployment, with ongoing support after launch.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of Custom Web Applications</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-tachometer-alt mb-3 text-primary"></i>
                    <h3>Improved Efficiency</h3>
                    <p>Automate repetitive tasks and streamline workflows to boost productivity and reduce operational costs.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-laptop mb-3 text-primary"></i>
                    <h3>Accessibility</h3>
                    <p>Access your application from any device with an internet connection, enabling remote work and flexibility.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-sync-alt mb-3 text-primary"></i>
                    <h3>Easy Updates</h3>
                    <p>Deploy updates instantly to all users without requiring them to install or download anything.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-puzzle-piece mb-3 text-primary"></i>
                    <h3>Integration Capabilities</h3>
                    <p>Connect with other business systems and third-party services to create a unified workflow.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-chart-bar mb-3 text-primary"></i>
                    <h3>Data Insights</h3>
                    <p>Collect and analyze user data to make informed business decisions and continuously improve your application.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-lock mb-3 text-primary"></i>
                    <h3>Enhanced Security</h3>
                    <p>Implement robust security measures tailored to your specific business needs and compliance requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<?php 
// Include FAQ section
if (function_exists('renderFaqSection')) {
    include_once '../../../includes/faq-section.php';
    renderFaqSection($serviceSlug, $serviceName);
}
?>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-3">Ready to Build Your Custom Web Application?</h2>
                <p class="lead mb-0">Contact us today to discuss how a tailored web app can solve your business challenges.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="../../contact.php" class="btn btn-light btn-lg">Schedule a Consultation</a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../../../components/footer.php';
?> 