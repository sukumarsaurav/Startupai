<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Shopify Development
$why_hire_us = getWhyHireUsContent('shopify-development');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Shopify Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Custom Shopify stores that convert visitors into loyal customers
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
                <img src="/assets/images/services/shopify-development.svg" alt="Shopify Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Expert Shopify Development Services</h2>
                <p>
                    Our Shopify development services transform your e-commerce vision into a high-performing online store. With deep expertise in Shopify's ecosystem, we build custom, conversion-focused storefronts that showcase your products effectively, streamline checkout processes, and integrate seamlessly with your business operations. From store setup to theme customization, app integration, and ongoing optimization, we deliver Shopify solutions that drive sales and enhance customer loyalty.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-paint-brush text-primary"></i>
                        </div>
                        <div>
                            <h5>Custom Theme Development</h5>
                            <p>Unique, brand-aligned designs that stand out from template-based stores.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                        </div>
                        <div>
                            <h5>Conversion Optimization</h5>
                            <p>Strategic product layouts, simplified checkout, and persuasive UX design.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-plug text-primary"></i>
                        </div>
                        <div>
                            <h5>App Integration & Development</h5>
                            <p>Seamless integration of apps and custom functionality for unique requirements.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <h5>Growth & Optimization</h5>
                            <p>Ongoing store performance analysis and strategic improvements.</p>
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
                <h2 class="section-title">Our Shopify Development Process</h2>
                <p class="section-description">
                    How we create successful Shopify stores
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-search fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery & Strategy</h4>
                    <p>We analyze your business goals, product catalog, and target audience to create a tailored Shopify strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>Design & Prototyping</h4>
                    <p>We design a custom Shopify experience that reflects your brand and optimizes for conversions.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build your store with clean code, implementing themes, apps, and custom functionality.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Launch & Growth</h4>
                    <p>We meticulously test, launch your store, and provide ongoing optimization to drive sales growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="shopify-services-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Shopify Development Services</h2>
                <p class="section-description">
                    Comprehensive solutions for your Shopify store
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-store fa-2x text-primary"></i>
                    </div>
                    <h4>Store Setup & Migration</h4>
                    <p>Complete Shopify store setup from scratch or seamless migration from other platforms with preserved SEO, product data, and customer information. We ensure a smooth transition with minimal disruption to your business operations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-palette fa-2x text-primary"></i>
                    </div>
                    <h4>Theme Development & Customization</h4>
                    <p>Custom Shopify theme development or existing theme modification to create a unique, branded shopping experience. Our designs focus on user experience, mobile responsiveness, and conversion optimization principles.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-puzzle-piece fa-2x text-primary"></i>
                    </div>
                    <h4>App Integration</h4>
                    <p>Strategic selection and seamless integration of Shopify apps to extend your store's functionality. From inventory management to marketing automation, we implement the right tools to optimize your operations and enhance customer experience.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-code fa-2x text-primary"></i>
                    </div>
                    <h4>Custom App Development</h4>
                    <p>Development of custom Shopify apps and extensions when standard solutions don't meet your specific business requirements. Our custom solutions integrate seamlessly with your store and provide exactly the functionality you need.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-truck fa-2x text-primary"></i>
                    </div>
                    <h4>Third-Party Integrations</h4>
                    <p>Integration of your Shopify store with essential business systems including ERP, CRM, shipping providers, payment gateways, accounting software, and marketing platforms for streamlined operations and data synchronization.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Performance Optimization</h4>
                    <p>Comprehensive performance upgrades for existing Shopify stores, focusing on page speed, mobile experience, checkout optimization, and conversion improvements. We identify bottlenecks and implement solutions to maximize your store's effectiveness.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Store Types -->
<section class="store-types-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Shopify Store Types We Develop</h2>
                <p class="section-description">
                    Specialized solutions for various business models
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-tshirt fa-2x text-primary"></i>
                    </div>
                    <h4>Fashion & Apparel</h4>
                    <p>Visually stunning clothing stores with size guides, lookbooks, cross-selling features, and intuitive category navigation designed for fashion brands and retailers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-utensils fa-2x text-primary"></i>
                    </div>
                    <h4>Food & Beverage</h4>
                    <p>Specialized food stores with recipe integration, subscription options, nutritional information, and time-sensitive delivery scheduling for perishable products.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-laptop fa-2x text-primary"></i>
                    </div>
                    <h4>Electronics</h4>
                    <p>Technical product stores with detailed specifications, comparison features, warranty information, and specialized filtering for consumer electronics and gadgets.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-gem fa-2x text-primary"></i>
                    </div>
                    <h4>Jewelry & Luxury</h4>
                    <p>High-end shopping experiences with zoom-enabled product photography, custom product configurators, and appointment scheduling for luxury goods retailers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-dropbox fa-2x text-primary"></i>
                    </div>
                    <h4>Subscription Boxes</h4>
                    <p>Recurring revenue stores with subscription management, box customization options, and member portals for subscription-based business models.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4>Multi-Market / International</h4>
                    <p>Global commerce solutions with multi-currency, multi-language, and localized content capabilities for brands selling internationally.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="technologies-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Shopify Technologies We Work With</h2>
                <p class="section-description">
                    Our expertise spans the Shopify ecosystem
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="mb-3">Shopify Platforms</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Basic</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Advanced</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Plus</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Markets</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="mb-3">Development Tools</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check text-primary me-2"></i>Liquid Template Language</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify CLI</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Themekit</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Web Pixel</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Functions</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="mb-3">API & Extended Functionality</h4>
                    <ul class="tech-list">
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify REST API</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify GraphQL API</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Storefront API</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify Payments</li>
                        <li><i class="fas fa-check text-primary me-2"></i>Shopify POS</li>
                    </ul>
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
                <h2 class="section-title">Benefits of Custom Shopify Development</h2>
                <p class="section-description">
                    Why professional Shopify development makes business sense
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-bar fa-2x text-primary"></i>
                    </div>
                    <h4>Higher Conversion Rates</h4>
                    <p>Custom Shopify stores strategically designed around user behavior patterns achieve significantly higher conversion rates than template-based alternatives.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-fingerprint fa-2x text-primary"></i>
                    </div>
                    <h4>Brand Differentiation</h4>
                    <p>Stand out from competitors with a unique shopping experience that strengthens your brand identity and creates a memorable impression.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Scalability</h4>
                    <p>Custom Shopify development provides the foundation for growth, allowing your store to handle increased traffic, products, and transactions as your business expands.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bolt fa-2x text-primary"></i>
                    </div>
                    <h4>Optimized Performance</h4>
                    <p>Professional development ensures your store loads quickly and performs smoothly, reducing bounce rates and increasing customer satisfaction.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-cogs fa-2x text-primary"></i>
                    </div>
                    <h4>Streamlined Operations</h4>
                    <p>Custom automation and business system integrations reduce manual work, minimize errors, and create more efficient e-commerce operations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Mobile Excellence</h4>
                    <p>Professional Shopify development ensures a seamless mobile shopping experience that converts smartphone and tablet users effectively.</p>
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
                <h2 class="mb-3">Ready to Transform Your E-commerce Business?</h2>
                <p class="lead mb-0">
                    Let's build a Shopify store that drives sales and delights your customers.
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
            <h2 class="faq-title">Shopify Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to build a custom Shopify store?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline for a custom Shopify store varies based on complexity, but typically ranges from 4-12 weeks. Basic stores with minimal customization can be completed in as little as 3-4 weeks. Mid-range stores with custom theme modifications and moderate functionality requirements usually take 6-8 weeks. Complex stores with fully custom themes, extensive integrations, and custom app development may require 10-12 weeks or more. Our process includes discovery (1-2 weeks), design (2-3 weeks), development (2-6 weeks), and testing/launch (1-2 weeks). We'll provide a specific timeline during our initial consultation after understanding your requirements, existing assets, and business complexity. Throughout the project, we maintain transparent communication with regular updates on progress and milestones.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Should I use a pre-built theme or get a custom Shopify theme?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The choice between pre-built and custom Shopify themes depends on your business needs, budget, and timeline. Pre-built themes are ideal for businesses with limited budgets (typically $0-$350 for the theme), faster launch requirements (1-4 weeks setup), standard product catalogs, and those just starting their e-commerce journey. They offer cost-effectiveness and quick implementation but may look similar to other stores and have limited customization options. Custom themes are better for established businesses seeking brand differentiation, those with unique product presentation needs, stores requiring specific functionality, and businesses prioritizing conversion optimization. While custom themes involve higher investment (typically $5,000-$30,000) and longer development cycles (6-12 weeks), they provide complete design control, optimized user experience based on your specific audience, unique brand presentation, and can integrate precisely the features your business needs. Many businesses start with a customized pre-built theme and evolve to a fully custom solution as they grow and better understand their specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What ongoing support do you provide after my Shopify store launches?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>After your Shopify store launches, we provide comprehensive support to ensure continued success. Our post-launch care includes a 30-day warranty period covering bug fixes and issues related to our development work at no additional cost. For ongoing support, we offer flexible maintenance packages tailored to your needs, from basic technical support to comprehensive growth partnerships. Basic plans include security updates, Shopify platform compatibility maintenance, and emergency support. Premium packages add regular performance optimization, conversion rate improvements, feature additions, and strategic consultation. We also provide training sessions for your team to manage day-to-day store operations effectively. Our support team is available through multiple channels including email, phone, and ticketing systems with response times based on your selected support tier. Many clients choose our quarterly store review service, where we analyze performance, suggest improvements, and help plan future enhancements to keep your store competitive and continuously improving.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 