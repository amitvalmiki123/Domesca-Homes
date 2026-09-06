<?php
/**
 * Inner page hero / banner (converted from the new HTML `.pbanner`).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section = isset( $args['section'] ) ? $args['section'] : array();
$key     = function ( $name, $fallback ) use ( $section ) {
	return dsc_row_key( $section, $name, $fallback );
};

$title   = $key( 'title', get_the_title() );
$plain   = (bool) $key( 'plain', false );
$image   = $key( 'image', 'exterior-townhouse-dusk.jpg' );
$img_alt = $key( 'alt', '' );
$sub     = $key( 'sub', '' );

$btn1_label = $key( 'btn1_label', '' );
$btn1_url   = $key( 'btn1_url', '#banner-form' );
$btn2_label = $key( 'btn2_label', '' );
$btn2_url   = $key( 'btn2_url', 'tel:' . dsc_phone() );

$show_form = (bool) $key( 'show_form', ! $plain );
$form_eyebrow = $key( 'form_eyebrow', __( 'Free & no-obligation', 'domesca-homes' ) );
$form_title   = $key( 'form_title', __( 'Talk To Our Team', 'domesca-homes' ) );
$form_text    = $key( 'form_text', __( 'Share a few details about your project and our team will review your needs and respond with the next steps.', 'domesca-homes' ) );
?>
<section class="pbanner<?php echo $plain ? ' pbanner--plain' : ''; ?>" id="enquire">
  <div class="pbanner__media" aria-hidden="true">
    <?php dsc_row_image( $section, 'image', $image, $img_alt, array( 'fetchpriority' => 'high' ) ); ?>
  </div>
  <div class="pbanner__scrim" aria-hidden="true"></div>

  <div class="wrap wrap-wide pbanner__in">
    <div class="pbanner__copy">
      <?php dsc_render_breadcrumb(); ?>
      <h1 class="d2 rv"><?php echo wp_kses_post( $title ); ?></h1>
      <?php if ( $sub ) : ?>
        <p class="pbanner__sub rv rv-d1"><?php echo wp_kses_post( $sub ); ?></p>
      <?php endif; ?>

      <div class="hero__actions rv rv-d2">
        <?php if ( $btn1_label ) : ?>
          <a class="btn btn--lg" href="<?php echo esc_url( $btn1_url ); ?>">
            <?php echo esc_html( $btn1_label ); ?>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        <?php endif; ?>
        <?php if ( $btn2_label ) : ?>
          <a class="btn btn--lg btn--on-dark" href="<?php echo esc_url( $btn2_url ); ?>">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
            <?php echo esc_html( $btn2_label ); ?>
          </a>
        <?php endif; ?>
      </div>
    </div>

    <?php if ( $show_form ) : ?>
      <div class="qform rv rv-d2" id="banner-form">
        <div class="qform__head">
          <p class="eyebrow"><?php echo esc_html( $form_eyebrow ); ?></p>
          <h2><?php echo esc_html( $form_title ); ?></h2>
          <p><?php echo esc_html( $form_text ); ?></p>
        </div>
        <?php get_template_part( 'template-parts/form/enquiry' ); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
