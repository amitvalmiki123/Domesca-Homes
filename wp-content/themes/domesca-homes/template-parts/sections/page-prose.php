<?php
/**
 * Plain prose section (privacy policy, legal, simple content pages).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section = isset( $args['section'] ) ? $args['section'] : array();
$title   = dsc_row_key( $section, 'title', get_the_title() );
$prose   = dsc_row_key( $section, 'prose', '' );
$meta    = dsc_row_key( $section, 'meta', '' );

if ( ! $prose ) {
	$prose = get_the_content();
}
?>
<section class="sec">
  <div class="wrap wrap-wide">
    <div class="doc">
      <?php if ( $title ) : ?>
        <h1 class="d1"><?php echo wp_kses_post( $title ); ?></h1>
      <?php endif; ?>
      <?php if ( $meta ) : ?>
        <p class="doc__meta"><?php echo esc_html( $meta ); ?></p>
      <?php endif; ?>
      <div class="prose"><?php echo wp_kses_post( $prose ); ?></div>
    </div>
  </div>
</section>
