<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../includes/config.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for XD design
$why_hire_us = getWhyHireUsContent('xd-design');

// Page specific content
$pageTitle = "Adobe XD Design Services";
$pageDescription = "Create stunning user interfaces and interactive prototypes with Adobe XD";
$serviceName = "Adobe XD Design";
$serviceSlug = "xd-design";

require_once '../../../includes/header.php';
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
                    <img src="../../../assets/images/services/xd-design.svg" alt="<?php echo $serviceName; ?>" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4" data-aos="fade-up">
                    <h2>Professional Adobe XD Design Solutions</h2>
                    <p class="lead"><?php echo $pageDescription; ?></p>
                    <p>Our Adobe XD design services focus on creating stunning user interfaces and interactive prototypes. We utilize XD's powerful features like repeat grids, auto-animate, and voice prototyping to create engaging and innovative digital experiences.</p>
                </div>
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-highlights p-4 bg-light rounded">
                        <h3>Key Features</h3>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-primary me-2"></i> UI Kit Development</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Responsive Design</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Auto-Animate</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Voice Prototyping</li>
                            <li><i class="fas fa-check text-primary me-2"></i> Design Specifications</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hire Us Section -->
    <?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Our XD Design Process</h2>
            <div class="row">
                <div class="col-md-3 mb-4" data-aos="fade-up">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-pencil-ruler fa-2x"></i>
                        </div>
                        <h3>Wireframe</h3>
                        <p>Creating the basic structure and layout</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-palette fa-2x"></i>
                        </div>
                        <h3>Design</h3>
                        <p>Developing visual elements and UI components</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-film fa-2x"></i>
                        </div>
                        <h3>Animate</h3>
                        <p>Adding interactions and animations</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card">
                        <div class="process-icon mb-3">
                            <i class="fas fa-share-alt fa-2x"></i>
                        </div>
                        <h3>Share</h3>
                        <p>Development handoff and collaboration</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Benefits of Adobe XD Design</h2>
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="benefit-card">
                        <i class="fas fa-bolt fa-3x mb-3"></i>
                        <h3>Fast Prototyping</h3>
                        <p>Quick creation of interactive prototypes</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card">
                        <i class="fas fa-magic fa-3x mb-3"></i>
                        <h3>Smooth Animations</h3>
                        <p>Create engaging micro-interactions</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card">
                        <i class="fas fa-sync fa-3x mb-3"></i>
                        <h3>Adobe Integration</h3>
                        <p>Seamless workflow with Creative Cloud</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-header">
                <h2 class="faq-title">Adobe XD Design FAQ's</h2>
                <h3 class="faq-subtitle">Have Any Questions?</h3>
            </div>

            <div class="faq-container">
                <div class="faq-column">
                    <!-- FAQ Item 1 - Open by default -->
                    <div class="faq-item active">
                        <div class="faq-question">
                            <span>What is Adobe XD and why should I use it for my design projects?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Adobe XD (Experience Design) is a vector-based user experience design tool developed by Adobe Inc. It's specifically built for creating interactive prototypes, wireframes, and designs for websites, mobile apps, and other digital experiences. XD excels in its integration with other Adobe Creative Cloud applications, powerful prototyping capabilities, and collaborative features. It's ideal for projects where you need seamless Adobe ecosystem integration, robust animation capabilities, and efficient design-to-development handoff.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How does your Adobe XD design process work?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our Adobe XD design process begins with understanding your business requirements and user goals. We then create wireframes to establish the basic structure and layout of your digital product. Next, we develop visual designs including UI components, typography, and color schemes. We build interactive prototypes with transitions and animations using XD's powerful auto-animate feature. We conduct usability testing and make refinements based on feedback. Finally, we prepare assets and specifications for development handoff, ensuring your design is implemented accurately.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What are the advantages of Adobe XD over other design tools?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Adobe XD offers several unique advantages: seamless integration with the Adobe Creative Cloud ecosystem (Photoshop, Illustrator, etc.); powerful auto-animate features for creating micro-interactions without coding; repeat grid functionality for quickly creating consistent design elements; voice prototyping for designing voice-controlled interfaces; and a growing plugin ecosystem that extends its capabilities. XD also offers an efficient design-to-development workflow with comprehensive developer handoff features, making it easier for developers to implement your designs accurately.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can you create a design system using Adobe XD?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we specialize in creating comprehensive design systems using Adobe XD. We establish reusable components, styles, and patterns that ensure consistency across your digital products. XD's component states and properties features allow us to create dynamic UI elements with multiple variations. We organize components hierarchically and document usage guidelines to ensure proper implementation. These design systems serve as a single source of truth for your brand's digital presence, streamlining future design work and ensuring visual and functional consistency.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-column">
                    <!-- FAQ Item 5 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>How do you handle the transition from XD designs to development?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We facilitate a smooth design-to-development handoff using Adobe XD's developer handoff features. This includes providing developers with access to design specifications, measurements, color codes, and assets. We create interactive prototypes that clearly demonstrate expected behaviors and transitions. For complex projects, we provide additional documentation on interactions, responsive behavior, and edge cases. We also remain available during the development phase to answer questions, provide clarification, and ensure the final implementation matches the design vision.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can you create responsive designs with Adobe XD?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely! We create fully responsive designs in Adobe XD that work seamlessly across all screen sizes and devices. We use XD's responsive resize feature to design components that adapt to different screen dimensions. We typically design for mobile, tablet, and desktop breakpoints, ensuring your interface looks and functions optimally on each device. We also use XD's artboard presets for various device sizes and create responsive variations of key components. This approach ensures your digital product provides an excellent user experience regardless of how users access it.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do you provide the source files after the project is complete?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we provide all Adobe XD source files upon project completion. This includes the main XD document with all artboards, components, and assets organized in a logical structure. We also provide any linked assets or resources used in the design. The files are well-organized with proper naming conventions for easy navigation. Additionally, if you have an Adobe Creative Cloud subscription, we can share the XD files directly through Adobe Cloud Documents, allowing for easier access and version control for future updates.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What makes your Adobe XD design services different?</span>
                            <button class="toggle-btn">
                                <span class="icon"></span>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our Adobe XD design services stand out through our deep expertise in creating seamless interactive experiences. We specialize in XD's advanced features like auto-animate, component states, and responsive resize to create sophisticated yet maintainable designs. We take a systematic approach to design, focusing on creating scalable design systems rather than just individual screens. Our team has extensive experience with the entire Adobe Creative Cloud ecosystem, enabling us to leverage integrated workflows across applications. Additionally, we focus on creating designs that not only look beautiful but also translate efficiently to development, reducing implementation time and costs.</p>
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
                    <h2 class="mb-3">Ready to Create Amazing Designs?</h2>
                    <p class="lead mb-0">Let's bring your vision to life with Adobe XD.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once '../../../includes/footer.php'; ?> 