<?php
/**
 * Main theme entry point.
 *
 * TOC
 * - Config
 * - Includes
 *
 * @package CodeconutLtd_Theme__Generic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ---------------------------------------------------------------------------------------------------------------------------------- Config

// Development mode as example - Adjust as needed.
// The DEV-environment constant is optional but recommended.
// It can be defined for the whole application in 'index.php'.

// Must be defined globally in 'wp-config.php'.
if ( ! defined( 'CODECONUTLTD__ENV_DEVELOPMENT' ) ) {
	define( 'CODECONUTLTD__ENV_DEVELOPMENT', false );
}

define( 'CODECONUTLTD__URL_PARAM_DEV', 'dev' );
define( 'CODECONUTLTD__THEME_PARENT_KEY', 'codeconutltd' );


// -------------------------------------------------------------------------------------------------------------------------------- Includes

require_once 'init.php';

// phpcs:ignore WordPress.Security.NonceVerification
if ( CODECONUTLTD__ENV_DEVELOPMENT && isset( $_GET[ CODECONUTLTD__URL_PARAM_DEV ] ) ) {
	require_once 'init-dev.php';
}
