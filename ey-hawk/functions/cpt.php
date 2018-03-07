<?php
function codex_custom_init() {
    $args = array(
      	'public' => true,
      	'label'  => 'Success Stories',
      	'labels' => array(
				'name' => __( 'Success Stories' ),
				'singular_name' => __( 'Success Story' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'customers'),
		'taxonomies'  => array( 'industry' ),
    );
    register_post_type( 'ey_customer', $args );
}
add_action( 'init', 'codex_custom_init' );

// Add columns to admin
/*
 * Add columns to exhibition post list
 */
function add_acf_columns( $columns ) {
   return array_merge ( $columns, array ( 
     'industry' => __ ( 'Industry' )
   ) );
 }
 add_filter ( 'manage_ey_customer_posts_columns', 'add_acf_columns' );
 
 /*
 * Add columns to customer post list
 */
function customer_custom_column( $column, $post_id ) {
   switch ( $column ) {
     case 'industry':
     	$cat = get_field( "card_category", $post_id );
     	if ( is_array( $cat ) ) {
	     	echo ucwords( implode(' ', $cat ) );
     	} else {
	     	echo ucwords( $cat );
     	}
       
       break;
   }
 }
 add_action ( 'manage_ey_customer_posts_custom_column', 'customer_custom_column', 10, 2 );