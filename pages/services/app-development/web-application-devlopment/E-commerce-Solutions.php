<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for E-commerce Solutions
$why_hire_us = getWhyHireUsContent('e-commerce-solutions');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">E-commerce Solutions</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Custom online store development to drive sales and grow your digital business
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
                <img src="/assets/images/services/e-commerce-solutions.svg" alt="E-commerce Solutions" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">E-commerce Development Services</h2>
                <p>
                    Our e-commerce development services help businesses create robust, scalable, and conversion-optimized online stores. Whether you're launching a new brand, migrating from an existing platform, or enhancing your current store, we deliver tailored e-commerce solutions that drive sales, improve customer experiences, and streamline your operations.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-store text-primary"></i>
                        </div>
                        <div>
                            <h5>Custom Store Development</h5>
                            <p>Tailor-made online stores built with your unique business requirements in mind.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Responsive Design</h5>
                            <p>Mobile-first approaches ensuring seamless shopping experiences across all devices.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                        </div>
                        <div>
                            <h5>Payment Integration</h5>
                            <p>Secure payment gateways and multiple payment options to enhance conversion rates.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <h5>Analytics & Optimization</h5>
                            <p>Data-driven insights to optimize customer journeys and increase sales.</p>
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
                <h2 class="section-title">Our E-commerce Development Process</h2>
                <p class="section-description">
                    A systematic approach to building successful online stores
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
                    <p>We analyze your business model, target audience, and product catalog to create a tailored e-commerce strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>Design & Prototyping</h4>
                    <p>We create intuitive user interfaces and seamless checkout flows designed to maximize conversions.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build your store with secure payment processing, inventory management, and other essential features.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Testing & Launch</h4>
                    <p>We thoroughly test all store functionality and optimize for performance before going live.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platforms -->
<section class="platforms-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">E-commerce Platforms We Work With</h2>
                <p class="section-description">
                    Specialized expertise across leading e-commerce technologies
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="platform-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="platform-icon mb-3">
                        <i class="fab fa-shopify fa-3x text-primary"></i>
                    </div>
                    <h4>Shopify & Shopify Plus</h4>
                    <p>Custom Shopify store development, theme customization, and app integration for businesses of all sizes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="platform-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="platform-icon mb-3">
                        <i class="fab fa-wordpress fa-3x text-primary"></i>
                    </div>
                    <h4>WooCommerce</h4>
                    <p>WordPress-based e-commerce solutions with unlimited customization possibilities and scalability.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="platform-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="platform-icon mb-3">
                        <i class="fab fa-magento fa-3x text-primary"></i>
                    </div>
                    <h4>Magento / Adobe Commerce</h4>
                    <p>Enterprise-grade e-commerce development for large catalogs and complex business requirements.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="platform-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="platform-icon mb-3">
                        <i class="fas fa-shopping-bag fa-3x text-primary"></i>
                    </div>
                    <h4>BigCommerce</h4>
                    <p>Powerful SaaS platform solutions for fast-growing online businesses with multi-channel selling needs.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="platform-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="platform-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Headless Commerce</h4>
                    <p>API-first architecture separating the frontend and backend for maximum flexibility and performance.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="platform-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="platform-icon mb-3">
                        <i class="fas fa-shopping-basket fa-3x text-primary"></i>
                    </div>
                    <h4>Custom Solutions</h4>
                    <p>Bespoke e-commerce applications built from scratch for unique business models and requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Custom E-commerce Development</h2>
                <p class="section-description">
                    How tailored online stores drive business growth
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-fingerprint fa-2x text-primary"></i>
                    </div>
                    <h4>Unique Brand Experience</h4>
                    <p>Stand out from competitors with a distinctive shopping experience that reflects your brand identity.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Scalability</h4>
                    <p>Solutions that grow with your business, handling increased traffic and expanding product catalogs.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-sync-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Integration Flexibility</h4>
                    <p>Seamless connections with your existing business systems, from ERP to CRM and accounting software.</p>
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
                <h2 class="mb-3">Ready to Launch Your E-commerce Store?</h2>
                <p class="lead mb-0">
                    Let's build a powerful online shopping experience that drives sales and growth.
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
            <h2 class="faq-title">E-commerce Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How do I choose the right e-commerce platform for my business?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Choosing the right platform depends on several factors: your business size, catalog complexity, budget, technical resources, and growth plans. Shopify is excellent for small to medium businesses looking for ease of use and quick setup. WooCommerce offers great flexibility with WordPress integration. Magento/Adobe Commerce is robust for larger businesses with complex needs. During our consultation, we'll analyze your specific requirements and recommend the best platform that aligns with your business goals and operational needs.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to develop an e-commerce website?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline for e-commerce development varies based on complexity and requirements. A basic store with standard features can be completed in 6-8 weeks. More complex stores with custom functionality, large product catalogs, or integrations with other systems typically take 3-6 months. Enterprise-level solutions may require 6+ months of development. We follow an agile approach with milestone-based delivery, allowing you to see progress throughout the development process and launch with core functionality before adding more advanced features.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What payment gateways can you integrate with my online store?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We can integrate virtually any major payment gateway with your e-commerce store, including Stripe, PayPal, Square, Authorize.net, Braintree, Amazon Pay, Apple Pay, Google Pay, and various country-specific payment options. We can also implement multiple payment methods simultaneously, giving your customers choices at checkout. All our payment integrations adhere to PCI DSS compliance standards to ensure customer payment data is handled securely.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
