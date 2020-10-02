<?php
/**
 * Theme specific styles and scripts.
 *
 * @package CodeconutLtd_Theme__Generic
 */

namespace CodeconutLtd_Theme_App;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Style and script loading.
 */
final class StylesScripts {
	/**
	 * Parent theme name.
	 *
	 * @var string
	 */
	private $parent_theme_key = '';

	/**
	 * Child theme name.
	 *
	 * @var string
	 */
	private $child_theme_key = 'codeconutltd';

	/**
	 * Constructor.
	 *
	 * @param string $parent_theme_key Parent theme name.
	 */
	public function __construct( $parent_theme_key = '' ) {
		$this->parent_theme_key = $parent_theme_key;

		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
	}

	/**
	 * Enqueue CSS styles.
	 */
	public function wp_enqueue_scripts() {
		wp_enqueue_style( $this->parent_theme_key, get_template_directory_uri() . '/style.css', array(), '1.0.0' );

		wp_enqueue_style(
			$this->child_theme_key,
			get_stylesheet_directory_uri() . '/style.css',
			array( $this->parent_theme_key ),
			wp_get_theme()->get( 'Version' )
		);
	}
}
