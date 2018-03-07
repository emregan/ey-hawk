<?php
/**
 * Template part for displaying single customer success story
 *
 */

?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<h1 class="entry-title">customer success story: <?php the_title(); ?>
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