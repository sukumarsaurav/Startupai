<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../config/database.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for WordPress
$why_hire_us = getWhyHireUsContent('wordpress');

require_once '../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">WordPress Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Create custom, scalable, and manageable websites with WordPress
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
                <img src="/assets/images/services/wordpress-development.svg" alt="WordPress Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Custom WordPress Development Solutions</h2>
                <p>
                    Our WordPress development services focus on creating custom websites that perfectly match your business needs. We develop custom themes, plugins, and functionalities to create a unique and powerful online presence. With our expertise, your WordPress site will be secure, optimized for performance, and easy to manage.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-palette text-primary"></i>
                        </div>
                        <div>
                            <h5>Custom Theme Development</h5>
                            <p>Unique designs that represent your brand identity and business values.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-puzzle-piece text-primary"></i>
                        </div>
                        <div>
                            <h5>Plugin Development</h5>
                            <p>Custom functionality tailored to your specific business requirements.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-exchange-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Migration & Upgrades</h5>
                            <p>Seamless transitions from other platforms or older WordPress versions.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Security Hardening</h5>
                            <p>Protecting your website from vulnerabilities and potential threats.</p>
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
                    A systematic approach to creating successful WordPress websites
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery</h4>
                    <p>We analyze your business goals, target audience, and content requirements to create an effective site architecture.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>Design</h4>
                    <p>Our designers create custom themes, layouts, and UI elements that align with your brand identity and user experience goals.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>We build your website with clean code, custom functionality, and seamless integration of required features and plugins.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-primary"></i>
                    </div>
                    <h4>Optimization</h4>
                    <p>We optimize for security, SEO, and performance, ensuring your website loads quickly and ranks well in search results.</p>
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
                <h2 class="section-title">Benefits of WordPress Development</h2>
                <p class="section-description">
                    Why WordPress is the world's most popular content management system
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-edit fa-2x text-primary"></i>
                    </div>
                    <h4>Easy Content Management</h4>
                    <p>WordPress offers an intuitive admin interface that makes it simple for non-technical users to update content, add pages, and manage media.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Scalability</h4>
                    <p>WordPress can grow alongside your business, from a simple blog to a complex corporate site, e-commerce platform, or membership portal.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-puzzle-piece fa-2x text-primary"></i>
                    </div>
                    <h4>Extensibility</h4>
                    <p>With thousands of plugins and integrations available, WordPress can be extended to include virtually any functionality your business needs.</p>
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
                <h2 class="section-title">WordPress Solutions For Various Industries</h2>
                <p class="section-description">
                    Tailored websites for different business needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                    <h4>Corporate Websites</h4>
                    <p>Professional WordPress sites that showcase your company's services, team, and values with integrated contact forms and CRM connections.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-pen-fancy fa-2x text-primary"></i>
                    </div>
                    <h4>Content Platforms</h4>
                    <p>Blog and publication websites optimized for content delivery, reader engagement, and monetization opportunities.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-user-graduate fa-2x text-primary"></i>
                    </div>
                    <h4>Educational Portals</h4>
                    <p>Learning management systems and educational websites with course management, student enrollment, and assessment capabilities.</p>
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
                <h2 class="mb-3">Ready for a Custom WordPress Site?</h2>
                <p class="lead mb-0">
                    Let's create a website that perfectly represents your brand and drives results.
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
            <h2 class="faq-title">WordPress Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-column">
                <!-- FAQ Item 1 -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <span>Why choose WordPress over other platforms?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>WordPress offers several advantages over other CMS platforms:</p>
                        <ul>
                            <li>User-friendly admin interface that's easy for non-technical users</li>
                            <li>Highly customizable with thousands of themes and plugins</li>
                            <li>SEO-friendly architecture and strong community support</li>
                            <li>Regular updates and security improvements</li>
                            <li>Cost-effective development compared to custom-built platforms</li>
                            <li>Powers approximately 40% of all websites on the internet</li>
                        </ul>
                        <p>These benefits make WordPress the ideal choice for most business websites.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What's the difference between WordPress.com and WordPress.org?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>WordPress.com is a hosted service where you can create a website without worrying about hosting or technical management, but with limited customization options. WordPress.org is the self-hosted version that gives you complete control and flexibility. Our development services focus on WordPress.org (self-hosted) solutions, providing you with full customization capabilities, plugin options, and ownership of your website.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does it take to develop a WordPress website?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>The timeline for WordPress development depends on your project's complexity. A basic website might take 3-4 weeks, while a complex website with custom functionality could take 8-12 weeks. During our initial consultation, we'll assess your requirements and provide a detailed timeline tailored to your specific needs.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Is WordPress secure?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>WordPress itself is secure and regularly updated to address vulnerabilities. However, proper implementation and maintenance are crucial for security. Our development process includes security hardening measures such as:</p>
                        <ul>
                            <li>Regular updates to WordPress core, themes, and plugins</li>
                            <li>Implementation of security plugins and firewalls</li>
                            <li>Secure login practices and brute force protection</li>
                            <li>Database encryption and malware scanning</li>
                            <li>Backup solutions for quick recovery if needed</li>
                        </ul>
                        <p>We also offer ongoing maintenance plans to ensure your site remains secure over time.</p>
                    </div>
                </div>
            </div>

            <div class="faq-column">
                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I update my WordPress website myself?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, one of WordPress's main advantages is its user-friendly admin interface. After development, we provide training sessions to ensure you're comfortable managing your content, adding blog posts, updating pages, and handling basic site maintenance. For more complex updates or technical changes, our support team is always available to assist you.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Will my WordPress site be mobile-friendly?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely. All our WordPress websites are built with responsive design principles, ensuring they look and function perfectly on all devices—from desktop computers to tablets and smartphones. We extensively test each website across various screen sizes and devices before launch to ensure optimal performance and user experience everywhere.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can WordPress handle my business growth?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, WordPress is highly scalable and can grow with your business. Whether you need to add new sections, integrate additional functionality, or handle increasing traffic, WordPress can accommodate your needs. We design with scalability in mind, creating a foundation that supports future expansion. From blogs to enterprise-level websites, WordPress can handle virtually any size and type of website when properly implemented.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you offer WordPress maintenance plans?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer comprehensive WordPress maintenance plans that include:</p>
                        <ul>
                            <li>Regular updates to WordPress core, themes, and plugins</li>
                            <li>Security monitoring and malware scanning</li>
                            <li>Performance optimization and speed enhancements</li>
                            <li>Regular backups and emergency recovery</li>
                            <li>Content updates and minor design changes</li>
                            <li>Technical support and troubleshooting</li>
                        </ul>
                        <p>Our maintenance plans can be customized based on your specific needs and budget, ensuring your website remains secure, up-to-date, and performing optimally.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../components/footer.php'; ?> 