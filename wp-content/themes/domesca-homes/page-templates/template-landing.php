<?php
/**
 * Template Name: Domesca Landing Page
 * Template Post Type: page
 *
 * Use this template for the paid-traffic landing page (converted from
 * ads.html). Assign it to the page set as the static front page.
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
	?>
	<div id="page-<?php the_ID(); ?>" class="dsc-entry dsc-entry--landing">
		<?php the_content(); ?>
	</div>
	<?php
else :
	dsc_render_sections( $sections, 'landing' );
endif;

get_footer();
