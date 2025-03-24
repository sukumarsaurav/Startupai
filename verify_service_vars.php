<?php
// Set error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Verify Service Variables</h1>";
echo "<p>This script verifies that all service pages have the required variables and they are used in the HTML.</p>";

// Directory to scan
$directory = 'pages/services/digital-marketing';

// Variables to check for
$requiredVars = [
    '$pageTitle',
    '$pageDescription',
    '$serviceName',
    '$serviceSlug'
];

// HTML usage patterns to check for
$usagePatterns = [
    '$pageTitle' => ['<title>', '<h1'],
    '$pageDescription' => ['<meta', '<p class="lead"'],
    '$serviceName' => ['alt="', 'class="service-title"'],
    '$serviceSlug' => ['id="', 'href="']
];

$totalFiles = 0;
$filesWithAllVars = 0;
$filesWithAllUsages = 0;

// Check if the directory exists
if (!is_dir($directory)) {
    echo "<p style='color:red'>Error: Directory <code>$directory</code> does not exist.</p>";
    exit;
}

// Get all PHP files in the directory
$files = glob("$directory/*.php");

foreach ($files as $file) {
    $totalFiles++;
    $filename = basename($file);
    $serviceSlug = pathinfo($filename, PATHINFO_FILENAME);
    
    echo "<h3>Checking: $filename</h3>";
    
    // Read the file content
    $content = file_get_contents($file);
    
    // Check for required variables
    $missingVars = [];
    foreach ($requiredVars as $var) {
        if (strpos($content, $var . ' =') === false) {
            $missingVars[] = $var;
        }
    }
    
    if (empty($missingVars)) {
        echo "<p style='color:green'>✅ All required variables are defined.</p>";
        $filesWithAllVars++;
    } else {
        echo "<p style='color:red'>❌ Missing variables: " . implode(', ', $missingVars) . "</p>";
    }
    
    // Check for HTML usage
    $missingUsages = [];
    foreach ($usagePatterns as $var => $patterns) {
        $found = false;
        foreach ($patterns as $pattern) {
            // Look for PHP echo with the variable name or the variable within a string
            if (strpos($content, "echo $var;") !== false || 
                strpos($content, "echo " . $var) !== false || 
                strpos($content, "<?php echo $var;") !== false || 
                strpos($content, "<?php echo " . $var) !== false || 
                strpos($content, "{$var}") !== false || 
                strpos($content, "<?" . $var . "?>") !== false) {
                $found = true;
                break;
            }
        }
        
        if (!$found) {
            $missingUsages[] = $var;
        }
    }
    
    if (empty($missingUsages)) {
        echo "<p style='color:green'>✅ All variables are used in the HTML.</p>";
        $filesWithAllUsages++;
    } else {
        echo "<p style='color:orange'>⚠️ Variables not found in HTML usage: " . implode(', ', $missingUsages) . "</p>";
    }
    
    echo "<hr>";
}

echo "<h2>Summary</h2>";
echo "<p>Total files checked: $totalFiles</p>";
echo "<p>Files with all required variables: $filesWithAllVars</p>";
echo "<p>Files with all variables used in HTML: $filesWithAllUsages</p>"; 