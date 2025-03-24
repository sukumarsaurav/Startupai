<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Portfolio Websites
$why_hire_us = getWhyHireUsContent('portfolio-websites');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Portfolio Websites</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Stunning, work-focused websites that showcase your talents and attract new clients
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
                <img src="/assets/images/services/portfolio-website.svg" alt="Portfolio Website Design" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Professional Portfolio Website Design</h2>
                <p>
                    Our portfolio website design services help creative professionals, freelancers, agencies, and artists showcase their work in a visually compelling way. We create custom, engaging portfolio sites that highlight your projects, communicate your unique style, and make it easy for potential clients to contact you. From visual galleries to case studies, we'll build a digital portfolio that makes your work shine.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-image text-primary"></i>
                        </div>
                        <div>
                            <h5>Visual Showcase</h5>
                            <p>Eye-catching galleries and project displays that highlight your best work.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-paint-brush text-primary"></i>
                        </div>
                        <div>
                            <h5>Creative Design</h5>
                            <p>Unique layouts and animations that reflect your personal or brand style.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-arrows-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Filtering & Categories</h5>
                            <p>Intuitive navigation and organization to help visitors find relevant work.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Mobile-First Approach</h5>
                            <p>Responsive design that ensures your work looks great on any device.</p>
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
                <h2 class="section-title">Our Portfolio Website Design Process</h2>
                <p class="section-description">
                    How we create compelling portfolio websites that showcase your work
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-comments fa-3x text-primary"></i>
                    </div>
                    <h4>Creative Consultation</h4>
                    <p>We discuss your style, work, target audience, and goals to understand what makes you unique.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>Portfolio Architecture</h4>
                    <p>We design the structure, user experience, and visual language that best presents your work.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build your portfolio with a focus on visual impact, performance, and interaction.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-upload fa-3x text-primary"></i>
                    </div>
                    <h4>Content Integration</h4>
                    <p>We carefully prepare and showcase your projects, optimizing images and content for maximum impact.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Types -->
<section class="portfolio-types-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Portfolio Website Types</h2>
                <p class="section-description">
                    Custom solutions for different creative professionals
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-camera fa-2x text-primary"></i>
                    </div>
                    <h4>Photography Portfolios</h4>
                    <p>Image-focused websites with beautiful galleries, optimal image loading, and organization by collections or themes to showcase photography work.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-paint-brush fa-2x text-primary"></i>
                    </div>
                    <h4>Graphic Design Portfolios</h4>
                    <p>Design-forward websites that highlight visual identity work, packaging, digital design, and branding projects with detailed case studies.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-pencil-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Illustration Portfolios</h4>
                    <p>Creative showcases for illustrators that display artwork with attention to detail, style variations, and commissioned work examples.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-video fa-2x text-primary"></i>
                    </div>
                    <h4>Videography Portfolios</h4>
                    <p>Video-optimized websites with showreels, project spotlights, and embedded videos that load quickly and play smoothly across devices.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-code fa-2x text-primary"></i>
                    </div>
                    <h4>Web Design Portfolios</h4>
                    <p>Interactive showcases that demonstrate UX/UI skills, web development projects, and digital experiences with detailed process insights.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                    <h4>Architecture Portfolios</h4>
                    <p>Sophisticated websites featuring architectural projects with 3D renderings, floor plans, and detailed project information for each showcase.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="portfolio-features-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Essential Portfolio Website Features</h2>
                <p class="section-description">
                    Key components that make your portfolio effective
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-th fa-2x text-primary"></i>
                    </div>
                    <h4>Dynamic Galleries</h4>
                    <p>Interactive, filterable project displays with multiple viewing options such as grids, sliders, and full-screen presentations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-file-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Case Study Templates</h4>
                    <p>Detailed project pages that tell the story behind your work, including challenges, processes, and outcomes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-user fa-2x text-primary"></i>
                    </div>
                    <h4>Personal Branding</h4>
                    <p>Distinctive about/bio sections that communicate your unique approach, story, and professional background.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-paper-plane fa-2x text-primary"></i>
                    </div>
                    <h4>Contact Optimization</h4>
                    <p>Simple, accessible contact options that make it easy for potential clients to reach out and hire you.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-share-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Social Integration</h4>
                    <p>Connections to your social media accounts and platforms where you regularly share your creative work.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Image Optimization</h4>
                    <p>Advanced techniques to ensure your visual content loads quickly without sacrificing quality or resolution.</p>
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
                <h2 class="section-title">Benefits of a Professional Portfolio Website</h2>
                <p class="section-description">
                    How a custom portfolio fuels your creative career
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-briefcase fa-2x text-primary"></i>
                    </div>
                    <h4>Attract Better Clients</h4>
                    <p>Showcase your best work to draw in higher-quality clients who value your specific skills and style.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>Command Higher Rates</h4>
                    <p>Present your work professionally to justify premium pricing for your services and expertise.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-award fa-2x text-primary"></i>
                    </div>
                    <h4>Establish Credibility</h4>
                    <p>Build professional trust with a polished online presence that demonstrates your capabilities.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-palette fa-2x text-primary"></i>
                    </div>
                    <h4>Showcase Evolution</h4>
                    <p>Display your creative journey and growth by regularly updating your portfolio with new projects.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4>Global Visibility</h4>
                    <p>Reach potential clients worldwide, expanding your market beyond local or regional limitations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-handshake fa-2x text-primary"></i>
                    </div>
                    <h4>Strategic Networking</h4>
                    <p>Create opportunities for collaborations, partnerships, and professional connections in your industry.</p>
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
                <h2 class="mb-3">Ready to Showcase Your Creative Work?</h2>
                <p class="lead mb-0">
                    Let's build a portfolio website that makes your talents shine and attracts new opportunities.
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
            <h2 class="faq-title">Portfolio Websites FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How many projects should I include in my portfolio website?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Quality always trumps quantity when it comes to portfolio websites. We generally recommend featuring 10-15 of your strongest projects that showcase range and versatility while maintaining focus on your specialties. For established professionals with extensive work, we can implement filtering systems that allow visitors to navigate a larger collection effectively. Remember that potential clients often make quick decisions—showing too many projects can dilute the impact of your best work. We recommend updating your portfolio regularly, replacing older projects with new ones that better represent your current skills and style. During our design process, we'll help you curate your work to create the most compelling presentation that aligns with your career goals and target clients.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you optimize portfolio websites for image-heavy content?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>For image-heavy portfolios, optimization is crucial to maintain both visual quality and website performance. We implement several technical strategies: 1) Advanced image compression that reduces file sizes without visible quality loss; 2) Lazy loading, which loads images only as they enter the viewport; 3) Responsive images that deliver appropriately sized files based on the viewer's device; 4) Next-gen image formats like WebP where browser support allows; 5) Content Delivery Networks (CDNs) to serve images from servers closest to each visitor; 6) Strategic preloading of critical images; and 7) Progressive loading techniques for larger images. We also implement intuitive gallery interfaces that load thumbnails first, with full-resolution images loading only when selected. These optimizations ensure your work looks stunning while providing a smooth, fast user experience that keeps potential clients engaged.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can I update my portfolio website myself after it's built?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Absolutely! We design all our portfolio websites with content management in mind. We typically build portfolio sites on user-friendly platforms that allow you to easily update projects, add new work, and modify content without technical knowledge. During handover, we provide training sessions tailored to your comfort level with technology, comprehensive documentation, and video tutorials specific to your website's setup. Our gallery and project management systems feature intuitive interfaces for uploading new images, reordering projects, and editing descriptions. For clients who prefer not to manage their own updates, we offer maintenance packages that include regular content updates and technical support. We understand that creative professionals need to regularly showcase new work, so we prioritize making this process as simple and streamlined as possible.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 