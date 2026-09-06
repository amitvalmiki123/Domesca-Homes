<?php
/**
 * Landing / home Google Reviews section (ads.html `.grev` markup).
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section  = isset( $args['section'] ) ? $args['section'] : array();
$defaults = dsc_default_landing();
$tm       = $defaults['testimonials'];
$key      = function( $name, $fallback ) use ( $section, $tm ) {
	return dsc_row_key( $section, $name, $fallback );
};

$rating = $key( 'rating', $tm['rating'] );
$count  = $key( 'count', $tm['count'] );
$url    = $key( 'url', $tm['url'] );

$items = $key( 'items', $tm['items'] );
if ( ! is_array( $items ) ) {
	$items = $tm['items'];
}

$google_g = static function ( $size = 18 ) {
	$view = 48;
	$s    = absint( $size );
	return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 ' . $view . ' ' . $view . '" aria-hidden="true">'
		. '<path fill="#4285F4" d="M45.1 24.5c0-1.6-.1-3.1-.4-4.5H24v8.5h11.8c-.5 2.7-2.1 5-4.4 6.6v5.5h7.1c4.2-3.8 6.6-9.5 6.6-16.1z"/>'
		. '<path fill="#34A853" d="M24 46c6 0 11-2 14.6-5.4l-7.1-5.5c-2 1.3-4.5 2.1-7.5 2.1-5.8 0-10.6-3.9-12.4-9.1H4.3v5.7C7.9 41 15.4 46 24 46z"/>'
		. '<path fill="#FBBC05" d="M11.6 28.1c-.4-1.3-.7-2.7-.7-4.1s.3-2.8.7-4.1v-5.7H4.3C2.8 17.1 2 20.4 2 24s.8 6.9 2.3 9.8l7.3-5.7z"/>'
		. '<path fill="#EA4335" d="M24 10.8c3.3 0 6.2 1.1 8.5 3.3l6.3-6.3C35 4.2 30 2 24 2 15.4 2 7.9 7 4.3 14.2l7.3 5.7c1.8-5.2 6.6-9.1 12.4-9.1z"/>'
		. '</svg>';
};

$star = static function ( $size = 15 ) {
	$s = absint( $size );
	return '<svg width="' . $s . '" height="' . $s . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1L12 2z"/></svg>';
};

$avatar_colors = array( '#1a73e8', '#e8710a', '#137333' );
?>
<section class="sec tm" id="testimonials">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <p class="eyebrow eyebrow--light"><?php echo esc_html( $key( 'eyebrow', $tm['eyebrow'] ) ); ?></p>
      <h2 class="d2"><?php echo wp_kses_post( $key( 'title', $tm['title'] ) ); ?></h2>
      <p class="lead"><?php echo esc_html( $key( 'lead', $tm['lead'] ) ); ?></p>
    </div>

    <div class="grev">
      <aside class="grev__summary rv">
        <div class="grev__brand">
          <?php echo $google_g( 24 ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
          <b><?php echo esc_html__( 'Google Reviews', 'domesca-homes' ); ?></b>
        </div>

        <p class="grev__score" style="margin:0">
          <b><span class="ph" data-gbp="rating"><?php echo esc_html( $rating ); ?></span></b>
          <span><?php echo esc_html__( 'out of 5', 'domesca-homes' ); ?></span>
        </p>

        <div class="grev__stars" aria-hidden="true">
          <?php for ( $s = 0; $s < 5; $s++ ) : ?>
            <?php echo $star( 17 ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
          <?php endfor; ?>
        </div>

        <p class="grev__count"><?php echo esc_html__( 'Based on', 'domesca-homes' ); ?> <span class="ph" data-gbp="count"><?php echo esc_html( $count ); ?></span> <?php echo esc_html__( 'Google reviews', 'domesca-homes' ); ?></p>

        <div class="grev__actions">
          <a class="btn" href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener">
            <?php echo esc_html__( 'See All Reviews', 'domesca-homes' ); ?>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14 21 3"/></svg>
          </a>
          <a class="btn btn--ghost" href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener"><?php echo esc_html__( 'Write a Review', 'domesca-homes' ); ?></a>
        </div>
      </aside>

      <div class="grev__list">
        <?php foreach ( $items as $i => $item ) : ?>
          <?php
          $delay = 0 === $i ? '' : ( 1 === $i ? ' rv-d1' : ' rv-d2' );
          $more  = dsc_row_key( $item, 'more', '' );
          $init  = dsc_row_key( $item, 'initials', '' );
          $name  = dsc_row_key( $item, 'name', '' );
          $role  = dsc_row_key( $item, 'role', '' );
          $bg    = dsc_row_key( $item, 'avatar_bg', isset( $avatar_colors[ $i ] ) ? $avatar_colors[ $i ] : '#1a73e8' );
          $id    = 'grev-more-' . ( $i + 1 );
          ?>
          <figure class="grevc rv<?php echo esc_attr( $delay ); ?>">
            <div class="grevc__head">
              <span class="grevc__av" style="background:<?php echo esc_attr( $bg ); ?>" aria-hidden="true"><?php echo esc_html( $init ); ?></span>
              <span class="grevc__who"><b><?php echo esc_html( $name ); ?></b><span><?php echo esc_html( $role ); ?></span></span>
              <span class="grevc__g" aria-hidden="true"><?php echo $google_g(); // phpcs:ignore WordPress.Security.EscapeOutput ?></span>
            </div>
            <div class="grevc__stars" role="img" aria-label="<?php echo esc_attr__( '5 out of 5 stars', 'domesca-homes' ); ?>">
              <?php for ( $s = 0; $s < 5; $s++ ) : ?>
                <?php echo $star(); // phpcs:ignore WordPress.Security.EscapeOutput ?>
              <?php endfor; ?>
            </div>
            <blockquote>
              <p><?php echo wp_kses_post( dsc_row_key( $item, 'quote', '' ) ); ?></p>
              <?php if ( wp_strip_all_tags( $more ) ) : ?>
                <div class="tmc__more" id="<?php echo esc_attr( $id ); ?>"><div>
                  <?php echo wp_kses_post( $more ); ?>
                </div></div>
              <?php endif; ?>
            </blockquote>
            <?php if ( wp_strip_all_tags( $more ) ) : ?>
              <button class="more-btn" type="button" data-more="<?php echo esc_attr( $id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr( $id ); ?>">
                <span class="lbl-more"><?php echo esc_html__( 'Read full review', 'domesca-homes' ); ?></span><span class="lbl-less"><?php echo esc_html__( 'Show less', 'domesca-homes' ); ?></span>
                <svg width="12" height="12" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
              </button>
            <?php endif; ?>
          </figure>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="tm__foot rv">
      <p><?php echo esc_html( $key( 'foot', $tm['foot'] ) ); ?></p>
      <a class="btn btn--white" href="#enquiry-form"><?php echo esc_html( $key( 'foot_button', $tm['foot_btn'] ) ); ?></a>
    </div>
  </div>
</section>
