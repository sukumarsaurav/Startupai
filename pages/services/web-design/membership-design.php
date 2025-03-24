<?php
/**
 * Membership Website Design Service Page
 */

// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('membership-design');

// Page specific content
$pageTitle = "Membership Website Design Services";
$pageDescription = "Build a thriving online community with our custom membership website design services";
$serviceName = "Membership Website Design";
$serviceSlug = "membership-design";

// Include the header
include_once '../../../components/header.php';
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
                <img src="../../../assets/images/services/membership-design.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Create a Thriving Online Community</h2>
                <p class="lead">Build sustainable revenue with exclusive content and member-only benefits</p>
                <p>Membership websites offer a powerful way to generate recurring revenue, foster community engagement, and deliver exclusive content to your dedicated audience. Our membership website design services focus on creating seamless user experiences that make joining, participating, and remaining a member as frictionless as possible.</p>
                <p>We design and develop custom membership platforms that align with your brand and business goals, whether you're creating online courses, exclusive content, community forums, or subscription services. From user registration and secure payment processing to member dashboards and content restriction, we handle all aspects of building a successful membership site.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> User-friendly registration and login</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Secure payment processing</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Member-only content restrictions</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Community features and forums</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Subscription management tools</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php
// Define reasons for hiring us
$reasons = [
    [
        'icon' => 'fas fa-users',
        'title' => 'Community-Focused Design',
        'description' => 'We create engaging user experiences that foster community interaction and keep members coming back.',
        'delay' => 100
    ],
    [
        'icon' => 'fas fa-lock',
        'title' => 'Secure Infrastructure',
        'description' => 'We implement robust security measures to protect member data and payment information.',
        'delay' => 200
    ],
    [
        'icon' => 'fas fa-money-bill-wave',
        'title' => 'Revenue Optimization',
        'description' => 'Our designs maximize conversion rates and reduce churn to help you build sustainable recurring revenue.',
        'delay' => 300
    ],
    [
        'icon' => 'fas fa-expand-arrows-alt',
        'title' => 'Scalable Solutions',
        'description' => 'We build membership sites that can grow with your community, from dozens to thousands of members.',
        'delay' => 400
    ]
];
renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Membership Site Development Process</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-compass"></i>
                    </div>
                    <h3>Strategy</h3>
                    <p>We help define your membership model, pricing structure, and content strategy to align with your business goals.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Planning</h3>
                    <p>We map out user journeys, content organization, and technical requirements for your membership platform.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Design & Development</h3>
                    <p>Our team creates an engaging interface and builds all the functionality needed for your membership site.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Launch & Growth</h3>
                    <p>After thorough testing, we launch your site and provide ongoing support to help grow your membership base.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of a Membership Website</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-sync mb-3 text-primary"></i>
                    <h3>Recurring Revenue</h3>
                    <p>Create a predictable income stream with subscription-based membership models that generate revenue month after month.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-users mb-3 text-primary"></i>
                    <h3>Community Building</h3>
                    <p>Foster connections between members, creating a loyal community that adds value beyond your content.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-star mb-3 text-primary"></i>
                    <h3>Exclusive Value</h3>
                    <p>Offer premium content and benefits that differentiate your brand and justify subscription fees.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-chart-pie mb-3 text-primary"></i>
                    <h3>Valuable Insights</h3>
                    <p>Gain detailed analytics about your members' behavior to continuously improve your offering.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-comments mb-3 text-primary"></i>
                    <h3>Direct Feedback</h3>
                    <p>Maintain open communication with your members to refine your products and services.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-graduation-cap mb-3 text-primary"></i>
                    <h3>Organized Learning</h3>
                    <p>Create structured courses and learning paths that provide measurable value to your members.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<?php 
// Include FAQ section
if (function_exists('renderFaqSection')) {
    include_once '../../../includes/faq-section.php';
    renderFaqSection($serviceSlug, $serviceName);
}
?>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-3">Ready to Build Your Membership Community?</h2>
                <p class="lead mb-0">Contact us today to discuss how we can help you create a thriving membership website.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="../../contact.php" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../../../components/footer.php';
?> 