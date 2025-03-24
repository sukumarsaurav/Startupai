<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../config/database.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for SEO
$why_hire_us = getWhyHireUsContent('seo');

require_once '../../../components/header.php';
?>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bold" data-aos="fade-up">Search Engine Optimization</h1>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">
                        Increase your online visibility and drive quality traffic to your website
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
                    <img src="/assets/images/services/seo.jpg" alt="SEO Services" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Comprehensive SEO Solutions</h2>
                    <p>
                        Our SEO services are designed to help your business rank higher in search engine results, increasing organic traffic and expanding your online presence. We combine technical expertise, content optimization, and strategic link building to create a comprehensive approach that delivers sustainable results.
                    </p>
                    <div class="features mt-4">
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-search text-primary"></i>
                            </div>
                            <div>
                                <h5>Keyword Research & Strategy</h5>
                                <p>We identify high-value keywords that your target audience is searching for to create a data-driven SEO strategy.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-laptop-code text-primary"></i>
                            </div>
                            <div>
                                <h5>On-Page SEO</h5>
                                <p>We optimize your website's content, metadata, and structure to increase relevance for target keywords.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-link text-primary"></i>
                            </div>
                            <div>
                                <h5>Link Building</h5>
                                <p>We acquire high-quality backlinks from authoritative websites to strengthen your domain authority.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-cogs text-primary"></i>
                            </div>
                            <div>
                                <h5>Technical SEO</h5>
                                <p>We address technical issues that may impact search engine crawling and indexing of your website.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start">
                            <div class="feature-icon me-3">
                                <i class="fas fa-chart-line text-primary"></i>
                            </div>
                            <div>
                                <h5>Performance Tracking</h5>
                                <p>We continuously monitor your SEO performance and make data-driven adjustments to maximize results.</p>
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
                    <h2 class="section-title">Our SEO Process</h2>
                    <p class="section-description">
                        A systematic approach to improving your search rankings
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-search fa-3x text-primary"></i>
                        </div>
                        <h4>Research & Analysis</h4>
                        <p>We conduct a comprehensive audit of your website and analyze your competitors to identify opportunities for improvement.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-tools fa-3x text-primary"></i>
                        </div>
                        <h4>Technical Optimization</h4>
                        <p>We fix technical issues, improve site structure, and enhance performance to create a solid foundation for SEO success.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-file-alt fa-3x text-primary"></i>
                        </div>
                        <h4>Content Enhancement</h4>
                        <p>We optimize existing content and develop new content strategies to target valuable keywords and engage your audience.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-chart-bar fa-3x text-primary"></i>
                        </div>
                        <h4>Monitoring & Refinement</h4>
                        <p>We continuously track your rankings, traffic, and conversions to refine our approach and maximize results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services -->
    <section class="services-section py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Comprehensive SEO Services</h2>
                    <p class="section-description">
                        Our complete range of optimization solutions
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fas fa-code fa-2x text-primary"></i>
                        </div>
                        <h4>Technical SEO</h4>
                        <p>We improve site architecture, fix crawl errors, optimize page speed, enhance mobile usability, and implement schema markup to ensure search engines can effectively crawl and index your site.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fas fa-pencil-alt fa-2x text-primary"></i>
                        </div>
                        <h4>On-Page SEO</h4>
                        <p>We optimize title tags, meta descriptions, headings, content, and internal linking structure to increase your pages' relevance for target keywords and improve user experience.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fas fa-external-link-alt fa-2x text-primary"></i>
                        </div>
                        <h4>Off-Page SEO</h4>
                        <p>We build high-quality backlinks through content marketing, guest posting, and digital PR to increase your website's authority and improve search engine rankings.</p>
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
                    <h2 class="section-title">Benefits of Professional SEO</h2>
                    <p class="section-description">
                        Why invest in search engine optimization for your business
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="benefit-icon mb-3">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h4>Targeted Traffic</h4>
                        <p>Attract visitors actively searching for your products or services, resulting in higher conversion rates and better ROI.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="benefit-icon mb-3">
                            <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                        </div>
                        <h4>Cost-Effective Marketing</h4>
                        <p>Generate ongoing traffic without paying for each visitor, making SEO one of the most cost-effective long-term marketing strategies.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="benefit-icon mb-3">
                            <i class="fas fa-award fa-2x text-primary"></i>
                        </div>
                        <h4>Credibility & Trust</h4>
                        <p>High search rankings signal credibility to potential customers, establishing trust and authority in your industry.</p>
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
                    <h2 class="mb-3">Ready to Improve Your Search Rankings?</h2>
                    <p class="lead mb-0">
                        Let's create a customized SEO strategy to increase your visibility and drive targeted traffic to your website.
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
                <h2 class="faq-title">SEO Services FAQ's</h2>
                <h3 class="faq-subtitle">Have Any Questions?</h3>
            </div>

            <div class="faq-container">
                <div class="faq-column">
                    <!-- FAQ Item 1 - Open by default -->
                    <div class="faq-item active">
                        <div class="faq-question">
                            <span>What monthly deliverables can I expect if I hire you?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <ul>
                                <li>Full Audit / Old SEO Checkup</li>
                                <li>Onpage / Technical SEO</li>
                                <li>Google My Business Setups and Maintenance</li>
                                <li>Content Creation</li>
                                <li>Offpage SEO / Only Quality Backlink Creation</li>
                                <li>Keyword Tracking and Monitoring</li>
                                <li>Monthly Report</li>
                            </ul>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can SEO be done without a website?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>No, SEO (Search Engine Optimization) primarily focuses on improving a website's visibility in search engine results. Without a website, traditional SEO cannot be performed. However, you can still optimize your online presence through Google My Business, social media profiles, and local citations.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What is your USP as compared to other SEO Agencies?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our unique selling proposition includes transparent reporting, white-hat SEO techniques, customized strategies for each client, and a focus on sustainable long-term results rather than quick fixes. We also provide dedicated account managers and regular performance updates.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How long does it take to rank on Page 1?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Ranking on page 1 depends on various factors including your industry competition, current website condition, and target keywords. Generally, you can expect to see initial improvements within 3-6 months, with significant results typically appearing after 6-12 months of consistent SEO work.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-column">
                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What is Search Engine Optimization (SEO)?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Search Engine Optimization (SEO) is the practice of improving a website's visibility in search engine results pages (SERPs). It involves optimizing various aspects of your website including content, technical structure, and building quality backlinks to increase organic (non-paid) traffic.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What makes StartupAI a leading SEO Agency?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>StartupAI has established itself as a leading SEO agency through proven results, a team of experienced professionals, customized strategies for each client, transparent reporting, and a focus on ethical SEO practices that deliver sustainable long-term results.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What are the Main Benefits of SEO Services?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The main benefits of SEO services include increased organic traffic, better visibility in search results, higher quality leads, improved user experience, enhanced brand credibility, long-term sustainable results, and typically a better ROI compared to paid advertising.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How can I check monthly SEO progress?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>You can check monthly SEO progress through our detailed reports that include keyword rankings, organic traffic growth, backlink acquisition, conversion metrics, and other key performance indicators. We also provide access to a dashboard where you can monitor progress in real-time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Cost Calculator Button -->
        <div class="seo-calculator">
            <div class="seo-calculator-text">SEO Cost Calculator</div>
        </div>
    </section>

<?php require_once '../../../components/footer.php'; ?> 