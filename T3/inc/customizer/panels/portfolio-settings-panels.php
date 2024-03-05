<?php

$priority_field = 1;

$separator_field = 1;

// Portfolio Custom Slug
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_portfolio_custom_slug',
        'label'       => esc_html__('Custom Slug', 'watson'),
        'description' => esc_html__('If you want your portfolio post type to have a custom slug in the url, please enter it here. You will still have to refresh your permalinks after saving this! This is done by going to Settings > Permalinks and clicking save.', 'watson'),
        'section'     => 'portfolio-settings',
        'default'     => '',
        'priority'    => $priority_field++,
    ]
);

// Separator
Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'portfolio-separator' . $separator_field++,
    'section'     => 'portfolio-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

// Portfolio Single Page
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'toggle',
        'settings'    => 'ct_watson_portfolio_single_page_enable',
        'label'       => esc_html__('Portfolio Single Page', 'watson'),
        'description' => esc_html__('Enable it for displaying every portfolio item into there own page. Disabling it will show portfolio item as a lightbox popup.', 'watson'),
        'section'     => 'portfolio-settings',
        'default'     => '0',
        'priority'    => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'portfolio-separator' . $separator_field++,
    'section'     => 'portfolio-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_portfolio_prev_post_caption',
        'label'       => esc_html__('Previous Portfolio Page Caption', 'watson'),
        'description' => esc_html__('Caption of the button linking to the previous portfolio page.', 'watson'),
        'section'     => 'portfolio-settings',
        'default'     => esc_html__('Prev', 'watson'),
        'priority'    => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'portfolio-separator' . $separator_field++,
    'section'     => 'portfolio-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_portfolio_next_post_caption',
        'label'       => esc_html__('Next Portfolio Page Caption', 'watson'),
        'description' => esc_html__('Caption of the button linking to the next portfolio page.', 'watson'),
        'section'     => 'portfolio-settings',
        'default'     => esc_html__('Next', 'watson'),
        'priority'    => $priority_field++,
    ]
);