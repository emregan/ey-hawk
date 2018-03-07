<!-- WHY WE'RE DIFFERENT -->
<?php // vars
	$title = get_sub_field('overview_title');
	$pipled_title = ! empty( $title ) ? str_replace( ' | ', '<span class="break"> </span>', $title ) : '';
	$subtitle = get_sub_field('overview_subtitle');
	$piped_subtitle = ! empty( $subtitle ) ? str_replace( ' | ', '<span class="break"> </span>', $subtitle ) : '';
	$cards = get_sub_field('overview_cards');
	$button = get_sub_field( 'overview_button' );
	$button_link = get_sub_field( 'overview_button_link' );
	$button_target = get_sub_field( 'overview_button_target' );
?>
<section class="whywerock text-center">
  <div class="container">
    <h2><?php echo $pipled_title; ?></h2>
    <div class="section-intro"><?php echo $piped_subtitle; ?></div>
    
    <div class="section-cards">
	    <?php if( have_rows('overview_cards') ): ?>
	    
		    <div class="row">
	 
			    <?php while( have_rows('overview_cards') ): the_row(); ?>
			    	<?php $card_title = get_sub_field('card_title');
				    	  $card_description = get_sub_field('card_description');
				    	  $image = get_sub_field('card_image');
				    	  $image_id = $image['id'];
						  // and the image size you want to return
							$image_size = 'homepage-card';
							$image_array = wp_get_attachment_image_src($image_id, $image_size);
							$image_url = $image_array[0];
				    ?>
				    
			    	<div class="col-md-3">
				    	<figure><a href=""><img src="<?php echo $image_url; ?>" alt=""></a></figure>
				    	<h3><?php echo $card_title; ?></h3>	
				    	<p><?php echo $card_description; ?></p>		    	
			    	</div>
			        
			    <?php endwhile; ?>
			 

			</div><!-- .row -->
		<?php endif; ?>	    
    </div>
    <div class="section-cta text-center">
	    <?php if ( $button ) : ?>
    		<div class="text-center">
	    		<a class="btn btn-primary has-margin" href="<?php echo $button_link; ?>" <?php echo $button_target == '1' ? ' target="_blank"': ''; ?>><?php echo $button; ?> ›</a>
    		</div>
    	<?php endif; ?>
    	
    </div><!-- .section-cta -->
    <div class="section-cta text-center">
	    <div class="row">
				<div class="text-center"><a class="next-section-arrow" href="#"><i class="fa fa-angle-down"></i></a></div>
			</div>
    </div><!-- .section-cta -->
  </div>
</section>