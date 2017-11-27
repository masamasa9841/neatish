<?php
/**
 * Update css of Customizer
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

$link_color       = get_theme_mod( 'link_color', LINK_COLOR );
$background_color = get_theme_mod( 'background_color' );
?>

<?php echo "<style type='text/css'>"; ?>

	a {
		color: <?php echo esc_html( $link_color ); ?>
	}

	.container {
		background-color: #<?php echo esc_html( $background_color ); ?>
	}

<?php echo '</style>'; ?><j:w></j:w>
