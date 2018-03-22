<?php get_header(); ?>

	<?php include_once( 'templates/bits/navbar.php' ); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
				
					include_once( 'templates/content.php' );

				endwhile;

			else :

				include_once( 'templates/none.php' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	

<?php get_footer(); ?>
