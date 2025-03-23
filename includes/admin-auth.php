<?php
/**
 * Admin authentication functions
 */

/**
 * Check if admin is logged in
 * 
 * @return bool True if admin is logged in, false otherwise
 */
function isAdminLoggedIn() {
    return isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
}

/**
 * Check if admin has permission to access a specific feature
 * 
 * @param string $permission The permission to check
 * @return bool True if admin has permission, false otherwise
 */
function hasAdminPermission($permission) {
    // For now, all logged-in admins have all permissions
    // This can be expanded later with a proper role-based permission system
    return isAdminLoggedIn();
}

/**
 * Require admin login to access a page
 * If not logged in, redirect to login page
 */
function requireAdminLogin() {
    if (!isAdminLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

/**
 * Log out admin
 * Clear session and redirect to login page
 */
function logoutAdmin() {
    // Unset all session variables
    $_SESSION = array();
    
    // Destroy the session
    session_destroy();
    
    // Redirect to login page
    header('Location: login.php');
    exit;
}

/**
 * Create a new admin user
 * 
 * @param string $username Admin username
 * @param string $password Admin password
 * @param string $email Admin email
 * @return bool True if admin was created, false otherwise
 */
function createAdmin($username, $password, $email) {
    global $conn;
    
    // Check if username already exists
    $stmt = $conn->prepare("SELECT id FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        return false; // Username already exists
    }
    
    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert new admin
    $stmt = $conn->prepare("INSERT INTO admins (username, password, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $hashedPassword, $email);
    $success = $stmt->execute();
    
    $stmt->close();
    return $success;
} 