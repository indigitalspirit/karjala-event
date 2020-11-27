<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karjala-event
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<!-- blog-sidebar -->
<div class="mkdf-sidebar-holder mkdf-grid-col-3">
  <aside class="mkdf-sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
</div>
<!-- </aside> -->
<!-- #secondary -->
