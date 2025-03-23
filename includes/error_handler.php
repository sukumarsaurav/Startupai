<?php
// Prevent direct access
defined('BASEPATH') or exit('No direct script access allowed');

// Development Environment - Set to true for development, false for production
$is_development = true;

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

// Custom error handler function
function custom_error_handler($errno, $errstr, $errfile, $errline) {
    if (!(error_reporting() & $errno)) {
        // This error code is not included in error_reporting
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
    
    if ($is_development) {
        echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #f5c6cb;'>";
        echo "<strong>$error_type:</strong> $errstr<br />";
        echo "File: $errfile, Line: $errline<br />";
        
        // Add stack trace for more serious errors
        if (in_array($errno, [E_ERROR, E_USER_ERROR, E_RECOVERABLE_ERROR])) {
            echo "<br /><strong>Stack Trace:</strong><br />";
            debug_print_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
        }
        
        echo "</div>";
    } else {
        // Log the error instead of displaying it
        error_log("[$error_type] $errstr in $errfile on line $errline");
    }

    // Don't execute PHP's internal error handler
    return true;
}

// Set custom error handler
set_error_handler("custom_error_handler");

// Function to handle uncaught exceptions
function exception_handler($exception) {
    global $is_development;
    
    if ($is_development) {
        echo "<div style='background-color: #f8d7da; color: #721c24; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #f5c6cb;'>";
        echo "<strong>Uncaught Exception:</strong> " . $exception->getMessage() . "<br />";
        echo "File: " . $exception->getFile() . ", Line: " . $exception->getLine() . "<br />";
        echo "<br /><strong>Stack Trace:</strong><br />";
        echo nl2br($exception->getTraceAsString());
        echo "</div>";
    } else {
        // Log the exception instead of displaying it
        error_log("Uncaught Exception: " . $exception->getMessage() . " in " . $exception->getFile() . " on line " . $exception->getLine());
    }
}

// Set custom exception handler
set_exception_handler("exception_handler");

// Create logs directory if it doesn't exist
if (!file_exists(__DIR__ . '/../logs') && !$is_development) {
    mkdir(__DIR__ . '/../logs', 0755, true);
}
?> 