<?php

$priority_field = 1;

$separator_field = 1;

Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'text',
        'settings' => 'ct_watson_error_title',
        'label'    => esc_html__('Error Page Title', 'watson'),
        'section'  => 'error-page-settings',
        'default'  => esc_html__('404', 'watson'),
        'priority' => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'error-page-separator' . $separator_field++,
    'section'     => 'error-page-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'text',
        'settings' => 'ct_watson_error_info',
        'label'    => esc_html__('Error Page Info Text', 'watson'),
        'section'  => 'error-page-settings',
        'default'  => esc_html__('The page you are looking for could not be found.', 'watson'),
        'priority' => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'error-page-separator' . $separator_field++,
    'section'     => 'error-page-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'text',
        'settings' => 'ct_watson_error_back_button',
        'label'    => esc_html__('Back Button Caption', 'watson'),
        'section'  => 'error-page-settings',
        'default'  => esc_html__('Home Page', 'watson'),
        'priority' => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'error-page-separator' . $separator_field++,
    'section'     => 'error-page-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'     => 'text',
        'settings' => 'ct_watson_error_back_button_url',
        'label'    => esc_html__('Back Button URL', 'watson'),
        'section'  => 'error-page-settings',
        'default'  => esc_url( get_home_url() ),
        'priority' => $priority_field++,
    ]
);