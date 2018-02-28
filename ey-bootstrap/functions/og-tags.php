<?php
// OG tags for social media

add_action('wp_head', 'fb_opengraph', 5);

function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

function fb_opengraph() {
    global $post;

    if ( is_front_page() ) {
        $og_type = 'website';
	    $og_title = get_bloginfo( 'name' );
    } else {
        $og_type = 'article';
	 	$og_title = get_the_title() . ' - ' . get_bloginfo( 'name' );
    }

    if($post && has_post_thumbnail($post->ID)) {
        $img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium');
        $twitter_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium');
    } else {
        //$img_src = get_stylesheet_directory_uri() . '/assets/images/wavespace_og.jpg';
        //$twitter_image = get_stylesheet_directory_uri() . '/assets/images/wavespace.jpg';
        $img_src = 'https://placehold.it/400x300';
        $twitter_image = 'https://placehold.it/400x300';
    }

    if($post && $post->post_excerpt) {
        $excerpt = strip_tags($post->post_excerpt);
        $excerpt = str_replace("", "'", $excerpt);
    } else {
        $excerpt = get_bloginfo('description');
    }

    if ( function_exists('getimagesize') ) {
        $src_img = str_replace( get_stylesheet_directory_uri(), get_theme_root() . '/wavespace', $img_src);
        $img = getimagesize( $src_img );
        $width = $img[0];
        $height = $img[1];
    } else {
        $width = 1200;
        $height = 630;
    }
    $og_url = get_permalink();
?>
 
    <meta prefix="og: http://ogp.me/ns#" property="og:title" content="<?php echo esc_attr( $og_title ); ?>"/>
    <meta prefix="og: http://ogp.me/ns#" property="og:description" content="<?php echo esc_attr( $excerpt ); ?>"/>
    <meta prefix="og: http://ogp.me/ns#" property="og:type" content="<?php echo $og_type; ?>"/>
    <meta prefix="og: http://ogp.me/ns#" property="og:url" content="<?php echo $og_url; ?>"/>
    <meta prefix="og: http://ogp.me/ns#" property="og:site_name" content="<?php echo esc_attr( get_bloginfo() ); ?>"/>
    <meta prefix="og: http://ogp.me/ns#" property="og:image" content="<?php echo $img_src; ?>"/>
    <meta prefix="og: http://ogp.me/ns#" property="og:image:width" content="<?php echo $width; ?>"/>
    <meta prefix="og: http://ogp.me/ns#" property="og:image:height" content="<?php echo $height; ?>"/>

    <meta property="twitter:title" content="<?php echo esc_attr( $og_title ); ?>"/>
    <meta property="twitter:description" content="<?php echo esc_attr( $excerpt ); ?>"/>
    <meta property="twitter:image" content="<?php echo $twitter_image; ?>"/>
<?php
}
add_action('wp_head', 'fb_opengraph', 5);
