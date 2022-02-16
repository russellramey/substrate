<?php
/***********************************************************
*
** THEME MENU WALKERS
** Rebuild WP_Nav_Object with custom classes and markup
** Extends WP Core Walker_Nav_Menu class (php)
*
************************************************************/
class bootstrap_navbar_menu_walker extends Walker_Nav_Menu {

	// Add classes to <ul> elements
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'dropdown-menu',
            'sub-menu',
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // build html
        if ($display_depth > 0) {
            $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
        } else {
            $output .= "\n" . $indent . '<ul class="navbar-nav ' . $class_names . '">' . "\n";
        }
    }

	// Add classes and additional markup to <li> items
	function start_el(&$output, $item, $depth=0, $args = [], $id = 0){
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

	    // depth dependent classes
		if(!in_array('nav-item', $item->classes)){
		    $depth_classes = array(
		        ( $depth <= 0 ? 'nav-item' : 'dropdown-item' ),
		        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ), 'menu-item-depth-' . $depth
		    );
		} else {
			$depth_classes = null;
		}

		// // Add active class if current page
		// if(in_array('current_page_item', $item->classes)){
		// 	$depth_classes[] = 'active';
        //
		// }
        // // Add open class if current page parent
        // if(in_array('current_page_parent', $item->classes) || (in_array('current_page_item', $item->classes) && in_array('menu-item-has-children', $item->classes))){
        //     $depth_classes[] = 'open';
        // }

        // depth classes names
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// build html
    	$output .= $indent . '<li class="' . $depth_class_names . ' ' . $class_names . '">';

		// link attributes
	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        // If dropdown
        if($args->walker->has_children){
             $attributes .= ' class="nav-link dropdown-toggle ' . ( $depth > 0 ? 'sub-menu-link' : 'top-menu-link' ) . '"';
             $attributes .= ' data-bs-toggle="dropdown" aria-expanded="false"';
		} else {
             $attributes .= ' class="nav-link ' . ( $depth > 0 ? 'sub-menu-link' : 'top-menu-link' ) . '"';
        }

		if(!in_array('nav-link', $item->classes)){
			$args->link_before = '<a' . $attributes .'>';
			$args->link_after = '</a>';
		} else {
			$args->link_before = '';
			$args->link_after = '';
			$args->before = '';
			$args->after = '';
		}

	    $item_output = sprintf( '%1$s%2$s%3$s%4$s%5$s',
	        $args->before,
	        $args->link_before,
	        apply_filters( 'the_title', $item->title, $item->ID ),
	        $args->link_after,
	        $args->after
	    );

	    // build html
	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

}
