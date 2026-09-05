<?php
/**
 * Template Name: Domesca Location Page
 * Template Post Type: page
 *
 * Converted from location-hillside.html.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$banner_args = array(
	'title'       => 'Home Builders in Hillside',
	'sub'         => 'Domesca Homes is based in Hillside, Victoria &mdash; building custom homes, townhouse and unit developments, renovations and extensions across Melbourne&rsquo;s north and west since 2013.',
	'image'       => 'exterior-single-storey.jpg',
	'crumb_title' => 'Hillside Builders',
);

get_template_part( 'template-parts/sections/page-banner', null, array( 'section' => $banner_args ) );
get_template_part( 'template-parts/sections/landing-creds' );
get_template_part( 'template-parts/sections/landing-about' );
get_template_part( 'template-parts/sections/landing-areas' );
get_template_part( 'template-parts/sections/landing-projects' );
get_template_part( 'template-parts/sections/google-reviews' );
get_template_part( 'template-parts/sections/landing-faq' );
get_template_part( 'template-parts/sections/landing-cta' );

get_footer();
