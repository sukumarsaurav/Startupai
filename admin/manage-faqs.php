<?php
define('BASEPATH', true);
require_once '../includes/config.php';
require_once 'includes/admin-auth.php';

session_start();
requireAdminLogin();

// Set active page for sidebar highlighting
$active_page = 'faqs';
$pageTitle = 'Manage FAQs';

// Handle FAQ deletion
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    $faq_id = (int)$_GET['delete'];
    
    // Delete the FAQ
    $delete_stmt = $conn->prepare("DELETE FROM faqs WHERE id = ?");
    $delete_stmt->bind_param("i", $faq_id);
    $delete_stmt->execute();
    
    if ($delete_stmt->affected_rows > 0) {
        $success_message = "FAQ deleted successfully.";
    } else {
        $error_message = "Failed to delete FAQ.";
    }
    
    $delete_stmt->close();
}

// Handle form submission for quick add
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quick_add'])) {
    $question = trim($_POST['question']);
    $answer = trim($_POST['answer']);
    $service = $_POST['service'];
    $category = isset($_POST['category']) ? trim($_POST['category']) : '';
    
    // Validate input
    if (empty($question) || empty($answer)) {
        $error_message = "Question and answer are required.";
    } else {
        // Insert new FAQ
        $insert_sql = "INSERT INTO faqs (question, answer, service_slug, category, created_at, updated_at) 
                       VALUES (?, ?, ?, ?, NOW(), NOW())";
        
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("ssss", $question, $answer, $service, $category);
        
        if ($stmt->execute()) {
            $success_message = "FAQ added successfully.";
            // Clear form fields after successful submission
            $question = $answer = '';
        } else {
            $error_message = "Error adding FAQ: " . $conn->error;
        }
        
        $stmt->close();
    }
}

// Get all services for dropdown
$services_query = "SELECT DISTINCT service_slug FROM faqs ORDER BY service_slug";
$services_result = $conn->query($services_query);
$all_services = [];

if ($services_result->num_rows > 0) {
    while ($row = $services_result->fetch_assoc()) {
        $all_services[] = $row['service_slug'];
    }
}

// Get all categories for dropdown
$categories_query = "SELECT DISTINCT category FROM faqs WHERE category != '' ORDER BY category";
$categories_result = $conn->query($categories_query);
$all_categories = [];

if ($categories_result->num_rows > 0) {
    while ($row = $categories_result->fetch_assoc()) {
        $all_categories[] = $row['category'];
    }
}

// Set default filter values
$filter_service = isset($_GET['service']) ? $_GET['service'] : '';
$filter_category = isset($_GET['category']) ? $_GET['category'] : '';
$search_query = isset($_GET['search']) ? $_GET['search'] : '';

// Build the query based on filters
$query = "SELECT id, question, answer, service_slug, category, created_at 
          FROM faqs 
          WHERE 1=1";

$params = [];
$param_types = "";

if (!empty($filter_service)) {
    $query .= " AND service_slug = ?";
    $params[] = $filter_service;
    $param_types .= "s";
}

if (!empty($filter_category)) {
    $query .= " AND category = ?";
    $params[] = $filter_category;
    $param_types .= "s";
}

if (!empty($search_query)) {
    $query .= " AND (question LIKE ? OR answer LIKE ?)";
    $search_param = "%{$search_query}%";
    $params[] = $search_param;
    $params[] = $search_param;
    $param_types .= "ss";
}

$query .= " ORDER BY created_at DESC";

// Prepare and execute the query
$stmt = $conn->prepare($query);

if (!empty($params)) {
    $stmt->bind_param($param_types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();
?>

<?php include 'includes/header.php'; ?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Frequently Asked Questions</h6>
                        <button class="btn btn-sm btn-info text-white mx-3" data-bs-toggle="modal" data-bs-target="#addFaqModal">
                            <i class="material-icons text-sm">add</i> Add FAQ
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
                    
                    <!-- Filters -->
                    <div class="mx-3 mb-4">
                        <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="row g-3">
                            <div class="col-md-3">
                                <div class="input-group input-group-static">
                                    <label>Filter by Service</label>
                                    <select name="service" class="form-control" onchange="this.form.submit()">
                                        <option value="">All Services</option>
                                        <?php foreach ($all_services as $service): ?>
                                        <option value="<?php echo htmlspecialchars($service); ?>" <?php echo ($filter_service === $service) ? 'selected' : ''; ?>>
                                            <?php echo htmlspecialchars(ucwords(str_replace('-', ' ', $service))); ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group input-group-static">
                                    <label>Filter by Category</label>
                                    <select name="category" class="form-control" onchange="this.form.submit()">
                                        <option value="">All Categories</option>
                                        <?php foreach ($all_categories as $category): ?>
                                        <option value="<?php echo htmlspecialchars($category); ?>" <?php echo ($filter_category === $category) ? 'selected' : ''; ?>>
                                            <?php echo htmlspecialchars($category); ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group input-group-outline">
                                    <label class="form-label">Search FAQs</label>
                                    <input type="text" name="search" class="form-control" value="<?php echo htmlspecialchars($search_query); ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn bg-gradient-info w-100 mb-0">Search</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Question</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Service</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Added</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result->num_rows > 0): ?>
                                    <?php while ($faq = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?php echo htmlspecialchars($faq['question']); ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                <?php echo htmlspecialchars(ucwords(str_replace('-', ' ', $faq['service_slug']))); ?>
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                <?php echo !empty($faq['category']) ? htmlspecialchars($faq['category']) : '<span class="text-muted">None</span>'; ?>
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">
                                                <?php echo date('M d, Y', strtotime($faq['created_at'])); ?>
                                            </span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs edit-faq" 
                                                data-id="<?php echo $faq['id']; ?>"
                                                data-question="<?php echo htmlspecialchars($faq['question']); ?>"
                                                data-answer="<?php echo htmlspecialchars($faq['answer']); ?>"
                                                data-service="<?php echo htmlspecialchars($faq['service_slug']); ?>"
                                                data-category="<?php echo htmlspecialchars($faq['category']); ?>"
                                                data-toggle="tooltip" data-original-title="Edit FAQ">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="javascript:;" class="text-danger font-weight-bold text-xs delete-faq ms-2" 
                                                data-id="<?php echo $faq['id']; ?>" 
                                                data-toggle="tooltip" data-original-title="Delete FAQ">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5" class="text-center py-4">No FAQs found matching your criteria.</td>
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

<!-- Add FAQ Modal -->
<div class="modal fade" id="addFaqModal" tabindex="-1" role="dialog" aria-labelledby="addFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFaqModalLabel">Add New FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="input-group input-group-static">
                                <label>Question</label>
                                <input type="text" name="question" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="input-group input-group-static">
                                <label>Answer</label>
                                <textarea name="answer" class="form-control" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Service</label>
                                <select name="service" class="form-control" required>
                                    <?php foreach ($all_services as $service): ?>
                                    <option value="<?php echo htmlspecialchars($service); ?>">
                                        <?php echo htmlspecialchars(ucwords(str_replace('-', ' ', $service))); ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Category (Optional)</label>
                                <input type="text" name="category" class="form-control" list="categories-list">
                                <datalist id="categories-list">
                                    <?php foreach ($all_categories as $category): ?>
                                    <option value="<?php echo htmlspecialchars($category); ?>">
                                    <?php endforeach; ?>
                                </datalist>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" name="quick_add" value="1" class="btn bg-gradient-primary">Add FAQ</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit FAQ Modal -->
<div class="modal fade" id="editFaqModal" tabindex="-1" role="dialog" aria-labelledby="editFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" action="faq-edit.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFaqModalLabel">Edit FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="faq_id" id="edit-faq-id">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="input-group input-group-static">
                                <label>Question</label>
                                <input type="text" name="question" id="edit-question" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="input-group input-group-static">
                                <label>Answer</label>
                                <textarea name="answer" id="edit-answer" class="form-control" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Service</label>
                                <select name="service" id="edit-service" class="form-control" required>
                                    <?php foreach ($all_services as $service): ?>
                                    <option value="<?php echo htmlspecialchars($service); ?>">
                                        <?php echo htmlspecialchars(ucwords(str_replace('-', ' ', $service))); ?>
                                    </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="input-group input-group-static">
                                <label>Category (Optional)</label>
                                <input type="text" name="category" id="edit-category" class="form-control" list="edit-categories-list">
                                <datalist id="edit-categories-list">
                                    <?php foreach ($all_categories as $category): ?>
                                    <option value="<?php echo htmlspecialchars($category); ?>">
                                    <?php endforeach; ?>
                                </datalist>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-gradient-primary">Update FAQ</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteFaqModal" tabindex="-1" role="dialog" aria-labelledby="deleteFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteFaqModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this FAQ? This action cannot be undone.
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
        // Handle edit FAQ
        const editButtons = document.querySelectorAll('.edit-faq');
        const editModal = new bootstrap.Modal(document.getElementById('editFaqModal'));
        
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const faqId = this.getAttribute('data-id');
                const question = this.getAttribute('data-question');
                const answer = this.getAttribute('data-answer');
                const service = this.getAttribute('data-service');
                const category = this.getAttribute('data-category');
                
                document.getElementById('edit-faq-id').value = faqId;
                document.getElementById('edit-question').value = question;
                document.getElementById('edit-answer').value = answer;
                document.getElementById('edit-service').value = service;
                document.getElementById('edit-category').value = category;
                
                editModal.show();
            });
        });
        
        // Handle delete confirmations
        const deleteButtons = document.querySelectorAll('.delete-faq');
        const confirmDeleteBtn = document.getElementById('confirmDelete');
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteFaqModal'));
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const faqId = this.getAttribute('data-id');
                confirmDeleteBtn.setAttribute('href', `manage-faqs.php?delete=${faqId}`);
                deleteModal.show();
            });
        });
    });
</script> 