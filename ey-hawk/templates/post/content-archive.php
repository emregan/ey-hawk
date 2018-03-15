<!-- BLOG POSTS -->
<?php // vars
	$header_title = get_bloginfo( 'description' );

?>
<header class="entry-header">
	<div class="container">
		<h2 class="entry-title"><?php echo $header_title; ?></h2>
	</div>
</header><!-- .entry-header -->
<section class="blog">
	<div class="container">
	  
		<div class="row">
			<div class="col-md-8">
	  		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<?php  
					$card_title = get_the_title();
					$card_category = 'blog';
					$categories = get_the_category();
					$separator = ', ';
					$output = '';
					if ( ! empty( $categories ) ) {
					    foreach( $categories as $category ) {
						    if ( $category->name != "Uncategorized" ) {
							    $output .= esc_html( $category->name ) . $separator;
						    }
					    }
					}
			        $card_subtitle = trim( $output, $separator );
			        // excerpt(30)
			    	$card_description =  get_the_excerpt();
			    	$card_button = 'Read More';
			    	$card_link = get_permalink();
			    	?>
			
					<div class="blog-entry">
				    	<h3><?php echo $card_title; ?></h3>
				    	<?php if ( $card_subtitle ) : ?>
					    	<h4><i><?php echo $card_subtitle; ?></i></h4>	
					    <?php endif; ?>
				    	<p><?php echo $card_description; ?></p>		
				    	
						<?php if ( $card_button ) : ?>
							<div class="section-cta">
					    		<a class="btn btn-primary no-margin-left" href="<?php echo $card_link; ?>"><?php echo $card_button; ?> ›</a>
					    	</div><!-- .section-cta --> 
					    <?php endif; ?>  
					     	
			    	</div>
			
				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				
				<div class="navigation text-center">
					<?php posts_nav_link(' ','<i class="fa fa-angle-left"></i>&nbsp;&nbsp; Previous Page','Next Page &nbsp;&nbsp;<i class="fa fa-angle-right"></i>'); ?>
				</div>
			
			</div><!-- .col -->
		
			<div class="col-md-4 sidebar-right">
			
				<?php get_sidebar(); ?>
		
			</div>
		
		</div><!-- .row -->
				
	</div><!-- .container -->

</section>