<?php
/**
 * Blog post page
 *
 */
?>

<?php get_header(); ?>

	<?php include_once( 'templates/bits/navbar.php' ); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				include_once( 'templates/post/content-archive.php' );

			else :

				include_once( 'templates/none.php' );

			endif;
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	<?php //get_sidebar(); ?>

<?php get_footer(); ?>