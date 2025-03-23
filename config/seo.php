<?php
// SEO Configuration
$seo_config = [
    'home' => [
        'title' => 'StartupAI - Modern Digital Solutions for Business Growth',
        'description' => 'Your trusted technology partner for digital transformation and growth. We offer web development, AI solutions, and digital marketing services.',
        'keywords' => 'StartupAI, digital solutions, web development, AI solutions, digital marketing'
    ],
    'services' => [
        'digital-marketing' => [
            'seo' => [
                'title' => 'SEO Services | Professional Search Engine Optimization - StartupAI',
                'description' => 'Professional SEO services to improve your website ranking and drive organic traffic. Our search engine optimization experts help you achieve sustainable growth.',
                'keywords' => 'SEO services, search engine optimization, website ranking, organic traffic'
            ],
            'content-marketing' => [
                'title' => 'Content Writing Services | Professional & Affordable Content Writing - StartupAI',
                'description' => 'Professional content writing services for businesses. Our affordable content writing solutions include SEO content writing, blog content writing, and creative content writing.',
                'keywords' => 'content writing services, professional content writing, SEO content writing, blog writing'
            ],
            'email-marketing' => [
                'title' => 'Email Marketing Services | Affordable Email Marketing for Small Businesses - StartupAI',
                'description' => 'Affordable email marketing services for small businesses. Our professional email marketing solutions include effective email campaigns, strategies, and tools for beginners.',
                'keywords' => 'email marketing services, email campaigns, marketing automation, email strategy'
            ],
            'google-ads' => [
                'title' => 'Google Ads Management Services | PPC Campaign Management - StartupAI',
                'description' => 'Professional Google Ads management services to drive targeted traffic and increase conversions. Expert PPC campaign management for better ROI.',
                'keywords' => 'Google Ads management, PPC campaigns, paid advertising, AdWords management'
            ]
        ],
        'web-design' => [
            'ui-ux-design' => [
                'title' => 'UI/UX Design Services | Professional User Experience Design - StartupAI',
                'description' => 'Professional UI/UX design services to create intuitive and engaging user experiences. Transform your digital presence with our expert design solutions.',
                'keywords' => 'UI/UX design, user experience, interface design, UX services'
            ],
            'figma-design' => [
                'title' => 'Figma Design Services | Professional Design Systems - StartupAI',
                'description' => 'Professional Figma design services to create modern and scalable design systems. Expert Figma designers for your digital products.',
                'keywords' => 'Figma design, design systems, UI design, collaborative design'
            ]
            // Add other web design services...
        ],
        // Add other service categories...
    ]
];

function get_seo_data($category, $service = null) {
    global $seo_config;
    
    if ($category === 'home') {
        return $seo_config['home'];
    }
    
    if (isset($seo_config['services'][$category][$service])) {
        return $seo_config['services'][$category][$service];
    }
    
    // Default values if specific configuration is not found
    return [
        'title' => 'StartupAI - Professional Digital Services',
        'description' => 'Professional digital services for modern businesses. Transform your digital presence with StartupAI.',
        'keywords' => 'digital services, professional services, StartupAI'
    ];
}
?> 