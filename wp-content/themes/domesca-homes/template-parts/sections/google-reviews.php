<?php
/**
 * Google Reviews section template.
 *
 * Used on inner pages (About, Services, Service Detail, Portfolio, Location)
 * and available via flexible content or direct inclusion.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$section_data = isset( $args['section'] ) && is_array( $args['section'] ) ? $args['section'] : array();
$default_grev = dsc_default_grev();

$eyebrow    = dsc_row_key( $section_data, 'eyebrow', dsc_row_key( $default_grev, 'eyebrow', 'Google Reviews' ) );
$title      = dsc_row_key( $section_data, 'title', dsc_row_key( $default_grev, 'title', 'What our clients <span class="serif-accent">say.</span>' ) );
$lead       = dsc_row_key( $section_data, 'lead', dsc_row_key( $default_grev, 'lead', 'Reviews published by Domesca Homes clients.' ) );
$score      = dsc_row_key( $section_data, 'score', dsc_row_key( $default_grev, 'score', '5.0' ) );
$count      = dsc_row_key( $section_data, 'count', dsc_row_key( $default_grev, 'count', '15+' ) );
$search_url = dsc_row_key( $section_data, 'search_url', dsc_row_key( $default_grev, 'search_url', 'https://www.google.com/search?q=Domesca+Homes+Hillside' ) );
$write_url  = dsc_row_key( $section_data, 'write_url', dsc_row_key( $default_grev, 'write_url', 'https://www.google.com/search?q=Domesca+Homes+Hillside' ) );
$reviews    = dsc_row_key( $section_data, 'reviews', dsc_row_key( $default_grev, 'reviews', array() ) );
$foot       = dsc_row_key( $section_data, 'foot', dsc_row_key( $default_grev, 'foot', 'Whether it’s a family home or an investment development, we take the time to understand your goals.' ) );
$foot_btn   = dsc_row_key( $section_data, 'foot_btn', dsc_row_key( $default_grev, 'foot_btn', array( 'title' => 'Get Your Free Quote', 'url' => '#enquire' ) ) );
$foot_btn_title = is_array( $foot_btn ) ? dsc_row_key( $foot_btn, 'title', 'Get Your Free Quote' ) : (string) $foot_btn;
$foot_btn_url   = is_array( $foot_btn ) ? dsc_row_key( $foot_btn, 'url', '#enquire' ) : '#enquire';
?>
<section class="sec sec--dark" id="testimonials">
  <div class="wrap wrap-wide">
    <div class="sec-head rv">
      <?php if ( $eyebrow ) : ?>
        <p class="eyebrow eyebrow--light"><?php echo esc_html( $eyebrow ); ?></p>
      <?php endif; ?>
      <h2 class="d2"><?php echo wp_kses_post( $title ); ?></h2>
      <?php if ( $lead ) : ?>
        <p class="lead"><?php echo esc_html( $lead ); ?></p>
      <?php endif; ?>
    </div>

    <div class="grev">
      <aside class="grev__summary rv">
        <div class="grev__brand">
          <svg width="24" height="24" viewBox="0 0 48 48" aria-hidden="true">
            <path fill="#4285F4" d="M45.1 24.5c0-1.6-.1-3.1-.4-4.5H24v8.5h11.8c-.5 2.7-2.1 5-4.4 6.6v5.5h7.1c4.2-3.8 6.6-9.5 6.6-16.1z"/>
            <path fill="#34A853" d="M24 46c6 0 11-2 14.6-5.4l-7.1-5.5c-2 1.3-4.5 2.1-7.5 2.1-5.8 0-10.6-3.9-12.4-9.1H4.3v5.7C7.9 41 15.4 46 24 46z"/>
            <path fill="#FBBC05" d="M11.6 28.1c-.4-1.3-.7-2.7-.7-4.1s.3-2.8.7-4.1v-5.7H4.3C2.8 17.1 2 20.4 2 24s.8 6.9 2.3 9.8l7.3-5.7z"/>
            <path fill="#EA4335" d="M24 10.8c3.3 0 6.2 1.1 8.5 3.3l6.3-6.3C35 4.2 30 2 24 2 15.4 2 7.9 7 4.3 14.2l7.3 5.7c1.8-5.2 6.6-9.1 12.4-9.1z"/>
          </svg>
          <b><?php echo esc_html__( 'Google Reviews', 'domesca-homes' ); ?></b>
        </div>

        <p class="grev__score" style="margin:0">
          <b><span class="ph" data-gbp="rating"><?php echo esc_html( $score ); ?></span></b>
          <span><?php echo esc_html__( 'out of 5', 'domesca-homes' ); ?></span>
        </p>

        <div class="grev__stars" aria-hidden="true">
          <?php for ( $i = 0; $i < 5; $i++ ) : ?>
            <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1L12 2z"/></svg>
          <?php endfor; ?>
        </div>

        <p class="grev__count"><?php echo sprintf( esc_html__( 'Based on %s Google reviews', 'domesca-homes' ), '<span class="ph" data-gbp="count">' . esc_html( $count ) . '</span>' ); ?></p>

        <div class="grev__actions">
          <?php if ( $search_url ) : ?>
            <a class="btn" href="<?php echo esc_url( $search_url ); ?>" target="_blank" rel="noopener">
              <?php echo esc_html__( 'See All Reviews', 'domesca-homes' ); ?>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14 21 3"/></svg>
            </a>
          <?php endif; ?>
          <?php if ( $write_url ) : ?>
            <a class="btn btn--ghost" href="<?php echo esc_url( $write_url ); ?>" target="_blank" rel="noopener"><?php echo esc_html__( 'Write a Review', 'domesca-homes' ); ?></a>
          <?php endif; ?>
        </div>
      </aside>

      <div class="grev__list">
        <?php if ( is_array( $reviews ) ) : foreach ( $reviews as $idx => $review ) :
          $delay_class = ( 1 === $idx ) ? 'rv-d1' : ( ( $idx >= 2 ) ? 'rv-d2' : '' );
          $initial     = dsc_row_key( $review, 'initial', 'D' );
          $color       = dsc_row_key( $review, 'color', '#1a73e8' );
          $rname       = dsc_row_key( $review, 'name', 'Client' );
          $role        = dsc_row_key( $review, 'role', 'Domesca Homes client' );
          $quote       = dsc_row_key( $review, 'quote', '' );
          $more        = dsc_row_key( $review, 'more', '' );
          $more_id     = 'grev-more-' . ( $idx + 1 );
        ?>
          <figure class="grevc rv <?php echo esc_attr( $delay_class ); ?>">
            <div class="grevc__head">
              <span class="grevc__av" style="background:<?php echo esc_attr( $color ); ?>" aria-hidden="true"><?php echo esc_html( $initial ); ?></span>
              <span class="grevc__who"><b><?php echo esc_html( $rname ); ?></b><span><?php echo esc_html( $role ); ?></span></span>
              <span class="grevc__g" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 48 48">
                  <path fill="#4285F4" d="M45.1 24.5c0-1.6-.1-3.1-.4-4.5H24v8.5h11.8c-.5 2.7-2.1 5-4.4 6.6v5.5h7.1c4.2-3.8 6.6-9.5 6.6-16.1z"/>
                  <path fill="#34A853" d="M24 46c6 0 11-2 14.6-5.4l-7.1-5.5c-2 1.3-4.5 2.1-7.5 2.1-5.8 0-10.6-3.9-12.4-9.1H4.3v5.7C7.9 41 15.4 46 24 46z"/>
                  <path fill="#FBBC05" d="M11.6 28.1c-.4-1.3-.7-2.7-.7-4.1s.3-2.8.7-4.1v-5.7H4.3C2.8 17.1 2 20.4 2 24s.8 6.9 2.3 9.8l7.3-5.7z"/>
                  <path fill="#EA4335" d="M24 10.8c3.3 0 6.2 1.1 8.5 3.3l6.3-6.3C35 4.2 30 2 24 2 15.4 2 7.9 7 4.3 14.2l7.3 5.7c1.8-5.2 6.6-9.1 12.4-9.1z"/>
                </svg>
              </span>
            </div>
            <div class="grevc__stars" role="img" aria-label="<?php echo esc_attr__( '5 out of 5 stars', 'domesca-homes' ); ?>">
              <?php for ( $s = 0; $s < 5; $s++ ) : ?>
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1L12 2z"/></svg>
              <?php endfor; ?>
            </div>
            <blockquote>
              <p><?php echo esc_html( $quote ); ?></p>
              <?php if ( ! empty( $more ) ) : ?>
                <div class="tmc__more" id="<?php echo esc_attr( $more_id ); ?>">
                  <div>
                    <p><?php echo esc_html( $more ); ?></p>
                  </div>
                </div>
              <?php endif; ?>
            </blockquote>
            <?php if ( ! empty( $more ) ) : ?>
              <button class="more-btn" type="button" data-more="<?php echo esc_attr( $more_id ); ?>" aria-expanded="false" aria-controls="<?php echo esc_attr( $more_id ); ?>">
                <span class="lbl-more"><?php echo esc_html__( 'Read full review', 'domesca-homes' ); ?></span>
                <span class="lbl-less"><?php echo esc_html__( 'Show less', 'domesca-homes' ); ?></span>
                <svg width="12" height="12" viewBox="0 0 12 8" fill="currentColor" aria-hidden="true"><path d="M1.4 0 6 4.6 10.6 0 12 1.4 6 7.4 0 1.4z"/></svg>
              </button>
            <?php endif; ?>
          </figure>
        <?php endforeach; endif; ?>
      </div>
    </div>

    <?php if ( $foot || $foot_btn_title ) : ?>
      <div class="tm__foot rv">
        <?php if ( $foot ) : ?>
          <p><?php echo wp_kses_post( $foot ); ?></p>
        <?php endif; ?>
        <?php if ( $foot_btn_title ) : ?>
          <a class="btn btn--white" href="<?php echo esc_url( $foot_btn_url ); ?>"><?php echo esc_html( $foot_btn_title ); ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
