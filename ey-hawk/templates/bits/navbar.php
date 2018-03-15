<!-- Navbar -->
<nav class="navbar navbar-toggleable-md">
    
    <div class="container">
	      <button class="navbar-toggler navbar-toggler-right pull-right" type="button" data-toggle="collapse" data-target="#nav-primary" aria-controls="nav-primary" aria-expanded="false" aria-label="Toggle navigation">
	        <!--<span class="navbar-toggler-icon"></span>-->
			  <span></span>
			  <span></span>
			  <span></span>
			  <span></span>     
	      </button>
	      <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
		      <?php $custom_logo_id = get_theme_mod( 'custom_logo' );	
			      	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
				  	<img src="<?php echo $image[0]; ?>"></a>
		
		
		<div class="collapse navbar-collapse" id="nav-primary">	 
			<div class="d-block d-md-none">
				<?php
					// MOBILE
					wp_nav_menu( array(
					  'menu' => 'Primary Menu',
					  'depth' => 3,
					  'container' => false,
					  'menu_class' => 'navbar-nav ml-auto navbar-nav-auto',
					  //Process nav menu using our custom nav walker
					  'walker' => new WP_Bootstrap_Navwalker_Mobile())
					);
				?>
	        </div>       
	        <span class="d-none d-md-block">
		        <?php
			        // DESKTOP
					wp_nav_menu( array(
					  'menu' => 'Primary Menu',
					  'depth' => 3,
					  'container' => false,
					  'menu_class' => 'navbar-nav',
					  //Process nav menu using our custom nav walker
					  'walker' => new WP_Bootstrap_Navwalker())
					);	
				?>
	        </span>
	        
	     </div>
    </div><!-- container -->
</nav>