<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../config/database.php';
require_once '../../../../config/why-hire-us.php';
require_once '../../../../assets/templates/why-hire-us-section.php';

// Get Why Hire Us content for Hospitality Websites
$why_hire_us = getWhyHireUsContent('hospitality-websites');

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="fw-bold" data-aos="fade-up">Hospitality & Travel Website Design</h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="100">
                    Captivating, conversion-focused websites for hotels, resorts, tourism, and travel businesses
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
                <img src="/assets/images/services/hospitality-websites.svg" alt="Hospitality Website Design" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h2 class="mb-4">Hospitality & Travel Website Design Services</h2>
                <p>
                    Our specialized hospitality website design services help hotels, resorts, restaurants, tour operators, and travel businesses create immersive digital experiences that inspire bookings and drive direct revenue. We develop visually stunning, user-friendly websites that showcase your unique offerings, streamline the booking process, and create a seamless journey from online discovery to in-person experience.
                </p>
                <div class="features mt-4">
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-images text-primary"></i>
                        </div>
                        <div>
                            <h5>Visual Storytelling</h5>
                            <p>Immersive photography, virtual tours, and video content that showcase your property and experiences.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-calendar-check text-primary"></i>
                        </div>
                        <div>
                            <h5>Seamless Booking</h5>
                            <p>Integrated reservation systems and streamlined checkout processes to maximize conversions.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start mb-3">
                        <div class="feature-icon me-3">
                            <i class="fas fa-mobile-alt text-primary"></i>
                        </div>
                        <div>
                            <h5>Mobile-First Design</h5>
                            <p>Responsive layouts optimized for travelers booking on smartphones and tablets.</p>
                        </div>
                    </div>
                    <div class="feature d-flex align-items-start">
                        <div class="feature-icon me-3">
                            <i class="fas fa-globe text-primary"></i>
                        </div>
                        <div>
                            <h5>Multi-Language Support</h5>
                            <p>Localized content and translations to serve international travelers and guests.</p>
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
                <h2 class="section-title">Our Hospitality Website Design Process</h2>
                <p class="section-description">
                    A proven approach to creating websites that drive bookings and revenue
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-bullseye fa-3x text-primary"></i>
                    </div>
                    <h4>Brand & Audience Analysis</h4>
                    <p>We research your unique selling points, target travelers, and competitive landscape to inform our strategy.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-paint-brush fa-3x text-primary"></i>
                    </div>
                    <h4>Experience Design</h4>
                    <p>We create inspiring visual designs and intuitive user journeys that guide visitors toward booking.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-cogs fa-3x text-primary"></i>
                    </div>
                    <h4>System Integration</h4>
                    <p>We implement booking engines, property management systems, and payment gateways for seamless operations.</p>
                </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="process-icon mb-3">
                        <i class="fas fa-chart-line fa-3x text-primary"></i>
                    </div>
                    <h4>Optimization & Analytics</h4>
                    <p>We implement tracking and continuously optimize for improved conversion rates and booking values.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Website Types -->
<section class="website-types-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Hospitality & Travel Website Types</h2>
                <p class="section-description">
                    Specialized solutions for different hospitality and tourism businesses
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-hotel fa-2x text-primary"></i>
                    </div>
                    <h4>Hotel & Resort Websites</h4>
                    <p>Immersive platforms for hotels and resorts featuring room showcases, amenity listings, virtual tours, and direct booking capabilities that drive commission-free reservations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-utensils fa-2x text-primary"></i>
                    </div>
                    <h4>Restaurant & Dining Websites</h4>
                    <p>Appetizing websites for restaurants and cafes with menu presentations, reservation systems, online ordering functionality, and location information to attract diners.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-route fa-2x text-primary"></i>
                    </div>
                    <h4>Tour Operator Platforms</h4>
                    <p>Engaging websites for tour companies featuring experience catalogs, itinerary builders, booking management, and customer reviews to inspire traveler confidence.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-map-marked-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Destination & Tourism Websites</h4>
                    <p>Comprehensive platforms for tourism boards and destination marketers showcasing attractions, activities, accommodations, and local businesses to attract visitors.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-home fa-2x text-primary"></i>
                    </div>
                    <h4>Vacation Rental Sites</h4>
                    <p>Property-focused websites for vacation rentals, villas, and short-term accommodations with availability calendars, booking systems, and neighborhood information.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="type-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="type-icon mb-3">
                        <i class="fas fa-plane fa-2x text-primary"></i>
                    </div>
                    <h4>Travel Agency Platforms</h4>
                    <p>Full-service websites for travel agencies and trip planners featuring package tours, custom itineraries, and travel consulting services with secure payment processing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Essential Features -->
<section class="features-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Essential Hospitality Website Features</h2>
                <p class="section-description">
                    Key components that drive bookings and enhance guest experience
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-calendar-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Real-Time Booking Engine</h4>
                    <p>Integrated reservation systems with live availability, rate management, and secure payment processing to maximize direct bookings.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-camera fa-2x text-primary"></i>
                    </div>
                    <h4>Virtual Tours & Galleries</h4>
                    <p>High-quality visuals including 360° room views, property walkthroughs, and engaging photo galleries that showcase your offerings.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-percent fa-2x text-primary"></i>
                    </div>
                    <h4>Special Offers & Packages</h4>
                    <p>Dynamic promotion sections highlighting seasonal deals, packages, and exclusive website-only offers to encourage direct bookings.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Location & Directions</h4>
                    <p>Interactive maps, transportation options, and points of interest to help guests plan their stay and discover the surrounding area.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-star fa-2x text-primary"></i>
                    </div>
                    <h4>Guest Reviews & Testimonials</h4>
                    <p>Social proof elements including curated reviews, ratings, and guest experiences to build trust and confidence in potential customers.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-concierge-bell fa-2x text-primary"></i>
                    </div>
                    <h4>Amenities & Services</h4>
                    <p>Detailed information about available facilities, services, and unique offerings that differentiate your property from competitors.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Booking System Integration -->
<section class="integrations-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Booking System Integrations</h2>
                <p class="section-description">
                    Seamless connections with hospitality management systems
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="integration-icon mb-3">
                        <i class="fas fa-desktop fa-2x text-primary"></i>
                    </div>
                    <h4>Property Management Systems</h4>
                    <p>Integration with leading PMS platforms including Opera, Cloudbeds, and Mews to maintain accurate availability and streamline operations.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="integration-icon mb-3">
                        <i class="fas fa-credit-card fa-2x text-primary"></i>
                    </div>
                    <h4>Payment Processors</h4>
                    <p>Secure integration with payment gateways such as Stripe, PayPal, and Authorize.net for smooth reservation transactions and deposits.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="integration-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="integration-icon mb-3">
                        <i class="fas fa-calendar-check fa-2x text-primary"></i>
                    </div>
                    <h4>Channel Managers</h4>
                    <p>Synchronization with channel management tools to maintain consistent inventory across all online travel agencies and booking platforms.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="benefits-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Benefits of Professional Hospitality Website Design</h2>
                <p class="section-description">
                    How an optimized website drives revenue and guest satisfaction
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-hand-holding-usd fa-2x text-primary"></i>
                    </div>
                    <h4>Increased Direct Bookings</h4>
                    <p>Reduce dependency on OTAs and their commissions by driving more reservations through your own website.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-chart-line fa-2x text-primary"></i>
                    </div>
                    <h4>Higher Conversion Rates</h4>
                    <p>Optimized user experiences and booking flows turn more visitors into confirmed reservations and higher revenue.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-award fa-2x text-primary"></i>
                    </div>
                    <h4>Strengthened Brand Image</h4>
                    <p>Professional design and compelling visuals elevate your brand perception and justify premium pricing.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4" data-aos="fade-up">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-smile fa-2x text-primary"></i>
                    </div>
                    <h4>Enhanced Guest Experience</h4>
                    <p>Provide valuable pre-arrival information and set accurate expectations for a smoother guest journey.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-database fa-2x text-primary"></i>
                    </div>
                    <h4>Valuable Customer Data</h4>
                    <p>Collect first-party guest information for personalized marketing and improved future experiences.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card h-100 p-4 bg-white rounded shadow-sm">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-search fa-2x text-primary"></i>
                    </div>
                    <h4>Improved Search Visibility</h4>
                    <p>Optimized hospitality websites rank better in search results, bringing more organic traffic and potential guests.</p>
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
                <h2 class="mb-3">Ready to Increase Your Direct Bookings?</h2>
                <p class="lead mb-0">
                    Let's create a hospitality website that showcases your property and drives revenue.
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
            <h2 class="faq-title">Hospitality Website Design FAQ's</h2>
            <h3 class="faq-subtitle">Have Any Questions?</h3>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">
                    How do you integrate booking engines with hospitality websites?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We integrate booking engines through either direct API connections or embedded iframe solutions, depending on your property management system and preferences. This process includes synchronizing real-time availability and rates, customizing the booking widget to match your website design, implementing secure payment processing, and ensuring a seamless user experience throughout the reservation flow. We work with most major booking engine providers including Booking.com's BookingSuite, SiteMinder, TravelClick, and custom PMS solutions. The integration is thoroughly tested across different scenarios to ensure accuracy in rates, availability, and special offers.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    What makes an effective gallery for hotel and resort websites?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>An effective hospitality gallery showcases your property through high-quality, professionally shot images that highlight your best features and accurately represent the guest experience. Key elements include: categorized sections for rooms, amenities, dining, and surroundings; interactive virtual tours of representative rooms and spaces; thoughtful organization from most important spaces to supporting areas; optimized images for fast loading across all devices; and image metadata for improved SEO. We recommend a combination of wide establishing shots, detailed room views, lifestyle imagery showing the guest experience, and seasonal photography to capture your property throughout the year.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    How can we increase direct bookings through our website?
                    <span class="faq-plus-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Increasing direct bookings requires a multi-faceted approach centered on your website. Key strategies include: implementing a prominent and user-friendly booking engine with a clear rate comparison tool; offering exclusive website-only benefits or special packages not available on OTAs; creating a best rate guarantee with easy price matching; optimizing for mobile users who increasingly book on smartphones; implementing remarketing campaigns to recapture visitors who don't book immediately; building an email marketing program with special offers for past guests; and using clear calls-to-action throughout the site. We also recommend A/B testing different offers and booking flows to continuously improve conversion rates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 