<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../includes/header.php';

// Page specific content
$pageTitle = "Figma Design Services";
$pageDescription = "Create scalable and collaborative design systems with Figma";
$serviceName = "Figma Design";
$serviceSlug = "figma-design";
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4"><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="../../../assets/images/services/figma-design.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Modern Design Solutions with Figma</h2>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <p>Our Figma design services focus on creating modern, efficient, and collaborative design workflows. We utilize Figma's real-time collaboration features, auto-layout capabilities, and component systems to deliver consistent and scalable designs.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> Design System Creation</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Component Libraries</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Auto-Layout Mastery</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Interactive Prototypes</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Collaboration Tools</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php
$reasons = [
    "Figma Certified Designers" => "Our team includes Figma certified designers who understand the platform's full capabilities and best practices.",
    "Scalable Design Systems" => "We create robust design systems with organized components, styles, and documentation that grow with your product.",
    "Efficient Workflows" => "Our Figma expertise means we can set up efficient design processes that save time and reduce inconsistencies.",
    "Developer-Friendly Handoffs" => "We structure our Figma files and specifications to make the handoff to development teams smooth and precise."
];

renderWhyHireUs($serviceName, $reasons);
?>

<!-- Process Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Our Figma Design Process</h2>
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-sitemap fa-2x"></i>
                    </div>
                    <h3>Structure</h3>
                    <p>Setting up design systems and component libraries</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-2x"></i>
                    </div>
                    <h3>Design</h3>
                    <p>Creating responsive layouts and components</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-project-diagram fa-2x"></i>
                    </div>
                    <h3>Prototype</h3>
                    <p>Building interactive flows and animations</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code-branch fa-2x"></i>
                    </div>
                    <h3>Handoff</h3>
                    <p>Developer-friendly design specifications</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of Figma Design</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card">
                    <i class="fas fa-users fa-3x mb-3"></i>
                    <h3>Real-time Collaboration</h3>
                    <p>Work together seamlessly with your team in real-time</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <i class="fas fa-layer-group fa-3x mb-3"></i>
                    <h3>Scalable Systems</h3>
                    <p>Create consistent designs with reusable components</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <i class="fas fa-code fa-3x mb-3"></i>
                    <h3>Developer Friendly</h3>
                    <p>Easy design-to-development handoff process</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item" data-aos="fade-up">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                Why should we use Figma for our design projects?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Figma offers several advantages over other design tools. It's cloud-based, enabling real-time collaboration with unlimited viewers. It works on any operating system through a browser. Figma's component system and auto-layout features make creating consistent, responsive designs easier. Its developer handoff tools streamline implementation, and its free tier is generous for teams just starting out.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                How does Figma help with design systems?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Figma excels at design systems through its powerful components and styles features. Components can be nested and have variants to accommodate different states. When you update a main component, all instances update automatically. Figma's styles (colors, text, effects, etc.) create consistent design language. Libraries allow sharing components across files, and auto-layout makes responsive components possible.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                How do you handle the transition from another design tool to Figma?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We manage transitions to Figma through a structured approach: first assessing your current design assets and workflow, then creating a migration plan. We can import files from tools like Sketch, Adobe XD, or Illustrator, reorganizing them to leverage Figma's strengths. We'll set up your team workspace with proper permissions, establish file structure best practices, and provide training sessions to get your team comfortable with Figma.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                                How do you collaborate with developers using Figma?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our developer collaboration process using Figma is comprehensive. We provide developers view access to design files for direct reference. We use Figma's inspection features to allow devs to extract CSS, measurements, and assets. Our designs include interactive prototypes to demonstrate interactions, organized components with clear naming conventions, and detailed documentation for complex elements. We can also implement design tokens to streamline the design-to-code process.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="mb-3">Ready to Create Your Design System?</h2>
                <p class="lead mb-0">Let's build a scalable and collaborative design workflow with Figma.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="../../contact.php" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../includes/footer.php';
?> 