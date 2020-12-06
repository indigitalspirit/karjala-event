<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package karjala-event
 */

get_header('404');

$main_bg = get_option('karjala_event_404_field');

?>

<div class="mkdf-content" <?php if($main_bg){ ?> style="background-image: url(<?php echo $main_bg; ?>); " <?php } ?>>
	<div class="mkdf-content-inner">
		<div class="mkdf-page-not-found">

			<h1 class="mkdf-404-title">
				Ой ... страница не найдена </h1>

			<h3 class="mkdf-404-subtitle">
			</h3>

			<p class="mkdf-404-text">
			Попробуйте воспользоваться поиском. </p>

			<?php 
			get_search_form();

	

			?>


		</div>
	</div>
</div>



<?php
get_footer('404');
