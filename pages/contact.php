<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Set variables for header
$pageTitle = 'Contact Us - StartupAI';
$pageDescription = 'Contact StartupAI - Your trusted technology partner for digital transformation';
$pageKeywords = 'contact, tech support, digital solutions, web development, AI services';
$active_page = 'contact';

// Check if the form is submitted
$form_submitted = false;
$form_success = false;
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_submitted = true;
    
    // Get form data and sanitize inputs
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $subject = sanitize_input($_POST['subject'] ?? '');
    $service = sanitize_input($_POST['service'] ?? '');
    $message = sanitize_input($_POST['message'] ?? '');
    $privacy_agreed = isset($_POST['privacy_agreed']) ? 1 : 0;
    
    // Validate inputs
    if (empty($name) || empty($email) || empty($subject) || empty($service) || empty($message) || !$privacy_agreed) {
        $form_error = 'Please fill in all required fields and agree to the privacy policy.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address.';
    } else {
        // Insert into database
        $insert_query = "INSERT INTO contact_inquiries (name, email, subject, service, message, privacy_agreed, created_at) 
                         VALUES (?, ?, ?, ?, ?, ?, NOW())";
        
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("sssssi", $name, $email, $subject, $service, $message, $privacy_agreed);
        
        if ($stmt->execute()) {
            $form_success = true;
            
            // Optional: Send email notification
            $to = $site_config['admin_email'];
            $email_subject = "New Contact Form Submission: $subject";
            $email_message = "Name: $name\n";
            $email_message .= "Email: $email\n";
            $email_message .= "Service: $service\n";
            $email_message .= "Message: $message\n";
            
            $headers = "From: $email\r\n";
            
            // Uncomment to enable email sending
            // mail($to, $email_subject, $email_message, $headers);
        } else {
            $form_error = 'There was an error submitting your message. Please try again later.';
        }
        
        $stmt->close();
    }
}

// Include header
include_once '../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4">Contact Us</h1>
                <p class="lead">Let's discuss how we can help transform your business</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/assets/images/contact-header.svg" alt="Contact Us" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                    <h3>Visit Us</h3>
                    <p>123 Innovation Street<br>Tech Valley, CA 94043<br>United States</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-card">
                    <i class="fas fa-phone fa-2x mb-3"></i>
                    <h3>Call Us</h3>
                    <p>+1 (555) 123-4567<br>Mon - Fri, 9am - 6pm</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-card">
                    <i class="fas fa-envelope fa-2x mb-3"></i>
                    <h3>Email Us</h3>
                    <p>info@startupai.com<br>support@startupai.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form-card p-4 bg-white rounded shadow" data-aos="fade-up">
                    <h2 class="text-center mb-4">Send Us a Message</h2>
                    
                    <?php if ($form_submitted && $form_success): ?>
                        <div class="alert alert-success" role="alert">
                            Thank you for contacting us! We'll get back to you as soon as possible.
                        </div>
                    <?php elseif ($form_submitted && !empty($form_error)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $form_error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required 
                                       value="<?php echo $form_submitted && !$form_success ? htmlspecialchars($name) : ''; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" required
                                       value="<?php echo $form_submitted && !$form_success ? htmlspecialchars($email) : ''; ?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required
                                  value="<?php echo $form_submitted && !$form_success ? htmlspecialchars($subject) : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <select name="service" class="form-select" required>
                                <option value="">Select Service</option>
                                <option value="web" <?php echo ($form_submitted && !$form_success && $service === 'web') ? 'selected' : ''; ?>>Web Design</option>
                                <option value="app" <?php echo ($form_submitted && !$form_success && $service === 'app') ? 'selected' : ''; ?>>App Development</option>
                                <option value="mobile" <?php echo ($form_submitted && !$form_success && $service === 'mobile') ? 'selected' : ''; ?>>Mobile Apps</option>
                                <option value="ai" <?php echo ($form_submitted && !$form_success && $service === 'ai') ? 'selected' : ''; ?>>AI Services</option>
                                <option value="marketing" <?php echo ($form_submitted && !$form_success && $service === 'marketing') ? 'selected' : ''; ?>>Digital Marketing</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="5" placeholder="Your Message" required><?php echo $form_submitted && !$form_success ? htmlspecialchars($message) : ''; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="privacy_agreed" required <?php echo ($form_submitted && !$form_success && $privacy_agreed) ? 'checked' : ''; ?>>
                                <label class="form-check-label">I agree to the <a href="/pages/privacy-policy.php">privacy policy</a> and <a href="/pages/terms-of-service.php">terms of service</a></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5">
    <div class="container">
        <div class="map-container rounded shadow" data-aos="fade-up">
            <!-- Replace with your map embed code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.1880764724832!2d-122.08374968441547!3d37.42199987982472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba02425dad8f%3A0x6c296c66619367e0!2sGoogleplex!5e0!3m2!1sen!2sus!4v1614308918936!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>

<?php
// Database table creation if it doesn't exist yet
$create_table_query = "CREATE TABLE IF NOT EXISTS contact_inquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    service VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    privacy_agreed TINYINT(1) NOT NULL DEFAULT 0,
    status ENUM('new', 'in_progress', 'completed') DEFAULT 'new',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_service (service),
    INDEX idx_status (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

// Execute the table creation query
$conn->query($create_table_query);

// Include footer
include_once '../components/footer.php';
?> 