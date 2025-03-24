<?php
// Set error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Fix Duplicate Variable Definitions</h1>";
echo "<p>This script removes duplicate page variable definitions in service pages.</p>";

// Directory to scan
$directory = 'pages/services/digital-marketing';

$totalFiles = 0;
$fixedFiles = 0;

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
    echo "<h3>Checking: $filename</h3>";
    
    // Read the file content
    $content = file_get_contents($file);
    $originalContent = $content;
    
    // Check if the file has duplicate variable definitions
    $hasDuplicates = checkForDuplicateVars($content);
    
    if ($hasDuplicates) {
        // Fix the duplicate variables
        $content = fixDuplicateVars($content);
        
        // Write the updated content back to the file
        file_put_contents($file, $content);
        $fixedFiles++;
        echo "<p style='color:green'>✅ Fixed duplicate variables in: $filename</p>";
    } else {
        echo "<p>No duplicate variables found.</p>";
    }
}

echo "<h2>Summary</h2>";
echo "<p>Total files checked: $totalFiles</p>";
echo "<p>Files fixed: $fixedFiles</p>";

/**
 * Check if the file has duplicate variable definitions
 * 
 * @param string $content The file content
 * @return bool True if duplicates are found, false otherwise
 */
function checkForDuplicateVars($content) {
    // Count occurrences of typical variable definitions
    $pageTitle = substr_count($content, '$pageTitle =');
    $pageDescription = substr_count($content, '$pageDescription =');
    $serviceName = substr_count($content, '$serviceName =');
    $serviceSlug = substr_count($content, '$serviceSlug =');
    
    // Check if any variable is defined more than once
    return ($pageTitle > 1 || $pageDescription > 1 || $serviceName > 1 || $serviceSlug > 1);
}

/**
 * Fix duplicate variable definitions in the file content
 * 
 * @param string $content The file content
 * @return string The updated content
 */
function fixDuplicateVars($content) {
    // Find the first occurrence of page variables section
    preg_match('/\/\/ Page specific content\s+\$pageTitle = ".*?";.*?\$serviceSlug = ".*?";/s', $content, $firstMatch);
    
    if (!empty($firstMatch)) {
        $firstDefBlock = $firstMatch[0];
        
        // Find the second occurrence
        $pos = strpos($content, $firstDefBlock);
        if ($pos !== false) {
            $secondBlockStart = strpos($content, '// Page specific content', $pos + strlen($firstDefBlock));
            
            if ($secondBlockStart !== false) {
                // Find the end of the second block
                preg_match('/\/\/ Page specific content\s+\$pageTitle = ".*?";.*?\$serviceSlug = ".*?";/s', 
                    substr($content, $secondBlockStart), 
                    $secondMatch);
                
                if (!empty($secondMatch)) {
                    $secondDefBlock = $secondMatch[0];
                    // Remove the second block
                    $content = str_replace($secondDefBlock, '', $content);
                    
                    // Also handle case where there might be extra newlines
                    $content = preg_replace('/\n\n\n+/', "\n\n", $content);
                }
            }
        }
    }
    
    return $content;
} 