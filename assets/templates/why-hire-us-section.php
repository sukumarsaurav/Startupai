<?php
function renderWhyHireUs($service_name, $reasons) {
?>
<!-- Why Hire Us Section -->
<section class="why-hire-us py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Why Choose Us for <?php echo htmlspecialchars($service_name); ?></h2>
                <div class="section-divider"></div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($reasons as $reason): ?>
            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="<?php echo $reason['delay']; ?>">
                <div class="why-hire-card h-100">
                    <div class="card-icon">
                        <i class="<?php echo $reason['icon']; ?>"></i>
                    </div>
                    <h3><?php echo htmlspecialchars($reason['title']); ?></h3>
                    <p><?php echo htmlspecialchars($reason['description']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
}
?> 