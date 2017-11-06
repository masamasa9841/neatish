<?php
/**
 * Customizer setting file
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

define( 'LINK_COLOR', '' );

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

	$wp_customize->add_setting( 'link_color', array(
		'default' => LINK_COLOR,
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
}

add_action( 'customize_register', 'theme_customize_register' );
