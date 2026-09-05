<?php
/**
 * Final CTA / contact form body.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$cf7 = dsc_opt( 'contact_form_shortcode', '' );
if ( $cf7 && function_exists( 'do_shortcode' ) ) {
	echo do_shortcode( $cf7 ); // phpcs:ignore WordPress.Security.EscapeOutput
	dsc_form_note( false );
	return;
}

$defaults = dsc_default_landing();
$types    = $defaults['enquiry_types'];
?>
<form class="qform__body" data-dsc-form novalidate>
  <div class="field--2">
    <div class="field">
      <label for="c-name"><?php echo esc_html__( 'Full name', 'domesca-homes' ); ?> <span class="req">*</span></label>
      <input id="c-name" name="name" type="text" autocomplete="name" placeholder="Your name" required>
    </div>
    <div class="field">
      <label for="c-phone"><?php echo esc_html__( 'Phone', 'domesca-homes' ); ?> <span class="req">*</span></label>
      <input id="c-phone" name="phone" type="tel" autocomplete="tel" placeholder="04__ ___ ___" required>
    </div>
  </div>
  <div class="field">
    <label for="c-email"><?php echo esc_html__( 'Email', 'domesca-homes' ); ?> <span class="req">*</span></label>
    <input id="c-email" name="email" type="email" autocomplete="email" placeholder="you@example.com" required>
  </div>
  <div class="field">
    <label for="c-type"><?php echo esc_html__( 'Project type', 'domesca-homes' ); ?></label>
    <select id="c-type" name="project_type">
      <?php foreach ( $types as $type ) : ?>
        <option><?php echo esc_html( $type ); ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="field">
    <label for="c-msg"><?php echo esc_html__( 'Your message', 'domesca-homes' ); ?></label>
    <textarea id="c-msg" name="message" rows="4" placeholder="Tell us about your project…"></textarea>
  </div>
  <button class="btn btn--block btn--lg" type="submit">
    <?php echo esc_html__( 'Send My Enquiry', 'domesca-homes' ); ?>
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
  </button>
  <p class="form-status" role="status" aria-live="polite"></p>
  <?php dsc_form_note( false ); ?>
</form>
