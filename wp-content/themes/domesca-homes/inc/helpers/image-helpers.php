<?php
/**
 * Image helpers — 3-tier alt-text fallback.
 *
 * Tier 1: WordPress Media Library alt text.
 * Tier 2: dedicated ACF alt text field.
 * Tier 3: empty string alt="" (valid HTML).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Return structured image data array for any image (ACF array, attachment ID, filename, or fallback).
 *
 * @param mixed $image ACF image array, attachment ID, string filename, or null.
 * @param array $args Optional defaults for fallback image, alt, width, height.
 * @return array{url:string,alt:string,width:int,height:int,is_default:bool}
 */
function dsc_image_data( $image = '', $args = array() ) {
	$default_img = isset( $args['default'] ) ? $args['default'] : 'exterior-new-home-facade.jpg';
	$default_alt = isset( $args['alt'] ) ? $args['alt'] : get_bloginfo( 'name' );
	$width       = isset( $args['width'] ) ? (int) $args['width'] : 1560;
	$height      = isset( $args['height'] ) ? (int) $args['height'] : 896;

	// Case 1: ACF Array
	if ( is_array( $image ) && ! empty( $image['url'] ) ) {
		return array(
			'url'        => $image['url'],
			'alt'        => ! empty( $image['alt'] ) ? $image['alt'] : ( ! empty( $image['title'] ) ? $image['title'] : $default_alt ),
			'width'      => ! empty( $image['width'] ) ? (int) $image['width'] : $width,
			'height'     => ! empty( $image['height'] ) ? (int) $image['height'] : $height,
			'is_default' => false,
		);
	}

	// Case 2: Attachment ID
	if ( is_numeric( $image ) && (int) $image > 0 ) {
		$src = wp_get_attachment_image_src( absint( $image ), 'full' );
		if ( is_array( $src ) && ! empty( $src[0] ) ) {
			$alt = get_post_meta( absint( $image ), '_wp_attachment_image_alt', true );
			return array(
				'url'        => $src[0],
				'alt'        => $alt ? $alt : $default_alt,
				'width'      => ! empty( $src[1] ) ? (int) $src[1] : $width,
				'height'     => ! empty( $src[2] ) ? (int) $src[2] : $height,
				'is_default' => false,
			);
		}
	}

	// Case 3: URL or relative filename string
	if ( is_string( $image ) && ! empty( $image ) ) {
		if ( false !== strpos( $image, '://' ) || 0 === strpos( $image, '//' ) ) {
			return array(
				'url'        => $image,
				'alt'        => $default_alt,
				'width'      => $width,
				'height'     => $height,
				'is_default' => false,
			);
		}
		return array(
			'url'        => DSC_THEME_URI . '/assets/images/' . ltrim( $image, '/' ),
			'alt'        => $default_alt,
			'width'      => $width,
			'height'     => $height,
			'is_default' => false,
		);
	}

	// Case 4: Default fallback
	$url = DSC_THEME_URI . '/assets/images/' . ltrim( $default_img, '/' );
	return array(
		'url'        => $url,
		'alt'        => $default_alt,
		'width'      => $width,
		'height'     => $height,
		'is_default' => true,
	);
}

/**
 * Return a URL for an ACF image field or a bundled fallback image.
 */
function dsc_image_src( $name = '', $default = '', $context = 'page' ) {
	$data = dsc_image_data( ( 'option' === $context ) ? dsc_opt( $name, '' ) : dsc_field( $name, '' ), array( 'default' => $default ) );
	return $data['url'];
}

/**
 * Echo an <img> tag backed by ACF or falling back to the bundled image.
 */
function dsc_image( $name = '', $default = '', $alt = '', $attrs = array() ) {
	$data     = dsc_image_data( dsc_field( $name, '' ), array( 'default' => $default, 'alt' => $alt ) );
	$defaults = array(
		'src'     => $data['url'],
		'alt'     => $data['alt'],
		'loading' => 'lazy',
		'width'   => $data['width'],
		'height'  => $data['height'],
	);
	$attrs = wp_parse_args( $attrs, $defaults );

	$out = '<img';
	foreach ( $attrs as $k => $v ) {
		if ( null === $v || false === $v ) {
			continue;
		}
		$out .= ' ' . esc_attr( $k ) . '="' . esc_attr( $v ) . '"';
	}
	$out .= '>';

	echo $out; // phpcs:ignore WordPress.Security.EscapeOutput
}

/**
 * Image source from a flexible-content/repeater row.
 */
function dsc_row_image_src( $row = array(), $name = '', $default = '' ) {
	$value = dsc_row_key( $row, $name, '' );
	$data  = dsc_image_data( $value, array( 'default' => $default ) );
	return $data['url'];
}

/**
 * Image tag from a flexible-content/repeater row.
 */
function dsc_row_image( $row = array(), $name = '', $default = '', $alt = '', $attrs = array() ) {
	$value    = dsc_row_key( $row, $name, '' );
	$data     = dsc_image_data( $value, array( 'default' => $default, 'alt' => $alt ) );
	$defaults = array(
		'src'     => $data['url'],
		'alt'     => $data['alt'],
		'loading' => 'lazy',
		'width'   => $data['width'],
		'height'  => $data['height'],
	);
	$attrs = wp_parse_args( $attrs, $defaults );
	$out   = '<img';
	foreach ( $attrs as $k => $v ) {
		if ( null === $v || false === $v ) {
			continue;
		}
		$out .= ' ' . esc_attr( $k ) . '="' . esc_attr( $v ) . '"';
	}
	$out .= '>';
	echo $out; // phpcs:ignore WordPress.Security.EscapeOutput
}
