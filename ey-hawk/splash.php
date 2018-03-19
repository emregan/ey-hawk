<?php
/* Template Name: Splash */
	
?>	

<?php // vars 
$title = get_field( 'title' );
$bgimage = get_field( 'background_image' );
$buttons = get_field( 'buttons' );
$logo = get_field( 'logo' );	

?>
	
<!DOCTYPE html>
<html lang="en">
    <head>
	<link rel='stylesheet' id='awesplash-style-css'  href='/wp-content/plugins/awesplash/assets/css/main.css?ver=1.0.1' type='text/css' media='all' />
	<style id='awesplash-style-inline-css' type='text/css'>
div.logo {
    margin-bottom: 200px;
}
div.logo img {
	width: 250px;
}

		html {
  box-sizing: border-box;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

html {
  font-size: 16px;
  -ms-overflow-style: scrollbar;
  -webkit-tap-highlight-color: transparent;
}

body {
  margin: 0;
}

body {
  font-family: "Montserrat", sans-serif;
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.5;
  color: #787878;
  background-color: #fff;
}

p {
  margin-top: 0;
}

a {
  color: #1c1c1c;
  text-decoration: none;
}

a:hover {
  color: #2e4bfd;
  text-decoration: none;
}

img {
  max-width: 100%;
}

h1,
.h1 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.33333;
  color: #1c1c1c;
  margin-top: 0;
  margin-bottom: 1rem;
}

h2,
.h2 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.33333;
  color: #1c1c1c;
  margin-top: 0;
  margin-bottom: 1rem;
}

h3,
.h3 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.33333;
  color: #1c1c1c;
  margin-top: 0;
  margin-bottom: 1rem;
}

h4,
.h4 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.33333;
  color: #1c1c1c;
  margin-top: 0;
  margin-bottom: 1rem;
}

h5,
.h5 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.33333;
  color: #1c1c1c;
  margin-top: 0;
  margin-bottom: 1rem;
}

h6,
.h6 {
  font-family: inherit;
  font-weight: 600;
  line-height: 1.33333;
  color: #1c1c1c;
  margin-top: 0;
  margin-bottom: 1rem;
}

h1, .h1 {
  font-size: 3.75rem;
}

h2, .h2 {
  font-size: 2.5rem;
}

h3, .h3 {
  font-size: 1.875rem;
}

h4, .h4 {
  font-size: 1.25rem;
}

h5, .h5 {
  font-size: 3.75rem;
}

h6, .h6 {
  font-size: 0.875rem;
}

.btn, button, input[type="submit"], input[type="button"] {
  display: inline-block;
  line-height: 1.625;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  font-size: 1rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1.75px;
  padding: 1rem 3.125rem;
  border: 1px solid transparent;
  border-radius: 0;
  outline: none !important;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  transition: all 0.3s ease;
}

.btn-primary {
  color: #fff;
  background-color: #2e4bfd;
  border-color: #2e4bfd;
}

.btn-primary:hover {
  color: #fff;
  background-color: #021fd2;
  border-color: #0219aa;
}

.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #021fd2;
  border-color: #0219aa;
}

.btn-primary:active, .btn-primary.active,
.open > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #021fd2;
  border-color: #0219aa;
  background-image: none;
}

.btn-primary:active:hover, .btn-primary:active:focus, .btn-primary:active.focus, .btn-primary.active:hover, .btn-primary.active:focus, .btn-primary.active.focus,
.open > .btn-primary.dropdown-toggle:hover,
.open > .btn-primary.dropdown-toggle:focus,
.open > .btn-primary.dropdown-toggle.focus {
  color: #fff;
  background-color: #021fd2;
  border-color: #0219aa;
}

.btn-primary.disabled:focus, .btn-primary.disabled.focus, .btn-primary:disabled:focus, .btn-primary:disabled.focus {
  background-color: #2e4bfd;
  border-color: #2e4bfd;
}

.btn-primary.disabled:hover, .btn-primary:disabled:hover {
  background-color: #2e4bfd;
  border-color: #2e4bfd;
}

.btn-info {
  color: #fff;
  background-color: #cfd6ff;
  border-color: #cfd6ff;
}

.btn-info:hover {
  color: #fff;
  background-color: #788cff;
  border-color: #5069ff;
}

.btn-info:focus, .btn-info.focus {
  color: #fff;
  background-color: #788cff;
  border-color: #5069ff;
}

.btn-info:active, .btn-info.active,
.open > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #788cff;
  border-color: #5069ff;
  background-image: none;
}

.btn-info:active:hover, .btn-info:active:focus, .btn-info:active.focus, .btn-info.active:hover, .btn-info.active:focus, .btn-info.active.focus,
.open > .btn-info.dropdown-toggle:hover,
.open > .btn-info.dropdown-toggle:focus,
.open > .btn-info.dropdown-toggle.focus {
  color: #fff;
  background-color: #788cff;
  border-color: #5069ff;
}

.btn-info.disabled:focus, .btn-info.disabled.focus, .btn-info:disabled:focus, .btn-info:disabled.focus {
  background-color: #cfd6ff;
  border-color: #cfd6ff;
}

.btn-info.disabled:hover, .btn-info:disabled:hover {
  background-color: #cfd6ff;
  border-color: #cfd6ff;
}

.btn-success {
  color: #fff;
  background-color: #57d03b;
  border-color: #57d03b;
}

.btn-success:hover {
  color: #fff;
  background-color: #389123;
  border-color: #2b711b;
}

.btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #389123;
  border-color: #2b711b;
}

.btn-success:active, .btn-success.active,
.open > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #389123;
  border-color: #2b711b;
  background-image: none;
}

.btn-success:active:hover, .btn-success:active:focus, .btn-success:active.focus, .btn-success.active:hover, .btn-success.active:focus, .btn-success.active.focus,
.open > .btn-success.dropdown-toggle:hover,
.open > .btn-success.dropdown-toggle:focus,
.open > .btn-success.dropdown-toggle.focus {
  color: #fff;
  background-color: #389123;
  border-color: #2b711b;
}

.btn-success.disabled:focus, .btn-success.disabled.focus, .btn-success:disabled:focus, .btn-success:disabled.focus {
  background-color: #57d03b;
  border-color: #57d03b;
}

.btn-success.disabled:hover, .btn-success:disabled:hover {
  background-color: #57d03b;
  border-color: #57d03b;
}

.btn-warning {
  color: #fff;
  background-color: #ffda44;
  border-color: #ffda44;
}

.btn-warning:hover {
  color: #fff;
  background-color: #ecbe00;
  border-color: #c49d00;
}

.btn-warning:focus, .btn-warning.focus {
  color: #fff;
  background-color: #ecbe00;
  border-color: #c49d00;
}

.btn-warning:active, .btn-warning.active,
.open > .btn-warning.dropdown-toggle {
  color: #fff;
  background-color: #ecbe00;
  border-color: #c49d00;
  background-image: none;
}

.btn-warning:active:hover, .btn-warning:active:focus, .btn-warning:active.focus, .btn-warning.active:hover, .btn-warning.active:focus, .btn-warning.active.focus,
.open > .btn-warning.dropdown-toggle:hover,
.open > .btn-warning.dropdown-toggle:focus,
.open > .btn-warning.dropdown-toggle.focus {
  color: #fff;
  background-color: #ecbe00;
  border-color: #c49d00;
}

.btn-warning.disabled:focus, .btn-warning.disabled.focus, .btn-warning:disabled:focus, .btn-warning:disabled.focus {
  background-color: #ffda44;
  border-color: #ffda44;
}

.btn-warning.disabled:hover, .btn-warning:disabled:hover {
  background-color: #ffda44;
  border-color: #ffda44;
}

.btn-danger {
  color: #fff;
  background-color: #e94a4a;
  border-color: #e94a4a;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c41818;
  border-color: #a01313;
}

.btn-danger:focus, .btn-danger.focus {
  color: #fff;
  background-color: #c41818;
  border-color: #a01313;
}

.btn-danger:active, .btn-danger.active,
.open > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #c41818;
  border-color: #a01313;
  background-image: none;
}

.btn-danger:active:hover, .btn-danger:active:focus, .btn-danger:active.focus, .btn-danger.active:hover, .btn-danger.active:focus, .btn-danger.active.focus,
.open > .btn-danger.dropdown-toggle:hover,
.open > .btn-danger.dropdown-toggle:focus,
.open > .btn-danger.dropdown-toggle.focus {
  color: #fff;
  background-color: #c41818;
  border-color: #a01313;
}

.btn-danger.disabled:focus, .btn-danger.disabled.focus, .btn-danger:disabled:focus, .btn-danger:disabled.focus {
  background-color: #e94a4a;
  border-color: #e94a4a;
}

.btn-danger.disabled:hover, .btn-danger:disabled:hover {
  background-color: #e94a4a;
  border-color: #e94a4a;
}

.btn-outline-primary {
  color: #2e4bfd;
  background-image: none;
  background-color: transparent;
  border-color: #2e4bfd;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #2e4bfd;
  border-color: #2e4bfd;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  color: #fff;
  background-color: #2e4bfd;
  border-color: #2e4bfd;
}

.btn-outline-primary:active, .btn-outline-primary.active,
.open > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #2e4bfd;
  border-color: #2e4bfd;
}

.btn-outline-primary:active:hover, .btn-outline-primary:active:focus, .btn-outline-primary:active.focus, .btn-outline-primary.active:hover, .btn-outline-primary.active:focus, .btn-outline-primary.active.focus,
.open > .btn-outline-primary.dropdown-toggle:hover,
.open > .btn-outline-primary.dropdown-toggle:focus,
.open > .btn-outline-primary.dropdown-toggle.focus {
  color: #fff;
  background-color: #021fd2;
  border-color: #0219aa;
}

.btn-outline-primary.disabled:focus, .btn-outline-primary.disabled.focus, .btn-outline-primary:disabled:focus, .btn-outline-primary:disabled.focus {
  border-color: #93a2fe;
}

.btn-outline-primary.disabled:hover, .btn-outline-primary:disabled:hover {
  border-color: #93a2fe;
}

.btn-outline-info {
  color: #cfd6ff;
  background-image: none;
  background-color: transparent;
  border-color: #cfd6ff;
}

.btn-outline-info:hover {
  color: #fff;
  background-color: #cfd6ff;
  border-color: #cfd6ff;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  color: #fff;
  background-color: #cfd6ff;
  border-color: #cfd6ff;
}

.btn-outline-info:active, .btn-outline-info.active,
.open > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #cfd6ff;
  border-color: #cfd6ff;
}

.btn-outline-info:active:hover, .btn-outline-info:active:focus, .btn-outline-info:active.focus, .btn-outline-info.active:hover, .btn-outline-info.active:focus, .btn-outline-info.active.focus,
.open > .btn-outline-info.dropdown-toggle:hover,
.open > .btn-outline-info.dropdown-toggle:focus,
.open > .btn-outline-info.dropdown-toggle.focus {
  color: #fff;
  background-color: #788cff;
  border-color: #5069ff;
}

.btn-outline-info.disabled:focus, .btn-outline-info.disabled.focus, .btn-outline-info:disabled:focus, .btn-outline-info:disabled.focus {
  border-color: white;
}

.btn-outline-info.disabled:hover, .btn-outline-info:disabled:hover {
  border-color: white;
}

.btn-outline-success {
  color: #57d03b;
  background-image: none;
  background-color: transparent;
  border-color: #57d03b;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #57d03b;
  border-color: #57d03b;
}

.btn-outline-success:focus, .btn-outline-success.focus {
  color: #fff;
  background-color: #57d03b;
  border-color: #57d03b;
}

.btn-outline-success:active, .btn-outline-success.active,
.open > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #57d03b;
  border-color: #57d03b;
}

.btn-outline-success:active:hover, .btn-outline-success:active:focus, .btn-outline-success:active.focus, .btn-outline-success.active:hover, .btn-outline-success.active:focus, .btn-outline-success.active.focus,
.open > .btn-outline-success.dropdown-toggle:hover,
.open > .btn-outline-success.dropdown-toggle:focus,
.open > .btn-outline-success.dropdown-toggle.focus {
  color: #fff;
  background-color: #389123;
  border-color: #2b711b;
}

.btn-outline-success.disabled:focus, .btn-outline-success.disabled.focus, .btn-outline-success:disabled:focus, .btn-outline-success:disabled.focus {
  border-color: #9ee48d;
}

.btn-outline-success.disabled:hover, .btn-outline-success:disabled:hover {
  border-color: #9ee48d;
}

.btn-outline-warning {
  color: #ffda44;
  background-image: none;
  background-color: transparent;
  border-color: #ffda44;
}

.btn-outline-warning:hover {
  color: #fff;
  background-color: #ffda44;
  border-color: #ffda44;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  color: #fff;
  background-color: #ffda44;
  border-color: #ffda44;
}

.btn-outline-warning:active, .btn-outline-warning.active,
.open > .btn-outline-warning.dropdown-toggle {
  color: #fff;
  background-color: #ffda44;
  border-color: #ffda44;
}

.btn-outline-warning:active:hover, .btn-outline-warning:active:focus, .btn-outline-warning:active.focus, .btn-outline-warning.active:hover, .btn-outline-warning.active:focus, .btn-outline-warning.active.focus,
.open > .btn-outline-warning.dropdown-toggle:hover,
.open > .btn-outline-warning.dropdown-toggle:focus,
.open > .btn-outline-warning.dropdown-toggle.focus {
  color: #fff;
  background-color: #ecbe00;
  border-color: #c49d00;
}

.btn-outline-warning.disabled:focus, .btn-outline-warning.disabled.focus, .btn-outline-warning:disabled:focus, .btn-outline-warning:disabled.focus {
  border-color: #ffeeaa;
}

.btn-outline-warning.disabled:hover, .btn-outline-warning:disabled:hover {
  border-color: #ffeeaa;
}

.btn-outline-danger {
  color: #e94a4a;
  background-image: none;
  background-color: transparent;
  border-color: #e94a4a;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #e94a4a;
  border-color: #e94a4a;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  color: #fff;
  background-color: #e94a4a;
  border-color: #e94a4a;
}

.btn-outline-danger:active, .btn-outline-danger.active,
.open > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #e94a4a;
  border-color: #e94a4a;
}

		.title__heading {
		    font-family: sans-serif;
		    line-height: 50px;
		    font-size: 42px;
		    text-transform: none;
		    margin-bottom: 40px;
		}
		.btn, button, input[type="submit"], input[type="button"] {
		  display: inline-block;
		  line-height: 1.625;
		  text-align: center;
		  white-space: nowrap;
		  vertical-align: middle;
		  font-size: 14px;
		  font-weight: 500;
		  text-transform: uppercase;
		  letter-spacing: 1px;
		  color: #000;
		  margin: 0 10px;
		  padding: 10px 20px;
		  border: 1px solid transparent;
		  border-radius: 0;
		  outline: none !important;
		  cursor: pointer;
		  -webkit-user-select: none;
		     -moz-user-select: none;
		      -ms-user-select: none;
		          user-select: none;
		  transition: all 0.3s ease;
		}
	</style>
</head>
    <body class="home page-template-default page page-id-4 custom-background wp-custom-logo">
		
        <div class="site" id="page">

            <a class="skip-link sr-only" href="#main">Skip to content</a>
            
            <section class="hero-section--image clearfix hero-section--overlay">
                <div class="hero-section__wrap">
					<div class="hero-section__option" style="background-image:url(<?php echo $bgimage['url'];?>)"></div>
					<div class="container">
						<div class="row">
							<div class="offset-lg-2 col-lg-8">
                                <div class="title text-center">
	                                <div class="logo text-center">
		                                <img src="<?php echo $logo['url']; ?>">
	                                </div>
                                </div>
							</div>
						</div>
                        <div class="row">
                            <div class="offset-lg-1 col-lg-10">
                                <div class="title text-center">
	                                <div class="js-customizer-heading">
		                                
										<h2 class="title__heading clip">
											<span><?php echo $title; ?></span>
										</h2>
									</div>
									<form method="post">
										<input type="hidden" id="awesplash_nonce" name="awesplash_nonce" value="65292d3273" /><input type="hidden" name="_wp_http_referer" value="/" />
										<div class="title__action">
											<?php if( have_rows('buttons') ): ?>
											
										    <?php while( have_rows('buttons') ): the_row(); ?>
										    	<?php
											    	$text = get_sub_field('button_text');
											    	$url = get_sub_field('button_link');
											    	
											    	if ( $url === '' ) {
												    	$link = get_site_url();
											    	} else {
												    	$link = $url;
											    	}
											    	if ( is_array( get_sub_field('button_target') ) ) {
												    	$target = ( get_sub_field('button_target')['0'] == '1' ) ? ' target="_blank"' : '';
												    } else {
													    $target = '';
												    }
											    ?>
											    
											    <a href="<?php echo $link; ?>" <?php echo $target; ?> class="btn btn-warning"><?php echo $text; ?></a>
										        
										    <?php endwhile; ?>
										 
										<?php endif; ?>
										</div>
									</form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- .hero-section -->
        </div>


    </body>
</html>
