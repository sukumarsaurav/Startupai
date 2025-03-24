<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../config/database.php';
require_once '../../../config/why-hire-us.php';
require_once '../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Next.js development
$why_hire_us = getWhyHireUsContent('nextjs-development');

require_once '../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Next.js Development</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Build SEO-friendly, server-rendered React applications with modern performance
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
                <img src="/assets/images/services/nextjs-development.svg" alt="Next.js Development" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Advanced Next.js Development Solutions</h2>
                <p>
                    Our Next.js development services focus on creating modern web applications that combine the best of server-side rendering and static site generation. We leverage Next.js's powerful features to deliver blazing-fast websites with excellent SEO, automatic code splitting, and optimized performance.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-server text-primary"></i>
                        </div>
                        <div>
                            <h5>Server-Side Rendering</h5>
                            <p>Pre-rendered HTML for improved SEO and faster initial page loads.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-file-code text-primary"></i>
                        </div>
                        <div>
                            <h5>Static Site Generation</h5>
                            <p>Generate static HTML at build time for maximum performance.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-route text-primary"></i>
                        </div>
                        <div>
                            <h5>API Routes</h5>
                            <p>Build API endpoints easily within your Next.js application.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-sync text-primary"></i>
                        </div>
                        <div>
                            <h5>Incremental Static Regeneration</h5>
                            <p>Update static content without rebuilding the entire site.</p>
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
                <h2 class="section-title">Our Next.js Development Process</h2>
                <p class="section-description">
                    A systematic approach to delivering high-performance Next.js applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-project-diagram fa-3x text-primary"></i>
                    </div>
                    <h4>Planning</h4>
                    <p>We define the architecture and data fetching strategy, choosing between SSR, SSG, or ISR based on your specific needs.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-code fa-3x text-primary"></i>
                    </div>
                    <h4>Development</h4>
                    <p>Our team builds pages, components, and API routes, following Next.js best practices for optimal performance.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-tachometer-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Optimization</h4>
                    <p>We fine-tune performance through image optimization, code splitting, and implement SEO best practices.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-cloud-upload-alt fa-3x text-primary"></i>
                    </div>
                    <h4>Deployment</h4>
                    <p>We configure deployment pipelines and CI/CD workflows for seamless updates to production.</p>
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
                <h2 class="section-title">Benefits of Next.js Development</h2>
                <p class="section-description">
                    Why Next.js is the ideal framework for modern web applications
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>SEO Friendly</h4>
                    <p>Server-side rendering provides search engines with pre-rendered HTML, significantly improving your site's visibility and organic traffic.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-bolt fa-2x text-primary"></i>
                    </div>
                    <h4>Superior Performance</h4>
                    <p>Automatic code splitting, image optimization, and built-in performance enhancements create lightning-fast user experiences.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Enterprise Scalability</h4>
                    <p>Built for growth with excellent infrastructure support and easy integration with content management systems and APIs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies -->
<section class="technologies-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Next.js Technologies We Use</h2>
                <p class="section-description">
                    Modern tools and technologies for building cutting-edge Next.js applications
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
                <div class="tech-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <img src="/assets/images/technologies/nextjs-logo.svg" alt="Next.js" class="tech-logo mb-3" height="60">
                    <h4>Next.js</h4>
                    <p>The core framework for building React applications with SSR and SSG capabilities.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <img src="/assets/images/technologies/vercel-logo.svg" alt="Vercel" class="tech-logo mb-3" height="60">
                    <h4>Vercel</h4>
                    <p>Platform for deploying Next.js applications with global CDN and automatic scaling.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <img src="/assets/images/technologies/typescript-logo.svg" alt="TypeScript" class="tech-logo mb-3" height="60">
                    <h4>TypeScript</h4>
                    <p>Static typing for JavaScript to improve code quality and developer experience.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <img src="/assets/images/technologies/tailwind-logo.svg" alt="Tailwind CSS" class="tech-logo mb-3" height="60">
                    <h4>Tailwind CSS</h4>
                    <p>Utility-first CSS framework for rapid UI development in Next.js applications.</p>
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
                <h2 class="mb-3">Ready to Build with Next.js?</h2>
                <p class="lead mb-0">
                    Let's create a blazing-fast, SEO-friendly web application for your business.
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
            <h2 class="faq-title">Next.js Development FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-column">
                <!-- FAQ Item 1 -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <span>What is Next.js and why should I use it?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Next.js is a React framework that enables server-side rendering, static site generation, and other performance optimizations for React applications. It's ideal for businesses that need SEO-friendly websites with fast loading times and an excellent user experience. Next.js offers the best of both worlds: the interactivity of React with the SEO benefits of server-rendered HTML.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How does Next.js improve SEO?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Next.js improves SEO through server-side rendering (SSR) and static site generation (SSG). Unlike traditional React applications that render content on the client side, Next.js can pre-render pages on the server, delivering complete HTML to search engines. This helps search engines better understand and index your content, leading to improved search rankings.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What types of websites work best with Next.js?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Next.js is versatile and works well for various website types, including:</p>
                        <ul>
                            <li>E-commerce platforms</li>
                            <li>Content-heavy websites and blogs</li>
                            <li>SaaS applications</li>
                            <li>Corporate websites</li>
                            <li>Marketing websites</li>
                            <li>Progressive Web Apps (PWAs)</li>
                        </ul>
                        <p>It's particularly beneficial for websites where SEO, performance, and user experience are priorities.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does it take to build a Next.js application?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>The timeline for a Next.js application depends on its complexity, features, and scope. A simple marketing website might take 4-6 weeks, while a complex e-commerce platform could take 3-6 months. During our initial consultation, we'll assess your requirements and provide a detailed timeline for your specific project.</p>
                    </div>
                </div>
            </div>

            <div class="faq-column">
                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can Next.js integrate with my existing systems?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, Next.js can integrate with virtually any backend system or API. Whether you're using a headless CMS like Contentful, an e-commerce platform like Shopify, or custom REST/GraphQL APIs, Next.js offers flexible data fetching methods that make integration straightforward. We have experience connecting Next.js applications to various backend systems and can ensure seamless integration with your existing infrastructure.</p>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What's the difference between Next.js and regular React?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>While both are built on React, Next.js extends React with additional features like:</p>
                        <ul>
                            <li>Server-side rendering and static site generation</li>
                            <li>File-based routing system</li>
                            <li>API routes for building backend functionality</li>
                            <li>Built-in image optimization</li>
                            <li>Automatic code splitting</li>
                            <li>Zero configuration (works out of the box)</li>
                        </ul>
                        <p>These features make Next.js more powerful for production applications while maintaining all the benefits of React.</p>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How is Next.js deployed and hosted?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Next.js applications can be deployed to various hosting platforms. We commonly use Vercel (created by the makers of Next.js) for the most seamless deployment experience with features like preview deployments and edge caching. Other options include AWS Amplify, Netlify, or traditional hosting with services like AWS, Google Cloud, or Azure. We'll recommend the best hosting solution based on your specific requirements and budget.</p>
                    </div>
                </div>

                <!-- FAQ Item 8 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do you ensure my Next.js application is high-performance?</span>
                        <button class="toggle-btn">
                            <span class="icon"></span>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We implement multiple performance optimization strategies, including:</p>
                        <ul>
                            <li>Selecting the appropriate rendering method (SSR, SSG, or ISR) for each page</li>
                            <li>Implementing efficient code splitting and lazy loading</li>
                            <li>Using the Next.js Image component for automatic image optimization</li>
                            <li>Minimizing JavaScript bundle size</li>
                            <li>Implementing caching strategies</li>
                            <li>Regular performance audits with tools like Lighthouse</li>
                            <li>Optimizing for Core Web Vitals</li>
                        </ul>
                        <p>These strategies ensure your application delivers exceptional performance to users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../components/footer.php'; ?> 