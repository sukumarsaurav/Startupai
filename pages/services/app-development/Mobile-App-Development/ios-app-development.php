<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for iOS App Development
$why_hire_us = getWhyHireUsContent('ios-app-development');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">iOS App Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Premium iOS applications built for performance, elegance, and user satisfaction
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
                <img src="/assets/images/services/ios-app-development.svg" alt="iOS App Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Expert iOS App Development Services</h2>
                <p>
                    Our iOS development team creates elegant, high-performing applications for iPhone, iPad, and other Apple devices. We build native iOS apps using Swift and SwiftUI that leverage the full capabilities of Apple's ecosystem. From concept to App Store submission, we ensure your app delivers an exceptional user experience while meeting your business objectives.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Native iOS Development</h5>
                            <p>High-quality apps built with Swift and SwiftUI for optimal performance and integration.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-paint-brush text-primary"></i>
                        </div>
                        <div>
                            <h5>Human Interface Guidelines</h5>
                            <p>Beautiful interfaces that follow Apple's design principles for a consistent experience.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-cloud text-primary"></i>
                        </div>
                        <div>
                            <h5>Apple Ecosystem Integration</h5>
                            <p>Seamless integration with iCloud, Apple Pay, HealthKit, ARKit, and other Apple services.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Security & Privacy</h5>
                            <p>Implementation of Apple's security frameworks and privacy-first approach.</p>
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
                <h2 class="section-title">Our iOS App Development Process</h2>
                <p class="section-description">
                    A methodical approach to creating successful iOS applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-lightbulb fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery</h4>
                    <p>We analyze your business requirements, target audience, and market opportunity to create an app strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>Design</h4>
                    <p>Our designers create intuitive user interfaces following Apple's Human Interface Guidelines.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>We build your app with clean, maintainable Swift code, focusing on performance and user experience.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Launch & Support</h4>
                    <p>We handle App Store submission and provide ongoing maintenance, analytics, and updates.</p>
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
                <h2 class="section-title">Benefits of iOS App Development</h2>
                <p class="section-description">
                    Why businesses choose to invest in iOS applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Premium Audience</h4>
                    <p>iOS users typically have higher engagement rates and spending capacity, making them valuable for monetization strategies.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-palette fa-2x text-primary"></i>
                    </div>
                    <h4>Superior User Experience</h4>
                    <p>Apple's strict design guidelines and high hardware standards ensure a consistent, high-quality user experience.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-lock fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Security</h4>
                    <p>iOS offers advanced security features and a controlled ecosystem that helps protect user data and privacy.</p>
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
                <h2 class="mb-3">Ready to Build Your iOS App?</h2>
                <p class="lead mb-0">
                    Let's create an application that delights users and supports your business objectives.
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
            <h2 class="faq-title">iOS App Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to develop an iOS app?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The development timeline depends on the app's complexity. Simple apps may take 2-3 months, while more complex applications with advanced features can take 4-6 months or longer. After our initial consultation, we'll provide a more accurate timeline based on your specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you develop for iPad and Apple Watch as well?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, we develop applications for the entire Apple ecosystem, including iPhone, iPad, Apple Watch, Apple TV, and Mac. We can create apps specifically for one platform or develop universal apps that work across multiple devices with optimized interfaces for each.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is the App Store submission process like?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The App Store has a rigorous review process to ensure quality and security. We handle all aspects of submission, including app store listing optimization, screenshot preparation, and addressing any review feedback. Typical review takes 1-3 business days, and we work to ensure your app meets all Apple's guidelines to minimize rejection risk.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 