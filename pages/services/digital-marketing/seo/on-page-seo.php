<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';
require_once '../../../../config/why-hire-us.php';

// Page specific content
$pageTitle = "On-Page SEO";
$pageDescription = "Optimize your website's content, structure, and code for search engines with our comprehensive On-Page SEO services";
$serviceName = "On-Page SEO";
$serviceSlug = "on-page-seo";

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
                <a href="/contact" class="btn btn-primary btn-lg mt-3">Get a Free SEO Audit</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/assets/images/services/on-page-seo.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4" data-aos="fade-up">
                <h2 class="section-title">Maximize Your Website's Search Potential</h2>
                <p>On-Page SEO is the foundation of any successful SEO strategy. It focuses on optimizing elements within your website to improve search engine rankings and drive relevant traffic. Unlike off-page factors, on-page elements are entirely within your control, making them critical components for establishing search relevance and authority.</p>
                <p>Our comprehensive On-Page SEO services tackle every aspect of your website's content, structure, and HTML source code to align with search engine best practices. From keyword optimization and meta tags to content quality and user experience, we implement proven techniques that help search engines better understand and rank your content for relevant searches.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Offered -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our On-Page SEO Services</h2>
                <p class="lead">Comprehensive optimization to improve rankings and user experience</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-file-alt fa-3x text-primary"></i>
                    </div>
                    <h3>Content Optimization</h3>
                    <p>Strategic keyword integration and content improvements that satisfy both search engines and users.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> Keyword research and mapping</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Content gap analysis</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Semantic keyword enhancement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Readability improvements</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h3>Technical On-Page Elements</h3>
                    <p>Optimization of HTML elements that influence search rankings and click-through rates.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> Title tag optimization</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Meta description enhancement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Header tag (H1-H6) structure</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Schema markup implementation</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-sitemap fa-3x text-primary"></i>
                    </div>
                    <h3>Site Structure Optimization</h3>
                    <p>Improving your website's architecture to enhance crawlability and user navigation.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> URL structure optimization</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Internal linking strategy</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Content silo development</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Category and tag organization</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                    </div>
                    <h3>User Experience Optimization</h3>
                    <p>Enhancing user engagement signals that influence search rankings and conversions.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> Mobile optimization</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Page speed improvements</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Content formatting for readability</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Multimedia integration</li>
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
                <h2 class="section-title">Our On-Page SEO Advantage</h2>
                <p class="lead">Why our on-page optimization approach delivers results</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                    <h4>Data-Driven Strategy</h4>
                    <p>We base all optimizations on thorough keyword research, competitor analysis, and performance data.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-brain fa-3x text-primary mb-3"></i>
                    <h4>Search Intent Focus</h4>
                    <p>We optimize for user intent, not just keywords, ensuring content matches what searchers really want.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-code-branch fa-3x text-primary mb-3"></i>
                    <h4>Algorithm Awareness</h4>
                    <p>We stay current with search algorithm changes and adapt strategies to maintain and improve rankings.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-balance-scale fa-3x text-primary mb-3"></i>
                    <h4>User-Search Balance</h4>
                    <p>We find the perfect balance between optimizing for search engines and providing an excellent user experience.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-sync-alt fa-3x text-primary mb-3"></i>
                    <h4>Continuous Optimization</h4>
                    <p>We treat SEO as an ongoing process, constantly refining and improving based on performance data.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-bullseye fa-3x text-primary mb-3"></i>
                    <h4>Conversion-Focused</h4>
                    <p>Beyond rankings, we optimize for conversions to ensure SEO delivers real business results.</p>
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
                <h2 class="section-title">Our On-Page SEO Process</h2>
                <p class="lead">A systematic approach to improving your search visibility</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>1</span>
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Audit & Analysis</h3>
                    <p>We conduct a comprehensive analysis of your current on-page SEO performance and identify opportunities.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>2</span>
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Strategy Development</h3>
                    <p>We create a tailored on-page optimization plan based on keyword research and competitor analysis.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>3</span>
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Implementation</h3>
                    <p>We execute optimizations across all page elements, from meta tags to content structure.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>4</span>
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Monitoring & Refinement</h3>
                    <p>We track performance metrics and continuously refine our approach to maximize results.</p>
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
                <h2 class="section-title">Benefits of On-Page SEO</h2>
                <p class="lead">How on-page optimization impacts your business</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h3>Improved Search Rankings</h3>
                    <p>Properly optimized pages rank higher in search results for relevant keywords, increasing your visibility to potential customers.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h3>Targeted Traffic Growth</h3>
                    <p>Attract more qualified visitors who are actively searching for your products, services, or information.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-percentage fa-2x text-primary"></i>
                    </div>
                    <h3>Higher Conversion Rates</h3>
                    <p>Content optimized for both search engines and users naturally guides visitors toward conversion actions.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h3>Lower Acquisition Costs</h3>
                    <p>Organic traffic from SEO has a lower cost per acquisition compared to paid advertising channels.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-trophy fa-2x text-primary"></i>
                    </div>
                    <h3>Competitive Advantage</h3>
                    <p>Stand out from competitors with well-optimized pages that rank higher and provide better user experiences.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-pie fa-2x text-primary"></i>
                    </div>
                    <h3>Measurable Results</h3>
                    <p>Track improvements with concrete metrics like rankings, traffic, dwell time, and conversion rates.</p>
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
                <h2 class="mb-3">Ready to Improve Your Search Rankings?</h2>
                <p class="lead mb-0">
                    Get a free On-Page SEO audit and discover opportunities to improve your website's performance.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Free SEO Audit</a>
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
                    <p class="faq-subtitle">Common questions about On-Page SEO</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="faq-container">
                    <div class="faq-column">
                        <div class="faq-item active">
                            <div class="faq-question">
                                <h3>How long does it take to see results from On-Page SEO?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>On-Page SEO improvements can begin to show results within a few weeks, though significant ranking changes typically take 2-3 months. Initial improvements often include better crawling and indexing, while ranking improvements for competitive keywords may take longer. The timeline depends on your website's authority, competition level, and the extent of the optimizations needed. We provide regular reports showing progress metrics like indexation rates, ranking improvements, and traffic growth.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How is On-Page SEO different from Off-Page SEO?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>On-Page SEO focuses on optimizing elements within your website that you control directly, including content, HTML source code, and site structure. Off-Page SEO involves external factors that influence your rankings, primarily backlinks from other websites. Both are crucial parts of a comprehensive SEO strategy: On-Page SEO establishes relevance by showing search engines what your content is about, while Off-Page SEO builds authority and trustworthiness through external validation.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Will On-Page SEO help if my website is brand new?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Absolutely. On-Page SEO is especially important for new websites as it helps establish a strong foundation for search visibility. By optimizing your site structure, content, and technical elements from the beginning, you can ensure proper indexing and give your new site the best chance to rank. For new websites, we often focus on long-tail keywords with less competition first, then gradually target more competitive terms as your site builds authority.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How often should On-Page SEO be updated?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>On-Page SEO isn't a one-time effort but an ongoing process. We recommend auditing and refreshing on-page elements at least quarterly. However, certain activities should happen more frequently: content should be updated regularly to maintain freshness signals, performance metrics should be monitored monthly, and technical issues should be addressed as they arise. Additionally, when search engines release algorithm updates or when your business focus changes, your on-page strategy should be reviewed and adjusted accordingly.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-column">
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Will you need to rewrite all my website content?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Not necessarily. Our approach is to first audit your existing content and identify specific opportunities for improvement. In many cases, strategic enhancements to existing content—such as optimizing headers, improving keyword usage, enhancing readability, or adding complementary sections—can yield significant results without complete rewrites. However, some pages may benefit from more substantial updates, especially if they target highly competitive keywords or if the content is outdated or thin. We provide specific recommendations based on each page's current performance and potential.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Do I need technical skills to implement On-Page SEO?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>While some aspects of On-Page SEO require technical knowledge, many elements can be implemented with basic content management system skills. Our service includes both recommendations and implementation support. For technically complex changes, we provide detailed instructions for your web developer or can implement the changes ourselves. For content-focused optimizations, we offer guidance that non-technical team members can follow. Our goal is to make the process as smooth as possible regardless of your technical expertise level.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Can On-Page SEO help with local business visibility?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Definitely. On-Page SEO plays a crucial role in local search visibility. We optimize location-specific elements such as local keywords in titles, headers, and content; location schema markup; city/region-specific landing pages; and local business structured data. These on-page factors help search engines understand your business's geographical relevance and improve your visibility in local search results, including Google Maps and the local pack. When combined with our local off-page strategies, on-page local optimization can significantly boost your visibility to nearby customers.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How do you measure On-Page SEO success?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>We track multiple metrics to measure on-page SEO performance. Key indicators include: keyword rankings for target terms, organic traffic growth to optimized pages, click-through rates from search results, page engagement metrics (time on page, bounce rate), crawling and indexing improvements, page load speed enhancements, and most importantly, conversion rates from organic visitors. We provide regular reports with these metrics, comparing performance before and after optimizations to clearly demonstrate ROI and identify areas for further improvement.</p>
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