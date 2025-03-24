<?php
/**
 * Portfolio Website Design Service Page
 */

// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('portfolio-design');

// Page specific content
$pageTitle = "Portfolio Website Design Services";
$pageDescription = "Showcase your work with a stunning portfolio website that converts viewers into clients";
$serviceName = "Portfolio Website Design";
$serviceSlug = "portfolio-design";

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
                <img src="../../../assets/images/services/portfolio-design.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Showcase Your Work With Impact</h2>
                <p class="lead">A professionally designed portfolio website is your digital business card</p>
                <p>For creative professionals, freelancers, agencies, and artists, your portfolio website is often the first impression potential clients have of your work. Our portfolio website design services focus on creating visually striking, highly effective showcases that highlight your best work and encourage potential clients to reach out.</p>
                <p>We understand that each creative professional has unique needs, which is why we design custom portfolio websites that reflect your personal brand and artistic style. Whether you're a photographer, graphic designer, writer, architect, or any other creative professional, we'll help you present your work in a way that resonates with your target audience and generates new business opportunities.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> Custom visual design that matches your style</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Optimized project showcases and galleries</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Mobile-responsive layouts</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Easy content management systems</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Contact forms and client acquisition tools</li>
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
        'icon' => 'fas fa-paint-brush',
        'title' => 'Creative Excellence',
        'description' => 'Our designers have extensive experience creating stunning portfolio websites that showcase creative work effectively.',
        'delay' => 100
    ],
    [
        'icon' => 'fas fa-laptop-code',
        'title' => 'Technical Expertise',
        'description' => 'We combine beautiful design with robust technical implementation to ensure your portfolio loads quickly and works flawlessly.',
        'delay' => 200
    ],
    [
        'icon' => 'fas fa-search',
        'title' => 'SEO Optimization',
        'description' => 'We ensure your portfolio is discoverable by clients searching for your specific creative services.',
        'delay' => 300
    ],
    [
        'icon' => 'fas fa-pencil-alt',
        'title' => 'Content Strategy',
        'description' => 'We help you curate and organize your work to tell a compelling story that resonates with potential clients.',
        'delay' => 400
    ]
];
renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Portfolio Design Process</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Consultation</h3>
                    <p>We discuss your creative style, target audience, and goals for your portfolio website.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Architecture</h3>
                    <p>We plan the structure of your portfolio, organizing your work for maximum impact.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Design</h3>
                    <p>Our designers create a visual concept that complements your work without overshadowing it.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Development</h3>
                    <p>We build your portfolio with attention to detail, ensuring optimal performance and accessibility.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of a Professional Portfolio Website</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-award mb-3 text-primary"></i>
                    <h3>Professional Credibility</h3>
                    <p>A well-designed portfolio establishes your professional credibility and sets you apart from competitors.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-handshake mb-3 text-primary"></i>
                    <h3>Client Acquisition</h3>
                    <p>Showcase your best work to attract new clients and make a compelling case for your services.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-globe mb-3 text-primary"></i>
                    <h3>Global Visibility</h3>
                    <p>Reach potential clients worldwide, expanding your reach beyond local markets.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-edit mb-3 text-primary"></i>
                    <h3>Easy Updates</h3>
                    <p>Add new work and keep your portfolio current with user-friendly content management systems.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-bullseye mb-3 text-primary"></i>
                    <h3>Targeted Marketing</h3>
                    <p>Display work relevant to your ideal clients and industry niches to attract better-fit projects.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-link mb-3 text-primary"></i>
                    <h3>Networking Opportunities</h3>
                    <p>A strong online portfolio facilitates connections with other professionals and potential collaborators.</p>
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
                <h2 class="mb-3">Ready to Showcase Your Work?</h2>
                <p class="lead mb-0">Let's create a portfolio website that brings your creative vision to life and attracts ideal clients.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="../../contact.php" class="btn btn-light btn-lg">Start Your Project</a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../../../components/footer.php';
?> 