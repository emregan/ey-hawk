<!-- CUSTOMERS -->
<?php // vars
	$title = get_the_title();
	$pipled_title = ! empty( $title ) ? str_replace( ' | ', '<br />', $title ) : '';
	$subtitle = get_the_content();
	$piped_subtitle = ! empty( $subtitle ) ? str_replace( ' | ', '<br />', $subtitle ) : '';
	$cards = get_sub_field('overview_cards');
	$button = get_sub_field( 'overview_button' );
	$button_link = get_sub_field( 'overview_button_link' );
	$button_target = get_sub_field( 'overview_button_target' );
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
		
		<?php if( have_rows('overview_cards') ): ?>

			<div class="grid">
				
				<div class="grid-sizer"></div>
				
				<?php while( have_rows('overview_cards') ): the_row(); ?>
				
					<?php
				    	$card_category = get_sub_field('card_category');
				    	$card_title = get_sub_field('card_title');
				        $card_subtitle = get_sub_field('card_subtitle');
				    	$card_description = get_sub_field('card_description');
				    	$card_link = get_sub_field('card_link');
				    	$card_hover = get_sub_field('card_hover_bg');
				    	$image = get_sub_field('card_image');
				    	$image_id = $image['id'];
						$image_size = 'customer-success-logo'; // custom image size
						$image_array = wp_get_attachment_image_src($image_id, $image_size);
						$image_url = $image_array[0];
				    ?>
				
					<div class="element-item <?php echo $card_category; ?>" data-category="<?php echo $card_category; ?>">
						
						<a href="" class="hover-image" style="background-image: url(<?php echo $image_url; ?>);" alt="<?php echo $card_title; ?>">
							<div class="hover-image-text" style="background-color: <?php echo $card_hover; ?>;">
								<p><?php echo $card_subtitle; ?></p>
							</div>
						</a>
				    	<h3><?php echo $card_title; ?></h3>
				    	<p><?php echo $card_description; ?></p>		
				    	 
					     	
			    	</div>
				  	
				<?php endwhile; ?>
			  
			</div><!-- .grid -->
		
		<?php endif; ?>	
		

  </div>
</section>