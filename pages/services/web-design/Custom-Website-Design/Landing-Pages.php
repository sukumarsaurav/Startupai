<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Landing Pages
$why_hire_us = getWhyHireUsContent('landing-pages');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Landing Pages</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    High-converting landing pages designed to turn visitors into customers
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
                <img src="/assets/images/services/landing-page.svg" alt="Landing Page Design" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Custom Landing Page Design</h2>
                <p>
                    Our landing page design services create focused, conversion-optimized pages that drive specific business actions. Whether you're promoting a product, generating leads, or building an email list, we design landing pages that speak directly to your target audience and guide them toward a single, clear goal. From compelling copy to strategic layout, every element is crafted to maximize conversions.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-bullseye text-primary"></i>
                        </div>
                        <div>
                            <h5>Conversion-Focused Design</h5>
                            <p>Strategic layouts and elements designed specifically to drive action.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-pencil-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Persuasive Copywriting</h5>
                            <p>Compelling headlines and content that resonates with your target audience.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-tachometer-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Speed Optimization</h5>
                            <p>Lightning-fast loading times to minimize bounce rates and maximize engagement.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <h5>A/B Testing Ready</h5>
                            <p>Designs built for easy testing and optimization to continuously improve results.</p>
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
                <h2 class="section-title">Our Landing Page Design Process</h2>
                <p class="section-description">
                    How we create high-converting landing pages
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h4>Audience Analysis</h4>
                    <p>We research your target audience to understand their needs, pain points, and decision triggers.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                    </div>
                    <h4>Conversion-Focused Design</h4>
                    <p>We create layouts that guide visitors along the optimal path to conversion.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development & Integration</h4>
                    <p>Our developers build your landing page with clean code and connect necessary tools and tracking.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-flask fa-3x text-primary"></i>
                    </div>
                    <h4>Testing & Optimization</h4>
                    <p>We continuously test and refine your landing page to maximize conversion rates over time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Landing Page Types -->
<section class="landing-page-types-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Landing Page Types</h2>
                <p class="section-description">
                    Custom solutions for different conversion goals
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-envelope fa-2x text-primary"></i>
                    </div>
                    <h4>Lead Generation Pages</h4>
                    <p>Focused pages designed to capture customer information through optimized forms, compelling offers, and strong calls-to-action.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-shopping-cart fa-2x text-primary"></i>
                    </div>
                    <h4>Sales Pages</h4>
                    <p>Persuasive pages that build desire for your product or service and guide visitors directly to purchase with compelling copy and testimonials.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-calendar-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Event Registration Pages</h4>
                    <p>Engaging pages that showcase event details, speaker information, and benefits while streamlining the registration process.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-download fa-2x text-primary"></i>
                    </div>
                    <h4>App Download Pages</h4>
                    <p>Feature-focused pages that highlight app functionality, showcase screenshots, and drive installations with prominent download buttons.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-laptop-code fa-2x text-primary"></i>
                    </div>
                    <h4>Webinar Registration Pages</h4>
                    <p>Promotional pages that build excitement for your webinar, highlight speaker expertise, and maximize sign-ups with countdown timers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-percentage fa-2x text-primary"></i>
                    </div>
                    <h4>Promotional/Offer Pages</h4>
                    <p>Time-sensitive pages that create urgency around special deals, discounts, or limited-time offers to drive immediate action.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Elements -->
<section class="landing-page-elements-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Essential Landing Page Elements</h2>
                <p class="section-description">
                    Key components that drive conversion success
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-heading fa-2x text-primary"></i>
                    </div>
                    <h4>Compelling Headlines</h4>
                    <p>Attention-grabbing, benefit-focused headlines that immediately communicate your unique value proposition.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-image fa-2x text-primary"></i>
                    </div>
                    <h4>Hero Visuals</h4>
                    <p>Striking imagery, videos, or animations that reinforce your message and create an emotional connection.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-list-ul fa-2x text-primary"></i>
                    </div>
                    <h4>Benefit-Focused Content</h4>
                    <p>Clearly articulated value points that emphasize how your offer solves specific problems for your audience.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-comment-dots fa-2x text-primary"></i>
                    </div>
                    <h4>Social Proof</h4>
                    <p>Testimonials, reviews, trust badges, and client logos that build credibility and reduce hesitation.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-mouse-pointer fa-2x text-primary"></i>
                    </div>
                    <h4>Clear Call-to-Action</h4>
                    <p>Prominent, action-oriented buttons with compelling copy that guide visitors toward the desired conversion.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="element-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="element-icon mb-3">
                        <i class="fas fa-minus-circle fa-2x text-primary"></i>
                    </div>
                    <h4>Distraction Removal</h4>
                    <p>Simplified navigation and focused design that eliminates anything that might divert attention from the main goal.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Integration -->
<section class="integration-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Landing Page Integrations</h2>
                <p class="section-description">
                    Powerful tools we connect to maximize results
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <img src="/assets/images/integrations/analytics.svg" alt="Analytics Platforms" class="img-fluid mb-3" style="height: 60px;">
                    <h4>Analytics Tools</h4>
                    <p>Google Analytics, Hotjar, Clarity, and other tracking tools to monitor visitor behavior and conversion metrics.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <img src="/assets/images/integrations/email.svg" alt="Email Marketing" class="img-fluid mb-3" style="height: 60px;">
                    <h4>Email Marketing Platforms</h4>
                    <p>Mailchimp, ConvertKit, ActiveCampaign, and other email services for lead capture and nurturing sequences.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <img src="/assets/images/integrations/crm.svg" alt="CRM Systems" class="img-fluid mb-3" style="height: 60px;">
                    <h4>CRM Systems</h4>
                    <p>Salesforce, HubSpot, Zoho, and other CRM platforms to manage and track leads generated through your landing page.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <img src="/assets/images/integrations/payment.svg" alt="Payment Processors" class="img-fluid mb-3" style="height: 60px;">
                    <h4>Payment Processors</h4>
                    <p>Stripe, PayPal, Square, and other payment systems for frictionless transactions on sales-focused landing pages.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <img src="/assets/images/integrations/testing.svg" alt="A/B Testing" class="img-fluid mb-3" style="height: 60px;">
                    <h4>A/B Testing Tools</h4>
                    <p>Google Optimize, Optimizely, VWO, and other testing platforms to compare variations and optimize performance.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <img src="/assets/images/integrations/automation.svg" alt="Marketing Automation" class="img-fluid mb-3" style="height: 60px;">
                    <h4>Marketing Automation</h4>
                    <p>Zapier, Make (Integromat), and custom integrations that connect your landing page with your marketing ecosystem.</p>
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
                <h2 class="section-title">Benefits of Professional Landing Pages</h2>
                <p class="section-description">
                    How our landing page design drives business results
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-bar fa-2x text-primary"></i>
                    </div>
                    <h4>Higher Conversion Rates</h4>
                    <p>Purpose-built pages that convert significantly more visitors compared to general website pages.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bullseye fa-2x text-primary"></i>
                    </div>
                    <h4>Focused Messaging</h4>
                    <p>Targeted content that speaks directly to specific audience segments and their unique needs.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Better ROI on Ad Spend</h4>
                    <p>Improved conversion rates that maximize the return on your PPC and social media advertising investments.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Performance</h4>
                    <p>Streamlined pages that load quickly and perform optimally on all devices, reducing bounce rates.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-flask fa-2x text-primary"></i>
                    </div>
                    <h4>Measurable Results</h4>
                    <p>Clear metrics and analytics that provide actionable insights for continuous improvement.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-sync-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Rapid Iteration</h4>
                    <p>Flexible designs that can be quickly tested and updated based on performance data.</p>
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
                <h2 class="mb-3">Ready to Convert More Visitors?</h2>
                <p class="lead mb-0">
                    Let's create high-performing landing pages that drive results for your business.
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
            <h2 class="faq-title">Landing Pages FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What makes a landing page different from a regular website page?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Landing pages differ from regular website pages in several fundamental ways. First, landing pages have a single, focused objective (such as generating leads or driving sales) while regular pages often serve multiple purposes. Landing pages typically eliminate navigation menus and other exit points to keep visitors focused on the call-to-action, whereas regular pages include full navigation to encourage site exploration. The content on landing pages is highly targeted to a specific audience or campaign, often aligned with particular ads or marketing channels. They feature prominent, action-oriented CTAs instead of the more informational approach of standard web pages. Landing pages are also designed to be measurable, with every element optimized for conversion rather than general information sharing. This laser focus makes landing pages significantly more effective for converting specific actions, with conversion rates typically 2-5 times higher than regular website pages for targeted campaigns.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you optimize landing pages for better conversion rates?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Our landing page optimization process involves multiple evidence-based strategies. We begin with audience research to understand visitor motivations, pain points, and decision factors, allowing us to craft messaging that resonates. We implement strategic A/B testing to compare variations of headlines, imagery, form length, CTAs, and overall layout to identify the highest-performing elements. Heat mapping and session recordings help us analyze user behavior, revealing where visitors focus attention, encounter friction, or abandon the page. We optimize page load speed, knowing that even a 1-second delay can reduce conversions by 7%. Our mobile-first approach ensures seamless experiences across all devices. We employ psychological triggers like social proof, scarcity, and urgency to motivate action. Finally, we implement progressive optimization, continuously refining based on performance data rather than making sweeping changes. This systematic approach typically yields 30-50% improvements in conversion rates for our clients.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How many landing pages should my business have?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The optimal number of landing pages depends on several factors specific to your business. Research shows that companies with 10-15 landing pages typically generate 55% more leads than those with fewer pages. This is because multiple landing pages allow you to target different audience segments, products/services, marketing channels, and stages of the buyer's journey with tailored messaging. We recommend creating separate landing pages for each distinct marketing campaign, audience segment, or offer to maximize relevance and conversion potential. For businesses with multiple products or services, having dedicated landing pages for each offering yields better results than directing all traffic to a single page. The key is ensuring each landing page has a specific purpose and target audience rather than creating pages arbitrarily. During our strategy phase, we'll analyze your business offerings, marketing channels, and audience segments to recommend the optimal landing page structure that balances resources and potential ROI.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 