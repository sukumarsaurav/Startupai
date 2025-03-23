<?php
define('BASEPATH', true);
require_once 'includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'StartupAI - Your Technology Partner';
$pageDescription = 'Professional web development services including React, Next.js, WordPress, AI/ML solutions, and digital marketing';
$pageKeywords = 'web development, digital marketing, AI solutions, React, Next.js, WordPress';

// Get testimonials from database
$testimonials_query = "SELECT * FROM testimonials WHERE is_featured = 1 ORDER BY display_order, created_at DESC LIMIT 4";
$testimonials_result = $conn->query($testimonials_query);
$testimonials = [];

if ($testimonials_result && $testimonials_result->num_rows > 0) {
    while ($row = $testimonials_result->fetch_assoc()) {
        $testimonials[] = $row;
    }
}

// Include header
include_once 'components/header.php';
?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4">Transforming Ideas into Digital Reality</h1>
                <p class="lead">We specialize in modern web development, AI solutions, and digital marketing to help startups grow and succeed.</p>
                <div class="inquiry-form p-4 bg-white rounded shadow-lg">
                    <h3 class="h4 mb-4">Get Started Today</h3>
                    
                    <?php if (isset($_SESSION['inquiry_success'])): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Thank you for your inquiry! We'll get back to you as soon as possible.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['inquiry_success']); ?>
                    <?php elseif (isset($_SESSION['inquiry_error'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['inquiry_error']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['inquiry_error']); ?>
                    <?php endif; ?>
                    
                    <form id="inquiryForm" action="process/submit-inquiry.php" method="POST">
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required
                                   value="<?php echo isset($_SESSION['form_data']['name']) ? htmlspecialchars($_SESSION['form_data']['name']) : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required
                                   value="<?php echo isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <select name="service" class="form-select" required>
                                <option value="">Select Service</option>
                                <option value="web" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] === 'web') ? 'selected' : ''; ?>>Web Design</option>
                                <option value="app" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] === 'app') ? 'selected' : ''; ?>>App Development</option>
                                <option value="mobile" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] === 'mobile') ? 'selected' : ''; ?>>Mobile Apps</option>
                                <option value="ai" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] === 'ai') ? 'selected' : ''; ?>>AI Services</option>
                                <option value="marketing" <?php echo (isset($_SESSION['form_data']['service']) && $_SESSION['form_data']['service'] === 'marketing') ? 'selected' : ''; ?>>Digital Marketing</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="description" class="form-control" rows="3" placeholder="Project Description" required><?php echo isset($_SESSION['form_data']['description']) ? htmlspecialchars($_SESSION['form_data']['description']) : ''; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
                    </form>
                    <?php 
                    // Clear form data after displaying
                    if (isset($_SESSION['form_data'])) {
                        unset($_SESSION['form_data']);
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="assets/images/hero-image.svg" alt="Hero Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section id="why-us" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Why Choose Us</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card">
                    <i class="fas fa-rocket fa-3x mb-3"></i>
                    <h3>Startup Focused</h3>
                    <p>We help startups transform their ideas into MVPs and secure funding.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <i class="fas fa-brain fa-3x mb-3"></i>
                    <h3>AI Expertise</h3>
                    <p>Cutting-edge AI solutions and ML models for your business needs.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <i class="fas fa-chart-line fa-3x mb-3"></i>
                    <h3>Growth Partners</h3>
                    <p>Strategic digital marketing to accelerate your business growth.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section id="services-preview" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Services</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="service-card">
                    <i class="fas fa-code fa-3x mb-3"></i>
                    <h3>Web Development</h3>
                    <p>Custom websites using React, Next.js, and WordPress</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <i class="fas fa-robot fa-3x mb-3"></i>
                    <h3>AI Solutions</h3>
                    <p>AI chatbots, ML models, and voice agents</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <i class="fas fa-mobile-alt fa-3x mb-3"></i>
                    <h3>Mobile Development</h3>
                    <p>Native and hybrid mobile applications</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section id="technologies" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Technologies We Use</h2>
        <div class="row">
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up">
                <div class="tech-card">
                    <i class="fab fa-react fa-4x"></i>
                    <h4>React</h4>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card">
                    <i class="fab fa-node-js fa-4x"></i>
                    <h4>Node.js</h4>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card">
                    <i class="fab fa-python fa-4x"></i>
                    <h4>Python</h4>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-card">
                    <i class="fab fa-aws fa-4x"></i>
                    <h4>AWS</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="testimonials-header">
            <h2 class="testimonials-title">Check what's our client say about us!</h2>
            <div class="navigation-buttons">
                <button class="nav-button prev-button" aria-label="Previous testimonial">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                </button>
                <button class="nav-button next-button" aria-label="Next testimonial">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </button>
            </div>
        </div>

        <div class="testimonials-slider">
            <div class="testimonials-track">
                <?php if (count($testimonials) > 0): ?>
                    <?php foreach ($testimonials as $testimonial): ?>
                        <!-- Testimonial Card -->
                        <div class="testimonial-card">
                            <div class="category"><?php echo htmlspecialchars($testimonial['service_category']); ?></div>
                            <div class="quote-mark">&ldquo;&ldquo;</div>
                            <div class="testimonial-text">
                                <?php echo htmlspecialchars($testimonial['testimonial_text']); ?>
                            </div>
                            <div class="author-info">
                                <div class="author-name"><?php echo htmlspecialchars($testimonial['client_name']); ?></div>
                                <?php if (!empty($testimonial['client_position']) || !empty($testimonial['client_company'])): ?>
                                    <div class="author-title">
                                        <?php echo htmlspecialchars($testimonial['client_position']); ?>
                                        <?php if (!empty($testimonial['client_position']) && !empty($testimonial['client_company'])): ?>, <?php endif; ?>
                                        <?php echo htmlspecialchars($testimonial['client_company']); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Fallback testimonials if none in database -->
                    <div class="testimonial-card">
                        <div class="category">SEO & WEB Services</div>
                        <div class="quote-mark">&ldquo;&ldquo;</div>
                        <div class="testimonial-text">
                            Excellent work they have done so far for our company based in Texas, US. Owner is very responsive and do genuinely care about your business growth, highly recommend their SEO services and all around support !!
                        </div>
                        <div class="author-info">
                            <div class="author-name">Tejas Patel</div>
                            <div class="author-title">CEO, Dental Office USA</div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="category">SEO Support</div>
                        <div class="quote-mark">&ldquo;&ldquo;</div>
                        <div class="testimonial-text">
                            StartupAI has been a lifesaver for my business. Incredible customer service and stellar SEO tactics. I highly recommend doing business with this company.
                        </div>
                        <div class="author-info">
                            <div class="author-name">Jess Cilenti</div>
                            <div class="author-title">Writer, USA</div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- SEO Cost Calculator Button -->
    <div class="seo-calculator">
        <div class="seo-calculator-text">SEO Cost Calculator</div>
    </div>
</section>

<?php
// Include footer
include_once 'components/footer.php';
?> 