<?php
/**
 * Customizer setting file
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */


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

	// header, footer color.
	$wp_customize->add_setting( 'header_footer_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'header_footer_color', array(
			'label'       => 'Header Footer color',
			'section'     => 'colors',
			'settings'    => 'header_footer_color',
			'priority'    => 7,
		)
	) );

	// background_color for reflesh.
	$wp_customize->add_setting( 'background_color', array(
		'default' => 'ffffff',
	) );

	// link color.
	$wp_customize->add_setting( 'link_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'link_color', array(
			'label'       => 'Link color',
			'section'     => 'colors',
			'settings'    => 'link_color',
			'priority'    => 15,
		)
	) );

	// Theme Color.
	$wp_customize->add_setting( 'theme_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'theme_color', array(
			'label'       => 'Theme color',
			'section'     => 'colors',
			'settings'    => 'theme_color',
			'priority'    => 20,
		)
	) );

	// Text Color.
	$wp_customize->add_setting( 'text_color', array(
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'text_color', array(
			'label'       => 'Text color',
			'section'     => 'colors',
			'settings'    => 'text_color',
			'priority'    => 25,
		)
	) );

	// Text Color.
	$wp_customize->add_setting( 'toggle', array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => 'fcfcfc',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'toggle', array(
			'label'       => 'Toggle color',
			'section'     => 'colors',
			'settings'    => 'toggle',
			'priority'    => 30,
		)
	) );
}

add_action( 'customize_register', 'theme_customize_register' );
