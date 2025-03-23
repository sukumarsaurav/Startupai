<?php
// Define the base path
define('BASEPATH', realpath(dirname(__FILE__) . '/..'));

// Include the configuration file
require_once BASEPATH . '/includes/config.php';

// Get the error code from the URL
$error_code = isset($_GET['code']) ? intval($_GET['code']) : 404;
$error_message = isset($_GET['message']) ? $_GET['message'] : '';

// Set default titles and messages based on error code
switch ($error_code) {
    case 400:
        $error_title = 'Bad Request';
        $default_message = 'The server cannot process the request due to a client error.';
        break;
    case 401:
        $error_title = 'Unauthorized';
        $default_message = 'You need to be authenticated to access this resource.';
        break;
    case 403:
        $error_title = 'Forbidden';
        $default_message = 'You don\'t have permission to access this resource.';
        break;
    case 404:
        $error_title = 'Page Not Found';
        $default_message = 'The page you are looking for might have been removed or is temporarily unavailable.';
        break;
    case 500:
    default:
        $error_code = 500; // Ensure valid error code
        $error_title = 'Server Error';
        $default_message = 'Something went wrong on our end. Our technical team has been notified.';
        break;
}

// If no custom message was provided, use the default
if (empty($error_message)) {
    $error_message = $default_message;
}

// Set page variables
$page_title = "Error {$error_code} - {$error_title} | " . $site_config['site_name'];
$page_description = "Error {$error_code} - {$error_title}";
$page_keywords = "error, {$error_code}, {$error_title}";

// Include the header
include_once BASEPATH . '/components/header.php';
?>

<!-- Page Header -->
<section class="page-header bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Error <?php echo $error_code; ?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Error <?php echo $error_code; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Error Section -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="error-container py-5">
                    <h2 class="h1 text-danger mb-4"><?php echo $error_title; ?></h2>
                    <div class="error-code display-1 text-muted mb-4"><?php echo $error_code; ?></div>
                    <p class="lead mb-4"><?php echo htmlspecialchars($error_message); ?></p>
                    <p class="text-muted mb-5">Our technical team has been notified of this issue.</p>
                    
                    <div class="d-flex justify-content-center gap-3">
                        <button onclick="history.back()" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left me-2"></i>Go Back
                        </button>
                        <a href="/" class="btn btn-primary">
                            <i class="fas fa-home me-2"></i>Return to Homepage
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include the footer
include_once BASEPATH . '/components/footer.php';
?> 