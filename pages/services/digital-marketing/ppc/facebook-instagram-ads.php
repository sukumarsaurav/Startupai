<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';
require_once '../../../../config/why-hire-us.php';

// Page specific content
$pageTitle = "Facebook & Instagram Ads Management";
$pageDescription = "Drive engagement, increase brand awareness, and generate leads with targeted Facebook and Instagram advertising campaigns";
$serviceName = "Facebook & Instagram Ads";
$serviceSlug = "facebook-instagram-ads";

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
                <h2>Harness the Power of Social Media Advertising</h2>
                <p class="lead">Reach over 3.5 billion potential customers with targeted Facebook and Instagram ad campaigns.</p>
                <p>With 2.9 billion monthly active Facebook users and over 1 billion Instagram users, these platforms represent an unparalleled opportunity to reach your target audience with precision. Our expert team develops strategic, data-driven campaigns that leverage Facebook and Instagram's powerful targeting capabilities to deliver your message to the right people at the right time.</p>
                <p>We create compelling, platform-optimized content that captures attention in crowded feeds, driving engagement, leads, and sales while maximizing your advertising budget.</p>
            </div>
            <div class="col-lg-6">
                <img src="/assets/images/services/facebook-instagram-ads.jpg" alt="Facebook & Instagram Advertising" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Services Offered -->
<section class="services-offered py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Our Facebook & Instagram Ad Services</h2>
                <p class="section-subtitle">Comprehensive Social Media Advertising Solutions</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Campaign Strategy & Setup</h3>
                    <p>Develop comprehensive advertising strategies aligned with your business objectives and target audience behavior.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Custom audience development and segmentation</li>
                        <li><i class="fas fa-check text-primary"></i> Campaign structure optimization</li>
                        <li><i class="fas fa-check text-primary"></i> Platform selection (Facebook, Instagram, Messenger)</li>
                        <li><i class="fas fa-check text-primary"></i> Ad placement optimization</li>
                        <li><i class="fas fa-check text-primary"></i> Budget allocation and bidding strategies</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Creative Development</h3>
                    <p>Create scroll-stopping ad content tailored for optimal performance on Facebook and Instagram platforms.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Compelling ad copy and headlines</li>
                        <li><i class="fas fa-check text-primary"></i> Eye-catching image creation and selection</li>
                        <li><i class="fas fa-check text-primary"></i> Engaging video ad production</li>
                        <li><i class="fas fa-check text-primary"></i> Instagram Story and Reel creation</li>
                        <li><i class="fas fa-check text-primary"></i> Carousel and collection ad design</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Advanced Targeting</h3>
                    <p>Leverage Facebook's powerful targeting capabilities to reach the most relevant audience for your business.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Custom and lookalike audience creation</li>
                        <li><i class="fas fa-check text-primary"></i> Demographic and interest-based targeting</li>
                        <li><i class="fas fa-check text-primary"></i> Behavioral targeting optimization</li>
                        <li><i class="fas fa-check text-primary"></i> Retargeting campaign setup</li>
                        <li><i class="fas fa-check text-primary"></i> Exclusion audience development</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Analytics & Optimization</h3>
                    <p>Continuously monitor, analyze, and optimize your campaigns for maximum performance and ROI.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Performance tracking across key metrics</li>
                        <li><i class="fas fa-check text-primary"></i> A/B testing of ad creative and audience segments</li>
                        <li><i class="fas fa-check text-primary"></i> Budget adjustment based on performance</li>
                        <li><i class="fas fa-check text-primary"></i> Regular reporting and insights</li>
                        <li><i class="fas fa-check text-primary"></i> Campaign refinement and scaling</li>
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
                <h2 class="section-title">Why Our Facebook & Instagram Ads Approach Works</h2>
                <p class="section-subtitle">Strategic Methodology for Social Media Advertising Success</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Audience-First Approach</h3>
                    <p>We prioritize deeply understanding your ideal customer's demographics, interests, and online behaviors before developing campaigns.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Creative Excellence</h3>
                    <p>Our designers and copywriters create platform-optimized content that captures attention and drives engagement in crowded feeds.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Data-Driven Decisions</h3>
                    <p>We base every strategic decision on comprehensive data analysis, ensuring campaigns continually improve over time.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-funnel-dollar"></i>
                    </div>
                    <h3>Full-Funnel Strategy</h3>
                    <p>We develop campaigns that address every stage of the customer journey, from awareness to consideration to conversion.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Systematic Testing</h3>
                    <p>Our structured approach to A/B testing continuously refines and improves campaign performance across all variables.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Transparent Partnership</h3>
                    <p>We provide clear, consistent communication and comprehensive reporting so you always understand your campaign performance.</p>
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
                <h2 class="section-title">Our Facebook & Instagram Advertising Process</h2>
                <p class="section-subtitle">A Proven Methodology for Social Advertising Success</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>1</span>
                    </div>
                    <h3>Discovery & Research</h3>
                    <p>We analyze your business goals, target audience, and competitors to create a strategic foundation for your campaigns.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>2</span>
                    </div>
                    <h3>Strategy & Creative</h3>
                    <p>We develop a comprehensive campaign strategy and create compelling, platform-optimized ad content.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>3</span>
                    </div>
                    <h3>Campaign Launch</h3>
                    <p>We set up your campaign structure, implement tracking, and launch your campaigns with careful monitoring.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>4</span>
                    </div>
                    <h3>Optimization & Scaling</h3>
                    <p>We continuously analyze performance data, refine campaigns, and scale successful strategies for maximum ROI.</p>
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
                <h2 class="section-title">Benefits of Professional Facebook & Instagram Advertising</h2>
                <p class="section-subtitle">How Social Media Ads Drive Business Growth</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-bullseye text-primary mb-3"></i>
                    <h3>Precise Audience Targeting</h3>
                    <p>Reach exactly the right people based on demographics, interests, behaviors, and connections with unparalleled precision.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-eye text-primary mb-3"></i>
                    <h3>Increased Brand Awareness</h3>
                    <p>Expand your reach and build recognition among potential customers at scale through Facebook and Instagram's vast user base.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-chart-line text-primary mb-3"></i>
                    <h3>Lead Generation</h3>
                    <p>Capture qualified leads directly on the platforms with lead generation ads and forms designed for conversion.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-sync-alt text-primary mb-3"></i>
                    <h3>Retargeting Capabilities</h3>
                    <p>Re-engage website visitors, email subscribers, and past customers with highly relevant messaging to drive conversions.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-dollar-sign text-primary mb-3"></i>
                    <h3>Cost-Effective Advertising</h3>
                    <p>Achieve lower cost-per-click and cost-per-acquisition compared to many other digital advertising platforms.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-tachometer-alt text-primary mb-3"></i>
                    <h3>Rapid Testing & Optimization</h3>
                    <p>Quickly test different creative approaches and audience segments to identify and scale what works best.</p>
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
                <h2>Ready to Transform Your Social Media Advertising?</h2>
                <p class="lead mb-4">Get a complimentary social media advertising audit and personalized strategy recommendation.</p>
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
                <p class="faq-subtitle">Common questions about Facebook & Instagram advertising</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How much should I budget for Facebook and Instagram ads?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Effective Facebook and Instagram ad budgets depend on your industry, goals, and audience. We typically recommend starting with a minimum of $1,500/month for businesses to generate meaningful data and results. This allows for proper testing of different audiences, creative approaches, and placements. As we identify winning combinations, we can scale budgets to capitalize on successful strategies. We work with you to establish a budget that aligns with your business objectives and expected ROI.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does it take to see results from social media advertising?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Initial results like impressions, clicks, and engagement are visible almost immediately. However, the Facebook and Instagram algorithms require a "learning phase" of about 3-7 days to optimize delivery. Meaningful business results typically develop within 2-4 weeks as we gather sufficient data to refine targeting and creative elements. For e-commerce, results often come faster, while B2B and higher-consideration purchases may take longer. We set clear expectations and KPIs based on your specific business model and goals.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What's better for my business: Facebook or Instagram ads?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>In most cases, a combined approach works best as Facebook Ads Manager allows you to run campaigns across both platforms. The ideal mix depends on your specific business, target audience, and objectives. Facebook typically offers broader reach and demographic diversity, while Instagram excels with younger audiences and visually-driven products. We recommend starting with both platforms, then allocating more budget to whichever performs better based on data. Our strategic approach tests multiple placements across both networks to determine the optimal mix for your business.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you measure the success of social media advertising campaigns?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>We measure success against the specific KPIs established in your strategy, which vary based on campaign objectives. For awareness campaigns, we track metrics like reach, frequency, and brand lift. For engagement, we monitor likes, comments, shares, and click-through rates. For conversion-focused campaigns, we measure leads generated, sales, return on ad spend (ROAS), and cost per acquisition (CPA). We use the Facebook Pixel and conversion API for accurate attribution and implement additional tracking as needed. All metrics are provided in comprehensive reports that demonstrate clear ROI.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How are you addressing iOS privacy changes and tracking limitations?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>We've adapted our approach to account for Apple's iOS privacy changes by implementing multiple tracking solutions. This includes setting up the Facebook Conversion API alongside the traditional pixel, utilizing UTM parameters for better attribution in Google Analytics, and incorporating server-side tracking where possible. We also put more emphasis on creative testing and audience expansion to compensate for reduced targeting precision. Finally, we employ alternative measurement methods like incrementality testing and lift studies to accurately assess campaign performance in this new privacy-focused landscape.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you create the ad creative or should I provide it?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>We offer complete creative services including copywriting, graphic design, and video production specifically optimized for Facebook and Instagram ads. Our team creates multiple ad variations for testing and continual performance improvement. While you're welcome to provide existing assets, our experience shows that platform-specific creative developed by our specialists typically outperforms repurposed content. We can also optimize your existing materials if you prefer. The creative development process involves collaborative feedback to ensure alignment with your brand guidelines and marketing objectives.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How often do you update or refresh ad creative?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>We typically refresh ad creative every 4-6 weeks, though the exact timeline depends on performance data and audience fatigue indicators. Social media audiences tend to experience "ad fatigue" when seeing the same creative repeatedly, resulting in declining performance. We monitor metrics like frequency, click-through rate, and conversion rate to identify when new creative is needed. Our process involves continuously testing new variations alongside proven performers, gradually replacing underperforming ads while scaling successful ones. This approach ensures your campaigns remain fresh and effective.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Can you target my competitors' customers?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>While Facebook doesn't allow direct targeting of specific competitors' customers, we can create strategic audience segments likely to include your competitors' audience. We do this through interest-based targeting that includes your competitors' brands, lookalike audiences based on your current customers, and targeting users with interests in multiple related products/services. We can also implement competitive conquest campaigns with messaging specifically designed to attract customers considering or using competitor products. Our comprehensive competitor analysis informs these strategies to effectively reach your competitors' audience segments.</p>
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