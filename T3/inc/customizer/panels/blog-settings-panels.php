<?php

$priority_field = 1;

$separator_field = 1;

// Portfolio Custom Slug
Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_blog_default_title',
        'label'       => esc_html__('Default Posts Page Title', 'watson'),
        'description' => esc_html__('Title of the default blog posts page. The default blog posts page is the page displaying blog posts when there is no front page set in Settings -> Reading.', 'watson'),
        'section'     => 'blog-settings',
        'default'     => esc_html__('Blogs', 'watson'),
        'priority'    => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'blog-separator' . $separator_field++,
    'section'     => 'blog-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_blog_prev_post_caption',
        'label'       => esc_html__('Previous Post Page Caption', 'watson'),
        'description' => esc_html__('Caption of the button linking to the previous blog post page.', 'watson'),
        'section'     => 'blog-settings',
        'default'     => esc_html__('Prev', 'watson'),
        'priority'    => $priority_field++,
    ]
);

Kirki::add_field( 'ct-watson', array(
    'type'        => 'custom',
    'settings'    => 'blog-separator' . $separator_field++,
    'section'     => 'blog-settings',
    'default'     => '<hr>',
    'priority'    => $priority_field++,
) );

Kirki::add_field(
    'ct_watson',
    [
        'type'        => 'text',
        'settings'    => 'ct_watson_blog_next_post_caption',
        'label'       => esc_html__('Next Post Page Caption', 'watson'),
        'description' => esc_html__('Caption of the button linking to the next blog post page.', 'watson'),
        'section'     => 'blog-settings',
        'default'     => esc_html__('Next', 'watson'),
        'priority'    => $priority_field++,
    ]
);