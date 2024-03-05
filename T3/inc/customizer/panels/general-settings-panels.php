<?php

$priority_field = 1;

$separator_field = 1;

// One Page Mode
Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'switch',
        'settings' => 'ct_watson_one_page',
        'label'    => esc_html__('One Page Mode', 'watson'),
        'section'  => 'general-settings',
        'default'  => '0',
        'priority' => $priority_field++,
        'choices'  => [
            'on'  => esc_html__('Enable', 'watson'),
            'off' => esc_html__('Disable', 'watson'),
        ],
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'general-separator' . $separator_field++,
    'section'     => 'general-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

//Animation Type
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'select',
        'settings'    => 'ct_watson_animation_type',
        'label'       => esc_html__('Page Transition Animation', 'watson'),
        'section'     => 'general-settings',
        'default'     => 'animate-1',
        'placeholder' => esc_html__('Select an animation...', 'watson'),
        'description' => esc_html__('Choose page transition animation for one page mode.', 'watson'),
        'priority'    => $priority_field++,
        'choices'     => [
            'animate-0'  => esc_html__('Random', 'watson'),
            'animate-1'  => esc_html__('Animation 1', 'watson'),
            'animate-2'  => esc_html__('Animation 2', 'watson'),
            'animate-3'  => esc_html__('Animation 3', 'watson'),
            'animate-4'  => esc_html__('Animation 4', 'watson'),
            'animate-5'  => esc_html__('Animation 5', 'watson'),
            'animate-6'  => esc_html__('Animation 6', 'watson'),
            'animate-7'  => esc_html__('Animation 7', 'watson'),
            'animate-8'  => esc_html__('Animation 8', 'watson'),
            'animate-9'  => esc_html__('Animation 9', 'watson'),
            'animate-10' => esc_html__('Animation 10', 'watson'),
            'animate-11' => esc_html__('Animation 11', 'watson'),
            'animate-12' => esc_html__('Animation 12', 'watson'),
            'animate-13' => esc_html__('Animation 13', 'watson'),
            'animate-14' => esc_html__('Animation 14', 'watson'),
            'animate-15' => esc_html__('Animation 15', 'watson'),
            'animate-16' => esc_html__('Animation 16', 'watson'),
            'animate-17' => esc_html__('Animation 17', 'watson'),
            'animate-18' => esc_html__('Animation 18', 'watson'),
            'animate-19' => esc_html__('Animation 19', 'watson'),
            'animate-20' => esc_html__('Animation 20', 'watson'),
            'animate-21' => esc_html__('Animation 21', 'watson'),
            'animate-22' => esc_html__('Animation 22', 'watson'),
            'animate-23' => esc_html__('Animation 23', 'watson'),
            'animate-24' => esc_html__('Animation 24', 'watson'),
            'animate-25' => esc_html__('Animation 25', 'watson'),
            'animate-26' => esc_html__('Animation 26', 'watson'),
            'animate-27' => esc_html__('Animation 27', 'watson'),
            'animate-28' => esc_html__('Animation 28', 'watson'),
            'animate-29' => esc_html__('Animation 29', 'watson'),
            'animate-30' => esc_html__('Animation 30', 'watson'),
            'animate-31' => esc_html__('Animation 31', 'watson'),
            'animate-32' => esc_html__('Animation 32', 'watson'),
            'animate-33' => esc_html__('Animation 33', 'watson'),
            'animate-34' => esc_html__('Animation 34', 'watson'),
            'animate-35' => esc_html__('Animation 35', 'watson'),
            'animate-36' => esc_html__('Animation 36', 'watson'),
        ],
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'general-separator' . $separator_field++,
    'section'     => 'general-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

//UI Layout
Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'radio-buttonset',
        'settings' => 'ct_watson_ui_color',
        'label'    => esc_html__('UI Color', 'watson'),
        'section'  => 'general-settings',
        'default'  => 'dark',
        'priority' => $priority_field++,
        'choices'  => [
            'dark'   => esc_html__('Dark', 'watson'),
            'light' => esc_html__('Light', 'watson'),
        ],
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'general-separator' . $separator_field++,
    'section'     => 'general-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );


// Preloader
Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'switch',
        'settings' => 'ct_watson_preloader',
        'label'    => esc_html__('Preloader', 'watson'),
        'section'  => 'general-settings',
        'default'  => '1',
        'priority' => $priority_field++,
        'choices'  => [
            'on'  => esc_html__('Enable', 'watson'),
            'off' => esc_html__('Disable', 'watson'),
        ],
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'general-separator' . $separator_field++,
    'section'     => 'general-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_preloader_text',
        'label'       => esc_html__('Preloader Text', 'watson'),
        'section'     => 'general-settings',
        'default'     => esc_html('PHILIP WATSON'),
        'priority'    => $priority_field++,
    ]
);