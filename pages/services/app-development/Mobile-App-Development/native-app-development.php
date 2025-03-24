<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Native App Development
$why_hire_us = getWhyHireUsContent('native-app-development');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Native App Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Premium mobile applications built with Kotlin and Swift for optimal performance
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
                <img src="/assets/images/services/native-app-development.svg" alt="Native App Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">True Native Development Experience</h2>
                <p>
                    Our native app development services deliver the highest quality mobile applications with platform-specific development using Kotlin for Android and Swift for iOS. Native development enables unparalleled performance, seamless integration with device features, and exceptional user experiences that take full advantage of each platform's capabilities.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-android text-primary"></i>
                        </div>
                        <div>
                            <h5>Kotlin for Android</h5>
                            <p>Modern, concise language officially supported by Google for Android development.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-apple text-primary"></i>
                        </div>
                        <div>
                            <h5>Swift for iOS</h5>
                            <p>Apple's powerful and intuitive programming language for iOS, macOS, and beyond.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-tachometer-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Optimal Performance</h5>
                            <p>Direct access to device hardware and APIs for maximum speed and responsiveness.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Platform-Specific Excellence</h5>
                            <p>Full adherence to platform guidelines for intuitive user experiences on each device.</p>
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
                <h2 class="section-title">Our Native App Development Process</h2>
                <p class="section-description">
                    A methodical approach to creating high-performance native applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Requirements Analysis</h4>
                    <p>We thoroughly analyze your business needs, target audience, and platform-specific opportunities.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>Platform-Specific Design</h4>
                    <p>Our designers create interfaces that follow platform design guidelines while maintaining brand identity.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Native Development</h4>
                    <p>Our specialized teams build optimized applications using Swift for iOS and Kotlin for Android.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Testing & Deployment</h4>
                    <p>Rigorous platform-specific testing followed by submission to respective app stores.</p>
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
                <h2 class="section-title">Benefits of Native App Development</h2>
                <p class="section-description">
                    Why businesses choose native development for mission-critical applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bolt fa-2x text-primary"></i>
                    </div>
                    <h4>Superior Performance</h4>
                    <p>Native apps deliver faster load times, smoother animations, and better overall responsiveness compared to other approaches.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-puzzle-piece fa-2x text-primary"></i>
                    </div>
                    <h4>Full Feature Access</h4>
                    <p>Direct access to all device capabilities, including cameras, sensors, GPS, and platform-specific features.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-shield fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Security</h4>
                    <p>Native development offers stronger security options and better protection for sensitive user data.</p>
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
                <h2 class="section-title">When To Choose Native Development</h2>
                <p class="section-description">
                    Ideal scenarios for native app implementation
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-gamepad fa-2x text-primary"></i>
                    </div>
                    <h4>High-Performance Applications</h4>
                    <p>Games, AR/VR applications, and graphic-intensive apps that require optimal speed and frame rates.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-fingerprint fa-2x text-primary"></i>
                    </div>
                    <h4>Security-Critical Apps</h4>
                    <p>Financial, healthcare, and enterprise applications where data security is paramount.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-layer-group fa-2x text-primary"></i>
                    </div>
                    <h4>Complex Functionality</h4>
                    <p>Apps requiring deep hardware integration, complex animations, or custom interactions.</p>
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
                <h2 class="mb-3">Ready for a Premium Native App?</h2>
                <p class="lead mb-0">
                    Let's create a high-performance application that fully leverages platform capabilities.
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
            <h2 class="faq-title">Native App Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    When should I choose native over cross-platform development?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Native development is typically the best choice when your app requires maximum performance, deep hardware integration, platform-specific features, or complex animations. It's also preferred for apps with stringent security requirements or when you want to provide the most authentic platform experience. While native development may require more resources initially, it often provides better long-term results for complex or performance-intensive applications.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does native app development take?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Native app development timelines depend on the application's complexity, features, and platforms. Typically, building a native app for a single platform takes 3-6 months from concept to launch. Developing for both iOS and Android simultaneously may require separate specialized teams and parallel development tracks. During our consultation, we'll provide a detailed timeline based on your specific requirements and feature set.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What's the difference between Kotlin and Java for Android development?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Kotlin has become Google's preferred language for Android development, offering several advantages over Java. It's more concise (reducing boilerplate code by approximately 40%), has better null safety features to prevent common runtime crashes, and offers modern programming features like coroutines for asynchronous programming. Kotlin is fully interoperable with Java, making it easy to migrate existing Java codebases gradually. For new Android projects, we recommend Kotlin for its improved safety, readability, and developer productivity.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 