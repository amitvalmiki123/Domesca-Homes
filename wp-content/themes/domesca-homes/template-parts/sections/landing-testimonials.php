<?php
/**
 * Testimonials / Google Reviews section template.
 *
 * Renders the Google Reviews aggregate badge and client reviews.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_template_part( 'template-parts/sections/google-reviews', null, isset( $args ) ? $args : array() );
