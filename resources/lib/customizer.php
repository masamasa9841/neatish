<?php

function theme_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'colors', array(
		'title'       => 'color',
		'description' => 'テーマで使用している色を変更します。',
		'priority'    => 2,
	) );
	$wp_customize->add_setting( 'link_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text',
	) );
}
add_action( 'customize_register', 'theme_customize_register' );
