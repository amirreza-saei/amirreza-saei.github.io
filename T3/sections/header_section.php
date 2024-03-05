<?php
$watson_profile_pic = watson_get_theme_options('ct_watson_header_img');

?>

<!--Header Start-->
<header>
    <div class="header-content">

        <!--Mobile Header-->
        <div class="header-mobile">
            <h2><?php echo esc_html(watson_get_theme_options('ct_watson_header_title')); ?></h2>
        </div>

        <!--Main Header-->
        <div class="header-main">
            <a class="header-toggle">
                <i class="menu-open fas fa-bars"></i>
                <i class="menu-close fas fa-times"></i>
            </a>

            <div class="header-main-inner" data-simplebar>

                <div class="nav-container">
                    <?php if ($watson_profile_pic) : ?>
                        <div class="image-container">
                            <h2 class="header-name"><?php echo esc_html(watson_get_theme_options('ct_watson_header_title')); ?></h2>
                            <img src="<?php echo esc_url($watson_profile_pic); ?>" alt="<?php esc_attr_e('Profile Image', 'watson'); ?>">
                        </div>
                    <?php else : ?>
                        <div class="name-container">
                            <h2 class="header-name"><?php echo esc_html(watson_get_theme_options('ct_watson_header_title')); ?></h2>
                        </div>
                    <?php endif; ?>

                    <!--Nav Menus-->

                    <?php if (has_nav_menu('primary-menu')) : ?>

                        <?php $onepage = watson_get_theme_options('ct_watson_one_page');

                        if ($onepage) {
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container'     => 'nav',
                                'container_id' => 'primary-menu',
                                'container_class' => 'nav-menu slide-menu',
                                'walker' => new Watson_OnePage_Walker()
                            ));
                        } else {
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'container'     => 'nav',
                                'container_id' => 'primary-menu',
                                'container_class' => 'nav-menu slide-menu',
                            ));
                        } ?>

                    <?php endif; ?>

                    <!--Nav Footer-->
                    <div class="nav-footer">
                        <?php
                        global $watson_social_links_icons;
                        $social_icons = watson_get_theme_options('ct_watson_header_social_icons');
                        if (!empty($social_icons)) { ?>
                            <!--Social Links-->
                            <ul class="social">
                                <?php
                                foreach ($social_icons as $social) {
                                    $social_name = $social['name'] ?: 'Fb';
                                    $social_url = $social['url'];
                                ?>
                                    <li><a href="<?php echo esc_url($social_url); ?>" target="_blank"><i class="fab fa-<?php echo esc_attr($watson_social_links_icons[$social_name]); ?>"></i></a></li>
                                <?php } ?>
                            </ul>
                        <?php
                        }
                        ?>
                        <!--Copyright Text-->
                        <div class="copy">
                            <p><?php echo wp_kses_post(watson_get_theme_options('ct_watson_copyright_text')); ?></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</header>
<!--Header End-->