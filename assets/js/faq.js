document.addEventListener('DOMContentLoaded', function() {
    // Get all FAQ items
    const faqItems = document.querySelectorAll('.faq-item');
    
    // Add click event to each FAQ question
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Check if this item is already active
            const isActive = item.classList.contains('active');
            
            // Close all items first (optional - remove this if you want multiple open at once)
            faqItems.forEach(faqItem => {
                faqItem.classList.remove('active');
            });
            
            // Toggle active class on clicked item
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
    
    // SEO Calculator Button functionality (if present)
    const seoCalculator = document.querySelector('.seo-calculator');
    if (seoCalculator) {
        seoCalculator.addEventListener('click', function() {
            // Redirect to SEO calculator page or open modal
            alert('SEO Calculator will open here!');
        });
    }
}); 