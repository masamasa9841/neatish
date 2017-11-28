<?php
/**
 * Update css of Customizer
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

$link_color          = get_theme_mod( 'link_color' );
$background_color    = get_theme_mod( 'background_color' );
$theme_color         = get_theme_mod( 'theme_color' );
$header_textcolor    = get_theme_mod( 'header_textcolor' );
$text_color          = get_theme_mod( 'text_color' );
$header_footer_color = get_theme_mod( 'header_footer_color' );
$toggle              = get_theme_mod( 'toggle' );
$entry_title         = get_theme_mod( 'entry_title' );
?>

<?php echo "<style type='text/css'>"; ?>

	/* header footer color */
	.global-head,
	.global-footer
	{
		background-color: <?php echo esc_html( $header_footer_color ); ?>
	}

	/* header text color */
	.global-head a{
		color: #<?php echo esc_html( $header_textcolor ); ?>
	}

	/* link-color */
	a {
		color: <?php echo esc_html( $link_color ); ?>
	}

	/* background color */
	.container {
		background-color: #<?php echo esc_html( $background_color ); ?>
	}

	/* theme color */
	.scroll,
	.nav-menu-head,
	.widget_categories li,
	h3,
	.tagcloud a{
		background: <?php echo esc_html( $theme_color ); ?>
	}
	.global-footer,
	blockquote::before {
		color: <?php echo esc_html( $theme_color ); ?>
	}

	/* text color */
	body {
		color: <?php echo esc_html( $text_color ); ?>
	}

	/* toggle color */
	.scroll,
	.nav-toggle span {
		background: <?php echo esc_html( $toggle ); ?>
	}

	/* Entry title color */
	.entry-title a {
		color: <?php echo esc_html( $entry_title ); ?>
	}

<?php echo '</style>'; ?><j:w></j:w>
