<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for WordPress Website Design
$why_hire_us = getWhyHireUsContent('wordpress-website-design');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">WordPress Website Design</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Custom, powerful, and scalable WordPress websites tailored to your business needs
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
                <img src="/assets/images/services/wordpress-design.svg" alt="WordPress Website Design" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">WordPress Website Design Services</h2>
                <p>
                    Our WordPress design and development services deliver customized, feature-rich websites that leverage the world's most popular CMS platform. We create SEO-friendly, responsive, and user-friendly WordPress solutions that are easy to manage, secure, and scalable for your growing business needs. From custom theme development to plugin integration and performance optimization, we provide comprehensive WordPress solutions.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-paint-brush text-primary"></i>
                        </div>
                        <div>
                            <h5>Custom Theme Development</h5>
                            <p>Unique, branded WordPress themes designed specifically for your business.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-puzzle-piece text-primary"></i>
                        </div>
                        <div>
                            <h5>Plugin Integration & Customization</h5>
                            <p>Carefully selected and optimized plugins to enhance functionality.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Responsive Design</h5>
                            <p>Mobile-friendly websites that look and function flawlessly on all devices.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Security & Performance</h5>
                            <p>Hardened WordPress installations with optimized loading speeds.</p>
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
                <h2 class="section-title">Our WordPress Development Process</h2>
                <p class="section-description">
                    A methodical approach to creating exceptional WordPress websites
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
                    <p>We analyze your requirements, goals, and target audience to create a detailed project plan and site architecture.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>Design & Prototyping</h4>
                    <p>We create wireframes and design mockups, developing a custom WordPress theme that aligns with your brand identity.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build your WordPress site, integrate essential plugins, and implement custom functionality.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Testing & Launch</h4>
                    <p>We conduct rigorous testing, optimize performance, provide training, and launch your WordPress site.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WordPress Solutions -->
<section class="solutions-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">WordPress Solutions We Offer</h2>
                <p class="section-description">
                    Comprehensive WordPress services for different business needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-store fa-2x text-primary"></i>
                    </div>
                    <h4>WordPress E-commerce</h4>
                    <p>WooCommerce and other e-commerce solutions for selling products and services online with seamless payment processing, inventory management, and shipping integration.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                    <h4>Business & Corporate Sites</h4>
                    <p>Professional WordPress websites for businesses of all sizes with custom post types, advanced content management, and integration with CRM and marketing tools.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-newspaper fa-2x text-primary"></i>
                    </div>
                    <h4>Blogs & Media Sites</h4>
                    <p>Content-focused WordPress implementations with optimized publishing workflows, content categorization, and social media integration for blogs and news sites.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-user-graduate fa-2x text-primary"></i>
                    </div>
                    <h4>Educational & Membership Sites</h4>
                    <p>Learning management systems and membership sites with user registration, content restriction, and online course delivery built on WordPress.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-image fa-2x text-primary"></i>
                    </div>
                    <h4>Portfolio & Creative Sites</h4>
                    <p>Visually striking portfolio websites for artists, photographers, designers, and agencies with advanced media handling and gallery features.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-sync-alt fa-2x text-primary"></i>
                    </div>
                    <h4>WordPress Migration & Redesign</h4>
                    <p>Expert services for migrating existing websites to WordPress or redesigning outdated WordPress sites with minimal disruption.</p>
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
                <h2 class="section-title">Benefits of WordPress for Your Business</h2>
                <p class="section-description">
                    Why WordPress is the preferred CMS for millions of websites worldwide
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-cog fa-2x text-primary"></i>
                    </div>
                    <h4>Easy Content Management</h4>
                    <p>Intuitive admin interface that makes updating content simple, even for non-technical users, saving time and resources.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>SEO-Friendly Structure</h4>
                    <p>Built-in SEO advantages with clean code, customizable permalinks, and compatibility with leading SEO plugins.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Scalability & Flexibility</h4>
                    <p>Grows with your business needs with unlimited customization options and thousands of plugins for expanded functionality.</p>
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
                <h2 class="mb-3">Ready for a WordPress Website?</h2>
                <p class="lead mb-0">
                    Let's create a powerful, custom WordPress solution for your business
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
            <h2 class="faq-title">WordPress Website Design FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How much does a custom WordPress website cost?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost of a custom WordPress website varies based on complexity, design requirements, and functionality needed. A basic business WordPress site typically starts around $3,000-$5,000, while more complex solutions with custom features, e-commerce capabilities, or custom integrations can range from $8,000 to $25,000+. We provide detailed estimates after understanding your specific requirements during our discovery phase.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to build a WordPress website?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline for WordPress development typically ranges from 4-12 weeks depending on complexity. A standard business website might take 4-6 weeks, while more complex projects with custom functionality, e-commerce features, or extensive content migration can take 8-12 weeks or longer. We work with you to establish a realistic timeline based on your project needs and priorities.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Will I be able to update the website myself after it's launched?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, one of WordPress's greatest advantages is its user-friendly content management system. We design our WordPress sites with ease of maintenance in mind and provide comprehensive training on how to update content, add new pages, manage media, and perform routine maintenance. For more complex updates or technical changes, we offer ongoing support and maintenance packages.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you ensure WordPress security?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We implement multiple security measures for WordPress sites, including secure hosting environments, regular core and plugin updates, security plugins, firewall protection, SSL certificates, secure authentication practices, and regular backups. We also follow WordPress security best practices during development and can provide ongoing security monitoring for additional protection.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>

<?php require_once '../../../../components/footer.php'; ?>
