<?php
/**
 * Development and debugging enhancements.
 *
 * TOC
 * - Includes
 * - Init
 *
 * @package CodeconutLtd_Theme__Generic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// -------------------------------------------------------------------------------------------------------------------------------- Includes

require_once 'app/styles-scripts.php';

use CodeconutLtd_Theme_App\StylesScripts;


// ------------------------------------------------------------------------------------------------------------------------------------ Init

new StylesScripts( CODECONUTLTD__THEME_PARENT_KEY );
