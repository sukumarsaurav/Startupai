<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Include the configuration file
require_once '../../../includes/config.php';

// Page specific content
$pageTitle = "Online Reviews & PR Management";
$pageDescription = "Build and maintain a stellar online reputation with our comprehensive review management and PR services. Turn customer feedback into growth opportunities.";
$serviceName = "Online Reviews & PR Management";
$serviceSlug = "online-reviews-pr-management";

// Include the header
require_once '../../../includes/header.php';

// Get Why Hire Us content
$whyHireUsContent = getWhyHireUsContent('reputation-management');
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
                    <h2 class="section-title">Master Your Online Reputation</h2>
                    <p class="lead">Take control of your online presence with our comprehensive review management and PR services. We help businesses build trust, manage their reputation, and turn customer feedback into opportunities for growth.</p>
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
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Review Management</h3>
                    <p>Proactive management of your online reviews across all major platforms.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Review monitoring and response</li>
                        <li><i class="fas fa-check"></i> Review generation strategies</li>
                        <li><i class="fas fa-check"></i> Sentiment analysis</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>PR Management</h3>
                    <p>Strategic public relations to enhance your brand's visibility and credibility.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Press release creation</li>
                        <li><i class="fas fa-check"></i> Media outreach</li>
                        <li><i class="fas fa-check"></i> Story placement</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Reputation Monitoring</h3>
                    <p>Continuous monitoring and analysis of your online reputation.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Brand mention tracking</li>
                        <li><i class="fas fa-check"></i> Sentiment tracking</li>
                        <li><i class="fas fa-check"></i> Competitor analysis</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Customer Feedback Management</h3>
                    <p>Turn customer feedback into actionable insights and improvements.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Feedback analysis</li>
                        <li><i class="fas fa-check"></i> Response strategy</li>
                        <li><i class="fas fa-check"></i> Service improvement recommendations</li>
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
                <h2 class="text-center mb-5">Why Our Reputation Management Works</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-clock"></i>
                            <h3>Real-time Monitoring</h3>
                            <p>Instant alerts and monitoring of your brand mentions across the web.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-bullseye"></i>
                            <h3>Strategic Response</h3>
                            <p>Carefully crafted responses that protect and enhance your reputation.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-chart-bar"></i>
                            <h3>Data-Driven Insights</h3>
                            <p>Analytics and reporting to track reputation trends and improvements.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Proactive Protection</h3>
                            <p>Preventive measures to maintain a positive online presence.</p>
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
        <h2 class="text-center mb-5">Our Reputation Management Process</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Audit & Analysis</h3>
                    <p>Comprehensive review of your current online reputation and presence.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Strategy Development</h3>
                    <p>Create customized plan for reputation management and improvement.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-implementation"></i>
                    </div>
                    <h3>Implementation</h3>
                    <p>Execute reputation management strategies across all channels.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Monitor & Optimize</h3>
                    <p>Continuous monitoring and optimization of results.</p>
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
                    <i class="fas fa-star"></i>
                    <h3>Enhanced Credibility</h3>
                    <p>Build trust and credibility with potential customers through positive reviews.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Increased Sales</h3>
                    <p>Better reviews and reputation lead to higher conversion rates.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Brand Protection</h3>
                    <p>Proactive management to protect your brand from reputation damage.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Greater Visibility</h3>
                    <p>Improved online presence and visibility in search results.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-comments"></i>
                    <h3>Better Customer Insights</h3>
                    <p>Gain valuable feedback to improve products and services.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Customer Trust</h3>
                    <p>Build lasting relationships through transparent communication.</p>
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
                <h2 class="mb-4">Ready to Build a Stellar Online Reputation?</h2>
                <p class="lead mb-0">Let us help you manage and enhance your online presence.</p>
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
                                How long does it take to see results?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Results timeline varies depending on your current reputation status and goals. Initial improvements can be seen within 1-2 months, with significant changes typically visible within 3-6 months of consistent management.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Can negative reviews be removed?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                While we can't directly remove legitimate reviews, we can help address negative feedback professionally and work to generate more positive reviews. In cases of fake or defamatory reviews, we can assist in reporting them to platforms for removal.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Which platforms do you monitor?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We monitor all major review platforms including Google, Yelp, Facebook, industry-specific sites, and social media platforms. We also track mentions across news sites, blogs, and forums relevant to your business.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                How do you handle review responses?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We develop customized response templates aligned with your brand voice, but each response is personalized to address specific feedback. All responses are reviewed by you before posting to ensure accuracy and appropriateness.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                What reporting do you provide?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We provide monthly comprehensive reports including review statistics, sentiment analysis, response rates, and reputation trends. Reports also include actionable insights and recommendations for continuous improvement.
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