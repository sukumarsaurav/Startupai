<?php
define('BASEPATH', true);
require_once '../includes/config.php';
require_once 'includes/admin-auth.php';

session_start();
requireAdminLogin();

// Set active page for sidebar highlighting
$active_page = 'blogs';
$pageTitle = 'Manage Blog Posts';

// Handle blog post deletion
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $post_id = (int)$_GET['delete'];
    
    // Get the blog post image to delete it
    $stmt = $conn->prepare("SELECT featured_image FROM blog_posts WHERE id = ?");
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $post = $result->fetch_assoc();
        
        // Delete the image file if it exists
        if (!empty($post['featured_image']) && file_exists('../'.$post['featured_image'])) {
            unlink('../'.$post['featured_image']);
        }
        
        // Delete the blog post
        $delete_stmt = $conn->prepare("DELETE FROM blog_posts WHERE id = ?");
        $delete_stmt->bind_param("i", $post_id);
        $delete_stmt->execute();
        
        if ($delete_stmt->affected_rows > 0) {
            $success_message = "Blog post deleted successfully.";
        } else {
            $error_message = "Failed to delete blog post.";
        }
        
        $delete_stmt->close();
    }
    
    $stmt->close();
}

// Get all blog posts for listing
$query = "SELECT id, title, slug, author, featured_image, published_date, status 
          FROM blog_posts 
          ORDER BY published_date DESC";
$result = $conn->query($query);
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Blog Posts</h6>
                        <a href="blog-edit.php" class="btn btn-sm btn-info text-white mx-3">
                            <i class="material-icons text-sm">add</i> New Post
                        </a>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <?php if (isset($success_message)): ?>
                    <div class="alert alert-success text-white font-weight-bold mx-3">
                        <?php echo $success_message; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (isset($error_message)): ?>
                    <div class="alert alert-danger text-white font-weight-bold mx-3">
                        <?php echo $error_message; ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Post</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Author</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result->num_rows > 0): ?>
                                    <?php while ($post = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <?php if (!empty($post['featured_image']) && file_exists('../'.$post['featured_image'])): ?>
                                                    <img src="../<?php echo $post['featured_image']; ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="<?php echo htmlspecialchars($post['title']); ?>">
                                                    <?php else: ?>
                                                    <img src="../assets/images/default-blog-image.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="Default Image">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($post['title']); ?></h6>
                                                    <p class="text-xs text-secondary mb-0"><?php echo htmlspecialchars($post['slug']); ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo htmlspecialchars($post['author']); ?></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <?php if ($post['status'] === 'published'): ?>
                                            <span class="badge badge-sm bg-gradient-success">Published</span>
                                            <?php elseif ($post['status'] === 'draft'): ?>
                                            <span class="badge badge-sm bg-gradient-secondary">Draft</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?php echo date('M d, Y', strtotime($post['published_date'])); ?></span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="blog-edit.php?id=<?php echo $post['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit post">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="blog-preview.php?id=<?php echo $post['id']; ?>" class="text-info font-weight-bold text-xs mx-2" data-toggle="tooltip" data-original-title="Preview post">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                            <a href="javascript:;" class="text-danger font-weight-bold text-xs delete-post" data-id="<?php echo $post['id']; ?>" data-toggle="tooltip" data-original-title="Delete post">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" class="text-center py-4">No blog posts found. <a href="blog-edit.php">Create your first post</a>.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this blog post? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDelete" class="btn bg-gradient-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Page specific script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle delete confirmations
        const deleteButtons = document.querySelectorAll('.delete-post');
        const confirmDeleteBtn = document.getElementById('confirmDelete');
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const postId = this.getAttribute('data-id');
                confirmDeleteBtn.setAttribute('href', `manage-blogs.php?delete=${postId}`);
                deleteModal.show();
            });
        });
    });
</script> 