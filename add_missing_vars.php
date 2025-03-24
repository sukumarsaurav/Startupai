<?php
// Set error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Add Missing Variables to Service Pages</h1>";
echo "<p>This script adds missing variable definitions to service pages.</p>";

// Directory to scan
$directory = 'pages/services/digital-marketing';

// Define variable templates for each service page
$serviceVars = [
    'content-marketing' => [
        'pageTitle' => "Content Marketing Services",
        'pageDescription' => "Attract and engage your target audience with valuable content",
        'serviceName' => "Content Marketing",
        'serviceSlug' => "content-marketing"
    ],
    'email-marketing' => [
        'pageTitle' => "Email Marketing Services",
        'pageDescription' => "Connect directly with your audience through personalized email campaigns",
        'serviceName' => "Email Marketing",
        'serviceSlug' => "email-marketing"
    ],
    'google-ads' => [
        'pageTitle' => "Google Ads Services",
        'pageDescription' => "Drive targeted traffic to your website with strategic Google Ad campaigns",
        'serviceName' => "Google Ads",
        'serviceSlug' => "google-ads"
    ],
    'seo' => [
        'pageTitle' => "SEO Services",
        'pageDescription' => "Improve your website visibility and ranking in search engines",
        'serviceName' => "SEO",
        'serviceSlug' => "seo"
    ],
    'social-media' => [
        'pageTitle' => "Social Media Marketing Services",
        'pageDescription' => "Build your brand presence and engage with customers on social platforms",
        'serviceName' => "Social Media Marketing",
        'serviceSlug' => "social-media"
    ]
];

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
    $serviceSlug = pathinfo($filename, PATHINFO_FILENAME);
    
    echo "<h3>Checking: $filename</h3>";
    
    // Skip if no template defined for this service
    if (!isset($serviceVars[$serviceSlug])) {
        echo "<p style='color:orange'>⚠️ No variable template defined for $serviceSlug. Skipping.</p>";
        continue;
    }
    
    // Read the file content
    $content = file_get_contents($file);
    $originalContent = $content;
    
    // Check if variables already exist
    $hasVariables = strpos($content, '$pageTitle =') !== false &&
                    strpos($content, '$pageDescription =') !== false &&
                    strpos($content, '$serviceName =') !== false &&
                    strpos($content, '$serviceSlug =') !== false;
    
    // Remove duplicate variable blocks if they exist
    if (substr_count($content, '// Page specific content') > 1) {
        $content = removeExtraVarBlocks($content);
    }
    
    // Add variables if they don't exist
    if (!$hasVariables) {
        $varsTemplate = $serviceVars[$serviceSlug];
        
        $varsBlock = "
// Page specific content
\$pageTitle = \"{$varsTemplate['pageTitle']}\";
\$pageDescription = \"{$varsTemplate['pageDescription']}\";
\$serviceName = \"{$varsTemplate['serviceName']}\";
\$serviceSlug = \"{$varsTemplate['serviceSlug']}\";
";
        
        // Find a position to insert after includes and before header
        $posIncludes = strpos($content, "require_once '../../../config/why-hire-us.php';");
        if ($posIncludes !== false) {
            $endPosIncludes = $posIncludes + strlen("require_once '../../../config/why-hire-us.php';");
            $content = substr_replace($content, $varsBlock, $endPosIncludes, 0);
        }
    }
    
    // Update or add variable values
    foreach ($serviceVars[$serviceSlug] as $var => $value) {
        $pattern = '/\$' . $var . '\s*=\s*"[^"]*"/';
        $replacement = '$' . $var . ' = "' . $value . '"';
        
        if (preg_match($pattern, $content)) {
            $content = preg_replace($pattern, $replacement, $content);
        }
    }
    
    // Write the updated content back to the file if changes were made
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        $fixedFiles++;
        echo "<p style='color:green'>✅ Updated variables in: $filename</p>";
    } else {
        echo "<p>No changes needed.</p>";
    }
}

echo "<h2>Summary</h2>";
echo "<p>Total files checked: $totalFiles</p>";
echo "<p>Files updated: $fixedFiles</p>";

/**
 * Remove extra variable blocks in the file content
 * 
 * @param string $content The file content
 * @return string The updated content
 */
function removeExtraVarBlocks($content) {
    // Find positions of each occurrence of "// Page specific content"
    $pos = 0;
    $positions = [];
    
    // Count occurrences
    $pageSpecificContentCount = substr_count($content, '// Page specific content');
    
    for ($i = 0; $i < $pageSpecificContentCount; $i++) {
        $pos = strpos($content, '// Page specific content', $pos);
        if ($pos !== false) {
            $positions[] = $pos;
            $pos++; // Move past the current occurrence
        }
    }
    
    // Keep the first occurrence, remove the rest
    if (count($positions) >= 2) {
        // Process in reverse order to avoid position shifts
        for ($i = count($positions) - 1; $i > 0; $i--) {
            $startPos = $positions[$i];
            
            // Find the end of this variable block
            preg_match('/\/\/ Page specific content.*?\$serviceSlug\s*=\s*"[^"]*";/s', 
                substr($content, $startPos), 
                $matches);
            
            if (!empty($matches)) {
                $blockToRemove = $matches[0];
                $endPos = $startPos + strlen($blockToRemove);
                
                // Remove this block
                $content = substr($content, 0, $startPos) . substr($content, $endPos);
            }
        }
    }
    
    return $content;
} 