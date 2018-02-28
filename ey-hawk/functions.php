<?php
// php.ini overrides
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function my_theme_enqueue_styles() {

    $parent_style = 'ey-bootstrap'; // This is 'ey-bootstrap' parent style.

    wp_enqueue_style( $parent_style, 
    	get_template_directory_uri() . '/style.css', 
    	array( 'bootstrap-styles' ) 
    );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Custom image sizes
add_image_size( 'homepage-card', 300, 100 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
add_image_size( 'homepage-slide', 1199, 302 );
add_image_size( 'homepage-success-logo', 335, 217 );
add_image_size( 'customer-success-logo', 250, 250 );

/**
	Get root parent of page
**/
function get_root_parent($page_id) {
	global $wpdb;
		$parent = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE post_type='page' AND ID = '$page_id'");
		if ($parent == 0) return $page_id;
		else return get_root_parent($parent);
}


// Cild pages
function wpb_list_child_pages() { 

	global $post; 

	if ( is_page() && $post->post_parent )

		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	}

	return $string;

}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');