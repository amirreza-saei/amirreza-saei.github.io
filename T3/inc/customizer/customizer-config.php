<?php
/**
 * Used for theme customizer page
 */

if( !class_exists( 'kirki' ) ) {
    return;
}

Kirki::add_config(
    'ct_watson',
    [
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ]
);

Kirki::add_panel(
    'theme-options',
    [
        'priority' => 1,
        'title'    => esc_html__('Watson Theme Options', 'watson'),
        'icon'     => 'dashicons-admin-appearance',
    ]
);

$priority_section = 1;

/*** General Settings Section ***/
Kirki::add_section(
    'general-settings',
    [
        'title'    => esc_html__('General Settings', 'watson'),
        'panel'    => 'theme-options',
        'priority' => $priority_section++,
        'icon'     => 'dashicons-buddicons-topics',
    ]
);

get_template_part('inc/customizer/panels/general-settings-panels');

/*** vCard Settings Section ***/
Kirki::add_section(
    'vcard-settings',
    [
        'title'    => esc_html__('vCard Settings', 'watson'),
        'panel'    => 'theme-options',
        'priority' => $priority_section++,
        'icon'     => 'dashicons-businessperson',
    ]
);

get_template_part('inc/customizer/panels/vcard-settings-panels');

/*** Color Section ***/

Kirki::add_section(
    'color-settings',
    [
        'title'    => esc_html__('Color', 'watson'),
        'panel'    => 'theme-options',
        'priority' => $priority_section++,
        'icon'     => 'dashicons-admin-customizer',
    ]
);

get_template_part('inc/customizer/panels/color-panels');

/*** Portfolio Settings Section ***/

Kirki::add_section(
    'portfolio-settings',
    [
        'title'    => esc_html__('Portfolio Settings', 'watson'),
        'panel'    => 'theme-options',
        'priority' => $priority_section++,
        'icon'     => 'dashicons-portfolio',
    ]
);

get_template_part('inc/customizer/panels/portfolio-settings-panels');

/*** Blog Settings Section ***/

Kirki::add_section(
    'blog-settings',
    [
        'title'    => esc_html__('Blog Settings', 'watson'),
        'panel'    => 'theme-options',
        'priority' => $priority_section++,
        'icon'     => 'dashicons-book',
    ]
);

get_template_part('inc/customizer/panels/blog-settings-panels');

/*** Typography Settings Section ***/

Kirki::add_section(
    'typography-settings',
    [
        'title'    => esc_html__('Typography', 'watson'),
        'panel'    => 'theme-options',
        'priority' => $priority_section++,
        'icon'     => 'dashicons-editor-paste-text',
    ]
);

get_template_part('inc/customizer/panels/typography-settings-panels');


/*** Error Page Settings Section ***/

Kirki::add_section(
    'error-page-settings',
    [
        'title'    => esc_html__('Error Page Settings', 'watson'),
        'panel'    => 'theme-options',
        'priority' => $priority_section++,
        'icon'     => 'dashicons-warning',
    ]
);

get_template_part('inc/customizer/panels/error-page-settings-panels');
