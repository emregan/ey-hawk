<?php
/**
 * Template part for displaying page content in page.php
 *
 */

?>

<?php // ACF vars
$sidebar_check = get_field( 'page_show_sidebar' );
$sidebar = $sidebar_check != '' ? $sidebar_check[0] : '';

// Get parent ID
// Can I get rid of this?
/*$parent_id = get_root_parent($post->ID);
$parent_post = get_post($parent_id); 
$parent_title = $parent_post->post_title;
$parent_slug = $parent_post->post_name;
$this_id = $post->ID;
*/
?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	<div class="container">
		
		<?php if ( $sidebar == '1' ) : ?>
			
			<div class="row">
				
				<div class="col-md-3 sidebar left d-none d-md-block">
					
					<?php echo wpb_list_child_pages(); ?>
				
				</div>
				<div class="col-md-9">
					<div class="entry-content">
						<?php
							the_content();
						?>
					</div><!-- .entry-content -->
				</div>
				<div class="col-md-12 sidebar left d-block d-md-none">
					
					<?php echo wpb_list_child_pages(); ?>
				
				</div>
				
			<div class="row">
			
		<?php else : ?>
			<div class="entry-content">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->
		<?php endif; ?>
	</div>
</article><!-- #post-## -->