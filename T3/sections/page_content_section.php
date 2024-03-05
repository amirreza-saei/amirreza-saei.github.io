<?php

$watson_is_elementor_page = watson_is_built_with_elementor();
?>


<?php if (!$watson_is_elementor_page && (!empty(get_the_content()) || !empty(get_the_title()))) :

    $page_icon = watson_get_page_icon_by_menu(get_the_ID()); ?>


    <div class="page-heading">
        <?php if ($page_icon && $page_icon != 'none') : ?>
            <span class="icon"><i class="lnr lnr-<?php echo esc_attr($page_icon) ?>"></i></span>
        <?php endif; ?>

        <h2><?php echo the_title(); ?></h2>

    </div>

    <div class="page-content pb-50">
        <div class="post-full-content">
            <?php the_content(); ?>
        </div>

        <div class="page-links">
            <?php wp_link_pages(); ?>
        </div>
    </div>

    <?php
    // any comments?
    if (comments_open() || get_comments_number()) : ?>
        <div class="comments-container">
            <?php comments_template(); ?>
        </div>
    <?php endif; ?>

<?php else : ?>

    <?php the_content(); ?>

<?php endif; ?>