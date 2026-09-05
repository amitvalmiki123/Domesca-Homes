<?php
/**
 * Landing hero.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$badges = dsc_row_key( $section, 'badges', $defaults['hero_badges'] );
if ( ! is_array( $badges ) ) {
	$badges = $defaults['hero_badges'];
}

$eyebrow = $key( 'eyebrow', $defaults['hero_eyebrow'] );
$title   = $key( 'title', $defaults['hero_title'] );
$sub     = $key( 'sub', $defaults['hero_sub'] );
$btn1    = $key( 'btn1_label', 'Request Your Free Quote' );
$url1    = $key( 'btn1_url', '#enquiry-form' );
$btn2    = $key( 'btn2_label', 'Call ' . dsc_phone_display() );
$url2    = $key( 'btn2_url', 'tel:' . dsc_phone() );
$img_alt = $key( 'alt', $defaults['hero_alt'] );
$d_image = $defaults['hero_image'];
?>
<section class="hero" id="enquire">
  <div class="hero__media">
    <?php dsc_row_image( $section, 'image', $d_image, $img_alt, array( 'fetchpriority' => 'high' ) ); ?>
  </div>
  <div class="hero__scrim" aria-hidden="true"></div>

  <div class="wrap wrap-wide hero__in">
    <div class="hero__copy">
      <ul class="hero__badges rv">
        <?php foreach ( $badges as $badge ) : ?>
          <li class="hero__badge">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m3 11 9-8 9 8"/><path d="M5 10v10h14V10"/></svg>
            <?php echo esc_html( dsc_row_key( $badge, 'label', '' ) ); ?>
          </li>
        <?php endforeach; ?>
      </ul>

      <p class="eyebrow eyebrow--light rv rv-d1"><?php echo wp_kses_post( $eyebrow ); ?></p>
      <h1 class="d1 rv rv-d1"><?php echo wp_kses_post( $title ); ?></h1>
      <p class="hero__sub rv rv-d2"><?php echo wp_kses_post( $sub ); ?></p>

      <div class="hero__actions rv rv-d3">
        <a class="btn btn--lg" href="<?php echo esc_url( $url1 ); ?>">
          <?php echo esc_html( $btn1 ); ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn--lg btn--on-dark" href="<?php echo esc_url( $url2 ); ?>">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
          <?php echo esc_html( $btn2 ); ?>
        </a>
      </div>
    </div>

    <div class="qform rv rv-d3" id="enquiry-form">
      <div class="qform__head">
        <p class="eyebrow"><?php echo esc_html__( 'Free &amp; no-obligation', 'domesca-homes' ); ?></p>
        <h2><?php echo esc_html__( 'Get Your Free Building Quote', 'domesca-homes' ); ?></h2>
        <p><?php echo esc_html__( 'Share a few details about your project and our team will review your needs and respond with the next steps.', 'domesca-homes' ); ?></p>
      </div>
      <?php get_template_part( 'template-parts/form/enquiry' ); ?>
    </div>
  </div>
</section>
