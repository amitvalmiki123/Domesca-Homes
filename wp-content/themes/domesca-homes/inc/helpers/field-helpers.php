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

/**
 * Address / service area link (option address_url).
 */
function dsc_address_url( $default = '' ) {
	return dsc_opt( 'address_url', $default );
}

/**
 * Footer "Get In Touch" column title.
 */
function dsc_footer_touch_title( $default = 'Get In Touch' ) {
	return dsc_opt( 'footer_get_in_touch_title', $default );
}

/**
 * Footer "Request a Quote" button text.
 */
function dsc_footer_quote_text( $default = 'Request a Quote' ) {
	return dsc_opt( 'footer_request_quote_text', $default );
}

/**
 * Copyright line with current year and WordPress site name.
 *
 * Supports {year} and {site} placeholders.
 */
function dsc_copyright( $default = '&copy;{year} {site}. All rights reserved.' ) {
	$value = dsc_opt( 'copyright', $default );

	$year = gmdate( 'Y' );
	$site = get_bloginfo( 'name' );

	$value = str_replace( '{year}', $year, $value );
	$value = str_replace( '{site}', $site, $value );

	return $value;
}

/**
 * Logo data for the header or footer.
 *
 * Header: uses the WordPress Customizer "Site Identity → Logo".
 * Footer: uses the separate Domesca Options field "Footer logo", and falls
 * back to the built-in footer logo when empty so it can be different from the
 * header logo.
 *
 * @param string $context 'header' or 'footer'.
 * @return array{url:string,width:int,height:int,alt:string}
 */
function dsc_logo_data( $context = 'header' ) {
	$default = array(
		'url'       => DSC_THEME_URI . '/assets/images/logo.png',
		'width'     => 442,
		'height'    => 174,
		'alt'       => get_bloginfo( 'name' ),
		'is_default' => true,
	);

	if ( 'footer' === $context ) {
		$footer = dsc_opt( 'footer_logo', array() );
		if ( is_array( $footer ) && ! empty( $footer['url'] ) ) {
			return array(
				'url'       => $footer['url'],
				'width'     => ! empty( $footer['width'] ) ? (int) $footer['width'] : $default['width'],
				'height'    => ! empty( $footer['height'] ) ? (int) $footer['height'] : $default['height'],
				'alt'       => ! empty( $footer['alt'] ) ? $footer['alt'] : $default['alt'],
				'is_default' => false,
			);
		}
		return $default;
	}

	// Header logo (Customizer Site Identity).
	$logo_id = get_theme_mod( 'custom_logo' );
	if ( $logo_id ) {
		$image = wp_get_attachment_image_src( $logo_id, 'full' );
		if ( ! empty( $image ) ) {
			$alt = get_post_meta( $logo_id, '_wp_attachment_image_alt', true );
			return array(
				'url'       => $image[0],
				'width'     => ! empty( $image[1] ) ? (int) $image[1] : $default['width'],
				'height'    => ! empty( $image[2] ) ? (int) $image[2] : $default['height'],
				'alt'       => $alt ? $alt : $default['alt'],
				'is_default' => false,
			);
		}
	}

	return $default;
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
