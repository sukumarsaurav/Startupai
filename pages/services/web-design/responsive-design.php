<?php
require_once '../../../includes/config.php';
require_once '../../../includes/why-hire-us.php';
require_once '../../../includes/header.php';
require_once '../../../includes/faq-section.php';

// Page specific content
$pageTitle = "Responsive Web Design Services";
$pageDescription = "Create websites that look and function beautifully on any device";
$serviceName = "Responsive Web Design";
$serviceSlug = "responsive-design";
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
                <img src="../../../assets/images/services/responsive-design.svg" alt="Responsive Web Design" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Responsive Design for the Modern Web</h2>
                <p class="lead">Websites that adapt seamlessly to all devices and screen sizes.</p>
                <p>In today's multi-device world, responsive design isn't just a feature—it's essential. Our responsive design services ensure your website provides an optimal viewing and interaction experience across a wide range of devices from desktop computers to smartphones.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> Mobile-First Approach</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Fluid Grid Layouts</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Flexible Images & Media</li>
                        <li><i class="fas fa-check text-primary me-2"></i> CSS Media Queries</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Touch-Friendly Elements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php
$reasons = [
    "Mobile-First Expertise" => "We design for mobile devices first, then progressively enhance for larger screens—ensuring a solid foundation.",
    "Performance Optimization" => "Our responsive designs are optimized for speed, with carefully crafted code and optimized assets.",
    "Flexible Solutions" => "We create adaptive designs that work seamlessly across thousands of different screen sizes and devices.",
    "Future-Proof Development" => "Our approach ensures your site remains functional and beautiful as new devices enter the market."
];

renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Responsive Design Process</h2>
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-2x"></i>
                    </div>
                    <h3>Planning</h3>
                    <p>Analyzing content and defining breakpoints</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-mobile-alt fa-2x"></i>
                    </div>
                    <h3>Mobile Design</h3>
                    <p>Creating the mobile experience first</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-desktop fa-2x"></i>
                    </div>
                    <h3>Scaling Up</h3>
                    <p>Adapting for tablet and desktop views</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                    <h3>Testing</h3>
                    <p>Ensuring perfect display across devices</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of Responsive Design</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h3>Improved User Experience</h3>
                    <p>Offer a consistent experience regardless of device</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <i class="fas fa-search fa-3x mb-3"></i>
                    <h3>SEO Advantages</h3>
                    <p>Google prioritizes mobile-friendly websites</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h3>Higher Conversion Rates</h3>
                    <p>Easier navigation leads to more conversions</p>
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
                <h2 class="mb-3">Ready for a Website That Works Everywhere?</h2>
                <p class="lead mb-0">Let's create a responsive website that delights your users on any device.</p>
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