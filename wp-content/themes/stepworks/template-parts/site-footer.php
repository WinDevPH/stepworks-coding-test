<?php
/**
 * Site footer — Figma layout (brand + link columns | form).
 *
 * @package Stepworks
 */

$tagline    = stepworks_field( 'footer_tagline' );
$text       = stepworks_field( 'footer_text' );
$columns    = stepworks_field( 'footer_columns', array() );
$form_title = stepworks_field( 'footer_form_title' );
$form_text  = stepworks_field( 'footer_form_text' );
$field_1    = stepworks_field( 'footer_field_1' );
$field_2    = stepworks_field( 'footer_field_2' );
$button     = stepworks_field( 'footer_button' );
$disclaimer = stepworks_field( 'footer_disclaimer' );
$copyright  = stepworks_field( 'copyright' );
?>

<footer class="site-footer" data-animate-section="footer">
	<div class="container site-footer__frame">
		<div class="site-footer__main">
			<div class="site-footer__left">
				<div class="site-footer__brand">
					<span class="site-logo__text site-logo__text--light">logo</span>
					<h2 class="site-footer__tagline"><?php echo esc_html( $tagline ); ?></h2>
					<p class="site-footer__text"><?php echo esc_html( $text ); ?></p>
					<ul class="site-footer__social" aria-label="<?php esc_attr_e( 'Social links', 'stepworks' ); ?>">
						<li><a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M6.5 8.5H3.7V20h2.8V8.5zM5.1 4a1.6 1.6 0 100 3.2A1.6 1.6 0 005.1 4zM20.3 20h-2.8v-5.6c0-1.3-.5-2.2-1.6-2.2-.9 0-1.4.6-1.6 1.2-.1.2-.1.5-.1.8V20H11.4s.04-9.3 0-10.3h2.8v1.5c.4-.6 1.1-1.7 2.8-1.7 2 0 3.3 1.3 3.3 4.2V20z"/></svg></a></li>
						<li><a href="#" aria-label="WeChat"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M9.5 4C5.9 4 3 6.5 3 9.6c0 1.8 1 3.4 2.6 4.4L5 16.2l2.4-1.2c.6.2 1.3.3 2 .3.2 0 .4 0 .6 0-.2-.5-.3-1-.3-1.6 0-3.3 3.1-6 7-6 .3 0 .6 0 .9.1C16.8 5.4 13.5 4 9.5 4zm-2.2 4.1a.9.9 0 110 1.8.9.9 0 010-1.8zm4.2 0a.9.9 0 110 1.8.9.9 0 010-1.8zM16.9 8.8c-3.3 0-6 2.2-6 5s2.7 5 6 5c.7 0 1.3-.1 1.9-.3l2.1 1-.5-1.9c1.3-.9 2.1-2.2 2.1-3.8 0-2.8-2.7-5-5.6-5zm-2.1 3.6a.8.8 0 110 1.6.8.8 0 010-1.6zm4.2 0a.8.8 0 110 1.6.8.8 0 010-1.6z"/></svg></a></li>
						<li><a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M14 9h3V6h-3c-2.2 0-4 1.8-4 4v2H7v3h3v7h3v-7h3l1-3h-4v-2c0-.6.4-1 1-1z"/></svg></a></li>
						<li><a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true"><path d="M12 7.2A4.8 4.8 0 1012 16.8 4.8 4.8 0 0012 7.2zm0 7.9a3.1 3.1 0 110-6.2 3.1 3.1 0 010 6.2zM17.5 6.9a1.1 1.1 0 11-2.2 0 1.1 1.1 0 012.2 0zM12 3.5c-2.3 0-2.6 0-3.5.05a5 5 0 00-3.5 2c-.5.8-.7 1.8-.75 3.45C4.2 9.9 4.2 10.2 4.2 12s0 2.1.05 2.95c.05 1.65.25 2.65.75 3.45a5 5 0 003.5 2c.9.05 1.2.05 3.5.05s2.6 0 3.5-.05a5 5 0 003.5-2c.5-.8.7-1.8.75-3.45.05-.85.05-1.15.05-2.95s0-2.1-.05-2.95a5.3 5.3 0 00-.75-3.45 5 5 0 00-3.5-2C14.6 3.5 14.3 3.5 12 3.5zm0 1.5c2.3 0 2.55 0 3.45.05 1.1.05 1.7.23 2.1.38.55.21.95.47 1.36.88.41.41.67.81.88 1.36.15.4.33 1 .38 2.1.05.9.05 1.15.05 3.45s0 2.55-.05 3.45c-.05 1.1-.23 1.7-.38 2.1-.21.55-.47.95-.88 1.36-.41.41-.81.67-1.36.88-.4.15-1 .33-2.1.38-.9.05-1.15.05-3.45.05s-2.55 0-3.45-.05c-1.1-.05-1.7-.23-2.1-.38a3.7 3.7 0 01-1.36-.88 3.7 3.7 0 01-.88-1.36c-.15-.4-.33-1-.38-2.1C5.5 14.55 5.5 14.3 5.5 12s0-2.55.05-3.45c.05-1.1.23-1.7.38-2.1.21-.55.47-.95.88-1.36.41-.41.81-.67 1.36-.88.4-.15 1-.33 2.1-.38.9-.05 1.15-.05 3.45-.05z"/></svg></a></li>
					</ul>
				</div>

				<nav class="site-footer__columns" aria-label="<?php esc_attr_e( 'Footer', 'stepworks' ); ?>">
					<?php foreach ( $columns as $column ) : ?>
						<div class="site-footer__column">
							<h3><?php echo esc_html( $column['title'] ?? '' ); ?></h3>
							<ul>
								<?php foreach ( ( $column['links'] ?? array() ) as $link ) : ?>
									<li><a href="#"><?php echo esc_html( $link['label'] ?? '' ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endforeach; ?>
				</nav>
			</div>

			<div class="site-footer__aside">
				<h3 class="site-footer__form-title"><?php echo esc_html( $form_title ); ?></h3>
				<p class="site-footer__form-text"><?php echo esc_html( $form_text ); ?></p>
				<form class="footer-form" action="#" method="post" onsubmit="return false;">
					<label class="footer-form__field">
						<span><?php echo esc_html( $field_1 ); ?></span>
						<input type="text" name="field_1" autocomplete="off">
					</label>
					<label class="footer-form__field">
						<span><?php echo esc_html( $field_2 ); ?></span>
						<input type="text" name="field_2" autocomplete="off">
					</label>
					<button class="btn btn--ghost-light" type="submit">
						<span><?php echo esc_html( $button ); ?></span>
						<span class="btn__arrow" aria-hidden="true">→</span>
					</button>
				</form>
				<p class="footer-form__disclaimer"><?php echo esc_html( $disclaimer ); ?></p>
			</div>
		</div>

		<div class="site-footer__bottom">
			<p><?php echo esc_html( $copyright ); ?></p>
		</div>
	</div>
</footer>