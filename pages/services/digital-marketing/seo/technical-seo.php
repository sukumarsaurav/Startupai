<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';
require_once '../../../../config/why-hire-us.php';

// Page specific content
$pageTitle = "Technical SEO";
$pageDescription = "Optimize your website's technical foundation with our comprehensive Technical SEO services focused on site speed, core web vitals, and crawlability";
$serviceName = "Technical SEO";
$serviceSlug = "technical-seo";

require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('seo');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <a href="/contact" class="btn btn-primary btn-lg mt-3">Get a Free Technical SEO Audit</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/assets/images/services/technical-seo.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4" data-aos="fade-up">
                <h2 class="section-title">Build a Strong Technical Foundation</h2>
                <p>Technical SEO focuses on optimizing the infrastructure of your website to improve search engine crawling, indexing, and rendering of your content. While on-page SEO addresses content and off-page SEO builds authority, technical SEO ensures that search engines can effectively access, understand, and evaluate your website.</p>
                <p>Our Technical SEO services address the critical behind-the-scenes factors that influence your rankings, with particular emphasis on site speed, Core Web Vitals, and overall site health. We implement technical optimizations that enhance both search engine accessibility and user experience—providing the foundation upon which your content and link-building efforts can succeed.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Offered -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Technical SEO Services</h2>
                <p class="lead">Comprehensive solutions to optimize your website's performance</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-tachometer-alt fa-3x text-primary"></i>
                    </div>
                    <h3>Site Speed & Core Web Vitals Optimization</h3>
                    <p>Enhance your website's loading performance and user experience metrics to meet Google's standards.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> Image optimization & next-gen formats</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Code minification & compression</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Render-blocking resource management</li>
                        <li><i class="fas fa-check text-primary me-2"></i> CLS, LCP, FID improvement</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-sitemap fa-3x text-primary"></i>
                    </div>
                    <h3>Site Architecture & Crawlability</h3>
                    <p>Optimize your website structure for efficient crawling and maximum content discovery.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> XML sitemap optimization</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Robots.txt configuration</li>
                        <li><i class="fas fa-check text-primary me-2"></i> URL structure improvement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Internal linking strategy</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                    </div>
                    <h3>Mobile Optimization</h3>
                    <p>Ensure your website delivers an exceptional experience across all devices and screen sizes.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> Responsive design evaluation</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Mobile usability enhancement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Touch element spacing</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Viewport configuration</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h3>Structured Data & Schema Implementation</h3>
                    <p>Help search engines better understand your content and enable rich results in search listings.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> Schema markup implementation</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Rich snippet enhancement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Entity relationship mapping</li>
                        <li><i class="fas fa-check text-primary me-2"></i> JSON-LD optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-shield-alt fa-3x text-primary"></i>
                    </div>
                    <h3>Security & HTTPS Implementation</h3>
                    <p>Secure your website and boost user trust with proper security protocols and configurations.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> SSL implementation & monitoring</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Mixed content resolution</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Security header implementation</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Safe browsing issue resolution</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-tools fa-3x text-primary"></i>
                    </div>
                    <h3>Technical Issue Resolution</h3>
                    <p>Identify and fix technical problems that may be hindering your search performance.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> 404 error management</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Redirect optimization</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Duplicate content resolution</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Orphaned page identification</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Technical SEO Advantage</h2>
                <p class="lead">What makes our technical optimization approach effective</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-tools fa-3x text-primary mb-3"></i>
                    <h4>Advanced Technical Tools</h4>
                    <p>We employ enterprise-level technical SEO tools for comprehensive analysis and monitoring.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-code-branch fa-3x text-primary mb-3"></i>
                    <h4>Developer-Level Expertise</h4>
                    <p>Our team includes SEO developers who understand both search algorithms and coding best practices.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                    <h4>Data-Driven Approach</h4>
                    <p>We prioritize technical issues based on impact analysis and performance data.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-sync-alt fa-3x text-primary mb-3"></i>
                    <h4>Continuous Monitoring</h4>
                    <p>We implement ongoing technical monitoring to catch issues before they impact rankings.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-browser fa-3x text-primary mb-3"></i>
                    <h4>Cross-Browser Testing</h4>
                    <p>We verify technical performance across multiple browsers, devices, and screen sizes.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-project-diagram fa-3x text-primary mb-3"></i>
                    <h4>Platform Specialization</h4>
                    <p>We offer specialized technical SEO solutions for WordPress, Shopify, Magento, and custom platforms.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Technical SEO Process</h2>
                <p class="lead">A systematic approach to improving your website's technical foundation</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>1</span>
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Technical Audit</h3>
                    <p>We conduct a comprehensive analysis of your website's technical health to identify issues and opportunities.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>2</span>
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Strategy Development</h3>
                    <p>We create a prioritized technical optimization plan based on impact, difficulty, and business goals.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>3</span>
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Implementation</h3>
                    <p>We execute technical optimizations across site structure, performance, mobile, and more.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>4</span>
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Monitoring & Refinement</h3>
                    <p>We track technical performance metrics and continuously refine our approach to maximize results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Benefits -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Technical SEO</h2>
                <p class="lead">How technical optimization impacts your business</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h3>Improved Search Visibility</h3>
                    <p>A technically sound website is more effectively crawled and indexed, leading to better visibility across more search queries.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bolt fa-2x text-primary"></i>
                    </div>
                    <h3>Faster Page Speed</h3>
                    <p>Optimized website performance leads to faster loading times, which improve both search rankings and user experience.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-mobile-alt fa-2x text-primary"></i>
                    </div>
                    <h3>Enhanced Mobile Experience</h3>
                    <p>Technical improvements ensure your site works flawlessly across all devices, capturing the growing mobile audience.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-percentage fa-2x text-primary"></i>
                    </div>
                    <h3>Higher Conversion Rates</h3>
                    <p>Faster, more reliable websites create better user experiences that convert more visitors into customers.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-pie fa-2x text-primary"></i>
                    </div>
                    <h3>Increased Crawl Efficiency</h3>
                    <p>Technical optimization helps search engines find and index more of your content with fewer resources.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-robot fa-2x text-primary"></i>
                    </div>
                    <h3>Better AI Understanding</h3>
                    <p>Structured data implementation helps AI-powered search understand your content's context and purpose.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="mb-3">Ready to Improve Your Website's Technical Performance?</h2>
                <p class="lead mb-0">
                    Get a free Technical SEO audit and discover opportunities to enhance your site's foundation.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Free Technical Audit</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <div class="faq-header">
                    <h2 class="faq-title">Frequently Asked Questions</h2>
                    <p class="faq-subtitle">Common questions about Technical SEO</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="faq-container">
                    <div class="faq-column">
                        <div class="faq-item active">
                            <div class="faq-question">
                                <h3>What are Core Web Vitals and why do they matter?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Core Web Vitals are specific metrics that Google uses to evaluate the user experience of a website. They include Largest Contentful Paint (LCP), which measures loading performance; First Input Delay (FID), which measures interactivity; and Cumulative Layout Shift (CLS), which measures visual stability. These metrics matter because they're official Google ranking factors—websites that meet the recommended thresholds can gain ranking advantages over competitors. More importantly, they directly correlate with user experience: sites with good Core Web Vitals scores typically have lower bounce rates, higher engagement, and better conversion rates because they provide a smooth, frustration-free experience for visitors.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How does page speed affect SEO and conversions?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Page speed impacts SEO and conversions in several critical ways. For SEO, speed is both a direct and indirect ranking factor. Google explicitly uses page speed metrics in its ranking algorithm, particularly through Core Web Vitals. Indirectly, faster pages lead to reduced bounce rates and increased engagement—signals that further improve rankings. For conversions, studies consistently show that even small delays significantly impact business metrics: a 1-second delay in page load time can decrease conversions by 7%; 53% of mobile users abandon sites that take longer than 3 seconds to load; and Amazon found that every 100ms of latency cost them 1% in sales. Our technical SEO service prioritizes speed optimizations that deliver measurable improvements in both rankings and conversion rates.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>What technical issues most commonly affect search rankings?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>The most impactful technical issues we typically encounter include: poor mobile usability, which affects indexing in Google's mobile-first environment; slow page speed and poor Core Web Vitals, which directly impact rankings; crawlability obstacles like improper robots.txt configuration or broken internal linking; indexation problems from duplicate content or canonical tag errors; security issues such as missing HTTPS; structured data implementation errors that prevent rich results; site architecture issues that bury important content too deep; and JavaScript rendering problems that prevent content from being properly indexed. Our technical SEO audit identifies which of these issues are affecting your specific site, and our implementation prioritizes fixes based on potential ranking impact.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How do you fix Core Web Vitals issues?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Our approach to fixing Core Web Vitals issues varies based on the specific metric and underlying causes: For Largest Contentful Paint (LCP), we implement solutions like image optimization, critical CSS extraction, server response time improvements, content delivery networks, and resource prioritization. For First Input Delay (FID), we focus on minimizing JavaScript execution time, breaking up long tasks, optimizing event handlers, and implementing browser caching. For Cumulative Layout Shift (CLS), we address issues by adding size attributes to images and embeds, reserving space for dynamic content, and ensuring proper loading of web fonts. The implementation typically involves a combination of server-side optimizations, front-end code improvements, and content delivery optimizations, all tailored to your specific website platform and technology stack.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-column">
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>What is schema markup and how does it help SEO?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Schema markup (structured data) is code added to your website to help search engines understand the content and context of your pages. It creates an enhanced description (rich snippet) that appears in search results. Schema markup helps SEO by: enabling rich results like star ratings, FAQs, how-tos, and event information that increase click-through rates; helping search engines understand your content's meaning beyond keywords, improving relevance matching; allowing your content to appear in specialized search features like knowledge panels, carousels, and voice search results; and establishing entity relationships that strengthen topical authority. Our structured data implementation focuses on the most relevant schema types for your business and ensures proper validation to maximize visibility in search results.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How long does it take to fix technical SEO issues?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>The timeline for fixing technical SEO issues depends on several factors, including the complexity of the issues, your website platform, and implementation resources. Simple fixes like redirects, robots.txt adjustments, or canonical tag corrections can typically be implemented within days. More complex issues like site speed optimization, mobile usability improvements, or site architecture changes may take 2-8 weeks for full implementation. The impact timeline also varies—crawl efficiency improvements might show results within days, while the full effect of Core Web Vitals optimization might take 1-3 months as Google recrawls and reevaluates your site. Our approach prioritizes quick wins first, followed by more comprehensive improvements, with clear timelines established during our strategy phase based on your specific technical situation.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Is technical SEO a one-time project or ongoing work?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>While some technical SEO improvements involve one-time fixes, maintaining optimal technical performance is an ongoing process. Websites are dynamic entities—new content is added, design elements change, plugins are updated, and Google's algorithms and standards continuously evolve. Our technical SEO service includes both initial optimization and ongoing maintenance. After the initial audit and implementation phase, we establish monitoring systems to track technical health metrics, conduct periodic follow-up audits (typically quarterly), address issues that arise from website changes or updates, and implement adjustments when search engines modify their technical requirements. This ongoing approach ensures your website maintains its technical foundation and adapts to changing standards, preventing the gradual technical debt that often accumulates on websites.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How do you measure the success of technical SEO improvements?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>We track multiple metrics to measure the impact of technical SEO improvements, focusing on both technical performance indicators and business outcomes. Key performance indicators include: Core Web Vitals metrics and overall page speed improvements, crawl stats from Google Search Console (pages crawled, crawl errors, crawl budget utilization), indexation levels (pages in index vs. submitted), organic traffic growth, rankings for target keywords, rich result appearances and click-through rates, mobile usability errors, security issues, conversion rates and user engagement metrics (bounce rate, time on site), and organic visibility trends compared to competitors. We provide comprehensive reports showing before-and-after comparisons for these metrics, helping you understand the tangible business impact of technical improvements, not just the technical changes themselves.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once '../../../../components/footer.php';
?> 