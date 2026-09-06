<?php
/**
 * Section helpers — show/hide/reorder rendering.
 *
 * Rule 4: every section has `show` (true_false default true) and `order`
 * (number default 10,20,30...). The render engine collects, filters, sort and
 * renders via get_template_part().
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Map a flexible-content layout + page to its section partial.
 *
 * Landing layouts use template-parts/sections/landing-{layout}.php.
 * Home-only layouts (services/developers) use home-{layout}.php.
 */
function dsc_section_part( $layout = '', $page = 'landing' ) {
	$layout = sanitize_key( $layout );
	if ( ! $layout ) {
		return '';
	}

	if ( 'inner' === $page ) {
		$map = array(
			'banner'       => 'page-banner',
			'creds'        => 'landing-creds',
			'splits'       => 'page-splits',
			'contact'      => 'page-contact',
			'services'     => 'home-services',
			'plans'        => 'page-plans',
			'why'          => 'page-why',
			'process'      => 'landing-process',
			'projects'     => 'page-projects',
			'developers'   => 'home-developers',
			'testimonials' => 'landing-testimonials',
			'areas'        => 'landing-areas',
			'faq'          => 'home-faq',
			'cta'          => 'landing-cta',
			'contact_map'  => 'page-contact-map',
			'prose'        => 'page-prose',
		);
		return isset( $map[ $layout ] ) ? 'template-parts/sections/' . $map[ $layout ] : '';
	}

	$home_only = array( 'services', 'developers' );
	if ( 'home' === $page ) {
		if ( in_array( $layout, array( 'about', 'plans', 'why', 'projects', 'faq' ), true ) ) {
			$map_home = array(
				'about'    => 'home-about',
				'plans'    => 'page-plans',
				'why'      => 'page-why',
				'projects' => 'page-projects',
				'faq'      => 'home-faq',
			);
			return 'template-parts/sections/' . $map_home[ $layout ];
		}
		if ( in_array( $layout, $home_only, true ) ) {
			return 'template-parts/sections/home-' . $layout;
		}
	}

	return 'template-parts/sections/landing-' . $layout;
}

/**
 * Render a list of sections from ACF.
 *
 * @param array  $sections Flexible-content rows.
 * @param string $page     landing|home.
 */
function dsc_render_sections( $sections = array(), $page = 'landing' ) {
	if ( ! is_array( $sections ) || empty( $sections ) ) {
		return;
	}

	$renderable = array();

	foreach ( $sections as $i => $section ) {
		if ( ! is_array( $section ) ) {
			continue;
		}

		$layout = isset( $section['acf_fc_layout'] ) ? sanitize_key( $section['acf_fc_layout'] ) : '';

		// Rule 3: empty field outputs nothing.
		if ( ! $layout ) {
			continue;
		}

		// Rule 4: show toggle.
		$show = isset( $section['show'] ) ? $section['show'] : true;
		if ( ! is_bool( $show ) ) {
			$show = false === $show || '0' === (string) $show || 'false' === (string) $show ? false : true;
		}
		if ( ! $show ) {
			continue;
		}

		// Rule 4: order.
		$order = isset( $section['order'] ) && '' !== $section['order'] ? (int) $section['order'] : ( ( $i + 1 ) * 10 );

		$renderable[] = array(
			'layout'  => $layout,
			'order'   => $order,
			'section' => $section,
		);
	}

	if ( empty( $renderable ) ) {
		return;
	}

	// Stable sort by order while preserving ACF order for equal values.
	usort( $renderable, function ( $a, $b ) {
		if ( $a['order'] === $b['order'] ) {
			return 0;
		}
		return $a['order'] < $b['order'] ? -1 : 1;
	} );

	foreach ( $renderable as $item ) {
		$part = dsc_section_part( $item['layout'], $page );
		if ( $part ) {
			get_template_part( $part, null, array( 'section' => $item['section'] ) );
		}
	}
}
