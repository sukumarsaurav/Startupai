<?php
define('BASEPATH', true);
require_once '../includes/config.php';
require_once 'includes/admin-auth.php';

session_start();
requireAdminLogin();

// Set active page for sidebar highlighting
$active_page = 'testimonials';
$pageTitle = 'Edit Testimonial';

// Redirect if no testimonial ID is provided
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header("Location: manage-testimonials.php");
    exit();
}

$testimonial_id = (int)$_GET['id'];
$error_message = '';
$success_message = '';

// Get the testimonial data
$stmt = $conn->prepare("SELECT * FROM testimonials WHERE id = ?");
$stmt->bind_param("i", $testimonial_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows !== 1) {
    // Testimonial not found
    $_SESSION['error_message'] = "Testimonial not found.";
    header("Location: manage-testimonials.php");
    exit();
}

$testimonial = $result->fetch_assoc();
$stmt->close();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $client_name = trim($_POST['client_name']);
    $client_company = trim($_POST['client_company'] ?? '');
    $client_position = trim($_POST['client_position'] ?? '');
    $testimonial_text = trim($_POST['testimonial_text']);
    $rating = isset($_POST['rating']) ? (int)$_POST['rating'] : 5;
    $service_category = trim($_POST['service_category'] ?? '');
    $display_order = isset($_POST['display_order']) ? (int)$_POST['display_order'] : 0;
    $is_featured = isset($_POST['is_featured']) ? 1 : 0;
    $client_image = $testimonial['client_image']; // Keep existing image by default
    
    // Validate input
    if (empty($client_name) || empty($testimonial_text)) {
        $error_message = "Client name and testimonial text are required.";
    } else {
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
            
            // Delete old image if exists and a new one is uploaded
            if (!empty($testimonial['client_image']) && file_exists('../'.$testimonial['client_image'])) {
                unlink('../'.$testimonial['client_image']);
            }
            
            if (move_uploaded_file($temp_name, $file_path)) {
                $client_image = 'uploads/testimonials/' . $file_name;
            } else {
                $error_message = "Failed to upload image.";
            }
        }
        
        // If no error with image upload, update the testimonial
        if (empty($error_message)) {
            $update_sql = "UPDATE testimonials 
                          SET client_name = ?, client_company = ?, client_position = ?, 
                              client_image = ?, testimonial_text = ?, rating = ?, 
                              service_category = ?, display_order = ?, is_featured = ?,
                              updated_at = NOW() 
                          WHERE id = ?";
            
            $stmt = $conn->prepare($update_sql);
            $stmt->bind_param("sssssisiii", $client_name, $client_company, $client_position, 
                               $client_image, $testimonial_text, $rating, $service_category, 
                               $display_order, $is_featured, $testimonial_id);
            
            if ($stmt->execute()) {
                $success_message = "Testimonial updated successfully.";
                
                // Refresh testimonial data
                $stmt = $conn->prepare("SELECT * FROM testimonials WHERE id = ?");
                $stmt->bind_param("i", $testimonial_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $testimonial = $result->fetch_assoc();
            } else {
                $error_message = "Error updating testimonial: " . $conn->error;
            }
            
            $stmt->close();
        }
    }
}

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
                        <h6 class="text-white text-capitalize ps-3">Edit Testimonial</h6>
                        <a href="manage-testimonials.php" class="btn btn-sm btn-info text-white mx-3">
                            <i class="material-icons text-sm">arrow_back</i> Back to Testimonials
                        </a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <?php if (!empty($error_message)): ?>
                    <div class="alert alert-danger text-white font-weight-bold">
                        <?php echo $error_message; ?>
                    </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($success_message)): ?>
                    <div class="alert alert-success text-white font-weight-bold">
                        <?php echo $success_message; ?>
                    </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?id=' . $testimonial_id); ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Client Name</label>
                                    <input type="text" name="client_name" class="form-control" value="<?php echo htmlspecialchars($testimonial['client_name']); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Client Company</label>
                                    <input type="text" name="client_company" class="form-control" value="<?php echo htmlspecialchars($testimonial['client_company']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Client Position</label>
                                    <input type="text" name="client_position" class="form-control" value="<?php echo htmlspecialchars($testimonial['client_position']); ?>">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Client Photo</label>
                                    <input type="file" name="client_image" class="form-control" accept="image/*">
                                    <p class="form-text text-muted">Leave empty to keep current image</p>
                                </div>
                                <?php if (!empty($testimonial['client_image']) && file_exists('../'.$testimonial['client_image'])): ?>
                                <div class="mt-2">
                                    <p class="form-text mb-1">Current Image:</p>
                                    <img src="../<?php echo $testimonial['client_image']; ?>" class="img-fluid rounded" style="max-height: 100px;" alt="Client Image">
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Testimonial Text</label>
                                    <textarea name="testimonial_text" class="form-control" rows="5" required><?php echo htmlspecialchars($testimonial['testimonial_text']); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Rating (1-5)</label>
                                    <select name="rating" class="form-control">
                                        <option value="5" <?php echo ($testimonial['rating'] == 5) ? 'selected' : ''; ?>>5 Stars</option>
                                        <option value="4" <?php echo ($testimonial['rating'] == 4) ? 'selected' : ''; ?>>4 Stars</option>
                                        <option value="3" <?php echo ($testimonial['rating'] == 3) ? 'selected' : ''; ?>>3 Stars</option>
                                        <option value="2" <?php echo ($testimonial['rating'] == 2) ? 'selected' : ''; ?>>2 Stars</option>
                                        <option value="1" <?php echo ($testimonial['rating'] == 1) ? 'selected' : ''; ?>>1 Star</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group input-group-static">
                                    <label>Service Category</label>
                                    <input type="text" name="service_category" class="form-control" value="<?php echo htmlspecialchars($testimonial['service_category']); ?>" list="service-categories">
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
                                    <input type="number" name="display_order" class="form-control" value="<?php echo $testimonial['display_order']; ?>" min="0">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_featured" id="is-featured" value="1" <?php echo ($testimonial['is_featured'] == 1) ? 'checked' : ''; ?>>
                                    <label class="custom-control-label" for="is-featured">
                                        Feature this testimonial on homepage
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-12 text-end">
                                <a href="manage-testimonials.php" class="btn bg-gradient-secondary me-2">Cancel</a>
                                <button type="submit" class="btn bg-gradient-primary">Update Testimonial</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?> 