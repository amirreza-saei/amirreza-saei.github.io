<?php

class Watson_OnePage_Walker extends Walker_Nav_Menu{

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

		global $wp_query;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = '';
		$value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = join(' ', $classes);
       	$class_names = ' class="'. esc_attr( $class_names ) . '"';
		$attributes = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';

		if ( has_nav_menu( 'primary-menu' ) ) {
			if ( $item->object == 'page') {
			    $post_object = get_post( $item->object_id );
			    
				$frontpage_id = get_option( 'page_on_front' );

				$posts_page_id = get_option( 'page_for_posts' );
	
		    	$output .= $indent . '<li data-id="menu-item-'. $item->ID . '"' . $value . $class_names.'>';
				 
		    	if ( $item->object_id == $posts_page_id ) {
		        	$attributes .= ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '" class="no-scroll"' : '';
		        } else {
		        	$post_link = '';

                    $post_link = '#' . $post_object->post_name;

		        	if ( is_front_page() ) {
		        		$attributes .= ' href="' . $post_link . '" class="pt-link" '; 
		        	} else { 
		        		$attributes .= ' href="' . esc_url(home_url()) . $post_link . '" class="no-scroll"';
		        	}
		        }	

		        $item_output = $args->before;
		        $item_output .= '<a' . $attributes . '>';
		        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
		        $item_output .= $args->link_after;
		        $item_output .= '</a>';
		        $item_output .= $args->after;

		        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );            	              	                         
			} else {
				$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names . '>';
	
			    $attributes .= ! empty( $item->url ) ? ' href="' . esc_url( $item->url ) . '" class="no-scroll"' : '';
	
			    $item_output = $args->before;
		        $item_output .= '<a' . $attributes . '>';
		        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
		        $item_output .= $args->link_after;
		        $item_output .= '</a>';
		        $item_output .= $args->after;
	
			    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
		}
	}
}