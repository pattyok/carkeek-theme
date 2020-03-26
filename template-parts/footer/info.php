<?php
/**
 * Template part for displaying the footer info
 *
 * @package carkeek_theme
 */

namespace WP_Rig\WP_Rig;

?>

<footer class="footer-main">
	<?php if ( is_active_sidebar( 'sidebar-footer' ) ) { ?>
		<section class="footer-section footer-upper">
			<div class="widget_wrapper">
				<?php dynamic_sidebar( 'sidebar-footer' ); ?>
			</div>
		</section>
		<section class="footer-section footer-lower">
			<div class="widget_wrapper">
				<?php dynamic_sidebar( 'sidebar-footer-lower' ); ?>
			</div>
		</section>
	<?php } ?>
		<section class="footer-colophon">
			<div class="colophon">
				<ul class="colophon-info list-inline">
					<li class="copyright">&copy; <?php echo esc_attr( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> All Rights Reserved</li>
					<li class="contact-info left">Design: <a href="http://beansnrice.com" target="_blank">Beans n' Rice</a></li>
					<li class="contact-info">Development: <a href="http://carkeekstudios.com"  target="_blank">Carkeek Studios</a></li>
				</ul>
			</div>
		</section>
</footer>
