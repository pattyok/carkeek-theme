<?php
/**
 * WP_Rig\WP_Rig\Templating_Component_Interface interface
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig;

/**
 * Interface for a theme component that exposes template tags.
 */
interface Templating_Component_Interface {

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `carkeek_theme()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array;
}
