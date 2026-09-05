<?php
/**
 * Template Name: Domesca About Us
 * Template Post Type: page
 *
 * Converted from about.html.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$banner_args = array(
	'title'       => 'About Domesca Homes',
	'sub'         => 'A Melbourne-based building company delivering custom homes, renovations, knockdown rebuilds and multi-unit developments across Melbourne\'s north and west since 2013.',
	'image'       => 'exterior-townhouse-dusk.jpg',
	'crumb_title' => 'About Us',
);
get_template_part( 'template-parts/sections/page-banner', null, array( 'section' => $banner_args ) );
get_template_part( 'template-parts/sections/landing-creds' );
get_template_part( 'template-parts/sections/landing-about' );
get_template_part( 'template-parts/sections/landing-testimonials' );
get_template_part( 'template-parts/sections/landing-projects' );
get_template_part( 'template-parts/sections/landing-cta' );

get_footer();
