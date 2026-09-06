<?php
/**
 * Landing final CTA / contact.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$cta      = $defaults['cta'];
$key      = function( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$phone    = dsc_phone();
$phone_tx = dsc_phone_display();
$email    = dsc_email();
?>
<section class="sec cta" id="contact">
  <div class="cta__bg" aria-hidden="true"><?php dsc_row_image( $section, 'image', $cta['image'], '', array( 'loading' => 'lazy', 'width' => 1284, 'height' => 881 ) ); ?></div>
  <div class="wrap wrap-wide cta__grid">
    <div class="rv">
      <p class="eyebrow eyebrow--light"><?php echo esc_html( $key( 'eyebrow', $cta['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $cta['title'] ) ); ?></h2>
      <p class="cta__sub"><?php echo wp_kses_post( $key( 'sub', $cta['sub'] ) ); ?></p>

      <div class="cta__meta">
        <a href="tel:<?php echo esc_attr( $phone ); ?>">
          <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg></span>
          <span><small><?php echo esc_html__( 'Call us now', 'domesca-homes' ); ?></small><b><?php echo esc_html( $phone_tx ); ?></b></span>
        </a>
        <a href="mailto:<?php echo esc_attr( $email ); ?>">
          <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg></span>
          <span><small><?php echo esc_html__( 'Email us', 'domesca-homes' ); ?></small><b><?php echo esc_html( $email ); ?></b></span>
        </a>
        <div>
          <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg></span>
          <span><small><?php echo esc_html__( 'Based in', 'domesca-homes' ); ?></small><?php if ( dsc_address_url() ) : ?><b><a href="<?php echo esc_url( dsc_address_url() ); ?>" target="_blank" rel="noopener"><?php echo esc_html( strtok( dsc_opt( 'address', 'Hillside, Victoria 3037' ), "\n" ) ); ?></a></b><?php else : ?><b><?php echo esc_html( strtok( dsc_opt( 'address', 'Hillside, Victoria 3037' ), "\n" ) ); ?></b><?php endif; ?></span>
        </div>
      </div>
    </div>

    <div class="qform rv rv-d1" id="contact-form">
      <div class="qform__head">
        <p class="eyebrow"><?php echo esc_html( $key( 'form_eyebrow', $cta['form_eyebrow'] ) ); ?></p>
        <h2><?php echo esc_html( $key( 'form_title', $cta['form_title'] ) ); ?></h2>
        <p><?php echo esc_html( $key( 'form_text', $cta['form_text'] ) ); ?></p>
      </div>
      <?php get_template_part( 'template-parts/form/contact' ); ?>
    </div>
  </div>
</section>
