<div class="blog-navigation">
    <?php
    the_posts_pagination(array(
        'show_all'           => false,
        'type'               => 'list',
        'end_size'           => 1,
        'mid_size'           => 1,
        'prev_next'          => true,
        'prev_text'          => esc_html(watson_get_theme_options('ct_watson_blog_prev_post_caption')),
        'next_text'          => esc_html(watson_get_theme_options('ct_watson_blog_next_post_caption')),
        'add_args'           => false,
        'add_fragment'       => '',
        'screen_reader_text' => esc_html__(' ', 'watson'),
    ));
    ?>
</div>