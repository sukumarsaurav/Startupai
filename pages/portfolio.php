<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Our Portfolio - StartupAI';
$pageDescription = 'Explore our portfolio of web development, AI solutions, and digital marketing projects';
$pageKeywords = 'portfolio, projects, web development, AI solutions, digital marketing, case studies';

// Include header
include_once '../components/header.php';

// Array of portfolio projects
$projects = [
    [
        'title' => 'E-commerce Platform',
        'category' => 'Web Development',
        'image' => '../assets/images/portfolio/ecommerce.jpg',
        'description' => 'A custom e-commerce platform built with React and Node.js, featuring payment integration and inventory management.',
        'technology' => 'React, Node.js, MongoDB, Stripe',
        'client' => 'Fashion Retailer'
    ],
    [
        'title' => 'AI Customer Support Chatbot',
        'category' => 'AI Solutions',
        'image' => '../assets/images/portfolio/chatbot.jpg',
        'description' => 'An intelligent chatbot that handles customer inquiries and provides real-time support with 24/7 availability.',
        'technology' => 'TensorFlow, Python, DialogFlow, Next.js',
        'client' => 'SaaS Company'
    ],
    [
        'title' => 'Real Estate Website',
        'category' => 'Web Development',
        'image' => '../assets/images/portfolio/realestate.jpg',
        'description' => 'A responsive real estate website with property listings, search functionality, and agent profiles.',
        'technology' => 'WordPress, Custom Theme, Google Maps API',
        'client' => 'Real Estate Agency'
    ],
    [
        'title' => 'SEO & Content Marketing',
        'category' => 'Digital Marketing',
        'image' => '../assets/images/portfolio/seo.jpg',
        'description' => 'Comprehensive SEO and content marketing campaign that increased organic traffic by 150% in 6 months.',
        'technology' => 'SEMrush, Google Analytics, Content Strategy',
        'client' => 'Educational Platform'
    ],
    [
        'title' => 'Voice Assistant Integration',
        'category' => 'AI Solutions',
        'image' => '../assets/images/portfolio/voice.jpg',
        'description' => 'Custom voice assistant integration for a smart home product, enabling voice-controlled operations.',
        'technology' => 'Amazon Alexa SDK, Google Assistant API, Node.js',
        'client' => 'Smart Home Manufacturer'
    ],
    [
        'title' => 'Mobile App Design',
        'category' => 'Web Design',
        'image' => '../assets/images/portfolio/mobileapp.jpg',
        'description' => 'UI/UX design for a fitness tracking mobile application with intuitive user interface and engaging experience.',
        'technology' => 'Figma, Adobe XD, Prototyping, User Testing',
        'client' => 'Fitness Startup'
    ]
];
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4">Our Portfolio</h1>
                <p class="lead">Showcasing our best work and successful projects</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="../assets/images/portfolio-header.svg" alt="Portfolio" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="py-5">
    <div class="container">
        <div class="portfolio-filter mb-5 text-center" data-aos="fade-up">
            <button class="btn btn-outline-primary active" data-filter="all">All</button>
            <button class="btn btn-outline-primary" data-filter="Web Development">Web Development</button>
            <button class="btn btn-outline-primary" data-filter="AI Solutions">AI Solutions</button>
            <button class="btn btn-outline-primary" data-filter="Digital Marketing">Digital Marketing</button>
            <button class="btn btn-outline-primary" data-filter="Web Design">Web Design</button>
        </div>
        
        <div class="row g-4 portfolio-container">
            <?php foreach ($projects as $project): ?>
            <div class="col-lg-4 col-md-6 portfolio-item" data-category="<?php echo htmlspecialchars($project['category']); ?>" data-aos="fade-up">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="<?php echo htmlspecialchars($project['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($project['title']); ?>">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2"><?php echo htmlspecialchars($project['category']); ?></span>
                        <h3 class="card-title h5"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="card-text"><?php echo htmlspecialchars($project['description']); ?></p>
                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#projectModal<?php echo $loop = isset($loop) ? $loop + 1 : 1; ?>">
                            View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Project Modals -->
<?php $counter = 1; ?>
<?php foreach ($projects as $project): ?>
<div class="modal fade" id="projectModal<?php echo $counter; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo htmlspecialchars($project['title']); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($project['title']); ?>">
                    </div>
                    <div class="col-md-6">
                        <h6>Project Description</h6>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                        
                        <h6>Technologies Used</h6>
                        <p><?php echo htmlspecialchars($project['technology']); ?></p>
                        
                        <h6>Client</h6>
                        <p><?php echo htmlspecialchars($project['client']); ?></p>
                        
                        <div class="mt-4">
                            <a href="#" class="btn btn-primary">Visit Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $counter++; ?>
<?php endforeach; ?>

<!-- CTA Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fw-bold mb-4">Ready to Start Your Project?</h2>
                <p class="lead mb-4">Let us help you create a custom solution tailored to your business needs.</p>
                <a href="/pages/contact.php" class="btn btn-primary btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio filtering
    const filterButtons = document.querySelectorAll('.portfolio-filter button');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get filter value
            const filterValue = this.getAttribute('data-filter');
            
            // Filter items
            portfolioItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
// Include footer
include_once '../components/footer.php';
?> 