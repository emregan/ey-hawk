<?php
/**
 * Template part for displaying page content in page.php
 *
 */

?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<h2 class="entry-title"><?php bloginfo('description'); ?></h2>
		</div>
	</header><!-- .entry-header -->
	<div class="container">
			
			<div class="row">
				<div class="col-md-8">
					<div class="entry-content">
						
						<ul class="plain blog-nav">
							<li><?php previous_post_link('%link', 'Previous Post'); ?> </li>
							<li><a class="" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">All Posts</a></li>
							<li><?php next_post_link( '%link', 'Next Post' ); ?></li>
						</ul>
						
						
						<?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
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