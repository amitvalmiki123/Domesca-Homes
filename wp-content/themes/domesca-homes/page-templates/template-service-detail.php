<?php
/**
 * Template Name: Domesca Service Detail
 * Template Post Type: page
 *
 * Used for service detail pages (New Builds, Extensions, Renovations, Multi-Unit, Townhouse Developments, Our Plans).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$slug = get_post_field( 'post_name', get_the_ID() );

// Intelligent defaults based on page slug
$sub_map = array(
	'new-builds'             => 'Homes that combine timeless design, functionality and lasting value &mdash; built for the way you actually want to live.',
	'extensions'             => 'More space, more light and more modern conveniences &mdash; without the expense and inconvenience of moving.',
	'renovations'            => 'Modern upgrades that improve how your home works and looks &mdash; kitchens, bathrooms, laundries and whole-home renovations.',
	'multi-unit-projects'    => 'High-quality multi-unit developments delivered with efficiency, precision and professionalism &mdash; for developers, investors and landowners across Melbourne.',
	'townhouse-developments' => 'Duplex and townhouse projects for developers, investors and landowners &mdash; delivered with certainty on cost, timelines and quality.',
	'our-plans'              => 'Your plans or ours &mdash; either way we build it. Bring designs you already have, or start from nothing more than a vision.',
);

$img_map = array(
	'new-builds'             => 'exterior-single-storey.jpg',
	'extensions'             => 'living-sliding-doors.jpg',
	'renovations'            => 'kitchen-island-stone.jpg',
	'multi-unit-projects'    => 'exterior-townhouse-brick.jpg',
	'townhouse-developments' => 'exterior-townhouse-dusk.jpg',
	'our-plans'              => 'stairwell-void.jpg',
);

$sub = isset( $sub_map[ $slug ] ) ? $sub_map[ $slug ] : get_the_excerpt();
$img = isset( $img_map[ $slug ] ) ? $img_map[ $slug ] : 'exterior-new-home-facade.jpg';

$banner_args = array(
	'title'       => get_the_title(),
	'sub'         => $sub,
	'image'       => $img,
	'crumb_title' => get_the_title(),
);

get_template_part( 'template-parts/sections/page-banner', null, array( 'section' => $banner_args ) );
get_template_part( 'template-parts/sections/landing-creds' );
get_template_part( 'template-parts/sections/landing-about' );
get_template_part( 'template-parts/sections/landing-projects' );
get_template_part( 'template-parts/sections/landing-testimonials' );
get_template_part( 'template-parts/sections/landing-faq' );
get_template_part( 'template-parts/sections/landing-cta' );

get_footer();
