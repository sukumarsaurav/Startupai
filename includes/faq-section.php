<?php
require_once __DIR__ . '/get_faqs.php';

/**
 * Renders the FAQ section for a service
 * 
 * @param string $service_slug The service slug used in the database
 * @param string $service_name The display name of the service
 * @return void
 */
function renderFaqSection($service_slug, $service_name) {
    // Get FAQs from database
    $faqs = getFaqsByService($service_slug);
    
    // Return early if no FAQs
    if (empty($faqs)) {
        return;
    }
    
    // Start the section
    ?>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="faqAccordion">
                        <?php 
                        foreach ($faqs as $index => $faq) {
                            $isFirst = ($index === 0);
                            $delay = $index * 100;
                            $faqId = "faq" . $faq['id'];
                        ?>
                        <div class="accordion-item" data-aos="fade-up" <?php echo $index > 0 ? 'data-aos-delay="'.$delay.'"' : ''; ?>>
                            <h2 class="accordion-header" id="<?php echo $faqId; ?>Heading">
                                <button class="accordion-button <?php echo $isFirst ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $faqId; ?>Collapse" aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" aria-controls="<?php echo $faqId; ?>Collapse">
                                    <?php echo htmlspecialchars($faq['question']); ?>
                                </button>
                            </h2>
                            <div id="<?php echo $faqId; ?>Collapse" class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>" aria-labelledby="<?php echo $faqId; ?>Heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <?php echo nl2br(htmlspecialchars($faq['answer'])); ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

/**
 * Renders the FAQ section organized by category
 * 
 * @param string $service_slug The service slug used in the database
 * @param string $service_name The display name of the service
 * @return void
 */
function renderFaqSectionByCategory($service_slug, $service_name) {
    // Get FAQs from database
    $categorizedFaqs = getFaqsByCategory($service_slug);
    
    // Return early if no FAQs
    if (empty($categorizedFaqs)) {
        return;
    }
    
    // Start the section
    ?>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Frequently Asked Questions</h2>
            
            <?php foreach ($categorizedFaqs as $category => $faqs): ?>
                <div class="mb-5">
                    <h3 class="mb-4"><?php echo htmlspecialchars($category); ?> Questions</h3>
                    <div class="accordion" id="faqAccordion<?php echo str_replace(' ', '', $category); ?>">
                        <?php 
                        foreach ($faqs as $index => $faq) {
                            $isFirst = ($index === 0);
                            $delay = $index * 100;
                            $faqId = "faq" . $faq['id'];
                        ?>
                        <div class="accordion-item" data-aos="fade-up" <?php echo $index > 0 ? 'data-aos-delay="'.$delay.'"' : ''; ?>>
                            <h2 class="accordion-header" id="<?php echo $faqId; ?>Heading">
                                <button class="accordion-button <?php echo $isFirst ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $faqId; ?>Collapse" aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" aria-controls="<?php echo $faqId; ?>Collapse">
                                    <?php echo htmlspecialchars($faq['question']); ?>
                                </button>
                            </h2>
                            <div id="<?php echo $faqId; ?>Collapse" class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>" aria-labelledby="<?php echo $faqId; ?>Heading" data-bs-parent="#faqAccordion<?php echo str_replace(' ', '', $category); ?>">
                                <div class="accordion-body">
                                    <?php echo nl2br(htmlspecialchars($faq['answer'])); ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
}

/**
 * Renders the FAQ section in a two-column layout for legacy support
 * 
 * @param string $service_slug The service slug used in the database
 * @param string $service_name The display name of the service
 * @return void
 */
function renderLegacyFaqSection($service_slug, $service_name) {
    // Get FAQs from database
    $faqs = getFaqsByService($service_slug);
    
    // Return early if no FAQs
    if (empty($faqs)) {
        return;
    }
    
    // Split FAQs into two columns
    $halfCount = ceil(count($faqs) / 2);
    $firstColumnFaqs = array_slice($faqs, 0, $halfCount);
    $secondColumnFaqs = array_slice($faqs, $halfCount);
    
    // Start the section
    ?>
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Frequently Asked Questions About <?php echo htmlspecialchars($service_name); ?></h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <?php foreach ($firstColumnFaqs as $faq): ?>
                    <div class="mb-4">
                        <h3 class="h5"><?php echo htmlspecialchars($faq['question']); ?></h3>
                        <p><?php echo nl2br(htmlspecialchars($faq['answer'])); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <?php foreach ($secondColumnFaqs as $faq): ?>
                    <div class="mb-4">
                        <h3 class="h5"><?php echo htmlspecialchars($faq['question']); ?></h3>
                        <p><?php echo nl2br(htmlspecialchars($faq['answer'])); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?> 