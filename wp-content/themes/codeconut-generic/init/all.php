<?php
/**
 * General theme definition.
 *
 * TOC
 * - Includes
 * - Init
 *
 * @package Codeconut_Theme__Generic
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// -------------------------------------------------------------------------------------------------------------------------------- Includes

require_once 'app/styles-scripts.php';

use Codeconut_Theme_App\StylesScripts;


// ------------------------------------------------------------------------------------------------------------------------------------ Init

new StylesScripts( CODECONUT__THEME_PARENT_KEY );
