<?php
/**
 * Theme helpers.
 *
 * @package Stepworks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Get a theme field with fallback to defaults.
 *
 * @param string $key     Field key.
 * @param mixed  $default Default value.
 * @return mixed
 */
function stepworks_field( $key, $default = null ) {
	$value = null;

	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $key, 'option' );
		if ( ( null === $value || false === $value || '' === $value || array() === $value ) && get_option( 'page_on_front' ) ) {
			$page_value = get_field( $key, (int) get_option( 'page_on_front' ) );
			if ( null !== $page_value && false !== $page_value && '' !== $page_value && array() !== $page_value ) {
				$value = $page_value;
			}
		}
	}

	if ( null === $value || false === $value || '' === $value || array() === $value ) {
		$defaults = stepworks_defaults();
		return array_key_exists( $key, $defaults ) ? $defaults[ $key ] : $default;
	}

	return $value;
}

/**
 * Resolve image URL from ACF image array, ID, or string URL.
 *
 * @param mixed  $image   Image field value.
 * @param string $fallback Fallback URL.
 * @return string
 */
function stepworks_image_url( $image, $fallback = '' ) {
	if ( is_array( $image ) && ! empty( $image['url'] ) ) {
		return $image['url'];
	}
	if ( is_numeric( $image ) ) {
		$url = wp_get_attachment_image_url( (int) $image, 'full' );
		if ( $url ) {
			return $url;
		}
	}
	if ( is_string( $image ) && $image ) {
		return $image;
	}
	return $fallback;
}

/**
 * Theme image helper.
 *
 * @param string $filename Filename in assets/images.
 * @return string
 */
function stepworks_asset( $filename ) {
	return STEPWORKS_URI . '/assets/images/' . ltrim( $filename, '/' );
}

/**
 * Safe echo of HTML-capable text fields.
 *
 * @param string $text Text.
 */
function stepworks_kses( $text ) {
	echo wp_kses_post( $text );
}