<?php
/**
 * WP_Rig\WP_Rig\Custom_Header\Component class
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig\Custom_Header;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;
use function add_theme_support;
use function apply_filters;
use function get_header_textcolor;
use function get_theme_support;
use function display_header_text;
use function esc_attr;

/**
 * Class for adding custom header support.
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'custom_header';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'action_add_custom_header_support' ) );
	}

	/**
	 * Adds support for the Custom Logo feature.
	 */
	public function action_add_custom_header_support() {
		add_theme_support(
			'custom-header',
			apply_filters(
				'carkeek_theme_custom_header_args',
				array(
					'default-image'      => '',
					'default-text-color' => '000000',
					'width'              => 1600,
					'height'             => 250,
					'flex-height'        => true,
					'wp-head-callback'   => array( $this, 'wp_head_callback' ),
				)
			)
		);
	}

	/**
	 * Outputs extra styles for the custom header, if necessary.
	 */
	public function wp_head_callback() {
		$header_text_color     = get_header_textcolor();
		$title_tagline_display = get_theme_mod( 'title_tagline_display' );
		$styles                = '';

		if ( 'none' === $title_tagline_display ) {
			echo '<style type="text/css">.site-title, .site-description { position: absolute; clip: rect(1px, 1px, 1px, 1px); }</style>';
			return;
		}

		if ( get_theme_support( 'custom-header', 'default-text-color' ) !== $header_text_color ) {
			$styles = '.site-title a, .site-description { color: #' . esc_attr( $header_text_color ) . '; }';
		}

		if ( 'title_only' === $title_tagline_display ) {
			$styles .= '.site-description { position: absolute; clip: rect(1px, 1px, 1px, 1px); }';
		} elseif ( 'tagline_only' === $title_tagline_display ) {
			$styles .= '.site-title { position: absolute; clip: rect(1px, 1px, 1px, 1px); }';
		}

		echo '<style type="text/css">' . esc_attr( $styles ) . '</style>';
	}
}
