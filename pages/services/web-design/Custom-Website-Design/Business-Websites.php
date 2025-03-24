<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Business Websites
$why_hire_us = getWhyHireUsContent('business-websites');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Business Websites</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Professional, conversion-focused websites that establish credibility and drive business growth
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
                <img src="/assets/images/services/business-website.svg" alt="Business Website Design" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Custom Business Website Design</h2>
                <p>
                    Our business website design services create professional, high-performance online platforms that effectively communicate your brand value and convert visitors into customers. We develop custom websites tailored to your specific industry needs, business goals, and target audience, ensuring a powerful online presence that drives meaningful business results.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-palette text-primary"></i>
                        </div>
                        <div>
                            <h5>Professional Design</h5>
                            <p>Custom, brand-aligned visuals that create a stunning first impression.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Responsive Experience</h5>
                            <p>Seamless functionality across all devices and screen sizes.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <h5>Conversion Optimization</h5>
                            <p>Strategic layouts and CTAs designed to maximize leads and sales.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-search text-primary"></i>
                        </div>
                        <div>
                            <h5>SEO Foundation</h5>
                            <p>Built-in optimization for better search engine visibility and rankings.</p>
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
                <h2 class="section-title">Our Business Website Design Process</h2>
                <p class="section-description">
                    A comprehensive approach to creating effective business websites
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
                    <p>We analyze your business goals, target audience, and competitive landscape to inform the strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>UX/UI Design</h4>
                    <p>We create wireframes and visual designs that balance aesthetics with usability and conversions.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build your website with clean code, ensuring performance and compatibility.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Launch & Growth</h4>
                    <p>We deploy your site and provide ongoing support to ensure continued business success.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website Types -->
<section class="website-types-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Business Website Types</h2>
                <p class="section-description">
                    Tailored solutions for different business needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                    <h4>Corporate Websites</h4>
                    <p>Professional websites for established businesses that showcase company information, services, team, and corporate values to build credibility and trust.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-store fa-2x text-primary"></i>
                    </div>
                    <h4>Small Business Sites</h4>
                    <p>Effective, budget-friendly websites that help local and small businesses establish an online presence, attract customers, and highlight services.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-briefcase fa-2x text-primary"></i>
                    </div>
                    <h4>Professional Services</h4>
                    <p>Specialized websites for consultants, lawyers, financial advisors, and other professionals that emphasize expertise and generate qualified leads.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-industry fa-2x text-primary"></i>
                    </div>
                    <h4>Industrial & Manufacturing</h4>
                    <p>Technical websites that effectively showcase products, specifications, and industrial capabilities for B2B audiences and procurement teams.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-lightbulb fa-2x text-primary"></i>
                    </div>
                    <h4>Startup Websites</h4>
                    <p>Modern, innovative websites for new ventures that communicate unique value propositions and help secure funding or early customers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-handshake fa-2x text-primary"></i>
                    </div>
                    <h4>B2B Portals</h4>
                    <p>Sophisticated websites with client portals, resource centers, and lead generation tools for businesses selling to other businesses.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="features-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Essential Business Website Features</h2>
                <p class="section-description">
                    Key components for a successful business website
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-award fa-2x text-primary"></i>
                    </div>
                    <h4>Brand Storytelling</h4>
                    <p>Compelling about pages, company history, mission statements, and values that communicate your unique brand story.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-clipboard-list fa-2x text-primary"></i>
                    </div>
                    <h4>Service/Product Showcase</h4>
                    <p>Detailed, benefit-focused presentations of your offerings with compelling visual content and persuasive copy.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-comment-dots fa-2x text-primary"></i>
                    </div>
                    <h4>Contact & Inquiry Forms</h4>
                    <p>Strategically placed conversion points with lead capture forms optimized for maximum completion rates.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Testimonials & Case Studies</h4>
                    <p>Social proof elements that build trust by showcasing client success stories and positive experiences.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-newspaper fa-2x text-primary"></i>
                    </div>
                    <h4>Blog & Resources</h4>
                    <p>Content marketing platforms that establish thought leadership and improve SEO with valuable industry insights.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-analytics fa-2x text-primary"></i>
                    </div>
                    <h4>Analytics Integration</h4>
                    <p>Built-in tracking and reporting tools to measure performance and continuously improve business results.</p>
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
                <h2 class="section-title">Benefits of Professional Business Websites</h2>
                <p class="section-description">
                    How a custom business website drives growth and success
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-plus fa-2x text-primary"></i>
                    </div>
                    <h4>Increased Lead Generation</h4>
                    <p>Attract qualified prospects with compelling content and clear calls-to-action that convert visitors into leads.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-medal fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Credibility</h4>
                    <p>Build trust and professionalism with a polished online presence that reflects your business quality.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4>Extended Market Reach</h4>
                    <p>Access new customers beyond geographic limitations and expand your business opportunities.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-clock fa-2x text-primary"></i>
                    </div>
                    <h4>24/7 Business Presence</h4>
                    <p>Provide information and services around the clock, even when your physical location is closed.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bullhorn fa-2x text-primary"></i>
                    </div>
                    <h4>Improved Marketing Efficiency</h4>
                    <p>Create a central hub for all marketing efforts, enhancing the effectiveness of digital campaigns.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-bar fa-2x text-primary"></i>
                    </div>
                    <h4>Measurable Results</h4>
                    <p>Track performance with detailed analytics to make data-driven business decisions.</p>
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
                <h2 class="mb-3">Ready to Elevate Your Business Online?</h2>
                <p class="lead mb-0">
                    Let's create a website that attracts customers and drives business growth.
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
            <h2 class="faq-title">Business Websites FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to design and develop a business website?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline for designing and developing a business website typically ranges from 4-12 weeks, depending on the complexity and scope of the project. A basic small business website with 5-7 pages might take 4-6 weeks from kickoff to launch. More complex business websites with custom functionality, extensive content, or e-commerce capabilities can take 8-12 weeks or more. The project timeline includes discovery and planning (1-2 weeks), design (2-3 weeks), development (2-4 weeks), content integration (1-2 weeks), and testing/launch (1 week). Factors that can impact the timeline include the responsiveness of client feedback, the complexity of design requirements, the amount of custom functionality needed, and the availability of content. We provide a detailed timeline during our initial project planning phase.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What should I prepare before starting a business website project?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>To ensure a smooth website development process, we recommend preparing several key elements before starting your project: 1) Clear business goals for your website (lead generation, brand awareness, information sharing, etc.); 2) Brand assets including your logo, color palette, fonts, and any existing style guides; 3) Content for key pages, including company information, service/product details, and team bios; 4) High-quality images, videos, or other visual assets (or budget for professional photography); 5) Examples of websites you like, particularly competitors or industry peers; 6) Information about your target audience and customer personas; 7) Technical requirements including existing domain information, hosting preferences, and integration needs; and 8) Analytics from your current website (if applicable) to understand existing traffic patterns. Don't worry if you don't have all these elements prepared—we can help guide you through the process and provide resources for content development and brand refinement if needed.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you ensure our business website will generate leads or sales?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We take a comprehensive approach to ensuring your business website drives measurable results. First, we conduct thorough audience research to understand your customers' needs, pain points, and decision-making processes. We incorporate strategic calls-to-action throughout the site, optimizing their placement, design, and messaging based on user behavior data. All lead capture forms are designed for maximum conversion, with careful attention to field requirements and user experience. We implement conversion rate optimization (CRO) best practices, including persuasive content structures, social proof elements, and urgency triggers where appropriate. The website architecture is planned with clear customer journeys that guide visitors toward conversion points. After launch, we set up comprehensive analytics and heatmap tracking to monitor user behavior and continually refine the site based on real performance data. We can also integrate with your CRM system to provide closed-loop reporting on lead quality and sales outcomes, allowing for ongoing optimization.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 