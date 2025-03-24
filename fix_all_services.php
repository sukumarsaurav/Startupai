<?php
// Set error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "<h1>Service Page Fixer</h1>";
echo "<p>This script fixes multiple issues in service pages:</p>";
echo "<ol>";
echo "<li>Path inconsistencies (components vs includes)</li>";
echo "<li>Missing why-hire-us.php path correction</li>";
echo "<li>Standardizes page structure with variables</li>";
echo "<li>Ensures proper image paths</li>";
echo "<li>Adds serviceSlug variable where missing</li>";
echo "</ol>";

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

// Create get_faqs.php if missing
if (!file_exists('includes/get_faqs.php')) {
    createGetFaqsFile();
    echo "<p style='color:green'>✅ Created missing file: includes/get_faqs.php</p>";
}

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
        $filename = basename($file);
        echo "<h3>Checking: $filename</h3>";
        
        // Read the file content
        $content = file_get_contents($file);
        $originalContent = $content;
        
        // Get service info from filename
        $serviceSlug = pathinfo($filename, PATHINFO_FILENAME);
        $serviceName = generateServiceNameFromSlug($serviceSlug);
        $pageTitle = generatePageTitleFromServiceName($serviceName);
        $pageDescription = generateDescriptionFromServiceName($serviceName);
        
        // Fix all issues
        $content = fixIncludePaths($content);
        $content = fixServicePage($content, $serviceSlug, $serviceName, $pageTitle, $pageDescription, $directory);
        
        // Check if the content changed
        if ($content !== $originalContent) {
            // Write the updated content back to the file
            file_put_contents($file, $content);
            $updatedFiles++;
            echo "<p style='color:green'>✅ Updated file: $filename</p>";
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
    
    // Fix absolute image paths
    $content = preg_replace(
        '/src\s*=\s*[\'"]\/assets\/images\//i',
        'src="../../../assets/images/',
        $content
    );
    
    // Fix config/database.php -> includes/config.php
    $content = preg_replace(
        '/require_once\s+[\'"]\.\.\/\.\.\/\.\.\/config\/database\.php[\'"]/i',
        'require_once \'../../../includes/config.php\'',
        $content
    );
    
    return $content;
}

/**
 * Fix the overall structure of a service page
 * 
 * @param string $content The file content
 * @param string $serviceSlug The service slug
 * @param string $serviceName The service name
 * @param string $pageTitle The page title
 * @param string $pageDescription The page description
 * @param string $directory The directory the file is in
 * @return string The updated content
 */
function fixServicePage($content, $serviceSlug, $serviceName, $pageTitle, $pageDescription, $directory) {
    // Check if page variables section exists
    $hasPageVars = preg_match('/(\/\/|\/\*)\s*Page( specific)? (variables|content)/i', $content);
    
    // If not, add it after the includes
    if (!$hasPageVars) {
        $content = preg_replace(
            '/(require_once\s+[\'"]\.\.\/\.\.\/\.\.\/(?:assets\/templates\/why-hire-us-section|includes\/header)\.php[\'"]\s*;)/',
            "\n// Page specific content\n" .
            "\$pageTitle = \"$pageTitle\";\n" .
            "\$pageDescription = \"$pageDescription\";\n" .
            "\$serviceName = \"$serviceName\";\n" .
            "\$serviceSlug = \"$serviceSlug\";\n\n$1",
            $content
        );
    }
    
    // Check if serviceSlug is defined
    if (strpos($content, '$serviceSlug') === false) {
        $content = preg_replace(
            '/(\$serviceName\s*=\s*[\'"][^\'"]+[\'"];)/',
            "$1\n\$serviceSlug = \"$serviceSlug\";",
            $content
        );
    }
    
    // Replace hardcoded title and description with variables
    $content = preg_replace(
        '/<h1[^>]*>(.*?)<\/h1>/is',
        '<h1 class="display-4"><?php echo $pageTitle; ?></h1>',
        $content
    );
    
    $content = preg_replace(
        '/<p class="lead">(.*?)<\/p>/is',
        '<p class="lead"><?php echo $pageDescription; ?></p>',
        $content
    );
    
    // Replace hardcoded image alt text with variable
    $content = preg_replace(
        '/alt="[^"]*"/i',
        'alt="<?php echo $serviceName; ?>"',
        $content
    );
    
    return $content;
}

/**
 * Create the get_faqs.php file if it doesn't exist
 */
function createGetFaqsFile() {
    $content = '<?php
defined(\'BASEPATH\') or exit(\'No direct script access allowed\');

/**
 * Get FAQs for a specific service from the database
 * 
 * @param string $service_slug The service slug to get FAQs for
 * @param int $limit Optional limit to the number of FAQs returned
 * @return array Array of FAQ items
 */
function getFaqsByService($service_slug, $limit = 10) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            SELECT question, answer
            FROM faqs
            WHERE service = :service
            ORDER BY display_order ASC
            LIMIT :limit
        ");
        
        $stmt->bindParam(\':service\', $service_slug, PDO::PARAM_STR);
        $stmt->bindParam(\':limit\', $limit, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Log error but return empty array to prevent breaking the page
        error_log("Database error fetching FAQs: " . $e->getMessage());
        return [];
    }
}

/**
 * Get general FAQs not associated with a specific service
 * 
 * @param int $limit Optional limit to the number of FAQs returned
 * @return array Array of FAQ items
 */
function getGeneralFaqs($limit = 5) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            SELECT question, answer
            FROM faqs
            WHERE service = \'general\' OR service = \'\'
            ORDER BY display_order ASC
            LIMIT :limit
        ");
        
        $stmt->bindParam(\':limit\', $limit, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Log error but return empty array to prevent breaking the page
        error_log("Database error fetching general FAQs: " . $e->getMessage());
        return [];
    }
}

/**
 * Get all FAQs for a service, falling back to general FAQs if none exist
 * 
 * @param string $service_slug The service slug to get FAQs for
 * @param int $limit Optional limit to the number of FAQs returned
 * @return array Array of FAQ items
 */
function getAllFaqs($service_slug, $limit = 10) {
    $serviceFaqs = getFaqsByService($service_slug, $limit);
    
    // If no service-specific FAQs, return general FAQs
    if (empty($serviceFaqs)) {
        return getGeneralFaqs($limit);
    }
    
    return $serviceFaqs;
}';

    file_put_contents('includes/get_faqs.php', $content);
}

/**
 * Generate a service name from a slug
 * 
 * @param string $slug The slug
 * @return string The service name
 */
function generateServiceNameFromSlug($slug) {
    $name = str_replace('-', ' ', $slug);
    $name = ucwords($name);
    
    // Special cases
    $replacements = [
        'Ui Ux' => 'UI/UX',
        'Seo' => 'SEO',
        'Xd' => 'XD',
        'Ppc' => 'PPC',
    ];
    
    foreach ($replacements as $search => $replace) {
        $name = str_replace($search, $replace, $name);
    }
    
    return $name . " Design";
}

/**
 * Generate a page title from a service name
 * 
 * @param string $serviceName The service name
 * @return string The page title
 */
function generatePageTitleFromServiceName($serviceName) {
    return $serviceName . " Services";
}

/**
 * Generate a description from a service name
 * 
 * @param string $serviceName The service name
 * @return string The description
 */
function generateDescriptionFromServiceName($serviceName) {
    $descriptions = [
        'UI/UX Design' => 'Create intuitive and engaging user interfaces with our UI/UX design expertise',
        'Responsive Web Design' => 'Create websites that look and function beautifully on any device',
        'Figma Design' => 'Create scalable and collaborative design systems with Figma',
        'Adobe XD Design' => 'Create stunning user interfaces and interactive prototypes with Adobe XD',
        'SEO' => 'Improve your website visibility and ranking in search engines',
        'Content Marketing' => 'Attract and engage your target audience with valuable content',
        'Email Marketing' => 'Connect directly with your audience through personalized email campaigns',
        'Social Media' => 'Build your brand presence and engage with customers on social platforms',
        'Google Ads' => 'Drive targeted traffic to your website with strategic Google Ad campaigns',
    ];
    
    if (isset($descriptions[$serviceName])) {
        return $descriptions[$serviceName];
    }
    
    // Generic description if no specific one is found
    return "Professional {$serviceName} services tailored to your business needs";
} 