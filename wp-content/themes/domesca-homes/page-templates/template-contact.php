<?php
/**
 * Template Name: Domesca Contact Us
 * Template Post Type: page
 *
 * Converted from contact.html.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$banner_args = array(
	'title'       => 'Get In Touch With Us Today',
	'sub'         => 'Whether you are looking for an experienced builder in renovations and extensions, a multi unit development builder or build the custom house of your dreams, Domesca Homes offers it all.',
	'image'       => 'alfresco-outdoor.jpg',
	'plain'       => true,
	'crumb_title' => 'Contact Us',
);

get_template_part( 'template-parts/sections/page-banner', null, array( 'section' => $banner_args ) );
get_template_part( 'template-parts/sections/contact-details' );

get_footer();
