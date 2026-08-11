<?php
/**
 * CTA / informational split section — container width (matches header).
 *
 * @package Stepworks
 */

$image = stepworks_image_url( stepworks_field( 'cta_image' ), stepworks_asset( 'cta-image.jpg' ) );
$title = stepworks_field( 'cta_title' );
$text  = stepworks_field( 'cta_text' );
$label = stepworks_field( 'cta_button_label' );
$url   = stepworks_field( 'cta_button_url', '#' );
?>

<section class="cta-split" data-animate-section="cta">
	<div class="container cta-split__shell">
		<div class="cta-split__media">
			<img src="<?php echo esc_url( $image ); ?>" alt="" loading="lazy">
		</div>
		<div class="cta-split__content">
			<div class="cta-split__inner">
				<h2 class="cta-split__title"><?php echo esc_html( $title ); ?></h2>
				<div class="cta-split__text">
					<?php echo wp_kses_post( wpautop( $text ) ); ?>
				</div>
				<a class="btn btn--ghost-brand" href="<?php echo esc_url( $url ); ?>">
					<span><?php echo esc_html( $label ); ?></span>
					<span class="btn__arrow" aria-hidden="true">→</span>
				</a>
			</div>
		</div>
	</div>
</section>