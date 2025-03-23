<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Check if an admin user is logged in
 * 
 * @return bool True if admin is logged in, false otherwise
 */
function isAdminLoggedIn() {
    return isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']);
}

/**
 * Require admin to be logged in, redirect to login page if not
 * 
 * @return void
 */
function requireAdminLogin() {
    if (!isAdminLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}

/**
 * Logout the admin user
 * 
 * @return void
 */
function logoutAdmin() {
    // Unset all session variables
    $_SESSION = array();
    
    // If it's desired to kill the session, also delete the session cookie.
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    
    // Finally, destroy the session
    session_destroy();
}

/**
 * Get the current admin user info
 * 
 * @param PDO $conn Database connection
 * @return array|false Admin user data or false if not logged in
 */
function getCurrentAdmin($conn) {
    if (!isAdminLoggedIn()) {
        return false;
    }
    
    $admin_id = $_SESSION['admin_id'];
    
    $stmt = $conn->prepare("SELECT id, username, email, first_name, last_name, created_at, last_login 
                           FROM admin_users 
                           WHERE id = ?");
    $stmt->bind_param("i", $admin_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        return $result->fetch_assoc();
    }
    
    return false;
} 