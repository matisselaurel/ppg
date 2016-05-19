<?php

$headerNavOptions = array(
	'theme_location'  => '',
	'menu'            => 'Main Menu',
	'container'       => 'nav',
	'container_class' => 'columns large-8 no-padding show-for-large',
	'container_id'    => '',
	'menu_class'      => 'dropdown menu no-bullet',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
	'depth'           => 0,
	'walker' => new Foundation_Walker_Nav_Menu
);

$mobileHeaderNavOptions = array(
	'theme_location'  => '',
	'menu'            => 'Mobile Header Menu',
	'container'       => 'ul',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => ' accordion no-bullet',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
	'depth'           => 0,
	'walker' => new FoundationAccordion_Walker_Nav_Menu
);

$legalNavOptions = array(
	'theme_location'  => '',
	'menu'            => 'Legal Links',
	'container'       => 'ul',
	'container_class' => 'columns large-9 no-padding medium-12 small-12 small-push-12 medium-push-12 vertical medium-horizontal menu',
	'container_id'    => '',
	'menu_class'      => 'columns large-9 menu no-bullet',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker' => new Foundation_Walker_Nav_Menu
);

class FoundationAccordion_Walker_Nav_Menu extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth ) {

		//In a child UL, add the 'dropdown-menu' class
		$indent = str_repeat( "\t", $depth );
		$output	   .= "\n$indent<div class=\"accordion-content\">\n";

	}
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
// echo '<pre>';
// 	print_r($item);
// echo '</pre>';




		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$li_attributes = '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		//Add class and attribute to LI element that contains a submenu UL.
		if ($args->has_children){
			$classes[] 		= 'accordion-item';
			$li_attributes .= '"';
		}
		$classes[] = 'menu-item-' . $item->ID;
		$classes[] = 'accordion-title';
		//If we are on the current page, add the active class to that menu item.
		$classes[] = ($item->current) ? 'active' : '';
		//Make sure you still add all of the WordPress classes.
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$li_attributes .= 'data-accordion-item';
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
		//Add attributes to link element.
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		//$attributes .= ! empty( $item->url ) ? ' ui-sref="detail({id: post.'.$item->ID.'})"' : '';
		//echo ' ui-sref="detail({id: post.'.$item->ID.'})"';
		$attributes .= ( strtolower($item->type_label) == 'page' ? 'ui-sref="pagedetail({id: '. $item->object_id .'})"': 'ui-sref="detail({id: '. $item->ID .'})"');
		$attributes .= ($args->has_children) ? '     ' : '';
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($args->has_children) ? ' <i class="fa fa-angle-down"></i> ' : '';
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	//Overwrite display_element function to add has_children attribute. Not needed in >= Wordpress 3.4
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

		if ( !$element )
			return;

		$id_field = $this->db_fields['id'];
		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);
		$id = $element->$id_field;
		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
			foreach( $children_elements[ $id ] as $child ){
				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
				unset( $children_elements[ $id ] );
		}
		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}
		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);

	}

}
class Foundation_Walker_Nav_Menu extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth ) {

		//In a child UL, add the 'dropdown-menu' class
		$indent = str_repeat( "\t", $depth );
		$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";

	}
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
// echo '<pre>';
// 	print_r($item);
// echo '</pre>';




		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$li_attributes = '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		//Add class and attribute to LI element that contains a submenu UL.
		if ($args->has_children){
			$classes[] 		= 'dropdown';
			$li_attributes .= 'data-dropdown="dropdown"';
		}
		$classes[] = 'menu-item-' . $item->ID;
		//If we are on the current page, add the active class to that menu item.
		$classes[] = ($item->current) ? 'active' : '';
		//Make sure you still add all of the WordPress classes.
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
		//Add attributes to link element.
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		//$attributes .= ! empty( $item->url ) ? ' ui-sref="detail({id: post.'.$item->ID.'})"' : '';
		//echo ' ui-sref="detail({id: post.'.$item->ID.'})"';
		$attributes .= ( strtolower($item->type_label) == 'page' ? 'ui-sref="pagedetail({id: '. $item->object_id .'})"': 'ui-sref="detail({id: '. $item->ID .'})"');
		$attributes .= ($args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ($args->has_children) ? ' <i class="fa fa-angle-down"></i> ' : '';
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
	//Overwrite display_element function to add has_children attribute. Not needed in >= Wordpress 3.4
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {

		if ( !$element )
			return;

		$id_field = $this->db_fields['id'];
		//display this element
		if ( is_array( $args[0] ) )
			$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
		else if ( is_object( $args[0] ) )
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'start_el'), $cb_args);
		$id = $element->$id_field;
		// descend only when the depth is right and there are childrens for this element
		if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
			foreach( $children_elements[ $id ] as $child ){
				if ( !isset($newlevel) ) {
					$newlevel = true;
					//start the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
				}
				$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
			}
				unset( $children_elements[ $id ] );
		}
		if ( isset($newlevel) && $newlevel ){
			//end the child delimiter
			$cb_args = array_merge( array(&$output, $depth), $args);
			call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
		}
		//end this element
		$cb_args = array_merge( array(&$output, $element, $depth), $args);
		call_user_func_array(array(&$this, 'end_el'), $cb_args);

	}

}
class wp_ng_theme {

	function enqueue_scripts() {
		//wp_enqueue_style( 'bootstrapCSS', 'https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.css', array(), '1.0', 'all' );

		wp_enqueue_script( 'angular-core', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js', array( 'jquery' ), '1.0', false );

		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js', array(  ), '1.0', false );

		wp_enqueue_script( 'angular-resource', '//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-resource.js', array('angular-core'), '1.0', false );
		wp_enqueue_script( 'ui-router', 'https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js', array( 'angular-core' ), '1.0', false );
		wp_enqueue_script( 'foundationJS', 'https://cdn.jsdelivr.net/foundation/6.2.1/foundation.min.js', array('jquery'), '1.0', false );
		wp_enqueue_script( 'trustpilot', 'http://widget.trustpilot.com/bootstrap/v5/tp.widget.sync.bootstrap.min.js', array('jquery'), '1.0', false );


		wp_enqueue_script( 'odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array( ), '1.0', false );
		wp_enqueue_script( 'ngScripts', get_template_directory_uri() . '/assets/js/angular-theme.js', array( 'ui-router' ), '1.0', false );
		wp_localize_script( 'ngScripts', 'appInfo',
			array(
				'api_url'			 => rest_get_url_prefix() . '/wp/v2/',
				'template_directory' => get_template_directory_uri() . '/',
				'nonce'				 => wp_create_nonce( 'wp_rest' ),
				'is_admin'			 => current_user_can('administrator')
			)
		);

	}

	function register_new_field() {

		register_api_field( 'post',
			'my_awesome_field',
			array(
				'get_callback' => array( $this, 'awesome_field' )
			)
		);

	}

	function awesome_field( $object, $field_name, $request ) {

		return 'My Awesome String';

	}

	function my_awesome_route() {

		register_rest_route( 'wp/v2', '/roy', array(
			'methods' => 'GET',
			'callback' => array( $this, 'my_awesome_route_callback' )
			)
		);


	}

	function my_awesome_route_callback( $data ) {

		$new_data = array( 'name' => 'Roy Sivan', 'age' => 29, 'location' => 'Los Angeles' );
		$response = new WP_REST_Response( $new_data );

		return $response;

	}






}

$ngTheme = new wp_ng_theme();

add_action( 'wp_enqueue_scripts', array( $ngTheme, 'enqueue_scripts') );

//add_action( 'rest_api_init', array( $ngTheme, 'register_new_field' ) );
//add_action( 'rest_api_init', array( $ngTheme, 'my_awesome_route' ) );
add_theme_support( 'post-thumbnails' );

function register_main_menu() {
	  register_nav_menu('primary-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_menu' );

function register_mobileheader_menu() {
	  register_nav_menu('mobile-header-menu',__( 'Mobile Header Menu' ));
}

function register_footer_menu() {
	  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

function loadParamountJs() {
    echo '<script type="text/javascript" src="http://dev.ppg.local/wp-content/themes/angular-spa/assets/js/paramountDefault.js"></script>';
}

function loadSlick() {
	// if ( is_front_page() ) {
	// 	echo '<h1>success</h1>';
	// 	echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>';
	// }
	echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>';
}
add_action('wp_footer', 'loadSlick', 100);
add_action('wp_footer', 'loadParamountJs', 101);

// Allow html tags on post/page content
remove_filter('the_content', 'wp_filter_kses');

// remove wp's automatic line breaks
remove_filter( 'the_content', 'wpautop' );

?>