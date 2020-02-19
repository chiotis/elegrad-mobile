<?php
function elegrad_customize_register( $wp_customize ) {

// Create our panels

$wp_customize->add_panel( 'elegrad_variables', array(
	'title'          => __('Variables', 'elegrad_mobile'),
	'description'    => __('Add additional descriptive text to the panel', 'elegrad_mobile'),
) );
		
// Create our sections

$wp_customize->add_section( 'elegrad_variables_section' , array(
	'title'             => __('Variables', 'elegrad_mobile'),
) );
		
// Create our settings

$wp_customize->add_setting( 'elegrad_variables_colors_primary' , array(
	'type'          => 'theme_mod',
	'transport'     => 'refresh',
	'default'       => '#007bff',
) );
$wp_customize->add_control( 'elegrad_variables_colors_primary_control', array(
	'label'      => __('Primary', 'elegrad_mobile'),
	'section'    => 'elegrad_variables_section',
	'settings'   => 'elegrad_variables_colors_primary',
	'type'       => 'color',
) );

$wp_customize->add_setting( 'elegrad_variables_colors_secondary' , array(
	'type'          => 'theme_mod',
	'transport'     => 'refresh',
	'default'       => '#6c757d',
) );
$wp_customize->add_control( 'elegrad_variables_colors_secondary_control', array(
	'label'      => __('Secondary', 'elegrad_mobile'),
	'section'    => 'elegrad_variables_section',
	'settings'   => 'elegrad_variables_colors_secondary',
	'type'       => 'color',
) );

$wp_customize->add_setting( 'elegrad_variables_colors_gray_dark' , array(
	'type'          => 'theme_mod',
	'transport'     => 'refresh',
	'default'       => '#343a40',
) );
$wp_customize->add_control( 'elegrad_variables_colors_gray_dark_control', array(
	'label'      => __('Gray Dark', 'elegrad_mobile'),
	'section'    => 'elegrad_variables_section',
	'settings'   => 'elegrad_variables_colors_gray_dark',
	'type'       => 'color',
) );
		
}
add_action( 'customize_register', 'elegrad_customize_register' );