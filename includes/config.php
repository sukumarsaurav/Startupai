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

// Create database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset
$conn->set_charset("utf8");

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