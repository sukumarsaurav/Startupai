<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Include the configuration file
require_once '../../../includes/config.php';

// Page specific content
$pageTitle = "Website Analytics & Heatmaps";
$pageDescription = "Gain deep insights into user behavior with advanced website analytics and heatmap tracking. Make data-driven decisions to optimize your conversion rates.";
$serviceName = "Website Analytics & Heatmaps";
$serviceSlug = "website-analytics-heatmaps";

// Include the header
require_once '../../../includes/header.php';

// Get Why Hire Us content
$whyHireUsContent = getWhyHireUsContent('cro');
?>

<!-- Page Header -->
<section class="page-header bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3"><?php echo $pageTitle; ?></h1>
                <p class="lead mb-0"><?php echo $pageDescription; ?></p>
            </div>
            <div class="col-lg-6 text-lg-end">
                <a href="#inquiryForm" class="btn btn-primary btn-lg">Request Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="section-title">Understand Your Users Like Never Before</h2>
                    <p class="lead">Transform raw data into actionable insights with our comprehensive analytics and heatmap solutions. Discover exactly how users interact with your website and make informed optimization decisions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Offered -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Advanced Analytics Setup</h3>
                    <p>Professional implementation of comprehensive analytics tracking to capture all essential user behavior data.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Google Analytics 4 setup</li>
                        <li><i class="fas fa-check"></i> Custom event tracking</li>
                        <li><i class="fas fa-check"></i> Goal configuration</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-map"></i>
                    </div>
                    <h3>Heatmap Implementation</h3>
                    <p>Visual representation of user behavior through click, scroll, and movement heatmaps.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Click tracking</li>
                        <li><i class="fas fa-check"></i> Scroll depth analysis</li>
                        <li><i class="fas fa-check"></i> Mouse movement tracking</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Session Recording</h3>
                    <p>Capture and analyze real user sessions to understand behavior patterns and identify issues.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> User journey recording</li>
                        <li><i class="fas fa-check"></i> Behavior analysis</li>
                        <li><i class="fas fa-check"></i> Issue identification</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Data Analysis & Reporting</h3>
                    <p>Transform complex data into actionable insights with comprehensive analysis and clear reporting.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Custom dashboards</li>
                        <li><i class="fas fa-check"></i> Regular reporting</li>
                        <li><i class="fas fa-check"></i> Actionable recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-5">Why Our Analytics & Heatmap Solutions Work</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-puzzle-piece"></i>
                            <h3>Comprehensive Integration</h3>
                            <p>Seamless integration of multiple data sources for a complete view of user behavior.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-eye"></i>
                            <h3>Visual Insights</h3>
                            <p>Clear visualization of complex data patterns through intuitive heatmaps and reports.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Privacy Compliance</h3>
                            <p>Full compliance with GDPR and other privacy regulations in data collection and analysis.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-lightbulb"></i>
                            <h3>Actionable Recommendations</h3>
                            <p>Clear, practical optimization suggestions based on data analysis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Our Analytics Implementation Process</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Audit & Planning</h3>
                    <p>Assess current tracking setup and define measurement goals and KPIs.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3>Implementation</h3>
                    <p>Set up analytics tools, heatmaps, and configure custom tracking.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Data Collection</h3>
                    <p>Gather user behavior data and validate tracking accuracy.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Analysis & Reporting</h3>
                    <p>Analyze data and provide actionable optimization recommendations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Benefits -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Business Benefits</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-bullseye"></i>
                    <h3>Data-Driven Decisions</h3>
                    <p>Make informed optimization decisions based on real user behavior data.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Improved ROI</h3>
                    <p>Optimize conversion paths and increase return on marketing investments.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-user-check"></i>
                    <h3>Better User Experience</h3>
                    <p>Identify and fix usability issues to enhance user satisfaction.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-funnel-dollar"></i>
                    <h3>Optimized Funnels</h3>
                    <p>Identify and fix conversion funnel bottlenecks for better performance.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-tasks"></i>
                    <h3>Prioritized Improvements</h3>
                    <p>Focus optimization efforts on areas with the highest impact potential.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-comments"></i>
                    <h3>Customer Insights</h3>
                    <p>Gain deeper understanding of customer behavior and preferences.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-4">Ready to Understand Your Users Better?</h2>
                <p class="lead mb-0">Get started with advanced analytics and heatmap tracking to optimize your website's performance.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="#inquiryForm" class="btn btn-light btn-lg">Request Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                What insights can I gain from heatmaps?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Heatmaps provide valuable insights into user behavior, including where users click most frequently, how far they scroll down pages, where they move their mouse, and which elements attract the most attention. This information helps identify popular content, unused elements, potential distractions, and optimal placement for important elements like CTAs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How long does it take to gather meaningful data?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                The time needed to gather meaningful data depends on your website's traffic volume. Generally, we recommend collecting data for at least 2-4 weeks to identify reliable patterns. However, some insights can be gained within days for high-traffic websites. We'll help determine the optimal data collection period based on your specific situation.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How do you ensure data privacy compliance?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We implement strict data privacy measures compliant with GDPR, CCPA, and other relevant regulations. This includes proper consent management, data anonymization, secure data storage, and transparent privacy policies. We also ensure that any third-party tools we use are privacy-compliant and configured to protect user data.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What types of reports do you provide?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We provide comprehensive reports that include user behavior analysis, conversion funnel performance, heatmap insights, and specific recommendations for improvement. Reports can be customized to focus on your key metrics and business goals. We typically deliver monthly reports with ongoing access to real-time data through custom dashboards.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How does this integrate with other CRO services?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Analytics and heatmaps form the foundation of effective CRO by providing data for all optimization decisions. This data informs landing page optimization, CTA enhancements, and other CRO efforts. We use these insights to identify opportunities, validate changes through A/B testing, and measure the impact of optimization efforts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($whyHireUsContent): ?>
    <?php echo $whyHireUsContent; ?>
<?php endif; ?>

<?php
// Include the footer
require_once '../../../includes/footer.php';
?> 