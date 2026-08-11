<?php
/**
 * Scripts and styles.
 *
 * @package Stepworks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'stepworks-fonts',
			'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&family=Great+Vibes&family=Manrope:wght@400;500;600;700&display=swap',
			array(),
			null
		);

		wp_enqueue_style(
			'stepworks-main',
			STEPWORKS_URI . '/assets/css/main.css',
			array( 'stepworks-fonts' ),
			STEPWORKS_VERSION
		);

		wp_enqueue_script(
			'gsap',
			'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
			array(),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'gsap-scrolltrigger',
			'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
			array( 'gsap' ),
			'3.12.5',
			true
		);

		wp_enqueue_script(
			'stepworks-main',
			STEPWORKS_URI . '/assets/js/main.js',
			array( 'gsap', 'gsap-scrolltrigger' ),
			STEPWORKS_VERSION,
			true
		);

		wp_localize_script(
			'stepworks-main',
			'stepworksData',
			array(
				'themeUri' => STEPWORKS_URI,
			)
		);
	}
);