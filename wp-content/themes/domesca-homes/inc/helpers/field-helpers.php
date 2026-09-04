<?php
/**
 * Field helpers — ACF + defaults bridge.
 *
 * Every dynamic value is pulled from ACF first. If ACF is not installed, or the
 * field has not been saved yet, the theme falls back to the values in
 * defaults.php so the site still looks complete.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Get a post/page ACF field with a fallback.
 */
function dsc_field( $name = '', $default = '' ) {
	$value = get_post_meta( get_the_ID(), $name, true );

	// Prefer ACF when available.
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $name, get_the_ID() );
	}

	if ( is_array( $value ) ) {
		return $value;
	}

	if ( '' !== $value && null !== $value && false !== $value ) {
		return $value;
	}

	return $default;
}

/**
 * Get a Theme Options (option) ACF field with a fallback.
 */
function dsc_opt( $name = '', $default = '' ) {
	$value = '';

	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $name, 'option' );
	}

	if ( null !== $value && false !== $value && '' !== $value && is_array( $value ) ) {
		return $value;
	}

	if ( null !== $value && false !== $value && '' !== $value ) {
		return $value;
	}

	return $default;
}

/**
 * Get a repeater field as an array of rows, or fallback when empty/ACF absent.
 */
function dsc_rows( $name = '', $fallback = array(), $context = 'page' ) {
	$value = ( 'option' === $context ) ? dsc_opt( $name, array() ) : dsc_field( $name, array() );

	if ( is_array( $value ) && ! empty( $value ) ) {
		$rows = array();
		foreach ( $value as $row ) {
			if ( is_array( $row ) ) {
				$rows[] = $row;
			}
		}
		if ( ! empty( $rows ) ) {
			return $rows;
		}
	}

	return is_array( $fallback ) ? $fallback : array();
}

/**
 * Read a row value (ACF returns subfield keys inside the row array).
 */
function dsc_row_key( $row = array(), $key = '', $default = '' ) {
	if ( is_array( $row ) && isset( $row[ $key ] ) ) {
		return $row[ $key ];
	}
	return $default;
}

/**
 * Render a WYSIWYG field value or fall back to default HTML.
 */
function dsc_wysiwyg( $name = '', $default = '', $context = 'page' ) {
	$value = ( 'option' === $context ) ? dsc_opt( $name, '' ) : dsc_field( $name, '' );

	if ( $value ) {
		return $value;
	}

	return $default;
}

/* -------------------------------------------------------------------------
 * Global option shortcuts
 * ------------------------------------------------------------------------- */

/**
 * Shortcut to the front page / options phone.
 */
function dsc_phone( $default = '+61411526251' ) {
	return dsc_opt( 'phone', $default );
}

function dsc_phone_display( $default = '0411 526 251' ) {
	return dsc_opt( 'phone_display', $default );
}

function dsc_email( $default = 'Info@Domescahomes.com.au' ) {
	return dsc_opt( 'email', $default );
}

function dsc_address( $default = 'Hillside, Victoria 3037' ) {
	return dsc_opt( 'address', $default );
}

function dsc_tagline( $default = 'Lifting Properties, Elevating Standards' ) {
	return dsc_opt( 'tagline', $default );
}

function dsc_facebook( $default = 'https://www.facebook.com/domescahomes/' ) {
	return dsc_opt( 'facebook_url', $default );
}

/* -------------------------------------------------------------------------
 * Navigation
 * ------------------------------------------------------------------------- */

/**
 * Get the raw WP menu items for a location (flat list).
 */
function dsc_get_menu_items( $location = 'primary' ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations[ $location ] ) ) {
		return array();
	}
	return wp_get_nav_menu_items( $locations[ $location ] );
}
