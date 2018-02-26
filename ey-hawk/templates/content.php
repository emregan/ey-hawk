<?php
/**
 * Template part for displaying page content in page.php
 *
 */

?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	<div class="container">
		<div class="entry-content">
			<?php
				the_content();
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->