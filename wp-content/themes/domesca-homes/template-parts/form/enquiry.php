<?php
/**
 * Landing/banner enquiry form body.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$cf7 = dsc_opt( 'hero_form_shortcode', '' );
if ( $cf7 && function_exists( 'do_shortcode' ) ) {
	echo do_shortcode( $cf7 ); // phpcs:ignore WordPress.Security.EscapeOutput
	dsc_form_note( true );
	return;
}

$defaults = dsc_default_landing();
$types    = $defaults['enquiry_types'];
$stages   = $defaults['enquiry_stages'];
?>
<form class="qform__body" data-dsc-form novalidate>
  <div class="field--2">
    <div class="field">
      <label for="q-name"><?php echo esc_html__( 'Full name', 'domesca-homes' ); ?> <span class="req">*</span></label>
      <input id="q-name" name="name" type="text" autocomplete="name" placeholder="Your name" required>
    </div>
    <div class="field">
      <label for="q-phone"><?php echo esc_html__( 'Phone', 'domesca-homes' ); ?> <span class="req">*</span></label>
      <input id="q-phone" name="phone" type="tel" autocomplete="tel" placeholder="04__ ___ ___" required>
    </div>
  </div>
  <div class="field">
    <label for="q-email"><?php echo esc_html__( 'Email', 'domesca-homes' ); ?> <span class="req">*</span></label>
    <input id="q-email" name="email" type="email" autocomplete="email" placeholder="you@example.com" required>
  </div>
  <div class="field--2">
    <div class="field">
      <label for="q-type"><?php echo esc_html__( 'Project type', 'domesca-homes' ); ?></label>
      <select id="q-type" name="project_type">
        <?php foreach ( $types as $type ) : ?>
          <option><?php echo esc_html( $type ); ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="field">
      <label for="q-suburb"><?php echo esc_html__( 'Project suburb', 'domesca-homes' ); ?></label>
      <input id="q-suburb" name="suburb" type="text" placeholder="e.g. Hillside">
    </div>
  </div>
  <div class="field">
    <label for="q-stage"><?php echo esc_html__( 'What stage are you at?', 'domesca-homes' ); ?></label>
    <select id="q-stage" name="stage">
      <?php foreach ( $stages as $stage ) : ?>
        <option><?php echo esc_html( $stage ); ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="field">
    <label for="q-msg"><?php echo esc_html__( 'Tell us about your project', 'domesca-homes' ); ?></label>
    <textarea id="q-msg" name="message" rows="3" placeholder="Site details, block size, budget range, timing…"></textarea>
  </div>
  <button class="btn btn--block btn--lg" type="submit">
    <?php echo esc_html__( 'Send My Enquiry', 'domesca-homes' ); ?>
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
  </button>
  <p class="form-status" role="status" aria-live="polite"></p>
  <?php dsc_form_note( true ); ?>
</form>
