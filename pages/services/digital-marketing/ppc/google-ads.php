<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';
require_once '../../../../config/why-hire-us.php';

// Page specific content
$pageTitle = "Google Ads Management | Search & Display Advertising";
$pageDescription = "Drive targeted traffic and boost conversions with expertly managed Google Search and Display advertising campaigns tailored to your business goals";
$serviceName = "Google Ads Management";
$serviceSlug = "google-ads";

require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('ppc');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<div class="page-header bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1 class="fw-bold"><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <a href="#inquiry" class="btn btn-light rounded-pill px-4 py-2 mt-3">Request a Free Consultation</a>
            </div>
        </div>
    </div>
</div>

<!-- Service Overview -->
<section class="service-overview py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2>Elevate Your Online Visibility with Strategic Google Ads</h2>
                <p class="lead">Reach potential customers exactly when they're searching for your products or services.</p>
                <p>At StartupAI, we develop and manage high-performance Google Ads campaigns that connect your business with qualified prospects across Google's vast network. Our data-driven approach maximizes your advertising budget, ensuring optimal return on investment while consistently delivering measurable results for your business.</p>
                <p>We specialize in both Google Search and Display advertising, creating comprehensive campaigns that reach your audience at every stage of the customer journey — from initial awareness to final conversion.</p>
            </div>
            <div class="col-lg-6">
                <img src="/assets/images/services/google-ads-management.jpg" alt="Google Ads Management" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Services Offered -->
<section class="services-offered py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Our Google Ads Services</h2>
                <p class="section-subtitle">Comprehensive Google Advertising Solutions</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Google Search Advertising</h3>
                    <p>Connect with potential customers actively searching for your products or services with strategic text ads that appear at the top of Google search results.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Keyword research and competitive analysis</li>
                        <li><i class="fas fa-check text-primary"></i> Strategic ad copy that drives clicks and conversions</li>
                        <li><i class="fas fa-check text-primary"></i> Customized landing pages optimized for conversions</li>
                        <li><i class="fas fa-check text-primary"></i> Bid management and budget optimization</li>
                        <li><i class="fas fa-check text-primary"></i> Continuous performance monitoring and refinement</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Google Display Advertising</h3>
                    <p>Expand your reach with visually engaging ads that appear across Google's vast network of websites, reaching potential customers while they browse online.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Strategic audience targeting and segmentation</li>
                        <li><i class="fas fa-check text-primary"></i> Eye-catching banner design and creation</li>
                        <li><i class="fas fa-check text-primary"></i> Remarketing campaigns to re-engage visitors</li>
                        <li><i class="fas fa-check text-primary"></i> Contextual and interest-based targeting</li>
                        <li><i class="fas fa-check text-primary"></i> Performance tracking and optimization</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Shopping Campaigns</h3>
                    <p>Showcase your products directly in Google search results with product images, pricing, and business information to drive qualified traffic to your online store.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Product feed optimization and management</li>
                        <li><i class="fas fa-check text-primary"></i> Strategic bidding by product category and performance</li>
                        <li><i class="fas fa-check text-primary"></i> Promotion extensions and special offer setup</li>
                        <li><i class="fas fa-check text-primary"></i> Competitor analysis and market positioning</li>
                        <li><i class="fas fa-check text-primary"></i> Sales and revenue tracking</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Performance Analysis & Reporting</h3>
                    <p>Stay informed with comprehensive analytics and reporting that provides clear insights into campaign performance and ROI.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Custom dashboards with key performance metrics</li>
                        <li><i class="fas fa-check text-primary"></i> Regular performance reviews and strategy discussions</li>
                        <li><i class="fas fa-check text-primary"></i> Conversion tracking and attribution analysis</li>
                        <li><i class="fas fa-check text-primary"></i> Competitor benchmarking</li>
                        <li><i class="fas fa-check text-primary"></i> Strategic recommendations based on data insights</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Features -->
<section class="key-features py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Why Our Google Ads Approach Works</h2>
                <p class="section-subtitle">Data-Driven Strategies That Deliver Results</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Precision Targeting</h3>
                    <p>We reach your ideal customers through advanced audience targeting including demographics, interests, behavior, and search intent.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Continuous Optimization</h3>
                    <p>We monitor and refine your campaigns daily, making data-based adjustments to maximize performance and ROI.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Conversion-Focused Design</h3>
                    <p>We create landing pages and ad experiences specifically engineered to convert visitors into customers.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Budget Efficiency</h3>
                    <p>We maximize every dollar of your ad spend, focusing on the keywords and placements that deliver the best return.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Automation & AI</h3>
                    <p>We leverage Google's smart bidding and automation tools alongside our proprietary AI solutions to enhance campaign performance.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Agile Adaptation</h3>
                    <p>We quickly respond to market changes, competitor activities, and new opportunities to keep your campaigns ahead of the curve.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="implementation-process py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Our Google Ads Management Process</h2>
                <p class="section-subtitle">A Systematic Approach to PPC Success</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>1</span>
                    </div>
                    <h3>Discovery & Analysis</h3>
                    <p>We begin by understanding your business, goals, and target audience. We analyze your market, competitors, and past advertising performance to inform our strategy.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>2</span>
                    </div>
                    <h3>Strategy & Campaign Setup</h3>
                    <p>We develop a comprehensive campaign structure with targeted ad groups, keyword research, compelling ad copy, and strategic bidding plans.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>3</span>
                    </div>
                    <h3>Launch & Monitoring</h3>
                    <p>We deploy your campaigns and closely monitor initial performance, making rapid adjustments to optimize for early success indicators.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>4</span>
                    </div>
                    <h3>Optimization & Scaling</h3>
                    <p>Based on performance data, we continuously refine campaigns, scaling successful elements while improving or eliminating underperforming aspects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Benefits -->
<section class="business-benefits py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Benefits of Professional Google Ads Management</h2>
                <p class="section-subtitle">Tangible Results for Your Business</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-rocket text-primary mb-3"></i>
                    <h3>Instant Visibility</h3>
                    <p>Unlike organic methods that take months, Google Ads delivers immediate visibility at the top of search results for your target keywords.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-crosshairs text-primary mb-3"></i>
                    <h3>Hyper-Targeted Traffic</h3>
                    <p>Reach precisely the right audience based on search terms, location, device, time of day, and numerous other targeting parameters.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-chart-pie text-primary mb-3"></i>
                    <h3>Measurable ROI</h3>
                    <p>Track every aspect of campaign performance from clicks to conversions, with clear data on your return on ad spend.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-sliders-h text-primary mb-3"></i>
                    <h3>Complete Control</h3>
                    <p>Adjust budgets, targeting, and messaging on the fly, allowing for maximum flexibility and responsiveness to market conditions.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-expand-arrows-alt text-primary mb-3"></i>
                    <h3>Scalable Results</h3>
                    <p>Easily scale successful campaigns to expand reach and capture more market share as your business grows.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-lightbulb text-primary mb-3"></i>
                    <h3>Market Insights</h3>
                    <p>Gain valuable data about your customers, including which messages resonate and which products or services are most in demand.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2>Ready to Boost Your Business with Google Ads?</h2>
                <p class="lead mb-4">Get a free account audit and campaign proposal tailored to your business goals.</p>
                <a href="#inquiry" class="btn btn-light btn-lg rounded-pill px-5">Request Your Free Consultation</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="faq-title">Frequently Asked Questions</h2>
                <p class="faq-subtitle">Everything you need to know about our Google Ads services</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much should I budget for Google Ads?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Google Ads budgets vary based on industry, competition, and goals. We recommend starting with a minimum of $1,000/month for most businesses to generate meaningful data and results. We'll help you determine the optimal budget based on your specific goals, industry benchmarks, and competitive landscape. Our approach focuses on maximizing return on ad spend rather than just spending a fixed budget.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does it take to see results from Google Ads?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Google Ads can generate traffic immediately after launch, with initial performance data available within the first few days. However, campaign optimization typically takes 2-4 weeks as we gather sufficient data to make informed adjustments. Meaningful business results usually develop within 1-3 months as we refine targeting, messaging, and landing pages based on performance data. Throughout this process, we provide regular updates and transparent reporting on campaign progress.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What's the difference between Search and Display ads?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Search ads appear when someone actively searches for keywords related to your business on Google. They're text-based and target users with high purchase intent who are specifically looking for your products or services. Display ads are visual banners that appear on websites within Google's Display Network. They're ideal for building brand awareness, remarketing to previous visitors, and reaching potential customers earlier in their buying journey. Most comprehensive Google Ads strategies incorporate both formats for maximum effectiveness.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you require long-term contracts?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>We typically recommend a minimum 3-month commitment to allow sufficient time for campaign optimization and to generate meaningful results. However, we don't lock clients into long-term contracts. After the initial period, we operate on a month-to-month basis where our continued partnership is based on the value and results we deliver. We're confident in our ability to demonstrate clear ROI, which is why we don't rely on contracts to retain clients.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What makes your Google Ads management different?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Our approach combines human expertise with advanced AI-powered tools to deliver superior results. We don't just set up campaigns and let them run—we provide active, hands-on management with continuous optimization. Our team includes Google Ads certified experts with years of experience across diverse industries. Additionally, we focus on conversion optimization beyond just clicks, ensuring your ad spend translates to actual business results. Finally, we pride ourselves on transparent reporting and communication, so you always understand exactly how your campaigns are performing.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you report on campaign performance?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>We provide comprehensive monthly reports detailing key performance metrics such as impressions, clicks, conversions, cost-per-click, cost-per-acquisition, and return on ad spend. These reports include trend analysis, competitive benchmarking, and strategic recommendations. We also offer access to a live dashboard for real-time performance monitoring. Additionally, we schedule regular review calls to discuss results, answer questions, and align on strategy adjustments. Our goal is to make performance data accessible and actionable for your business.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Will Google Ads work for my specific industry?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Google Ads can be effective for virtually any industry when properly implemented. We have experience managing successful campaigns across diverse sectors including e-commerce, professional services, healthcare, real estate, education, technology, and local businesses. The key is developing a customized strategy that aligns with your specific industry dynamics, target audience, and business objectives. During our initial consultation, we'll evaluate your unique situation and provide honest feedback about the potential effectiveness of Google Ads for your specific business.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you handle landing page creation?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer landing page design and development services specifically optimized for PPC campaigns. Effective landing pages are crucial for converting ad clicks into meaningful actions. Our landing pages are designed based on conversion best practices and include compelling headlines, clear value propositions, trust indicators, and strong calls-to-action. We also implement A/B testing to continuously improve conversion rates. If you already have landing pages, we can audit and provide recommendations for optimization rather than creating new ones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Display Why Hire Us section if content is available
if (!empty($why_hire_us)) {
    renderWhyHireUs($serviceName, $why_hire_us);
}
?>

<!-- Include footer -->
<?php require_once '../../../../components/footer.php'; ?> 