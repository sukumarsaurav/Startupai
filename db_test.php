<?php
// Define the base path constant required by config.php
define('BASEPATH', true);

// Enable detailed error reporting for testing
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the config file
require_once 'includes/config.php';

echo "<h1>Database Connection Test</h1>";

// Test if connection is working
if (isset($conn)) {
    echo "<p style='color:green;'>✓ Database connection object created successfully.</p>";
    
    // Additional tests for the connection object
    if ($conn instanceof mysqli) {
        echo "<p>Using native mysqli connection.</p>";
        
        // Test a simple query
        try {
            $result = $conn->query("SELECT 1 as test");
            if ($result && $result->num_rows > 0) {
                echo "<p style='color:green;'>✓ Query test successful.</p>";
            } else {
                echo "<p style='color:red;'>✗ Query test failed.</p>";
            }
        } catch (Exception $e) {
            echo "<p style='color:red;'>✗ Query error: " . $e->getMessage() . "</p>";
        }
    } 
    elseif ($conn instanceof MySQLiCompat) {
        echo "<p>Using PDO with mysqli compatibility layer.</p>";
        
        // Test a simple query
        try {
            $result = $conn->query("SELECT 1 as test");
            if ($result && $result->num_rows > 0) {
                echo "<p style='color:green;'>✓ Query test successful.</p>";
            } else {
                echo "<p style='color:red;'>✗ Query test failed.</p>";
            }
        } catch (Exception $e) {
            echo "<p style='color:red;'>✗ Query error: " . $e->getMessage() . "</p>";
        }
    }
    else {
        echo "<p style='color:orange;'>⚠ Connection object type: " . get_class($conn) . "</p>";
    }
    
    // Test database setup
    echo "<h2>Database Tables Check</h2>";
    if (class_exists('DatabaseSetup')) {
        $dbSetup = new DatabaseSetup($conn);
        
        // Check if testimonials table exists
        if ($dbSetup->tableExists('testimonials')) {
            echo "<p style='color:green;'>✓ Table 'testimonials' exists.</p>";
        } else {
            echo "<p style='color:red;'>✗ Table 'testimonials' not found.</p>";
            
            // Try to create the table
            echo "<p>Attempting to create 'testimonials' table...</p>";
            if ($dbSetup->createTable('testimonials')) {
                echo "<p style='color:green;'>✓ Table 'testimonials' created successfully.</p>";
            } else {
                echo "<p style='color:red;'>✗ Failed to create 'testimonials' table.</p>";
            }
        }
    } else {
        echo "<p style='color:red;'>✗ DatabaseSetup class not available.</p>";
    }
    
} else {
    echo "<p style='color:red;'>✗ Database connection object not created!</p>";
}

// Display server environment info (useful for debugging)
echo "<h2>Server Environment</h2>";
echo "<p>PHP Version: " . PHP_VERSION . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>MySQL Client Info: " . ($conn instanceof mysqli ? $conn->client_info : 'N/A') . "</p>";

// Show MySQLi extension status
if (extension_loaded('mysqli')) {
    echo "<p style='color:green;'>✓ MySQLi extension is loaded.</p>";
} else {
    echo "<p style='color:red;'>✗ MySQLi extension is NOT loaded.</p>";
}

// Show PDO extension status 
if (extension_loaded('pdo_mysql')) {
    echo "<p style='color:green;'>✓ PDO MySQL extension is loaded.</p>";
} else {
    echo "<p style='color:red;'>✗ PDO MySQL extension is NOT loaded.</p>";
}

// Show configuration details (sanitized for security)
echo "<h2>Database Configuration</h2>";
echo "<p>Host: " . $db_host . "</p>";
echo "<p>Database: " . $db_name . "</p>";
echo "<p>Username: " . $db_user . "</p>";
echo "<p>Port: " . $db_port . "</p>";
// Don't display the actual password
echo "<p>Password: ********</p>";
?> 