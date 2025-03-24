<?php
// Set error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Fix Duplicate Variable Definitions (Improved)</h1>";
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
    
    // Get service info from filename
    $serviceSlug = pathinfo($filename, PATHINFO_FILENAME);
    
    // Check if the file has duplicate variable definitions
    $hasDuplicates = checkForDuplicateVars($content);
    
    if ($hasDuplicates) {
        // Fix the duplicate variables
        $content = fixDuplicateVars($content, $serviceSlug);
        
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
 * @param string $serviceSlug The service slug to use if variables are missing
 * @return string The updated content
 */
function fixDuplicateVars($content, $serviceSlug) {
    // Generate standard variable names based on service slug
    $serviceName = ucwords(str_replace('-', ' ', $serviceSlug)) . " Design";
    $pageTitle = $serviceName . " Services";
    $pageDescription = "Professional " . $serviceName . " services tailored to your business needs";
    
    // Special cases for service names
    if ($serviceSlug === 'seo') {
        $serviceName = "SEO Design";
    } elseif ($serviceSlug === 'ui-ux-design') {
        $serviceName = "UI/UX Design";
    }
    
    // First, count the number of occurrences of the "// Page specific content" block
    $pageSpecificContentCount = substr_count($content, '// Page specific content');
    
    if ($pageSpecificContentCount > 1) {
        // Find positions of each occurrence
        $pos = 0;
        $positions = [];
        
        for ($i = 0; $i < $pageSpecificContentCount; $i++) {
            $pos = strpos($content, '// Page specific content', $pos);
            if ($pos !== false) {
                $positions[] = $pos;
                $pos++; // Move past the current occurrence
            }
        }
        
        // Keep the first occurrence, remove the rest
        if (count($positions) >= 2) {
            // Find the end of the first variable block
            $endPos1 = strpos($content, ';', $positions[0]);
            
            // Find a reasonable distance after the first block's end
            $afterFirstBlock = $endPos1 + 20; // skipping ahead a bit
            
            // Find the start of the second block
            $startPos2 = $positions[1];
            
            // Find the end of the second variable block
            // Look for either the last semicolon in the variable block or a new section
            $tempContent = substr($content, $startPos2);
            
            // Match the entire block
            preg_match('/\/\/ Page specific content.*?\$serviceSlug\s*=\s*"[^"]*";/s', $tempContent, $matches);
            
            if (!empty($matches)) {
                $secondBlock = $matches[0];
                $endPos2 = $startPos2 + strlen($secondBlock);
                
                // Remove the second block entirely
                $beforeSecondBlock = substr($content, 0, $startPos2);
                $afterSecondBlock = substr($content, $endPos2);
                
                // Merge content without the second block
                $content = $beforeSecondBlock . $afterSecondBlock;
            }
        }
    } else {
        // Only one or no occurrence found, make sure the variables exist
        // Check if the variables are defined
        $hasPageTitle = strpos($content, '$pageTitle =') !== false;
        $hasPageDescription = strpos($content, '$pageDescription =') !== false;
        $hasServiceName = strpos($content, '$serviceName =') !== false;
        $hasServiceSlug = strpos($content, '$serviceSlug =') !== false;
        
        if (!$hasPageTitle || !$hasPageDescription || !$hasServiceName || !$hasServiceSlug) {
            // Variables are missing, add them after includes
            $varsBlock = "
// Page specific content
\$pageTitle = \"$pageTitle\";
\$pageDescription = \"$pageDescription\";
\$serviceName = \"$serviceName\";
\$serviceSlug = \"$serviceSlug\";
";
            
            // Find a position to insert after includes
            $posConfig = strpos($content, "require_once '../../../includes/config.php';");
            $posHeader = strpos($content, "require_once '../../../includes/header.php';");
            
            if ($posHeader !== false) {
                // Insert before header include
                $content = substr_replace($content, $varsBlock, $posHeader, 0);
            } elseif ($posConfig !== false) {
                // Insert after config include
                $endPosConfig = $posConfig + strlen("require_once '../../../includes/config.php';");
                $content = substr_replace($content, $varsBlock, $endPosConfig, 0);
            }
        }
    }
    
    return $content;
} 