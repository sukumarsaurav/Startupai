<?php
// Prevent direct access
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Database Setup and Verification Class
 * This file handles the checking and creation of necessary database tables
 */
class DatabaseSetup {
    private $conn;
    private $tables = [
        'testimonials' => [
            'create_sql' => "CREATE TABLE IF NOT EXISTS `testimonials` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `client_name` varchar(255) NOT NULL,
                `client_position` varchar(255) DEFAULT NULL,
                `client_company` varchar(255) DEFAULT NULL,
                `testimonial_text` text NOT NULL,
                `service_category` varchar(100) DEFAULT NULL,
                `is_featured` tinyint(1) DEFAULT 0,
                `display_order` int(11) DEFAULT 0,
                `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;",
            'sample_data' => [
                "INSERT INTO `testimonials` (`client_name`, `client_position`, `client_company`, `testimonial_text`, `service_category`, `is_featured`, `display_order`) 
                SELECT 'Tejas Patel', 'CEO', 'Dental Office USA', 'Excellent work they have done so far for our company based in Texas, US. Owner is very responsive and do genuinely care about your business growth, highly recommend their SEO services and all around support !!', 'SEO & WEB Services', 1, 1
                WHERE NOT EXISTS (SELECT 1 FROM testimonials LIMIT 1);",
                
                "INSERT INTO `testimonials` (`client_name`, `client_position`, `client_company`, `testimonial_text`, `service_category`, `is_featured`, `display_order`) 
                SELECT 'Jess Cilenti', 'Writer', 'USA', 'StartupAI has been a lifesaver for my business. Incredible customer service and stellar SEO tactics. I highly recommend doing business with this company.', 'SEO Support', 1, 2
                WHERE NOT EXISTS (SELECT 1 FROM testimonials WHERE client_name = 'Jess Cilenti');"
            ]
        ]
        // Add more tables as needed
    ];

    public function __construct($connection) {
        $this->conn = $connection;
    }

    /**
     * Check if a table exists in the database
     */
    public function tableExists($tableName) {
        try {
            $result = $this->conn->query("SHOW TABLES LIKE '$tableName'");
            return $result && $result->num_rows > 0;
        } catch (Exception $e) {
            error_log("Error checking if table '$tableName' exists: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Create a table if it doesn't exist
     */
    public function createTable($tableName) {
        if (!isset($this->tables[$tableName])) {
            error_log("Table definition for '$tableName' not found.");
            return false;
        }

        try {
            // Create the table
            $this->conn->query($this->tables[$tableName]['create_sql']);
            
            // Check if the table was created
            if ($this->tableExists($tableName)) {
                error_log("Table '$tableName' created or already exists.");
                
                // Insert sample data if available
                if (isset($this->tables[$tableName]['sample_data'])) {
                    foreach ($this->tables[$tableName]['sample_data'] as $sampleSql) {
                        try {
                            $this->conn->query($sampleSql);
                        } catch (Exception $e) {
                            error_log("Error inserting sample data into '$tableName': " . $e->getMessage());
                        }
                    }
                }
                
                return true;
            }
        } catch (Exception $e) {
            error_log("Error creating table '$tableName': " . $e->getMessage());
        }
        
        return false;
    }

    /**
     * Check and create all required tables
     */
    public function checkAndCreateTables() {
        foreach ($this->tables as $tableName => $tableDefinition) {
            if (!$this->tableExists($tableName)) {
                $this->createTable($tableName);
            }
        }
    }
}

// Initialize and run the database setup
try {
    $dbSetup = new DatabaseSetup($conn);
    $dbSetup->checkAndCreateTables();
} catch (Exception $e) {
    // Log the error but don't stop execution
    error_log("Database setup error: " . $e->getMessage());
}
?> 