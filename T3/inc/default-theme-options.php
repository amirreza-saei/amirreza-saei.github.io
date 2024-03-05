<?php
/**
* Used for defining default theme options for the theme
*/

if( !isset($watson_default_theme_options )) {
    
    $watson_default_theme_options = array();

    //General
    $watson_default_theme_options[ 'ct_watson_one_page' ] = false;
    $watson_default_theme_options[ 'ct_watson_animation_type' ] = 'animate-1';
    $watson_default_theme_options[ 'ct_watson_ui_color' ] = 'dark';
    $watson_default_theme_options[ 'ct_watson_preloader' ] = true;
    $watson_default_theme_options[ 'ct_watson_preloader_text' ] = esc_html('PHILIP WATSON');

    //vCard
    $watson_default_theme_options[ 'ct_watson_header_img' ] = '';
    $watson_default_theme_options[ 'ct_watson_header_title' ] = esc_html('PHILIP WATSON');
    $watson_default_theme_options[ 'ct_watson_copyright_text' ] = wp_kses_post( __('2021 © Cosmos-Themes.<br>All Right Reserved.', 'watson'));

    //Portfolio
    $watson_default_theme_options[ 'ct_watson_portfolio_custom_slug' ] = '';
    $watson_default_theme_options[ 'ct_watson_portfolio_single_page_enable' ] = '0';
    $watson_default_theme_options[ 'ct_watson_portfolio_prev_post_caption' ] = esc_html__('Prev', 'watson');
    $watson_default_theme_options[ 'ct_watson_portfolio_next_post_caption' ] = esc_html__('Next', 'watson');

    //Blog
    $watson_default_theme_options[ 'ct_watson_blog_default_title' ] = esc_html__('Blogs', 'watson');
    $watson_default_theme_options[ 'ct_watson_blog_prev_post_caption' ] = esc_html__('Prev', 'watson');
    $watson_default_theme_options[ 'ct_watson_blog_next_post_caption' ] = esc_html__('Next', 'watson');

    //Color
    $watson_default_theme_options[ 'ct_watson_primary_theme_color' ] = '#00A3E1';

    //Error Page
    $watson_default_theme_options['ct_watson_error_title'] = esc_html__('404', 'watson');
    $watson_default_theme_options['ct_watson_error_info'] = esc_html__('The page you are looking for could not be found.', 'watson');
    $watson_default_theme_options['ct_watson_error_back_button'] = esc_html__('Home Page', 'watson');
    $watson_default_theme_options['ct_watson_error_back_button_url'] = esc_url(get_home_url());

}