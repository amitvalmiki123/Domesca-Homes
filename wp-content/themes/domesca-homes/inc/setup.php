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
		'primary'        => __( 'Header Primary Menu', 'domesca-homes' ),
		'footer'         => __( 'Footer Menu (columns)', 'domesca-homes' ),
		'footer_bottom'  => __( 'Footer Bottom Menu (legal/bottom bar)', 'domesca-homes' ),
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
 * Create the Footer menu and assign it to the footer location.
 *
 * The footer menu uses the same tree format as the header: top-level items are
 * column headings and their children are the links inside that column.
 */
function dsc_create_default_footer_menu() {
	$locations = get_theme_mod( 'nav_menu_locations' );
	if ( ! empty( $locations['footer'] ) ) {
		return;
	}

	$menu = wp_get_nav_menu_object( 'Footer' );
	$menu_id = $menu ? (int) $menu->term_id : 0;

	if ( ! $menu_id ) {
		$menu_id = wp_create_nav_menu( 'Footer' );
	}

	if ( ! $menu_id ) {
		return;
	}

	$columns = array(
		'Services' => array(
			'New Home Construction', 'Townhouse Developments', 'Unit Developments',
			'Renovations & Extensions', 'Kitchen Renovations', 'Bathroom Renovations',
			'Laundry Renovations', 'House Extensions',
		),
		'Company' => array(
			'About Us' => '#about',
			'Plans & Design' => '#process',
			'Projects' => '#projects',
			'Testimonials' => '#testimonials',
			'Areas We Build' => '#areas',
			'FAQs' => '#faq',
			'Contact Us' => '#contact',
		),
	);

	// Only populate an empty footer menu.
	if ( ! wp_get_nav_menu_items( $menu_id ) ) {
		foreach ( $columns as $column_title => $links ) {
			$parent_id = wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => $column_title,
				'menu-item-url'    => '#',
				'menu-item-type'   => 'custom',
				'menu-item-status' => 'publish',
			) );

			foreach ( $links as $label => $url ) {
				if ( is_int( $label ) ) {
					$label = $url;
					$url   = '#' . strtolower( str_replace( array( ' & ', ' ' ), array( '-', '-' ), $label ) );
					// Target a sensible generic anchor for known sections.
					$url   = in_array( $label, array( 'About Us', 'Plans & Design', 'Projects', 'Testimonials', 'Areas We Build', 'FAQs', 'Contact Us' ), true )
						? $url
						: '#services';
				}

				wp_update_nav_menu_item( $menu_id, $parent_id, array(
					'menu-item-title'  => $label,
					'menu-item-url'    => $url,
					'menu-item-type'   => 'custom',
					'menu-item-status' => 'publish',
				) );
			}
		}
	}

	$locations['footer'] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}
add_action( 'after_switch_theme', 'dsc_create_default_footer_menu' );

/**
 * Create a default Footer Bottom menu and assign it to the bottom-bar location.
 *
 * The Footer Bottom menu should contain the small legal/utility links shown in
 * the very bottom bar (About, Services, Projects, Contact, Privacy Policy).
 */
function dsc_create_default_footer_bottom_menu() {
	$locations = get_theme_mod( 'nav_menu_locations' );
	if ( ! empty( $locations['footer_bottom'] ) ) {
		return;
	}

	$menu    = wp_get_nav_menu_object( 'Footer Bottom' );
	$menu_id = $menu ? (int) $menu->term_id : 0;

	if ( ! $menu_id ) {
		$menu_id = wp_create_nav_menu( 'Footer Bottom' );
	}

	if ( ! $menu_id ) {
		return;
	}

	// Only populate an empty menu.
	if ( ! wp_get_nav_menu_items( $menu_id ) ) {
		$links = array(
			'About'    => '#about',
			'Services' => '#services',
			'Projects' => '#projects',
			'Contact'  => '#contact',
		);

		foreach ( $links as $title => $url ) {
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => $title,
				'menu-item-url'    => $url,
				'menu-item-type'   => 'custom',
				'menu-item-status' => 'publish',
			) );
		}

		// Add the WordPress privacy page if one exists.
		$privacy = function_exists( 'get_privacy_policy_url' ) ? get_privacy_policy_url() : '';
		if ( $privacy ) {
			wp_update_nav_menu_item( $menu_id, 0, array(
				'menu-item-title'  => __( 'Privacy Policy', 'domesca-homes' ),
				'menu-item-url'    => $privacy,
				'menu-item-type'   => 'custom',
				'menu-item-status' => 'publish',
			) );
		}
	}

	$locations['footer_bottom'] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}
add_action( 'after_switch_theme', 'dsc_create_default_footer_bottom_menu' );

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
