<?php
/**
 * The template for displaying the header
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<?php if ( is_home() ) { ?>
		<body <?php body_class(); ?>>
	<?php } elseif ( ! wp_is_mobile() ) { ?>
		<body <?php body_class( 'close' ); ?>>
	<?php } ?>
		<!-- hamburger button -->
		<header class="global-head">
			<h1 class="brand-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</header>
		<div class="nav-toggle">
			<div>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<aside class="scroll">
			<nav class="global-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php wp_nav_menu(); ?>
			</nav>
		</aside>
		<div class="container">
			<main class="main-contents">
				<section class="inner">
