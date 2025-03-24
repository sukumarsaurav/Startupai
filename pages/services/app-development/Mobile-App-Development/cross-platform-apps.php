<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Cross-Platform Apps
$why_hire_us = getWhyHireUsContent('cross-platform-apps');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Cross-Platform App Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Build once, deploy everywhere with Flutter and React Native solutions
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
                <img src="/assets/images/services/cross-platform-apps.svg" alt="Cross-Platform App Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Efficient Cross-Platform Development</h2>
                <p>
                    Our cross-platform app development services allow you to reach both iOS and Android users with a single codebase, saving time and development costs. We utilize cutting-edge frameworks like Flutter and React Native to create high-performance applications that deliver a near-native experience while maintaining consistent functionality across platforms.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Flutter Development</h5>
                            <p>Beautiful, natively compiled applications built with Google's UI toolkit for any screen.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fab fa-react text-primary"></i>
                        </div>
                        <div>
                            <h5>React Native Solutions</h5>
                            <p>High-performance apps with native UI components using Facebook's popular framework.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-sync text-primary"></i>
                        </div>
                        <div>
                            <h5>Code Reusability</h5>
                            <p>Shared codebase across platforms for faster development and consistent user experience.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-clock text-primary"></i>
                        </div>
                        <div>
                            <h5>Rapid Development</h5>
                            <p>Shorter time-to-market with hot reload features and efficient development workflows.</p>
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
                <h2 class="section-title">Our Cross-Platform Development Process</h2>
                <p class="section-description">
                    A systematic approach to building efficient multi-platform applications
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
                    <p>We analyze your business requirements and determine the optimal cross-platform strategy and framework choice.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>UI/UX Design</h4>
                    <p>Our designers create beautiful interfaces that respect platform guidelines while maintaining brand consistency.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>We build your application with clean, maintainable code and robust architecture for both platforms.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Testing & Deployment</h4>
                    <p>Thorough cross-platform testing followed by deployment to both App Store and Google Play.</p>
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
                <h2 class="section-title">Benefits of Cross-Platform Development</h2>
                <p class="section-description">
                    Why businesses choose cross-platform for their mobile app strategy
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>Cost Efficiency</h4>
                    <p>Significantly reduced development and maintenance costs compared to building separate native applications.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Faster Time-to-Market</h4>
                    <p>Simultaneous development for multiple platforms means your app reaches users more quickly.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Wider Audience Reach</h4>
                    <p>Launch on both major platforms at once to maximize your potential user base from day one.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="technologies-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Cross-Platform Frameworks We Excel In</h2>
                <p class="section-description">
                    Cutting-edge technologies for efficient multi-platform development
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="tech-icon mb-3">
                        <i class="fas fa-feather-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Flutter</h4>
                    <p>Google's UI toolkit for building natively compiled applications with expressive, beautiful UIs. Flutter offers exceptional performance with a rich set of customizable widgets and a hot reload feature that accelerates development.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="tech-icon mb-3">
                        <i class="fab fa-react fa-2x text-primary"></i>
                    </div>
                    <h4>React Native</h4>
                    <p>Facebook's framework that combines the best parts of native development with React's powerful JavaScript library. React Native allows for building applications with a native feel using JavaScript and accessing platform-specific APIs when needed.</p>
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
                <h2 class="mb-3">Ready to Launch on Multiple Platforms?</h2>
                <p class="lead mb-0">
                    Let's build your cross-platform app and reach more users with less development time.
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
            <h2 class="faq-title">Cross-Platform App Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    Is Flutter or React Native better for my app?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Both frameworks have their strengths. Flutter excels in UI consistency and performance with its compiled code and widget library. React Native is great if you already have React expertise or need deeper integration with native modules. During our consultation, we'll evaluate your specific needs, performance requirements, and team expertise to recommend the best framework for your project.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Will my cross-platform app look and feel like a native app?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Modern cross-platform frameworks like Flutter and React Native can deliver experiences that are nearly indistinguishable from native apps for most use cases. They provide access to native UI components and device features, allowing us to create responsive, smooth applications that adhere to platform-specific design guidelines. For extremely performance-intensive applications like 3D games, native development might still have an edge.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How much can I save with cross-platform development?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Cross-platform development typically reduces development costs by 30-40% compared to building separate native apps for iOS and Android. This efficiency comes from maintaining a single codebase, streamlined testing processes, and simplified maintenance and updates. The exact savings depend on your application's complexity and the extent of platform-specific customizations required.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 