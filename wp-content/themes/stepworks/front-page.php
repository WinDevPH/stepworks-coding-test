<?php
/**
 * Front page / landing template.
 *
 * @package Stepworks
 */

get_header();
?>

<main id="main" class="site-main">
	<?php get_template_part( 'template-parts/hero' ); ?>
	<?php get_template_part( 'template-parts/features' ); ?>
	<?php get_template_part( 'template-parts/cta' ); ?>
	<?php get_template_part( 'template-parts/news' ); ?>
</main>

<?php
get_footer();