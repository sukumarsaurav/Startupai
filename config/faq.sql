-- FAQ Tables for StartupAI
USE startupai;

-- Create FAQ categories table
CREATE TABLE IF NOT EXISTS faq_categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_slug (slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create FAQ items table
CREATE TABLE IF NOT EXISTS faq_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    display_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Create a table to associate FAQs with services
CREATE TABLE IF NOT EXISTS faq_service_mapping (
    id INT AUTO_INCREMENT PRIMARY KEY,
    faq_id INT NOT NULL,
    service_slug VARCHAR(100) NOT NULL,
    category_id INT,
    display_order INT DEFAULT 0,
    is_expanded BOOLEAN DEFAULT FALSE,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (faq_id) REFERENCES faq_items(id) ON DELETE CASCADE,
    FOREIGN KEY (category_id) REFERENCES faq_categories(id) ON DELETE SET NULL,
    UNIQUE KEY unique_faq_service (faq_id, service_slug),
    INDEX idx_service_slug (service_slug)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert default FAQ categories
INSERT INTO faq_categories (name, slug, description) VALUES
('General', 'general', 'General questions about our services'),
('Technical', 'technical', 'Technical questions about implementation and functionality'),
('Pricing', 'pricing', 'Questions related to pricing and payment'),
('Support', 'support', 'Questions about ongoing support and maintenance');

-- Insert sample FAQ items for UI/UX Design
INSERT INTO faq_items (question, answer, display_order) VALUES
('What\'s the difference between UI and UX design?', 'UI (User Interface) design focuses on the visual elements of a digital product—how it looks. This includes buttons, icons, spacing, typography, color schemes, and responsive design. UX (User Experience) design focuses on the overall feel of the experience—how it works. This includes user research, testing, site architecture, user flows, and wireframing. While separate disciplines, they work closely together to create products that are both visually appealing and functionally effective.', 1),
('Why is good UI/UX design important for my business?', 'Good UI/UX design directly impacts your bottom line. It reduces user frustration, increases engagement, builds trust, improves conversion rates, and reduces development costs by identifying issues early. In today\'s competitive digital landscape, users expect intuitive, seamless experiences—and they\'ll quickly abandon products that don\'t meet these expectations. Investing in quality design helps differentiate your brand and create loyal customers.', 2),
('How long does the UI/UX design process take?', 'The timeline for UI/UX design varies based on project complexity, scope, and feedback cycles. A simple website might take 4-6 weeks, while a complex application could take 3-6 months. Our process includes research, wireframing, prototyping, visual design, and testing—each requiring appropriate time for quality results. We\'ll provide a detailed timeline during our initial consultation based on your specific requirements.', 3),
('How do you measure the success of UI/UX design?', 'We measure design success through both qualitative and quantitative metrics. Quantitative measurements include conversion rates, bounce rates, time on page, task success rates, and error rates. Qualitative assessments include user feedback, satisfaction surveys, and usability testing observations. We establish baseline metrics at the start of projects and track improvements over time to demonstrate the ROI of design investments.', 4);

-- Map FAQs to the UI/UX Design service
INSERT INTO faq_service_mapping (faq_id, service_slug, category_id, display_order, is_expanded) VALUES
(1, 'ui-ux-design', 1, 1, TRUE),
(2, 'ui-ux-design', 1, 2, FALSE),
(3, 'ui-ux-design', 2, 3, FALSE),
(4, 'ui-ux-design', 2, 4, FALSE);

-- Insert sample FAQ items for Responsive Design
INSERT INTO faq_items (question, answer, display_order) VALUES
('What is responsive web design?', 'Responsive web design is an approach to web design that makes web pages render well on a variety of devices and window or screen sizes. It uses HTML and CSS to automatically resize, hide, shrink, or enlarge a website to make it look good on all devices (desktops, tablets, and phones).', 1),
('Why is responsive design important?', 'Responsive design is crucial because mobile device usage has surpassed desktop browsing. Google also prioritizes mobile-friendly websites in search results. A responsive site provides a better user experience, reduces bounce rates, increases conversion rates, and eliminates the need for separate mobile sites.', 2),
('How long does it take to implement responsive design?', 'The timeline for implementing responsive design varies based on website complexity, number of pages, and features. A simple website might take 2-4 weeks, while more complex sites can take 1-3 months. For existing websites, retrofitting responsive design may take longer than building a new responsive site from scratch.', 3),
('Can you make my existing website responsive?', 'Yes, we can retrofit your existing website with responsive design. However, depending on the current structure and age of your site, it might be more cost-effective to rebuild it with responsiveness in mind from the start. We\'ll assess your current site and recommend the most efficient approach.', 4);

-- Map FAQs to the Responsive Design service
INSERT INTO faq_service_mapping (faq_id, service_slug, category_id, display_order, is_expanded) VALUES
(5, 'responsive-design', 1, 1, TRUE),
(6, 'responsive-design', 1, 2, FALSE),
(7, 'responsive-design', 2, 3, FALSE),
(8, 'responsive-design', 2, 4, FALSE);

-- Insert sample FAQ items for Figma Design
INSERT INTO faq_items (question, answer, display_order) VALUES
('Why should we use Figma for our design projects?', 'Figma offers several advantages over other design tools. It\'s cloud-based, enabling real-time collaboration with unlimited viewers. It works on any operating system through a browser. Figma\'s component system and auto-layout features make creating consistent, responsive designs easier. Its developer handoff tools streamline implementation, and its free tier is generous for teams just starting out.', 1),
('How does Figma help with design systems?', 'Figma excels at design systems through its powerful components and styles features. Components can be nested and have variants to accommodate different states. When you update a main component, all instances update automatically. Figma\'s styles (colors, text, effects, etc.) create consistent design language. Libraries allow sharing components across files, and auto-layout makes responsive components possible.', 2),
('How do you handle the transition from another design tool to Figma?', 'We manage transitions to Figma through a structured approach: first assessing your current design assets and workflow, then creating a migration plan. We can import files from tools like Sketch, Adobe XD, or Illustrator, reorganizing them to leverage Figma\'s strengths. We\'ll set up your team workspace with proper permissions, establish file structure best practices, and provide training sessions to get your team comfortable with Figma.', 3),
('How do you collaborate with developers using Figma?', 'Our developer collaboration process using Figma is comprehensive. We provide developers view access to design files for direct reference. We use Figma\'s inspection features to allow devs to extract CSS, measurements, and assets. Our designs include interactive prototypes to demonstrate interactions, organized components with clear naming conventions, and detailed documentation for complex elements. We can also implement design tokens to streamline the design-to-code process.', 4);

-- Map FAQs to the Figma Design service
INSERT INTO faq_service_mapping (faq_id, service_slug, category_id, display_order, is_expanded) VALUES
(9, 'figma-design', 1, 1, TRUE),
(10, 'figma-design', 1, 2, FALSE),
(11, 'figma-design', 2, 3, FALSE),
(12, 'figma-design', 2, 4, FALSE); 