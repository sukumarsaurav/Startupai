<?php
define('BASEPATH', true);
require_once '../includes/config.php';
require_once 'includes/admin-auth.php';

session_start();
requireAdminLogin();

// Set active page for sidebar highlighting
$active_page = 'testimonials';
$pageTitle = 'Manage Testimonials';

// Handle testimonial deletion
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $testimonial_id = (int)$_GET['delete'];
    
    // First, get the testimonial to check if there's an image to delete
    $stmt = $conn->prepare("SELECT client_image FROM testimonials WHERE id = ?");
    $stmt->bind_param("i", $testimonial_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $testimonial = $result->fetch_assoc();
        
        // Delete the image file if it exists
        if (!empty($testimonial['client_image']) && file_exists('../'.$testimonial['client_image'])) {
            unlink('../'.$testimonial['client_image']);
        }
        
        // Delete the testimonial
        $delete_stmt = $conn->prepare("DELETE FROM testimonials WHERE id = ?");
        $delete_stmt->bind_param("i", $testimonial_id);
        $delete_stmt->execute();
        
        if ($delete_stmt->affected_rows > 0) {
            $success_message = "Testimonial deleted successfully.";
        } else {
            $error_message = "Failed to delete testimonial.";
        }
        
        $delete_stmt->close();
    }
    
    $stmt->close();
}

// Handle form submission for quick add
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_testimonial'])) {
    $client_name = trim($_POST['client_name']);
    $client_company = trim($_POST['client_company'] ?? '');
    $client_position = trim($_POST['client_position'] ?? '');
    $testimonial_text = trim($_POST['testimonial_text']);
    $rating = isset($_POST['rating']) ? (int)$_POST['rating'] : 5;
    $service_category = trim($_POST['service_category'] ?? '');
    $display_order = isset($_POST['display_order']) ? (int)$_POST['display_order'] : 0;
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;
    
    // Validate input
    if (empty($client_name) || empty($testimonial_text)) {
        $error_message = "Client name and testimonial text are required.";
    } else {
        $client_image = '';
        
        // Handle image upload if provided
        if (isset($_FILES['client_image']) && $_FILES['client_image']['error'] === UPLOAD_ERR_OK) {
            $upload_dir = '../uploads/testimonials/';
            
            // Create directory if it doesn't exist
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            
            $temp_name = $_FILES['client_image']['tmp_name'];
            $file_name = time() . '_' . $_FILES['client_image']['name'];
            $file_path = $upload_dir . $file_name;
            
            if (move_uploaded_file($temp_name, $file_path)) {
                $client_image = 'uploads/testimonials/' . $file_name;
            } else {
                $error_message = "Failed to upload image.";
            }
        }
        
        // If no error with image upload, insert the testimonial
        if (empty($error_message)) {
            $insert_sql = "INSERT INTO testimonials 
                          (client_name, client_company, client_position, client_image, 
                           testimonial_text, rating, service_category, display_order, 
                           is_featured, created_at, updated_at) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
            
            $stmt = $conn->prepare($insert_sql);
            $stmt->bind_param("sssssisii", $client_name, $client_company, $client_position, 
                               $client_image, $testimonial_text, $rating, $service_category, 
                               $display_order, $is_featured);
            
            if ($stmt->execute()) {
                $success_message = "Testimonial added successfully.";
                // Clear form fields after successful submission
                $client_name = $client_company = $client_position = $testimonial_text = $service_category = '';
                $rating = 5;
                $display_order = 0;
                $is_featured = 0;
            } else {
                $error_message = "Error adding testimonial: " . $conn->error;
            }
            
            $stmt->close();
        }
    }
}

// Get all testimonials
$query = "SELECT id, client_name, client_company, client_position, client_image, 
                 testimonial_text, rating, service_category, display_order, is_featured, 
                 created_at 
          FROM testimonials 
          ORDER BY display_order, created_at DESC";
          
$result = $conn->query($query);

// Get all service categories for dropdown
$categories_query = "SELECT DISTINCT service_category FROM testimonials WHERE service_category != '' ORDER BY service_category";
$categories_result = $conn->query($categories_query);
$service_categories = [];

if ($categories_result->num_rows > 0) {
    while ($row = $categories_result->fetch_assoc()) {
        $service_categories[] = $row['service_category'];
    }
}

// Add additional known service categories
$known_categories = [
    'Web Design',
    'Mobile Apps',
    'Digital Marketing',
    'UI/UX Design',
    'Flutter Development',
    'React Native',
    'SEO',
    'Social Media Marketing',
    'Google Ads'
];

foreach ($known_categories as $category) {
    if (!in_array($category, $service_categories)) {
        $service_categories[] = $category;
    }
}

sort($service_categories);
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Client Testimonials</h6>
                        <button class="btn btn-sm btn-info text-white mx-3" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">
                            <i class="material-icons text-sm">add</i> Add Testimonial
                        </button>
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
                    
                    <?php if (isset($_SESSION['success_message'])): ?>
                    <div class="alert alert-success text-white font-weight-bold mx-3">
                        <?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['error_message'])): ?>
                    <div class="alert alert-danger text-white font-weight-bold mx-3">
                        <?php echo $_SESSION['error_message']; unset($_SESSION['error_message']); ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Testimonial</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rating</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Service</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Featured</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result->num_rows > 0): ?>
                                    <?php while ($testimonial = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <?php if (!empty($testimonial['client_image']) && file_exists('../'.$testimonial['client_image'])): ?>
                                                    <img src="../<?php echo $testimonial['client_image']; ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="<?php echo htmlspecialchars($testimonial['client_name']); ?>">
                                                    <?php else: ?>
                                                    <div class="avatar avatar-sm me-3 bg-gradient-primary border-radius-lg">
                                                        <?php echo strtoupper(substr($testimonial['client_name'], 0, 1)); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($testimonial['client_name']); ?></h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <?php 
                                                        $position_company = [];
                                                        if (!empty($testimonial['client_position'])) $position_company[] = $testimonial['client_position'];
                                                        if (!empty($testimonial['client_company'])) $position_company[] = $testimonial['client_company'];
                                                        echo htmlspecialchars(implode(', ', $position_company));
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                <?php 
                                                $excerpt = strlen($testimonial['testimonial_text']) > 100 
                                                    ? substr($testimonial['testimonial_text'], 0, 100) . '...' 
                                                    : $testimonial['testimonial_text'];
                                                echo htmlspecialchars($excerpt); 
                                                ?>
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                <?php echo str_repeat('★', $testimonial['rating']) . str_repeat('☆', 5 - $testimonial['rating']); ?>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                <?php echo !empty($testimonial['service_category']) ? htmlspecialchars($testimonial['service_category']) : '-'; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <?php if ($testimonial['is_featured']): ?>
                                            <span class="badge badge-sm bg-gradient-success">Yes</span>
                                            <?php else: ?>
                                            <span class="badge badge-sm bg-gradient-secondary">No</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                <?php echo $testimonial['display_order']; ?>
                                            </span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="testimonial-edit.php?id=<?php echo $testimonial['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit testimonial">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="javascript:;" class="text-danger font-weight-bold text-xs delete-testimonial ms-2" data-id="<?php echo $testimonial['id']; ?>" data-toggle="tooltip" data-original-title="Delete testimonial">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-4">No testimonials found. Add your first client testimonial.</td>
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

<!-- Add Testimonial Modal -->
<div class="modal fade" id="addTestimonialModal" tabindex="-1" role="dialog" aria-labelledby="addTestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTestimonialModalLabel">Add New Testimonial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Client Name</label>
                                <input type="text" name="client_name" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Client Company</label>
                                <input type="text" name="client_company" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Client Position</label>
                                <input type="text" name="client_position" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Client Photo</label>
                                <input type="file" name="client_image" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="input-group input-group-static">
                                <label>Testimonial Text</label>
                                <textarea name="testimonial_text" class="form-control" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Rating (1-5)</label>
                                <select name="rating" class="form-control">
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Service Category</label>
                                <input type="text" name="service_category" class="form-control" list="service-categories">
                                <datalist id="service-categories">
                                    <?php foreach ($service_categories as $category): ?>
                                    <option value="<?php echo htmlspecialchars($category); ?>">
                                    <?php endforeach; ?>
                                </datalist>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Display Order</label>
                                <input type="number" name="display_order" class="form-control" value="0" min="0">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_featured" id="is-featured" value="1">
                                <label class="custom-control-label" for="is-featured">
                                    Feature this testimonial on homepage
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="add_testimonial" value="1" class="btn bg-gradient-primary">Add Testimonial</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteTestimonialModal" tabindex="-1" role="dialog" aria-labelledby="deleteTestimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTestimonialModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this testimonial? This action cannot be undone.
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
        const deleteButtons = document.querySelectorAll('.delete-testimonial');
        const confirmDeleteBtn = document.getElementById('confirmDelete');
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteTestimonialModal'));
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const testimonialId = this.getAttribute('data-id');
                confirmDeleteBtn.setAttribute('href', `manage-testimonials.php?delete=${testimonialId}`);
                deleteModal.show();
            });
        });
    });
</script> 