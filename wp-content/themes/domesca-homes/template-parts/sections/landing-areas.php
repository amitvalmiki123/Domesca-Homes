<?php
/**
 * Landing areas.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$areas    = $defaults['areas'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$list = $key( 'list', $areas['list'] );
if ( ! is_array( $list ) ) {
	$list = $areas['list'];
}
$map = $key( 'map', $areas['map'] );
?>
<section class="sec" id="areas">
  <div class="wrap wrap-wide areas__grid sticky-split">
    <div class="rv">
      <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', $areas['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $areas['title'] ) ); ?></h2>
      <div class="prose" style="margin-top:1.4rem">
        <?php echo wp_kses_post( $key( 'prose', $areas['prose'] ) ); ?>
      </div>

      <ul class="areas__list">
        <?php foreach ( $list as $item ) : ?>
          <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg> <?php echo wp_kses_post( dsc_row_key( $item, 'label', '' ) ); ?></li>
        <?php endforeach; ?>
      </ul>

      <div class="areas__box">
        <p><strong><?php echo esc_html__( 'Outside these areas?', 'domesca-homes' ); ?></strong> <?php echo esc_html( $key( 'box', $areas['box'] ) ); ?></p>
        <div style="display:flex;flex-wrap:wrap;gap:12px">
          <a class="btn" href="<?php echo esc_url( $key( 'url1', '#enquiry-form' ) ); ?>"><?php echo esc_html( $key( 'button1', $areas['btn1'] ) ); ?></a>
          <a class="btn btn--ghost" href="<?php echo esc_url( $key( 'url2', 'tel:' . dsc_phone() ) ); ?>"><?php echo esc_html( $key( 'button2', $areas['btn2'] ) ); ?></a>
        </div>
      </div>
    </div>

    <div class="areas__map rv rv-d1 sticky-col">
      <iframe title="Map showing the Domesca Homes service area around Hillside, Victoria" src="<?php echo esc_url( $map ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
