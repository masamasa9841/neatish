<?php
/**
 * Update css of Customizer
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

$link_color       = get_theme_mod( 'link_color' );
$background_color = get_theme_mod( 'background_color' );
$theme_color      = get_theme_mod( 'theme_color' );
?>

<?php echo "<style type='text/css'>"; ?>

	a {
		color: <?php echo esc_html( $link_color ); ?>
	}

	.container {
		background-color: #<?php echo esc_html( $background_color ); ?>
	}

<?php echo '</style>'; ?><j:w></j:w>
