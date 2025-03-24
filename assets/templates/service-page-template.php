<?php
/**
 * Service Page Template
 * Use this template when creating new service pages to ensure consistency
 * Replace placeholders with actual content
 */

// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('SERVICE_SLUG');

// Page specific content - Replace these values
$pageTitle = "SERVICE_TITLE";
$pageDescription = "SERVICE_DESCRIPTION";
$serviceName = "SERVICE_NAME";
$serviceSlug = "SERVICE_SLUG";

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
                <img src="../../../assets/images/services/SERVICE_SLUG.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>OVERVIEW_TITLE</h2>
                <p class="lead">OVERVIEW_SUBTITLE</p>
                <p>OVERVIEW_CONTENT</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> FEATURE_1</li>
                        <li><i class="fas fa-check text-primary me-2"></i> FEATURE_2</li>
                        <li><i class="fas fa-check text-primary me-2"></i> FEATURE_3</li>
                        <li><i class="fas fa-check text-primary me-2"></i> FEATURE_4</li>
                        <li><i class="fas fa-check text-primary me-2"></i> FEATURE_5</li>
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
        'icon' => 'ICON_1',
        'title' => 'REASON_TITLE_1',
        'description' => 'REASON_DESCRIPTION_1',
        'delay' => 100
    ],
    [
        'icon' => 'ICON_2',
        'title' => 'REASON_TITLE_2',
        'description' => 'REASON_DESCRIPTION_2',
        'delay' => 200
    ],
    [
        'icon' => 'ICON_3',
        'title' => 'REASON_TITLE_3',
        'description' => 'REASON_DESCRIPTION_3',
        'delay' => 300
    ],
    [
        'icon' => 'ICON_4',
        'title' => 'REASON_TITLE_4',
        'description' => 'REASON_DESCRIPTION_4',
        'delay' => 400
    ]
];
renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section - Customize as needed -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Process</h2>
        <div class="row">
            <!-- Process steps here -->
        </div>
    </div>
</section>

<!-- Benefits Section - Customize as needed -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits</h2>
        <div class="row">
            <!-- Benefits here -->
        </div>
    </div>
</section>

<!-- FAQ Section -->
<?php 
// Include FAQ section
include_once '../../../includes/faq-section.php';
renderFaqSection($serviceSlug, $serviceName); 
?>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-3">CTA_TITLE</h2>
                <p class="lead mb-0">CTA_DESCRIPTION</p>
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