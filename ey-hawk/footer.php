<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 */
?>

	</div><!-- .site-content -->
	
</div><!-- .site -->
<section class="footer-alert">
	<div class="container">
        <div class="row">
	        <div class="col-lg-12 text-center">
		        The information on this site is current only through March 15, 2018
	        </div>
        </div>
	</div>
</section>
<section class="section-footer">
	<footer class="footer">
	    <div class="container">
	        <div class="row">
		        <div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					<?php endif; ?>
		        </div>
		        <div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					<?php endif; ?>
		        </div>
		        <div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					<?php endif; ?>
		        </div>
		        <div class="col-md-3">
					<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
						<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
					<?php endif; ?>
		        </div>
	        </div><!-- .row -->
	    </div>
	</footer>
	<footer class="copyright">
	    <div class="container">
	        <small>&copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?>.</small>
	    </div>
	</footer>

</section>

<?php wp_footer(); ?>

<span class="scroll-to-top"><i class="fa fa-angle-up"></i></span>
</body>
</html>