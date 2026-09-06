<?php
/**
 * Template Name: Domesca Inner Page
 * Template Post Type: page
 *
 * Renders the new static inner-page design (about, services, plans, builds,
 * renovations, extensions, portfolio, contact, location/landing-page layouts).
 * Uses ACF flexible content when populated and falls back to the converted
 * HTML defaults otherwise.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$type     = dsc_inner_type_from_page();
$sections = dsc_rows( 'page_sections', array() );

if ( empty( $sections ) ) {
	$sections = dsc_inner_default_sections( $type );
}

echo '<div id="page-' . esc_attr( get_the_ID() ) . '" class="dsc-entry dsc-entry--inner">';
dsc_render_sections( $sections, 'inner' );
echo '</div>';

get_footer();
