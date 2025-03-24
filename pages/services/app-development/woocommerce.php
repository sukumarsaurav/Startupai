<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../config/database.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for WooCommerce
$why_hire_us = getWhyHireUsContent('woocommerce');

require_once '../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">WooCommerce Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Build powerful online stores and e-commerce solutions that drive sales
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
                <img src="/assets/images/services/woocommerce-development.svg" alt="WooCommerce Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Custom WooCommerce Development Solutions</h2>
                <p>
                    Our WooCommerce development services focus on creating custom online stores that perfectly align with your business goals. We leverage WooCommerce's flexibility to develop unique shopping experiences, from product showcases to checkout processes. With our expertise, your e-commerce site will be secure, user-friendly, and optimized for conversions.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-store text-primary"></i>
                        </div>
                        <div>
                            <h5>Custom Store Development</h5>
                            <p>Tailored online stores that reflect your brand identity and business requirements.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-credit-card text-primary"></i>
                        </div>
                        <div>
                            <h5>Payment Gateway Integration</h5>
                            <p>Seamless integration with multiple payment providers for a smooth checkout experience.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-box text-primary"></i>
                        </div>
                        <div>
                            <h5>Product Management</h5>
                            <p>Advanced product catalogs, variations, and inventory management systems.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-truck text-primary"></i>
                        </div>
                        <div>
                            <h5>Shipping Configuration</h5>
                            <p>Custom shipping options and rules tailored to your logistics requirements.</p>
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
                <h2 class="section-title">Our WooCommerce Development Process</h2>
                <p class="section-description">
                    A systematic approach to creating successful e-commerce stores
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-store fa-3x text-primary"></i>
                    </div>
                    <h4>Store Planning</h4>
                    <p>We analyze your business needs and define products, categories, and customer journeys for optimal store structure.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>Design</h4>
                    <p>Our designers create a custom store design that enhances your brand identity and optimizes the buying experience.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>We build your store with custom features, extensions, and third-party integrations tailored to your requirements.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h4>Optimization</h4>
                    <p>We fine-tune your store for conversions, security, performance, and long-term growth potential.</p>
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
                <h2 class="section-title">Benefits of WooCommerce Development</h2>
                <p class="section-description">
                    Why WooCommerce is an ideal platform for your e-commerce needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-hand-holding-usd fa-2x text-primary"></i>
                    </div>
                    <h4>Cost-Effective</h4>
                    <p>As an open-source platform, WooCommerce offers lower development and maintenance costs compared to proprietary e-commerce solutions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-sliders-h fa-2x text-primary"></i>
                    </div>
                    <h4>Customizable</h4>
                    <p>WooCommerce is fully adaptable to your unique business needs, allowing complete control over your online store's look and functionality.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-plug fa-2x text-primary"></i>
                    </div>
                    <h4>Extensible</h4>
                    <p>With thousands of extensions and plugins available, WooCommerce can be enhanced with additional features as your business grows.</p>
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
                <h2 class="section-title">WooCommerce Solutions For Various Industries</h2>
                <p class="section-description">
                    Tailored e-commerce solutions for different business needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-tshirt fa-2x text-primary"></i>
                    </div>
                    <h4>Retail & Fashion</h4>
                    <p>Customized WooCommerce stores for clothing brands, featuring product variations, size guides, and visual merchandising.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-utensils fa-2x text-primary"></i>
                    </div>
                    <h4>Food & Beverages</h4>
                    <p>E-commerce solutions for food businesses with special features like delivery scheduling and perishable inventory management.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-laptop fa-2x text-primary"></i>
                    </div>
                    <h4>Digital Products</h4>
                    <p>Secure platforms for selling downloadable products like software, e-books, courses, and digital content.</p>
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
                <h2 class="mb-3">Ready to Launch Your Online Store?</h2>
                <p class="lead mb-0">
                    Let's create a WooCommerce solution that drives sales and growth for your business.
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
            <h2 class="faq-title">WooCommerce Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-column">
                <!-- FAQ Item 1 -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <span>How much does WooCommerce development cost?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>The cost of WooCommerce development varies based on your specific requirements, design complexity, and custom features needed. Basic WooCommerce stores typically range from $3,000 to $10,000, while more complex solutions with custom functionality can range from $10,000 to $30,000+. We provide detailed quotes after understanding your business needs and project scope.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does it take to build a WooCommerce store?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>The timeline for WooCommerce development typically ranges from 4-12 weeks, depending on project complexity. A basic store might take 4-6 weeks, while a complex store with custom features and integrations could take 8-12 weeks or more. We'll provide a specific timeline during the planning phase based on your requirements.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Which payment gateways can be integrated with WooCommerce?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>WooCommerce supports numerous payment gateways, including:</p>
                        <ul>
                            <li>Stripe</li>
                            <li>PayPal</li>
                            <li>Square</li>
                            <li>Authorize.Net</li>
                            <li>Amazon Pay</li>
                            <li>Klarna</li>
                            <li>Bank transfers</li>
                            <li>Cash on delivery</li>
                        </ul>
                        <p>We can also develop custom payment gateway integrations for region-specific providers if needed.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I migrate my existing online store to WooCommerce?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide comprehensive migration services from platforms like Shopify, Magento, BigCommerce, and others to WooCommerce. Our migration process includes transferring products, customer data, order history, and preserving SEO value. We ensure a smooth transition with minimal disruption to your business operations.</p>
                    </div>
                </div>
            </div>

            <div class="faq-column">
                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Is WooCommerce suitable for high-volume stores?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, with proper optimization and infrastructure, WooCommerce can handle high-volume stores with thousands of products and orders. We implement performance optimizations, caching solutions, and server configurations to ensure your store runs smoothly even during high traffic periods. For very large stores, we can develop custom scaling solutions tailored to your specific needs.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How secure is a WooCommerce store?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>WooCommerce can be highly secure when properly implemented. We follow security best practices including:</p>
                        <ul>
                            <li>SSL implementation</li>
                            <li>Regular security updates</li>
                            <li>Secure payment processing</li>
                            <li>PCI compliance measures</li>
                            <li>Advanced security plugins</li>
                            <li>Secure hosting configuration</li>
                        </ul>
                        <p>Additionally, we can implement custom security measures based on your specific requirements.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can WooCommerce handle subscription-based products?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, WooCommerce can handle subscription-based products and services with the WooCommerce Subscriptions extension or custom subscription management solutions. We can implement features like recurring billing, subscription management, trial periods, variable billing schedules, and upgrade/downgrade capabilities for your subscription business.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you provide WooCommerce maintenance services?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive WooCommerce maintenance services including:</p>
                        <ul>
                            <li>Regular software updates and security patches</li>
                            <li>Performance monitoring and optimization</li>
                            <li>Bug fixes and troubleshooting</li>
                            <li>Content updates and product management</li>
                            <li>Backup and recovery solutions</li>
                            <li>Ongoing technical support</li>
                        </ul>
                        <p>Our maintenance packages can be customized based on your specific needs and budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../components/footer.php'; ?> 