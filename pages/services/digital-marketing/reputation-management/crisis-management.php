<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Include the configuration file
require_once '../../../includes/config.php';

// Page specific content
$pageTitle = "Crisis Management";
$pageDescription = "Expert crisis management services to protect and restore your brand's reputation during challenging times. Swift, strategic response to minimize impact and maintain stakeholder trust.";
$serviceName = "Crisis Management";
$serviceSlug = "crisis-management";

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
                    <h2 class="section-title">Protect Your Brand During Critical Times</h2>
                    <p class="lead">When crisis strikes, every minute counts. Our expert crisis management team provides immediate response and strategic guidance to protect your reputation and maintain stakeholder confidence.</p>
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
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Crisis Prevention</h3>
                    <p>Proactive measures to identify and mitigate potential reputation risks.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Risk assessment</li>
                        <li><i class="fas fa-check"></i> Crisis plan development</li>
                        <li><i class="fas fa-check"></i> Team training</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Immediate Response</h3>
                    <p>Swift and strategic crisis response to minimize reputation damage.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> 24/7 crisis support</li>
                        <li><i class="fas fa-check"></i> Stakeholder communication</li>
                        <li><i class="fas fa-check"></i> Media management</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Reputation Recovery</h3>
                    <p>Strategic planning and execution to restore brand reputation.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Damage assessment</li>
                        <li><i class="fas fa-check"></i> Recovery strategy</li>
                        <li><i class="fas fa-check"></i> Brand rebuilding</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="service-card h-100">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Crisis Monitoring</h3>
                    <p>Continuous monitoring and analysis of crisis impact and recovery.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check"></i> Media monitoring</li>
                        <li><i class="fas fa-check"></i> Sentiment tracking</li>
                        <li><i class="fas fa-check"></i> Impact assessment</li>
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
                <h2 class="text-center mb-5">Why Our Crisis Management Works</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-clock"></i>
                            <h3>Rapid Response</h3>
                            <p>24/7 availability and swift action when crisis strikes.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-users"></i>
                            <h3>Expert Team</h3>
                            <p>Experienced crisis management professionals at your service.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-bullseye"></i>
                            <h3>Strategic Approach</h3>
                            <p>Data-driven strategies for effective crisis management.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="feature-card">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Comprehensive Protection</h3>
                            <p>Full-spectrum crisis prevention and management solutions.</p>
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
        <h2 class="text-center mb-5">Our Crisis Management Process</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Assessment</h3>
                    <p>Evaluate crisis situation and potential impact on reputation.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Strategy</h3>
                    <p>Develop immediate response and long-term recovery plans.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Action</h3>
                    <p>Execute crisis management strategies across all channels.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card">
                    <div class="process-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Recovery</h3>
                    <p>Monitor progress and adjust strategies for optimal recovery.</p>
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
                    <i class="fas fa-shield-alt"></i>
                    <h3>Minimized Impact</h3>
                    <p>Quick response to minimize reputation damage during crisis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-users"></i>
                    <h3>Stakeholder Trust</h3>
                    <p>Maintain confidence of customers, employees, and partners.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-chart-line"></i>
                    <h3>Faster Recovery</h3>
                    <p>Strategic approach for quicker reputation recovery.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Crisis Preparedness</h3>
                    <p>Better readiness for future reputation challenges.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-comments"></i>
                    <h3>Clear Communication</h3>
                    <p>Effective messaging to all stakeholders during crisis.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Long-term Protection</h3>
                    <p>Sustainable strategies for ongoing reputation protection.</p>
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
                <h2 class="mb-4">Prepare for the Unexpected</h2>
                <p class="lead mb-0">Don't wait for a crisis to strike. Be prepared with our expert crisis management services.</p>
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
                                How quickly can you respond to a crisis?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our crisis management team is available 24/7 and can begin responding to a crisis within minutes of notification. We maintain dedicated emergency response protocols to ensure immediate action when needed.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                What types of crises do you handle?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We handle a wide range of crisis situations including social media controversies, negative press coverage, product recalls, corporate scandals, data breaches, employee issues, and other reputation-threatening events.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                How do you measure crisis management success?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We track multiple metrics including media sentiment, social media response, stakeholder feedback, brand perception changes, and recovery time. Success is measured by how quickly and effectively we can stabilize and improve these indicators.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                What should we do to prepare for potential crises?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We recommend developing a comprehensive crisis management plan, conducting regular risk assessments, training key team members, and establishing clear communication protocols. Our team can help you implement these preparatory measures.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                How long does crisis recovery typically take?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Recovery time varies depending on the crisis severity and type. While immediate response happens within hours, full reputation recovery can take weeks to months. Our strategic approach aims to accelerate this process while ensuring sustainable results.
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