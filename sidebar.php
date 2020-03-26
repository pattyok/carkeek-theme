<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig;

if ( ! carkeek_theme()->is_primary_sidebar_active() ) {
	return;
}

carkeek_theme()->print_styles( 'carkeek-theme-sidebar', 'carkeek-theme-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<?php carkeek_theme()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
