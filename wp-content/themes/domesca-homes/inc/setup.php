<?php
/**
 * Theme setup.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register theme supports, menus, image sizes.
 */
function dsc_setup() {
	load_theme_textdomain( 'domesca-homes', DSC_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'custom-logo', array(
		'height'      => 174,
		'width'       => 442,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary' => __( 'Header Primary Menu', 'domesca-homes' ),
		'footer'  => __( 'Footer Menu (optional)' , 'domesca-homes' ),
	) );

	add_image_size( 'dsc-hero', 1440, 1000, true );
	add_image_size( 'dsc-grid', 1200, 800, true );
	add_image_size( 'dsc-tile', 1560, 896, true );
}
add_action( 'after_setup_theme', 'dsc_setup' );

/**
 * Content width.
 */
function dsc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dsc_content_width', 1440 );
}
add_action( 'after_setup_theme', 'dsc_content_width', 0 );

/**
 * Default WordPress menus so the theme looks correct immediately after activation.
 */
function dsc_create_default_menus() {
	$locations = get_theme_mod( 'nav_menu_locations' );
	if ( empty( $locations['primary'] ) ) {
		$menu = wp_get_nav_menu_object( 'Primary' );
		$menu_id = $menu ? (int) $menu->term_id : 0;
		if ( ! $menu_id ) {
			$menu_id = wp_create_nav_menu( 'Primary' );
			$items   = array(
				'Home'           => home_url( '/' ),
				'About Us'       => '#about',
				'Plans & Design' => '#process',
			);

			$parent_ids = array();
			foreach ( $items as $title => $url ) {
				$parent_ids[ $title ] = wp_update_nav_menu_item( $menu_id, 0, array(
					'menu-item-title'  => $title,
					'menu-item-url'    => $url,
					'menu-item-type'   => 'custom',
					'menu-item-status' => 'publish',
				) );
			}

			$drops = array(
				'Developments'         => array( 'Townhouse Developments', 'New Homes', 'Unit Developments' ),
				'Renovations & Extensions' => array( 'Renovations & Extensions', 'Kitchen Renovations', 'Bathroom Renovations', 'Laundry Renovations', 'House Extensions' ),
			);

			foreach ( $drops as $parent_title => $children ) {
				$parent_id = wp_update_nav_menu_item( $menu_id, 0, array(
					'menu-item-title'  => $parent_title,
					'menu-item-url'    => '#services',
					'menu-item-type'   => 'custom',
					'menu-item-status' => 'publish',
				) );

				foreach ( $children as $child_title ) {
					wp_update_nav_menu_item( $menu_id, $parent_id, array(
						'menu-item-title'  => $child_title,
						'menu-item-url'    => '#services',
						'menu-item-type'   => 'custom',
						'menu-item-status' => 'publish',
					) );
				}
			}

			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'Projects',
				'menu-item-url'    => '#projects',
				'menu-item-type'   => 'custom',
				'menu-item-status' => 'publish',
			) );
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'Areas We Build',
				'menu-item-url'    => '#areas',
				'menu-item-type'   => 'custom',
				'menu-item-status' => 'publish',
			) );
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => 'Contact Us',
				'menu-item-url'    => '#contact',
				'menu-item-type'   => 'custom',
				'menu-item-status' => 'publish',
			) );
		}

		$locations = get_theme_mod( 'nav_menu_locations' );
		$locations['primary'] = $menu_id;
		set_theme_mod( 'nav_menu_locations', $locations );
	}
}
add_action( 'after_switch_theme', 'dsc_create_default_menus' );

/**
 * Security hardening (Rule 17).
 */
function dsc_security_hardening() {
	remove_action( 'wp_head', 'wp_generator' );
	add_filter( 'xmlrpc_enabled', '__return_false' );
	add_action( 'send_headers', function () {
		header( 'X-Content-Type-Options: nosniff' );
	}, 10 );

	// Remove REST API user enumeration for non-logged-in users.
	add_filter( 'rest_endpoints', function ( $endpoints ) {
		if ( is_user_logged_in() ) {
			return $endpoints;
		}
		if ( isset( $endpoints['/wp/v2/users'] ) ) {
			unset( $endpoints['/wp/v2/users'] );
		}
		if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
			unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
		}
		return $endpoints;
	} );
}
add_action( 'after_setup_theme', 'dsc_security_hardening' );
