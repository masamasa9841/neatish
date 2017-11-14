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
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<?php get_template_part( 'templates/layout/navigation/navigation' ); ?>

<!-- header -->
<div class="container">
	<header class="global-head">
		<h1 id="brand-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	</header>
	<main class="main-contents">
		<section class="inner">
			<body <?php body_class(); ?>>
