<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/admin-auth.php';

// Check if user is logged in
requireAdminLogin();

// Get stats for dashboard
// Count blog posts
$blogQuery = "SELECT COUNT(*) as total FROM blog_posts";
$blogResult = $conn->query($blogQuery);
$blogCount = 0;
if ($blogResult && $blogResult->num_rows > 0) {
    $blogCount = $blogResult->fetch_assoc()['total'];
}

// Count FAQs
$faqQuery = "SELECT COUNT(*) as total FROM faqs";
$faqResult = $conn->query($faqQuery);
$faqCount = 0;
if ($faqResult && $faqResult->num_rows > 0) {
    $faqCount = $faqResult->fetch_assoc()['total'];
}

// Count testimonials
$testimonialsQuery = "SELECT COUNT(*) as total FROM testimonials";
$testimonialsResult = $conn->query($testimonialsQuery);
$testimonialsCount = 0;
if ($testimonialsResult && $testimonialsResult->num_rows > 0) {
    $testimonialsCount = $testimonialsResult->fetch_assoc()['total'];
}

// Get recent blog posts
$recentBlogsQuery = "SELECT id, title, published_date FROM blog_posts ORDER BY published_date DESC LIMIT 5";
$recentBlogsResult = $conn->query($recentBlogsQuery);
$recentBlogs = [];
if ($recentBlogsResult && $recentBlogsResult->num_rows > 0) {
    while ($row = $recentBlogsResult->fetch_assoc()) {
        $recentBlogs[] = $row;
    }
}

// Get recent FAQs
$recentFaqsQuery = "SELECT id, question, created_at FROM faqs ORDER BY created_at DESC LIMIT 5";
$recentFaqsResult = $conn->query($recentFaqsQuery);
$recentFaqs = [];
if ($recentFaqsResult && $recentFaqsResult->num_rows > 0) {
    while ($row = $recentFaqsResult->fetch_assoc()) {
        $recentFaqs[] = $row;
    }
}

// Set page title and active page for sidebar
$pageTitle = "Dashboard";
$active_page = "dashboard";

// Include header
include_once 'includes/header.php';
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">article</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Blog Posts</p>
                        <h4 class="mb-0"><?php echo $blogCount; ?></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <a href="manage-blogs.php" class="mb-0 text-primary text-sm">Manage Blog Posts</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">question_answer</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total FAQs</p>
                        <h4 class="mb-0"><?php echo $faqCount; ?></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <a href="manage-faqs.php" class="mb-0 text-success text-sm">Manage FAQs</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">format_quote</i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Total Testimonials</p>
                        <h4 class="mb-0"><?php echo $testimonialsCount; ?></h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <a href="manage-testimonials.php" class="mb-0 text-info text-sm">Manage Testimonials</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Recent Blog Posts</h6>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="manage-blogs.php" class="btn btn-sm bg-gradient-primary mb-0">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($recentBlogs)): ?>
                                    <tr>
                                        <td colspan="3" class="text-center">No blog posts found</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($recentBlogs as $blog): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars(mb_substr($blog['title'], 0, 50)); ?><?php echo (mb_strlen($blog['title']) > 50) ? '...' : ''; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?php echo date('M d, Y', strtotime($blog['published_date'])); ?></p>
                                            </td>
                                            <td class="align-middle">
                                                <a href="edit-blog.php?id=<?php echo $blog['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit blog">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Recent FAQs</h6>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="manage-faqs.php" class="btn btn-sm bg-gradient-primary mb-0">View All</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Question</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($recentFaqs)): ?>
                                    <tr>
                                        <td colspan="3" class="text-center">No FAQs found</td>
                                    </tr>
                                <?php else: ?>
                                    <?php foreach ($recentFaqs as $faq): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm"><?php echo htmlspecialchars(mb_substr($faq['question'], 0, 50)); ?><?php echo (mb_strlen($faq['question']) > 50) ? '...' : ''; ?></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0"><?php echo date('M d, Y', strtotime($faq['created_at'])); ?></p>
                                            </td>
                                            <td class="align-middle">
                                                <a href="manage-faqs.php?edit=<?php echo $faq['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit FAQ">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'includes/footer.php'; ?> 