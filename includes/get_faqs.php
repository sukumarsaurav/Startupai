<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Get FAQs for a specific service from the database
 * 
 * @param string $service_slug The service slug to get FAQs for
 * @param int $limit Optional limit to the number of FAQs returned
 * @return array Array of FAQ items
 */
function getFaqsByService($service_slug, $limit = 10) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            SELECT question, answer
            FROM faqs
            WHERE service = :service
            ORDER BY display_order ASC
            LIMIT :limit
        ");
        
        $stmt->bindParam(':service', $service_slug, PDO::PARAM_STR);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Log error but return empty array to prevent breaking the page
        error_log("Database error fetching FAQs: " . $e->getMessage());
        return [];
    }
}

/**
 * Get general FAQs not associated with a specific service
 * 
 * @param int $limit Optional limit to the number of FAQs returned
 * @return array Array of FAQ items
 */
function getGeneralFaqs($limit = 5) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            SELECT question, answer
            FROM faqs
            WHERE service = 'general' OR service = ''
            ORDER BY display_order ASC
            LIMIT :limit
        ");
        
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Log error but return empty array to prevent breaking the page
        error_log("Database error fetching general FAQs: " . $e->getMessage());
        return [];
    }
}

/**
 * Get all FAQs for a service, falling back to general FAQs if none exist
 * 
 * @param string $service_slug The service slug to get FAQs for
 * @param int $limit Optional limit to the number of FAQs returned
 * @return array Array of FAQ items
 */
function getAllFaqs($service_slug, $limit = 10) {
    $serviceFaqs = getFaqsByService($service_slug, $limit);
    
    // If no service-specific FAQs, return general FAQs
    if (empty($serviceFaqs)) {
        return getGeneralFaqs($limit);
    }
    
    return $serviceFaqs;
} 