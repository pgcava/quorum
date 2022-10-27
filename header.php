<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Quorum
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="siteHeader">
		<div class="siteHeader__wrap container">
			<div class="siteHeader__logo">
				<?php the_custom_logo(); ?>
			</div>
			<nav class="siteHeader__nav">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span></span>	
					<span></span>	
					<span></span>	
				</button>
				<?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>
			</nav>
		</div>
	</header><!-- #masthead -->
