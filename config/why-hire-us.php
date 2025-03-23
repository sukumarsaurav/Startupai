<?php
$why_hire_us_content = [
    'seo' => [
        'service_name' => 'SEO Services',
        'reasons' => [
            [
                'icon' => 'fas fa-chart-line',
                'title' => 'Data-Driven Approach',
                'description' => 'We use advanced analytics and data-driven strategies to optimize your website\'s performance and improve search rankings.',
                'delay' => 100
            ],
            [
                'icon' => 'fas fa-cogs',
                'title' => 'Custom Strategy',
                'description' => 'Every business is unique. We develop tailored SEO strategies that align with your specific goals and target audience.',
                'delay' => 200
            ],
            [
                'icon' => 'fas fa-history',
                'title' => 'Proven Track Record',
                'description' => 'Our SEO experts have helped numerous businesses achieve top rankings and increase organic traffic significantly.',
                'delay' => 300
            ]
        ]
    ],
    'content-marketing' => [
        'service_name' => 'Content Writing Services',
        'reasons' => [
            [
                'icon' => 'fas fa-pen-fancy',
                'title' => 'Expert Writers',
                'description' => 'Our team of professional writers creates engaging, SEO-optimized content that resonates with your target audience.',
                'delay' => 100
            ],
            [
                'icon' => 'fas fa-bullseye',
                'title' => 'Industry Expertise',
                'description' => 'We have experience writing for various industries, ensuring accurate and relevant content for your niche.',
                'delay' => 200
            ],
            [
                'icon' => 'fas fa-clock',
                'title' => 'Timely Delivery',
                'description' => 'We maintain strict deadlines and deliver high-quality content consistently to keep your content calendar on track.',
                'delay' => 300
            ]
        ]
    ],
    'email-marketing' => [
        'service_name' => 'Email Marketing Services',
        'reasons' => [
            [
                'icon' => 'fas fa-envelope-open-text',
                'title' => 'Personalized Campaigns',
                'description' => 'We create targeted email campaigns that speak directly to your audience segments and drive engagement.',
                'delay' => 100
            ],
            [
                'icon' => 'fas fa-chart-pie',
                'title' => 'Advanced Analytics',
                'description' => 'Get detailed insights into campaign performance with comprehensive tracking and reporting.',
                'delay' => 200
            ],
            [
                'icon' => 'fas fa-robot',
                'title' => 'Smart Automation',
                'description' => 'Our automated workflows help nurture leads and maintain customer relationships efficiently.',
                'delay' => 300
            ]
        ]
    ],
    'social-media' => [
        'service_name' => 'Social Media Marketing',
        'reasons' => [
            [
                'icon' => 'fas fa-users',
                'title' => 'Community Building',
                'description' => 'We help build and engage with your social media community to create lasting relationships with your audience.',
                'delay' => 100
            ],
            [
                'icon' => 'fas fa-palette',
                'title' => 'Creative Content',
                'description' => 'Our team creates eye-catching visual content and compelling copy that drives engagement.',
                'delay' => 200
            ],
            [
                'icon' => 'fas fa-bullhorn',
                'title' => 'Strategic Promotion',
                'description' => 'We develop targeted advertising campaigns to reach your ideal customers and maximize ROI.',
                'delay' => 300
            ]
        ]
    ],
    'google-ads' => [
        'service_name' => 'Google Ads Management',
        'reasons' => [
            [
                'icon' => 'fas fa-search-dollar',
                'title' => 'ROI Focused',
                'description' => 'We optimize your campaigns to maximize return on investment and reduce wasted ad spend.',
                'delay' => 100
            ],
            [
                'icon' => 'fas fa-tools',
                'title' => 'Advanced Optimization',
                'description' => 'Using the latest tools and techniques, we continuously improve your campaign performance.',
                'delay' => 200
            ],
            [
                'icon' => 'fas fa-chart-bar',
                'title' => 'Transparent Reporting',
                'description' => 'Get detailed insights into your campaign performance with regular, easy-to-understand reports.',
                'delay' => 300
            ]
        ]
    ],
    'ui-ux-design' => [
        'service_name' => 'UI/UX Design',
        'reasons' => [
            [
                'icon' => 'fas fa-pencil-ruler',
                'title' => 'User-Centered Design',
                'description' => 'We create intuitive interfaces that prioritize user experience and drive engagement.',
                'delay' => 100
            ],
            [
                'icon' => 'fas fa-mobile-alt',
                'title' => 'Responsive Design',
                'description' => 'Our designs work seamlessly across all devices and screen sizes.',
                'delay' => 200
            ],
            [
                'icon' => 'fas fa-layer-group',
                'title' => 'Design Systems',
                'description' => 'We create comprehensive design systems that ensure consistency across your digital products.',
                'delay' => 300
            ]
        ]
    ],
    'wordpress' => [
        'service_name' => 'WordPress Development',
        'reasons' => [
            [
                'icon' => 'fas fa-code',
                'title' => 'Custom Solutions',
                'description' => 'We build custom WordPress solutions tailored to your specific business needs.',
                'delay' => 100
            ],
            [
                'icon' => 'fas fa-shield-alt',
                'title' => 'Security Focus',
                'description' => 'Our development practices prioritize security and regular maintenance.',
                'delay' => 200
            ],
            [
                'icon' => 'fas fa-tachometer-alt',
                'title' => 'Performance Optimized',
                'description' => 'We ensure your WordPress site loads quickly and performs efficiently.',
                'delay' => 300
            ]
        ]
    ]
];

function getWhyHireUsContent($service_slug) {
    global $why_hire_us_content;
    return isset($why_hire_us_content[$service_slug]) ? $why_hire_us_content[$service_slug] : null;
}
?> 