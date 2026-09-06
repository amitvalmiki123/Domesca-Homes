<?php
/**
 * Landing projects.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$proj     = $defaults['projects'];

$shared = dsc_shared_projects();

// Order of precedence: shared (global) > this page's saved row > theme defaults.
if ( is_array( $section ) && ! empty( $section ) ) {
	$proj = array_merge( $proj, $section );
}
if ( ! empty( $shared ) ) {
	$proj = array_merge( $proj, $shared );
}

$key = function( $name, $fallback ) use ( $proj ) {
	return dsc_row_key( $proj, $name, $fallback );
};

$items = $key( 'items', $proj['items'] );
if ( ! is_array( $items ) ) {
	$items = $proj['items'];
}
?>
<section class="sec" id="portfolio">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <p class="eyebrow"><?php echo esc_html( $key( 'eyebrow', $proj['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $proj['title'] ) ); ?></h2>
      <p class="lead"><?php echo esc_html( $key( 'lead', $proj['lead'] ) ); ?></p>
    </div>

    <div class="proj__grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php
        $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' );
        $class = trim( (string) dsc_row_key( $item, 'class', '' ) );
        ?>
        <figure class="tile rv<?php echo esc_attr( $delay ); ?> <?php echo esc_attr( $class ); ?>">
          <?php dsc_row_image( $item, 'image', dsc_row_key( $item, 'image_fallback', 'living-open-plan.jpg' ), dsc_row_key( $item, 'alt', '' ), array( 'loading' => 'lazy' ) ); ?>
          <figcaption class="tile__ov"><span><?php echo wp_kses_post( dsc_row_key( $item, 'category', dsc_row_key( $item, 'cat', '' ) ) ); ?></span><b><?php echo wp_kses_post( dsc_row_key( $item, 'title', '' ) ); ?></b></figcaption>
        </figure>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
