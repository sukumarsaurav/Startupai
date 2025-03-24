<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Accessibility & Usability Testing
$why_hire_us = getWhyHireUsContent('accessibility-usability-testing');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Accessibility & Usability Testing</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Ensure your digital products work for everyone, comply with standards, and deliver exceptional experiences
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
                <img src="/assets/images/services/accessibility-testing.svg" alt="Accessibility and Usability Testing" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Accessibility & Usability Testing Services</h2>
                <p>
                    Our comprehensive testing services help ensure your digital products are not only user-friendly but also accessible to people of all abilities. We identify and eliminate barriers that might prevent users from engaging with your content, while also verifying that your site meets legal accessibility requirements and delivers an intuitive experience for all users. Our approach combines automated testing tools with expert human evaluation to provide actionable insights for improvement.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-universal-access text-primary"></i>
                        </div>
                        <div>
                            <h5>Accessibility Compliance</h5>
                            <p>Comprehensive audits against WCAG guidelines and ADA requirements to reduce legal risk.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-tasks text-primary"></i>
                        </div>
                        <div>
                            <h5>Usability Testing</h5>
                            <p>Real user testing sessions that reveal pain points and opportunities for improvement.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Cross-Device Validation</h5>
                            <p>Testing across multiple devices, screen sizes, browsers, and assistive technologies.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-file-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Detailed Reporting</h5>
                            <p>Prioritized recommendations with clear solutions for identified issues.</p>
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
                <h2 class="section-title">Our Testing Process</h2>
                <p class="section-description">
                    A systematic approach to evaluating accessibility and usability
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-clipboard-list fa-3x text-primary"></i>
                    </div>
                    <h4>Initial Assessment</h4>
                    <p>We perform preliminary automated scans and review your website or application to identify scope and testing requirements.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Technical Evaluation</h4>
                    <p>Our experts conduct detailed code analysis, screen reader testing, and manual accessibility checks against WCAG standards.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-users fa-3x text-primary"></i>
                    </div>
                    <h4>User Testing</h4>
                    <p>We conduct moderated testing sessions with diverse users, including those with disabilities and varying technical abilities.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-file-medical-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Reporting & Remediation</h4>
                    <p>We deliver comprehensive findings with prioritized recommendations and assist with implementing solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accessibility Standards -->
<section class="standards-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Accessibility Standards We Test Against</h2>
                <p class="section-description">
                    Ensuring compliance with global standards and legal requirements
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="standard-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="standard-icon mb-3">
                        <i class="fas fa-check-circle fa-2x text-primary"></i>
                    </div>
                    <h4>WCAG 2.1 AA Compliance</h4>
                    <p>The Web Content Accessibility Guidelines are the global standard for web accessibility. We test against all WCAG 2.1 Level AA success criteria, covering perceivability, operability, understandability, and robustness of your digital content.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="standard-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="standard-icon mb-3">
                        <i class="fas fa-balance-scale fa-2x text-primary"></i>
                    </div>
                    <h4>ADA & Section 508</h4>
                    <p>The Americans with Disabilities Act and Section 508 of the Rehabilitation Act set legal requirements for digital accessibility in the U.S. We ensure your site meets these standards to prevent potential lawsuits and demonstrate compliance.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="standard-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="standard-icon mb-3">
                        <i class="fas fa-globe fa-2x text-primary"></i>
                    </div>
                    <h4>International Standards</h4>
                    <p>We also test against country-specific requirements like the European Accessibility Act, Canada's Accessibility for Ontarians with Disabilities Act (AODA), and others to ensure global compliance for multinational organizations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testing Methods -->
<section class="testing-methods-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Testing Methodologies</h2>
                <p class="section-description">
                    Comprehensive approaches to ensure thorough evaluation
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="method-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="mb-3">Accessibility Testing</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-robot text-primary"></i>
                                </div>
                                <div>
                                    <h5>Automated Testing</h5>
                                    <p>We utilize industry-leading accessibility scanning tools to identify code-level issues across your entire site, establishing a baseline for further testing.</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-user-check text-primary"></i>
                                </div>
                                <div>
                                    <h5>Manual Expert Review</h5>
                                    <p>Our accessibility specialists manually test critical user paths, examining aspects that automated tools can't evaluate, such as color contrast, keyboard navigation, and form interactions.</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-assistive-listening-systems text-primary"></i>
                                </div>
                                <div>
                                    <h5>Assistive Technology Testing</h5>
                                    <p>We test with screen readers (JAWS, NVDA, VoiceOver), screen magnifiers, and voice recognition software to ensure compatibility with tools used by people with disabilities.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-user-friends text-primary"></i>
                                </div>
                                <div>
                                    <h5>User Testing with People with Disabilities</h5>
                                    <p>When appropriate, we include testers with various disabilities to provide authentic feedback on real-world accessibility challenges.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="method-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4 class="mb-3">Usability Testing</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-tasks text-primary"></i>
                                </div>
                                <div>
                                    <h5>Task-Based Testing</h5>
                                    <p>We observe users completing common tasks on your site, identifying pain points, confusion, and opportunities to streamline the user experience.</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-comments text-primary"></i>
                                </div>
                                <div>
                                    <h5>Think-Aloud Protocol</h5>
                                    <p>Participants verbalize their thoughts while navigating your site, providing valuable insights into user expectations, mental models, and decision-making processes.</p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-mobile-alt text-primary"></i>
                                </div>
                                <div>
                                    <h5>Cross-Device Testing</h5>
                                    <p>We evaluate performance across different devices, screen sizes, and browsers to ensure consistent usability regardless of how users access your content.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="method-icon me-3">
                                    <i class="fas fa-chart-pie text-primary"></i>
                                </div>
                                <div>
                                    <h5>Quantitative Measurement</h5>
                                    <p>We collect metrics like time-on-task, success rates, and error rates to provide objective measurements of usability improvements over time.</p>
                                </div>
                            </div>
                        </li>
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
                <h2 class="section-title">Benefits of Accessibility & Usability Testing</h2>
                <p class="section-description">
                    Why investing in thorough testing is essential for your business
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Expanded Audience Reach</h4>
                    <p>Accessible websites can reach the 15-20% of the population with disabilities, representing a significant market opportunity and competitive advantage.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-gavel fa-2x text-primary"></i>
                    </div>
                    <h4>Legal Compliance</h4>
                    <p>Proactively addressing accessibility reduces the risk of costly lawsuits, which have increased by over 300% in recent years against non-compliant websites.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-percentage fa-2x text-primary"></i>
                    </div>
                    <h4>Increased Conversions</h4>
                    <p>Usability improvements typically result in 10-25% increases in conversion rates as users can more easily accomplish their goals on your site.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>SEO Advantages</h4>
                    <p>Many accessibility improvements, such as proper heading structure and image alt text, also enhance search engine optimization and visibility.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bullhorn fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Brand Reputation</h4>
                    <p>Commitment to accessibility demonstrates corporate social responsibility and inclusivity, positively impacting brand perception and loyalty.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-code fa-2x text-primary"></i>
                    </div>
                    <h4>Better Code Quality</h4>
                    <p>Accessible websites often feature cleaner, more semantic code that improves maintenance, performance, and compatibility across platforms.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Deliverables -->
<section class="deliverables-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">What You'll Receive</h2>
                <p class="section-description">
                    Comprehensive deliverables that guide your improvement efforts
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="deliverable-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="deliverable-icon mb-3">
                        <i class="fas fa-file-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Detailed Audit Report</h4>
                    <p>A comprehensive document containing:</p>
                    <ul class="mt-3">
                        <li>Executive summary with compliance score and risk assessment</li>
                        <li>Detailed findings categorized by severity and WCAG criteria</li>
                        <li>Specific code examples and page locations of issues</li>
                        <li>Screenshots and annotations highlighting problems</li>
                        <li>Prioritized remediation plan with estimated effort levels</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="deliverable-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="deliverable-icon mb-3">
                        <i class="fas fa-tools fa-2x text-primary"></i>
                    </div>
                    <h4>Implementation Resources</h4>
                    <p>Practical resources to help your team implement fixes:</p>
                    <ul class="mt-3">
                        <li>Code snippets and examples of compliant implementations</li>
                        <li>Technical documentation for developers</li>
                        <li>Design recommendations with accessible alternatives</li>
                        <li>Content guidelines for writers and editors</li>
                        <li>Recommended tools for ongoing accessibility monitoring</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="deliverable-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="deliverable-icon mb-3">
                        <i class="fas fa-video fa-2x text-primary"></i>
                    </div>
                    <h4>Testing Session Recordings</h4>
                    <p>Documentation of user interactions:</p>
                    <ul class="mt-3">
                        <li>Screen and audio recordings of usability testing sessions</li>
                        <li>Demonstrations of screen reader and assistive technology usage</li>
                        <li>Side-by-side comparisons of problematic vs. accessible user experiences</li>
                        <li>Heatmaps and user journey visualizations</li>
                        <li>Video explanations of complex accessibility concepts</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="deliverable-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="deliverable-icon mb-3">
                        <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                    </div>
                    <h4>Training & Knowledge Transfer</h4>
                    <p>Resources to build internal capabilities:</p>
                    <ul class="mt-3">
                        <li>Accessibility awareness training for stakeholders</li>
                        <li>Technical workshops for designers and developers</li>
                        <li>Content creation guidelines for marketing teams</li>
                        <li>Testing procedures for QA teams</li>
                        <li>Documentation for maintaining accessibility as your site evolves</li>
                    </ul>
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
                <h2 class="mb-3">Ready to Make Your Digital Products Accessible to Everyone?</h2>
                <p class="lead mb-0">
                    Let's start with a comprehensive accessibility and usability evaluation.
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
            <h2 class="faq-title">Accessibility & Usability Testing FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    Is web accessibility legally required for my business?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Legal requirements for web accessibility vary by country and industry, but the trend is toward increasing mandates. In the United States, the Americans with Disabilities Act (ADA) has been interpreted by courts to apply to websites, resulting in thousands of lawsuits against non-compliant businesses. Federal agencies and their contractors must comply with Section 508 standards. In the EU, the European Accessibility Act sets requirements for many digital services. Beyond legal obligations, accessibility is considered a best practice that benefits all users and expands your market reach. We recommend consulting with legal counsel about specific requirements for your business, and we can help you understand the technical implications of those requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does a comprehensive accessibility audit take?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline for a comprehensive accessibility audit depends on several factors, including the size and complexity of your website or application, the number of templates/page types, and the depth of testing required. For a typical business website with 10-15 page templates, our audit process generally takes 2-3 weeks from initiation to final report delivery. This includes automated testing, manual expert review, assistive technology testing, and detailed documentation of findings with remediation recommendations. For large enterprise sites, e-commerce platforms, or complex web applications, the process may take 4-6 weeks. We can also provide expedited audits focused on high-priority pages or specific compliance concerns when time is critical.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Will making my site accessible affect its design or user experience?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>When implemented properly, accessibility enhances rather than compromises design and user experience. Many accessibility principles—such as clear navigation, readable text, and logical layouts—benefit all users. While some adjustments may be necessary (like ensuring sufficient color contrast or providing text alternatives for images), these changes typically strengthen your design by making it more usable and inclusive. It's most efficient to incorporate accessibility from the beginning of the design process rather than retrofitting it later. Our approach emphasizes creative solutions that maintain your brand identity and visual appeal while ensuring accessibility. We've helped many clients transform their digital presence to be both beautiful and accessible, proving that these goals are complementary rather than contradictory.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 