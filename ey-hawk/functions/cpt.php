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
    );
    register_post_type( 'ey_customer', $args );
}
add_action( 'init', 'codex_custom_init' );