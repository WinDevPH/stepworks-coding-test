<?php
/**
 * Feature cards — white section + mobile peek carousel.
 *
 * @package Stepworks
 */

$heading  = stepworks_field( 'features_heading' );
$features = stepworks_field( 'features', array() );

$icons = array(
	'chart'  => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="8" y="10" width="32" height="28" rx="2"/><path d="M14 30l6-8 6 5 8-12"/><path d="M14 34h20"/></svg>',
	'chat'   => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 14h16a4 4 0 014 4v8a4 4 0 01-4 4H20l-6 6v-6h-2a4 4 0 01-4-4v-8a4 4 0 014-4z"/><path d="M28 18h8a4 4 0 014 4v7a4 4 0 01-4 4h-1v5l-5-5"/></svg>',
	'idea'   => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="24" cy="18" r="8"/><path d="M20 26c0 2 1.5 3 2 4h4c.5-1 2-2 2-4"/><path d="M20 34h8M18 38h12"/><circle cx="16" cy="34" r="2"/><circle cx="32" cy="34" r="2"/><circle cx="24" cy="40" r="1.5"/></svg>',
	'people' => '<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="18" cy="16" r="4"/><circle cx="30" cy="16" r="4"/><path d="M10 34c1.5-5 5-8 8-8s6.5 3 8 8"/><path d="M22 34c1.5-5 5-8 8-8s6.5 3 8 8"/><circle cx="24" cy="22" r="3.5"/></svg>',
);
?>

<section class="features section" data-animate-section="features" aria-label="<?php esc_attr_e( 'Features', 'stepworks' ); ?>">
	<div class="container features__intro">
		<h2 class="section-heading features__heading"><?php echo esc_html( $heading ); ?></h2>
	</div>

	<div class="features__scroller" data-features-scroller>
		<div class="features__grid">
			<?php foreach ( $features as $feature ) : ?>
				<?php $icon = $feature['icon'] ?? 'chart'; ?>
				<article class="feature-card" data-animate="card">
					<div class="feature-card__icon" aria-hidden="true">
						<?php echo $icons[ $icon ] ?? $icons['chart']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</div>
					<h3 class="feature-card__title"><?php echo esc_html( $feature['title'] ?? '' ); ?></h3>
					<p class="feature-card__text"><?php echo esc_html( $feature['text'] ?? '' ); ?></p>
					<a class="feature-card__link" href="#" aria-label="<?php echo esc_attr( ( $feature['title'] ?? '' ) . ' — ' . __( 'Learn more', 'stepworks' ) ); ?>">
						<span class="feature-card__arrow" aria-hidden="true">→</span>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
