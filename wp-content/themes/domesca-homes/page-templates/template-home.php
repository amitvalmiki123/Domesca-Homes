<?php
/**
 * Template Name: Domesca Home Page
 * Template Post Type: page
 *
 * Alternative template for the main homepage (converted from index.html).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$sections = dsc_rows( 'home_sections', array() );

if ( empty( $sections ) ) :
	get_template_part( 'template-parts/sections/landing-hero' );
	get_template_part( 'template-parts/sections/landing-creds' );
	get_template_part( 'template-parts/sections/landing-about' );
	get_template_part( 'template-parts/sections/home-services' );
	get_template_part( 'template-parts/sections/landing-why' );
	get_template_part( 'template-parts/sections/landing-process' );
	get_template_part( 'template-parts/sections/landing-projects' );
	get_template_part( 'template-parts/sections/home-developers' );
	get_template_part( 'template-parts/sections/google-reviews' );
	get_template_part( 'template-parts/sections/landing-areas' );
	get_template_part( 'template-parts/sections/landing-faq' );
	get_template_part( 'template-parts/sections/landing-cta' );
else :
	dsc_render_sections( $sections, 'home' );
endif;

get_footer();
