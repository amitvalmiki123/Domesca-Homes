<?php
/**
 * Site header.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$phone    = dsc_phone();
$phone_tx = dsc_phone_display();
$email    = dsc_email();
$tagline  = dsc_tagline();
$facebook = dsc_facebook();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( dsc_is_landing() ) : ?>
<meta name="theme-color" content="#1653a6">
<meta name="robots" content="noindex, follow">
<?php else : ?>
<meta name="theme-color" content="#1653a6">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class( dsc_is_landing() ? 'is-landing' : '' ); ?>>
<?php wp_body_open(); ?>
<a class="skip" href="#main"><?php esc_html_e( 'Skip to main content', 'domesca-homes' ); ?></a>

<div class="util">
  <div class="wrap wrap-wide util__in">
    <span class="util__tag"><i></i> <?php echo esc_html( $tagline ); ?></span>
    <div class="util__links">
      <a href="mailto:<?php echo esc_attr( $email ); ?>">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg>
        <?php echo esc_html( $email ); ?>
      </a>
      <span class="util__sep" aria-hidden="true"></span>
      <a href="tel:<?php echo esc_attr( $phone ); ?>">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
        <?php echo esc_html__( 'Call Us Now ', 'domesca-homes' ); ?><?php echo esc_html( $phone_tx ); ?>
      </a>
      <?php if ( $facebook ) : ?>
      <span class="util__sep" aria-hidden="true"></span>
      <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener" aria-label="<?php echo esc_attr__( 'Domesca Homes on Facebook', 'domesca-homes' ); ?>">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 9V7c0-1 .2-1.5 1.6-1.5H17V2.1A22 22 0 0 0 14.6 2C11.9 2 10 3.7 10 6.7V9H7v4h3v9h4v-9h3l.5-4H14Z"/></svg>
      </a>
      <?php endif; ?>
    </div>
  </div>
</div>

<header class="hdr" id="hdr">
  <div class="wrap wrap-wide hdr__in">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Domesca Homes — home">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <img src="<?php echo esc_url( DSC_THEME_URI . '/assets/images/logo.png' ); ?>" alt="Domesca Homes" width="442" height="174">
      <?php endif; ?>
    </a>

    <?php dsc_render_desktop_nav( 'primary' ); ?>

    <div class="hdr__cta">
      <a class="hdr__phone" href="tel:<?php echo esc_attr( $phone ); ?>">
        <span class="hdr__phone-ic" aria-hidden="true">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
        </span>
        <span class="hdr__phone-tx"><small><?php echo esc_html__( 'Call us now', 'domesca-homes' ); ?></small><b><?php echo esc_html( $phone_tx ); ?></b></span>
      </a>
      <a class="btn btn--dark" href="#enquire"><?php echo esc_html__( 'Get a Free Quote', 'domesca-homes' ); ?></a>
      <a class="hdr__call" href="tel:<?php echo esc_attr( $phone ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Call us on %s', 'domesca-homes' ), $phone_tx ) ); ?>">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
      </a>
      <button class="burger" type="button" aria-expanded="false" aria-controls="mnav" aria-label="Open menu"><span></span></button>
    </div>
  </div>
</header>

<div class="mnav" id="mnav">
  <div class="mnav__scrim" data-mnav-close></div>
  <div class="mnav__panel" role="dialog" aria-modal="true" aria-label="Site menu">
    <div class="mnav__top">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <img src="<?php echo esc_url( DSC_THEME_URI . '/assets/images/logo.png' ); ?>" alt="Domesca Homes" width="442" height="174">
      <?php endif; ?>
      <button class="mnav__close" type="button" data-mnav-close aria-label="Close menu">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 6 6 18M6 6l12 12"/></svg>
      </button>
    </div>
    <?php dsc_render_mobile_nav( 'primary' ); ?>
    <div class="mnav__foot">
      <a class="btn" href="#enquire"><?php echo esc_html__( 'Get a Free Quote', 'domesca-homes' ); ?></a>
      <a class="contact-line" href="tel:<?php echo esc_attr( $phone ); ?>">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
        <?php echo esc_html( $phone_tx ); ?>
      </a>
      <a class="contact-line" href="mailto:<?php echo esc_attr( $email ); ?>">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg>
        <?php echo esc_html( $email ); ?>
      </a>
    </div>
  </div>
</div>

<main id="main">
