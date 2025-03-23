<?php
// Prevent direct access
defined('BASEPATH') or exit('No direct script access allowed');

// Development Environment - Set to true for development, false for production
$is_development = true;

// Create logs directory if it doesn't exist
if (!file_exists(__DIR__ . '/../logs')) {
    mkdir(__DIR__ . '/../logs', 0755, true);
}

// Enable error reporting based on environment
if ($is_development) {
    // Display all errors in development
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    // Log errors but don't display them in production
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
    
    // Ensure error logging is enabled
    ini_set('log_errors', 1);
    
    // Set error log file (make sure this path is writable)
    ini_set('error_log', __DIR__ . '/../logs/php_errors.log');
}

// Flag to prevent error redirection loops
$GLOBALS['handling_error'] = false;

// Custom error handler function
function custom_error_handler($errno, $errstr, $errfile, $errline) {
    // If we're already handling an error, don't try to handle another one to prevent loops
    if ($GLOBALS['handling_error']) {
        return false;
    }
    
    $GLOBALS['handling_error'] = true;
    
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting
        $GLOBALS['handling_error'] = false;
        return false;
    }

    // Get the error type string
    switch ($errno) {
        case E_ERROR:
            $error_type = "Fatal Error";
            break;
        case E_WARNING:
            $error_type = "Warning";
            break;
        case E_PARSE:
            $error_type = "Parse Error";
            break;
        case E_NOTICE:
            $error_type = "Notice";
            break;
        case E_CORE_ERROR:
            $error_type = "Core Error";
            break;
        case E_CORE_WARNING:
            $error_type = "Core Warning";
            break;
        case E_COMPILE_ERROR:
            $error_type = "Compile Error";
            break;
        case E_COMPILE_WARNING:
            $error_type = "Compile Warning";
            break;
        case E_USER_ERROR:
            $error_type = "User Error";
            break;
        case E_USER_WARNING:
            $error_type = "User Warning";
            break;
        case E_USER_NOTICE:
            $error_type = "User Notice";
            break;
        case E_STRICT:
            $error_type = "Strict Standards";
            break;
        case E_RECOVERABLE_ERROR:
            $error_type = "Recoverable Error";
            break;
        case E_DEPRECATED:
            $error_type = "Deprecated";
            break;
        case E_USER_DEPRECATED:
            $error_type = "User Deprecated";
            break;
        default:
            $error_type = "Unknown Error ($errno)";
            break;
    }

    global $is_development;
    
    // Check if this is a missing table error (commonly happens during initial setup)
    $is_missing_table_error = (strpos($errstr, "Table") !== false && strpos($errstr, "doesn't exist") !== false);
    
    if ($is_development || $is_missing_table_error) {
        echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #f5c6cb;'>";
        echo "<strong>$error_type:</strong> $errstr<br />";
        echo "File: $errfile, Line: $errline<br />";
        
        // Add stack trace for more serious errors
        if (in_array($errno, [E_ERROR, E_USER_ERROR, E_RECOVERABLE_ERROR])) {
            echo "<br /><strong>Stack Trace:</strong><br />";
            debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        }
        
        // For missing table errors, suggest running the setup script
        if ($is_missing_table_error) {
            echo "<br /><strong>Suggestion:</strong> A database table is missing. Try running the setup script to create it.<br />";
        }
        
        echo "</div>";
    } else {
        // Log the error instead of displaying it
        error_log("[$error_type] $errstr in $errfile on line $errline");
        
        // Only redirect for major errors
        if (in_array($errno, [E_ERROR, E_USER_ERROR]) && !headers_sent()) {
            header("Location: /pages/error.php?code=500&message=" . urlencode("A server error occurred."));
            exit;
        }
    }

    $GLOBALS['handling_error'] = false;
    // Don't execute PHP's internal error handler
    return true;
}

// Set custom error handler
set_error_handler("custom_error_handler");

// Function to handle uncaught exceptions
function exception_handler($exception) {
    // If we're already handling an error, don't try to handle another one to prevent loops
    if ($GLOBALS['handling_error']) {
        return;
    }
    
    $GLOBALS['handling_error'] = true;
    
    global $is_development;
    
    // Get the exception message
    $message = $exception->getMessage();
    
    // Check if this is a missing table error
    $is_missing_table_error = (strpos($message, "Table") !== false && strpos($message, "doesn't exist") !== false);
    
    if ($is_development || $is_missing_table_error) {
        echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #f5c6cb;'>";
        echo "<strong>Uncaught Exception:</strong> " . $message . "<br />";
        echo "File: " . $exception->getFile() . ", Line: " . $exception->getLine() . "<br />";
        echo "<br /><strong>Stack Trace:</strong><br />";
        echo nl2br($exception->getTraceAsString());
        
        // For missing table errors, suggest running the setup script
        if ($is_missing_table_error) {
            echo "<br /><br /><strong>Suggestion:</strong> A database table is missing. Try running the setup script to create it.<br />";
        }
        
        echo "</div>";
    } else {
        // Log the exception instead of displaying it
        error_log("Uncaught Exception: " . $message . " in " . $exception->getFile() . " on line " . $exception->getLine());
        
        // Only redirect if headers not sent
        if (!headers_sent()) {
            header("Location: /pages/error.php?code=500&message=" . urlencode("An application error occurred."));
            exit;
        }
    }
    
    $GLOBALS['handling_error'] = false;
}

// Set custom exception handler
set_exception_handler("exception_handler");
?> 