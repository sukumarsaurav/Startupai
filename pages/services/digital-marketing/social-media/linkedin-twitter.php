<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';
require_once '../../../../config/why-hire-us.php';

// Page specific content
$pageTitle = "LinkedIn & Twitter Marketing";
$pageDescription = "Engage professionals and join real-time conversations with our strategic LinkedIn and Twitter marketing services";
$serviceName = "LinkedIn & Twitter Marketing";
$serviceSlug = "linkedin-twitter-marketing";

require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content
$why_hire_us = getWhyHireUsContent('social-media');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <a href="/contact" class="btn btn-primary btn-lg mt-3">Get a Professional B2B Strategy</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/assets/images/services/linkedin-twitter-marketing.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4" data-aos="fade-up">
                <h2 class="section-title">Leverage Professional & Real-Time Networks</h2>
                <p>LinkedIn, with over 900 million professionals, and Twitter, with its 330 million active users, offer unique opportunities to connect with decision-makers, industry influencers, and engaged audiences in real-time.</p>
                <p>Our LinkedIn and Twitter marketing services help you build professional authority, engage in industry conversations, and drive business results through strategic content, networking, and targeted advertising on these powerful platforms. Whether you're focused on B2B lead generation, thought leadership, or rapid response marketing, we develop strategies that align with your specific business objectives.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Offered -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our LinkedIn & Twitter Marketing Services</h2>
                <p class="lead">Strategic solutions for professional networks and real-time engagement</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-user-tie fa-3x text-primary"></i>
                    </div>
                    <h3>LinkedIn Profile & Company Page Optimization</h3>
                    <p>Complete optimization of professional profiles and company pages to maximize visibility and credibility.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> Executive profile development</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Company page enhancement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Showcase page creation</li>
                        <li><i class="fas fa-check text-primary me-2"></i> SEO-optimized content</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-file-alt fa-3x text-primary"></i>
                    </div>
                    <h3>Content Strategy & Publication</h3>
                    <p>Platform-specific content designed to establish thought leadership and drive engagement.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> LinkedIn articles and posts</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Twitter threads and campaigns</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Thought leadership content</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Hashtag strategy development</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-bullseye fa-3x text-primary"></i>
                    </div>
                    <h3>Targeted Advertising Campaigns</h3>
                    <p>Strategic ad campaigns that reach decision-makers and drive qualified leads.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> LinkedIn InMail campaigns</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Twitter promoted content</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Audience targeting refinement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Campaign performance optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-4">
                        <i class="fas fa-network-wired fa-3x text-primary"></i>
                    </div>
                    <h3>Strategic Networking & Community Building</h3>
                    <p>Proactive engagement strategies to build valuable industry connections and community.</p>
                    <ul class="service-features mt-3">
                        <li><i class="fas fa-check text-primary me-2"></i> LinkedIn Group management</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Twitter chat participation</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Industry influencer engagement</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Connection growth strategies</li>
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
                <h2 class="section-title">Our LinkedIn & Twitter Marketing Advantage</h2>
                <p class="lead">What makes our approach effective</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-briefcase fa-3x text-primary mb-3"></i>
                    <h4>B2B Specialization</h4>
                    <p>We understand the unique dynamics of professional networking and B2B marketing funnels.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-brain fa-3x text-primary mb-3"></i>
                    <h4>Thought Leadership Focus</h4>
                    <p>We position your executives and company as authoritative voices in your industry.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-bolt fa-3x text-primary mb-3"></i>
                    <h4>Real-Time Engagement</h4>
                    <p>We help you capitalize on trending topics and timely conversations relevant to your business.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-handshake fa-3x text-primary mb-3"></i>
                    <h4>Relationship-Centered</h4>
                    <p>We focus on building meaningful connections that translate into business opportunities.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-bullhorn fa-3x text-primary mb-3"></i>
                    <h4>Crisis Management Expertise</h4>
                    <p>We provide rapid response strategies for social media issues and brand protection.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="tech-card h-100 p-4 text-center bg-white rounded shadow-sm">
                    <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                    <h4>Lead Generation Focus</h4>
                    <p>We design campaigns specifically to capture and nurture qualified business leads.</p>
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
                <h2 class="section-title">Our LinkedIn & Twitter Marketing Process</h2>
                <p class="lead">A systematic approach to professional social media success</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>1</span>
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Audit & Analysis</h3>
                    <p>We evaluate your current profiles, competitors, and industry positioning to identify opportunities.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>2</span>
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>Strategy Development</h3>
                    <p>We create platform-specific strategies aligned with your business objectives and target audience.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>3</span>
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>Content & Campaign Execution</h3>
                    <p>We implement your strategy with optimized profiles, content creation, and advertising campaigns.</p>
                </div>
            </div>
            
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="process-card h-100 p-4 text-center">
                    <div class="process-icon mb-3">
                        <span>4</span>
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Analysis & Refinement</h3>
                    <p>We continuously measure results, gather insights, and refine strategies to maximize ROI.</p>
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
                <h2 class="section-title">Benefits of LinkedIn & Twitter Marketing</h2>
                <p class="lead">How these platforms drive business results</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-tie fa-2x text-primary"></i>
                    </div>
                    <h3>Professional Authority</h3>
                    <p>Establish your brand and executives as trusted industry experts through consistent thought leadership.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-funnel-dollar fa-2x text-primary"></i>
                    </div>
                    <h3>B2B Lead Generation</h3>
                    <p>Connect with decision-makers and create qualified lead pipelines through targeted marketing.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-building fa-2x text-primary"></i>
                    </div>
                    <h3>Business Networking</h3>
                    <p>Build valuable relationships with industry partners, influencers, and potential clients.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-rss fa-2x text-primary"></i>
                    </div>
                    <h3>Real-Time Industry Visibility</h3>
                    <p>Stay relevant by participating in trending industry conversations and breaking news.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-plus fa-2x text-primary"></i>
                    </div>
                    <h3>Talent Acquisition</h3>
                    <p>Enhance employer branding and connect with top talent in your industry.</p>
                </div>
            </div>
            
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-comments fa-2x text-primary"></i>
                    </div>
                    <h3>Customer Engagement</h3>
                    <p>Create direct communication channels with customers for support and relationship building.</p>
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
                <h2 class="mb-3">Ready to Elevate Your Professional Brand?</h2>
                <p class="lead mb-0">
                    Get a free LinkedIn & Twitter strategy consultation and discover how to leverage these platforms for business growth.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Request Free Consultation</a>
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
                    <p class="faq-subtitle">Common questions about LinkedIn & Twitter Marketing</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <div class="faq-container">
                    <div class="faq-column">
                        <div class="faq-item active">
                            <div class="faq-question">
                                <h3>How is B2B social media marketing different from B2C?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>B2B social media marketing differs from B2C in several key ways. The sales cycle is typically longer, with multiple decision-makers involved, requiring content focused on education, authority, and ROI rather than impulse purchasing. LinkedIn is often the primary platform for B2B marketing, whereas B2C may prioritize Instagram or Facebook. B2B content tends to be more technical, educational, and solution-oriented, while B2B metrics focus on lead quality rather than volume. Our strategies reflect these differences with content that addresses complex business challenges, speaks to multiple stakeholders, and nurtures relationships through the longer sales cycle. We measure success through metrics like qualified leads, sales opportunities created, and pipeline contribution.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Is LinkedIn worth the investment for my business?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>LinkedIn is generally worth the investment for B2B companies, professional services firms, and businesses targeting decision-makers. The platform offers unparalleled access to professionals, with 4 out of 5 LinkedIn members driving business decisions and 65% of B2B companies successfully acquiring customers through the platform. LinkedIn's targeting capabilities are particularly valuable, allowing you to reach prospects based on job title, company size, industry, and seniority. For B2C companies, LinkedIn can still provide value for employer branding, recruitment, and reaching high-income consumers. We recommend LinkedIn investment based on your specific audience demographics, sales cycle, and business objectives, and we can help you determine the optimal allocation of resources across platforms.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How do you measure ROI on LinkedIn and Twitter marketing?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>We measure ROI on LinkedIn and Twitter marketing through both platform-specific metrics and business outcomes. For LinkedIn, we track profile and page views, connection growth, content engagement rates, InMail response rates, and click-through rates. For Twitter, we monitor follower growth, engagement rates, retweets, mentions, and hashtag performance. Beyond these platform metrics, we focus on business results like website traffic, form submissions, qualified leads generated, sales opportunities created, and actual revenue attributed to these channels. We implement proper tracking through UTM parameters and conversion pixels to accurately attribute results. Our reporting provides both immediate performance indicators and longer-term business impact metrics, allowing you to see the complete ROI picture of your social media investment.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How often should we post on LinkedIn and Twitter?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Posting frequency should balance consistency with quality. For LinkedIn, we typically recommend 3-5 posts per week for company pages and 2-3 weekly updates for personal profiles. For Twitter, 3-5 tweets per day is often ideal to maintain visibility without overwhelming your audience. However, these recommendations adjust based on your specific audience, industry, and content resources. Quality always trumps quantity—it's better to post less frequently with high-value content than to share low-quality content more often. We develop customized posting schedules based on your audience activity patterns, analyzing when your followers are most active and which types of content generate the highest engagement. Our approach includes a mix of original content, curated industry news, and engagement with trending topics.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="faq-column">
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>What types of content work best on LinkedIn?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>The most effective LinkedIn content demonstrates industry expertise and provides value to your professional audience. Thought leadership articles, particularly those that share unique insights or solve industry challenges, typically perform exceptionally well. Case studies and success stories that demonstrate tangible results also generate strong engagement. Original data and research position your company as an authoritative source, while professional development content like industry trends and skill-building resources appeal to LinkedIn's career-focused users. Videos and visually appealing content stand out in the feed, with professional infographics and slide presentations receiving above-average engagement. Employee spotlights and company culture content help humanize your brand. We recommend maintaining a content mix that balances education (40%), industry insights (30%), company news (20%), and promotional content (10%).</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Is Twitter still relevant for business marketing?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Twitter remains relevant for business marketing in specific contexts, despite platform changes in recent years. It excels at real-time customer service, media and PR relationships, industry networking, and trend monitoring. The platform is particularly valuable for businesses in media, politics, technology, finance, and entertainment sectors. Twitter offers unique advantages including real-time engagement with breaking news, direct access to journalists and influencers, and participation in industry conversations through hashtags and Twitter chats. While it may not drive the same direct conversion rates as other platforms, Twitter serves important roles in brand visibility, thought leadership, and relationship building. We assess each client's specific industry and objectives to determine if Twitter should be a primary, secondary, or supporting channel in their overall marketing strategy.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Should executives have separate LinkedIn strategies?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, executives should have personal LinkedIn strategies that complement but remain distinct from company page content. Personal executive profiles typically generate 8-10 times higher engagement than company pages, as LinkedIn users prefer connecting with individuals rather than brands. Executive LinkedIn programs should focus on thought leadership, industry insights, and professional storytelling that aligns with company messaging while showcasing the executive's unique perspective and expertise. We develop executive LinkedIn strategies that include profile optimization, content calendars, engagement protocols, and performance metrics. These efforts support broader business objectives like brand building, sales relationships, recruitment, and industry influence. The most successful executive LinkedIn presences balance professional insights with authentic personality, creating meaningful connections that benefit both the individual and the organization.</p>
                            </div>
                        </div>
                        
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How do you handle social media crisis situations?</h3>
                                <button class="toggle-btn"><span class="icon"></span></button>
                            </div>
                            <div class="faq-answer">
                                <p>Our social media crisis management approach combines proactive preparation with rapid response capabilities. We begin by developing a customized crisis response plan that identifies potential risks, establishes escalation protocols, and creates pre-approved response templates. During an active crisis, we implement real-time monitoring across platforms, quickly assess the situation's severity and potential impact, and activate the appropriate response level. For containment, we provide transparent, factual responses that address legitimate concerns while avoiding escalation of misinformation. Throughout the process, we maintain regular client communication with situation updates and recommendation adjustments. Post-crisis, we conduct a comprehensive analysis to identify lessons learned and strengthen future preparedness. This structured approach ensures effective management of everything from minor complaints to major reputation challenges.</p>
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