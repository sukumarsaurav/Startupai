<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
// Page specific content
$pageTitle = "Google Ads Services";
$pageDescription = "Drive targeted traffic to your website with strategic Google Ad campaigns";
$serviceName = "Google Ads";
$serviceSlug = "google-ads";


require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Google Ads
$why_hire_us = getWhyHireUsContent('google-ads');

require_once '../../../includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                    <p class="lead"><?php echo $pageDescription; ?></p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="../../../assets/images/services/google-ads.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4" data-aos="fade-up">
                    <h2>Strategic Google Ads Management</h2>
                    <p class="lead"><?php echo $pageDescription; ?></p>
                    <p>Our Google Ads management services focus on creating targeted campaigns that drive qualified traffic and maximize your return on investment. We combine data-driven strategies, advanced targeting, and continuous optimization to ensure your ads reach the right audience at the right time.</p>
                </div>
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-highlights p-4 bg-light rounded">
                        <h3>Key Features</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i> Campaign Strategy Development</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Keyword Research & Analysis</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Ad Copy Optimization</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Landing Page Optimization</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Performance Tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hire Us Section -->
    <?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Our Google Ads Management Process</h2>
            <div class="row">
                <div class="col-md-3 mb-4" data-aos="fade-up">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h3>Research</h3>
                        <p>Analyze market, competitors, and keywords</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-bullseye fa-2x"></i>
                        </div>
                        <h3>Strategy</h3>
                        <p>Develop targeted campaign structure</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-rocket fa-2x"></i>
                        </div>
                        <h3>Launch</h3>
                        <p>Create and deploy optimized campaigns</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <h3>Optimize</h3>
                        <p>Monitor and improve performance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Benefits of Professional Google Ads Management</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="benefit-card">
                        <i class="fas fa-bullseye fa-3x mb-3"></i>
                        <h3>Targeted Traffic</h3>
                        <p>Reach your ideal customers with precise targeting</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card">
                        <i class="fas fa-chart-pie fa-3x mb-3"></i>
                        <h3>Measurable Results</h3>
                        <p>Track and analyze campaign performance in real-time</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card">
                        <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                        <h3>ROI Focused</h3>
                        <p>Maximize return on your advertising investment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="mb-3">Ready to Boost Your Ad Performance?</h2>
                    <p class="lead mb-0">Let's create a Google Ads strategy that drives results for your business.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-header">
                <h2 class="faq-title">Google Ads FAQ's</h2>
                <h3 class="faq-subtitle">Have Any Questions?</h3>
            </div>

            <div class="faq-container">
                <div class="faq-column">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item active">
                        <div class="faq-question">
                            <span>How quickly can I expect to see results from Google Ads?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Google Ads can start driving traffic to your website immediately after launching. However, achieving optimal performance typically takes 2-3 months as we gather data, test different approaches, and optimize your campaigns based on performance metrics.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What is your approach to budget management?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We take a strategic approach to budget management, focusing on maximizing ROI. We start with careful keyword selection, implement smart bidding strategies, and continuously monitor and adjust campaigns to ensure your budget is spent effectively.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you measure campaign success?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We track multiple metrics including click-through rates, conversion rates, cost per conversion, quality scores, and return on ad spend. We provide regular reports with detailed analysis and insights about your campaign's performance.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you provide landing page optimization?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer landing page optimization as part of our Google Ads management service. We ensure your landing pages are aligned with your ad content, optimized for conversions, and provide the best possible user experience.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-column">
                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What types of Google Ads campaigns do you manage?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We manage all types of Google Ads campaigns including Search, Display, Shopping, Video, and Remarketing. We recommend the best campaign types based on your business goals and target audience.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How often will I receive performance reports?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We provide detailed monthly reports covering all key metrics and insights. Additionally, you'll have access to real-time campaign data, and we schedule regular strategy calls to discuss performance and adjustments.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What makes your Google Ads service unique?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We combine data-driven strategies, advanced automation, and human expertise to deliver superior results. Our approach includes custom audience targeting, AI-powered optimization, and continuous testing to maximize campaign performance.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can you work with my existing Google Ads account?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we can work with your existing Google Ads account. We'll perform a comprehensive audit, identify opportunities for improvement, and implement optimizations while maintaining your historical data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once '../../../includes/footer.php'; ?> 