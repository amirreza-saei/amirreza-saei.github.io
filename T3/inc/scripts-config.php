<?php
/**
 * Used for loading scripts and style of the website
 */


if( !function_exists( 'watson_load_scripts' ) ) {
    function watson_load_scripts() {

        //Register css files
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css');
        wp_enqueue_style('linear-icons', get_template_directory_uri() . '/css/linear-icons.min.css');
        wp_enqueue_style('animations', get_template_directory_uri() . '/css/animations.min.css');
        wp_enqueue_style('animated-headline', get_template_directory_uri() . '/css/jquery.animatedheadline.min.css');
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
        wp_enqueue_style('slide-menu', get_template_directory_uri() . '/css/slide-menu.min.css');
        wp_enqueue_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
        wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.min.css');
        wp_enqueue_style('simplebar', get_template_directory_uri() . '/css/simplebar.min.css');

        wp_enqueue_style('watson-main', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('watson-blog', get_template_directory_uri() . '/css/blog.css');

        if ( watson_get_theme_options('ct_watson_ui_color') === 'light' ) {
            wp_enqueue_style('ui-color', get_template_directory_uri() . '/css/ui-light.css');
        }

        wp_enqueue_style( 'watson-style' , get_template_directory_uri() . '/style.css' );


        // Enqueue standard fonts
        $watson_heading_font_url = '';
        $watson_body_font_url = '';

        /*
		 * Translators: If there are characters in your language that are not supported
		 * by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
        if ('off' !== _x('on', 'Google font: on or off', 'watson')) {
            $watson_heading_font_url = add_query_arg('family', urlencode('Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900'), "//fonts.googleapis.com/css2");
            $watson_body_font_url = add_query_arg('family', urlencode('Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900'), "//fonts.googleapis.com/css2");
        }

        wp_enqueue_style('watson-heading-font', $watson_heading_font_url, array(), '1.0.0');
        wp_enqueue_style('watson-body-font', $watson_body_font_url, array(), '1.0.0');




        //Register scripts files
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
        wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), false, true);        
        wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), false, true);        
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('page-transition', get_template_directory_uri() . '/js/page-transition.min.js', array('jquery'), false, true);
        wp_enqueue_script('animated-headline', get_template_directory_uri() . '/js/jquery.animatedheadline.min.js', array('jquery'), false, true);
        wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
        wp_enqueue_script('fitty', get_template_directory_uri() . '/js/fitty.min.js', array('jquery'), false, true);
        wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), false, true);
        wp_enqueue_script('modulo-columns', get_template_directory_uri() . '/js/modulo-columns.min.js', array('jquery'), false, true);
        wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), false, true);
        wp_enqueue_script('slide-menu', get_template_directory_uri() . '/js/slide-menu.min.js', array('jquery'), false, true);
        wp_enqueue_script('simplebar', get_template_directory_uri() . '/js/simplebar.min.js', array('jquery'), false, true);
        wp_enqueue_script('tilt', get_template_directory_uri() . '/js/tilt.jquery.min.js', array('jquery'), false, true);
        wp_enqueue_script('macy', get_template_directory_uri() . '/js/macy.min.js', array('jquery'), false, true);
        wp_enqueue_script('superslides', get_template_directory_uri() . '/js/jquery.superslides.min.js', array('jquery'), false, true);
        wp_enqueue_script('particles', get_template_directory_uri() . '/js/particles.min.js', array('jquery'), false, true);
        wp_enqueue_script('watson-main', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
    }
}

add_action( 'wp_enqueue_scripts', 'watson_load_scripts');