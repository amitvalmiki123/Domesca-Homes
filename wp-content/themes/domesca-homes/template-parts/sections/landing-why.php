<?php
/**
 * Landing "What you get" section.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$why      = $defaults['why'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$items = $key( 'items', $why['items'] );
if ( ! is_array( $items ) ) {
	$items = $why['items'];
}
?>
<section class="sec sec--tight" style="background:var(--n-50)">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', $why['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $why['title'] ) ); ?></h2>
    </div>

    <div class="incl">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' ); ?>
        <div class="incl__cell rv<?php echo esc_attr( $delay ); ?>">
          <span class="incl__ic" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><?php echo dsc_why_icon( dsc_row_key( $item, 'icon', 'check' ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?></svg></span>
          <div><h3><?php echo wp_kses_post( dsc_row_key( $item, 'title', '' ) ); ?></h3><p><?php echo wp_kses_post( dsc_row_key( $item, 'text', '' ) ); ?></p></div>
        </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
