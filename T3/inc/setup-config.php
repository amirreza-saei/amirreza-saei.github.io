<?php
/**
 * Used For Theme Setup
 */

//Register Widget
if(  !function_exists('watson_widgets_init') ){

    function watson_widgets_init(){

		$args = array(
            'name'             => esc_html__('Blog Sidebar', 'watson'),
            'id'               => 'watson-blog-sidebar',
            'description'      => '',
            'class'            => '',
            'before_widget'    => '<div id="%1$s" class="watson-single-widget widget_meta %2$s">',
            'after_widget'     => '</div>',
            'before_title'     => '<h4 class="widget-title">',
            'after_title'      => '</h4>'
        );
		
		register_sidebar( $args );
        
    }
}

add_action( 'widgets_init', 'watson_widgets_init' );

// theme setup
if ( ! function_exists( 'watson_theme_setup' ) ){

    function watson_theme_setup() {

        // Set content width
        if ( ! isset( $content_width ) ) $content_width = 1140;

        // add support for multiple languages
        load_theme_textdomain( 'watson', get_template_directory() . '/languages' );
			
	}

}