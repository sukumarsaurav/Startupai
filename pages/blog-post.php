<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../config/database.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();
$blog = new Blog($db);

// Get the slug from the URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Get post data
$post = $blog->getPostBySlug($slug);

// If post not found, redirect to blog listing
if (!$post) {
    header('Location: /blog');
    exit();
}

// Set SEO data for the post
$seo_data = [
    'title' => $post['title'] . ' | StartupAI Blog',
    'description' => $post['meta_description'],
    'keywords' => $post['meta_keywords']
];

require_once '../components/header.php';
?>

<!-- Blog Post Header -->
<section class="blog-post-header py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                        <li class="breadcrumb-item">
                            <a href="/blog?category=<?php echo urlencode($post['category']); ?>">
                                <?php echo htmlspecialchars($post['category']); ?>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php echo htmlspecialchars($post['title']); ?>
                        </li>
                    </ol>
                </nav>
                
                <h1 class="display-4 mb-4"><?php echo htmlspecialchars($post['title']); ?></h1>
                
                <div class="blog-meta mb-4">
                    <span class="badge bg-primary me-2"><?php echo htmlspecialchars($post['category']); ?></span>
                    <span class="text-muted me-3">
                        <i class="far fa-calendar-alt me-1"></i>
                        <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                    </span>
                    <span class="text-muted">
                        <i class="far fa-user me-1"></i>
                        By <?php echo htmlspecialchars($post['author']); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
<?php if ($post['featured_image']): ?>
<section class="blog-featured-image py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <img src="<?php echo htmlspecialchars($post['featured_image']); ?>"
                     class="img-fluid rounded"
                     alt="<?php echo htmlspecialchars($post['title']); ?>">
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Blog Content -->
<section class="blog-content py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article class="blog-post-content">
                    <?php echo $post['content']; ?>
                </article>
                
                <!-- Social Share -->
                <div class="social-share mt-5">
                    <h5>Share this article</h5>
                    <div class="d-flex gap-2">
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($post['title']); ?>"
                           class="btn btn-outline-primary"
                           target="_blank">
                            <i class="fab fa-twitter"></i> Tweet
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&title=<?php echo urlencode($post['title']); ?>"
                           class="btn btn-outline-primary"
                           target="_blank">
                            <i class="fab fa-linkedin"></i> Share
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                           class="btn btn-outline-primary"
                           target="_blank">
                            <i class="fab fa-facebook"></i> Share
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Posts -->
<section class="related-posts py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="h3 mb-4">Related Articles</h2>
            </div>
        </div>
        <div class="row">
            <?php
            $related_query = "SELECT id, title, slug, excerpt, featured_image, published_date 
                            FROM blog_posts 
                            WHERE category = :category 
                            AND id != :current_id 
                            AND status = 'published' 
                            ORDER BY published_date DESC 
                            LIMIT 3";
            $stmt = $db->prepare($related_query);
            $stmt->bindParam(':category', $post['category']);
            $stmt->bindParam(':current_id', $post['id']);
            $stmt->execute();
            while ($related_post = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <?php if ($related_post['featured_image']): ?>
                            <img src="<?php echo htmlspecialchars($related_post['featured_image']); ?>"
                                 class="card-img-top"
                                 alt="<?php echo htmlspecialchars($related_post['title']); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h3 class="card-title h5">
                                <a href="/blog/<?php echo htmlspecialchars($related_post['slug']); ?>"
                                   class="text-decoration-none text-dark">
                                    <?php echo htmlspecialchars($related_post['title']); ?>
                                </a>
                            </h3>
                            <p class="card-text">
                                <?php echo htmlspecialchars($related_post['excerpt']); ?>
                            </p>
                            <a href="/blog/<?php echo htmlspecialchars($related_post['slug']); ?>"
                               class="btn btn-outline-primary btn-sm">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php require_once '../components/footer.php'; ?> 