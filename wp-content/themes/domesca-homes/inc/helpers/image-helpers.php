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
 * Return a URL for an ACF image field or a bundled fallback image.
 */
function dsc_image_src( $name = '', $default = '', $context = 'page' ) {
	$value = ( 'option' === $context ) ? dsc_opt( $name, '' ) : dsc_field( $name, '' );

	if ( is_array( $value ) && ! empty( $value['url'] ) ) {
		return $value['url'];
	}

	if ( is_numeric( $value ) ) {
		$src = wp_get_attachment_image_src( absint( $value ), 'dsc-tile' );
		if ( is_array( $src ) && ! empty( $src[0] ) ) {
			return $src[0];
		}
	}

	if ( is_string( $value ) && ! empty( $value ) ) {
		if ( false !== strpos( $value, '://' ) || 0 === strpos( $value, '//' ) ) {
			return $value;
		}
		return DSC_THEME_URI . '/assets/images/' . $value;
	}

	return DSC_THEME_URI . '/assets/images/' . $default;
}

/**
 * Echo an <img> tag backed by ACF or falling back to the bundled image.
 */
function dsc_image( $name = '', $default = '', $alt = '', $attrs = array() ) {
	$src      = dsc_image_src( $name, $default );
	$defaults = array(
		'src'     => $src,
		'alt'     => $alt,
		'loading' => 'lazy',
		'width'   => 1560,
		'height'  => 896,
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

	if ( is_array( $value ) && ! empty( $value['url'] ) ) {
		return $value['url'];
	}
	if ( is_numeric( $value ) ) {
		$src = wp_get_attachment_image_src( absint( $value ), 'dsc-tile' );
		if ( is_array( $src ) && ! empty( $src[0] ) ) {
			return $src[0];
		}
	}
	if ( is_string( $value ) && ! empty( $value ) ) {
		if ( false !== strpos( $value, '://' ) || 0 === strpos( $value, '//' ) ) {
			return $value;
		}
		return DSC_THEME_URI . '/assets/images/' . $value;
	}
	return DSC_THEME_URI . '/assets/images/' . $default;
}

/**
 * Image tag from a flexible-content/repeater row.
 */
function dsc_row_image( $row = array(), $name = '', $default = '', $alt = '', $attrs = array() ) {
	$src      = dsc_row_image_src( $row, $name, $default );
	$defaults = array(
		'src'     => $src,
		'alt'     => $alt,
		'loading' => 'lazy',
		'width'   => 1560,
		'height'  => 896,
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
