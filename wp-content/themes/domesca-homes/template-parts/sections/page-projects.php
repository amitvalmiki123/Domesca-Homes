<?php
/**
 * Portfolio / projects grid with filter chips (new HTML `.portfolio`).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_inner_portfolio();
$key      = function ( $name, $fallback ) use ( $section, $defaults ) {
	return dsc_row_key( $section, $name, $fallback );
};

$eyebrow = $key( 'eyebrow', 'Portfolio &mdash; Photo Gallery' );
$title   = $key( 'title', 'Homes, townhouses and renovations we&rsquo;ve <span class="serif-accent">delivered.</span>' );
$lead    = $key( 'lead', 'A selection of completed Domesca Homes projects across Melbourne &mdash; new builds, townhouse and unit developments, and full renovations.' );
$filters = $key( 'filters', $defaults['filters'] );
if ( ! is_array( $filters ) ) {
	$filters = $defaults['filters'];
}
$items = $key( 'items', $defaults['items'] );
if ( ! is_array( $items ) ) {
	$items = $defaults['items'];
}
?>
<section class="sec" id="portfolio">
  <div class="wrap wrap-wide">
    <div class="svc-head">
      <div class="sec-head rv">
        <p class="eyebrow"><?php echo wp_kses_post( $eyebrow ); ?></p>
        <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
        <p class="lead"><?php echo esc_html( $lead ); ?></p>
      </div>
    </div>

    <?php if ( ! empty( $filters ) ) : ?>
      <div class="proj__filters rv" role="group" aria-label="<?php echo esc_attr__( 'Filter projects by type', 'domesca-homes' ); ?>">
        <?php $first = true; foreach ( $filters as $filter ) : ?>
          <?php $fkey = dsc_row_key( $filter, 'key', 'all' ); ?>
          <button class="chip" type="button" data-filter="<?php echo esc_attr( $fkey ); ?>" aria-pressed="<?php echo $first ? 'true' : 'false'; ?>"><?php echo esc_html( dsc_row_key( $filter, 'label', $fkey ) ); ?></button>
        <?php $first = false; endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="proj__grid" id="proj-grid">
      <?php $i = 0; foreach ( $items as $item ) : ?>
        <?php
        $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' );
        $class = trim( (string) dsc_row_key( $item, 'class', '' ) );
        $cats  = dsc_row_key( $item, 'filters', '' );
        ?>
        <figure class="tile rv<?php echo esc_attr( $delay ); ?> <?php echo esc_attr( $class ); ?>"<?php echo $cats ? ' data-cat="' . esc_attr( $cats ) . '"' : ''; ?>>
          <?php dsc_row_image( $item, 'image', dsc_row_key( $item, 'image_fallback', 'living-open-plan.jpg' ), dsc_row_key( $item, 'alt', '' ), array( 'loading' => 'lazy' ) ); ?>
          <figcaption class="tile__ov"><span><?php echo wp_kses_post( dsc_row_key( $item, 'category', '' ) ); ?></span><b><?php echo wp_kses_post( dsc_row_key( $item, 'title', '' ) ); ?></b></figcaption>
        </figure>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>
