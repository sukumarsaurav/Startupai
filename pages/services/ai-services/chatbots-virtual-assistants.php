<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Page specific content
$pageTitle = "AI-Powered Chatbots & Virtual Assistants";
$pageDescription = "Custom chatbot solutions that enhance customer experience and streamline business operations";
$serviceName = "AI-Powered Chatbots & Virtual Assistants";
$serviceSlug = "chatbots-virtual-assistants";

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('ai-chatbots');

require_once '../../../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <a href="/pages/contact.php" class="btn btn-primary mt-3">Get Started</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/assets/images/services/ai-chatbot.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
                <h2>Revolutionize Your Customer Interactions with AI</h2>
                <p class="lead">Our AI-powered chatbots and virtual assistants are designed to provide 24/7 customer support, automate repetitive tasks, and create personalized user experiences across multiple platforms.</p>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6" data-aos="fade-up">
                <h3>Transform Customer Service</h3>
                <p>AI chatbots can handle multiple customer inquiries simultaneously, providing instant responses and resolving issues without human intervention, leading to improved customer satisfaction and reduced support costs.</p>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <h3>Scale Your Business Operations</h3>
                <p>Virtual assistants can manage appointments, process orders, qualify leads, and handle other routine tasks, allowing your team to focus on high-value activities that drive business growth.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="py-5 bg-light" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
                <h2>Our Chatbot & Virtual Assistant Services</h2>
                <p class="lead">We offer end-to-end AI chatbot development, from strategy and design to implementation and continuous improvement.</p>
            </div>
        </div>
        
        <!-- Custom Chatbot Development -->
        <div class="row service-item align-items-center mb-5" id="custom">
            <div class="col-lg-6" data-aos="fade-right">
                <h3>Custom Chatbot Development</h3>
                <p>We build sophisticated chatbots using cutting-edge technologies like LangChain, Rasa, and Dialogflow. Our custom solutions are tailored to your specific business needs and can be integrated with your existing systems.</p>
                <ul class="service-highlights">
                    <li><i class="fas fa-check-circle text-primary"></i> Advanced LLM integration with LangChain</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Open-source solutions with Rasa</li>
                    <li><i class="fas fa-check-circle text-primary"></i> No-code options with Dialogflow</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Custom conversation flows and business logic</li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4>Technologies We Use</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="tech-item d-flex align-items-center mb-3">
                                    <i class="fas fa-robot text-primary me-2"></i>
                                    <span>LangChain</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="tech-item d-flex align-items-center mb-3">
                                    <i class="fas fa-comment-dots text-primary me-2"></i>
                                    <span>Rasa</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="tech-item d-flex align-items-center mb-3">
                                    <i class="fab fa-google text-primary me-2"></i>
                                    <span>Dialogflow</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="tech-item d-flex align-items-center mb-3">
                                    <i class="fas fa-code text-primary me-2"></i>
                                    <span>Python & Node.js</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- AI Agents for Customer Support -->
        <div class="row service-item align-items-center mb-5" id="support">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h3>AI Agents for Customer Support</h3>
                <p>Our AI support agents can handle common customer inquiries, troubleshoot issues, process returns, and escalate complex problems to human agents when necessary. They learn from each interaction to continuously improve their responses.</p>
                <ul class="service-highlights">
                    <li><i class="fas fa-check-circle text-primary"></i> 24/7 customer support availability</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Automated ticket creation and routing</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Integration with CRM and helpdesk systems</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Multi-channel support (email, chat, social media)</li>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4>Benefits</h4>
                        <div class="benefit-item d-flex align-items-start mb-3">
                            <i class="fas fa-clock text-primary mt-1 me-3"></i>
                            <div>
                                <h5 class="mb-1">Reduced Response Time</h5>
                                <p class="mb-0">Instant responses to customer queries, even outside business hours.</p>
                            </div>
                        </div>
                        <div class="benefit-item d-flex align-items-start mb-3">
                            <i class="fas fa-chart-line text-primary mt-1 me-3"></i>
                            <div>
                                <h5 class="mb-1">Increased Efficiency</h5>
                                <p class="mb-0">Handle multiple inquiries simultaneously without adding staff.</p>
                            </div>
                        </div>
                        <div class="benefit-item d-flex align-items-start">
                            <i class="fas fa-dollar-sign text-primary mt-1 me-3"></i>
                            <div>
                                <h5 class="mb-1">Cost Savings</h5>
                                <p class="mb-0">Reduce support costs by up to 30% with AI automation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Multilingual Chatbots -->
        <div class="row service-item align-items-center mb-5" id="multilingual">
            <div class="col-lg-6" data-aos="fade-right">
                <h3>Multilingual Chatbots</h3>
                <p>Expand your global reach with chatbots that can communicate in multiple languages. Our multilingual solutions provide seamless customer interactions across different regions and cultures.</p>
                <ul class="service-highlights">
                    <li><i class="fas fa-check-circle text-primary"></i> Support for 100+ languages</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Natural language understanding in multiple languages</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Cultural context awareness</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Automatic language detection</li>
                </ul>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4>Popular Languages</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="lang-item d-flex align-items-center mb-3">
                                    <i class="fas fa-language text-primary me-2"></i>
                                    <span>English</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="lang-item d-flex align-items-center mb-3">
                                    <i class="fas fa-language text-primary me-2"></i>
                                    <span>Spanish</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="lang-item d-flex align-items-center mb-3">
                                    <i class="fas fa-language text-primary me-2"></i>
                                    <span>French</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="lang-item d-flex align-items-center mb-3">
                                    <i class="fas fa-language text-primary me-2"></i>
                                    <span>German</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="lang-item d-flex align-items-center mb-3">
                                    <i class="fas fa-language text-primary me-2"></i>
                                    <span>Chinese</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="lang-item d-flex align-items-center mb-3">
                                    <i class="fas fa-language text-primary me-2"></i>
                                    <span>Japanese</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- WhatsApp, Messenger & Website Chatbots -->
        <div class="row service-item align-items-center" id="platforms">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <h3>WhatsApp, Messenger & Website Chatbots</h3>
                <p>Meet your customers where they are with chatbots deployed across multiple platforms. We create consistent experiences across WhatsApp, Facebook Messenger, and your website to provide seamless customer interactions.</p>
                <ul class="service-highlights">
                    <li><i class="fas fa-check-circle text-primary"></i> Official WhatsApp Business API integration</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Facebook Messenger chatbots with rich media capabilities</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Website embedded live chat solutions</li>
                    <li><i class="fas fa-check-circle text-primary"></i> Cross-platform conversation continuity</li>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4>Platform Features</h4>
                        <div class="platform-item d-flex align-items-start mb-3">
                            <i class="fab fa-whatsapp text-primary mt-1 me-3"></i>
                            <div>
                                <h5 class="mb-1">WhatsApp</h5>
                                <p class="mb-0">Rich messaging features, end-to-end encryption, template messages.</p>
                            </div>
                        </div>
                        <div class="platform-item d-flex align-items-start mb-3">
                            <i class="fab fa-facebook-messenger text-primary mt-1 me-3"></i>
                            <div>
                                <h5 class="mb-1">Facebook Messenger</h5>
                                <p class="mb-0">Button templates, carousels, persistent menus, quick replies.</p>
                            </div>
                        </div>
                        <div class="platform-item d-flex align-items-start">
                            <i class="fas fa-globe text-primary mt-1 me-3"></i>
                            <div>
                                <h5 class="mb-1">Website Integration</h5>
                                <p class="mb-0">Custom UI, proactive triggers, visitor analytics, form support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Development Process -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up">
                <h2>Our Chatbot Development Process</h2>
                <p class="lead">We follow a structured approach to create effective AI chatbots and virtual assistants.</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="process-card text-center h-100">
                    <div class="process-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Discovery & Strategy</h3>
                    <p>We identify use cases, define goals, and develop a chatbot strategy aligned with your business objectives.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card text-center h-100">
                    <div class="process-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Conversation Design</h3>
                    <p>We create conversation flows, dialogue scripts, and develop the chatbot's personality to match your brand.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card text-center h-100">
                    <div class="process-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Development & NLP</h3>
                    <p>We build the chatbot with the appropriate technology stack and train it to understand user intent.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card text-center h-100">
                    <div class="process-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Testing & Optimization</h3>
                    <p>We test, deploy, and continuously improve your chatbot based on performance data and user feedback.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<?php renderWhyHireUs($serviceName, $why_hire_us['reasons']); ?>

<!-- CTA Section -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="mb-4">Ready to Transform Your Customer Experience with AI?</h2>
                <p class="lead mb-4">Let's create an intelligent chatbot solution tailored to your business needs.</p>
                <a href="/pages/contact.php" class="btn btn-light btn-lg">Schedule a Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5">
                <h2 class="faq-title">Frequently Asked Questions</h2>
                <p class="faq-subtitle">Common questions about our AI chatbot and virtual assistant services</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How long does it take to develop a custom AI chatbot?</h3>
                            <button class="toggle-btn"><span class="icon"></span></button>
                        </div>
                        <div class="faq-answer">
                            <p>The development timeline for a custom AI chatbot depends on its complexity and the required integrations. Basic chatbots can be developed in 2-4 weeks, while more sophisticated solutions might take 2-3 months. During our initial consultation, we'll provide a more accurate timeline based on your specific requirements.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can AI chatbots integrate with our existing systems?</h3>
                            <button class="toggle-btn"><span class="icon"></span></button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, our AI chatbots can integrate with a wide range of existing systems including CRM platforms (Salesforce, HubSpot), e-commerce systems (Shopify, WooCommerce), helpdesk software (Zendesk, Freshdesk), and custom databases. We create seamless integrations that allow your chatbot to access relevant data and perform actions within your business systems.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you ensure the security of customer data in chatbot interactions?</h3>
                            <button class="toggle-btn"><span class="icon"></span></button>
                        </div>
                        <div class="faq-answer">
                            <p>We take data security very seriously and implement multiple layers of protection. This includes encryption of sensitive data, secure API connections, compliance with data protection regulations (GDPR, CCPA), regular security audits, and user authentication for accessing sensitive information. Additionally, we can implement on-premises solutions for clients with stringent security requirements.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What kind of reporting and analytics do you provide for chatbot performance?</h3>
                            <button class="toggle-btn"><span class="icon"></span></button>
                        </div>
                        <div class="faq-answer">
                            <p>Our chatbot solutions include comprehensive analytics dashboards that track key performance indicators such as user engagement, conversation completion rates, frequently asked questions, fallback rates, and user satisfaction. These insights help continuously improve the chatbot's performance and identify areas where human intervention might be needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once '../../../components/footer.php';
?> 