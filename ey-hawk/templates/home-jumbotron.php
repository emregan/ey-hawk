<!-- JUMBOTRON -->
<?php // vars
	$title = get_sub_field('overview_title');
	$pipled_title = ! empty( $title ) ? str_replace( ' | ', '<br />', $title ) : '';
	$subtitle = get_sub_field('overview_subtitle');
	$piped_subtitle = ! empty( $subtitle ) ? str_replace( ' | ', '<br />', $subtitle ) : '';
	$img = get_sub_field('overview_bg');
?>
<section class="jumbotron text-center" <?php echo $img != '' ? 'style="background-image: url(' . $img['url'] . ');background-position: center center;background-repeat: no-repeat;background-attachment: fixed;-webkit-background-size: cover;background-size: cover;"' : ''; ?>>
  <div class="container container-small">
    <h1><?php echo $pipled_title; ?></h1>
    <p><?php echo $piped_subtitle; ?></p>
    <p>
	    
	    <a class="btn btn-primary white has-margin" href="/customersuccess">SUCCESS STORIES ›</a>
	    <a class="btn btn-primary has-margin" href="/contact-us">CONTACT US ›</a>

    </p>
  </div>
</section>