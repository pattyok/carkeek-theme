<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig;

if ( ! carkeek_theme()->is_primary_nav_menu_active() ) {
	return;
}

?>

<nav id="site-navigation" class="main-navigation nav--toggle-sub nav--toggle-small" aria-label="<?php esc_attr_e( 'Main menu', 'carkeek-theme' ); ?>"
	<?php
	if ( carkeek_theme()->is_amp() ) {
		?>
		[class]=" siteNavigationMenu.expanded ? 'main-navigation nav--toggle-sub nav--toggle-small nav--toggled-on' : 'main-navigation nav--toggle-sub nav--toggle-small' "
		<?php
	}
	?>
>
	<?php
	if ( carkeek_theme()->is_amp() ) {
		?>
		<amp-state id="siteNavigationMenu">
			<script type="application/json">
				{
					"expanded": false
				}
			</script>
		</amp-state>
		<?php
	}
	?>

	<button class="menu-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'carkeek-theme' ); ?>" aria-controls="primary-menu" aria-expanded="false"
		<?php
		if ( carkeek_theme()->is_amp() ) {
			?>
			on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
			[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
			<?php
		}
		?>
	>
		<span class="menu-toggle-label"><?php esc_html_e( 'Menu', 'carkeek-theme' ); ?></span>
		<i class="menu-toggle-icon icon-menu"></i>
	</button>

	<div class="primary-menu-container">
		<?php carkeek_theme()->display_primary_nav_menu( array( 'menu_id' => 'primary-menu' ) ); ?>
	</div>
</nav><!-- #site-navigation -->
