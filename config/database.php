<?php
class Database {
    private $host = "localhost";
    private $db_name = "startupai";
    private $username = "root";
    private $password = "";
    private $conn;

    // Get database connection
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8");
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }

        return $this->conn;
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
    }

    // Get total number of posts
    public function getTotalPosts() {
        $query = "SELECT COUNT(*) as total FROM " . $this->table_name . " WHERE status = 'published'";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'];
    }

    // Get single post by slug
    public function getPostBySlug($slug) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE slug = :slug AND status = 'published'";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":slug", $slug);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Get posts by category
    public function getPostsByCategory($category, $page = 1, $per_page = 9) {
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
    }
}
?> 