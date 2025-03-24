<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Android App Development
$why_hire_us = getWhyHireUsContent('android-app-development');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Android App Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Custom Android applications built for performance, scalability, and user engagement
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
                <img src="/assets/images/services/android-app-development.svg" alt="Android App Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Professional Android App Development Services</h2>
                <p>
                    Our Android development team creates powerful, feature-rich applications that engage users and drive business growth. We build native Android applications using Kotlin and Java that leverage the full capabilities of the Android platform. From concept to deployment, we ensure your app meets the highest standards of performance, security, and user experience.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Native Android Development</h5>
                            <p>High-performance apps built with Kotlin and Java for optimal device integration.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-paint-brush text-primary"></i>
                        </div>
                        <div>
                            <h5>Material Design Implementation</h5>
                            <p>Beautiful interfaces that follow Google's design guidelines for a consistent experience.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-cloud text-primary"></i>
                        </div>
                        <div>
                            <h5>API Integration</h5>
                            <p>Seamless connectivity with backend systems, third-party services, and databases.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <h5>App Store Optimization</h5>
                            <p>Strategies to improve visibility and conversion rates on Google Play Store.</p>
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
                <h2 class="section-title">Our Android App Development Process</h2>
                <p class="section-description">
                    A methodical approach to creating successful Android applications
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
                    <p>We analyze your business requirements, target audience, and competitors to create an app strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>Design</h4>
                    <p>Our designers create intuitive user interfaces following Material Design principles for a seamless experience.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>We build your app with clean, modular code, focusing on performance and security at every step.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Launch & Support</h4>
                    <p>We handle the Google Play Store submission process and provide ongoing maintenance and updates.</p>
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
                <h2 class="section-title">Benefits of Android App Development</h2>
                <p class="section-description">
                    Why businesses choose to invest in Android applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4>Global Market Reach</h4>
                    <p>Android's worldwide market share gives your app access to billions of potential users across diverse demographics.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>Cost-Effective Development</h4>
                    <p>Android's open-source nature and flexible deployment options can reduce development and maintenance costs.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-cogs fa-2x text-primary"></i>
                    </div>
                    <h4>Customization Flexibility</h4>
                    <p>Android allows for deep customization and integration with device features, providing more options for innovation.</p>
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
                <h2 class="mb-3">Ready to Build Your Android App?</h2>
                <p class="lead mb-0">
                    Let's create an application that engages users and drives your business forward.
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
            <h2 class="faq-title">Android App Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to develop an Android app?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The development timeline depends on the app's complexity. Simple apps may take 2-3 months, while more complex applications with advanced features can take 4-6 months or longer. During our initial consultation, we'll provide a more accurate timeline based on your specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Do you build apps with Kotlin or Java?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We primarily use Kotlin for new Android app development as it's Google's preferred language, offering improved safety, conciseness, and interoperability with Java. However, we're also experienced with Java and can work with it if your project requires it or if you have an existing Java codebase.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you ensure app security?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We implement multiple layers of security, including secure authentication, data encryption, secure network communication (HTTPS/SSL), code obfuscation, and regular security audits. We follow Android security best practices and stay updated with the latest security vulnerabilities and patches.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 