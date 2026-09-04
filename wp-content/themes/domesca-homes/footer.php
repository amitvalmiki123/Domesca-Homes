<?php
/**
 * Site footer + mobile action bar.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

$phone    = dsc_phone();
$phone_tx = dsc_phone_display();
$email    = dsc_email();
$footer_about = dsc_opt( 'footer_about', 'Lifting Properties, Elevating Standards. A Melbourne-based building company delivering custom homes, renovations, knockdown rebuilds and multi-unit developments across Melbourne&rsquo;s north and west since 2013.' );
$copyright = dsc_copyright();
$facebook  = dsc_facebook();
$address   = dsc_opt( 'address', "Hillside, Victoria 3037\nServicing Melbourne's north & west" );
$address_url = dsc_address_url();
$touch_title = dsc_footer_touch_title();
$quote_text  = dsc_footer_quote_text();
?>
<footer class="ft">
  <div class="wrap wrap-wide">
    <div class="ft__top">
      <div class="ft__brand">
        <div class="ft__logo">
          <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <img src="<?php echo esc_url( DSC_THEME_URI . '/assets/images/logo.png' ); ?>" alt="Domesca Homes" width="442" height="174">
          <?php endif; ?>
        </div>
        <div class="ft__about"><?php echo wp_kses_post( $footer_about ); ?></div>
        <?php if ( $facebook ) : ?>
        <div class="ft__soc">
          <a href="<?php echo esc_url( $facebook ); ?>" target="_blank" rel="noopener" aria-label="Domesca Homes on Facebook">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 9V7c0-1 .2-1.5 1.6-1.5H17V2.1A22 22 0 0 0 14.6 2C11.9 2 10 3.7 10 6.7V9H7v4h3v9h4v-9h3l.5-4H14Z"/></svg>
          </a>
        </div>
        <?php endif; ?>
      </div>

      <?php if ( dsc_render_footer_columns( 'footer' ) ) : ?>
        <?php // WordPress Appearance → Menus → Footer menu is used for the columns. ?>
      <?php else : ?>
        <nav class="ft__col" aria-label="Services">
          <h4><button class="ft__toggle" type="button" data-ft-toggle aria-expanded="true" aria-controls="ft-services">Services<span class="ft__ic" aria-hidden="true"></span></button></h4>
          <div class="ft__panel" id="ft-services">
            <ul class="ft__nav">
              <li><a href="#services">New Home Construction</a></li>
              <li><a href="#services">Townhouse Developments</a></li>
              <li><a href="#services">Unit Developments</a></li>
              <li><a href="#services">Renovations &amp; Extensions</a></li>
              <li><a href="#services">Kitchen Renovations</a></li>
              <li><a href="#services">Bathroom Renovations</a></li>
              <li><a href="#services">Laundry Renovations</a></li>
              <li><a href="#services">House Extensions</a></li>
            </ul>
          </div>
        </nav>

        <nav class="ft__col" aria-label="Company">
          <h4><button class="ft__toggle" type="button" data-ft-toggle aria-expanded="true" aria-controls="ft-company">Company<span class="ft__ic" aria-hidden="true"></span></button></h4>
          <div class="ft__panel" id="ft-company">
            <ul class="ft__nav">
              <li><a href="#about">About Us</a></li>
              <li><a href="#process">Plans &amp; Design</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
              <li><a href="#areas">Areas We Build</a></li>
              <li><a href="#faq">FAQs</a></li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </div>
          </nav>
      <?php endif; ?>

      <div class="ft__col">
        <h4><button class="ft__toggle" type="button" data-ft-toggle aria-expanded="true" aria-controls="ft-touch"><?php echo esc_html( $touch_title ); ?><span class="ft__ic" aria-hidden="true"></span></button></h4>
        <div class="ft__panel" id="ft-touch">
          <ul class="ft__contact">
            <li>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
              <a href="tel:<?php echo esc_attr( $phone ); ?>"><?php echo esc_html( $phone_tx ); ?></a>
            </li>
            <li>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6 10-6"/></svg>
              <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
            </li>
            <li>
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <?php if ( $address_url ) : ?>
                <a href="<?php echo esc_url( $address_url ); ?>" target="_blank" rel="noopener"><?php echo nl2br( esc_html( $address ) ); ?></a>
              <?php else : ?>
                <span><?php echo nl2br( esc_html( $address ) ); ?></span>
              <?php endif; ?>
            </li>
          </ul>
        </div>
        <a class="btn btn--block ft__cta" href="#enquire"><?php echo esc_html( $quote_text ); ?></a>
      </div>
    </div>

    <div class="ft__bot">
      <p style="margin:0"><?php echo wp_kses_post( $copyright ); ?></p>
      <?php if ( ! dsc_render_footer_bottom( 'footer_bottom' ) ) : ?>
        <nav aria-label="Footer">
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#projects">Projects</a>
          <a href="#contact">Contact</a>
          <?php if ( function_exists( 'get_privacy_policy_url' ) && get_privacy_policy_url() ) : ?>
          <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Privacy Policy</a>
          <?php endif; ?>
        </nav>
      <?php endif; ?>
    </div>
  </div>
</footer>

<div class="mbar">
  <a href="tel:<?php echo esc_attr( $phone ); ?>">
    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg>
    <span class="mbar__t">Call Now</span>
  </a>
  <a class="is-primary" href="#enquiry-form">
    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16v12H7l-3 3V4Z"/></svg>
    <span class="mbar__t">Free Quote</span>
  </a>
</div>

<?php wp_footer(); ?>
</body>
</html>
