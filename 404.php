<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package karjala-event
 */

get_header('404');
?>

<div class="mkdf-content" style="margin-top: -150px">
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

		//the_widget( 'WP_Widget_Recent_Posts' );

			?>

			<form role="search" method="get" class="mkdf-searchform searchform" id="searchform-836"
				action="https://wanderland.qodeinteractive.com/">
				<div class="input-holder clearfix">
					<input type="search" class="search-field" placeholder="Я ищу..." value="" name="s"
						title="Enter keywords" />
					<button type="submit"
						class="mkdf-search-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-icon mkdf-btn-svg-icon">
						<span class="mkdf-btn-text">НАЙТИ</span>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							x="0px" y="0px" viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
							<g>
								<path d="M15,1.9" />
								<line x1="1.7" y1="15.3" x2="15" y2="1.9" />
								<line x1="16" y1="1.9" x2="15" y2="1.9" />
								<line x1="15" y1="1.9" x2="1" y2="1.9" />
								<path d="M15,1.9" />
								<line x1="15" y1="16" x2="15" y2="1.9" />
							</g>
						</svg>
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
							x="0px" y="0px" viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
							<g>
								<path d="M15,1.9" />
								<line x1="1.7" y1="15.3" x2="15" y2="1.9" />
								<line x1="16" y1="1.9" x2="15" y2="1.9" />
								<line x1="15" y1="1.9" x2="1" y2="1.9" />
								<path d="M15,1.9" />
								<line x1="15" y1="16" x2="15" y2="1.9" />
							</g>
						</svg>
					</button>
				</div>
			</form>

		</div>
	</div>
</div>



<?php
get_footer('404');
