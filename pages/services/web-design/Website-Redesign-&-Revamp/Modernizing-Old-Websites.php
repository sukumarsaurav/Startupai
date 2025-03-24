<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Modernizing Old Websites
$why_hire_us = getWhyHireUsContent('modernizing-old-websites');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Modernizing Old Websites</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Transform outdated sites into contemporary, high-performing digital experiences
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
                <img src="/assets/images/services/website-modernization.svg" alt="Website Modernization" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Website Modernization Services</h2>
                <p>
                    Our website modernization services breathe new life into aging digital properties, transforming outdated sites into contemporary, competitive online experiences. We preserve what works while implementing modern design standards, updated technologies, and performance improvements. Whether your site is functionally obsolete, visually dated, or failing to meet user expectations, our strategic modernization approach delivers results without starting from scratch.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-paint-brush text-primary"></i>
                        </div>
                        <div>
                            <h5>Visual Refreshing</h5>
                            <p>Updated aesthetics with modern design trends, typography, and visual elements.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-code text-primary"></i>
                        </div>
                        <div>
                            <h5>Technology Upgrades</h5>
                            <p>Implementing current frameworks, CMS versions, and development standards.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Responsive Transformation</h5>
                            <p>Adapting fixed layouts to function flawlessly across all modern devices.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-tachometer-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Performance Optimization</h5>
                            <p>Enhancing speed, user experience, and search engine compatibility.</p>
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
                <h2 class="section-title">Our Website Modernization Process</h2>
                <p class="section-description">
                    A methodical approach to transforming legacy websites
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-search fa-3x text-primary"></i>
                    </div>
                    <h4>Comprehensive Assessment</h4>
                    <p>We analyze your current site architecture, content, design, technology stack, and performance metrics to identify strengths and areas for improvement.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Modernization Strategy</h4>
                    <p>We develop a prioritized plan addressing design, technology, content, and functionality updates while preserving valuable existing assets.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-sync-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Implementation</h4>
                    <p>We execute updates systematically, ensuring continuity of business operations and minimal disruption to users and search rankings.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Launch & Optimization</h4>
                    <p>We deploy your modernized site with thorough testing and establish ongoing monitoring to ensure optimal performance and results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modernization Elements -->
<section class="modernization-elements-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Key Modernization Elements</h2>
                <p class="section-description">
                    Essential components of our website modernization approach
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-desktop fa-2x text-primary"></i>
                    </div>
                    <h4>Design Modernization</h4>
                    <p>Outdated visual designs can make even technically sound websites seem obsolete. Our design modernization includes:</p>
                    <ul class="mt-3">
                        <li>Contemporary aesthetic updates</li>
                        <li>Modern typography systems</li>
                        <li>Updated color schemes</li>
                        <li>Enhanced visual hierarchy</li>
                        <li>Improved whitespace utilization</li>
                        <li>Modern UI component styling</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Responsive Transformation</h4>
                    <p>Fixed-width sites built before the mobile era need adaptation for today's multi-device world. Our responsive updates include:</p>
                    <ul class="mt-3">
                        <li>Mobile-first responsive layouts</li>
                        <li>Touch-friendly navigation systems</li>
                        <li>Flexible image and media handling</li>
                        <li>Viewport-specific content prioritization</li>
                        <li>Adaptive typography systems</li>
                        <li>Device-optimized interactions</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-code fa-2x text-primary"></i>
                    </div>
                    <h4>Technical Modernization</h4>
                    <p>Aging codebases pose security risks and limit functionality. Our technical updates include:</p>
                    <ul class="mt-3">
                        <li>CMS and framework upgrades</li>
                        <li>Legacy code refactoring</li>
                        <li>Modern JavaScript implementation</li>
                        <li>Security enhancements</li>
                        <li>Database optimization</li>
                        <li>API integrations and connectivity</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Performance Optimization</h4>
                    <p>Old sites often suffer from bloated code and outdated practices. Our performance updates include:</p>
                    <ul class="mt-3">
                        <li>Code optimization and minification</li>
                        <li>Image and media optimization</li>
                        <li>Caching implementation</li>
                        <li>CDN integration</li>
                        <li>Core Web Vitals improvements</li>
                        <li>Streamlined resource loading</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-universal-access fa-2x text-primary"></i>
                    </div>
                    <h4>Accessibility Improvements</h4>
                    <p>Legacy sites often lack critical accessibility features. Our accessibility updates include:</p>
                    <ul class="mt-3">
                        <li>WCAG 2.1 compliance improvements</li>
                        <li>Screen reader compatibility</li>
                        <li>Keyboard navigation enhancements</li>
                        <li>Color contrast optimization</li>
                        <li>Semantic HTML structure</li>
                        <li>Accessible form implementations</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>SEO Modernization</h4>
                    <p>Search algorithms have evolved, leaving old SEO tactics ineffective. Our SEO updates include:</p>
                    <ul class="mt-3">
                        <li>Modern metadata implementation</li>
                        <li>Schema markup integration</li>
                        <li>Mobile-friendly optimization</li>
                        <li>Page speed improvements</li>
                        <li>URL structure refinement</li>
                        <li>Core Web Vitals optimization</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modernization Approaches -->
<section class="approaches-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Modernization Approaches</h2>
                <p class="section-description">
                    Tailored strategies based on your specific needs and constraints
                </p>
            </div>
        </div>
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="/assets/images/services/phased-approach.svg" alt="Phased Modernization" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h3 class="mb-3">Phased Modernization</h3>
                <p>
                    Ideal for businesses that can't afford downtime or a complete rebuild, our phased approach implements improvements incrementally while maintaining continuity. This methodical process allows for budget spreading and minimizes disruption.
                </p>
                <div class="advantages mt-4">
                    <div class="advantage d-flex align-items-start mb-3">
                        <div class="advantage-icon me-3">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        <div>
                            <h5>Continuous Improvement</h5>
                            <p>Implement changes gradually with minimal business disruption</p>
                        </div>
                    </div>
                    <div class="advantage d-flex align-items-start mb-3">
                        <div class="advantage-icon me-3">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        <div>
                            <h5>Distributed Investment</h5>
                            <p>Spread the modernization budget over time instead of all at once</p>
                        </div>
                    </div>
                    <div class="advantage d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        <div>
                            <h5>Adaptable Strategy</h5>
                            <p>Adjust priorities based on performance data from earlier phases</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                <img src="/assets/images/services/complete-overhaul.svg" alt="Complete Redesign" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <h3 class="mb-3">Complete Modernization</h3>
                <p>
                    For websites that require fundamental restructuring or have fallen significantly behind current standards, our comprehensive approach delivers a fully modernized site with current design trends and technologies while preserving SEO equity.
                </p>
                <div class="advantages mt-4">
                    <div class="advantage d-flex align-items-start mb-3">
                        <div class="advantage-icon me-3">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        <div>
                            <h5>Holistic Transformation</h5>
                            <p>Address all outdated elements simultaneously for maximum impact</p>
                        </div>
                    </div>
                    <div class="advantage d-flex align-items-start mb-3">
                        <div class="advantage-icon me-3">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        <div>
                            <h5>Clean Implementation</h5>
                            <p>Eliminate legacy constraints while preserving valuable content and SEO</p>
                        </div>
                    </div>
                    <div class="advantage d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <i class="fas fa-check-circle text-success"></i>
                        </div>
                        <div>
                            <h5>Future-Proofing</h5>
                            <p>Build on current technologies to maximize longevity and adaptability</p>
                        </div>
                    </div>
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
                <h2 class="section-title">Benefits of Website Modernization</h2>
                <p class="section-description">
                    Why updating your aging website delivers significant returns
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-friends fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced User Experience</h4>
                    <p>Modern interfaces, intuitive navigation, and responsive designs create positive interactions that keep visitors engaged and convert at higher rates.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Multi-Device Compatibility</h4>
                    <p>Responsive modernization ensures your site performs flawlessly across smartphones, tablets, desktops, and emerging devices, capturing all potential traffic.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Improved Performance</h4>
                    <p>Technical modernization results in faster load times, smoother interactions, and better overall performance that enhances user satisfaction and conversions.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>Better Search Visibility</h4>
                    <p>Modern SEO practices, mobile-friendly design, and performance improvements align with current search algorithms, enhancing your organic visibility.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Security</h4>
                    <p>Updating outdated technologies and implementing modern security practices protects your business and customer data from emerging threats.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-cogs fa-2x text-primary"></i>
                    </div>
                    <h4>Improved Maintainability</h4>
                    <p>Modern codebases and CMS platforms make updates easier, reduce long-term maintenance costs, and provide greater flexibility for future enhancements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies -->
<section class="case-studies-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Modernization Success Stories</h2>
                <p class="section-description">
                    Real results from our website modernization projects
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="case-study-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4>Professional Services Firm Transformation</h4>
                    <p class="text-muted">Law Practice Modernization</p>
                    <p>A well-established law firm was operating a 7-year-old non-responsive website with outdated design and poor mobile performance. The site was built on an obsolete CMS version with security vulnerabilities and limited functionality.</p>
                    <p>We implemented a phased modernization approach, first addressing critical mobile responsiveness and security issues, then upgrading the CMS while preserving content and SEO equity. Finally, we executed a comprehensive visual refresh with modern design patterns.</p>
                    <div class="results mt-3">
                        <div class="result d-flex align-items-center mb-2">
                            <i class="fas fa-mobile-alt text-success me-2"></i>
                            <span>Mobile traffic increased by 64%</span>
                        </div>
                        <div class="result d-flex align-items-center mb-2">
                            <i class="fas fa-search text-success me-2"></i>
                            <span>Organic search visibility improved by 42%</span>
                        </div>
                        <div class="result d-flex align-items-center">
                            <i class="fas fa-user-plus text-success me-2"></i>
                            <span>Lead generation increased by 37%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="case-study-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4>E-commerce Platform Modernization</h4>
                    <p class="text-muted">Specialty Retailer Update</p>
                    <p>A specialty retailer was struggling with a decade-old e-commerce platform that had poor mobile usability, slow performance, and limited integration capabilities with modern marketing tools. Checkout abandonment was high, and inventory management was inefficient.</p>
                    <p>We executed a complete modernization with a new e-commerce platform while carefully migrating products, customer accounts, and order history. The new site featured contemporary design, streamlined checkout, and robust integrations with their business systems.</p>
                    <div class="results mt-3">
                        <div class="result d-flex align-items-center mb-2">
                            <i class="fas fa-shopping-cart text-success me-2"></i>
                            <span>Conversion rate increased by 86%</span>
                        </div>
                        <div class="result d-flex align-items-center mb-2">
                            <i class="fas fa-undo-alt text-success me-2"></i>
                            <span>Cart abandonment reduced by 34%</span>
                        </div>
                        <div class="result d-flex align-items-center">
                            <i class="fas fa-dollar-sign text-success me-2"></i>
                            <span>Average order value improved by 28%</span>
                        </div>
                    </div>
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
                <h2 class="mb-3">Ready to Modernize Your Website?</h2>
                <p class="lead mb-0">
                    Let's transform your outdated site into a contemporary digital experience that impresses visitors and drives results.
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
            <h2 class="faq-title">Website Modernization FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How do I know if my website needs modernization?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Several indicators suggest your website may need modernization: 1) It's not fully responsive on mobile devices, 2) It loads slowly (taking more than 3 seconds), 3) It has an outdated visual design with small text, limited whitespace, or dated graphics, 4) It's built on obsolete or unsupported technology, 5) You're unable to easily update content or add features, 6) Your conversion rates are declining despite stable traffic, 7) Your competitors' sites offer a notably better user experience, or 8) Your site has poor search engine visibility despite SEO efforts. If you recognize several of these signs, a modernization assessment can help determine the specific improvements needed to bring your site up to current standards and expectations.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Will modernizing my website affect my SEO rankings?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>When properly executed, website modernization should positively impact your SEO rankings. Our approach carefully preserves valuable SEO equity while implementing improvements that align with current search engine algorithms. We maintain URL structures where possible or implement proper redirects to prevent traffic loss. Modern websites benefit from improved mobile-friendliness, faster loading times, and better user experience metrics—all factors that search engines now prioritize. Additionally, we implement current technical SEO best practices like schema markup, enhanced metadata, and improved site architecture. Many clients see ranking improvements within 2-3 months after modernization as search engines recognize the enhanced user experience and technical improvements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Is it better to modernize my existing site or build a completely new one?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The decision between modernization and complete rebuilding depends on several factors. Modernization is often preferable when: 1) Your site has substantial valuable content that would be time-consuming to recreate, 2) You have established SEO rankings you don't want to risk, 3) Your basic site structure is sound but needs updating, or 4) You need to spread out investment over time. A complete rebuild might be better when: 1) Your site is built on obsolete technology that can't be effectively updated, 2) Your business objectives or target audience have fundamentally changed, 3) Your site structure needs complete rethinking, or 4) The cost of updating would exceed rebuilding. Our assessment process helps determine which approach offers the best value and results for your specific situation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
