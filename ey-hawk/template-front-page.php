<?php
/* Template Name: Home */
?>
<?php get_header(); ?>

	<?php include_once( 'templates/bits/navbar.php' ); ?>
    
<?php

// check if the flexible content field has rows of data
if( have_rows('homepage_layout') ):

     // loop through the rows of data
    while ( have_rows('homepage_layout') ) : the_row();

        if( get_row_layout() == 'jumbotron' ):

        	include_once( 'templates/home-jumbotron.php' );

        elseif( get_row_layout() == 'expertise' ): 

        	include_once( 'templates/home-expertise.php' );
        	
        elseif( get_row_layout() == 'whywerock' ): 

        	include_once( 'templates/home-whywerock.php' );
        	
        elseif( get_row_layout() == 'success' ): 

        	include_once( 'templates/home-success.php' );
        	
        elseif( get_row_layout() == 'slider' ): 

        	include_once( 'templates/home-slider.php' );

        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>
