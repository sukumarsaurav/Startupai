<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
// Page specific content
$pageTitle = "Content Marketing Services";
$pageDescription = "Attract and engage your target audience with valuable content";
$serviceName = "Content Marketing";
$serviceSlug = "content-marketing";


require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for content marketing
$why_hire_us = getWhyHireUsContent('content-marketing');

require_once '../../../includes/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    High-quality content writing services that drive traffic, engage readers, and grow your business
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
                <img src="../../../assets/images/services/content-marketing.jpg" alt="<?php echo $serviceName; ?>" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Affordable Content Writing Solutions for Your Business</h2>
                <p>
                    Our content writing services help businesses create engaging, SEO-optimized content that connects with your target audience. We provide comprehensive content solutions including blog content writing, website content writing, and creative content writing tailored to your specific needs.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-pencil-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>SEO Content Writing Services</h5>
                            <p>We create search engine optimized content that helps improve your website's visibility and drives organic traffic.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-edit text-primary"></i>
                        </div>
                        <div>
                            <h5>Blog Content Writing</h5>
                            <p>Expert blog writers create engaging posts that establish your authority and keep your audience coming back for more.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-share-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Content Distribution</h5>
                            <p>We ensure your content reaches the right audience through strategic distribution across multiple channels.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-chart-line text-primary"></i>
                        </div>
                        <div>
                            <h5>Performance Analysis</h5>
                            <p>Regular monitoring and analysis of content performance to optimize your content marketing strategy.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-bullseye text-primary"></i>
                        </div>
                        <div>
                            <h5>Audience Engagement</h5>
                            <p>We help you build and maintain meaningful relationships with your audience through engaging content.</p>
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
                <h2 class="section-title">Professional Content Writing Process</h2>
                <p class="section-description">
                    Our systematic approach to creating high-quality content for your business
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-search fa-3x text-primary"></i>
                    </div>
                    <h4>Research & Planning</h4>
                    <p>We analyze your audience, competitors, and industry trends to develop an effective content strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Content Creation</h4>
                    <p>Our expert team creates high-quality, engaging content tailored to your target audience.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-share-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Distribution</h4>
                    <p>We distribute your content across relevant channels to maximize reach and engagement.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-chart-bar fa-3x text-primary"></i>
                    </div>
                    <h4>Analysis & Optimization</h4>
                    <p>We track performance metrics and optimize content strategy based on data-driven insights.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="services-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Content Writing Services for Businesses</h2>
                <p class="section-description">
                    Comprehensive content solutions to meet your business needs
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-pen-fancy fa-2x text-primary"></i>
                    </div>
                    <h4>Website Content Writing</h4>
                    <p>Professional content writing for websites that engages visitors and drives conversions through compelling copy and clear messaging.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-file-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Premium Content</h4>
                    <p>Comprehensive whitepapers, ebooks, and case studies that showcase your expertise and generate qualified leads.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="service-icon mb-3">
                        <i class="fas fa-video fa-2x text-primary"></i>
                    </div>
                    <h4>Visual Content</h4>
                    <p>Engaging infographics, videos, and visual content that simplify complex information and increase content shareability.</p>
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
                <h2 class="section-title">Benefits of Professional Content Writing</h2>
                <p class="section-description">
                    Why invest in high-quality content writing services
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Increased Brand Authority</h4>
                    <p>Build credibility and establish your brand as an industry thought leader through valuable content.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Better SEO Results</h4>
                    <p>Quality content improves search engine rankings and drives organic traffic to your website.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-handshake fa-2x text-primary"></i>
                    </div>
                    <h4>Higher Conversion Rates</h4>
                    <p>Engaging content helps nurture leads and guide them through the buyer's journey more effectively.</p>
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
                <h2 class="mb-3">Ready to Elevate Your Content?</h2>
                <p class="lead mb-0">
                    Get started with our affordable content writing services today and see the difference quality content can make.
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
            <h2 class="faq-title">Content Marketing FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-column">
                <!-- FAQ Item 1 -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <span>What types of content do you create?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We create a wide range of content including:</p>
                        <ul>
                            <li>Blog posts and articles</li>
                            <li>Whitepapers and ebooks</li>
                            <li>Case studies</li>
                            <li>Infographics and visual content</li>
                            <li>Video content</li>
                            <li>Social media content</li>
                            <li>Email newsletters</li>
                        </ul>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How often should I publish new content?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>The ideal publishing frequency depends on your industry, audience, and resources. Generally, we recommend publishing at least 2-4 high-quality blog posts per month, along with regular social media updates and quarterly premium content pieces. We'll help you develop a content calendar that matches your goals and capabilities.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do you measure content marketing success?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We track various metrics including website traffic, engagement rates, time on page, social shares, lead generation, and conversion rates. We provide monthly reports detailing these metrics and their impact on your business goals.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does it take to see results?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Content marketing is a long-term strategy. While you may see some immediate engagement, significant results typically appear after 3-6 months of consistent content creation and distribution. The compound effect of content marketing means results continue to improve over time.</p>
                    </div>
                </div>
            </div>

            <div class="faq-column">
                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you handle content distribution?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide comprehensive content distribution services including social media sharing, email marketing, content syndication, and promotion through relevant industry channels. We ensure your content reaches the right audience at the right time.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do you ensure content quality?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We maintain high content quality through thorough research, expert writers, multiple rounds of editing, and strict quality control processes. All content is optimized for both search engines and user experience while maintaining your brand voice and industry expertise.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can you help with existing content?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer content auditing and optimization services. We can review your existing content, identify improvement opportunities, and update or repurpose content to better serve your current marketing goals and audience needs.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you provide content strategy consulting?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer content strategy consulting services to help businesses develop and implement effective content marketing plans. This includes audience analysis, competitor research, content planning, and measurement framework development.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../includes/footer.php'; ?> 