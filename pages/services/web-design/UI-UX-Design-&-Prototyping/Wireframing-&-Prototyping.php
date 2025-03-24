<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Wireframing & Prototyping
$why_hire_us = getWhyHireUsContent('wireframing-prototyping');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Wireframing & Prototyping</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Visualize and validate your digital product before development
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Service Overview -->
<section class="service-overview py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <img src="/assets/images/services/wireframing-prototyping.svg" alt="Wireframing and Prototyping" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Wireframing & Prototyping Services</h2>
                <p>
                    Our wireframing and prototyping services help transform your ideas into tangible, interactive models before development begins. We create visual representations of your website or application that allow you to test concepts, gather feedback, and refine the user experience early in the design process. By identifying potential issues and making improvements before coding starts, we save you time, money, and ensure a better end product.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-pencil-ruler text-primary"></i>
                        </div>
                        <div>
                            <h5>Low-Fidelity Wireframes</h5>
                            <p>Simple sketches and layouts that establish the basic structure and information hierarchy.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-object-group text-primary"></i>
                        </div>
                        <div>
                            <h5>High-Fidelity Mockups</h5>
                            <p>Detailed visual designs that showcase the exact look and feel of your final product.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-laptop-code text-primary"></i>
                        </div>
                        <div>
                            <h5>Interactive Prototypes</h5>
                            <p>Clickable models that simulate user flows and interactions for realistic testing.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-comments text-primary"></i>
                        </div>
                        <div>
                            <h5>Feedback Integration</h5>
                            <p>Iterative refinement based on stakeholder and user testing feedback.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<?php renderWhyHireUs($why_hire_us['service_name'], $why_hire_us['reasons']); ?>

<!-- Process -->
<section class="process-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Wireframing & Prototyping Process</h2>
                <p class="section-description">
                    A systematic approach to visualizing and validating your digital product
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-lightbulb fa-3x text-primary"></i>
                    </div>
                    <h4>Discovery & Planning</h4>
                    <p>We analyze your requirements, user needs, and business goals to establish a clear direction for the wireframing process.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-pencil-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Wireframe Creation</h4>
                    <p>We develop low-fidelity outlines of your interface to establish page layouts, navigation, and content organization.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-desktop fa-3x text-primary"></i>
                    </div>
                    <h4>Interactive Prototyping</h4>
                    <p>We transform wireframes into clickable prototypes that simulate user flows and interactions for realistic testing.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-sync-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Refinement & Validation</h4>
                    <p>We gather feedback through testing and stakeholder reviews, iterating the design to optimize user experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wireframing Types -->
<section class="wireframing-types py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Wireframing & Prototyping Approaches</h2>
                <p class="section-description">
                    Different methods for different stages of your project
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-pen fa-2x text-primary"></i>
                    </div>
                    <h4>Low-Fidelity Wireframes</h4>
                    <p>Simple, sketch-like diagrams that outline basic page structure, layout, and information hierarchy without visual design elements. Perfect for early ideation and quickly exploring multiple concepts.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-vector-square fa-2x text-primary"></i>
                    </div>
                    <h4>Medium-Fidelity Wireframes</h4>
                    <p>More detailed representations that include accurate spacing, specific content blocks, and distinguishable UI elements. Ideal for refining layouts and establishing visual hierarchy before aesthetic decisions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-paint-brush fa-2x text-primary"></i>
                    </div>
                    <h4>High-Fidelity Mockups</h4>
                    <p>Pixel-perfect visual designs that show exactly how the final product will look, including colors, typography, images, and precise UI elements. Best for stakeholder presentations and finalizing visual design.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-mouse-pointer fa-2x text-primary"></i>
                    </div>
                    <h4>Click-Through Prototypes</h4>
                    <p>Simple interactive models that link screens together, allowing users to navigate between pages but with limited interactive elements. Excellent for testing information architecture and basic user flows.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-hand-pointer fa-2x text-primary"></i>
                    </div>
                    <h4>Interactive Prototypes</h4>
                    <p>Advanced models with realistic interactions, animations, and state changes that closely mimic the final product behavior. Perfect for comprehensive user testing and validating complex interactions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-code fa-2x text-primary"></i>
                    </div>
                    <h4>Coded Prototypes</h4>
                    <p>Functional prototypes built with actual code that can test technical feasibility alongside user experience. Ideal for complex projects where interactions, data, or technical constraints need validation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools We Use -->
<section class="tools-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Tools We Use</h2>
                <p class="section-description">
                    Industry-standard design and prototyping platforms
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="tool-card text-center h-100 p-4 bg-white rounded shadow-sm">
                    <img src="/assets/images/tools/figma.svg" alt="Figma" class="img-fluid mb-3" style="height: 60px;">
                    <h4>Figma</h4>
                    <p>Collaborative interface design tool for creating wireframes, mockups, and interactive prototypes with real-time collaboration.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tool-card text-center h-100 p-4 bg-white rounded shadow-sm">
                    <img src="/assets/images/tools/sketch.svg" alt="Sketch" class="img-fluid mb-3" style="height: 60px;">
                    <h4>Sketch</h4>
                    <p>Vector-based design tool specialized for user interface design with powerful prototyping capabilities.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tool-card text-center h-100 p-4 bg-white rounded shadow-sm">
                    <img src="/assets/images/tools/adobexd.svg" alt="Adobe XD" class="img-fluid mb-3" style="height: 60px;">
                    <h4>Adobe XD</h4>
                    <p>All-in-one design platform for creating wireframes, prototypes, and sharing interactive previews.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tool-card text-center h-100 p-4 bg-white rounded shadow-sm">
                    <img src="/assets/images/tools/invision.svg" alt="InVision" class="img-fluid mb-3" style="height: 60px;">
                    <h4>InVision</h4>
                    <p>Prototyping platform that transforms static designs into clickable, interactive prototypes with advanced animations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Wireframing & Prototyping</h2>
                <p class="section-description">
                    Why investing in pre-development visualization pays off
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h4>Cost Efficiency</h4>
                    <p>Identify and resolve design issues early when changes are significantly less expensive than during or after development.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-clock fa-2x text-primary"></i>
                    </div>
                    <h4>Time Savings</h4>
                    <p>Streamline development by providing clear, validated blueprints that reduce back-and-forth and prevent costly rework.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-users fa-2x text-primary"></i>
                    </div>
                    <h4>Stakeholder Alignment</h4>
                    <p>Get everyone on the same page with tangible representations that ensure shared understanding of the product vision.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-user-check fa-2x text-primary"></i>
                    </div>
                    <h4>User Validation</h4>
                    <p>Test concepts with real users earlier in the process, gathering valuable feedback before investing in development.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bullseye fa-2x text-primary"></i>
                    </div>
                    <h4>Focused Development</h4>
                    <p>Provide developers with clear visual specifications that eliminate ambiguity and improve implementation accuracy.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Better End Product</h4>
                    <p>Deliver a more refined, user-friendly product by addressing usability issues before they become coded problems.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="mb-3">Ready to Visualize Your Digital Product?</h2>
                <p class="lead mb-0">
                    Let's create wireframes and prototypes that set your project up for success.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-header">
            <h2 class="faq-title">Wireframing & Prototyping FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    What's the difference between wireframes and prototypes?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Wireframes are static, simplified visual representations that outline the structure, layout, and information hierarchy of a page without focusing on visual design elements like colors or images. They're essentially the skeleton of your interface. Prototypes, on the other hand, are interactive simulations of the final product that demonstrate functionality and user flows. They range from simple click-through models to highly detailed interactive experiences that closely mimic the final product. While wireframes help establish the foundation and layout, prototypes bring the user experience to life and allow for testing interactions.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How long does the wireframing and prototyping process take?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The timeline varies depending on project complexity, number of screens, and level of detail required. Simple projects with limited screens might take 1-2 weeks for wireframing and another 1-2 weeks for prototyping. More complex projects with many screens and intricate interactions can take 4-8 weeks or more. Our process typically includes multiple rounds of feedback and refinement to ensure the final designs meet your objectives. We'll provide a more specific timeline after understanding your project requirements during our initial consultation.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    Can we test the prototype with real users?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Absolutely! User testing with prototypes is one of the most valuable aspects of the prototyping process. We can set up moderated user testing sessions where we observe users interacting with your prototype and gather insights, or create shareable prototype links for remote testing. We can also integrate with specialized user testing platforms that provide detailed analytics on user behavior. This feedback is invaluable for identifying usability issues, validating design decisions, and refining the user experience before development begins, saving both time and money in the long run.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 