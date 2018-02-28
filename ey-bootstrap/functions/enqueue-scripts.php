<?php
	
// Enqueue stylesheets
add_action( 'wp_enqueue_scripts', 'eybootstrap_enqueue_stuff' );

function eybootstrap_enqueue_stuff() {
     
    // JQuery
    wp_enqueue_script(
        'jquery-script', 
        'https://code.jquery.com/jquery-3.2.1.min.js' // this is the location of your script file
    ); 
    
    // Popper
    wp_enqueue_script(
	    'popper-script',
	    get_template_directory_uri() . '/js/vendor/popper.min.js'
    );
    
    // Tether
   wp_enqueue_script(
		'tether-script',
		'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js',
		array('jquery-script')	    
    );
    
    // Bootstrap
    wp_enqueue_script(
        'bootstrap-script', 
         get_template_directory_uri() . '/js/vendor/bootstrap.min.js', // this is the location of your script file
        array('jquery-script') // this array lists the scripts upon which your script depends
    );  
    
    // IE 10 Fix
    wp_enqueue_script(
		'ie10fix',
		get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js',
		array('jquery')	    
    );

    // Custom scripts
    wp_enqueue_script(
        'custom', 
         get_template_directory_uri() . '/js/custom.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    ); 
    
     // Bootstrap
    wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css' );
    
    // Custom
    wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/custom.css', 80 );
    
    // FontAwesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css' );
    
    // Google Fonts
    //wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans' );
    
    // Scrollify
    /*wp_enqueue_script(
        'scrollify-script', 
         'https://cdnjs.cloudflare.com/ajax/libs/scrollify/0.1.10/jquery.scrollify.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    ); */
    
    // Masonry
    /*wp_enqueue_script(
        'jquery-masonry', 
         get_template_directory_uri() . '/js/jquery.masonry.js',
        array('jquery') // this array lists the scripts upon which your script depends
    );*/
    
    // Isotope
    wp_enqueue_script(
        'jquery-isotope', 
         get_template_directory_uri() . '/js/jquery.isotope.js',
        array('jquery')
    );

}

/**
 * Enqueue admin styles/scripts
 */
function eybootstrap_enqueue_custom_admin_style() {
    /*wp_enqueue_script(
        'url-update', 
        get_stylesheet_directory_uri() . '/js/url-update.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    ); */
    
    // Admin styles
    //wp_enqueue_style( 'admin-styles', get_template_directory_uri() . '/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'eybootstrap_enqueue_custom_admin_style' );

function load_fonts() {
	// Roboto and Open Sans
    wp_enqueue_style('eybootstrap-fonts',  get_template_directory_uri() . '/fonts/fonts.css' );
}
    
//add_action('wp_print_styles', 'load_fonts');

?>