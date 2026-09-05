<?php
/**
 * Page Banner section — inner pages header with breadcrumb, title, actions and optional form.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();

$title       = dsc_row_key( $section, 'title' ) ?: get_the_title();
$sub         = dsc_row_key( $section, 'sub' ) ?: dsc_field( 'banner_sub', '' );
$image       = dsc_row_key( $section, 'image' ) ?: dsc_field( 'banner_image', '' );
$plain       = dsc_row_key( $section, 'plain', false );
$crumb_title = dsc_row_key( $section, 'crumb_title' ) ?: get_the_title();

if ( ! $sub ) {
	$sub = get_the_excerpt() ?: dsc_tagline() . ' — Custom homes, townhouse and unit developments, renovations and extensions across Melbourne.';
}

$img_data = dsc_image_data( $image, array(
	'default' => 'exterior-townhouse-dusk.jpg',
	'alt'     => $title . ' — Domesca Homes',
) );

$phone    = dsc_phone();
$phone_tx = dsc_phone_display();
$banner_classes = 'pbanner' . ( $plain ? ' pbanner--plain' : '' );
?>
<section class="<?php echo esc_attr( $banner_classes ); ?>" id="enquire">
  <div class="pbanner__media" aria-hidden="true">
    <img src="<?php echo esc_url( $img_data['url'] ); ?>" alt="<?php echo esc_attr( $img_data['alt'] ); ?>" width="<?php echo esc_attr( $img_data['width'] ); ?>" height="<?php echo esc_attr( $img_data['height'] ); ?>" fetchpriority="high">
  </div>
  <div class="pbanner__scrim" aria-hidden="true"></div>

  <div class="wrap wrap-wide pbanner__in">
    <div class="pbanner__copy">
      <nav class="crumb" aria-label="Breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <?php if ( is_page() && wp_get_post_parent_id( get_the_ID() ) ) : 
          $parent_id = wp_get_post_parent_id( get_the_ID() );
        ?>
          <span aria-hidden="true">/</span>
          <a href="<?php echo esc_url( get_permalink( $parent_id ) ); ?>"><?php echo esc_html( get_the_title( $parent_id ) ); ?></a>
        <?php endif; ?>
        <span aria-hidden="true">/</span>
        <span aria-current="page"><?php echo esc_html( $crumb_title ); ?></span>
      </nav>
      <h1 class="d2 rv"><?php echo wp_kses_post( $title ); ?></h1>
      <?php if ( $sub ) : ?>
        <p class="pbanner__sub rv rv-d1"><?php echo wp_kses_post( $sub ); ?></p>
      <?php endif; ?>
      <div class="hero__actions rv rv-d2">
        <?php if ( ! $plain ) : ?>
        <a class="btn btn--lg" href="#banner-form">
          <?php esc_html_e( 'Request Your Free Quote', 'domesca-homes' ); ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn--lg btn--on-dark" href="tel:<?php echo esc_attr( $phone ); ?>">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
          <?php echo esc_html__( 'Call ', 'domesca-homes' ) . esc_html( $phone_tx ); ?>
        </a>
        <?php else : ?>
        <a class="btn btn--lg" href="tel:<?php echo esc_attr( $phone ); ?>">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
          <?php echo esc_html__( 'Call ', 'domesca-homes' ) . esc_html( $phone_tx ); ?>
        </a>
        <a class="btn btn--lg btn--on-dark" href="#enquire"><?php esc_html_e( 'Send an Enquiry', 'domesca-homes' ); ?></a>
        <?php endif; ?>
      </div>
    </div>

    <?php if ( ! $plain ) : ?>
    <div class="qform rv rv-d2" id="banner-form">
      <?php get_template_part( 'template-parts/form/enquiry' ); ?>
    </div>
    <?php endif; ?>
  </div>
</section>
