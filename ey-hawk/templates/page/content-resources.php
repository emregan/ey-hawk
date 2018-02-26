<!-- RESOURCES -->
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
<section class="resources text-center">
  <div class="container">
    <h2><?php echo $pipled_title; ?></h2>
    <div class="section-intro"><?php echo $piped_subtitle; ?></div>
    
    <div class="section-cards">
	    
	    <div class="button-group filters-button-group">
		  <button class="button is-checked" data-filter="*">All Resources</button>
		  <button class="button" data-filter=".blog">Blog</button>
		  <button class="button" data-filter=".ebooks">eBooks</button>
		  <button class="button" data-filter=".events">Events</button>
		</div>
		
		<?php if( have_rows('overview_cards') ): ?>

			<div class="grid">
				
				<div class="grid-sizer"></div>
				
				<?php while( have_rows('overview_cards') ): the_row(); ?>
				
					<?php 
				    	$card_title = get_sub_field('card_title');
				        $card_subtitle = get_sub_field('card_subtitle');
				    	$card_description = get_sub_field('card_description');
				    	$card_button = get_sub_field('card_button');
				    	$card_link = get_sub_field('card_link');
				    	$card_category = get_sub_field('card_category');
				    	$image = get_sub_field('card_image');
				    	$image_id = $image['id'];
						$image_size = 'homepage-card'; // custom image size
						$image_array = wp_get_attachment_image_src($image_id, $image_size);
						$image_url = $image_array[0];
				    ?>
				
					<div class="element-item <?php echo $card_category; ?>" data-category="<?php echo $card_category; ?>">
				    	<?php if ( $image ) : ?>
				    		<figure><a href=""><img src="<?php echo $image_url; ?>" alt=""></a></figure>
						<?php endif; ?>
				    	<h3><?php echo $card_title; ?></h3>
				    	<?php if ( $card_subtitle ) : ?>
					    	<h4><i><?php echo $card_subtitle; ?></i></h4>	
					    <?php endif; ?>
				    	<p><?php echo $card_description; ?></p>		
				    	
						<?php if ( $card_button ) : ?>
							<div class="section-cta">
					    		<a class="btn btn-primary no-margin-left" href="<?php echo $card_link; ?>" <?php echo $button_target == '1' ? ' target="_blank"': ''; ?>><?php echo $card_button; ?> ›</a>
					    	</div><!-- .section-cta --> 
					    <?php endif; ?>  
					     	
			    	</div>
				  	
				<?php endwhile; ?>
			  
			</div><!-- .grid -->
		
		<?php endif; ?>	
		

  </div>
</section>