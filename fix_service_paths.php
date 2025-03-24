<?php
// Set error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Service Page Path Fixing Script</h1>";
echo "<p>This script fixes path inconsistencies in service pages.</p>";

// Define the service directories to scan
$serviceDirectories = [
    'pages/services/web-design',
    'pages/services/web-development',
    'pages/services/digital-marketing',
    'pages/services/content-creation',
    'pages/services/graphic-design',
    // Add more service categories as needed
];

$totalFiles = 0;
$updatedFiles = 0;

// Process each directory
foreach ($serviceDirectories as $directory) {
    if (!is_dir($directory)) {
        echo "<p>Warning: Directory <code>$directory</code> does not exist. Skipping.</p>";
        continue;
    }

    echo "<h2>Processing directory: $directory</h2>";
    
    // Get all PHP files in the directory
    $files = glob("$directory/*.php");
    
    foreach ($files as $file) {
        $totalFiles++;
        echo "<h3>Checking: " . basename($file) . "</h3>";
        
        // Read the file content
        $content = file_get_contents($file);
        $originalContent = $content;
        
        // Fix path issues
        $content = fixIncludePaths($content);
        
        // Check if the content changed
        if ($content !== $originalContent) {
            // Write the updated content back to the file
            file_put_contents($file, $content);
            $updatedFiles++;
            echo "<p style='color:green'>✅ Updated file: " . basename($file) . "</p>";
        } else {
            echo "<p>No changes needed.</p>";
        }
    }
}

echo "<h2>Summary</h2>";
echo "<p>Total files checked: $totalFiles</p>";
echo "<p>Files updated: $updatedFiles</p>";

/**
 * Fix include paths in the file content
 * 
 * @param string $content The file content
 * @return string The updated content
 */
function fixIncludePaths($content) {
    // Fix includes/why-hire-us.php -> config/why-hire-us.php
    $content = preg_replace(
        '/require_once\s+[\'"]\.\.\/\.\.\/\.\.\/includes\/why-hire-us\.php[\'"]/i',
        'require_once \'../../../config/why-hire-us.php\'',
        $content
    );
    
    // Fix components/header.php -> includes/header.php
    $content = preg_replace(
        '/(?:include_once|require_once|include|require)\s+[\'"]\.\.\/\.\.\/\.\.\/components\/header\.php[\'"]/i',
        'require_once \'../../../includes/header.php\'',
        $content
    );
    
    // Fix components/footer.php -> includes/footer.php
    $content = preg_replace(
        '/(?:include_once|require_once|include|require)\s+[\'"]\.\.\/\.\.\/\.\.\/components\/footer\.php[\'"]/i',
        'require_once \'../../../includes/footer.php\'',
        $content
    );
    
    // Ensure service slug is defined for FAQ section
    if (strpos($content, '$serviceSlug') === false && strpos($content, 'renderFaqSection') !== false) {
        // Extract service name if available
        preg_match('/\$serviceName\s*=\s*[\'"]([^\'"]+)[\'"]/i', $content, $matches);
        if (!empty($matches)) {
            $serviceName = $matches[1];
            $serviceSlug = strtolower(str_replace(' ', '-', $serviceName));
            
            // Add service slug after service name
            $content = preg_replace(
                '/(\$serviceName\s*=\s*[\'"][^\'"]+[\'"];)/i',
                '$1' . PHP_EOL . '$serviceSlug = "' . $serviceSlug . '";',
                $content
            );
        }
    }
    
    return $content;
} 