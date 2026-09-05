<?php
/**
 * Front page template — ads.html (paid-traffic landing page).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$sections = dsc_rows( 'landing_sections', array() );

if ( empty( $sections ) ) :
	get_template_part( 'template-parts/sections/landing-hero' );
	get_template_part( 'template-parts/sections/landing-creds' );
	get_template_part( 'template-parts/sections/landing-about' );
	get_template_part( 'template-parts/sections/landing-why' );
	get_template_part( 'template-parts/sections/landing-assure' );
	get_template_part( 'template-parts/sections/landing-process' );
	get_template_part( 'template-parts/sections/landing-projects' );
	get_template_part( 'template-parts/sections/google-reviews' );
	get_template_part( 'template-parts/sections/landing-areas' );
	get_template_part( 'template-parts/sections/landing-faq' );
	get_template_part( 'template-parts/sections/landing-cta' );
else :
	dsc_render_sections( $sections, 'landing' );
endif;

get_footer();
