<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fermer
 */

if ( ! is_active_sidebar( 'newsletter' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'newsletter' ); ?>
</aside><!-- #secondary -->
