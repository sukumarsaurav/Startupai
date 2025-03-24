<?php
/*
 * Hostinger Socket Path Fix
 * 
 * This script helps diagnose and fix MySQL socket connection issues on Hostinger shared hosting.
 * Upload to your website and access it once to automatically determine the correct socket path.
 * The script will update your config.php file with the correct path if needed.
 * 
 * IMPORTANT: Delete this file after successful connection!
 */

// Verify we're on Hostinger hosting
if (!strpos($_SERVER['SERVER_NAME'], 'hostinger')) {
    echo "<p>This fix is intended for Hostinger hosting environments. You appear to be on a different hosting platform.</p>";
    exit;
}

// Security check - uncomment and set a custom password if needed
/*
if (!isset($_GET['password']) || $_GET['password'] !== 'your_secret_password') {
    echo "<p>Access denied. This script requires authentication.</p>";
    exit;
}
*/

// Define constants
define('BASEPATH', true);
define('CONFIG_FILE', __DIR__ . '/includes/config.php');

// Show header
echo "<!DOCTYPE html>
<html>
<head>
    <title>Hostinger MySQL Connection Fix</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; max-width: 800px; margin: 0 auto; }
        h1 { color: #333; }
        .success { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
        .warning { color: orange; font-weight: bold; }
        code { background: #f4f4f4; padding: 2px 4px; border-radius: 3px; }
        pre { background: #f8f8f8; padding: 10px; border-radius: 4px; overflow: auto; }
        .actions { margin-top: 20px; padding-top: 10px; border-top: 1px solid #eee; }
    </style>
</head>
<body>
    <h1>Hostinger MySQL Connection Fix</h1>";

// Check if config file exists
if (!file_exists(CONFIG_FILE)) {
    echo "<p class='error'>Config file not found at " . CONFIG_FILE . "</p>";
    echo "<p>Please verify the path to your config.php file.</p>";
    exit;
}

// Check if file is readable and writable
if (!is_readable(CONFIG_FILE)) {
    echo "<p class='error'>Config file is not readable.</p>";
    echo "<p>Please set proper permissions: <code>chmod 644 " . CONFIG_FILE . "</code></p>";
    exit;
}

if (!is_writable(CONFIG_FILE)) {
    echo "<p class='error'>Config file is not writable.</p>";
    echo "<p>Please set proper permissions: <code>chmod 644 " . CONFIG_FILE . "</code></p>";
    exit;
}

// Function to check MySQL connection with a specific socket path
function testMySQLConnection($host, $user, $pass, $db, $socket = '') {
    try {
        if (empty($socket)) {
            $mysqli = new mysqli($host, $user, $pass, $db);
        } else {
            $mysqli = new mysqli($host, $user, $pass, $db, 3306, $socket);
        }
        
        if ($mysqli->connect_error) {
            return [false, $mysqli->connect_error];
        }
        
        // Test a simple query
        $result = $mysqli->query("SELECT 1 as test");
        if (!$result) {
            return [false, "Query failed: " . $mysqli->error];
        }
        
        $mysqli->close();
        return [true, "Connection successful"];
    } catch (Exception $e) {
        return [false, $e->getMessage()];
    }
}

// Function to get config variables from file content
function extractConfigVar($content, $varName) {
    preg_match('/\$' . $varName . '\s*=\s*[\'"](.*?)[\'"]\s*;/', $content, $matches);
    return isset($matches[1]) ? $matches[1] : null;
}

// Read config file
$configContent = file_get_contents(CONFIG_FILE);

// Extract database connection details
$dbHost = extractConfigVar($configContent, 'db_host');
$dbUser = extractConfigVar($configContent, 'db_user');
$dbPass = extractConfigVar($configContent, 'db_pass');
$dbName = extractConfigVar($configContent, 'db_name');

echo "<h2>Database Configuration</h2>";
echo "<p>Host: <code>" . htmlspecialchars($dbHost) . "</code></p>";
echo "<p>Database: <code>" . htmlspecialchars($dbName) . "</code></p>";
echo "<p>Username: <code>" . htmlspecialchars($dbUser) . "</code></p>";
echo "<p>Password: <code>********</code></p>";

// Test without specifying socket (default)
echo "<h2>Testing Default Connection</h2>";
list($defaultSuccess, $defaultMessage) = testMySQLConnection($dbHost, $dbUser, $dbPass, $dbName);

if ($defaultSuccess) {
    echo "<p class='success'>✓ Default connection successful!</p>";
    echo "<p>No fixes needed. Your database is already working correctly.</p>";
    echo "<div class='actions'>";
    echo "<p><strong>Next steps:</strong></p>";
    echo "<ol>";
    echo "<li>Delete this file from your server for security.</li>";
    echo "<li>Return to your website to verify it's working correctly.</li>";
    echo "</ol>";
    echo "</div>";
    exit;
} else {
    echo "<p class='error'>✗ Default connection failed: " . htmlspecialchars($defaultMessage) . "</p>";
}

// Try common Hostinger socket paths
$socketPaths = [
    '/var/run/mysqld/mysqld.sock',
    '/tmp/mysql.sock',
    '/var/lib/mysql/mysql.sock',
    '/run/mysqld/mysqld.sock',
];

echo "<h2>Testing Alternative Socket Paths</h2>";
$successfulSocket = null;

foreach ($socketPaths as $socket) {
    echo "<p>Testing socket: <code>" . htmlspecialchars($socket) . "</code>... ";
    list($success, $message) = testMySQLConnection($dbHost, $dbUser, $dbPass, $dbName, $socket);
    
    if ($success) {
        echo "<span class='success'>SUCCESS!</span></p>";
        $successfulSocket = $socket;
        break;
    } else {
        echo "<span class='error'>FAILED</span> - " . htmlspecialchars($message) . "</p>";
    }
}

// If none of the predefined sockets worked, try to find the socket from PHP info
if (!$successfulSocket) {
    echo "<h2>Detecting MySQL Socket from PHP Configuration</h2>";
    
    ob_start();
    phpinfo(INFO_MODULES);
    $phpinfo = ob_get_clean();
    
    // Try to find socket path from phpinfo
    if (preg_match('/mysqli\.default_socket\s*=>\s*([^ ]+)/', $phpinfo, $matches)) {
        $detectedSocket = $matches[1];
        echo "<p>Detected socket from PHP configuration: <code>" . htmlspecialchars($detectedSocket) . "</code></p>";
        
        echo "<p>Testing detected socket... ";
        list($success, $message) = testMySQLConnection($dbHost, $dbUser, $dbPass, $dbName, $detectedSocket);
        
        if ($success) {
            echo "<span class='success'>SUCCESS!</span></p>";
            $successfulSocket = $detectedSocket;
        } else {
            echo "<span class='error'>FAILED</span> - " . htmlspecialchars($message) . "</p>";
        }
    } else {
        echo "<p class='error'>Could not detect MySQL socket from PHP configuration.</p>";
    }
}

// Apply the fix if a working socket was found
if ($successfulSocket) {
    echo "<h2>Applying Fix</h2>";
    
    // Check if db_socket variable already exists
    if (strpos($configContent, '$db_socket') !== false) {
        // Update existing socket variable
        $updatedContent = preg_replace(
            '/\$db_socket\s*=\s*[\'"].*?[\'"]\s*;/', 
            '$db_socket = \'' . $successfulSocket . '\'; // Updated by hostinger_fix.php', 
            $configContent
        );
    } else {
        // Add socket variable after db_name
        $updatedContent = preg_replace(
            '/(\$db_name\s*=\s*[\'"].*?[\'"]\s*;)/', 
            '$1' . PHP_EOL . '$db_port = 3306; // Default MySQL port' . PHP_EOL . 
            '$db_socket = \'' . $successfulSocket . '\'; // Added by hostinger_fix.php', 
            $configContent
        );
    }
    
    // Write the updated content back to the file
    if (file_put_contents(CONFIG_FILE, $updatedContent)) {
        echo "<p class='success'>✓ Config file updated successfully with socket path: <code>" . htmlspecialchars($successfulSocket) . "</code></p>";
        
        // Check if we need to update the mysqli connection code
        if (strpos($configContent, 'new mysqli($db_host, $db_user, $db_pass, $db_name)') !== false) {
            // Update the mysqli connection to include socket
            $finalContent = preg_replace(
                '/new mysqli\(\$db_host, \$db_user, \$db_pass, \$db_name\)/', 
                'new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port, $db_socket)', 
                $updatedContent
            );
            
            if (file_put_contents(CONFIG_FILE, $finalContent)) {
                echo "<p class='success'>✓ MySQL connection code updated to use the socket parameter.</p>";
            } else {
                echo "<p class='error'>✗ Failed to update MySQL connection code.</p>";
            }
        }
        
        echo "<div class='actions'>";
        echo "<p><strong>Next steps:</strong></p>";
        echo "<ol>";
        echo "<li><a href='/' target='_blank'>Test your website</a> to verify it's working correctly.</li>";
        echo "<li>Delete this file from your server for security.</li>";
        echo "</ol>";
        echo "</div>";
    } else {
        echo "<p class='error'>✗ Failed to write to config file. Please check permissions.</p>";
    }
} else {
    echo "<h2>Manual Fix Required</h2>";
    echo "<p class='warning'>No working socket path was found automatically.</p>";
    echo "<p>You may need to contact Hostinger support to determine the correct MySQL socket path for your account.</p>";
    
    echo "<p>Once you have the correct socket path, update your config.php file manually:</p>";
    echo "<pre>";
    echo htmlspecialchars('// In ' . CONFIG_FILE . "\n");
    echo htmlspecialchars('$db_host = \'' . $dbHost . '\';' . "\n");
    echo htmlspecialchars('$db_user = \'' . $dbUser . '\';' . "\n");
    echo htmlspecialchars('$db_pass = \'********\';' . "\n");
    echo htmlspecialchars('$db_name = \'' . $dbName . '\';' . "\n");
    echo htmlspecialchars('$db_port = 3306;' . "\n");
    echo htmlspecialchars('$db_socket = \'/path/to/mysql/socket\'; // Replace with the correct socket path' . "\n\n");
    echo htmlspecialchars('// Then update the connection line to:' . "\n");
    echo htmlspecialchars('$conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port, $db_socket);');
    echo "</pre>";
}

echo "<h2>Technical Information</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>MySQL Client Info: " . (function_exists('mysqli_get_client_info') ? mysqli_get_client_info() : 'Not available') . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "</body></html>";
?> 