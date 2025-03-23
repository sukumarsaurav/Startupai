<?php
// Check if this is development or production by checking the hostname
$is_local = true;
if (isset($_SERVER['HTTP_HOST']) && strpos($_SERVER['HTTP_HOST'], 'moccasin-sardine-825668.hostingersite.com') !== false) {
    $is_local = false;
}

// Set database credentials based on environment
if ($is_local) {
    // Local development database
    $db_host = 'localhost';
    $db_user = 'root'; // Update with your local MySQL username
    $db_pass = ''; // Update with your local MySQL password
    $db_name = 'startupai'; // Update with your local database name
} else {
    // Production database
    $db_host = 'localhost';
    $db_user = 'u911550082_startupai';
    $db_pass = 'r9[T!LCxpD';
    $db_name = 'u911550082_startupai';
}

// Create database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset
$conn->set_charset("utf8");

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `client_position` varchar(255) DEFAULT NULL,
  `client_company` varchar(255) DEFAULT NULL,
  `testimonial_text` text NOT NULL,
  `service_category` varchar(100) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT 0,
  `display_order` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

// Execute the SQL statement
try {
    if ($conn->query($sql) === TRUE) {
        echo "Table 'testimonials' created successfully!<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }
    
    // Check if the table has data
    $check_data = "SELECT COUNT(*) as count FROM testimonials";
    $result = $conn->query($check_data);
    $row = $result->fetch_assoc();
    
    // Insert sample testimonial data if the table is empty
    if ($row['count'] == 0) {
        $sample_data = "INSERT INTO `testimonials` (`client_name`, `client_position`, `client_company`, `testimonial_text`, `service_category`, `is_featured`, `display_order`) VALUES
        ('Tejas Patel', 'CEO', 'Dental Office USA', 'Excellent work they have done so far for our company based in Texas, US. Owner is very responsive and do genuinely care about your business growth, highly recommend their SEO services and all around support !!', 'SEO & WEB Services', 1, 1),
        ('Jess Cilenti', 'Writer', 'USA', 'StartupAI has been a lifesaver for my business. Incredible customer service and stellar SEO tactics. I highly recommend doing business with this company.', 'SEO Support', 1, 2);";
        
        if ($conn->query($sample_data) === TRUE) {
            echo "Sample testimonials inserted successfully!";
        } else {
            echo "Error inserting sample data: " . $conn->error;
        }
    } else {
        echo "Table already has data, skipping sample data insertion.";
    }
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}

// Close connection
$conn->close();
?> 