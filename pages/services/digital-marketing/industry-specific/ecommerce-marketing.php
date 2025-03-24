<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';
require_once '../../../../config/why-hire-us.php';

// Page specific content
$pageTitle = "E-commerce Marketing";
$pageDescription = "Maximize online store visibility, conversions, and revenue with specialized marketing strategies for Amazon, Shopify, WooCommerce, and other e-commerce platforms";
$serviceName = "E-commerce Marketing";
$serviceSlug = "ecommerce-marketing";

require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('industry-specific');

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
                <h2>Specialized Marketing for Online Stores</h2>
                <p class="lead">Drive sustainable growth with data-driven marketing strategies customized for your specific e-commerce platform and business model.</p>
                <p>In today's competitive e-commerce landscape, simply having an online store isn't enough. Success requires a strategic marketing approach tailored to your specific platform, product niche, and customer journey. Whether you're selling on Amazon, running a Shopify store, managing a WooCommerce site, or operating across multiple platforms, each environment requires specialized tactics to maximize visibility, conversions, and customer loyalty.</p>
                <p>Our e-commerce marketing services combine platform expertise, customer behavior analysis, and conversion optimization to create comprehensive strategies that drive traffic, increase average order values, and generate repeat business. We understand the unique challenges and opportunities presented by different e-commerce ecosystems and leverage this knowledge to create sustainable competitive advantages for your brand.</p>
                <p>From optimizing your product listings for search to creating targeted advertising campaigns, implementing loyalty programs, and refining the customer experience at every touchpoint, our holistic approach ensures your e-commerce business capitalizes on every opportunity for growth.</p>
            </div>
            <div class="col-lg-6">
                <img src="/assets/images/services/ecommerce-marketing.jpg" alt="E-commerce Marketing" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Services Offered -->
<section class="services-offered py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title">Our E-commerce Marketing Services</h2>
                <p class="section-subtitle">Specialized Solutions for Online Retail Success</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Amazon Marketing & Optimization</h3>
                    <p>Maximize your visibility and sales on the world's largest online marketplace with strategies tailored to Amazon's unique ecosystem.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Product listing optimization</li>
                        <li><i class="fas fa-check text-primary"></i> Amazon SEO & keyword strategy</li>
                        <li><i class="fas fa-check text-primary"></i> Amazon PPC campaign management</li>
                        <li><i class="fas fa-check text-primary"></i> A+ Content creation</li>
                        <li><i class="fas fa-check text-primary"></i> Brand Store development</li>
                        <li><i class="fas fa-check text-primary"></i> Review generation & management</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Shopify Store Marketing</h3>
                    <p>Build a high-converting Shopify store with integrated marketing solutions that attract qualified traffic and optimize the entire customer journey.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Shopify SEO & content strategy</li>
                        <li><i class="fas fa-check text-primary"></i> Conversion rate optimization</li>
                        <li><i class="fas fa-check text-primary"></i> Paid traffic campaign management</li>
                        <li><i class="fas fa-check text-primary"></i> Email & SMS marketing automation</li>
                        <li><i class="fas fa-check text-primary"></i> Retention & loyalty programs</li>
                        <li><i class="fas fa-check text-primary"></i> App integration & optimization</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>WooCommerce & WordPress Optimization</h3>
                    <p>Leverage the flexibility of WooCommerce to create customized marketing funnels and shopping experiences that convert browsers into buyers.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Technical SEO for WooCommerce</li>
                        <li><i class="fas fa-check text-primary"></i> Product page optimization</li>
                        <li><i class="fas fa-check text-primary"></i> Custom landing page development</li>
                        <li><i class="fas fa-check text-primary"></i> Plugin selection & configuration</li>
                        <li><i class="fas fa-check text-primary"></i> UX/UI enhancement</li>
                        <li><i class="fas fa-check text-primary"></i> Performance optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <h3>Multi-Channel E-commerce Strategy</h3>
                    <p>Create a cohesive, integrated approach across all your selling channels to maximize reach, efficiency, and customer satisfaction.</p>
                    <ul class="service-highlights">
                        <li><i class="fas fa-check text-primary"></i> Marketplace expansion strategy</li>
                        <li><i class="fas fa-check text-primary"></i> Omnichannel inventory management</li>
                        <li><i class="fas fa-check text-primary"></i> Cross-platform brand consistency</li>
                        <li><i class="fas fa-check text-primary"></i> Unified customer data approach</li>
                        <li><i class="fas fa-check text-primary"></i> Comparative performance analysis</li>
                        <li><i class="fas fa-check text-primary"></i> Channel-specific optimization</li>
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
                <h2 class="section-title">Why Our E-commerce Marketing Works</h2>
                <p class="section-subtitle">Strategic Methodology for Online Retail Success</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>Platform-Specific Expertise</h3>
                    <p>We understand the unique algorithms, requirements, and best practices of each e-commerce platform, allowing us to optimize your presence according to each environment's specific rules and opportunities.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-funnel-dollar"></i>
                    </div>
                    <h3>Full-Funnel Optimization</h3>
                    <p>Our approach addresses every stage of the customer journey from discovery to post-purchase, ensuring seamless progression through your sales funnel and maximizing lifetime customer value.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Data-Driven Decision Making</h3>
                    <p>We base our strategies on comprehensive analytics, consumer behavior patterns, and competitive analysis to ensure every marketing dollar is invested where it will generate the highest return.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-compress-arrows-alt"></i>
                    </div>
                    <h3>Conversion-Centered Design</h3>
                    <p>We prioritize designs and user experiences that focus on conversions while maintaining brand integrity, ensuring your store not only attracts visitors but effectively turns them into customers.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-sync"></i>
                    </div>
                    <h3>Continuous Optimization</h3>
                    <p>E-commerce marketing is never "set and forget." We implement ongoing testing, analysis, and refinement processes to continuously improve results and adapt to market changes.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="feature-card text-center h-100 p-4 rounded shadow-sm">
                    <div class="icon-circle mb-4 mx-auto">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Technical Integration Expertise</h3>
                    <p>Our team understands how to properly implement tracking, analytics, and marketing automation tools to create seamless technical ecosystems that support your marketing objectives.</p>
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
                <h2 class="section-title">Our E-commerce Marketing Process</h2>
                <p class="section-subtitle">A Systematic Approach to Online Retail Success</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>1</span>
                    </div>
                    <h3>Store Analysis & Strategy</h3>
                    <p>We audit your current store performance, analyze competitors, identify opportunities, and develop a comprehensive strategy tailored to your specific e-commerce platform and business goals.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>2</span>
                    </div>
                    <h3>Optimization & Setup</h3>
                    <p>We optimize all critical store elements including product listings, categories, search functionality, and checkout process, while implementing proper tracking and marketing tools.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>3</span>
                    </div>
                    <h3>Traffic Generation</h3>
                    <p>We implement targeted traffic strategies across appropriate channels including SEO, paid advertising, content marketing, and social media to drive qualified potential customers to your store.</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="process-card h-100 p-4 bg-white rounded shadow-sm text-center">
                    <div class="process-icon mb-3">
                        <span>4</span>
                    </div>
                    <h3>Measurement & Refinement</h3>
                    <p>We continuously monitor performance metrics, customer feedback, and market trends to identify optimization opportunities and refine our approach for sustainable long-term growth.</p>
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
                <h2 class="section-title">Benefits of Professional E-commerce Marketing</h2>
                <p class="section-subtitle">How Strategic Marketing Transforms Your Online Store</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-search text-primary mb-3"></i>
                    <h3>Increased Visibility</h3>
                    <p>Gain prominent placement in search results, marketplace listings, and relevant advertising platforms, expanding your reach to potential customers actively looking for your products.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-chart-bar text-primary mb-3"></i>
                    <h3>Higher Conversion Rates</h3>
                    <p>Convert more browsers into buyers with optimized product listings, streamlined checkout processes, strategic upsells, and persuasive content that addresses customer pain points.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-shopping-cart text-primary mb-3"></i>
                    <h3>Increased Average Order Value</h3>
                    <p>Implement effective cross-selling, bundling, and tiered pricing strategies that encourage customers to spend more per transaction while receiving greater value.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-heart text-primary mb-3"></i>
                    <h3>Improved Customer Loyalty</h3>
                    <p>Build lasting relationships through post-purchase nurturing, loyalty programs, and exceptional customer experiences that transform one-time buyers into repeat customers.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-star text-primary mb-3"></i>
                    <h3>Enhanced Brand Reputation</h3>
                    <p>Establish credibility and trust through consistent brand messaging, quality content, responsive customer service, and strategic review management.</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <i class="fas fa-expand-alt text-primary mb-3"></i>
                    <h3>Scalable Growth</h3>
                    <p>Create sustainable systems and processes that allow for efficient scaling across products, categories, and marketplaces without proportional increases in marketing costs.</p>
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
                <h2>Ready to Grow Your E-commerce Business?</h2>
                <p class="lead mb-4">Get a free store evaluation and marketing plan tailored to your specific platform and business goals.</p>
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
                <p class="faq-subtitle">Common questions about e-commerce marketing</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What e-commerce platforms do you work with?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>We specialize in the major e-commerce platforms including Amazon, Shopify, WooCommerce, BigCommerce, Magento, and Etsy. Each platform has unique characteristics, algorithms, and best practices that require specialized knowledge. Our team includes certified experts in each of these environments who understand the nuances of optimizing listings, improving visibility, and maximizing conversions within each specific ecosystem. We also work with custom-built e-commerce solutions and can adapt our strategies to virtually any online selling platform. If you're using multiple platforms, we can create integrated strategies that maintain consistent branding while leveraging the unique advantages of each channel. For businesses considering platform migration or expansion to new channels, we provide comparative analysis and implementation support to ensure a smooth transition.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long until I see results from e-commerce marketing?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>The timeline for seeing results varies based on several factors including your current store performance, competition level, platform, and specific marketing strategies implemented. Typically, our clients see initial improvements in key metrics within 30-90 days. Paid advertising campaigns can generate immediate traffic increases, with conversion optimization often showing results within the first month. SEO and content marketing strategies typically begin showing meaningful results in 3-6 months, with continued improvement over time. Marketplace optimization strategies like Amazon SEO can show faster results than traditional web SEO, often within 30-60 days. For established stores, our conversion rate optimization work often yields noticeable improvements within the first testing cycle (typically 2-4 weeks). We establish clear KPIs and reporting schedules at the outset of our engagement, providing transparent visibility into progress and ensuring you can track improvements across all relevant metrics throughout our partnership.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What marketing channels work best for e-commerce?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>The most effective marketing channels for your e-commerce business depend on factors including your product type, price point, target audience, and business model. That said, successful e-commerce businesses typically leverage multiple channels in an integrated strategy. For direct customer acquisition, the highest-performing channels often include Google Shopping ads, Meta (Facebook/Instagram) ads with product catalogs, marketplace optimization (Amazon, Etsy, etc.), and SEO. For remarketing and retention, email marketing, SMS, and retargeting ads typically provide the strongest ROI. Content marketing through blogs, video, and social media helps build brand awareness and trust, while influencer partnerships can be particularly effective for lifestyle products. We recommend a data-driven approach that starts with the channels most likely to yield quick returns for your specific business model, then expanding to additional channels as we establish and optimize core performance. Our strategies always include cross-channel attribution analysis to understand how different marketing touchpoints work together in the customer journey.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What metrics should I track for my e-commerce store?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Effective e-commerce performance tracking requires monitoring metrics across multiple categories. Revenue metrics include overall sales, average order value (AOV), revenue per visitor (RPV), and customer lifetime value (CLV). Traffic metrics include sessions, session duration, pages per session, and traffic sources. Conversion metrics to watch include conversion rate, cart abandonment rate, checkout abandonment rate, and add-to-cart rate. Product performance metrics include best and worst selling products, product page conversion rates, and product return rates. Marketing effectiveness metrics include customer acquisition cost (CAC), return on ad spend (ROAS), email open and click rates, and social engagement metrics. Platform-specific metrics are also important - for example, Amazon sellers should track Buy Box percentage, organic rank for key terms, and sponsored product ACOS (Advertising Cost of Sale). We help implement proper tracking systems and create customized dashboards that focus on the metrics most important to your specific business goals, providing both high-level KPIs for executive oversight and detailed metrics for operational optimization.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you improve e-commerce conversion rates?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Our approach to improving e-commerce conversion rates is comprehensive and data-driven, addressing the entire customer journey. We start with detailed analytics review and user behavior analysis (through heatmaps, session recordings, and funnel analysis) to identify specific friction points. Our optimization work typically includes product page enhancements (improving images, content, social proof, and call-to-action elements), navigation and search functionality improvements, shopping cart optimization, and checkout streamlining. We implement strategic testing of key elements including headlines, product descriptions, pricing presentation, shipping options, and trust indicators. For marketplace listings like Amazon, we optimize titles, bullet points, descriptions, and backend keywords while enhancing image quality and compliance. Mobile experience optimization is particularly critical, as over 60% of e-commerce traffic now comes from mobile devices. We also focus on site speed improvements, which directly impact both conversion rates and search rankings. The most successful approach combines best practices implementation with systematic A/B testing to validate changes and continuously improve performance based on your specific audience's preferences and behaviors.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you handle Amazon advertising and optimization?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Our Amazon marketing strategy encompasses both organic optimization and paid advertising management. For organic optimization, we conduct comprehensive keyword research specific to Amazon's search patterns, then strategically incorporate these terms into product titles, bullets, descriptions, and backend search terms. We optimize product images for both compliance and conversion, develop enhanced brand content (A+ Content), and implement proper category and attribute selection. For paid advertising, we create and manage Sponsored Products, Sponsored Brands, and Sponsored Display campaigns with carefully structured campaign hierarchies, granular bid management, and negative keyword refinement. Our approach includes strategic use of automatic campaigns for keyword discovery paired with highly targeted manual campaigns for maximum efficiency. We also leverage Amazon DSP for advanced retargeting when appropriate for your business scale. All campaigns receive ongoing optimization based on ACOS (Advertising Cost of Sale), conversion rates, and profitability metrics. Additionally, we implement review generation strategies and monitor seller performance metrics to maintain and improve your overall account health, which directly impacts both organic ranking and advertising effectiveness.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you help with inventory management and fulfillment?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>While our primary focus is on marketing and sales growth, we understand that inventory management and fulfillment are critical components of e-commerce success that directly impact marketing effectiveness. We provide strategic guidance on inventory planning based on sales forecasts and marketing initiatives to help prevent both stockouts (which damage listing rankings and ad performance) and excess inventory (which ties up capital). We can advise on platform-specific fulfillment options such as Fulfillment by Amazon (FBA), Shopify Fulfillment Network, or third-party logistics (3PL) providers that integrate with your e-commerce platform. For multi-channel sellers, we help implement inventory synchronization systems to maintain accurate stock levels across platforms. We can recommend appropriate technology solutions for inventory management and order processing based on your business scale and complexity. While we don't directly manage warehouse operations or provide fulfillment services, we maintain partnerships with reputable 3PL providers and can facilitate introductions. Our marketing strategies always consider your fulfillment capabilities to ensure we're driving sustainable growth that your operations can support.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you approach multi-channel e-commerce marketing?</h3>
                        <div class="toggle-btn"><span class="icon"></span></div>
                    </div>
                    <div class="faq-answer">
                        <p>Our multi-channel e-commerce approach is designed to create a cohesive brand experience while leveraging the unique strengths of each platform. We start by developing a central brand strategy that defines your core messaging, value proposition, and visual identity to maintain consistency across channels. We then adapt this core strategy to each platform's specific requirements, audience behaviors, and best practices. For product information management, we implement systems to efficiently distribute and update product data across channels while customizing content to perform optimally in each environment. Our attribution modeling tracks how channels interact in the customer journey, helping allocate marketing resources effectively. We develop channel-specific KPIs while also measuring overall business impact, giving you both granular and holistic performance views. We carefully manage pricing strategy across channels to prevent cannibalization while potentially leveraging different channels for different product lines or customer segments. The key to successful multi-channel e-commerce is creating an integrated ecosystem where each platform serves specific strategic purposes while maintaining a unified customer experience and efficient backend operations—all of which we help orchestrate through our comprehensive approach.</p>
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