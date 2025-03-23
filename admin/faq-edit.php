<?php
define('BASEPATH', true);
require_once '../includes/config.php';
require_once 'includes/admin-auth.php';

session_start();
requireAdminLogin();

// Redirect if no FAQ ID is provided
if (!isset($_POST['faq_id']) || !is_numeric($_POST['faq_id'])) {
    header("Location: manage-faqs.php");
    exit();
}

$faq_id = (int)$_POST['faq_id'];
$question = trim($_POST['question'] ?? '');
$answer = trim($_POST['answer'] ?? '');
$service = trim($_POST['service'] ?? '');
$category = trim($_POST['category'] ?? '');

// Validate input
if (empty($question) || empty($answer) || empty($service)) {
    $_SESSION['error_message'] = "Question, answer, and service are required.";
    header("Location: manage-faqs.php");
    exit();
}

// Update the FAQ
$update_sql = "UPDATE faqs 
              SET question = ?, answer = ?, service_slug = ?, category = ?, updated_at = NOW() 
              WHERE id = ?";

$stmt = $conn->prepare($update_sql);
$stmt->bind_param("ssssi", $question, $answer, $service, $category, $faq_id);

if ($stmt->execute()) {
    $_SESSION['success_message'] = "FAQ updated successfully.";
} else {
    $_SESSION['error_message'] = "Error updating FAQ: " . $conn->error;
}

$stmt->close();

// Redirect back to FAQ management page
header("Location: manage-faqs.php");
exit(); 