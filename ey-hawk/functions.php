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


// Left nav menu pages
function wpb_list_child_pages() { 
	global $post; 
	$string = '';
	$parent_id = get_root_parent($post->ID);
	$title = $post->post_title;
	$url = get_permalink( $post);
	if ( $post->ID == $parent_id )
		$childpages = wp_list_pages( array(
					        'title_li' => '',
					        'child_of' => $parent_id,
					        'sort_column'  => 'menu_order',
					        'depth'    => 1,
					        'echo'     => 0
					    ) );
	else
		$childpages = wp_list_pages( array(
					        'title_li' => '',
					        'child_of' => $parent_id,
					        'sort_column'  => 'menu_order',
					        'depth'    => 2,
					        'echo'     => 0
					    ) );
	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	} else {
		$string = '<ul><li class="current_page_item"><a href="' . $url . '">' . $title . '</a></ul>';
	}
	return $string;
}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');


/** Custom Post Types */
require_once( 'functions/cpt.php' );

/** Search form */
require_once( 'functions/searchform.php' );