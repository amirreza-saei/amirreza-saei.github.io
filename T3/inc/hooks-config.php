<?php

// Use to define hooks and filters

if (!function_exists('_wp_render_title_tag')) {

    function watson_wp_title()
    {

        echo wp_title('|', false, 'right');
    }
    add_action('wp_head', 'watson_wp_title');
}

/**
 * Add icon fields to menu item
 */
if (!function_exists('watson_nav_menu_icon_field')) {
    function watson_nav_menu_icon_field($item_id)
    {
        wp_nonce_field('watson_menu_icon_meta_nonce_action', 'watson_menu_icon_meta_nonce_field');
        $watson_menu_icon = get_post_meta($item_id, '_watson_menu_icon', true);

?>
        <div class="field-watson-menu-icon description-wide" style="margin: 5px 0;">
            <input type="hidden" class="nav-menu-id" value="<?php echo esc_attr($item_id); ?>" />
            <div class="logged-input-holder">
                <label for="watson-menu-icon-for-<?php echo esc_attr($item_id); ?>">
                    <?php esc_html_e('Icon', 'watson'); ?>

                    <div class="lnricon-preview"><i class="lnr lnr-<?php echo esc_attr($watson_menu_icon); ?>"></i></div>

                    <select class="lnricon-select widefat" name="watson_menu_icon[<?php echo esc_attr($item_id); ?>]" id="watson-menu-icon-for[<?php echo esc_attr($item_id); ?>]" value="<?php echo esc_attr($watson_menu_icon); ?>">
                        <?php
                        global $watson_nav_menu_icons;

                        foreach ($watson_nav_menu_icons as $menu_icon) : ?>
                            <option <?php if ($watson_menu_icon == $menu_icon) { ?>selected="true" <?php }; ?> value="<?php echo esc_attr($menu_icon); ?>"><?php echo esc_html($menu_icon); ?></option>

                        <?php endforeach; ?>
                    </select>
                </label>
            </div>

        </div>

<?php
    }
}

add_action('wp_nav_menu_item_custom_fields', 'watson_nav_menu_icon_field', 10, 2);

/**
 * Save the menu icon
 */
if (!function_exists('watson_nav_menu_icon_update')) {
    function watson_nav_menu_icon_update($menu_id, $menu_item_db_id)
    {

        // Verify this came from our screen and with proper authorization.
        if (!isset($_POST['watson_menu_icon_meta_nonce_field']) || !wp_verify_nonce($_POST['watson_menu_icon_meta_nonce_field'], 'watson_menu_icon_meta_nonce_action')) {
            return $menu_id;
        }

        if (isset($_POST['watson_menu_icon'][$menu_item_db_id])) {
            $sanitized_data = sanitize_text_field($_POST['watson_menu_icon'][$menu_item_db_id]);
            update_post_meta($menu_item_db_id, '_watson_menu_icon', $sanitized_data);
        } else {
            delete_post_meta($menu_item_db_id, '_watson_menu_icon');
        }
    }
}

add_action('wp_update_nav_menu_item', 'watson_nav_menu_icon_update', 10, 2);

if (!function_exists('watson_enqueue_admin_nav_menu_script')) {
    function watson_enqueue_admin_nav_menu_script($hook)
    {
        if ('nav-menus.php' != $hook) {
            return;
        }
        wp_enqueue_style('linear-icons', get_template_directory_uri() . '/css/linear-icons.min.css');
        wp_enqueue_style('select2-css', get_template_directory_uri() . '/css/select2.min.css');
        wp_enqueue_style('admin-style', get_template_directory_uri() . '/css/admin-nav-menu-style.css');

        wp_enqueue_script('select2-js', get_template_directory_uri() . '/js/select2.min.js', array('jquery'), false, true);
        wp_enqueue_script('admin-menu-js', get_template_directory_uri() . '/js/admin-nav-menu-script.js', array('jquery'), false, true);
    }
}
add_action('admin_enqueue_scripts', 'watson_enqueue_admin_nav_menu_script', 10, 2);

/**
 * Add Menu Item Icon
 */
function watson_nav_menu_objects($items, $args)
{
    // loop
    foreach ($items as &$item) {
        // vars
        $icon = get_post_meta($item->ID, '_watson_menu_icon', true);

        // append icon
        if ($icon and $icon != 'none') {
            $item->classes[] = 'has-menu-icon';
            $item->title = "<span class='nav-menu-icon'><i class='lnr lnr-" . $icon . "'></i></span>" . $item->title;
        }
    }
    // return
    return $items;
}
add_filter('wp_nav_menu_objects', 'watson_nav_menu_objects', 10, 2);

add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Remove Block Based Widgets
 */
function watson_remove_widgets_block_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'watson_remove_widgets_block_theme_support' );

add_filter( 'use_widgets_block_editor', '__return_false' );
