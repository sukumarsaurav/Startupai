<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Cross-Browser Compatibility
$why_hire_us = getWhyHireUsContent('cross-browser-compatibility');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Cross-Browser Compatibility</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Ensure your website works flawlessly across all browsers and devices
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
                <img src="/assets/images/services/cross-browser.svg" alt="Cross-Browser Compatibility" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Cross-Browser Compatibility Services</h2>
                <p>
                    Our cross-browser compatibility services ensure your website delivers a consistent, error-free experience across all browsers, operating systems, and devices. We identify and resolve compatibility issues that can frustrate users and damage your brand's credibility. From modern browsers like Chrome and Firefox to legacy systems and mobile browsers, we ensure your web presence functions perfectly everywhere.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-sync-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Comprehensive Testing</h5>
                            <p>Rigorous testing across all major browsers and versions to identify compatibility issues.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-code text-primary"></i>
                        </div>
                        <div>
                            <h5>Progressive Enhancement</h5>
                            <p>Building sites that work on basic browsers while enhancing experience on modern ones.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Device Compatibility</h5>
                            <p>Ensuring consistent functionality across desktop, tablet, and mobile browsers.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-chart-bar text-primary"></i>
                        </div>
                        <div>
                            <h5>Analytics Integration</h5>
                            <p>Monitoring browser usage patterns to prioritize compatibility efforts.</p>
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
                <h2 class="section-title">Our Cross-Browser Compatibility Process</h2>
                <p class="section-description">
                    A systematic approach to ensuring your website works everywhere
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-search fa-3x text-primary"></i>
                    </div>
                    <h4>Compatibility Audit</h4>
                    <p>We analyze your website across multiple browsers, devices, and operating systems to identify existing compatibility issues.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Solution Development</h4>
                    <p>We develop cross-browser fixes using standards-compliant code, feature detection, and progressive enhancement techniques.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-laptop-code fa-3x text-primary"></i>
                    </div>
                    <h4>Implementation</h4>
                    <p>We implement solutions that ensure consistency while maintaining optimal performance across all platforms.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-check-circle fa-3x text-primary"></i>
                    </div>
                    <h4>Verification Testing</h4>
                    <p>We perform comprehensive testing on all target browsers and devices to verify solutions work as expected.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testing Methods -->
<section class="testing-methods-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Testing Methods</h2>
                <p class="section-description">
                    Comprehensive testing strategies to ensure cross-browser compatibility
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="method-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="method-icon mb-3">
                        <i class="fas fa-desktop fa-2x text-primary"></i>
                    </div>
                    <h4>Real Device Testing</h4>
                    <p>We test your website on actual devices with various browsers to replicate real-world conditions:</p>
                    <ul class="mt-3">
                        <li>Physical testing lab with 50+ devices and browsers</li>
                        <li>Testing across different hardware capabilities</li>
                        <li>Performance evaluation on actual devices</li>
                        <li>Touch interaction testing for mobile browsers</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="method-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="method-icon mb-3">
                        <i class="fas fa-robot fa-2x text-primary"></i>
                    </div>
                    <h4>Automated Testing</h4>
                    <p>We employ advanced automation to test functionality across browsers:</p>
                    <ul class="mt-3">
                        <li>Scripted test suites that validate core functionality</li>
                        <li>Visual regression testing to detect rendering differences</li>
                        <li>Automated cross-browser test frameworks</li>
                        <li>Continuous integration for ongoing compatibility</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="method-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="method-icon mb-3">
                        <i class="fas fa-user-check fa-2x text-primary"></i>
                    </div>
                    <h4>User Scenario Testing</h4>
                    <p>We validate critical user journeys across browsers:</p>
                    <ul class="mt-3">
                        <li>Testing complete user flows from start to finish</li>
                        <li>Conversion path testing across browsers</li>
                        <li>Form submission and validation testing</li>
                        <li>Interactive element behavior verification</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Common Issues -->
<section class="common-issues-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Common Cross-Browser Issues We Resolve</h2>
                <p class="section-description">
                    Frequently encountered browser compatibility problems and our solutions
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="issue-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-paint-brush text-primary me-2"></i> CSS Rendering Inconsistencies</h4>
                    <p>Different browsers interpret CSS properties differently, causing layout and styling variations.</p>
                    <div class="solution mt-3">
                        <h5 class="text-primary">Our Solution:</h5>
                        <ul>
                            <li>Implementing CSS resets and normalization techniques</li>
                            <li>Using feature detection for progressive CSS enhancement</li>
                            <li>Applying vendor prefixes and fallbacks for CSS properties</li>
                            <li>Creating flexible layouts that adapt to rendering differences</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="issue-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-code text-primary me-2"></i> JavaScript Behavior Differences</h4>
                    <p>JavaScript methods, events, and APIs may work differently or be unavailable in certain browsers.</p>
                    <div class="solution mt-3">
                        <h5 class="text-primary">Our Solution:</h5>
                        <ul>
                            <li>Implementing feature detection rather than browser detection</li>
                            <li>Using polyfills and shims for missing functionality</li>
                            <li>Ensuring event handling works consistently across browsers</li>
                            <li>Proper error handling for browser-specific JavaScript issues</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up">
                <div class="issue-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-mobile-alt text-primary me-2"></i> Mobile Browser Quirks</h4>
                    <p>Mobile browsers often have unique behaviors that differ from desktop counterparts.</p>
                    <div class="solution mt-3">
                        <h5 class="text-primary">Our Solution:</h5>
                        <ul>
                            <li>Optimizing touch events and interactions</li>
                            <li>Managing viewport and scaling issues</li>
                            <li>Addressing iOS and Android-specific quirks</li>
                            <li>Implementing mobile-specific performance optimizations</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="issue-card h-100 p-4 bg-white rounded shadow-sm">
                    <h4><i class="fas fa-image text-primary me-2"></i> Media and Font Rendering</h4>
                    <p>Images, videos, and fonts often display differently across browsers and operating systems.</p>
                    <div class="solution mt-3">
                        <h5 class="text-primary">Our Solution:</h5>
                        <ul>
                            <li>Implementing responsive images with appropriate fallbacks</li>
                            <li>Using web-safe fonts and proper font stacks</li>
                            <li>Ensuring video playback works across all browsers</li>
                            <li>Creating fallbacks for advanced media features</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Browsers We Support -->
<section class="browsers-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Browsers We Support</h2>
                <p class="section-description">
                    Comprehensive coverage across all major browsers and versions
                </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-2 col-4 mb-4" data-aos="fade-up">
                <div class="browser-card p-3">
                    <i class="fab fa-chrome fa-3x mb-3 text-primary"></i>
                    <h5>Chrome</h5>
                    <p class="small text-muted">Latest versions + 4 previous</p>
                </div>
            </div>
            <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="browser-card p-3">
                    <i class="fab fa-firefox fa-3x mb-3 text-primary"></i>
                    <h5>Firefox</h5>
                    <p class="small text-muted">Latest versions + 4 previous</p>
                </div>
            </div>
            <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="browser-card p-3">
                    <i class="fab fa-safari fa-3x mb-3 text-primary"></i>
                    <h5>Safari</h5>
                    <p class="small text-muted">Latest versions + 3 previous</p>
                </div>
            </div>
            <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="browser-card p-3">
                    <i class="fab fa-edge fa-3x mb-3 text-primary"></i>
                    <h5>Edge</h5>
                    <p class="small text-muted">All Chromium versions</p>
                </div>
            </div>
            <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="browser-card p-3">
                    <i class="fab fa-opera fa-3x mb-3 text-primary"></i>
                    <h5>Opera</h5>
                    <p class="small text-muted">Latest versions + 2 previous</p>
                </div>
            </div>
            <div class="col-md-2 col-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="browser-card p-3">
                    <i class="fas fa-globe fa-3x mb-3 text-primary"></i>
                    <h5>IE 11</h5>
                    <p class="small text-muted">Graceful degradation</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <p class="lead">We also test on mobile browsers including Safari iOS, Chrome for Android, Samsung Internet, and more.</p>
                <p>Our compatibility support is tailored to your specific audience demographics based on analytics data.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Cross-Browser Compatibility</h2>
                <p class="section-description">
                    Why ensuring your website works across all browsers matters
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Maximum Audience Reach</h4>
                    <p>By ensuring your website works across all browsers, you avoid alienating potential customers who might be using different browsers. This inclusivity expands your market reach and prevents lost opportunities due to technical issues.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-star fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Brand Credibility</h4>
                    <p>A website that works flawlessly regardless of browser builds trust and professionalism. Broken layouts or malfunctioning features can damage your brand reputation and create an impression of carelessness.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Improved Conversion Rates</h4>
                    <p>When users can navigate and interact with your site without technical issues, they're more likely to complete desired actions. Cross-browser compatibility ensures conversion paths work seamlessly for all visitors.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>Better SEO Performance</h4>
                    <p>Search engines favor websites that provide good user experiences across different browsers. Compatibility issues can negatively impact crawling, indexing, and ultimately your search rankings.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-headset fa-2x text-primary"></i>
                    </div>
                    <h4>Reduced Support Issues</h4>
                    <p>Websites that work consistently across browsers generate fewer customer support requests related to technical problems, allowing your team to focus on more valuable customer interactions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-code-branch fa-2x text-primary"></i>
                    </div>
                    <h4>Future-Proof Development</h4>
                    <p>Using standards-compliant code and proper compatibility techniques creates a more maintainable codebase that's better prepared for future browser updates and emerging web technologies.</p>
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
                <h2 class="mb-3">Ready to Ensure Your Website Works Everywhere?</h2>
                <p class="lead mb-0">
                    Let's make your website flawless across all browsers and devices.
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
            <h2 class="faq-title">Cross-Browser Compatibility FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    Which browsers should my website support?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The browsers your website should support depend on your specific audience. We recommend analyzing your website analytics to determine which browsers your visitors are using. Generally, you should support the latest two versions of major browsers (Chrome, Firefox, Safari, Edge) at minimum. For business websites, supporting IE11 may still be necessary if you have significant corporate users. For consumer-focused websites, focusing on modern browsers and mobile browsers is typically sufficient. We can help analyze your audience data and recommend a compatibility strategy that balances development effort with maximum user coverage.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How do you handle Internet Explorer compatibility?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We approach Internet Explorer compatibility using progressive enhancement techniques. This means we create a functional core experience that works in older browsers like IE, then add enhanced features and visual refinements for modern browsers. For IE11 specifically, we employ polyfills for missing JavaScript features, CSS fallbacks for unsupported properties, and careful testing of layouts and interactions. For older versions (IE9/10), we implement graceful degradation where necessary, ensuring content remains accessible even if some visual elements or interactions are simplified. We'll work with you to determine the appropriate level of IE support based on your audience needs and budget constraints.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How often should I test my website for browser compatibility?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Browser compatibility testing should be conducted: 1) During initial development, 2) Before any major website update or redesign, 3) After implementing significant new functionality, 4) When browsers release major updates, and 5) Periodically every 3-6 months to catch any emerging issues. Additionally, we recommend setting up automated compatibility testing as part of your development workflow to catch issues early. For mission-critical websites, implementing a continuous testing approach with regular manual verification is ideal. We offer ongoing compatibility monitoring services that can alert you to issues as they arise, allowing for proactive resolution before they impact your users.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
