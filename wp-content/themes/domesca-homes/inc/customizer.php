<?php
/**
 * WordPress Customizer — Theme Design variables (Rule 19).
 *
 * Single "Theme Design" panel with Colors, Typography, Spacing and Container.
 * Controls use live preview (transport: postMessage). Only non-default values
 * are printed to wp_head().
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default design variable values.
 */
function dsc_design_defaults() {
	return array(
		// Colors — map to existing original variables.
		'primary_color'   => '#1653a6',   // --blue / --primary-color
		'secondary_color' => '#ffffff',   // --secondary background
		'accent_color'    => '#1653a6',   // --accent-color
		'text_color'      => '#0a0c0f',   // --ink
		'bg_color'        => '#ffffff',   // --white / --bg
		'border_color'    => '#e0e4ea',   // --n-200 / --border-color
		// Typography
		'font_heading'    => '"Archivo","Helvetica Neue",Arial,sans-serif',
		'font_body'       => '"Inter","Helvetica Neue",Arial,sans-serif',
		'font_accent'     => '"Instrument Serif",Georgia,"Times New Roman",serif',
		// Spacing + container
		'section_padding' => 'clamp(72px,9vw,136px)',
		'container_width' => '1280px',
		'container_pad'   => 'clamp(20px,4.5vw,64px)',
	);
}

/**
 * Register Customizer settings/controls.
 */
function dsc_customize_register( $wp_customize ) {
	$defaults = dsc_design_defaults();

	$wp_customize->add_panel( 'dsc_design', array(
		'title'       => __( 'Theme Design', 'domesca-homes' ),
		'description' => __( 'Colours, typography, spacing and container width. The original design is the default.', 'domesca-homes' ),
		'priority'    => 10,
	) );

	$sections = array(
		'dsc_colors'      => __( 'Colors', 'domesca-homes' ),
		'dsc_typography'  => __( 'Typography', 'domesca-homes' ),
		'dsc_spacing'     => __( 'Spacing', 'domesca-homes' ),
		'dsc_container'   => __( 'Container', 'domesca-homes' ),
	);

	foreach ( $sections as $id => $label ) {
		$wp_customize->add_section( $id, array(
			'title' => $label,
			'panel' => 'dsc_design',
		) );
	}

	$defs = array(
		'dsc_colors'     => array(
			'primary_color'   => array( 'label' => __( 'Primary color', 'domesca-homes' ), 'type' => 'color' ),
			'secondary_color' => array( 'label' => __( 'Secondary color', 'domesca-homes' ), 'type' => 'color' ),
			'accent_color'    => array( 'label' => __( 'Accent color', 'domesca-homes' ), 'type' => 'color' ),
			'text_color'      => array( 'label' => __( 'Text color', 'domesca-homes' ), 'type' => 'color' ),
			'bg_color'        => array( 'label' => __( 'Background color', 'domesca-homes' ), 'type' => 'color' ),
			'border_color'    => array( 'label' => __( 'Border color', 'domesca-homes' ), 'type' => 'color' ),
		),
		'dsc_typography' => array(
			'font_heading' => array( 'label' => __( 'Heading font', 'domesca-homes' ), 'type' => 'text' ),
			'font_body'    => array( 'label' => __( 'Body font', 'domesca-homes' ), 'type' => 'text' ),
			'font_accent'  => array( 'label' => __( 'Accent font', 'domesca-homes' ), 'type' => 'text' ),
		),
		'dsc_spacing'    => array(
			'section_padding' => array( 'label' => __( 'Section padding', 'domesca-homes' ), 'type' => 'text' ),
		),
		'dsc_container'  => array(
			'container_width' => array( 'label' => __( 'Container width', 'domesca-homes' ), 'type' => 'text' ),
			'container_pad'   => array( 'label' => __( 'Container padding', 'domesca-homes' ), 'type' => 'text' ),
		),
	);

	foreach ( $defs as $section => $fields ) {
		foreach ( $fields as $id => $field ) {
			$wp_customize->add_setting( $id, array(
				'default'           => $defaults[ $id ],
				'sanitize_callback' => 'color' === $field['type'] ? 'sanitize_hex_color' : 'sanitize_text_field',
				'transport'         => 'postMessage',
			) );
			$wp_customize->add_control( $id, array(
				'label'   => $field['label'],
				'section' => $section,
				'type'    => $field['type'],
			) );
		}
	}
}
add_action( 'customize_register', 'dsc_customize_register' );

/**
 * Output custom CSS variables. Only non-default values are printed.
 */
function dsc_customizer_css() {
	$defaults = dsc_design_defaults();
	$mapping  = array(
		'primary_color'   => array( '--blue', '--primary-color' ),
		'secondary_color' => array( '--secondary-color' ),
		'accent_color'    => array( '--accent-color' ),
		'text_color'      => array( '--ink', '--text-color' ),
		'bg_color'        => array( '--white', '--bg-color' ),
		'border_color'    => array( '--n-200', '--border-color' ),
		'font_heading'    => array( '--f-display' ),
		'font_body'       => array( '--f-body' ),
		'font_accent'     => array( '--f-accent' ),
		'section_padding' => array( '--sec-y', '--section-padding' ),
		'container_width' => array( '--wrap', '--container-max-width' ),
		'container_pad'   => array( '--gutter', '--container-padding' ),
	);

	$custom = array();
	foreach ( $mapping as $setting => $vars ) {
		$value = get_theme_mod( $setting, $defaults[ $setting ] );
		if ( trim( (string) $value ) !== trim( (string) $defaults[ $setting ] ) ) {
			foreach ( $vars as $var ) {
				$custom[ $var ] = $value;
			}
		}
	}

	if ( empty( $custom ) ) {
		return;
	}

	$css = ':root {' . "\n";
	foreach ( $custom as $var => $value ) {
		$css .= '  ' . $var . ':' . $value . ";\n";
	}
	$css .= '}';

	echo '<style id="dsc-customizer-vars">' . $css . '</style>' . "\n";
}
add_action( 'wp_head', 'dsc_customizer_css', 5 );
