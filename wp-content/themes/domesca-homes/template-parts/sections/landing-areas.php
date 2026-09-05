<?php
/**
 * Landing areas.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$areas    = isset( $defaults['areas'] ) && is_array( $defaults['areas'] ) ? $defaults['areas'] : array();

$eyebrow  = dsc_row_key( $section, 'eyebrow', isset( $areas['eyebrow'] ) ? $areas['eyebrow'] : 'Service Area' );
$title    = dsc_row_key( $section, 'title', isset( $areas['title'] ) ? $areas['title'] : 'Building across Melbourne&rsquo;s north &amp; <span class="serif-accent">west.</span>' );
$prose    = dsc_row_key( $section, 'prose', isset( $areas['prose'] ) ? $areas['prose'] : ( isset( $areas['lead'] ) ? '<p class="lead">' . esc_html( $areas['lead'] ) . '</p>' : '' ) );
$map      = dsc_row_key( $section, 'map', isset( $areas['map'] ) ? $areas['map'] : ( isset( $areas['map_url'] ) ? $areas['map_url'] : 'https://www.google.com/maps?q=Hillside+VIC+3037+Australia&z=11&output=embed' ) );
$box      = dsc_row_key( $section, 'box', isset( $areas['box'] ) ? $areas['box'] : 'Get in touch and we can confirm whether your project is a fit.' );
$btn1     = dsc_row_key( $section, 'button1', isset( $areas['btn1'] ) ? $areas['btn1'] : ( isset( $areas['button1'] ) ? $areas['button1'] : 'Check Your Suburb' ) );
$btn2     = dsc_row_key( $section, 'button2', isset( $areas['btn2'] ) ? $areas['btn2'] : ( isset( $areas['button2'] ) ? $areas['button2'] : 'Call ' . dsc_phone_display() ) );
$url1     = dsc_row_key( $section, 'url1', '#enquire' );
$url2     = dsc_row_key( $section, 'url2', 'tel:' . dsc_phone() );

$list = dsc_row_key( $section, 'list', isset( $areas['list'] ) ? $areas['list'] : array() );
if ( ! is_array( $list ) || empty( $list ) ) {
	$suburbs = isset( $areas['suburbs'] ) ? $areas['suburbs'] : array();
	$list = array();
	foreach ( $suburbs as $suburb ) {
		$list[] = array( 'label' => $suburb );
	}
}
?>
<section class="sec" id="areas">
  <div class="wrap wrap-wide areas__grid sticky-split">
    <div class="rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
      <?php if ( $prose ) : ?>
        <div class="prose" style="margin-top:1.4rem">
          <?php echo wp_kses_post( $prose ); ?>
        </div>
      <?php endif; ?>

      <?php if ( ! empty( $list ) ) : ?>
        <ul class="areas__list">
          <?php foreach ( $list as $item ) : ?>
            <?php $label = is_array( $item ) ? dsc_row_key( $item, 'label', '' ) : (string) $item; ?>
            <?php if ( $label ) : ?>
              <li><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg> <?php echo wp_kses_post( $label ); ?></li>
            <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <div class="areas__box">
        <p><strong><?php echo esc_html__( 'Outside these areas?', 'domesca-homes' ); ?></strong> <?php echo esc_html( $box ); ?></p>
        <div style="display:flex;flex-wrap:wrap;gap:12px">
          <a class="btn" href="<?php echo esc_url( $url1 ); ?>"><?php echo esc_html( $btn1 ); ?></a>
          <a class="btn btn--ghost" href="<?php echo esc_url( $url2 ); ?>"><?php echo esc_html( $btn2 ); ?></a>
        </div>
      </div>
    </div>

    <div class="areas__map rv rv-d1 sticky-col">
      <iframe title="Map showing the Domesca Homes service area around Hillside, Victoria" src="<?php echo esc_url( $map ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
