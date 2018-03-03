<?php
/**
 * Template part for displaying page content in page.php
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
						<?php the_title( '<h2 class="text-center">', '</h2>' ); ?>
						<div class="entry-meta text-center">
							<?php // vars
								$display_name = get_the_author_meta( 'display_name' );
								$post_date = the_date('M d, Y', '', '', FALSE);
								$url = get_the_author_meta( 'user_url' );
								?><?php echo nl2br(get_the_author_meta('description')); ?>
								<p>by: 
									<?php if ( $url ) : ?>
										<strong><a href="<?php echo $url; ?>" target="_blank"><?php echo $display_name; ?></a></strong>
    							<?php else : ?>
    								<strong><?php echo $display_name; ?></strong>
    							<?php endif; ?>
    								<?php echo $post_date; ?>
    							</p>
							
						</div>
						<?php
							the_content();
						?>
					</div><!-- .entry-content -->
				</div>
				<div class="col-md-4 sidebar-right">
					
					<?php get_sidebar(); ?>
				
				</div>
				
			</div><!-- .row -->
			
	</div>
</article><!-- #post-## -->