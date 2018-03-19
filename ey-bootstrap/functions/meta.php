<?php	
function add_meta_tags() {
    echo '<meta name="format-detection" content="telephone=no">' . "\n";
}
add_action( 'wp_head', 'add_meta_tags' , 2 );