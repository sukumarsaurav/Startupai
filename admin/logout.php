<?php
define('BASEPATH', true);
require_once '../includes/config.php';
require_once 'includes/admin-auth.php';

session_start();

// Log the logout action if user was logged in
if (isAdminLoggedIn()) {
    // Optional: Log the logout event
    $admin_id = $_SESSION['admin_id'];
    $stmt = $conn->prepare("INSERT INTO admin_activity_log (admin_id, activity_type, description, ip_address) VALUES (?, 'logout', 'Admin logged out', ?)");
    $ip = $_SERVER['REMOTE_ADDR'];
    $stmt->bind_param("is", $admin_id, $ip);
    $stmt->execute();
    $stmt->close();
}

// Logout the admin user
logoutAdmin();

// Redirect to login page with a logout message
header("Location: login.php?logout=success");
exit(); 