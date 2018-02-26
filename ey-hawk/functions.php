<?php
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

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


add_image_size( 'homepage-card', 300, 100 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode
add_image_size( 'homepage-slide', 1199, 302 );
add_image_size( 'homepage-success-logo', 335, 217 );