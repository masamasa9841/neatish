<?php
/**
 * Update css of Customizer
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

$link_color = get_theme_mod( 'link_color', '-webkit-link' );
?>

<style type='text/css'>
	a {
		color:<?php echo $link_color; ?>;
	}
</style>
