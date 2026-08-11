<?php
/**
 * News section.
 *
 * @package Stepworks
 */

$heading = stepworks_field( 'news_heading' );
$items   = stepworks_field( 'news_items', array() );
$btn     = stepworks_field( 'news_button_label' );
$url     = stepworks_field( 'news_button_url', '#' );
?>

<section class="news section" data-animate-section="news">
	<div class="container">
		<h2 class="section-heading news__heading"><?php echo esc_html( $heading ); ?></h2>
		<div class="news__scroller">
			<div class="news__grid">
				<?php foreach ( $items as $item ) : ?>
					<?php $image = stepworks_image_url( $item['image'] ?? '', stepworks_asset( 'news-1.jpg' ) ); ?>
					<article class="news-card" data-animate="card">
						<a class="news-card__media" href="<?php echo esc_url( $item['link_url'] ?? '#' ); ?>">
							<img src="<?php echo esc_url( $image ); ?>" alt="" loading="lazy">
						</a>
						<h3 class="news-card__title"><?php echo esc_html( $item['title'] ?? '' ); ?></h3>
						<p class="news-card__meta"><?php echo esc_html( $item['meta'] ?? '' ); ?></p>
						<a class="news-card__link" href="<?php echo esc_url( $item['link_url'] ?? '#' ); ?>">
							<span><?php echo esc_html( $item['link_label'] ?? 'Sit Amet' ); ?></span>
							<span aria-hidden="true">→</span>
						</a>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="news__cta">
			<a class="btn btn--ghost-brand" href="<?php echo esc_url( $url ); ?>">
				<span><?php echo esc_html( $btn ); ?></span>
				<span class="btn__arrow" aria-hidden="true">→</span>
			</a>
		</div>
	</div>
</section>