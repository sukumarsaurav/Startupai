<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../config/database.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for email marketing
$why_hire_us = getWhyHireUsContent('email-marketing');

require_once '../../../components/header.php';
?>

    <!-- Page Header -->
    <section class="page-header py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4">Email Marketing Services</h1>
                    <p class="lead">Affordable email marketing solutions designed for small businesses to create effective email campaigns that drive results</p>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="/assets/images/services/email-marketing.svg" alt="Email Marketing Services" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4" data-aos="fade-up">
                    <h2>Email Marketing Solutions for Small Businesses</h2>
                    <p class="lead">We help businesses create and execute effective email marketing campaigns that engage subscribers and drive growth.</p>
                    <p>Our affordable email marketing services combine proven strategies with beginner-friendly tools to deliver personalized campaigns that resonate with your audience. From list building and segmentation to automation and analytics, we provide comprehensive email marketing solutions tailored to small business needs.</p>
                </div>
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-highlights p-4 bg-light rounded">
                        <h3>Email Marketing Tools & Features</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i> List Building & Management</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Campaign Strategy Development</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Email Automation Tools</li>
                            <li><i class="fas fa-check text-primary me-2"></i> A/B Testing for Optimization</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Performance Analytics</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hire Us Section -->
    <?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Effective Email Marketing Strategies</h2>
            <div class="row">
                <div class="col-md-3 mb-4" data-aos="fade-up">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h3>Audience Research</h3>
                        <p>Understanding your subscribers and their needs for targeted campaigns</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-pen-fancy fa-2x"></i>
                        </div>
                        <h3>Campaign Creation</h3>
                        <p>Designing engaging email campaigns that convert</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-robot fa-2x"></i>
                        </div>
                        <h3>Email Automation</h3>
                        <p>Setting up automated campaigns for consistent engagement</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-chart-bar fa-2x"></i>
                        </div>
                        <h3>Performance Tracking</h3>
                        <p>Monitoring and optimizing campaign results</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Email Marketing Tips & Benefits</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="benefit-card">
                        <i class="fas fa-bullseye fa-3x mb-3"></i>
                        <h3>Targeted Campaigns</h3>
                        <p>Create personalized email campaigns that reach the right audience at the right time.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card">
                        <i class="fas fa-dollar-sign fa-3x mb-3"></i>
                        <h3>Cost-Effective Marketing</h3>
                        <p>Affordable email marketing solutions with high return on investment.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card">
                        <i class="fas fa-sync fa-3x mb-3"></i>
                        <h3>Easy Automation</h3>
                        <p>Beginner-friendly email marketing tools for automated campaign management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="mb-3">Ready to Start Your Email Marketing Campaign?</h2>
                    <p class="lead mb-0">Get started with our affordable email marketing services designed for small businesses.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once '../../../components/footer.php'; ?> 