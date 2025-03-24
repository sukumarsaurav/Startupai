<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for IoT & Embedded Systems
$why_hire_us = getWhyHireUsContent('iot-embedded-systems');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">IoT & Embedded Systems</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Connect physical devices to the digital world with smart, secure IoT solutions
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
                <img src="/assets/images/services/iot-embedded.svg" alt="IoT and Embedded Systems" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">IoT & Embedded Systems Development</h2>
                <p>
                    Our IoT and embedded systems development services help businesses create connected device solutions that collect valuable data, automate processes, and enable new digital experiences. From industrial IoT applications to consumer smart products, we design and develop secure, scalable, and efficient solutions that bridge the physical and digital worlds.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-microchip text-primary"></i>
                        </div>
                        <div>
                            <h5>Embedded Firmware</h5>
                            <p>Custom firmware development for sensors, controllers, and connected devices.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-cloud text-primary"></i>
                        </div>
                        <div>
                            <h5>IoT Cloud Platforms</h5>
                            <p>Scalable backend systems for device management, data processing, and analytics.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Mobile & Web Applications</h5>
                            <p>Intuitive user interfaces for monitoring and controlling connected devices.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-shield-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>IoT Security</h5>
                            <p>Comprehensive security measures to protect devices, data, and communications.</p>
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
                <h2 class="section-title">Our IoT Development Process</h2>
                <p class="section-description">
                    A comprehensive approach to building connected device solutions
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-lightbulb fa-3x text-primary"></i>
                    </div>
                    <h4>IoT Strategy</h4>
                    <p>We define your IoT goals, identify use cases, and create a technical roadmap for implementation.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-sitemap fa-3x text-primary"></i>
                    </div>
                    <h4>Architecture Design</h4>
                    <p>We design a secure, scalable architecture covering hardware, connectivity, and cloud components.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our engineers develop firmware, cloud services, and applications for your complete IoT solution.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-primary"></i>
                    </div>
                    <h4>Deployment & Management</h4>
                    <p>We help you deploy, monitor, and maintain your IoT ecosystem with ongoing support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IoT Solutions -->
<section class="iot-solutions-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">IoT Solutions We Develop</h2>
                <p class="section-description">
                    Connected solutions for various industries and applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-industry fa-2x text-primary"></i>
                    </div>
                    <h4>Industrial IoT</h4>
                    <p>Smart manufacturing systems, predictive maintenance solutions, equipment monitoring, and industrial automation to optimize operations and reduce downtime.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-home fa-2x text-primary"></i>
                    </div>
                    <h4>Smart Home & Buildings</h4>
                    <p>Home automation systems, energy management solutions, security monitoring, and connected building infrastructure for enhanced comfort and efficiency.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-heartbeat fa-2x text-primary"></i>
                    </div>
                    <h4>Healthcare IoT</h4>
                    <p>Remote patient monitoring, medical device connectivity, healthcare asset tracking, and wellness tracking devices for improved patient care.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-truck fa-2x text-primary"></i>
                    </div>
                    <h4>Supply Chain & Logistics</h4>
                    <p>Asset tracking, fleet management, warehouse automation, and condition monitoring for enhanced visibility and efficiency throughout the supply chain.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-leaf fa-2x text-primary"></i>
                    </div>
                    <h4>Agriculture IoT</h4>
                    <p>Smart farming systems, irrigation management, crop monitoring, livestock tracking, and environmental monitoring for optimized agricultural operations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="solution-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="solution-icon mb-3">
                        <i class="fas fa-city fa-2x text-primary"></i>
                    </div>
                    <h4>Smart Cities</h4>
                    <p>Urban infrastructure monitoring, smart lighting, waste management, environmental sensing, and traffic management solutions for sustainable urban environments.</p>
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
                <h2 class="section-title">IoT Technologies We Work With</h2>
                <p class="section-description">
                    Expertise across the IoT technology stack
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">Hardware & Firmware</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Arduino</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Raspberry Pi</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>ESP32/ESP8266</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>STM32</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Custom PCB Design</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">Connectivity</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Bluetooth/BLE</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Wi-Fi</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>LoRaWAN</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Zigbee</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Cellular (4G/5G)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="text-center mb-4">Cloud Platforms</h4>
                    <ul class="tech-list list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>AWS IoT</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Azure IoT</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Google Cloud IoT</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>ThingsBoard</li>
                        <li><i class="fas fa-check-circle text-primary me-2"></i>Custom IoT Platforms</li>
                    </ul>
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
                <h2 class="section-title">Benefits of IoT Solutions</h2>
                <p class="section-description">
                    How connected devices transform businesses and operations
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Operational Efficiency</h4>
                    <p>Automate processes, optimize resource usage, and reduce manual intervention through real-time monitoring and control.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-lightbulb fa-2x text-primary"></i>
                    </div>
                    <h4>Data-Driven Insights</h4>
                    <p>Gather valuable data from physical assets to gain actionable intelligence and make informed business decisions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tools fa-2x text-primary"></i>
                    </div>
                    <h4>Predictive Maintenance</h4>
                    <p>Anticipate equipment failures and maintenance needs before they occur, reducing downtime and repair costs.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-friends fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Customer Experience</h4>
                    <p>Create innovative, connected products and services that deliver greater value and engagement to customers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>New Revenue Streams</h4>
                    <p>Develop innovative business models through connected devices, data monetization, and value-added services.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-recycle fa-2x text-primary"></i>
                    </div>
                    <h4>Sustainability</h4>
                    <p>Optimize resource consumption, reduce waste, and minimize environmental impact through smart, connected systems.</p>
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
                <h2 class="mb-3">Ready to Build Your IoT Solution?</h2>
                <p class="lead mb-0">
                    Let's create connected systems that unlock new possibilities for your business.
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
            <h2 class="faq-title">IoT & Embedded Systems FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What industries can benefit most from IoT solutions?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Nearly every industry can benefit from IoT implementation, but some see particularly high ROI. Manufacturing benefits through equipment monitoring, predictive maintenance, and process optimization. Healthcare leverages IoT for remote patient monitoring, medical device connectivity, and asset tracking. Agriculture uses IoT for precision farming, irrigation management, and livestock monitoring. Energy and utilities implement smart grid technology, consumption monitoring, and infrastructure management. Retail adopts inventory tracking, customer analytics, and smart store experiences. Transportation and logistics utilize fleet management, asset tracking, and route optimization. The specific benefits vary by industry, but common advantages include operational efficiency, data insights, cost reduction, and new customer experiences.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you address security concerns in IoT development?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Security is foundational to our IoT development process, not an afterthought. We implement a multi-layered security approach that includes secure hardware design with trusted execution environments and secure boot processes. At the firmware level, we employ secure coding practices, encrypted storage, and regular security updates. For data transmission, we implement end-to-end encryption, secure authentication protocols, and network segmentation. Our cloud services feature strong access controls, regular security audits, and compliance with relevant standards like ISO 27001. We also develop comprehensive security monitoring systems to detect and respond to potential threats. Throughout the development lifecycle, we conduct security risk assessments and penetration testing to identify and address vulnerabilities before deployment.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What is your approach to IoT scalability and maintenance?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We design IoT systems with scalability as a core principle from the beginning. Our architecture employs microservices and container-based cloud components that can scale horizontally to handle growing device fleets and data volumes. We implement efficient data storage strategies with time-series databases and data lifecycle management to handle increasing data loads. For device management, we build robust provisioning and onboarding processes that work efficiently whether you have ten devices or ten thousand. On the maintenance front, we implement over-the-air (OTA) update capabilities to keep firmware and software current. We also develop comprehensive monitoring and alerting systems that provide visibility into system health and automate routine maintenance tasks. Our support plans include regular security patches, performance optimizations, and technical assistance to ensure your IoT ecosystem remains robust and secure as it grows.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
