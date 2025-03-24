<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Database Design & Management
$why_hire_us = getWhyHireUsContent('database-design-management');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Database Design & Management</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Optimize your data architecture for scalability, performance, and security
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
                <img src="/assets/images/services/database-design.svg" alt="Database Design and Management" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Database Design & Management Services</h2>
                <p>
                    Our database design and management services help organizations build robust data architectures that support business growth, ensure data integrity, and enhance application performance. From designing efficient schemas to implementing backup strategies and performance optimization, we provide comprehensive database solutions tailored to your specific needs.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-sitemap text-primary"></i>
                        </div>
                        <div>
                            <h5>Schema Design & Optimization</h5>
                            <p>Data modeling and schema design optimized for your business processes and application needs.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-tachometer-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Performance Tuning</h5>
                            <p>Query optimization, indexing strategies, and configuration tuning for maximum efficiency.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Security & Compliance</h5>
                            <p>Robust security measures and compliance with regulatory requirements like GDPR and HIPAA.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-sync-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Migration & Modernization</h5>
                            <p>Seamless migration between database platforms and upgrades to modern technologies.</p>
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
                <h2 class="section-title">Our Database Development Process</h2>
                <p class="section-description">
                    A methodical approach to creating optimized database solutions
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
                    <p>We assess your data storage needs, application requirements, and performance expectations.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-project-diagram fa-3x text-primary"></i>
                    </div>
                    <h4>Design & Modeling</h4>
                    <p>We create efficient database schemas, relationships, and indexes tailored to your business logic.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-primary"></i>
                    </div>
                    <h4>Implementation</h4>
                    <p>Our database experts build and configure your database with security, scalability, and performance in mind.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h4>Optimization & Support</h4>
                    <p>We continuously monitor, tune, and maintain your database for optimal performance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Database Technologies -->
<section class="technologies-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Database Technologies We Work With</h2>
                <p class="section-description">
                    Expertise across relational, NoSQL, and specialized database systems
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">Relational Databases</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>MySQL / MariaDB</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>PostgreSQL</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Microsoft SQL Server</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Oracle Database</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>SQLite</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">NoSQL Databases</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>MongoDB</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Redis</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Cassandra</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Amazon DynamoDB</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Firebase Realtime Database</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">Specialized Databases</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Elasticsearch (search)</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Neo4j (graph)</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>InfluxDB (time series)</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Google BigQuery (analytics)</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Snowflake (data warehouse)</li>
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
                <h2 class="section-title">Benefits of Professional Database Design</h2>
                <p class="section-description">
                    How optimized database architecture drives business success
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bolt fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Performance</h4>
                    <p>Properly designed databases respond faster to queries, improving application responsiveness and user experience.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Scalability</h4>
                    <p>Future-proof designs that accommodate growing data volumes and increasing user loads without performance degradation.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-shield-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Data Security</h4>
                    <p>Robust security measures and proper access controls to protect your valuable business information.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Database Services</h2>
                <p class="section-description">
                    Comprehensive solutions for all your database needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="service-icon me-3">
                            <i class="fas fa-pencil-ruler fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-0">Database Design & Development</h4>
                    </div>
                    <p>Custom database design with efficient data models, schemas, and relationships. Our database architects create solutions that align with your business processes and application requirements.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="service-icon me-3">
                            <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-0">Performance Optimization</h4>
                    </div>
                    <p>Database tuning services to enhance query performance, reduce response times, and optimize resource utilization. We implement indexing strategies, query optimization, and configuration tuning.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="service-icon me-3">
                            <i class="fas fa-exchange-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-0">Database Migration</h4>
                    </div>
                    <p>Seamless migration between database platforms with minimal downtime. We handle data transfer, schema conversion, and application adaptation for smooth transitions to new database systems.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="d-flex align-items-center mb-3">
                        <div class="service-icon me-3">
                            <i class="fas fa-server fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-0">Database Administration</h4>
                    </div>
                    <p>Ongoing management and maintenance of your database systems, including backups, monitoring, security updates, and troubleshooting. We ensure your databases operate reliably and securely.</p>
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
                <h2 class="mb-3">Ready to Optimize Your Data Architecture?</h2>
                <p class="lead mb-0">
                    Let's design a database solution that enhances performance and supports your business growth.
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
            <h2 class="faq-title">Database Design & Management FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How do I choose the right database technology for my application?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Selecting the right database depends on several factors: data structure (relational or non-relational), scalability requirements, query patterns, consistency needs, and budget constraints. Relational databases like MySQL or PostgreSQL are ideal for structured data and complex relationships. NoSQL options like MongoDB excel with unstructured data and horizontal scaling. During our consultation, we analyze your specific needs including data volume, transaction requirements, and growth projections to recommend the most appropriate database technology for your particular use case.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What are the signs that my database needs optimization?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Common indicators include slow query response times, increasing CPU or memory usage, frequent timeouts, growing storage requirements, and application performance degradation during peak usage. If your application is slowing down as data volume grows, reports take longer to generate, or users are experiencing delays, these are clear signs that database optimization is needed. Our team can perform a comprehensive database health check to identify specific bottlenecks and recommend optimization strategies tailored to your system.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you ensure data security in database implementations?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We implement multiple layers of security including robust authentication mechanisms, role-based access control, data encryption (both at rest and in transit), secure connection protocols, and regular security audits. We also establish backup and recovery strategies, implement audit logging for tracking database activities, and ensure compliance with relevant regulations like GDPR or HIPAA. Additionally, we provide security best practices training for your team to maintain security standards in day-to-day operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
