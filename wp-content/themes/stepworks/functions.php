<?php
/**
 * Stepworks theme bootstrap.
 *
 * @package Stepworks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'STEPWORKS_VERSION', '1.4.4' );
define( 'STEPWORKS_DIR', get_template_directory() );
define( 'STEPWORKS_URI', get_template_directory_uri() );

require_once STEPWORKS_DIR . '/inc/setup.php';
require_once STEPWORKS_DIR . '/inc/enqueue.php';
require_once STEPWORKS_DIR . '/inc/helpers.php';
require_once STEPWORKS_DIR . '/inc/acf-fields.php';
require_once STEPWORKS_DIR . '/inc/defaults.php';