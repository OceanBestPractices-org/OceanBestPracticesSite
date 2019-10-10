<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/5dc5e460fc.js');
		
		$js_version_fittext = $theme_version . '.' . filemtime( get_template_directory() . '/js/jquery.fittext.js' );
		wp_enqueue_script( 'fittext-scripts', get_template_directory_uri() . '/js/jquery.fittext.js', array(), $js_version_fittext, true );

		$js_version_obps = $theme_version . '.' . filemtime( get_template_directory() . '/js/obps.js' );
		wp_enqueue_script( 'obps-scripts', get_template_directory_uri() . '/js/obps.js', array(), $js_version_obps, true );
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
