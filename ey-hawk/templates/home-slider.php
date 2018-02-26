<!-- SONOMA SLIDER -->
<?php // vars
	$title = get_sub_field('overview_title');
	$pipled_title = ! empty( $title ) ? str_replace( ' | ', '<br />', $title ) : '';
	$subtitle = get_sub_field('overview_subtitle');
	$piped_subtitle = ! empty( $subtitle ) ? str_replace( ' | ', '<br />', $subtitle ) : '';
	$slides = get_sub_field('overview_slides');
	$button = get_sub_field( 'overview_button' );
	$button_link = get_sub_field( 'overview_button_link' );
	$button_target = get_sub_field( 'overview_button_target' );
?>
<section class="slider text-center">
  <div class="container">
    <h2><?php echo $pipled_title; ?></h2>
    <div class="section-intro"><?php echo $piped_subtitle; ?></div>
    
    <div class="section-slider">
	    
	    <?php if( have_rows('overview_slides') ): ?>
	    
		    <div class="row">
			    
			    <div id="slider" class="carousel slide" data-ride="carousel">
					  
					  <!-- The slideshow -->
					  <div class="carousel-inner">
						  
						<?php $counter = 0; ?>
	 
					    <?php while( have_rows('overview_slides') ): the_row(); ?>
					    	<?php $slide_title = get_sub_field('slide_title');
						    	  $slide_link = get_sub_field('slide_url');
						    	  $image = get_sub_field('slide_image');
						    	  $image_id = $image['id'];
								  // and the image size you want to return
								   $image_size = 'homepage-slide';
								  $image_array = wp_get_attachment_image_src($image_id, $image_size);
							      $image_url = $image_array[0];
						    ?>
						    
						     <div class="carousel-item <?php echo $counter==0 ? 'active' : ''; ?>">
							      <a href="<?php echo $slide_link; ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $slide_title; ?>"></a>
							 </div>
							 
							 <?php $counter ++; ?>
					        
					    <?php endwhile; ?>
					    
					   </div><!-- .carousel-inner -->
				    
				    
				    <!-- Left and right controls -->
					<a class="carousel-control-prev" href="#slider" data-slide="prev">
					    <span class="carousel-control-prev-icon"></span>
					  </a>
					  <a class="carousel-control-next" href="#slider" data-slide="next">
					    <span class="carousel-control-next-icon"></span>
					  </a>
				    <!-- Indicators -->
				  <ul class="carousel-indicators">
				    <li data-target="#slider" data-slide-to="0" class="active"></li>
				    <li data-target="#slider" data-slide-to="1"></li>
				    <li data-target="#slider" data-slide-to="2"></li>
				  </ul>
				</div><!-- .slider -->
				
				
			 

			</div><!-- .row -->
		 
		<?php endif; ?>	    
    </div>
    
    
    <div class="section-cards">
	    <?php if( have_rows('overview_cards') ): ?>
	    
		    <div class="row">
	 
			    <?php while( have_rows('overview_cards') ): the_row(); ?>
			    	<?php $card_title = get_sub_field('card_title');
				    	  $image = get_sub_field('card_image');
				    	  $image_id = $image['id'];
						  // and the image size you want to return
							$image_size = 'homepage-card';
							$image_array = wp_get_attachment_image_src($image_id, $image_size);
							$image_url = $image_array[0];
				    ?>
				    
			    	<div class="col-md-15">
				    	<figure><a href=""><img src="<?php echo $image_url; ?>" alt=""></a></figure>
				    	<h3><?php echo $card_title; ?></h3>		    	
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