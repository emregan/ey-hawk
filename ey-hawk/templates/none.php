<?php
/**
 * Template part for displaying page none
 *
 */

?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<h1 class="entry-title"><?php bloginfo('description'); ?></h1>
		</div>
	</header><!-- .entry-header -->
	<div class="container">
			
			<div class="row">
				<div class="col-md-8">
					<div class="entry-content">
						<h2 class="text-center">Not found</h2>
						Sorry, whatever you were looking for isn't here.
					</div><!-- .entry-content -->
				</div>
				<div class="col-md-4 sidebar-right">
					
					<?php get_sidebar(); ?>
				
				</div>
				
			</div><!-- .row -->
			
	</div>
</article><!-- #post-## -->