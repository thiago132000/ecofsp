<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ixion
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ixion' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div class="branding-container">
			<?php get_template_part( 'components/header/site', 'branding' ); ?>
			<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
		</div>

	</header>

	<?php if ( is_front_page() ) : ?>
		
	<?php endif; // End is_front_page() check ?>

	<div id="content" class="site-content">
