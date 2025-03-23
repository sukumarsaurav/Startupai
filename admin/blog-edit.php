<?php
define('BASEPATH', true);
require_once '../includes/config.php';
require_once 'includes/admin-auth.php';

session_start();
requireAdminLogin();

// Set active page for sidebar highlighting
$active_page = 'blogs';
$pageTitle = 'Edit Blog Post';

// Initialize variables
$post_id = 0;
$title = '';
$slug = '';
$excerpt = '';
$content = '';
$author = '';
$featured_image = '';
$meta_description = '';
$keywords = '';
$status = 'draft';
$categories = [];
$published_date = date('Y-m-d');
$error_message = '';
$success_message = '';
$current_featured_image = '';

// Check if we're editing an existing post
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $post_id = (int)$_GET['id'];
    
    // Fetch existing post data
    $stmt = $conn->prepare("SELECT * FROM blog_posts WHERE id = ?");
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $post = $result->fetch_assoc();
        $title = $post['title'];
        $slug = $post['slug'];
        $excerpt = $post['excerpt'];
        $content = $post['content'];
        $author = $post['author'];
        $featured_image = $post['featured_image'];
        $current_featured_image = $featured_image;
        $meta_description = $post['meta_description'];
        $keywords = $post['keywords'];
        $status = $post['status'];
        $published_date = $post['published_date'];
        
        // Get post categories
        $cat_stmt = $conn->prepare("SELECT category_id FROM blog_post_categories WHERE post_id = ?");
        $cat_stmt->bind_param("i", $post_id);
        $cat_stmt->execute();
        $cat_result = $cat_stmt->get_result();
        
        while ($cat = $cat_result->fetch_assoc()) {
            $categories[] = $cat['category_id'];
        }
        
        $cat_stmt->close();
    } else {
        // Post not found
        header("Location: manage-blogs.php");
        exit();
    }
    
    $stmt->close();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $title = trim($_POST['title']);
    $slug = trim($_POST['slug'] ?? '');
    $excerpt = trim($_POST['excerpt'] ?? '');
    $content = $_POST['content'] ?? '';
    $author = trim($_POST['author'] ?? '');
    $meta_description = trim($_POST['meta_description'] ?? '');
    $keywords = trim($_POST['keywords'] ?? '');
    $status = $_POST['status'] ?? 'draft';
    $published_date = $_POST['published_date'] ?? date('Y-m-d');
    $categories = isset($_POST['categories']) ? $_POST['categories'] : [];
    
    // Generate slug if not provided
    if (empty($slug)) {
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    }
    
    // Validate required fields
    if (empty($title)) {
        $error_message = "Post title is required.";
    } else {
        // Check if slug already exists (except for the current post)
        $slug_check_sql = "SELECT id FROM blog_posts WHERE slug = ? AND id != ?";
        $slug_stmt = $conn->prepare($slug_check_sql);
        $slug_stmt->bind_param("si", $slug, $post_id);
        $slug_stmt->execute();
        $slug_result = $slug_stmt->get_result();
        
        if ($slug_result->num_rows > 0) {
            $error_message = "A post with this slug already exists. Please choose a different slug.";
        } else {
            // Handle file upload for featured image
            if (isset($_FILES['featured_image']) && $_FILES['featured_image']['error'] === UPLOAD_ERR_OK) {
                $upload_dir = '../uploads/blog/';
                
                // Create directory if it doesn't exist
                if (!file_exists($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                
                $temp_name = $_FILES['featured_image']['tmp_name'];
                $file_name = time() . '_' . $_FILES['featured_image']['name'];
                $file_path = $upload_dir . $file_name;
                
                // Delete old image if exists and a new one is uploaded
                if (!empty($current_featured_image) && file_exists('../'.$current_featured_image)) {
                    unlink('../'.$current_featured_image);
                }
                
                if (move_uploaded_file($temp_name, $file_path)) {
                    $featured_image = 'uploads/blog/' . $file_name;
                } else {
                    $error_message = "Failed to upload image.";
                }
            } else {
                // Keep existing image if no new image uploaded
                $featured_image = $current_featured_image;
            }
            
            if (empty($error_message)) {
                if ($post_id > 0) {
                    // Update existing post
                    $update_sql = "UPDATE blog_posts 
                                  SET title = ?, slug = ?, excerpt = ?, content = ?, 
                                      author = ?, featured_image = ?, meta_description = ?, 
                                      keywords = ?, status = ?, published_date = ?, 
                                      updated_at = NOW() 
                                  WHERE id = ?";
                    
                    $stmt = $conn->prepare($update_sql);
                    $stmt->bind_param("ssssssssssi", $title, $slug, $excerpt, $content, $author, 
                                       $featured_image, $meta_description, $keywords, $status, 
                                       $published_date, $post_id);
                    
                    if ($stmt->execute()) {
                        // Delete existing category relationships
                        $delete_cats = $conn->prepare("DELETE FROM blog_post_categories WHERE post_id = ?");
                        $delete_cats->bind_param("i", $post_id);
                        $delete_cats->execute();
                        $delete_cats->close();
                        
                        // Insert new category relationships
                        if (!empty($categories)) {
                            $cat_stmt = $conn->prepare("INSERT INTO blog_post_categories (post_id, category_id) VALUES (?, ?)");
                            foreach ($categories as $category_id) {
                                $cat_stmt->bind_param("ii", $post_id, $category_id);
                                $cat_stmt->execute();
                            }
                            $cat_stmt->close();
                        }
                        
                        $success_message = "Blog post updated successfully.";
                    } else {
                        $error_message = "Error updating post: " . $conn->error;
                    }
                } else {
                    // Insert new post
                    $insert_sql = "INSERT INTO blog_posts 
                                  (title, slug, excerpt, content, author, featured_image, 
                                   meta_description, keywords, status, published_date, created_at, updated_at) 
                                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
                    
                    $stmt = $conn->prepare($insert_sql);
                    $stmt->bind_param("ssssssssss", $title, $slug, $excerpt, $content, $author, 
                                       $featured_image, $meta_description, $keywords, $status, 
                                       $published_date);
                    
                    if ($stmt->execute()) {
                        $post_id = $stmt->insert_id;
                        
                        // Insert category relationships
                        if (!empty($categories)) {
                            $cat_stmt = $conn->prepare("INSERT INTO blog_post_categories (post_id, category_id) VALUES (?, ?)");
                            foreach ($categories as $category_id) {
                                $cat_stmt->bind_param("ii", $post_id, $category_id);
                                $cat_stmt->execute();
                            }
                            $cat_stmt->close();
                        }
                        
                        $success_message = "Blog post created successfully.";
                    } else {
                        $error_message = "Error creating post: " . $conn->error;
                    }
                }
                
                $stmt->close();
            }
            
            $slug_stmt->close();
        }
    }
}

// Get all blog categories for selection
$categories_query = "SELECT id, name FROM blog_categories ORDER BY name";
$categories_result = $conn->query($categories_query);
$all_categories = [];

if ($categories_result->num_rows > 0) {
    while ($row = $categories_result->fetch_assoc()) {
        $all_categories[] = $row;
    }
}

// Additional CSS for this page
$additional_css = '<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">';

// Additional JavaScript for this page
$additional_js = '
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slugify@1.6.5/slugify.min.js"></script>';
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3"><?php echo $post_id > 0 ? 'Edit' : 'New'; ?> Blog Post</h6>
                        <a href="manage-blogs.php" class="btn btn-sm btn-info text-white mx-3">
                            <i class="material-icons text-sm">arrow_back</i> Back to Posts
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger text-white font-weight-bold">
                        <?php echo $error_message; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success text-white font-weight-bold">
                        <?php echo $success_message; ?>
                        <a href="blog-edit.php" class="text-white text-decoration-underline">Create another post</a> or 
                        <a href="manage-blogs.php" class="text-white text-decoration-underline">return to posts list</a>.
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . ($post_id > 0 ? '?id='.$post_id : '')); ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group input-group-static mb-4">
                                    <label>Post Title</label>
                                    <input type="text" name="title" id="post-title" class="form-control" value="<?php echo htmlspecialchars($title); ?>" required>
                                </div>
                                
                                <div class="input-group input-group-static mb-4">
                                    <label>Slug (URL)</label>
                                    <input type="text" name="slug" id="post-slug" class="form-control" value="<?php echo htmlspecialchars($slug); ?>">
                                    <p class="form-text text-muted">Leave blank to auto-generate from title</p>
                                </div>
                                
                                <div class="input-group input-group-static mb-4">
                                    <label>Excerpt</label>
                                    <textarea name="excerpt" class="form-control" rows="3"><?php echo htmlspecialchars($excerpt); ?></textarea>
                                    <p class="form-text text-muted">A short summary of the post (optional)</p>
                                </div>
                                
                                <div class="form-group mb-4">
                                    <label>Content</label>
                                    <textarea name="content" id="summernote" class="form-control"><?php echo htmlspecialchars($content); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header p-3">
                                        <h6 class="mb-0">Publishing Options</h6>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="input-group input-group-static mb-3">
                                            <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="draft" <?php echo ($status === 'draft') ? 'selected' : ''; ?>>Draft</option>
                                                <option value="published" <?php echo ($status === 'published') ? 'selected' : ''; ?>>Published</option>
                                            </select>
                                        </div>
                                        
                                        <div class="input-group input-group-static mb-3">
                                            <label>Author</label>
                                            <input type="text" name="author" class="form-control" value="<?php echo htmlspecialchars($author); ?>">
                                        </div>
                                        
                                        <div class="input-group input-group-static mb-3">
                                            <label>Publish Date</label>
                                            <input type="date" name="published_date" class="form-control" value="<?php echo htmlspecialchars($published_date); ?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card mt-4">
                                    <div class="card-header p-3">
                                        <h6 class="mb-0">Featured Image</h6>
                                    </div>
                                    <div class="card-body pt-2">
                                        <?php if (!empty($featured_image) && file_exists('../'.$featured_image)): ?>
                                        <div class="mb-3">
                                            <img src="../<?php echo $featured_image; ?>" class="img-fluid rounded" alt="Current Featured Image">
                                            <p class="form-text text-muted mt-1">Current image</p>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <div class="input-group input-group-static mb-3">
                                            <input type="file" name="featured_image" id="featured-image" class="form-control" accept="image/*">
                                            <p class="form-text text-muted">Select a new image to replace the current one (optional)</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card mt-4">
                                    <div class="card-header p-3">
                                        <h6 class="mb-0">Categories</h6>
                                    </div>
                                    <div class="card-body pt-2">
                                        <?php if (!empty($all_categories)): ?>
                                            <?php foreach ($all_categories as $category): ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="categories[]" value="<?php echo $category['id']; ?>" id="category-<?php echo $category['id']; ?>" <?php echo in_array($category['id'], $categories) ? 'checked' : ''; ?>>
                                                <label class="form-check-label" for="category-<?php echo $category['id']; ?>">
                                                    <?php echo htmlspecialchars($category['name']); ?>
                                                </label>
                                            </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <p class="text-muted">No categories found. <a href="manage-categories.php">Create categories</a> first.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <div class="card mt-4">
                                    <div class="card-header p-3">
                                        <h6 class="mb-0">SEO</h6>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="input-group input-group-static mb-3">
                                            <label>Meta Description</label>
                                            <textarea name="meta_description" class="form-control" rows="3"><?php echo htmlspecialchars($meta_description); ?></textarea>
                                        </div>
                                        
                                        <div class="input-group input-group-static mb-3">
                                            <label>Keywords</label>
                                            <input type="text" name="keywords" class="form-control" value="<?php echo htmlspecialchars($keywords); ?>">
                                            <p class="form-text text-muted">Separate keywords with commas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-12 text-end">
                                <button type="submit" class="btn bg-gradient-primary">
                                    <?php echo $post_id > 0 ? 'Update' : 'Publish'; ?> Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Page specific script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Summernote editor
        $('#summernote').summernote({
            height: 350,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        
        // Auto-generate slug from title
        const titleInput = document.getElementById('post-title');
        const slugInput = document.getElementById('post-slug');
        
        if (titleInput && slugInput) {
            titleInput.addEventListener('blur', function() {
                if (slugInput.value === '') {
                    slugInput.value = slugify(titleInput.value, {
                        lower: true,
                        strict: true
                    });
                }
            });
        }
    });
</script> 