<?php
/**
 * Customizer setting file
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

define( 'LINK_COLOR', '' );
define( 'BACKGROUND_COLOR_NEATISH', 'ffffff' );
define( 'THEME_COLOR', '' );
define( 'THEME_SUB_COLOR', '' );

/**
 * Script to get a snippet excerpt.
 *
 * @param void $wp_customize void.
 */
function theme_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'colors', array(
		'title'       => 'Variable color',
		'description' => 'You can change the color used in the theme.',
		'priority'    => 1,
	) );

	// background_color for reflesh.
	$wp_customize->add_setting( 'background_color', array(
		'default' => 'ffffff',
	) );
	// Remove header color.
	$wp_customize->remove_control( 'header_textcolor' );

	// link color.
	$wp_customize->add_setting( 'link_color', array(
		'default'           => LINK_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'link_color', array(
			'label'       => 'link color',
			'description' => 'Change link color',
			'section'     => 'colors',
			'settings'    => 'link_color',
			'priority'    => 15,
		)
	) );
	// Theme Color.
	$wp_customize->add_setting( 'theme_color', array(
		'default'           => THEME_COLOR,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'theme_color', array(
			'label'       => 'theme color',
			'description' => 'Change theme color',
			'section'     => 'colors',
			'settings'    => 'theme_color',
			'priority'    => 20,
		)
	) );
}

add_action( 'customize_register', 'theme_customize_register' );
