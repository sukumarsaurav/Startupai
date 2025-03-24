<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
// Page specific content
$pageTitle = "Social Media Marketing Services";
$pageDescription = "Build your brand presence and engage with customers on social platforms";
$serviceName = "Social Media Marketing";
$serviceSlug = "social-media";


require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for social media marketing
$why_hire_us = getWhyHireUsContent('social-media-marketing');

require_once '../../../includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">
                        Drive engagement, build brand awareness, and grow your audience with strategic social media management
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
                    <img src="../../../assets/images/services/social-media-marketing.jpg" alt="<?php echo $serviceName; ?>" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Strategic Social Media Marketing Solutions</h2>
                    <p>
                        Our social media marketing services help businesses build meaningful connections with their target audience, increase brand visibility, and drive measurable results. We develop comprehensive strategies that align with your business goals and resonate with your audience across all major social platforms.
                    </p>
                    <div class="features mt-4">
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-bullseye text-primary"></i>
                            </div>
                            <div>
                                <h5>Platform Strategy</h5>
                                <p>Tailored strategies for each social media platform to maximize engagement and reach.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-pencil-alt text-primary"></i>
                            </div>
                            <div>
                                <h5>Content Creation</h5>
                                <p>Engaging, platform-specific content that resonates with your target audience and drives interaction.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-chart-line text-primary"></i>
                            </div>
                            <div>
                                <h5>Performance Analytics</h5>
                                <p>Regular monitoring and analysis of social media metrics to optimize campaign performance.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="fas fa-comments text-primary"></i>
                            </div>
                            <div>
                                <h5>Community Management</h5>
                                <p>Active engagement with your audience to build relationships and maintain brand reputation.</p>
                            </div>
                        </div>
                        <div class="feature d-flex align-items-start">
                            <div class="feature-icon me-3">
                                <i class="fas fa-ad text-primary"></i>
                            </div>
                            <div>
                                <h5>Paid Social Advertising</h5>
                                <p>Strategic ad campaigns to reach targeted audiences and achieve specific marketing goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hire Us Section -->
    <?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

    <!-- Process Section -->
    <section class="process-section py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Our Social Media Marketing Process</h2>
                    <p class="section-description">
                        A systematic approach to building your social media presence
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4" data-aos="fade-up">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-search fa-3x text-primary"></i>
                        </div>
                        <h4>Research & Analysis</h4>
                        <p>We analyze your audience, competitors, and industry trends to develop effective strategies.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-tasks fa-3x text-primary"></i>
                        </div>
                        <h4>Strategy Development</h4>
                        <p>Creating platform-specific strategies and content calendars aligned with your goals.</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-bullhorn fa-3x text-primary"></i>
                        </div>
                        <h4>Implementation</h4>
                        <p>Executing campaigns, creating content, and managing community engagement.</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                        <div class="process-icon mb-3">
                            <i class="fas fa-chart-bar fa-3x text-primary"></i>
                        </div>
                        <h4>Optimization</h4>
                        <p>Monitoring performance and optimizing strategies based on data-driven insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Social Media Marketing Services</h2>
                    <p class="section-description">
                        Comprehensive social media solutions for your business
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fab fa-facebook fa-2x text-primary"></i>
                        </div>
                        <h4>Facebook & Instagram Marketing</h4>
                        <p>Strategic content creation and advertising on the world's largest social networks to build brand awareness and drive engagement.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fab fa-linkedin fa-2x text-primary"></i>
                        </div>
                        <h4>LinkedIn Marketing</h4>
                        <p>Professional B2B marketing strategies to establish thought leadership and generate quality business leads.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fab fa-twitter fa-2x text-primary"></i>
                        </div>
                        <h4>Twitter Marketing</h4>
                        <p>Real-time engagement and trending topic leverage to increase brand visibility and customer interaction.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fab fa-tiktok fa-2x text-primary"></i>
                        </div>
                        <h4>TikTok Marketing</h4>
                        <p>Creative short-form video content and trending challenges to reach younger audiences and drive viral engagement.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fab fa-youtube fa-2x text-primary"></i>
                        </div>
                        <h4>YouTube Marketing</h4>
                        <p>Video content strategy and optimization to build a strong presence on the world's largest video platform.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="service-icon mb-3">
                            <i class="fas fa-chart-pie fa-2x text-primary"></i>
                        </div>
                        <h4>Social Media Analytics</h4>
                        <p>Comprehensive reporting and insights to track performance and optimize your social media strategy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="section-title">Benefits of Social Media Marketing</h2>
                    <p class="section-description">
                        The advantages of choosing our social media marketing services
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="benefit-icon mb-3">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                        <h4>Increased Audience Reach</h4>
                        <p>Expand your reach to a broader audience and connect with potential customers.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="benefit-icon mb-3">
                            <i class="fas fa-thumbs-up fa-2x text-primary"></i>
                        </div>
                        <h4>Brand Awareness</h4>
                        <p>Enhance your brand's visibility and establish a strong brand identity.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                        <div class="benefit-icon mb-3">
                            <i class="fas fa-chart-line fa-2x text-primary"></i>
                        </div>
                        <h4>Measurable Results</h4>
                        <p>Track and analyze the effectiveness of your social media campaigns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="mb-3">Ready to Boost Your Social Media Presence?</h2>
                    <p class="lead mb-0">Let us help you create a powerful social media strategy that connects with your audience and drives measurable results.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-header">
                <h2 class="faq-title">Social Media Marketing FAQ's</h2>
                <h3 class="faq-subtitle">Have Any Questions?</h3>
            </div>

            <div class="faq-container">
                <div class="faq-column">
                    <!-- FAQ Item 1 - Open by default -->
                    <div class="faq-item active">
                        <div class="faq-question">
                            <span>How long does it take to see results from social media marketing?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Social media marketing results vary depending on your goals, industry, and strategy. Generally, you can expect to see initial engagement improvements within 1-3 months, with significant results in brand awareness and community growth within 3-6 months. Long-term goals like increased sales and customer loyalty typically show results within 6-12 months of consistent effort.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Which social media platforms should my business be on?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The choice of platforms depends on your target audience, industry, and business goals. We help you identify where your audience is most active and engaged. For B2B companies, LinkedIn and Twitter are often essential. For B2C businesses, platforms like Instagram, Facebook, and TikTok might be more effective. We'll develop a strategy that focuses on the platforms that will deliver the best ROI for your business.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you measure social media marketing success?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We track multiple KPIs aligned with your business objectives, including engagement rates, reach, impressions, follower growth, website traffic, lead generation, and conversion rates. Our detailed monthly reports provide insights into performance metrics, audience behavior, and ROI. We use advanced analytics tools to measure both quantitative and qualitative success indicators.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What type of content do you create?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We create a diverse range of content tailored to each platform, including engaging posts, stories, reels, videos, infographics, and blog content. Our content strategy focuses on your brand voice and audience preferences, incorporating trending topics and industry insights. We also create platform-specific content that maximizes each network's unique features and algorithms.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-column">
                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How often will you post on social media?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Posting frequency is customized based on your industry, audience engagement patterns, and platform best practices. Typically, we recommend 3-5 posts per week on primary platforms, with additional content for stories and time-sensitive updates. We develop a content calendar that ensures consistent presence while maintaining content quality and relevance.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you handle social media advertising?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we provide comprehensive social media advertising services. This includes strategy development, ad creation, audience targeting, budget management, and performance optimization. We create and manage campaigns across all major platforms, using advanced targeting options to reach your ideal audience and achieve the best possible ROI.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you handle community management and engagement?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our community management approach includes daily monitoring and engagement with your audience, responding to comments and messages, proactive engagement with industry conversations, and crisis management when needed. We maintain your brand voice while fostering meaningful interactions that build community and trust.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What makes your social media marketing approach unique?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our approach combines data-driven strategy with creative storytelling. We use advanced analytics and AI tools to understand audience behavior and trends, while maintaining authentic human connection. We focus on creating meaningful engagement rather than just growing numbers, and we adapt strategies in real-time based on performance data and industry changes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require_once '../../../includes/footer.php'; ?> 