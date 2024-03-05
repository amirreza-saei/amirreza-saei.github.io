<?php

$priority_field = 1;

$separator_field = 1;

// Header Title
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_header_title',
        'label'       => esc_html__('Header Title', 'watson'),
        'description' => esc_html__('Enter header title of the website', 'watson'),
        'section'     => 'vcard-settings',
        'default'     => esc_html('PHILIP WATSON', 'watson'),
        'priority'    => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'vcard-separator' . $separator_field++,
    'section'     => 'vcard-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

// Header Image
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'image',
        'settings'    => 'ct_watson_header_img',
        'label'       => esc_html__('Header Image', 'watson'),
        'description' => esc_html__('Upload the header image', 'watson'),
        'section'     => 'vcard-settings',
        'default'     => esc_url(get_template_directory_uri() . '/img/profile-img.jpg'),
        'priority'    => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'vcard-separator' . $separator_field++,
    'section'     => 'vcard-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

// Copyright Text
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'textarea',
        'settings'    => 'ct_watson_copyright_text',
        'label'       => esc_html__('Copyright Text', 'watson'),
        'section'     => 'vcard-settings',
        'description' => esc_html__('Allowed HTML Tags: a, em, br, strong, img, i.', 'watson'),
        'default'     => wp_kses_post(__('2021 © Cosmos-Themes.<br>All Right Reserved.', 'watson')),
        'priority'    => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'vcard-separator' . $separator_field++,
    'section'     => 'vcard-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

global $watson_social_links;

// Social Icons
Kirki::add_field(
    'ct_watson',
    [
        'type'         => 'repeater',
        'label'        => esc_html__('Social Icons', 'watson'),
        'section'      => 'vcard-settings',
        'priority'     => $priority_field++,
        'row_label'    => [
            'type'     => 'text',
            'value'    => esc_html__('Social Icon', 'watson'),
        ],
        'button_label' => esc_html__('Add New Social Icon', 'watson'),
        'settings'     => 'ct_watson_header_social_icons',
        'default'      => [],
        'fields'       => [
            'name' => [
                'type'        => 'select',
                'label'       => esc_html__('Social Name', 'watson'),
                'default'     => 'Fb',
                'placeholder' => esc_html__('Select an option...', 'watson'),
                'choices'     => $watson_social_links,
            ],
            'url'  => [
                'type'  => 'link',
                'label' => esc_html__('Social Link Url', 'watson'),
            ]
        ]
    ]
);

/*** End vCard Settings Section ***/

