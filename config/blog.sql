-- Create database
CREATE DATABASE IF NOT EXISTS startupai;
USE startupai;

-- Create blog_posts table
CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content TEXT NOT NULL,
    excerpt TEXT,
    featured_image VARCHAR(255),
    author VARCHAR(100),
    category VARCHAR(100),
    status ENUM('draft', 'published') DEFAULT 'draft',
    published_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    meta_description VARCHAR(255),
    meta_keywords VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_slug (slug),
    INDEX idx_category (category),
    INDEX idx_status (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create blog_categories table
CREATE TABLE IF NOT EXISTS blog_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample categories
INSERT INTO blog_categories (name, slug, description) VALUES
('Web Development', 'web-development', 'Articles about web development technologies and best practices'),
('Digital Marketing', 'digital-marketing', 'Tips and strategies for digital marketing'),
('AI & Machine Learning', 'ai-machine-learning', 'Latest updates in AI and machine learning'),
('Business Growth', 'business-growth', 'Insights for growing your business online');

-- Insert sample blog posts
INSERT INTO blog_posts (title, slug, content, excerpt, author, category, status, meta_description, meta_keywords) VALUES
('10 Essential SEO Tips for 2024', '10-essential-seo-tips-2024', 
'[Your detailed content here...]', 
'Discover the most effective SEO strategies that will help your website rank better in 2024.',
'John Doe', 
'Digital Marketing',
'published',
'Learn about the top 10 SEO tips that will improve your website ranking in 2024. Essential strategies for better search visibility.',
'SEO tips, search engine optimization, website ranking, SEO strategy 2024'); 