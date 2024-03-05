<?php

$priority_field = 1;

$separator_field = 1;

//Primary Theme Color
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'color',
        'settings'    => 'ct_watson_primary_theme_color',
        'label'       => esc_html__('Primary Theme Color', 'watson'),
        'description' => esc_html__('Please choose the primary color of your the website', 'watson'),
        'section'     => 'color-settings',
        'default'     => '#00A3E1',
        'priority'    => $priority_field++,
        'output'      => [
            [
                'element'   => '.page-heading h2, .page-heading .icon, .services .service-item .icon, .testimonials .testimonial-item .testimonial-content:before, .banner .banner-content h1 .lname, .resume .timeline .content .subtitle, .blog-list .blog-item .blog-content .categories, .blog-navigation .page-numbers .current, .contact-info .info-item .icon, .btn-main, .post-meta .tag-links a, .post-page .post-heading .categories, .post-full-content a, .post-full-content li a:hover, .post-full-content .wp-block-calendar a, .post-comments .comment-list .post-pingback a.comment-edit-link, .project-intro .project-link a:hover',
                'property'  => 'color',
            ],
            [
                'element'  => '.header-main .image-container .header-name:before, .subheading span:before, .subheading span:after, .portfolio .portfolio-filter ul li.active, .portfolio .portfolio-item figure:before, .cd-headline.loading-bar .cd-words-wrapper::after, .resume ul.timeline li span.line-left, .skill-item .progress .progress-bar, .btn-main:after, .post-full-content ul > li:before, .header-main .name-container',
                'property' => 'background-color',
            ],
            [
                'element'  => '.subheading span, .about .about-info ul li span.title, .resume ul.timeline li span.line-left:before, .resume ul.timeline li span.line-left:after, .btn-main, .post-meta .tag-links a, .post.sticky .sticky-ribbon:after, blockquote, .post.sticky .sticky-ribbon:before, .wp-block-quote.is-large.has-text-align-right, .wp-block-quote.is-style-large.has-text-align-right, .wp-block-quote.has-text-align-right, .wp-block-pullquote',
                'property' => 'border-color',
            ],
            [
                'element'  => '.banner .banner-content p .simple-text, .banner .banner-content .cd-headline.clip .cd-words-wrapper b, .banner .banner-content .cd-headline.type .cd-words-wrapper b, .banner .banner-content .cd-headline.rotate-1 .cd-words-wrapper b, .banner .banner-content .cd-headline.slide .cd-words-wrapper b, .banner .banner-content .cd-headline.zoom .cd-words-wrapper b, .banner .banner-content .cd-headline.push .cd-words-wrapper b, .skill-item .progress .progress-bar:after, .project-intro .project-info ul li span.title, .project-intro .project-link a, .ajax-portfolio-popup .portfolio-title',
                'property' => 'border-bottom-color',
            ],
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'color-separator' . $separator_field++,
    'section'     => 'color-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

// Custom Color Toggle
Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'toggle',
        'settings' => 'ct_watson_custom_color',
        'label'    => esc_html__('Custom Color', 'watson'),
        'section'  => 'color-settings',
        'default'  => false,
        'priority' => $priority_field++,
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Navigation Background Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_nav_background_color',
        'label'           => esc_html__('Navigation Background Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'   => 'header .header-main, header .header-mobile',
                'property'  => 'background-color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Navigation Border Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_nav_border_color',
        'label'           => esc_html__('Navigation Border Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'   => 'header .header-main, .header-main nav.nav-menu ul li',
                'property'  => 'border-color',
            ],
        ],
        'choices'         => [
            'alpha' => true,
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Profile Name Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_profile_name_color',
        'label'           => esc_html__('Profile Name Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'   => '.header-main .image-container .header-name, header .header-mobile h2',
                'property'  => 'color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Navigation Link Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_nav_link_color',
        'label'           => esc_html__('Navigation Link Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'   => '.header-main nav.nav-menu ul li a',
                'property'  => 'color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Social Icon Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_social_icon_color',
        'label'           => esc_html__('Social Icon Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'  => '.header-main .nav-footer .social li a',
                'property' => 'color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Copyright Text Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_copy_text_color',
        'label'           => esc_html__('Copyright Text Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'   => '.header-main .nav-footer .copy p',
                'property'  => 'color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Background Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_background_color',
        'label'           => esc_html__('Background Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'  => '.pt-page',
                'property' => 'background-color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Heading Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_heading_color',
        'label'           => esc_html__('Heading Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'   => 'h1,h2,h3,h4,h5,h6',
                'property'  => 'color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'color-separator' . $separator_field++,
    'section'         => 'color-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_color',
            'operator' => '==',
            'value'    => true,
        ]
    ],
) );

// Primary Color
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'color',
        'settings'        => 'ct_watson_primary_color',
        'label'           => esc_html__('Primary Color', 'watson'),
        'section'         => 'color-settings',
        'priority'        => $priority_field++,
        'output'          => [
            [
                'element'   => 'body',
                'property'  => 'color',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_color',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);

/*** End Color Section ***/
