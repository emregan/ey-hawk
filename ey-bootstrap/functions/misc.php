<?php
/* Change Excerpt length */
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('\'[[^]]*]\'','',$excerpt);
  return $excerpt;
}

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary' )
    )
  );
}
add_action( 'init', 'register_my_menus' );