<?php 

$priority_field = 1;

$separator_field = 1;

// Custom Typography
Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'toggle',
        'settings' => 'ct_watson_custom_typography',
        'label'    => esc_html__('Custom Typography', 'watson'),
        'section'  => 'typography-settings',
        'default'  => false,
        'priority' => $priority_field++,
    ]
);

// separator
kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'typography-separator' . $separator_field++,
    'section'         => 'typography-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_typography',
            'operator' => '==',
            'value'    => true,
        ]
    ],
));

// Profile Name Font
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'typography',
        'settings'        => 'ct_watson_profile_name_font',
        'section'         => 'typography-settings',
        'label'           => esc_html__('Profile Name Font', 'watson'),
        'priority'        => $priority_field++,
        'choices'         => [
            'fonts' => [
                'standard' => ['sans-serif', 'serif'],
            ],
        ],
        'default'         => array(
            'font-family' => 'Playfair Display',
            'font-weight' => '700',
        ),
        'output'          => array(
            array(
                'element' => '.header-main .image-container .header-name, header .header-mobile h2',
            ),
        ),
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_typography',
                'operator' => '==',
                'value'    => true,
            ]
        ],

    ]
);

// separator
kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'typography-separator' . $separator_field++,
    'section'         => 'typography-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_typography',
            'operator' => '==',
            'value'    => true,
        ]
    ],
));

// Heading Font
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'typography',
        'settings'        => 'ct_watson_heading_font',
        'section'         => 'typography-settings',
        'label'           => esc_html__('Heading Font', 'watson'),
        'priority'        => $priority_field++,
        'choices'         => [
            'fonts' => [
                'standard' => ['sans-serif', 'serif'],
            ],
        ],
        'default'         => array(
            'font-family' => 'Playfair Display',
            'font-weight' => '700',
        ),
        'output'          => array(
            array(
                'element' => 'h1, h2, h3, h4, h5, h6',
            ),
        ),
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_typography',
                'operator' => '==',
                'value'    => true,
            ]
        ],

    ]
);

// separator
kirki::add_field( 'ct-watson', array(
    'type'            => 'custom',
    'settings'        => 'typography-separator' . $separator_field++,
    'section'         => 'typography-settings',
    'default'         => '<hr>',
    'priority'        => $priority_field++,
    'active_callback' => [
        [
            'setting'  => 'ct_watson_custom_typography',
            'operator' => '==',
            'value'    => true,
        ]
    ],
));

// Body Font
Kirki::add_field(
    'ct_watson',
    [
        'type'            => 'typography',
        'settings'        => 'ct_watson_body_font',
        'section'         => 'typography-settings',
        'label'           => esc_html__('Primary Font', 'watson'),
        'priority'        => $priority_field++,
        'choices'         => [
            'fonts' => [
                'standard' => ['sans-serif', 'serif'],
            ],
        ],
        'default'         => array(
            'font-family' => 'Roboto',
            'font-size'   => '16px',
            'line-height' => '1.65',
            'font-weight' => '400',
        ),
        'output'          => array(
            array(
                'element' => 'body',
            ),
        ),
        'active_callback' => [
            [
                'setting'  => 'ct_watson_custom_typography',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ]
);