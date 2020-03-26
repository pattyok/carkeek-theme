<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig;

get_header();

carkeek_theme()->print_styles( 'carkeek-theme-content' );

?>
	<main id="primary" class="site-main">
		<?php get_template_part( 'template-parts/content/error', '404' ); ?>
	</main><!-- #primary -->
<?php
get_footer();
