<?php
/**
 * Final CTA band + contact form.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$cta      = isset( $defaults['cta'] ) && is_array( $defaults['cta'] ) ? $defaults['cta'] : array();

$eyebrow = dsc_row_key( $section, 'eyebrow', isset( $cta['eyebrow'] ) ? $cta['eyebrow'] : 'Get In Touch With Us Today' );
$title   = dsc_row_key( $section, 'title', isset( $cta['title'] ) ? $cta['title'] : 'Let&rsquo;s build something you&rsquo;ll be proud of for <span class="serif-accent">decades.</span>' );
$sub     = dsc_row_key( $section, 'sub', isset( $cta['sub'] ) ? $cta['sub'] : 'Whether you have all the plans and permits ready for construction, or nothing more than a vision, our team can help you take the next step.' );
$image   = dsc_row_key( $section, 'image', isset( $cta['image'] ) ? $cta['image'] : 'kitchen-white-island.jpg' );

$img_data = dsc_image_data( $image, array(
	'default' => 'kitchen-white-island.jpg',
	'alt'     => 'Modern kitchen by Domesca Homes',
) );

$phone    = dsc_phone();
$phone_tx = dsc_phone_display();
$email    = dsc_email();
$address  = dsc_address();
?>
<section class="sec cta" id="contact">
  <div class="cta__bg" aria-hidden="true">
    <img src="<?php echo esc_url( $img_data['url'] ); ?>" alt="<?php echo esc_attr( $img_data['alt'] ); ?>" width="<?php echo esc_attr( $img_data['width'] ); ?>" height="<?php echo esc_attr( $img_data['height'] ); ?>" loading="lazy">
  </div>

  <div class="wrap wrap-wide cta__grid">
    <div class="cta__copy rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow eyebrow--light"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>

      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>

      <?php if ( $sub ) : ?>
        <p class="cta__sub"><?php echo wp_kses_post( $sub ); ?></p>
      <?php endif; ?>

      <div class="cta__meta">
        <a href="tel:<?php echo esc_attr( $phone ); ?>">
          <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg></span>
          <span><small><?php esc_html_e( 'Direct line', 'domesca-homes' ); ?></small><b><?php echo esc_html( $phone_tx ); ?></b></span>
        </a>
        <a href="mailto:<?php echo esc_attr( $email ); ?>">
          <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg></span>
          <span><small><?php esc_html_e( 'Email enquiry', 'domesca-homes' ); ?></small><b><?php echo esc_html( $email ); ?></b></span>
        </a>
        <div>
          <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
          <span><small><?php esc_html_e( 'Location', 'domesca-homes' ); ?></small><b><?php echo esc_html( $address ); ?></b></span>
        </div>
      </div>
    </div>

    <div class="qform qform--light rv rv-d1" id="enquiry-form">
      <?php get_template_part( 'template-parts/form/contact' ); ?>
    </div>
  </div>
</section>
