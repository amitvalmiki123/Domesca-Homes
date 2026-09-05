<?php
/**
 * Template Name: Domesca Portfolio
 * Template Post Type: page
 *
 * Converted from portfolio.html.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$banner_args = array(
	'title'       => 'Portfolio &amp; Photo Gallery',
	'sub'         => 'Completed works from across Melbourne&rsquo;s north and west &mdash; new builds, townhouse and unit developments, and full renovations.',
	'image'       => 'kitchen-living-pendant.jpg',
	'crumb_title' => 'Portfolio',
);

get_template_part( 'template-parts/sections/page-banner', null, array( 'section' => $banner_args ) );
get_template_part( 'template-parts/sections/landing-creds' );
get_template_part( 'template-parts/sections/landing-projects' );
get_template_part( 'template-parts/sections/landing-why' );
get_template_part( 'template-parts/sections/landing-testimonials' );
get_template_part( 'template-parts/sections/landing-cta' );

get_footer();
