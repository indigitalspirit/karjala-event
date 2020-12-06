<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */
if ( is_home() || is_front_page() ) :

	get_header('main');


	$mp_history__title = get_field("mp_history__title");

	$mp_history__text = get_field("mp_history__text");

	$mp_video__link = get_field("mp_video__link");

	$mp_services = get_field("mp_services");

	$mp_form__title = get_field("mp_form__title");

	$mp_form__shortcode = get_field("mp_form__shortcode");

	$mp_slider = get_field("mp_slider");

	$mp_slider_big = get_field("mp_slider_big");

	?>

											<?php if( $mp_history__title ): ?>
											<!-- history -->
											<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">


															<div class="wpb_text_column wpb_content_element vc_custom_1570712658299">
																<div class="wpb_wrapper">
																	<div class="section-spacer-bt-70 main-page__history">
																	
																		<h1>
																			<?php echo $mp_history__title; ?>
																		</h1>
																	
																		<?php if( $mp_history__text ): ?>
																			<p class="mkdf-st-text">
																				<?php echo $mp_history__text; ?>
																			</p>
																		<?php endif; ?>
																		
																		
																	</div>
																	
																</div>
															</div>

																
														</div>
													</div>
												</div>
											</div>
											<!-- ./history -->

											<!-- separator -->
											<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">
															<div
																class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-small-space mkdf-bl-pag-no-pagination">
																<div class="mkdf-bl-wrapper">
																	<div class="separator-border section-spacer-bt-70">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<?php endif; ?>


											<?php if( $mp_video__link ): ?>										
											<!-- video -->
											<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">

															<div class="wpb_text_column wpb_content_element vc_custom_1570712658299">
																<div class="wpb_wrapper">
																	<div class="main-page__video">

																	<?php echo $mp_video__link; ?>
																		

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- ./video -->
											
											
											<!-- separator -->
											<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">
															<div
																class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-small-space mkdf-bl-pag-no-pagination">
																<div class="mkdf-bl-wrapper">
																	<div class="separator-border section-spacer-bt-70">
																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<?php endif; ?>


											<?php if( !empty($mp_services) ): ?>	
											<?php //var_dump($mp_services); ?>
											<!-- services -->
											<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">
															<div class="section-spacer-bt-50 main-page__blog">
																<div
																class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-small-space mkdf-bl-pag-no-pagination">
																<div class="mkdf-bl-wrapper mkdf-outer-space">
																	<ul class="mkdf-blog-list">

																	<?php 
																		foreach( $mp_services as $mp_services__item ) {
																			$service_title = $mp_services__item['mp_services__block-title'];
																			$service_descr = $mp_services__item['mp_services__block-descr'];
																			$service_btn_text = $mp_services__item['mp_services__block-btn_text'];
																			$service_btn_link = $mp_services__item['mp_services__block-btn_link'];
																			$service_img_link = $mp_services__item['mp_services__block-img_link'];
																	?>
															

																	<?php if( $service_title && $service_descr && $service_btn_text && $service_btn_link && $service_img_link): ?>
																		<li class="mkdf-bl-item mkdf-item-space">
																			<div class="mkdf-bli-inner">
																				<div class="mkdf-bli-wrapper">
																					<div class="mkdf-post-image">
																						<a href="<?php echo $service_btn_link; ?>" title="<?php echo $service_title;?>">
																							<img src="<?php echo $service_img_link; ?>" class="attachment-full size-full wp-post-image" alt="<?php echo $service_title;?>"/> 
																						</a>
																					</div>
																				</div>
																				<div class="mkdf-bli-content">
																					<h5 class="entry-title mkdf-post-title">
																						<a href="<?php echo $service_btn_link; ?>" title="<?php echo $service_title;?>">
																							<?php echo $service_title;?> 
																						</a>
																					</h5>


																					<div class="mkdf-bli-excerpt">
																						<p><?php echo $service_descr;?></p>
																					</div>
																					<a href="<?php echo $service_btn_link; ?>" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">
																						<span class="mkdf-btn-text">
																							<?php echo $service_btn_text; ?>
																						</span>
																					</a>

																				</div>
																			</div>
																		</li>
																	<?php endif; ?>


																		<?php

																		}


																		?>
																	

																	</ul>
																</div>
															</div>

															</div>
															
														</div>
													</div>
												</div>
											</div>
											<!-- ./services -->
											<?php endif; ?>
											

										
											<?php if( $mp_form__title || $mp_form__shortcode ): ?>	
											<!-- form -->
											<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">

															<div class="mkdf-section-title-holder">
																<div class="mkdf-st-inner">
																	<div class="mkdf-eh-item-content mkdf-eh-custom-6229">


																		<?php if( $mp_form__title || $mp_form__shortcode ): ?>	
																		<div class="section-spacer-bt-50">
																			<div class="mkdf-section-title-holder mkdf-st-highlight">
																				<div class="mkdf-st-inner">

																					<h3 class="mkdf-st-title">
																					<?php echo $mp_form__title; ?>
																					</h3>

																				</div>
																			</div>
																		
																			<?php if( $mp_form__shortcode ): ?>	
																			<div role="form" class="wpcf7 common__form">
																			
																				<?php 
																					$mp_form__shortcode = "'" . $mp_form__shortcode . "'";
																				
																					echo do_shortcode($mp_form__shortcode); 
																				?>

																			</div>
																			<?php endif; ?>

																		</div>

																		<div class="separator-border section-spacer-bt-70"></div>
																		<?php endif; ?>

																		

																		
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- ./form -->
											<?php endif; ?>




											<?php 
											//var_dump($mp_slider);
											if( !empty($mp_slider) && !empty($mp_slider['mp_slider__item_1']) && !empty($mp_slider['mp_slider__item_1']['mp_slider__item-img_link']) ): 
												//echo $mp_slider['mp_slider__item_1']['mp_slider__item-img_link'];
											?>	
											<!-- mobile slider -->
											<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">

															<div class="mkdf-section-title-holder">
																<div class="mkdf-st-inner">
																	<div class="mkdf-eh-item-content mkdf-eh-custom-6229">

																		<div class="main-page__slider-wrapper mobile-slider">

																			<div class="main-page__slider main-page__slider-mobile">
																			<?php 
																				foreach( $mp_slider as $mp_slider__item ) {
																					$slider_btn_text = $mp_slider__item['mp_slider__item-btn_text'];
																					$slider_btn_link = $mp_slider__item['mp_slider__item-btn_link'];
																					$slider_img_link = $mp_slider__item['mp_slider__item-img_link'];
																			?>
																				<div class="main-page__slider-item main-page__slider-item_1" style="background: url(<?php echo $slider_img_link; ?>); background-size:cover;">

																					<?php if( $slider_btn_text && $slider_btn_link ): ?>
																					<a class="mkdf-btn mkdf-btn-medium mkdf-btn-solid main-page__slider-item__btn" href="<?php echo $slider_btn_link; ?>">
																						<span class="mkdf-btn-text">
																							<?php echo $slider_btn_text; ?>
																						</span>
																					</a>
																					<?php endif; ?>

																				</div>
																			<?php 
																				}
																			?>
																				
																			</div>


																			<!-- <div class="common-slider-arrows main-page__slider-arrows">
																				<div class="common-slider-arrow-left main-page__slider-arrow-left mobile">
																					
																					<img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="назад">
																					<img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="back">	
																				</div>

																				<div class="common-slider-arrow-right main-page__slider-arrow-right mobile">
																				
																					<img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="вперед">
																					<img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="forward">
																				</div>
																				
																			</div> -->
				
																		</div>

																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>
											</div>
											<!-- ./mobile slider -->
											<?php endif; ?>

											

											<footer class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
												<div class="mkdf-eh-item">
													<div class="mkdf-eh-item-inner">
														<div class="mkdf-eh-item-content mkdf-eh-custom-2456 main-page__block-pd">

															<div class="footer-wrapper">
																

																<div class="footer-logo">
																	<?php the_custom_logo(); ?>
																</div>

																
																<?php 
																	$thezis = get_option('karjala_event_thezis_field');

																	if( $thezis ):
																
																?>

																<div class="footer-text">

																	<div class="mkdf-section-title-holder mkdf-st-highlight">
																		<div class="mkdf-st-inner">
																			<p class="mkdf-st-text mkdf-text-highlight">
																				
																				<?php echo $thezis; ?>

																			</p>
																		</div>
																	</div>

																</div>

																<?php endif; ?>
															
																<div class="footer-menu">
																

																	<?php
																		wp_nav_menu(
																			array(
																				'theme_location' => 'menu-main-bottom',
																				'menu' => '',
																				'container'       => 'nav', 
																				'container_class' => 'mkdf-main-menu mkdf-drop-down mkdf-default-nav', 
																				//'container_id'    => 'container-id',
																				'menu_class'      => 'mkdf-main-menu mkdf-drop-down mkdf-default-nav', 
																				//'menu_class'      => 'menu', 
																				'menu_id'        => 'primary-menu',
																				'link_before' => '<div class="menu-svg__left"></div>',
																				'link_after' => '<div class="menu-svg__right"></div>',
																				'items_wrap'      => '<ul class="">%3$s</ul>', //'<ul id="%1$s" class="%2$s">%3$s</ul>',
																				'echo'            => true,
																				'depth'           => 0,
																				//'walker'          => '',
																			)
																		);
																	?>
																</div>


																<?php 
																	$email = get_option('karjala_event_mail_field');

																	if( $email ):
																
																?>

																	<!-- footer-email -->
																	<div class="footer-email">
																		<a class="mkdf-icon-widget-holder green-hover"
																			href="mailto:<?php echo trim($email); ?>">
																			<span class="mkdf-icon-element ion-ios-email-outline"></span> 
																			<span class="mkdf-icon-text">															
																				<?php echo $email; ?>																	
																			</span>
																		</a>
																	</div>

																<?php endif; ?>


																<?php 
																	$vk = get_option('karjala_event_vk_field');

																	$instagram = get_option('karjala_event_instagram_field');
																?>

																<!-- footer-socials -->
																<div class="footer-socials">

																	<div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-center">

																	<?php 
																			if( $vk ):
																	?>
																		<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover green-hover" href="<?php echo $vk;?>" target="_blank">
																			<span class="mkdf-social-icon-widget ion-social-vk">
																			<i class="fa fa-vk"></i>
																			</span>
																		</a>

																	<?php 
																			endif;
																			if( $instagram ):
																	?>
																			<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover green-hover" href="<?php echo $instagram;?>" target="_blank">
																			<span class="mkdf-social-icon-widget ion-social-instagram"></span>
																		</a>
																	<?php 
																		endif;
																		
																	?>
																		
																	</div>
																</div>

																<!-- footer-copy -->
																<div class="footer-copyright">
																	<div
																		class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left footer-copyright__left">
																		<div>
																			Karjalaevent.ru &copy; 2020

																		</div>


																	</div>
																	<div
																		class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-right footer-copyright__right">
																		<a href="/privacy-policy" target="_blank">Политика конфиденциальности
																		</a>
																	</div>
																</div>

																<div class="footer-author">
																	<div
																		class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-center">
																		Разработка сайта: <a href="http://anastasia-pavlova.ru"
																			target="_blank">AP
																		</a>
																	</div>
																</div>

															</div>

								

														</div>
													</div>
												</div>
											</footer>
											<!-- ./footer -->


											
							
										
										</div>
									</div>
								</div>
								<!-- ./left-side -->


								<!-- right side-->
								<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-12 main-page__column__right-side">
									<div class="vc_column-inner desktop-slider__inner">
										<div class="wpb_wrapper">

											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div class="wpb_column vc_column_container vc_col-sm-12">
													<div class="vc_column-inner">
														<div class="wpb_wrapper">

															<?php 
																
																//var_dump($mp_slider_big['mp_slider_big__item_1']);
																if( !empty($mp_slider_big) && !empty($mp_slider_big['mp_slider_big__item_1']) && !empty($mp_slider_big['mp_slider_big__item_1']['mp_slider_big__item_img_link']) ): 
																	//echo $mp_slider_big['mp_slider_big__item_1']['mp_slider_big__item_img_link'];
														
															?>	
															
															<div class="main-page__slider-wrapper desktop-slider">

															
																<div class="main-page__slider">
																	<?php 
																		foreach( $mp_slider_big as $mp_slider_big__item ) {
																			$slider_big_btn_text = $mp_slider_big__item['mp_slider_big__item_btn_text'];
																			$slider_big_btn_link = $mp_slider_big__item['mp_slider_big__item_btn_link'];
																			$slider_big_img_link = $mp_slider_big__item['mp_slider_big__item_img_link'];
																	?>
																	<div class="main-page__slider-item" style="background: url(<?php echo $slider_big_img_link; ?>); background-size:cover;">

																		<?php if( $slider_big_btn_text && $slider_big_btn_link ): ?>
																		<a class="mkdf-btn mkdf-btn-medium mkdf-btn-solid main-page__slider-item__btn" href="<?php echo $slider_big_btn_link; ?>">
																			<span class="mkdf-btn-text">
																				<?php echo $slider_big_btn_text; ?>
																			</span>
																		</a>
																		<?php endif; ?>
																		
																	</div>
																	<?php 
																		}
																	?>
																	
																</div>


																


																<div class="common-slider-arrows main-page__slider-arrows">
																	<div class="common-slider-arrow-left main-page__slider-arrow-left">
																		<img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="назад">
																		<img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="back">
																	</div>

																	<div class="common-slider-arrow-right main-page__slider-arrow-right">
																		<img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="вперед">
																		<img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="forward">
																	</div>
																</div>

															</div>

															<?php endif; ?>
															


														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
								<!-- ./right side -->


							</div>
							
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</div>





<?
	//echo 'home page';

	get_footer('main');

else:


	get_header();
?>

	<div class="mkdf-content">
		<div class="mkdf-content-inner">

		<?php
			while ( have_posts() ) :
				the_post();

		?>

			<!-- BLOG TOP -->
			<div
				class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top">
				<div class="mkdf-title-image">
					<!-- <img src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/blog-post-img-35.jpg"
						alt="s"> -->
						<?php
						the_post_thumbnail();
						?>
				</div>
				<div class="mkdf-title-wrapper">
					<div class="mkdf-title-inner">
						<div class="mkdf-grid">
							<h2 class="mkdf-page-title entry-title">
								<?php
									the_title();
								?>
							</h2>
						</div>
					</div>
				</div>
			</div>



			<div class="mkdf-full-width">
				<div class="mkdf-full-width-inner">

					<div class="mkdf-container-inner clearfix">
						<div class="mkdf-grid-row mkdf-grid-large-gutter">
							<div class="mkdf-page-content-holder mkdf-grid-col-12">
								<div class="mkdf-blog-holder mkdf-blog-single mkdf-blog-single-standard">

									<?php
										get_template_part( 'template-parts/content', 'page' );

									?>

								</div>
              </div>
            </div>
					</div>
					
				</div>
			</div>

		<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.

		?>
			
		</div>
  </div>



	<?php
	//get_sidebar();
	get_footer();

endif;
