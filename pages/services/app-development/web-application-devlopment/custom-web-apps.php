<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Custom Web Apps
$why_hire_us = getWhyHireUsContent('custom-web-apps');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Custom Web App Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Tailor-made web applications designed for your specific business needs
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Service Overview -->
<section class="service-overview py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="/assets/images/services/custom-web-apps.svg" alt="Custom Web Applications" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Custom Web Application Development Services</h2>
                <p>
                    Our team specializes in creating bespoke web applications that solve your unique business challenges. We develop custom solutions from scratch using modern technologies and frameworks that ensure scalability, security, and performance. Whether you need an internal tool, customer portal, or complex enterprise system, we deliver web applications tailored to your exact specifications.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-code text-primary"></i>
                        </div>
                        <div>
                            <h5>Full-Stack Development</h5>
                            <p>End-to-end development using modern front-end and back-end technologies.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-cogs text-primary"></i>
                        </div>
                        <div>
                            <h5>Integration Capabilities</h5>
                            <p>Seamless connections with existing systems, third-party APIs, and databases.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-tablet-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Responsive Design</h5>
                            <p>Applications that work flawlessly across all devices and screen sizes.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Security & Compliance</h5>
                            <p>Built-in security measures and compliance with industry standards and regulations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

<!-- Process -->
<section class="process-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Custom Web App Development Process</h2>
                <p class="section-description">
                    A systematic approach to building successful web applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Requirements Analysis</h4>
                    <p>We work closely with you to understand your business processes, goals, and technical requirements.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>Design & Prototyping</h4>
                    <p>We create detailed wireframes and interactive prototypes to visualize the application before development.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build your application using agile methodologies with regular updates and feedback.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-3x text-primary"></i>
                    </div>
                    <h4>Testing & Deployment</h4>
                    <p>Rigorous quality assurance testing followed by seamless deployment and ongoing support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Custom Web Applications</h2>
                <p class="section-description">
                    Why businesses choose custom development over off-the-shelf solutions
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-fingerprint fa-2x text-primary"></i>
                    </div>
                    <h4>Tailored to Your Needs</h4>
                    <p>Custom applications are built specifically for your business processes, eliminating compromises with pre-built solutions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Scalability</h4>
                    <p>Custom web apps can grow alongside your business, with new features and capabilities added as needed.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-sync-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Integration Flexibility</h4>
                    <p>Seamlessly connect with your existing software ecosystem, APIs, and databases without compatibility issues.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="use-cases-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Custom Web App Solutions For Various Industries</h2>
                <p class="section-description">
                    Tailored applications for different business needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-chart-pie fa-2x text-primary"></i>
                    </div>
                    <h4>Business Management Systems</h4>
                    <p>Centralized platforms for managing operations, inventory, employees, and customer relationships.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Customer Portals</h4>
                    <p>Self-service platforms that enhance customer experience and reduce support costs.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-clipboard-check fa-2x text-primary"></i>
                    </div>
                    <h4>Workflow Automation Tools</h4>
                    <p>Custom applications that streamline processes, improve efficiency, and reduce human error.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="mb-3">Ready for a Custom Web Application?</h2>
                <p class="lead mb-0">
                    Let's build a solution that addresses your unique business challenges.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-header">
            <h2 class="faq-title">Custom Web App Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How much does custom web application development cost?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The cost varies significantly depending on the complexity, features, and scale of the application. Simple applications may start around $20,000, while enterprise-level systems can cost $100,000 or more. We provide detailed estimates after understanding your specific requirements during our discovery phase.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What technologies do you use for web application development?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We use a variety of modern technologies depending on project requirements. For front-end, we typically work with React, Angular, or Vue.js. For back-end, we use Node.js, PHP/Laravel, Python/Django, or .NET. Our database expertise includes MySQL, PostgreSQL, MongoDB, and other solutions based on your needs. We choose the technology stack that best fits your specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does it take to develop a custom web application?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Development timelines typically range from 3-9 months depending on complexity. Simple applications might take 3-4 months, while more complex systems can take 6-9 months or longer. We often use an agile approach that allows for early deployment of core features with additional functionality added in subsequent iterations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 