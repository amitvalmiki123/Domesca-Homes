<?php
/**
 * Hero section with badges, intro copy, CTA buttons and the quick-enquiry form.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();

$badges  = dsc_row_key( $section, 'badges', isset( $defaults['hero_badges'] ) ? $defaults['hero_badges'] : array() );
if ( ! is_array( $badges ) || empty( $badges ) ) {
	$badges = isset( $defaults['hero_badges'] ) ? $defaults['hero_badges'] : array();
}

$eyebrow = dsc_row_key( $section, 'eyebrow', isset( $defaults['hero_eyebrow'] ) ? $defaults['hero_eyebrow'] : 'Custom Home Builder &mdash; Melbourne' );
$title   = dsc_row_key( $section, 'title', isset( $defaults['hero_title'] ) ? $defaults['hero_title'] : 'Build your custom home with <em class="serif-accent">confidence.</em>' );
$sub     = dsc_row_key( $section, 'sub', isset( $defaults['hero_sub'] ) ? $defaults['hero_sub'] : 'Over 10 years of experience delivering custom homes across Melbourne\'s north and west.' );
$image   = dsc_row_key( $section, 'image', isset( $defaults['hero_image'] ) ? $defaults['hero_image'] : 'exterior-new-home-facade.jpg' );
$alt     = dsc_row_key( $section, 'alt', isset( $defaults['hero_alt'] ) ? $defaults['hero_alt'] : 'A completed custom new home built by Domesca Homes in Melbourne' );

$img_data = dsc_image_data( $image, array(
	'default' => 'exterior-new-home-facade.jpg',
	'alt'     => $alt,
) );

$phone    = dsc_phone();
$phone_tx = dsc_phone_display();
?>
<section class="hero" id="enquire">
  <div class="hero__media" aria-hidden="true">
    <img src="<?php echo esc_url( $img_data['url'] ); ?>" alt="<?php echo esc_attr( $img_data['alt'] ); ?>" width="<?php echo esc_attr( $img_data['width'] ); ?>" height="<?php echo esc_attr( $img_data['height'] ); ?>" fetchpriority="high">
  </div>
  <div class="hero__scrim" aria-hidden="true"></div>

  <div class="wrap wrap-wide hero__in">
    <div class="hero__copy">
      <?php if ( ! empty( $badges ) ) : ?>
        <div class="hero__badges rv">
          <?php foreach ( $badges as $badge ) : ?>
            <?php $label = is_array( $badge ) ? dsc_row_key( $badge, 'label', '' ) : (string) $badge; ?>
            <?php if ( $label ) : ?>
              <span class="hero__badge"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg> <?php echo esc_html( $label ); ?></span>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow eyebrow--light rv"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>

      <h1 class="d1 rv rv-d1"><?php echo wp_kses_post( $title ); ?></h1>

      <?php if ( $sub ) : ?>
        <p class="hero__sub rv rv-d2"><?php echo wp_kses_post( $sub ); ?></p>
      <?php endif; ?>

      <div class="hero__actions rv rv-d3">
        <a class="btn btn--lg" href="#banner-form">
          <?php esc_html_e( 'Request Your Free Quote', 'domesca-homes' ); ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn--lg btn--on-dark" href="tel:<?php echo esc_attr( $phone ); ?>">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
          <?php echo esc_html__( 'Call ', 'domesca-homes' ) . esc_html( $phone_tx ); ?>
        </a>
      </div>
    </div>

    <div class="qform rv rv-d2" id="banner-form">
      <?php get_template_part( 'template-parts/form/enquiry' ); ?>
    </div>
  </div>

  <div class="hero__scroll" aria-hidden="true">
    <i></i><span><?php esc_html_e( 'Scroll to explore', 'domesca-homes' ); ?></span>
  </div>
</section>
