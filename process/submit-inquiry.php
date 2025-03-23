<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and sanitize inputs
    $name = sanitize_input($_POST['name'] ?? '');
    $email = sanitize_input($_POST['email'] ?? '');
    $service = sanitize_input($_POST['service'] ?? '');
    $description = sanitize_input($_POST['description'] ?? '');
    
    // Validate inputs
    if (empty($name) || empty($email) || empty($service) || empty($description)) {
        $_SESSION['inquiry_error'] = 'Please fill in all required fields.';
        $_SESSION['form_data'] = $_POST; // Save form data for repopulation
        header('Location: ../index.php#inquiryForm');
        exit;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['inquiry_error'] = 'Please enter a valid email address.';
        $_SESSION['form_data'] = $_POST; // Save form data for repopulation
        header('Location: ../index.php#inquiryForm');
        exit;
    }
    
    // Create inquiries table if it doesn't exist
    $create_table_query = "CREATE TABLE IF NOT EXISTS inquiries (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        service VARCHAR(50) NOT NULL,
        description TEXT NOT NULL,
        status ENUM('new', 'in_progress', 'completed') DEFAULT 'new',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        INDEX idx_email (email),
        INDEX idx_service (service),
        INDEX idx_status (status)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
    
    $conn->query($create_table_query);
    
    // Insert into database
    $insert_query = "INSERT INTO inquiries (name, email, service, description, created_at) 
                     VALUES (?, ?, ?, ?, NOW())";
    
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("ssss", $name, $email, $service, $description);
    
    if ($stmt->execute()) {
        // Success
        $_SESSION['inquiry_success'] = true;
        
        // Optional: Send email notification
        $to = $site_config['admin_email'];
        $subject = "New Inquiry from $name";
        $message = "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Service: $service\n";
        $message .= "Description: $description\n";
        
        $headers = "From: $email\r\n";
        
        // Uncomment to enable email sending
        // mail($to, $subject, $message, $headers);
        
        // Log the inquiry
        error_log("New inquiry received from $email for $service service.");
        
        // Clear form data
        unset($_SESSION['form_data']);
    } else {
        // Error
        $_SESSION['inquiry_error'] = 'There was an error submitting your inquiry. Please try again later.';
        $_SESSION['form_data'] = $_POST; // Save form data for repopulation
        error_log("Error submitting inquiry: " . $stmt->error);
    }
    
    $stmt->close();
}

// Redirect back to homepage
header('Location: ../index.php#inquiryForm');
exit;
?> 