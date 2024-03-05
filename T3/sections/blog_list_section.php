<div class="col">
    <a id="post-<?php the_ID(); ?>" href="<?php echo esc_url(get_permalink()); ?>" <?php post_class('blog-item') ?>>

        <?php if (is_sticky()) : ?>
            <span class="sticky-ribbon"><i class="fas fa-star"></i></span>
        <?php endif; ?>

        <div class="blog-image">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </div>

        <div class="blog-content">

            <?php if (has_category()) : ?>
                <div class="categories">
                    <?php
                    $categories_list = get_the_category();
                    if ($categories_list) {
                        $cat_total = count($categories_list);
                        $i = 0;
                        foreach ($categories_list as $category) {
                            echo '<span class="category-name">' . esc_html($category->cat_name) . '</span>';
                            if ($cat_total != ++$i) {
                                echo ', ';
                            }
                        }
                    }
                    ?>
                </div>
            <?php endif; ?>

            <h4 class="blog-title"><?php the_title(); ?></h4>

            <div class="blog-date"><?php echo esc_html(get_the_date()); ?></div>

        </div>

    </a>
</div>