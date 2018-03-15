<!-- CUSTOMERS -->
<?php // vars
	$title = get_field( 'success_title', 'cpt_ey_customer' );
	$pipled_title = ! empty( $title ) ? str_replace( ' | ', '<br />', $title ) : '';
	$subtitle = get_field( 'success_description', 'cpt_ey_customer' );
	$piped_subtitle = ! empty( $subtitle ) ? str_replace( ' | ', '<br />', $subtitle ) : '';
?>
<section class="customers text-center">
  <div class="container">
    <h2><?php echo $pipled_title; ?></h2>
    <div class="section-intro"><?php echo $piped_subtitle; ?></div>

    <div class="section-cards">
	    
	    <div class="button-group filters-button-group">
		  <button class="button is-checked" data-filter="*">All Customers</button>
		  <button class="button" data-filter=".professional">All Professional Services</button>
		  <button class="button" data-filter=".manufacturing">All Manufacturing</button>
		  <button class="button" data-filter=".isv">All ISVs</button>
		</div>
		
		<?php
		$args = array(
			'post_type' => 'ey_customer',
			'post_status' => 'publish',
			'order' => 'ASC',
			'orderby' => 'title',
			'posts_per_page' => '-1',
		);
	    $loop = new WP_Query( $args );
	    if ( $loop->have_posts() ) : ?>
	    
	    <div class="grid" data-isotope='{ "itemSelector": ".element-item", "layoutMode": "cellsByRow", "cellsByRow": { "columnWidth": ".grid-sizer" } }'>
		    
		    <div class="grid-sizer"></div>
	    
	    	<?php
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>
	        	
	        	<?php // vars
		        	// $card_category = implode(' ', get_field('card_category'));
		        	$cat = get_field('card_category');
		        	if ( is_array( $cat ) ) {
			        	$card_category = implode(' ', $cat );
		        	} else {
			        	$card_category = $cat;
		        	}
			    	$card_title = get_field('card_title');
			        $card_subtitle = get_field('card_subtitle');
			    	$card_description = get_field('card_description');
			    	$card_link = get_the_permalink();
			    	$card_hover = get_field('card_hover_bg');
			    	$image = get_field('card_image');
			    	$image_id = $image['id'];
					$image_size = 'customer-success-logo'; // custom image size
					$image_array = wp_get_attachment_image_src($image_id, $image_size);
					$image_url = $image_array[0]; 
		        	
		        ?>
		        
		        
	            <div class="element-item <?php echo $card_category; ?>" data-category="<?php echo $card_category; ?>">
						
					<a href="<?php echo $card_link; ?>" class="hover-image" style="background-image: url(<?php echo $image_url; ?>);" alt="<?php echo $card_title; ?>">
						<div class="hover-image-text" style="background-color: <?php echo $card_hover; ?>;">
							<p><?php echo $card_subtitle; ?></p>
						</div>
					</a>
			    	<h3><?php echo $card_title; ?></h3>
			    	<p><?php echo $card_description; ?></p>		
			    	 
				     	
		    	</div>
	            
	        <?php endwhile; ?>
	        
	    </div><!-- .grid -->
		    
		<?php
	    endif;
	    wp_reset_postdata();
		?>
  </div>
</section>