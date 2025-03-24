<?php
/**
 * Ecommerce Website Design Service Page
 */

// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('ecommerce-design');

// Page specific content
$pageTitle = "Ecommerce Website Design Services";
$pageDescription = "Convert visitors into customers with our custom ecommerce website designs";
$serviceName = "Ecommerce Website Design";
$serviceSlug = "ecommerce-design";

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
                <img src="../../../assets/images/services/ecommerce-design.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Transform Your Business with Our Ecommerce Solutions</h2>
                <p class="lead">Custom-designed online stores that drive sales and enhance customer experience</p>
                <p>In today's digital marketplace, having an ecommerce website that not only looks great but also converts visitors into customers is essential. Our ecommerce website design services focus on creating intuitive, mobile-friendly online stores that showcase your products effectively and streamline the purchasing process. Whether you're launching a new ecommerce business or upgrading an existing store, our team combines stunning design with powerful functionality to deliver results.</p>
                <p>We build with leading ecommerce platforms like Shopify, WooCommerce, and Magento, ensuring your store has the features and flexibility to grow with your business. From product catalog management to secure payment processing, we handle all aspects of ecommerce development.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> Responsive design for mobile shoppers</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Intuitive product categorization</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Secure payment gateway integration</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Inventory management systems</li>
                        <li><i class="fas fa-check text-primary me-2"></i> SEO-optimized product pages</li>
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
        'icon' => 'fas fa-shopping-cart',
        'title' => 'Conversion-Focused Design',
        'description' => 'We design with your customers in mind, creating intuitive interfaces that guide visitors through the buying process.',
        'delay' => 100
    ],
    [
        'icon' => 'fas fa-mobile-alt',
        'title' => 'Mobile-First Approach',
        'description' => 'With over 60% of ecommerce traffic coming from mobile devices, we ensure your store looks and works perfectly on all screen sizes.',
        'delay' => 200
    ],
    [
        'icon' => 'fas fa-lock',
        'title' => 'Secure & Reliable',
        'description' => 'We implement robust security measures to protect customer data and ensure your store operates reliably at all times.',
        'delay' => 300
    ],
    [
        'icon' => 'fas fa-chart-line',
        'title' => 'Growth-Ready Platform',
        'description' => 'Our ecommerce solutions scale with your business, ready to handle increased traffic and expanding product catalogs.',
        'delay' => 400
    ]
];
renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Ecommerce Development Process</h2>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3>Discovery</h3>
                    <p>We analyze your business needs, target audience, and competitors to create a strategic ecommerce plan.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Design</h3>
                    <p>Our designers create wireframes and prototypes of your store, focusing on user experience and conversion.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Development</h3>
                    <p>We build your ecommerce store with clean code, integrating payment gateways and essential features.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card text-center p-4 h-100">
                    <div class="process-icon mb-4">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Launch & Growth</h3>
                    <p>After thorough testing, we launch your store and provide ongoing support to optimize performance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of Professional Ecommerce Design</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-dollar-sign mb-3 text-primary"></i>
                    <h3>Increased Sales</h3>
                    <p>Well-designed ecommerce sites with smooth checkout processes can increase conversion rates by up to 35%.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-user-friends mb-3 text-primary"></i>
                    <h3>Better Customer Experience</h3>
                    <p>Intuitive navigation and product search help customers find and purchase products quickly and easily.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-globe mb-3 text-primary"></i>
                    <h3>Global Reach</h3>
                    <p>Expand your business beyond geographical boundaries and sell to customers around the world.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-cog mb-3 text-primary"></i>
                    <h3>Automation</h3>
                    <p>Automate inventory management, order processing, and customer communications to save time and reduce errors.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-chart-pie mb-3 text-primary"></i>
                    <h3>Valuable Insights</h3>
                    <p>Gain valuable data on customer behavior and preferences to inform your business decisions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-card p-4 h-100">
                    <i class="fas fa-clock mb-3 text-primary"></i>
                    <h3>24/7 Availability</h3>
                    <p>Your online store never closes, allowing customers to shop at their convenience any time of day.</p>
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
                <h2 class="mb-3">Ready to Launch Your Ecommerce Success Story?</h2>
                <p class="lead mb-0">Contact us today for a free consultation and discover how we can help your online business thrive.</p>
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