<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'About Us - StartupAI';
$pageDescription = 'Learn about StartupAI - Your trusted technology partner for digital transformation';
$pageKeywords = 'about us, startup, technology partner, web development, AI solutions';

// Include header
include_once '../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4">About Us</h1>
                <p class="lead">Your trusted technology partner for digital transformation and growth</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="../assets/images/about-header.svg" alt="About Us" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <h2>Our Story</h2>
                <p>StartupAI was founded with a vision to help startups and businesses leverage the power of technology to achieve their goals. We understand the challenges that startups face in today's competitive landscape.</p>
                <p>Our team of experts brings together years of experience in web development, AI solutions, and digital marketing to provide comprehensive solutions that drive growth and success.</p>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <img src="../assets/images/our-story.svg" alt="Our Story" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Values</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="value-card">
                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                    <h3>Innovation</h3>
                    <p>We stay at the forefront of technology to deliver cutting-edge solutions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card">
                    <i class="fas fa-hands-helping fa-3x mb-3"></i>
                    <h3>Partnership</h3>
                    <p>We work closely with our clients to ensure their success is our success.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="value-card">
                    <i class="fas fa-shield-alt fa-3x mb-3"></i>
                    <h3>Quality</h3>
                    <p>We maintain the highest standards in everything we deliver.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Team</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                <div class="team-card">
                    <img src="../assets/images/team1.jpg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                    <h4>John Doe</h4>
                    <p class="text-muted">CEO & Founder</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="team-card">
                    <img src="../assets/images/team2.jpg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                    <h4>Jane Smith</h4>
                    <p class="text-muted">AI Lead</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="team-card">
                    <img src="../assets/images/team3.jpg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                    <h4>Mike Johnson</h4>
                    <p class="text-muted">Tech Lead</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="team-card">
                    <img src="../assets/images/team4.jpg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                    <h4>Sarah Wilson</h4>
                    <p class="text-muted">Marketing Director</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../components/footer.php';
?> 