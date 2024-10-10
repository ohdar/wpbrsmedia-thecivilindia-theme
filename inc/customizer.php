<?php
/**
 * WPBRSMEDIA Customizer.
 */
function wpbrsmedia_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'wpbrsmedia_settings', array(
		'title' => 'WPBRSMEDIA Settings',
		'description' => '', //Include html tags such as <p>.
		'priority' => 10, //Mixed with to-level-section hierarchy.
	) );

	$wp_customize->add_section( 'wpbrsmedia_colors', array(
		'title' => 'Colors',
		'panel' => 'wpbrsmedia_settings', //ID of the panel this section berlongs to.
	) );

	$wp_customize->add_setting( 'wpbrsmedia_nav_bg_color', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( 'wpbrsmedia_nav_bg_color', array(
		'label' => __( 'Menu Background' ),
		'type' => 'color',
		'section' => 'wpbrsmedia_colors',
	) );
	
}
add_action( 'customize_register', 'wpbrsmedia_customize_register' );


?>