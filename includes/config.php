<?php
// Prevent direct access
defined('BASEPATH') or exit('No direct script access allowed');

// Include the error handler
require_once __DIR__ . '/error_handler.php';

// Database configuration
$db_host = 'localhost';
$db_user = 'u911550082_startupai'; // Replace with your database username
$db_pass = 'r9[T!LCxpD'; // Replace with your database password
$db_name = 'u911550082_startupai';
$db_port = 3306; // Default MySQL port
$db_socket = ''; // Leave empty for default socket

// Create database connection
try {
    // Try creating connection with mysqli
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port, $db_socket);
    
    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    // Set charset
    $conn->set_charset("utf8");
} catch (Exception $e) {
    // Try alternate connection method with PDO if mysqli fails
    try {
        $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($dsn, $db_user, $db_pass, $options);
        
        // Create a compatibility layer with mysqli-like methods for the rest of the code
        class MySQLiCompat {
            private $pdo;
            
            public function __construct($pdo) {
                $this->pdo = $pdo;
                $this->connect_error = null;
            }
            
            public function set_charset($charset) {
                return true; // Already set in DSN
            }
            
            public function query($sql) {
                try {
                    $stmt = $this->pdo->query($sql);
                    
                    // Create a result object that mimics mysqli_result
                    $result = new stdClass();
                    $result->num_rows = $stmt->rowCount();
                    $result->stmt = $stmt;
                    return $result;
                } catch (Exception $e) {
                    error_log("Query error: " . $e->getMessage());
                    return false;
                }
            }
            
            // Add more compatibility methods as needed
        }
        
        // Create the compatibility layer
        $conn = new MySQLiCompat($pdo);
        
    } catch (Exception $pdo_e) {
        // Both connection methods failed - log the error and die
        die("Database connection failed: Unable to connect with either mysqli or PDO. Please check your database configuration. Error: " . $pdo_e->getMessage());
    }
}

// Run database setup to ensure all required tables exist
require_once __DIR__ . '/db_setup.php';

// Site configuration
$site_config = [
    'site_name' => 'StartupAI',
    'site_url' => 'http://moccasin-sardine-825668.hostingersite.com', // Update with your actual URL
    'admin_email' => 'admin@example.com',
    'uploads_dir' => 'uploads',
    'date_format' => 'F j, Y',
    'time_format' => 'g:i a',
];

// Include other configuration files
$config_files = [
    __DIR__ . '/../config/database.php',
    __DIR__ . '/../config/seo.php',
    __DIR__ . '/../config/why-hire-us.php',
    __DIR__ . '/../config/faq.php'
];

foreach ($config_files as $file) {
    if (file_exists($file)) {
        require_once $file;
    }
}

/**
 * Helper function to format dates
 */
function format_date($date, $format = '') {
    global $site_config;
    $format = $format ?: $site_config['date_format'];
    return date($format, strtotime($date));
}

/**
 * Helper function to create URL-friendly slug
 */
function create_slug($string) {
    $slug = strtolower(trim(preg_replace('/[^a-zA-Z0-9-]+/', '-', $string), '-'));
    return $slug;
}

/**
 * Helper function to redirect
 */
function redirect($url) {
    header("Location: $url");
    exit();
}

/**
 * Helper function to sanitize inputs
 */
function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?> 