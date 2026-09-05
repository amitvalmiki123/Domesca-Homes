<?php
/**
 * Projects gallery grid (landing + home).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$proj     = isset( $defaults['projects'] ) && is_array( $defaults['projects'] ) ? $defaults['projects'] : array();

$eyebrow = dsc_row_key( $section, 'eyebrow', isset( $proj['eyebrow'] ) ? $proj['eyebrow'] : 'Completed Works' );
$title   = dsc_row_key( $section, 'title', isset( $proj['title'] ) ? $proj['title'] : 'Homes we&rsquo;ve <span class="serif-accent">delivered.</span>' );
$lead    = dsc_row_key( $section, 'lead', isset( $proj['lead'] ) ? $proj['lead'] : 'A selection of completed Domesca Homes projects across Melbourne.' );

$items = dsc_row_key( $section, 'items', isset( $proj['items'] ) ? $proj['items'] : array() );
if ( ! is_array( $items ) || empty( $items ) ) {
	$items = isset( $proj['items'] ) ? $proj['items'] : array();
}
?>
<section class="sec" id="portfolio">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
      <?php if ( $lead ) : ?>
        <p class="lead"><?php echo esc_html( $lead ); ?></p>
      <?php endif; ?>
    </div>

    <div class="proj__grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php
        $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' );
        $class = trim( (string) dsc_row_key( $item, 'class', '' ) );
        $cat   = dsc_row_key( $item, 'category', dsc_row_key( $item, 'cat', 'Completed Work' ) );
        $t     = dsc_row_key( $item, 'title', '' );
        $img   = dsc_row_key( $item, 'image', 'living-open-plan.jpg' );
        $alt   = dsc_row_key( $item, 'alt', $t . ' — Domesca Homes' );
        $data  = dsc_image_data( $img, array( 'default' => 'living-open-plan.jpg', 'alt' => $alt ) );
        ?>
        <figure class="tile rv<?php echo esc_attr( $delay ); ?> <?php echo esc_attr( $class ); ?>">
          <img src="<?php echo esc_url( $data['url'] ); ?>" alt="<?php echo esc_attr( $data['alt'] ); ?>" width="<?php echo esc_attr( $data['width'] ); ?>" height="<?php echo esc_attr( $data['height'] ); ?>" loading="lazy">
          <figcaption class="tile__ov">
            <span><?php echo wp_kses_post( $cat ); ?></span>
            <b><?php echo wp_kses_post( $t ); ?></b>
          </figcaption>
        </figure>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
