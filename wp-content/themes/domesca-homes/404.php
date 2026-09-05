<?php
/**
 * 404 template.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="dsc-page">
  <div class="wrap wrap-wide" style="padding-block:4rem">
    <p class="eyebrow"><?php esc_html_e( 'Error 404', 'domesca-homes' ); ?></p>
    <h1 class="d1"><?php esc_html_e( 'Page not found', 'domesca-homes' ); ?></h1>
    <div class="prose" style="margin-top:1.5rem">
      <p><?php esc_html_e( 'The page you were looking for could not be found. It may have moved, or you may have followed an outdated link.', 'domesca-homes' ); ?></p>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:2rem">
      <a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go Home', 'domesca-homes' ); ?></a>
      <a class="btn btn--ghost" href="#contact"><?php esc_html_e( 'Contact Us', 'domesca-homes' ); ?></a>
    </div>
  </div>
</div>
<?php
get_footer();
