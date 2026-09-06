<?php
/**
 * Template Name: Domesca Inner Page (Custom)
 * Template Post Type: page
 *
 * Generic fallback template kept for backward compatibility. For the normal
 * content-entry workflow use the page-type templates (About, Services, Our
 * Plans, New Builds, Townhouse Developments, Multi-Unit Projects, Extensions,
 * Renovations, Portfolio, Contact, Privacy Policy, Plain Page).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

dsc_render_inner_page( dsc_inner_type_from_page() );
