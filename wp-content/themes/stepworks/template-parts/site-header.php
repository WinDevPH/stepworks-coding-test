<?php
/**
 * Top bar + main header + mega menu (Figma desktop).
 *
 * @package Stepworks
 */

$top_label = stepworks_field( 'top_bar_label' );
$regions   = stepworks_field( 'regions', array() );
$nav_items = stepworks_field( 'nav_items', array() );
?>

<header class="site-header" data-animate="header">
	<div class="top-bar">
		<div class="container top-bar__inner">
			<span class="top-bar__label"><?php echo esc_html( $top_label ); ?></span>
			<ul class="top-bar__regions">
				<?php foreach ( $regions as $region ) : ?>
					<li class="top-bar__region<?php echo ! empty( $region['active'] ) ? ' is-active' : ''; ?>">
						<a href="#">
							<span class="top-bar__flag top-bar__flag--<?php echo esc_attr( $region['flag'] ?? 'sg' ); ?>" aria-hidden="true"></span>
							<span><?php echo esc_html( $region['label'] ?? '' ); ?></span>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="main-header">
		<div class="container main-header__inner">
			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<span class="site-logo__text">logo</span>
				<?php endif; ?>
			</a>

			<nav class="primary-nav" aria-label="<?php esc_attr_e( 'Primary', 'stepworks' ); ?>">
				<ul class="primary-nav__list">
					<?php foreach ( $nav_items as $index => $item ) : ?>
						<li class="primary-nav__item" data-mega-trigger="<?php echo esc_attr( (string) $index ); ?>">
							<a class="primary-nav__link" href="#"><?php echo esc_html( $item['label'] ?? '' ); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>

			<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" data-menu-toggle>
				<span class="menu-toggle__bars" aria-hidden="true"></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Open menu', 'stepworks' ); ?></span>
			</button>
		</div>
	</div>

	<div class="mega-menu" data-mega-menu hidden>
		<div class="container mega-menu__panels">
			<?php foreach ( $nav_items as $index => $item ) : ?>
				<?php
				$image = stepworks_image_url( $item['image'] ?? '', stepworks_asset( 'mega-1.jpg' ) );
				$links = $item['links'] ?? array();
				?>
				<div class="mega-menu__panel<?php echo 0 === $index ? ' is-active' : ''; ?>" data-mega-panel="<?php echo esc_attr( (string) $index ); ?>">
					<div class="mega-menu__media">
						<img src="<?php echo esc_url( $image ); ?>" alt="" loading="lazy">
					</div>
					<div class="mega-menu__copy">
						<h2 class="mega-menu__title"><?php echo esc_html( $item['label'] ?? '' ); ?></h2>
						<p class="mega-menu__text"><?php echo esc_html( $item['description'] ?? '' ); ?></p>
					</div>
					<ul class="mega-menu__links">
						<?php foreach ( $links as $link ) : ?>
							<li>
								<a href="#">
									<span><?php echo esc_html( $link['label'] ?? '' ); ?></span>
									<span class="mega-menu__chevron" aria-hidden="true">›</span>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</header>

<div class="mobile-menu-backdrop" data-menu-backdrop hidden></div>
<aside class="mobile-menu" id="mobile-menu" data-mobile-menu hidden aria-hidden="true" aria-label="<?php esc_attr_e( 'Mobile menu', 'stepworks' ); ?>">
	<div class="mobile-menu__shell">
		<div class="mobile-menu__header">
			<a class="mobile-menu__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="site-logo__text">logo</span>
			</a>
			<button class="mobile-menu__close" type="button" data-menu-close aria-label="<?php esc_attr_e( 'Close menu', 'stepworks' ); ?>">
				<span aria-hidden="true">×</span>
			</button>
		</div>

		<nav class="mobile-menu__nav" aria-label="<?php esc_attr_e( 'Mobile', 'stepworks' ); ?>">
			<ul class="mobile-menu__list">
				<?php foreach ( $nav_items as $index => $item ) : ?>
					<li class="mobile-menu__item">
						<button type="button" class="mobile-menu__trigger" data-mobile-submenu="<?php echo esc_attr( (string) $index ); ?>">
							<span class="mobile-menu__label"><?php echo esc_html( $item['label'] ?? '' ); ?></span>
							<span class="mobile-menu__chevron" aria-hidden="true">›</span>
						</button>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>

		<?php foreach ( $nav_items as $index => $item ) : ?>
			<div class="mobile-menu__submenu" data-mobile-panel="<?php echo esc_attr( (string) $index ); ?>" hidden>
				<div class="mobile-menu__submenu-head">
					<button type="button" class="mobile-menu__back" data-mobile-back>
						<span class="mobile-menu__chevron mobile-menu__chevron--back" aria-hidden="true">‹</span>
						<span class="mobile-menu__label"><?php echo esc_html( $item['label'] ?? '' ); ?></span>
					</button>
				</div>
				<ul class="mobile-menu__sublist">
					<?php foreach ( ( $item['links'] ?? array() ) as $link ) : ?>
						<li>
							<a href="#">
								<span class="mobile-menu__label"><?php echo esc_html( $link['label'] ?? '' ); ?></span>
								<span class="mobile-menu__chevron" aria-hidden="true">›</span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endforeach; ?>
	</div>
</aside>
