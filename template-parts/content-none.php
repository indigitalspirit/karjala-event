<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>


<!-- <div class="mkdf-full-width">
	<div class="mkdf-full-width-inner">
		<div class="mkdf-grid-row">
			<div class="mkdf-page-content-holder mkdf-grid-col-12">

				
				<div class="mkdf-row-grid-section-wrapper trips-page__block_blog">
					<div class="mkdf-row-grid-section">
						<div class="vc_row wpb_row vc_row-fluid vc_custom_1571996104789">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-normal-space mkdf-bl-pag-load-more">
											<div class="mkdf-bl-wrapper mkdf-outer-space">
												 -->

											

			

<!-- <section class="no-results not-found"> -->
	<!-- <header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'karjala_event' ); ?></h1>
	</header> -->
	<!-- .page-header -->

	<!-- <div class="page-content"> -->
		<?php
		if ( is_home() ) ://( is_home() && current_user_can( 'publish_posts' ) ) :

			//echo 'IS HOME';

		?>
			<h2 class="page-title">
				Ничего не найдено.
			</h2>

		<?php

			// printf(
			// 	'<p>' . wp_kses(
			// 		/* translators: 1: link to WP admin new post page. */
			// 		__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'karjala_event' ),
			// 		array(
			// 			'a' => array(
			// 				'href' => array(),
			// 			),
			// 		)
			// 	) . '</p>',
			// 	esc_url( admin_url( 'post-new.php' ) )
			// );

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'karjala_event' ); ?></p>

			<p class="mkdf-blog-no-posts">No posts were found.</p>

			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'karjala_event' ); ?></p>

			<form action="https://wanderland.qodeinteractive.com/" class="mkdf-search-page-form" method="get">
							<h2 class="mkdf-search-title">New search:</h2>
							<div class="mkdf-form-holder">
							<div class="mkdf-column-left">
							<input type="text" name="s" class="mkdf-search-field" autocomplete="off" value="" placeholder="Type here">
							</div>
							<div class="mkdf-column-right">
							<button type="submit" class="mkdf-search-submit"><span class="icon_search"></span></button>
							</div>
							</div>
							<div class="mkdf-search-label">
							If you are not happy with the results below please do another search	</div>
						</form> 
			<?php
			//get_search_form();

		endif;
		?>

	<!-- </div> -->
	<!-- .page-content -->
<!-- </section> -->
<!-- .no-results -->
											<!-- </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
