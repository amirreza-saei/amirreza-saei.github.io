<?php

// register navigation menus
if ( ! function_exists( 'watson_register_nav_menus' ) ){
	
	function watson_register_nav_menus() {

    register_nav_menus(
      array(
        'primary-menu' => esc_html__('Primary Menu', 'watson')
      )
    );
  }
}
add_action( 'init', 'watson_register_nav_menus' );

if (!function_exists('watson_get_page_icon_by_menu')) {
    function watson_get_page_icon_by_menu($page_id)
    {

        $menu_locations = get_nav_menu_locations();
        $menu_primary = $menu_locations['primary-menu'];
        $icon = null;

        $menu = wp_get_nav_menu_object($menu_primary);

        if ($menu) {
            $items = wp_get_nav_menu_items($menu->term_id);

            foreach ($items as $k => $v) {

                // Check if this menu item links to the current page
                if ($items[$k]->object_id == $page_id) {
                    $icon = get_post_meta($items[$k]->ID, '_watson_menu_icon', true);
                    break;
                }
            }
        }
        return $icon;
    }
}

require_once(get_template_directory() . '/inc/watson-onepage-nav-walker.php');