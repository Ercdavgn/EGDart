<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="E'GD art creates oil paintings of surrealist landscapes and people. Other pieces approach abstract art. You can find a mix of styles and mediums throughout the works. Check out the blog to see the creation process! Browse through paintings of stunning landscapes, realistic people and adorable animals in the gallery.">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- START - Facebook Open Graph, Google+ and Twitter Card Tags 2.0.8.2 -->
 <!-- Facebook Open Graph -->
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="E'GDart">
  <meta property="og:url" content="https://egdart.ca">
  <meta property="og:type" content="website">
  <meta property="og:description" content="E'GD art creates oil paintings of surrealist landscapes and people. Other pieces approach abstract art. You can find a mix of styles and mediums throughout the works. Check out the blog to see the creation process! Browse through paintings of stunning landscapes, realistic people and adorable animals in the gallery.">
  <meta property="og:image" content="https://egdart.ca/wp-content/uploads/2017/07/cropped-1_Eric_Davignon_CausewaySky_2016web-1-1.jpg">
  <meta property="og:image:width" content="2000">
  <meta property="og:image:height" content="1200">
  <meta property="article:publisher" content="https://www.facebook.com/EGDartOttawa">
 <!-- Twitter Cards -->
  <meta name="twitter:url" content="https://egdart.ca">
  <meta name="twitter:description" content="E'GD art creates oil paintings of surrealist landscapes and people. Other pieces approach abstract art. You can find a mix of styles and mediums throughout the works. Check out the blog to see the creation process! Browse through paintings of stunning landscapes, realistic people and adorable animals in the gallery.">
  <meta name="twitter:image" content="https://egdart.ca/wp-content/uploads/2017/07/cropped-1_Eric_Davignon_CausewaySky_2016web-1-1.jpg">
  <meta name="twitter:card" content="summary_large_image">
 <!-- SEO -->
  <link rel="canonical" href="https://egdart.ca">
  <meta name="author" content="becks">
  <meta name="publisher" content="E'GDart">
 <!-- Misc. tags -->
<!-- END - Facebook Open Graph, Google+ and Twitter Card Tags 2.0.8.2 -->




<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101925561-2', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>

<?php endif; ?>




</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header">


<?php get_template_part( 'template-parts/header/header', 'image' ); ?>








		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
