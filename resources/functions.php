<?php
/**
 * Neatish functions and definitions
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

// Script collection.
require get_template_directory() . '/lib/scripts.php';

// SNS Script.
require get_template_directory() . '/lib/sns.php';

// Widet Script.
require get_template_directory() . '/template-parts/widet-categorize.php';


// Size of Thumbnail.
add_image_size( 'thumb320', 320, 180, true );
add_image_size( 'thumb150', 150, 150, true );
add_image_size( 'thumbnail_200_140', 200, 140, true );

// Eye catching enabled.
add_theme_support( 'post-thumbnails' );

/**
 *
 * Widget enabled.
 */
function neatish_widgets_init() {
	register_sidebar(array(
		'name'          => 'Sidebar_widet',
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<section id="widget" class="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'neatish_widgets_init' );

/**
 * Script to get a snippet excerpt.
 *
 * @param string $content Content.
 * @param int    $length  Hope Content length.
 */
function get_the_custom_excerpt( $content, $length ) {

	$length  = ( $length ? $length : 70 );
	$content = preg_replace( '/<!--more-->.+/is', '', $content );
	$content = strip_shortcodes( $content );
	$content = strip_tags( $content );
	$content = str_replace( '&nbsp;', '', $content );
	$content = mb_substr( $content, 0, $length );
	return $content;
}
