<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Cloud-Based Backend Solutions
$why_hire_us = getWhyHireUsContent('cloud-based-backend-solutions');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Cloud-Based Backend Solutions</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Scalable, reliable cloud infrastructure for modern applications
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
                <img src="/assets/images/services/cloud-backend.svg" alt="Cloud-Based Backend Solutions" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Powerful Cloud Backend Development</h2>
                <p>
                    Our cloud-based backend solutions provide the foundation for robust, scalable applications that can handle growing user bases and changing business needs. We leverage leading cloud platforms like AWS, Azure, and Google Cloud to build resilient infrastructures that optimize performance while minimizing costs. From API development to microservices architecture, we create cloud backends that power your applications with reliability and speed.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-server text-primary"></i>
                        </div>
                        <div>
                            <h5>Scalable Architecture</h5>
                            <p>Elastic infrastructure that automatically scales to handle fluctuating workloads and user demand.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-tachometer-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>High Performance</h5>
                            <p>Optimized backend systems for fast response times and efficient data processing.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Security & Compliance</h5>
                            <p>Robust security practices and compliance with industry standards and regulations.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-coins text-primary"></i>
                        </div>
                        <div>
                            <h5>Cost Optimization</h5>
                            <p>Resource-efficient solutions that minimize cloud infrastructure costs without sacrificing performance.</p>
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
                <h2 class="section-title">Our Cloud Backend Development Process</h2>
                <p class="section-description">
                    A methodical approach to building reliable cloud infrastructure
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
                    <p>We analyze your application needs, expected loads, and scalability requirements to design the optimal cloud solution.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-sitemap fa-3x text-primary"></i>
                    </div>
                    <h4>Architecture Design</h4>
                    <p>We create a detailed cloud architecture blueprint that ensures scalability, security, and cost efficiency.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development & Integration</h4>
                    <p>Our developers build and integrate your cloud backend using infrastructure-as-code and modern development practices.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h4>Monitoring & Optimization</h4>
                    <p>We implement comprehensive monitoring and continuously optimize performance and costs after deployment.</p>
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
                <h2 class="section-title">Benefits of Cloud-Based Backend Solutions</h2>
                <p class="section-description">
                    Why businesses are moving their backend infrastructure to the cloud
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Infinite Scalability</h4>
                    <p>Cloud infrastructure can scale instantly to accommodate growth, seasonal spikes, or unexpected viral success.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>Reduced Infrastructure Costs</h4>
                    <p>Pay only for the resources you use, eliminating the need for expensive upfront hardware investments.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-sync-alt fa-2x text-primary"></i>
                    </div>
                    <h4>High Availability</h4>
                    <p>Built-in redundancy and geographic distribution ensure your applications remain online even during failures.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="technologies-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Cloud Technologies We Work With</h2>
                <p class="section-description">
                    Leading platforms and tools for building robust cloud backends
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="tech-icon mb-3">
                        <i class="fab fa-aws fa-2x text-primary"></i>
                    </div>
                    <h4>Amazon Web Services (AWS)</h4>
                    <p>Expertise in EC2, Lambda, S3, DynamoDB, RDS, API Gateway, CloudFormation, and the full AWS ecosystem.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="tech-icon mb-3">
                        <i class="fab fa-microsoft fa-2x text-primary"></i>
                    </div>
                    <h4>Microsoft Azure</h4>
                    <p>Azure App Service, Functions, SQL Database, Cosmos DB, and Azure DevOps for comprehensive cloud solutions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="tech-icon mb-3">
                        <i class="fab fa-google fa-2x text-primary"></i>
                    </div>
                    <h4>Google Cloud Platform</h4>
                    <p>Compute Engine, App Engine, Cloud Functions, Firestore, Cloud SQL, and Kubernetes Engine for scalable backends.</p>
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
                <h2 class="mb-3">Ready to Build Your Cloud Backend?</h2>
                <p class="lead mb-0">
                    Let's discuss how cloud infrastructure can power your applications with reliability and scale.
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
            <h2 class="faq-title">Cloud Backend Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    Which cloud provider is best for my application?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The best cloud provider depends on your specific requirements, existing technology stack, and business needs. AWS offers the widest range of services and global infrastructure. Azure has excellent integration with Microsoft products and strong enterprise features. Google Cloud excels in data analytics and machine learning capabilities. During our consultation, we'll help you evaluate the options based on your needs, technical requirements, and budget.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you ensure cloud cost efficiency?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We implement several strategies to optimize cloud costs: right-sizing resources to match actual needs, utilizing auto-scaling to adjust capacity based on demand, leveraging spot/preemptible instances for non-critical workloads, implementing lifecycle policies for stored data, using reserved instances for predictable workloads, and setting up detailed monitoring and alerts for cost anomalies. We also regularly review your cloud usage and suggest optimization opportunities.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you handle cloud security and compliance?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We implement a comprehensive cloud security approach including identity and access management with least privilege principles, network security with VPCs and security groups, data encryption in transit and at rest, security monitoring and logging, regular vulnerability assessments, and compliance with relevant standards (GDPR, HIPAA, SOC2, etc.). We also follow infrastructure-as-code practices for consistent security configurations and implement automated security checks in the CI/CD pipeline.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 