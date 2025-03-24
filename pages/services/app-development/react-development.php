<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../config/database.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for React development
$why_hire_us = getWhyHireUsContent('react-development');

require_once '../../../components/header.php';
?>

<!-- Page Header -->
<section class="page-header py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="display-4">React Development</h1>
                <p class="lead">Build modern, interactive web applications with React.js</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="/assets/images/services/react-development.svg" alt="React Development" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4" data-aos="fade-up">
                <h2>Modern React.js Development Solutions</h2>
                <p class="lead">We build performant, scalable, and interactive web applications with React.</p>
                <p>Our React development services focus on creating dynamic and responsive user interfaces using the latest React features and best practices. We leverage React's component-based architecture, efficient DOM manipulation through Virtual DOM, and robust ecosystem to deliver high-performance web applications.</p>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-highlights p-4 bg-light rounded">
                    <h3>Key Features</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-check text-primary me-2"></i> Single Page Applications</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Component-Based UI</li>
                        <li><i class="fas fa-check text-primary me-2"></i> State Management</li>
                        <li><i class="fas fa-check text-primary me-2"></i> API Integration</li>
                        <li><i class="fas fa-check text-primary me-2"></i> Performance Optimization</li>
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
        <h2 class="text-center mb-5" data-aos="fade-up">Our React Development Process</h2>
        <div class="row">
            <div class="col-md-3 mb-4" data-aos="fade-up">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-sitemap fa-2x"></i>
                    </div>
                    <h3>Architecture</h3>
                    <p>Planning component structure and data flow</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-2x"></i>
                    </div>
                    <h3>Development</h3>
                    <p>Building components and implementing logic</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-vial fa-2x"></i>
                    </div>
                    <h3>Testing</h3>
                    <p>Ensuring functionality and performance</p>
                </div>
            </div>
            <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card">
                    <div class="process-icon mb-3">
                        <i class="fas fa-rocket fa-2x"></i>
                    </div>
                    <h3>Deployment</h3>
                    <p>Optimizing for production and launch</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Benefits of React Development</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card">
                    <i class="fas fa-bolt fa-3x mb-3"></i>
                    <h3>Performance</h3>
                    <p>Fast rendering with Virtual DOM technology that efficiently updates only what needs to change, resulting in smoother user experiences.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <i class="fas fa-cubes fa-3x mb-3"></i>
                    <h3>Reusable Components</h3>
                    <p>Modular code structure allows for better maintainability, faster development cycles, and consistent UI patterns across your application.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <i class="fas fa-cogs fa-3x mb-3"></i>
                    <h3>Robust Ecosystem</h3>
                    <p>Access to a rich library of tools, add-ons, and community support that accelerates development and solves complex challenges.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">React Technologies We Use</h2>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="tech-card">
                    <i class="fab fa-react fa-3x mb-3"></i>
                    <h4>React Hooks</h4>
                    <p>We use React Hooks for efficient state management and side effects handling in functional components.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card">
                    <i class="fas fa-exchange-alt fa-3x mb-3"></i>
                    <h4>Redux / Context API</h4>
                    <p>For global state management, we implement Redux or Context API depending on your application's complexity.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card">
                    <i class="fas fa-route fa-3x mb-3"></i>
                    <h4>React Router</h4>
                    <p>We implement client-side routing with React Router for seamless navigation in single-page applications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="faq-header">
            <h2 class="faq-title">React Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-column">
                <!-- FAQ Item 1 - Open by default -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <span>What makes React different from other JavaScript frameworks?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>React stands out with its Virtual DOM approach, which optimizes rendering by minimizing actual DOM manipulations. It focuses solely on the view layer, allowing developers to choose their preferred tools for other aspects like routing and state management. React's component-based architecture promotes reusability and maintainability. Additionally, React's one-way data flow makes applications more predictable and easier to debug compared to two-way binding frameworks.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does it take to develop a React application?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Development timelines vary based on project complexity, feature requirements, and design specifications. A simple React application might take 4-6 weeks, while complex applications with multiple integrations can take 3-6 months. During our initial consultation, we'll provide a detailed timeline based on your specific requirements. React's component reusability often allows us to accelerate development compared to other technologies, especially for applications with repeated UI patterns.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can you integrate React with our existing systems?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, React is designed to be incrementally adoptable and works well with existing systems. We can integrate React components into legacy applications, connect React frontends with various backend technologies (Node.js, PHP, Java, .NET, etc.), and set up API integrations with third-party services and databases. Our team has experience creating React interfaces that seamlessly connect with complex enterprise systems while maintaining performance and security.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you provide ongoing maintenance for React applications?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We offer comprehensive maintenance plans for all our React applications. This includes regular updates to ensure compatibility with the latest React versions and browser standards, security patches, performance optimizations, bug fixes, and feature enhancements. Our maintenance services can be tailored to your specific needs, from basic support to dedicated development teams for continuous improvement of your application.</p>
                    </div>
                </div>
            </div>

            <div class="faq-column">
                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What state management solution do you recommend for React?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Our state management recommendations depend on your application's complexity. For simpler applications, React's built-in useState and useContext hooks often provide sufficient state management capabilities. For more complex applications with extensive data flows, we typically recommend Redux (or Redux Toolkit) for its predictable state container and powerful debugging tools. We also work with alternatives like MobX or Zustand when they better align with project requirements. During architecture planning, we'll recommend the most appropriate solution for your specific case.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can you convert our existing website to React?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we can convert existing websites to React-based applications. The approach depends on your current technology stack and goals. We typically offer two paths: incremental migration (gradually replacing parts of your application with React components) or full rebuilding (creating a new React application that replicates and enhances your current functionality). Both approaches preserve your business logic and user experience while modernizing the technology. We'll analyze your current application and recommend the most efficient conversion strategy.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do you ensure performance in React applications?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We implement multiple performance optimization strategies for React applications, including: component memoization to prevent unnecessary re-renders, code splitting to reduce initial load times, lazy loading of components and assets, efficient state management to minimize render cycles, server-side rendering for faster initial page loads when appropriate, optimized build configurations with Webpack, and comprehensive performance monitoring. We also conduct regular performance audits and optimizations throughout the development process.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What testing methodologies do you use for React applications?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We implement a comprehensive testing strategy for React applications that includes: unit testing of individual components and functions using Jest and React Testing Library, integration testing to verify component interactions, end-to-end testing with tools like Cypress to simulate real user scenarios, automated accessibility testing to ensure compliance with WCAG guidelines, performance testing to identify bottlenecks, and cross-browser testing to ensure compatibility. We typically adopt a test-driven development approach, writing tests before or alongside feature implementation.</p>
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
                <h2 class="mb-3">Ready to Build Your React Application?</h2>
                <p class="lead mb-0">Let's create a powerful and interactive web experience for your users.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../components/footer.php'; ?> 