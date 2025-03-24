<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../config/database.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();
$blog = new Blog($db);

// Get current page number
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 9;

// Get posts for current page
$posts = $blog->getAllPosts($page, $per_page);
$total_posts = $blog->getTotalPosts();
$total_pages = ceil($total_posts / $per_page);

// Get current category if set
$current_category = isset($_GET['category']) ? $_GET['category'] : null;
if ($current_category) {
    $posts = $blog->getPostsByCategory($current_category, $page, $per_page);
}

// SEO metadata for blog listing
$seo_data = [
    'title' => 'Blog - Latest Insights on Digital Marketing & Web Development | StartupAI',
    'description' => 'Explore our latest articles on digital marketing, web development, AI, and business growth strategies. Expert insights to help your business succeed online.',
    'keywords' => 'digital marketing blog, web development articles, business growth tips, AI insights, StartupAI blog'
];

require_once '../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4">Our Blog</h1>
                <p class="lead">Insights, tips, and strategies to help your business grow online</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories -->
<section class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-categories text-center mb-4">
                    <a href="/blog" class="btn <?php echo !$current_category ? 'btn-primary' : 'btn-outline-primary'; ?> me-2 mb-2">All</a>
                    <?php
                    $categories_query = "SELECT * FROM blog_categories ORDER BY name";
                    $stmt = $db->prepare($categories_query);
                    $stmt->execute();
                    while ($category = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $active = $current_category === $category['slug'] ? 'btn-primary' : 'btn-outline-primary';
                        echo '<a href="/blog?category=' . $category['slug'] . '" class="btn ' . $active . ' me-2 mb-2">' . $category['name'] . '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                    <div class="card blog-card h-100">
                        <?php if ($post['featured_image']): ?>
                            <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                                 class="card-img-top" 
                                 alt="<?php echo htmlspecialchars($post['title']); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <div class="mb-2">
                                <span class="badge bg-primary"><?php echo htmlspecialchars($post['category']); ?></span>
                                <small class="text-muted ms-2">
                                    <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                                </small>
                            </div>
                            <h3 class="card-title h5">
                                <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" 
                                   class="text-decoration-none text-dark">
                                    <?php echo htmlspecialchars($post['title']); ?>
                                </a>
                            </h3>
                            <p class="card-text">
                                <?php echo htmlspecialchars($post['excerpt']); ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="author">
                                    <small class="text-muted">By <?php echo htmlspecialchars($post['author']); ?></small>
                                </div>
                                <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" 
                                   class="btn btn-outline-primary btn-sm">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <div class="row">
                <div class="col-12">
                    <nav aria-label="Blog pagination">
                        <ul class="pagination justify-content-center">
                            <?php if ($page > 1): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo $page - 1; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>">
                                        Previous
                                    </a>
                                </li>
                            <?php endif; ?>
                            
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                                    <a class="page-link" href="?page=<?php echo $i; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php endfor; ?>
                            
                            <?php if ($page < $total_pages): ?>
                                <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo $page + 1; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>">
                                        Next
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once '../components/footer.php'; ?> 