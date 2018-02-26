<?php

// Create json files each time a field group is saved
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
        
    // return
    return $path;
    
}
 