<!-- Navbar -->
<nav class="navbar navbar-toggleable-md">
    
    <div class="container">
	      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
		      <?php $custom_logo_id = get_theme_mod( 'custom_logo' );	
			      	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
				  	<img src="<?php echo $image[0]; ?>"></a>
	
	      <div class="collapse navbar-collapse" id="nav-primary">
	        
	        <?php
				wp_nav_menu( array(
				  'menu' => 'Primary Menu',
				  'depth' => 3,
				  'container' => false,
				  'menu_class' => 'navbar-nav ml-auto',
				  //Process nav menu using our custom nav walker
				  'walker' => new wp_bootstrap_navwalker())
				);	
			?>
	        
	      </div>
    </div><!-- container -->
</nav>