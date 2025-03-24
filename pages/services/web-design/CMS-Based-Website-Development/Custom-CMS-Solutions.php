<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Custom CMS Solutions
$why_hire_us = getWhyHireUsContent('custom-cms-solutions');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Custom CMS Solutions</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Tailor-made content management systems designed for your unique business requirements
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
                <img src="/assets/images/services/custom-cms.svg" alt="Custom CMS Solutions" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Custom CMS Development Services</h2>
                <p>
                    Our custom CMS development services create tailor-made content management solutions that perfectly align with your unique business workflows and requirements. When off-the-shelf CMS platforms don't meet your specific needs, we design and build scalable, secure, and user-friendly systems that empower your team to manage content efficiently while providing the flexibility to grow with your business.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-cogs text-primary"></i>
                        </div>
                        <div>
                            <h5>Tailored Functionality</h5>
                            <p>Custom features and workflows designed specifically for your business needs.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-user-cog text-primary"></i>
                        </div>
                        <div>
                            <h5>Intuitive Admin Interface</h5>
                            <p>User-friendly dashboards and content management tools for your team.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-plug text-primary"></i>
                        </div>
                        <div>
                            <h5>Seamless Integrations</h5>
                            <p>Connect with your existing business systems, APIs, and third-party services.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Enhanced Security</h5>
                            <p>Robust security measures to protect your content and user data.</p>
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
                <h2 class="section-title">Our Custom CMS Development Process</h2>
                <p class="section-description">
                    A methodical approach to creating your perfect content management solution
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery & Analysis</h4>
                    <p>We analyze your content workflows, user needs, and business requirements to define the ideal CMS solution.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-project-diagram fa-3x text-primary"></i>
                    </div>
                    <h4>Architecture & Design</h4>
                    <p>We design the database structure, content models, user interfaces, and system architecture.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development & Testing</h4>
                    <p>Our developers build your custom CMS with rigorous testing throughout the development process.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                    </div>
                    <h4>Deployment & Training</h4>
                    <p>We deploy your CMS, provide comprehensive training, and offer ongoing support for your team.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CMS Solutions -->
<section class="solutions-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Custom CMS Solutions We Offer</h2>
                <p class="section-description">
                    Specialized content management systems for different business requirements
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-newspaper fa-2x text-primary"></i>
                    </div>
                    <h4>Media & Publishing CMS</h4>
                    <p>Specialized content management systems for news sites, magazines, and publishers with advanced editorial workflows, content scheduling, and multimedia management.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-store fa-2x text-primary"></i>
                    </div>
                    <h4>E-commerce CMS</h4>
                    <p>Custom product management systems with inventory tracking, pricing rules, promotions management, and integration with payment gateways and shipping providers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                    <h4>Corporate Portals</h4>
                    <p>Internal content management platforms for large organizations with complex approval workflows, document management, and multi-department publishing rights.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-user-graduate fa-2x text-primary"></i>
                    </div>
                    <h4>Educational CMS</h4>
                    <p>Learning management systems with course creation tools, student progress tracking, assessment capabilities, and interactive learning resources.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4>Multilingual CMS</h4>
                    <p>Content management systems designed for global businesses with advanced translation workflows, localization tools, and region-specific content delivery.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-database fa-2x text-primary"></i>
                    </div>
                    <h4>Headless CMS Solutions</h4>
                    <p>API-first content management systems that separate content from presentation, allowing delivery to multiple platforms and devices from a single source.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technological Approach -->
<section class="tech-approach py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Technological Approach</h2>
                <p class="section-description">
                    Modern technologies and methodologies we use to build robust CMS solutions
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-layer-group text-primary me-2"></i> Modular Architecture</h4>
                    <p>We develop CMS solutions with a modular architecture that allows for easy expansion and customization. This approach enables you to add new features and functionality as your business grows without disrupting existing operations.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-mobile-alt text-primary me-2"></i> API-First Development</h4>
                    <p>Our API-first approach ensures your content can be delivered to any platform or device. This provides flexibility for future expansion to mobile apps, IoT devices, or integration with other systems.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-lock text-primary me-2"></i> Security-Focused Design</h4>
                    <p>Security is built into every layer of our CMS solutions, with robust authentication, role-based access control, data encryption, and protection against common vulnerabilities.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-tachometer-alt text-primary me-2"></i> Performance Optimization</h4>
                    <p>We optimize database queries, implement caching strategies, and use efficient coding practices to ensure your CMS performs well even with large amounts of content and high traffic.</p>
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
                <h2 class="section-title">Benefits of Custom CMS Development</h2>
                <p class="section-description">
                    Why a tailored content management system can transform your business
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-fingerprint fa-2x text-primary"></i>
                    </div>
                    <h4>Perfect Fit for Your Business</h4>
                    <p>A custom CMS is designed around your specific business processes and requirements, eliminating the compromises and workarounds needed with off-the-shelf solutions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Improved Efficiency</h4>
                    <p>Streamlined workflows and intuitive interfaces designed specifically for your team's needs, reducing the time spent on content management tasks.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Scalability & Future-Proofing</h4>
                    <p>A custom CMS can grow with your business, accommodating increased content volume, new content types, and evolving business requirements.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-lock fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Security & Control</h4>
                    <p>Greater control over security measures and fewer vulnerabilities compared to popular open-source CMS platforms that are common targets for hackers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-plug fa-2x text-primary"></i>
                    </div>
                    <h4>Seamless Integration</h4>
                    <p>Direct integration with your existing business systems and third-party services without the limitations of pre-built plugins or modules.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Optimized Performance</h4>
                    <p>Better performance and faster loading times by including only the features you need, without the bloat of unnecessary functions found in generic CMS platforms.</p>
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
                <h2 class="mb-3">Ready for a Custom CMS Solution?</h2>
                <p class="lead mb-0">
                    Let's create a content management system perfectly tailored to your business needs
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
            <h2 class="faq-title">Custom CMS Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How much does custom CMS development cost?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost of custom CMS development varies significantly based on the complexity, features, and scale of the solution. Simple custom CMS implementations typically start around $15,000-$25,000, while enterprise-level solutions with complex workflows, integrations, and advanced features can range from $30,000 to $150,000+. We provide detailed estimates after thoroughly understanding your specific requirements during our discovery phase.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to develop a custom CMS?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline for custom CMS development typically ranges from 3-9 months depending on complexity. A basic CMS might take 3-4 months to develop, while more complex systems with multiple user roles, advanced workflows, and extensive integrations can take 6-9 months or longer. We use an agile development approach that allows for early deployment of core functionality with additional features added in subsequent phases.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Why choose a custom CMS over WordPress or another existing platform?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>While WordPress and other existing CMS platforms work well for standard websites, a custom CMS is ideal when you have specific requirements that can't be efficiently met by off-the-shelf solutions. Custom CMS development is recommended when you need specialized content types, unique workflows, specific user roles and permissions, seamless integration with proprietary systems, enhanced security requirements, or when performance optimization is crucial. A custom solution eliminates the need for plugins and workarounds that can lead to maintenance issues and security vulnerabilities.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How is the CMS maintained and updated after launch?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We offer several maintenance options for custom CMS solutions. Our standard maintenance packages include security updates, bug fixes, performance monitoring, and regular backups. We also provide ongoing development services for adding new features or modules as your business evolves. Our team can provide training for your internal IT staff if you prefer to handle routine maintenance in-house, while still being available for major updates or technical challenges. We recommend a maintenance agreement to ensure your CMS remains secure, stable, and up-to-date.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
