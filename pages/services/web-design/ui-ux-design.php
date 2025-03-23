<?php
require_once '../../../includes/config.php';
require_once '../../../includes/why-hire-us.php';
require_once '../../../includes/header.php';
require_once '../../../includes/faq-section.php';

// Page specific content
$pageTitle = "UI/UX Design Services";
$pageDescription = "Create intuitive and engaging digital experiences that users love";
$serviceName = "UI/UX Design";
$serviceSlug = "ui-ux-design";
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
                <img src="../../../assets/images/services/ui-ux-design.svg" alt="UI/UX Design" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Transform Your Digital Presence</h2>
                <p class="lead">We create user-centered designs that drive engagement and conversions.</p>
                <p>Our UI/UX design services focus on creating intuitive, efficient, and enjoyable digital experiences that meet both user needs and business goals. We combine aesthetic appeal with functional design to deliver solutions that work beautifully.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> User Research & Analysis</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Wireframing & Prototyping</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Interactive Design</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Usability Testing</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Design System Creation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php
$reasons = [
    "User-Centered Design Approach" => "We prioritize your users' needs, creating interfaces that are intuitive, accessible, and efficient.",
    "Research-Driven Solutions" => "Our designs are based on thorough user research and industry best practices, not just aesthetic trends.",
    "Conversion-Focused Design" => "We create experiences that guide users toward your business goals, optimizing for conversions and engagement.",
    "Cross-Platform Expertise" => "Our designers create seamless experiences across all devices and platforms, ensuring consistency and usability."
];

renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Design Process</h2>
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-search fa-2x"></i>
                    </div>
                    <h3>Research</h3>
                    <p>Understanding user needs and business requirements</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-2x"></i>
                    </div>
                    <h3>Design</h3>
                    <p>Creating wireframes and visual designs</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-2x"></i>
                    </div>
                    <h3>Prototype</h3>
                    <p>Building interactive prototypes</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <h3>Test</h3>
                    <p>Validating designs with real users</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of Professional UI/UX Design</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card">
                    <i class="fas fa-smile-beam fa-3x mb-3"></i>
                    <h3>Enhanced User Experience</h3>
                    <p>Create intuitive interfaces that users love to interact with</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h3>Increased Conversion</h3>
                    <p>Drive better conversion rates through optimized user flows</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <i class="fas fa-medal fa-3x mb-3"></i>
                    <h3>Brand Credibility</h3>
                    <p>Build trust with professional and consistent design</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section - Now using dynamic data -->
<?php renderFaqSection($serviceSlug, $serviceName); ?>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-3">Ready to Transform Your Digital Experience?</h2>
                <p class="lead mb-0">Let's create an intuitive and engaging interface for your users.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="../../contact.php" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../includes/footer.php';
?> 