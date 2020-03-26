<?php
/**
 * WP_Rig\WP_Rig\Editor\Component class
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig\Editor;

use WP_Rig\WP_Rig\Component_Interface;
use function add_action;
use function add_theme_support;

/**
 * Class for integrating with the block editor.
 *
 * @link https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'editor';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'after_setup_theme', array( $this, 'action_add_editor_support' ) );
	}

	/**
	 * Adds support for various editor features.
	 */
	public function action_add_editor_support() {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for wide-aligned images.
		add_theme_support( 'align-wide' );

		/**
		 * Add support for color palettes.
		 *
		 * To preserve color behavior across themes, use these naming conventions:
		 * - Use primary and secondary color for main variations.
		 * - Use `theme-[color-name]` naming standard for standard colors (red, blue, etc).
		 * - Use `custom-[color-name]` for non-standard colors.
		 *
		 * Add the line below to disable the custom color picker in the editor.
		 * add_theme_support( 'disable-custom-colors' );
		 * --color-theme-black: #1c2833;
		 */
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'carkeek-theme' ),
					'slug'  => 'theme-primary',
					'color' => '#545454',
				),
				array(
					'name'  => __( 'Secondary', 'carkeek-theme' ),
					'slug'  => 'theme-secondary',
					'color' => '#ddd',
				),
				array(
					'name'  => __( 'Grey Med Light', 'carkeek-theme' ),
					'slug'  => 'theme-grey-med-light',
					'color' => '#b6b6b6',
				),
				array(
					'name'  => __( 'Grey', 'carkeek-theme' ),
					'slug'  => 'theme-grey',
					'color' => '#979797',
				),
				array(
					'name'  => __( 'Grey Med Dark', 'carkeek-theme' ),
					'slug'  => 'theme-grey-med-dark',
					'color' => '#717171',
				),
				array(
					'name'  => __( 'White', 'carkeek-theme' ),
					'slug'  => 'theme-white',
					'color' => '#fff',
				),
			)
		);

		/*
		 * Add support custom font sizes.
		 *
		 * Add the line below to disable the custom color picker in the editor.
		 * add_theme_support( 'disable-custom-font-sizes' );
		 */
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'carkeek-theme' ),
					'shortName' => __( 'S', 'carkeek-theme' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Medium', 'carkeek-theme' ),
					'shortName' => __( 'M', 'carkeek-theme' ),
					'size'      => 25,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'carkeek-theme' ),
					'shortName' => __( 'L', 'carkeek-theme' ),
					'size'      => 31,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Larger', 'carkeek-theme' ),
					'shortName' => __( 'XL', 'carkeek-theme' ),
					'size'      => 39,
					'slug'      => 'larger',
				),
			)
		);
	}
}
