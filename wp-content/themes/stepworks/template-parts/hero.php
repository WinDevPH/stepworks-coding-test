<?php
/**
 * Hero carousel — single text stack (title → body → CTA) + dots.
 *
 * @package Stepworks
 */

$slides = stepworks_field( 'hero_slides', array() );
?>

<section class="hero" data-hero aria-label="<?php esc_attr_e( 'Hero', 'stepworks' ); ?>">
	<div class="container hero__frame">
		<div class="hero__track" data-hero-track>
			<?php foreach ( $slides as $index => $slide ) : ?>
				<?php $image = stepworks_image_url( $slide['image'] ?? '', stepworks_asset( 'hero-1.jpg' ) ); ?>
				<article class="hero__slide<?php echo 0 === $index ? ' is-active' : ''; ?>" data-hero-slide>
					<div class="hero__media">
						<div class="hero__bg" style="background-image:url('<?php echo esc_url( $image ); ?>')"></div>
						<div class="hero__veil" aria-hidden="true"></div>
						<div class="hero__graphic-wrap" aria-hidden="true">
							<svg class="hero__graphic" viewBox="0 0 640 640" fill="none" data-hero-graphic>
								<g stroke="rgba(255,255,255,0.9)" stroke-width="1.15" stroke-linecap="round">
									<circle cx="360" cy="300" r="210"/>
									<circle cx="360" cy="300" r="130"/>
									<circle cx="360" cy="300" r="78"/>
									<path d="M360 90 V510 M150 300 H570"/>
									<path d="M210 150 L510 450 M510 150 L210 450"/>
									<path d="M360 90 C490 90 570 170 570 300 C570 430 490 510 360 510 C270 510 210 450 210 360 C210 300 250 260 310 260 C350 260 380 285 380 320 C380 350 360 370 335 370"/>
									<path d="M120 40 L520 40 L520 620"/>
									<path d="M80 80 C200 40 420 40 560 120"/>
									<path d="M100 560 C240 600 420 580 580 500"/>
								</g>
							</svg>
						</div>
					</div>

					<div class="hero__content">
						<h1 class="hero__title" data-animate="hero-title"><?php echo wp_kses_post( $slide['title'] ?? '' ); ?></h1>
						<p class="hero__text" data-animate="hero-text"><?php echo esc_html( $slide['text'] ?? '' ); ?></p>
						<a class="btn hero__btn" href="<?php echo esc_url( $slide['button_url'] ?? '#' ); ?>" data-animate="hero-cta">
							<span><?php echo esc_html( $slide['button_label'] ?? 'Sit Amet' ); ?></span>
							<span class="btn__arrow" aria-hidden="true">→</span>
						</a>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="hero__dots" data-hero-dots aria-label="<?php esc_attr_e( 'Slide indicators', 'stepworks' ); ?>">
			<?php foreach ( $slides as $index => $slide ) : ?>
				<button type="button" class="hero__dot<?php echo 0 === $index ? ' is-active' : ''; ?>" data-hero-dot="<?php echo esc_attr( (string) $index ); ?>" aria-label="<?php printf( esc_attr__( 'Go to slide %d', 'stepworks' ), $index + 1 ); ?>"></button>
			<?php endforeach; ?>
		</div>
	</div>
</section>