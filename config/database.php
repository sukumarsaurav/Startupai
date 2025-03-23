<?php
class Database {
    private $host = "localhost";
    private $db_name = "u911550082_startupai";
    private $username = "u911550082_startupai";
    private $password = "r9[T!LCxpD";
    private $conn;

    // Get database connection
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8",
                $this->username,
                $this->password,
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                )
            );
        } catch(PDOException $e) {
            // Log the error
            error_log("Database Connection Error: " . $e->getMessage());
            
            // If in development mode, show the error
            if (isset($GLOBALS['is_development']) && $GLOBALS['is_development']) {
                echo "Connection error: " . $e->getMessage();
            } else {
                // In production, show a generic error
                header("Location: /pages/error.php?code=500&message=Database connection error");
                exit;
            }
        }

        return $this->conn;
    }
    
    // Execute a simple query and return the result
    public function executeQuery($sql, $params = []) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch(PDOException $e) {
            error_log("Query Error: " . $e->getMessage() . " in query: " . $sql);
            
            if (isset($GLOBALS['is_development']) && $GLOBALS['is_development']) {
                echo "Query error: " . $e->getMessage();
            } else {
                header("Location: /pages/error.php?code=500&message=Database query error");
                exit;
            }
        }
    }
}

// Blog related functions
class Blog {
    private $conn;
    private $table_name = "blog_posts";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get all blog posts
    public function getAllPosts($page = 1, $per_page = 9) {
        try {
            $start = ($page - 1) * $per_page;
            
            $query = "SELECT 
                        id, title, slug, excerpt, featured_image, 
                        author, category, published_date, 
                        meta_description, meta_keywords 
                    FROM " . $this->table_name . " 
                    WHERE status = 'published' 
                    ORDER BY published_date DESC 
                    LIMIT :start, :per_page";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":start", $start, PDO::PARAM_INT);
            $stmt->bindParam(":per_page", $per_page, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            error_log("Blog Error: " . $e->getMessage());
            return [];
        }
    }

    // Get total number of posts
    public function getTotalPosts() {
        try {
            $query = "SELECT COUNT(*) as total FROM " . $this->table_name . " WHERE status = 'published'";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row['total'];
        } catch(PDOException $e) {
            error_log("Blog Error: " . $e->getMessage());
            return 0;
        }
    }

    // Get single post by slug
    public function getPostBySlug($slug) {
        try {
            $query = "SELECT * FROM " . $this->table_name . " WHERE slug = :slug AND status = 'published'";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":slug", $slug);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            error_log("Blog Error: " . $e->getMessage());
            return false;
        }
    }

    // Get posts by category
    public function getPostsByCategory($category, $page = 1, $per_page = 9) {
        try {
            $start = ($page - 1) * $per_page;
            
            $query = "SELECT 
                        id, title, slug, excerpt, featured_image, 
                        author, category, published_date 
                    FROM " . $this->table_name . " 
                    WHERE category = :category AND status = 'published' 
                    ORDER BY published_date DESC 
                    LIMIT :start, :per_page";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":category", $category);
            $stmt->bindParam(":start", $start, PDO::PARAM_INT);
            $stmt->bindParam(":per_page", $per_page, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            error_log("Blog Error: " . $e->getMessage());
            return [];
        }
    }
}
?> 