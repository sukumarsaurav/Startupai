<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Include the configuration file
require_once '../../../includes/config.php';

// Page specific content
$pageTitle = "Landing Page Optimization";
$pageDescription = "Maximize your conversion rates with data-driven landing page optimization strategies. Transform visitors into customers with scientifically-proven techniques.";
$serviceName = "Landing Page Optimization";
$serviceSlug = "landing-page-optimization";

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
                    <h2 class="section-title">Transform Your Landing Pages into Conversion Machines</h2>
                    <p class="lead">Your landing page is often the first impression potential customers have of your business. We optimize every element to maximize conversions and drive measurable results.</p>
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
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Conversion Research & Analysis</h3>
                    <p>Comprehensive analysis of your current landing pages, user behavior, and conversion bottlenecks to identify optimization opportunities.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> User behavior analysis</li>
                        <li><i class="fas fa-check"></i> Heatmap tracking</li>
                        <li><i class="fas fa-check"></i> A/B testing insights</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Design Optimization</h3>
                    <p>Strategic improvements to layout, visual hierarchy, and design elements to enhance user experience and drive conversions.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Visual hierarchy optimization</li>
                        <li><i class="fas fa-check"></i> Mobile responsiveness</li>
                        <li><i class="fas fa-check"></i> Loading speed optimization</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Content Optimization</h3>
                    <p>Data-driven content improvements to better communicate your value proposition and drive user action.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Headline optimization</li>
                        <li><i class="fas fa-check"></i> Value proposition refinement</li>
                        <li><i class="fas fa-check"></i> Call-to-action optimization</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Testing & Optimization</h3>
                    <p>Continuous A/B testing and optimization to maximize conversion rates and ROI.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> A/B testing implementation</li>
                        <li><i class="fas fa-check"></i> Performance tracking</li>
                        <li><i class="fas fa-check"></i> Iterative improvements</li>
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
                <h2 class="text-center mb-5">Why Our Landing Page Optimization Works</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-bullseye"></i>
                            <h3>Data-Driven Approach</h3>
                            <p>Every optimization decision is backed by real user data and proven conversion principles.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-users"></i>
                            <h3>User-Centric Design</h3>
                            <p>Focus on creating intuitive, engaging experiences that guide users toward conversion.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-mobile-alt"></i>
                            <h3>Mobile Optimization</h3>
                            <p>Ensure your landing pages perform flawlessly across all devices and screen sizes.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-chart-bar"></i>
                            <h3>Measurable Results</h3>
                            <p>Track and optimize key metrics to continuously improve conversion rates.</p>
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
        <h2 class="text-center mb-5">Our Landing Page Optimization Process</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Research & Analysis</h3>
                    <p>Analyze current performance, user behavior, and conversion bottlenecks.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Strategy Development</h3>
                    <p>Create data-driven optimization strategy based on research findings.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Implementation</h3>
                    <p>Execute optimization changes and set up tracking systems.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Testing & Optimization</h3>
                    <p>Conduct A/B tests and continuously optimize based on results.</p>
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
                    <i class="fas fa-arrow-up"></i>
                    <h3>Higher Conversion Rates</h3>
                    <p>Transform more visitors into customers with optimized landing pages.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-dollar-sign"></i>
                    <h3>Improved ROI</h3>
                    <p>Maximize return on your marketing investment with better conversion rates.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-users"></i>
                    <h3>Better User Experience</h3>
                    <p>Create engaging, intuitive experiences that build trust and drive action.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-chart-bar"></i>
                    <h3>Data-Driven Decisions</h3>
                    <p>Make informed decisions based on real user behavior and conversion data.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile Optimization</h3>
                    <p>Ensure your landing pages perform well across all devices.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-sync"></i>
                    <h3>Continuous Improvement</h3>
                    <p>Ongoing optimization to maintain and improve conversion rates.</p>
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
                <h2 class="mb-4">Ready to Optimize Your Landing Pages?</h2>
                <p class="lead mb-0">Let's transform your landing pages into conversion machines. Get started with a free consultation today.</p>
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
                                How long does it take to see results from landing page optimization?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Initial improvements can be implemented within 2-4 weeks, but significant conversion rate improvements typically take 2-3 months of continuous testing and optimization. The timeline varies based on your current conversion rates, traffic volume, and specific goals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What metrics do you track for landing page optimization?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We track key metrics including conversion rate, bounce rate, time on page, click-through rate, form completion rate, and user engagement metrics. We also analyze heatmaps and user behavior data to identify optimization opportunities.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How do you determine what to test?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We use data from analytics, heatmaps, and user feedback to identify potential areas for improvement. Common elements we test include headlines, call-to-action buttons, form fields, page layout, and content structure.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What is A/B testing and how does it work?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                A/B testing involves creating two versions of a landing page element (A and B) and showing them to different visitors to determine which performs better. We use statistical analysis to ensure results are significant before implementing changes.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How do you ensure mobile optimization?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We test landing pages across multiple devices and screen sizes, optimize loading speed, ensure touch-friendly elements, and maintain readability on mobile devices. We also analyze mobile-specific user behavior to optimize the mobile experience.
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