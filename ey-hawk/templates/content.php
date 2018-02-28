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
$parent_id = get_root_parent($post->ID);
$parent_post = get_post($parent_id); 
$parent_title = $parent_post->post_title;
$parent_slug = $parent_post->post_name;
$this_id = $post->ID;
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
				
				<div class="col-md-3 sidebar left">
					
					<?php echo wpb_list_child_pages(); ?>
					
					<?php
					/*if ( $parent_id == $this_id ) {
					    $children = wp_list_pages( array(
					        'title_li' => '',
					        'child_of' => $parent_id,
					        'sort_column'  => 'menu_order, post_title',
					        'depth'    => 1,
					        'echo'     => 0
					    ) );
					} else {
					    $children = wp_list_pages( array(
					        'title_li' => '',
					        'child_of' => $parent_id,
					        'sort_column'  => 'menu_order, post_title',
					        'depth'    => 2,
					        'echo'     => 0
					    ) );
					} 
					 
					if ( $children ) {
						echo '<ul>';
						echo $children;
						echo '</ul>';
					}
					*/
					?>
				
				</div>
				<div class="col-md-9">
					<div class="entry-content">
						<?php
							the_content();
						?>
					</div><!-- .entry-content -->
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