<?php
/**
 * FAQ Management Functions
 * 
 * This file contains functions to retrieve and manage FAQ content
 */

/**
 * Get FAQs for a specific service
 * 
 * @param string $service_slug The slug of the service
 * @return array An array of FAQ items with questions and answers
 */
function getFaqsByService($service_slug) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "SELECT 
                fi.id, 
                fi.question, 
                fi.answer, 
                fsm.display_order, 
                fsm.is_expanded,
                fc.name as category_name,
                fc.slug as category_slug
              FROM 
                faq_items fi
              JOIN 
                faq_service_mapping fsm ON fi.id = fsm.faq_id
              LEFT JOIN 
                faq_categories fc ON fsm.category_id = fc.id
              WHERE 
                fsm.service_slug = :service_slug
                AND fi.is_active = 1
              ORDER BY 
                fsm.display_order ASC";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':service_slug', $service_slug);
    $stmt->execute();
    
    $faqs = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $faqs[] = $row;
    }
    
    return $faqs;
}

/**
 * Get all FAQ categories
 * 
 * @return array An array of FAQ categories
 */
function getFaqCategories() {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "SELECT id, name, slug, description FROM faq_categories ORDER BY name";
    $stmt = $db->prepare($query);
    $stmt->execute();
    
    $categories = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $categories[] = $row;
    }
    
    return $categories;
}

/**
 * Get FAQs organized by category for a specific service
 * 
 * @param string $service_slug The slug of the service
 * @return array An array of FAQ items organized by category
 */
function getFaqsByCategory($service_slug) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "SELECT 
                fi.id, 
                fi.question, 
                fi.answer, 
                fsm.display_order, 
                fsm.is_expanded,
                fc.id as category_id,
                fc.name as category_name,
                fc.slug as category_slug
              FROM 
                faq_items fi
              JOIN 
                faq_service_mapping fsm ON fi.id = fsm.faq_id
              LEFT JOIN 
                faq_categories fc ON fsm.category_id = fc.id
              WHERE 
                fsm.service_slug = :service_slug
                AND fi.is_active = 1
              ORDER BY 
                fc.name ASC, fsm.display_order ASC";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':service_slug', $service_slug);
    $stmt->execute();
    
    $faqs_by_category = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $category_slug = $row['category_slug'] ?: 'uncategorized';
        $category_name = $row['category_name'] ?: 'Uncategorized';
        
        if (!isset($faqs_by_category[$category_slug])) {
            $faqs_by_category[$category_slug] = [
                'name' => $category_name,
                'faqs' => []
            ];
        }
        
        $faqs_by_category[$category_slug]['faqs'][] = [
            'id' => $row['id'],
            'question' => $row['question'],
            'answer' => $row['answer'],
            'display_order' => $row['display_order'],
            'is_expanded' => $row['is_expanded']
        ];
    }
    
    return $faqs_by_category;
}

/**
 * Add a new FAQ item
 * 
 * @param string $question The question text
 * @param string $answer The answer text
 * @param int $display_order The display order
 * @return int|bool The ID of the new FAQ item or false on failure
 */
function addFaqItem($question, $answer, $display_order = 0) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "INSERT INTO faq_items (question, answer, display_order) 
              VALUES (:question, :answer, :display_order)";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':question', $question);
    $stmt->bindParam(':answer', $answer);
    $stmt->bindParam(':display_order', $display_order);
    
    if ($stmt->execute()) {
        return $db->lastInsertId();
    }
    
    return false;
}

/**
 * Map a FAQ item to a service
 * 
 * @param int $faq_id The FAQ item ID
 * @param string $service_slug The service slug
 * @param int $category_id The category ID
 * @param int $display_order The display order
 * @param bool $is_expanded Whether the FAQ is expanded by default
 * @return bool Success or failure
 */
function mapFaqToService($faq_id, $service_slug, $category_id = null, $display_order = 0, $is_expanded = false) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "INSERT INTO faq_service_mapping (faq_id, service_slug, category_id, display_order, is_expanded) 
              VALUES (:faq_id, :service_slug, :category_id, :display_order, :is_expanded)
              ON DUPLICATE KEY UPDATE 
                category_id = :category_id,
                display_order = :display_order,
                is_expanded = :is_expanded";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':faq_id', $faq_id);
    $stmt->bindParam(':service_slug', $service_slug);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':display_order', $display_order);
    $stmt->bindParam(':is_expanded', $is_expanded, PDO::PARAM_BOOL);
    
    return $stmt->execute();
}

/**
 * Update an existing FAQ item
 * 
 * @param int $faq_id The FAQ item ID
 * @param string $question The question text
 * @param string $answer The answer text
 * @param int $display_order The display order
 * @param bool $is_active Whether the FAQ is active
 * @return bool Success or failure
 */
function updateFaqItem($faq_id, $question, $answer, $display_order = null, $is_active = null) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "UPDATE faq_items SET 
                question = :question, 
                answer = :answer";
    
    if ($display_order !== null) {
        $query .= ", display_order = :display_order";
    }
    
    if ($is_active !== null) {
        $query .= ", is_active = :is_active";
    }
    
    $query .= " WHERE id = :faq_id";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':question', $question);
    $stmt->bindParam(':answer', $answer);
    $stmt->bindParam(':faq_id', $faq_id);
    
    if ($display_order !== null) {
        $stmt->bindParam(':display_order', $display_order);
    }
    
    if ($is_active !== null) {
        $stmt->bindParam(':is_active', $is_active, PDO::PARAM_BOOL);
    }
    
    return $stmt->execute();
}

/**
 * Delete a FAQ item
 * 
 * @param int $faq_id The FAQ item ID
 * @return bool Success or failure
 */
function deleteFaqItem($faq_id) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "DELETE FROM faq_items WHERE id = :faq_id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':faq_id', $faq_id);
    
    return $stmt->execute();
}

/**
 * Remove a FAQ mapping from a service
 * 
 * @param int $faq_id The FAQ item ID
 * @param string $service_slug The service slug
 * @return bool Success or failure
 */
function removeFaqFromService($faq_id, $service_slug) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "DELETE FROM faq_service_mapping 
              WHERE faq_id = :faq_id AND service_slug = :service_slug";
    
    $stmt = $db->prepare($query);
    $stmt->bindParam(':faq_id', $faq_id);
    $stmt->bindParam(':service_slug', $service_slug);
    
    return $stmt->execute();
}
?> 