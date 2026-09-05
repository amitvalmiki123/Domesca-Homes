<?php
/**
 * Generic page template.
 *
 * @package Domesca_Homes
 */

defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

$banner_args = array(
	'title'       => get_the_title(),
	'sub'         => get_the_excerpt(),
	'plain'       => true,
	'crumb_title' => get_the_title(),
);

get_template_part( 'template-parts/sections/page-banner', null, array( 'section' => $banner_args ) );
?>
<div class="dsc-page sec">
  <div class="wrap wrap-wide">
    <article <?php post_class( 'doc' ); ?>>
      <div class="prose">
        <?php the_content(); ?>
      </div>
    </article>
  </div>
</div>
<?php
get_footer();
