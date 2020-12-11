<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>


		<?php
		if ( is_home() ):
		?>

		<h2 class="page-title">
		Извините, по вашему запросу ничего не найдено. 
		</h2>

		<p class="mkdf-blog-no-posts">Пожалуйста, попробуйте изменить поисковый запрос.</p>

		<?php
		
		elseif ( is_search() ) :
		?>

		<h2 class="page-title">
		Извините, по вашему запросу ничего не найдено. 
		</h2>

		<p class="mkdf-search-no-posts">Пожалуйста, попробуйте изменить поисковый запрос.</p>

		<?php

		else :
		?>

		<p>Похоже, страница, которую вы ищете, не существует. Попробуйте воспользоваться поиском:</p>

		<?php 
		
		endif;

		get_search_form();
		?>