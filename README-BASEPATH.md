# BASEPATH Constant in StartupAI Website

## Problem

The website uses a direct access protection mechanism through the `BASEPATH` constant, which can cause **"No direct script access allowed"** errors if not properly defined. This error happens when a PHP file that's meant to be included is accessed directly through a URL.

## Solution

All PHP files that can be accessed directly via a URL (e.g., service pages, blog posts, etc.) should define the `BASEPATH` constant at the top:

```php
<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Rest of your code...
```

## Fixed Issues

This protective measure is implemented in files like:
- `includes/config.php`
- `includes/error_handler.php`
- `includes/db_setup.php`

These files check for the presence of the constant with:
```php
defined('BASEPATH') or exit('No direct script access allowed');
```

## Tools

The `fix_service_pages.php` script was created to automatically add the `BASEPATH` constant to service pages that were missing it.

## Templates

A template for creating new service pages has been added at:
- `assets/templates/service-page-template.php`

Always start from this template when creating new service pages to ensure the `BASEPATH` constant is included.

## Making Changes to Protected Files

If you need to modify a file that has the `BASEPATH` protection, you should:

1. Never access the file directly through a URL
2. Always include it from another file that defines the `BASEPATH` constant
3. When creating a new PHP file that might be directly accessed, always define the `BASEPATH` constant

## Further Recommendations

- Maintain a consistent directory structure
- Follow the established patterns for including files
- Use the provided templates for creating new pages
- Run the `fix_service_pages.php` script if you encounter "No direct script access allowed" errors

By following these guidelines, you'll avoid the "No direct script access allowed" errors in the future. 