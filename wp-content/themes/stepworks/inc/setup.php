<?php
/**
 * Theme supports and menus.
 *
 * @package Stepworks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
		);
		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		register_nav_menus(
			array(
				'primary' => __( 'Primary Navigation', 'stepworks' ),
				'footer'  => __( 'Footer Navigation', 'stepworks' ),
			)
		);
	}
);

/**
 * Front page uses our landing template.
 */
add_filter(
	'template_include',
	function ( $template ) {
		if ( is_front_page() ) {
			$front = STEPWORKS_DIR . '/front-page.php';
			if ( file_exists( $front ) ) {
				return $front;
			}
		}
		return $template;
	}
);