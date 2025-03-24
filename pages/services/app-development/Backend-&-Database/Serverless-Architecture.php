<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Serverless Architecture
$why_hire_us = getWhyHireUsContent('serverless-architecture');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Serverless Architecture</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Build scalable, cost-efficient applications without managing infrastructure
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
                <img src="/assets/images/services/serverless-architecture.svg" alt="Serverless Architecture" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Serverless Development Services</h2>
                <p>
                    Our serverless architecture services help organizations build modern applications that automatically scale, reduce operational overhead, and optimize costs by paying only for actual usage. We leverage Function-as-a-Service (FaaS) platforms and managed services to create resilient, event-driven solutions that eliminate the need for traditional server management while enhancing development agility.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-bolt text-primary"></i>
                        </div>
                        <div>
                            <h5>Auto-Scaling Architecture</h5>
                            <p>Systems that automatically adjust capacity based on demand without manual intervention.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-dollar-sign text-primary"></i>
                        </div>
                        <div>
                            <h5>Pay-Per-Use Model</h5>
                            <p>Cost-efficient solutions that charge only for the resources actually consumed.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-cogs text-primary"></i>
                        </div>
                        <div>
                            <h5>Event-Driven Design</h5>
                            <p>Responsive systems that execute code in response to specific events and triggers.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-server text-primary"></i>
                        </div>
                        <div>
                            <h5>No Infrastructure Management</h5>
                            <p>Focus on code without worrying about server provisioning, maintenance, or patching.</p>
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
                <h2 class="section-title">Our Serverless Development Process</h2>
                <p class="section-description">
                    A methodical approach to building efficient serverless applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-search fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery & Architecture</h4>
                    <p>We analyze your requirements to design an optimal event-driven serverless architecture.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-puzzle-piece fa-3x text-primary"></i>
                    </div>
                    <h4>Service Selection</h4>
                    <p>We identify the best combination of serverless services and tools for your specific needs.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our developers build modular functions and connect them with managed services and APIs.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h4>Optimization & Monitoring</h4>
                    <p>We fine-tune performance, implement monitoring, and optimize for cost-efficiency.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="technologies-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Serverless Technologies We Work With</h2>
                <p class="section-description">
                    Leading cloud platforms and services for serverless development
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">AWS Serverless</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>AWS Lambda</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Amazon API Gateway</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Amazon DynamoDB</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>AWS Step Functions</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Amazon EventBridge</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">Azure Serverless</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Azure Functions</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Azure Logic Apps</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Azure Cosmos DB</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Azure Event Grid</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Azure API Management</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">Google Cloud & Other</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Google Cloud Functions</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Firebase</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cloudflare Workers</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Vercel Serverless Functions</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Netlify Functions</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Serverless Architecture</h2>
                <p class="section-description">
                    Why organizations are embracing the serverless paradigm
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>Cost Optimization</h4>
                    <p>Pay only for actual compute usage rather than provisioning for peak load, reducing idle capacity costs.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Infinite Scalability</h4>
                    <p>Automatically scale from zero to thousands of concurrent executions without configuration changes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Faster Time to Market</h4>
                    <p>Focus on writing code without infrastructure concerns, accelerating the development process.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tools fa-2x text-primary"></i>
                    </div>
                    <h4>Reduced Operations</h4>
                    <p>Eliminate server management, OS updates, security patches, and capacity planning tasks.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-puzzle-piece fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Modularity</h4>
                    <p>Build systems as small, specialized functions that are easier to develop, test, and maintain.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Built-in Resilience</h4>
                    <p>Benefit from cloud provider's high availability and fault tolerance infrastructure.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases -->
<section class="use-cases-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Serverless Use Cases</h2>
                <p class="section-description">
                    Ideal scenarios for serverless architecture implementation
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-cogs fa-2x text-primary"></i>
                    </div>
                    <h4>Microservices & APIs</h4>
                    <p>Lightweight, focused APIs and microservices that benefit from independent scaling and deployment.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-tasks fa-2x text-primary"></i>
                    </div>
                    <h4>Data Processing</h4>
                    <p>Event-triggered processing workflows for file uploads, data transformations, and ETL operations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-robot fa-2x text-primary"></i>
                    </div>
                    <h4>ML & AI Applications</h4>
                    <p>Machine learning inference endpoints and AI-powered features integrated into applications.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Real-time Analytics</h4>
                    <p>Processing streams of data and generating insights without maintaining a dedicated infrastructure.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Mobile & Web Backends</h4>
                    <p>Efficiently handle variable traffic from mobile and web applications with automatic scaling.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="use-case-icon mb-3">
                        <i class="fas fa-clock fa-2x text-primary"></i>
                    </div>
                    <h4>Scheduled Tasks</h4>
                    <p>Cost-efficient execution of periodic jobs like backups, reports, and data synchronization.</p>
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
                <h2 class="mb-3">Ready to Go Serverless?</h2>
                <p class="lead mb-0">
                    Let's build a scalable, cost-efficient application without the infrastructure headaches.
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
            <h2 class="faq-title">Serverless Architecture FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What types of applications are best suited for serverless architecture?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Serverless architecture works particularly well for event-driven applications, microservices, APIs, data processing pipelines, and applications with variable workloads. It's ideal for use cases where there are clear triggers for computation (like HTTP requests, file uploads, database changes, or scheduled events) and where the processing happens in relatively short bursts. Applications that have unpredictable traffic patterns benefit from the auto-scaling capabilities. However, serverless may not be the best fit for applications requiring long-running processes, those with consistent high-volume workloads, or systems with specific latency requirements due to cold start considerations.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are the limitations or challenges of serverless architecture?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>While serverless offers many benefits, it does come with some challenges. These include cold start latency (delay when functions are initialized after being idle), execution time limits (typically 5-15 minutes maximum per invocation), vendor lock-in with cloud provider services, more complex debugging and local development, and potential challenges with state management since functions are inherently stateless. There may also be cost implications for consistently high-volume workloads where traditional servers might be more economical. Our development approach addresses these challenges through careful design patterns, optimization techniques, and architectural decisions that leverage serverless strengths while mitigating its limitations.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you handle data persistence in serverless applications?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Since serverless functions are stateless and ephemeral, we handle data persistence through managed database services that complement the serverless model. For structured data, we typically use managed database services like Amazon DynamoDB, Azure Cosmos DB, or Google Firestore, which offer automatic scaling and pay-per-use pricing aligned with serverless principles. For larger objects and files, we use object storage services like Amazon S3. State that needs to be maintained between function invocations is stored in these external services. For applications requiring traditional relational databases, we can implement connection pooling strategies and leverage serverless-optimized options like Aurora Serverless. The specific persistence strategy depends on your data model, access patterns, and consistency requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
