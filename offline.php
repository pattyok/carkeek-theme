<?php
/**
 * The template for displaying offline pages
 *
 * @link https://github.com/xwp/pwa-wp#offline--500-error-handling
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig;

// Prevent showing nav menus.
add_filter( 'has_nav_menu', '__return_false' );

get_header();

carkeek_theme()->print_styles( 'carkeek-theme-content' );

?>
	<main id="primary" class="site-main">
		<?php get_template_part( 'template-parts/content/error', 'offline' ); ?>
	</main><!-- #primary -->
<?php
get_footer();
