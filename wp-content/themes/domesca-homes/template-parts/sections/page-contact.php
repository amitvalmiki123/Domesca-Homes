<?php
/**
 * Contact split with details + light form (new HTML contact page).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section = isset( $args['section'] ) ? $args['section'] : array();
$key     = function ( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$phone       = dsc_phone();
$phone_tx    = dsc_phone_display();
$email       = dsc_email();
$address     = strtok( dsc_opt( 'address', 'Hillside, Victoria 3037' ), "\n" );
$area        = dsc_opt( 'service_area', "Melbourne's north & west" );
$area_url    = dsc_opt( 'address_url', '' );
$facebook    = dsc_facebook();
$heading     = $key( 'heading', __( 'Talk to the person who will actually run your build.', 'domesca-homes' ) );
$prose       = $key( 'prose', __( 'We keep communication clear and regular throughout the build. You will be kept informed on progress, key milestones and any important decisions, so you always know how your project is tracking.', 'domesca-homes' ) );
$form_eyebrow = $key( 'form_eyebrow', __( 'Enquire Online', 'domesca-homes' ) );
$form_title   = $key( 'form_title', __( 'Send Us Your Project Details', 'domesca-homes' ) );
$form_text    = $key( 'form_text', __( 'Share a few details about your project and our team will review your needs and respond with the next steps.', 'domesca-homes' ) );
?>
<section class="sec" id="enquire">
  <div class="wrap wrap-wide">
    <div class="split">
      <div class="split__copy">
        <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', __( 'Contact Details', 'domesca-homes' ) ) ); ?></p>
        <h2 class="d2"><?php echo wp_kses_post( $heading ); ?></h2>
        <div class="prose" style="margin-top:1.4rem">
          <?php echo wp_kses_post( $prose ); ?>
        </div>

        <div class="contact-meta">
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
            <span><small><?php echo esc_html__( 'Based in', 'domesca-homes' ); ?></small><b><?php echo esc_html( $address ); ?></b></span>
          </div>
          <div>
            <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="m3 11 9-8 9 8"/><path d="M5 10v10h14V10"/></svg></span>
            <span><small><?php echo esc_html__( 'Service area', 'domesca-homes' ); ?></small><b><?php echo esc_html( $area ); ?></b></span>
          </div>
          <?php if ( $facebook ) : ?>
            <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener">
              <span class="ic" aria-hidden="true"><svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M14 9V7c0-1 .2-1.5 1.6-1.5H17V2.1A22 22 0 0 0 14.6 2C11.9 2 10 3.7 10 6.7V9H7v4h3v9h4v-9h3l.5-4H14Z"/></svg></span>
              <span><small><?php echo esc_html__( 'Follow us', 'domesca-homes' ); ?></small><b><?php echo esc_html__( 'Domesca Homes on Facebook', 'domesca-homes' ); ?></b></span>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <div class="qform qform--light rv rv-d1">
        <div class="qform__head">
          <p class="eyebrow"><?php echo esc_html( $form_eyebrow ); ?></p>
          <h2><?php echo esc_html( $form_title ); ?></h2>
          <p><?php echo esc_html( $form_text ); ?></p>
        </div>
        <?php get_template_part( 'template-parts/form/contact' ); ?>
      </div>
    </div>
  </div>
</section>
