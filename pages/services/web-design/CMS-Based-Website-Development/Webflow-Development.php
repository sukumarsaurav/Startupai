<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Webflow Development
$why_hire_us = getWhyHireUsContent('webflow-development');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Webflow Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Visually stunning, fully responsive websites built with Webflow's powerful no-code platform
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
                <img src="/assets/images/services/webflow-development.svg" alt="Webflow Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Webflow Development Services</h2>
                <p>
                    Our Webflow development services combine the flexibility of custom design with the power of a no-code platform to create visually stunning, fully responsive websites. As Webflow experts, we deliver beautiful, functional websites with advanced animations, interactions, and CMS capabilities that give you complete control over your content without sacrificing design quality or performance.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-object-group text-primary"></i>
                        </div>
                        <div>
                            <h5>Custom Visual Design</h5>
                            <p>Pixel-perfect designs with complete creative freedom, no templates required.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-box-open text-primary"></i>
                        </div>
                        <div>
                            <h5>Webflow CMS Implementation</h5>
                            <p>Dynamic content management with custom collections for blogs, portfolios, and more.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-film text-primary"></i>
                        </div>
                        <div>
                            <h5>Advanced Interactions</h5>
                            <p>Engaging animations and micro-interactions that enhance user experience.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-bolt text-primary"></i>
                        </div>
                        <div>
                            <h5>Performance Optimization</h5>
                            <p>Lightning-fast loading speeds with clean code and optimized assets.</p>
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
                <h2 class="section-title">Our Webflow Development Process</h2>
                <p class="section-description">
                    A streamlined approach to creating exceptional Webflow websites
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery & Strategy</h4>
                    <p>We identify your goals, target audience, and design preferences to create a comprehensive project plan.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>Design & Prototyping</h4>
                    <p>We create detailed wireframes and design mockups directly in Webflow, allowing for rapid iteration.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>We build your Webflow site with responsive layouts, interactions, animations, and CMS integration.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Launch & Training</h4>
                    <p>We finalize the project, provide CMS training, and deploy your site with Webflow hosting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Webflow Solutions -->
<section class="solutions-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Webflow Solutions We Offer</h2>
                <p class="section-description">
                    Comprehensive Webflow services for different business needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-laptop fa-2x text-primary"></i>
                    </div>
                    <h4>Business & Corporate Sites</h4>
                    <p>Professional Webflow websites with dynamic content, custom animations, and lead generation capabilities for businesses of all sizes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-shopping-bag fa-2x text-primary"></i>
                    </div>
                    <h4>Webflow E-commerce</h4>
                    <p>Beautiful online stores with Webflow's native e-commerce functionality, custom product displays, and seamless checkout experiences.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-images fa-2x text-primary"></i>
                    </div>
                    <h4>Portfolio Sites</h4>
                    <p>Visually stunning portfolio websites for creatives, designers, and agencies with advanced image galleries and immersive layouts.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-newspaper fa-2x text-primary"></i>
                    </div>
                    <h4>Blog & Content Sites</h4>
                    <p>Dynamic blog and content platforms utilizing Webflow CMS for efficient content management and beautiful presentation.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-bullhorn fa-2x text-primary"></i>
                    </div>
                    <h4>Landing Pages</h4>
                    <p>High-converting landing pages with A/B testing capabilities, optimized for marketing campaigns and lead generation.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-sync-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Website Migrations</h4>
                    <p>Expert migration services from other platforms to Webflow, preserving design and content while enhancing performance.</p>
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
                <h2 class="section-title">Benefits of Webflow for Your Business</h2>
                <p class="section-description">
                    Why businesses choose Webflow for their web presence
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-2x text-primary"></i>
                    </div>
                    <h4>Design Freedom</h4>
                    <p>Unlimited creative possibilities with pixel-perfect design control without the constraints of templates.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Performance & SEO</h4>
                    <p>Lightning-fast loading speeds, clean HTML structure, and built-in SEO tools for better search rankings.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-edit fa-2x text-primary"></i>
                    </div>
                    <h4>Content Management</h4>
                    <p>Intuitive CMS that makes updating content simple without compromising design integrity.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Responsive by Default</h4>
                    <p>Fully responsive designs that work flawlessly across all devices without additional development.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Reliable Hosting</h4>
                    <p>Enterprise-grade hosting with global CDN, automatic backups, and excellent uptime performance.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-cogs fa-2x text-primary"></i>
                    </div>
                    <h4>No Developer Dependence</h4>
                    <p>Make changes to your site without relying on developers for every update or modification.</p>
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
                <h2 class="mb-3">Ready for a Webflow Website?</h2>
                <p class="lead mb-0">
                    Let's create a stunning, high-performance Webflow site for your business
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
            <h2 class="faq-title">Webflow Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How much does a Webflow website cost?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost of a Webflow website varies based on complexity, design requirements, and functionality. A standard business Webflow site typically starts around $5,000-$8,000, while more complex projects with custom animations, e-commerce features, or extensive CMS implementation can range from $10,000 to $30,000+. Additionally, Webflow's hosting plans start at $12/month for basic sites and $36/month for CMS-driven sites. We provide detailed estimates after understanding your specific requirements during our consultation.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to build a Webflow website?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline for Webflow development typically ranges from 4-10 weeks depending on the project scope. A standard business website might take 4-5 weeks, while more complex projects with custom animations, e-commerce functionality, or extensive CMS implementation can take 6-10 weeks. One advantage of Webflow is the ability to design and develop simultaneously, which can speed up the process compared to traditional development.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I update my Webflow website myself?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, Webflow is designed to be user-friendly with a powerful content management system. We structure your site to make content updates simple, and provide comprehensive training on how to manage your CMS collections, edit content, and make basic design changes. For more complex design modifications, we offer ongoing support or can provide additional training. This empowers you to maintain your site without constant developer dependence.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How does Webflow compare to WordPress?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Webflow and WordPress serve different needs. Webflow excels in design flexibility, performance, and security without plugins. It offers a visual design interface with clean code output and robust hosting, making it ideal for design-focused sites. WordPress offers a vast plugin ecosystem and community but can require more maintenance. Webflow sites typically load faster and have fewer security concerns, while WordPress offers more extensive third-party integrations. We can help determine which platform best suits your specific business requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
