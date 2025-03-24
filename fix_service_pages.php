<?php
/**
 * Script to fix PHP files by adding BASEPATH constant
 * This prevents "No direct script access allowed" errors
 */

// Function to recursively scan directory for PHP files
function findPhpFiles($dir) {
    $phpFiles = [];
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }
        
        $path = $dir . '/' . $file;
        
        if (is_dir($path)) {
            $phpFiles = array_merge($phpFiles, findPhpFiles($path));
        } elseif (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
            $phpFiles[] = $path;
        }
    }
    
    return $phpFiles;
}

// Function to add BASEPATH to PHP file if not present
function addBasepathToFile($file) {
    $content = file_get_contents($file);
    
    // Skip files that don't need BASEPATH
    $skippedFiles = [
        'index.php',
        'config.php',
        'db_setup.php',
        'error_handler.php',
        'create_testimonials_table.php',
        'fix_service_pages.php'
    ];
    
    $fileName = basename($file);
    if (in_array($fileName, $skippedFiles)) {
        echo "Skipping system file: $file\n";
        return false;
    }
    
    // Check if file already has BASEPATH defined
    if (strpos($content, "define('BASEPATH'") !== false) {
        echo "BASEPATH already defined in: $file\n";
        return false;
    }
    
    // Add BASEPATH after opening PHP tag
    $newContent = preg_replace('/^<\?php(\s*)/', "<?php\n// Define base path to allow direct script access\ndefine('BASEPATH', true);\n\n", $content, 1);
    
    // Write back to file if changed
    if ($newContent !== $content) {
        file_put_contents($file, $newContent);
        echo "Added BASEPATH to: $file\n";
        return true;
    }
    
    return false;
}

// Directories to scan
$dirsToScan = [
    __DIR__ . '/pages',
    __DIR__ . '/admin/pages'
];

$totalFiles = 0;
$updatedFiles = 0;

foreach ($dirsToScan as $dir) {
    if (!is_dir($dir)) {
        echo "Directory not found: $dir\n";
        continue;
    }
    
    $phpFiles = findPhpFiles($dir);
    $totalFiles += count($phpFiles);
    
    echo "Scanning " . count($phpFiles) . " files in $dir...\n";
    
    foreach ($phpFiles as $file) {
        if (addBasepathToFile($file)) {
            $updatedFiles++;
        }
    }
}

echo "Complete! Updated $updatedFiles out of $totalFiles files.\n";
?> 