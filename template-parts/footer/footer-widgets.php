<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

<?php endif; ?>

<div id="data-hidden-px-7" style="display:none;">
	<?php echo( $GLOBALS['Pixel_Theme']['pixel_theme_opt_checkbox'] ); ?>
</div>
