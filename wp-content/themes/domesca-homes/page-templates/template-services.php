<?php
/**
 * Template Name: Domesca Services
 * Template Post Type: page
 *
 * Converted from services.html.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$banner_args = array(
	'title'       => 'Our Construction Services',
	'sub'         => 'From a concept plan and a single custom home through to a multi-unit development, every Domesca Homes project is managed end to end &mdash; concept, approvals, construction and handover.',
	'image'       => 'exterior-new-home-facade.jpg',
	'crumb_title' => 'Services',
);
get_template_part( 'template-parts/sections/page-banner', null, array( 'section' => $banner_args ) );
get_template_part( 'template-parts/sections/landing-creds' );
get_template_part( 'template-parts/sections/landing-about' );
get_template_part( 'template-parts/sections/home-services' );
get_template_part( 'template-parts/sections/landing-projects' );
get_template_part( 'template-parts/sections/google-reviews' );
get_template_part( 'template-parts/sections/landing-faq' );
get_template_part( 'template-parts/sections/landing-cta' );

get_footer();
