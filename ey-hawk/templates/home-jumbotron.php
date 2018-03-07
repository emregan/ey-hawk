<!-- JUMBOTRON -->
<?php // vars
	$title = get_sub_field('overview_title');
	$pipled_title = ! empty( $title ) ? str_replace( ' | ', '<span class="break"> </span>', $title ) : '';
	$subtitle = get_sub_field('overview_subtitle');
	$piped_subtitle = ! empty( $subtitle ) ? str_replace( ' | ', '<span class="break"> </span>', $subtitle ) : '';
	$img = get_sub_field('overview_bg');
	$buttons = get_sub_field( 'overview_buttons' );
?>
<section class="jumbotron text-center" <?php echo $img != '' ? 'style="background-image: url(' . $img['url'] . ');background-position: center center;background-repeat: no-repeat;background-attachment: fixed;-webkit-background-size: cover;background-size: cover;"' : ''; ?>>
  <div class="container container-small">
    <h1><?php echo $pipled_title; ?></h1>
    <p><?php echo $piped_subtitle; ?></p>
    <p>
	    
	    <?php if( have_rows('overview_buttons') ): ?>

			<?php while( have_rows('overview_buttons') ): the_row(); ?>
			
				<?php // vars 
					$text = get_sub_field( 'overview_button');
					$link = get_sub_field( 'overview_button_link' );
					$temp_target = get_sub_field( 'overview_button_target' );
					$target = is_array( $temp_target ) ? $temp_target[0] : $temp_target;
					$color = get_sub_field( 'overview_button_color' );
				?>
			
				<a class="btn btn-primary <?php echo ( $color == 'white' ) ? 'white' : '' ; ?> has-margin" href="<?php echo $link; ?>" 
					<?php echo ( $target == 1 ) ? 'target="_blank"' : ''; ?>><?php echo $text; ?> ›</a>

			<?php endwhile; ?>
				
		<?php endif; ?>	
    </p>
  </div>
</section>