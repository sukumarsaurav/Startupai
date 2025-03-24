<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Include the configuration file
require_once '../../../includes/config.php';

// Page specific content
$pageTitle = "Personal Branding Strategies";
$pageDescription = "Build and maintain a powerful personal brand that sets you apart. Strategic personal branding solutions to enhance your professional reputation and visibility.";
$serviceName = "Personal Branding Strategies";
$serviceSlug = "personal-branding-strategies";

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
                    <h2 class="section-title">Elevate Your Personal Brand</h2>
                    <p class="lead">In today's digital world, your personal brand is your most valuable asset. We help you build and maintain a powerful personal brand that resonates with your audience and achieves your professional goals.</p>
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
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Brand Strategy Development</h3>
                    <p>Comprehensive personal branding strategy aligned with your goals.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Brand audit and analysis</li>
                        <li><i class="fas fa-check"></i> Target audience definition</li>
                        <li><i class="fas fa-check"></i> Unique value proposition</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Online Presence Management</h3>
                    <p>Strategic management of your digital footprint and online reputation.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Social media optimization</li>
                        <li><i class="fas fa-check"></i> Content strategy</li>
                        <li><i class="fas fa-check"></i> Website development</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-pen"></i>
                    </div>
                    <h3>Content Creation</h3>
                    <p>Professional content that showcases your expertise and personality.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Thought leadership articles</li>
                        <li><i class="fas fa-check"></i> Professional bio writing</li>
                        <li><i class="fas fa-check"></i> Social media content</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Brand Monitoring & Growth</h3>
                    <p>Continuous monitoring and optimization of your personal brand.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Performance tracking</li>
                        <li><i class="fas fa-check"></i> Reputation monitoring</li>
                        <li><i class="fas fa-check"></i> Growth strategies</li>
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
                <h2 class="text-center mb-5">Why Our Personal Branding Works</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-fingerprint"></i>
                            <h3>Authentic Approach</h3>
                            <p>Build a genuine personal brand that reflects your true identity.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-bullseye"></i>
                            <h3>Strategic Focus</h3>
                            <p>Data-driven strategies aligned with your professional goals.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-users"></i>
                            <h3>Audience Connection</h3>
                            <p>Build meaningful relationships with your target audience.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-chart-line"></i>
                            <h3>Measurable Results</h3>
                            <p>Track and optimize your personal brand performance.</p>
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
        <h2 class="text-center mb-5">Our Personal Branding Process</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Discovery</h3>
                    <p>Understand your goals, values, and target audience.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <h3>Strategy</h3>
                    <p>Develop your unique personal branding strategy.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Implementation</h3>
                    <p>Execute branding across all relevant channels.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Growth</h3>
                    <p>Monitor, optimize, and scale your personal brand.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Benefits -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Benefits of Personal Branding</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-star"></i>
                    <h3>Professional Growth</h3>
                    <p>Enhance career opportunities and professional visibility.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Trust Building</h3>
                    <p>Build credibility and trust with your audience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Increased Visibility</h3>
                    <p>Stand out in your industry and attract opportunities.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-users"></i>
                    <h3>Network Growth</h3>
                    <p>Expand your professional network effectively.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Business Growth</h3>
                    <p>Drive business opportunities through personal branding.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Reputation Control</h3>
                    <p>Take control of your professional narrative.</p>
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
                <h2 class="mb-4">Ready to Build Your Personal Brand?</h2>
                <p class="lead mb-0">Let's create a powerful personal brand that sets you apart.</p>
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
                                How long does it take to build a personal brand?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Building a strong personal brand is an ongoing process. Initial brand foundation can be established within 2-3 months, but continuous development and refinement are essential for long-term success.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Which platforms should I focus on?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Platform selection depends on your target audience and goals. We'll help you identify the most effective platforms for your personal brand, whether it's LinkedIn for professional networking, Instagram for visual storytelling, or other relevant channels.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How do you measure personal branding success?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We track various metrics including social media engagement, website traffic, media mentions, speaking opportunities, network growth, and business inquiries. Success metrics are customized based on your specific goals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What content should I create?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Content strategy is tailored to your expertise and audience preferences. This may include thought leadership articles, industry insights, professional achievements, behind-the-scenes content, and educational material that showcases your expertise.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How do I maintain consistency in my personal brand?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We help you develop brand guidelines, content calendars, and communication strategies to maintain consistency across all platforms. Regular reviews and adjustments ensure your brand remains authentic and aligned with your goals.
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