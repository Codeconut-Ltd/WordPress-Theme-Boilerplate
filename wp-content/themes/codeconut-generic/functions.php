<?php
/**
 * Main theme entry point.
 *
 * TOC
 * - Config
 * - Includes
 *
 * @package Codeconut_Theme__Generic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ---------------------------------------------------------------------------------------------------------------------------------- Config

// Development mode as example - Adjust as needed.
// The DEV-environment constant is optional but recommended.
// It can be defined for the whole application in 'index.php'.

// Must be defined globally in 'wp-config.php'.
if ( ! defined( 'CODECONUT__ENV_DEVELOPMENT' ) ) {
	define( 'CODECONUT__ENV_DEVELOPMENT', false );
}

define( 'CODECONUT__URL_PARAM_DEV', 'dev' );
define( 'CODECONUT__THEME_PARENT_KEY', 'codeconut' );


// -------------------------------------------------------------------------------------------------------------------------------- Includes

require_once 'init/all.php';

// phpcs:ignore WordPress.Security.NonceVerification
if ( CODECONUT__ENV_DEVELOPMENT && isset( $_GET[ CODECONUT__URL_PARAM_DEV ] ) ) {
	require_once 'init/dev.php';
}
