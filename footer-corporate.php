<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karjala-event
 */

?>

								<!-- footer -->
								<div class="vc_row wpb_row vc_row-fluid vc_custom_1574854485844 vc_row-o-content-middle vc_row-flex mkdf-content-aligment-center corporate-footer" style="background-color:#ecebe1">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<div class="wpb_text_column wpb_content_element ">
													<div class="wpb_wrapper">
													<?php 
															$thezis = get_option('karjala_event_thezis_field');

															if( $thezis ):
														
														?>

														<p class="mkdf-st-text mkdf-text-highlight footer-phraze" style="font-family: Crimson text;font-style: italic;font-size: 25px;line-height: 30px;font-weight: 400;"> 
														<?php echo $thezis;?>
															</p>

															<?php endif;?>

														<!-- footer-copy -->
														<div class="footer-copyright">
															<div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left footer-copyright__left">
																<div>
																	Karjalaevent.ru &copy; 2020 

																</div>
																

															</div>

															<?php
																$privacy_policy_link = get_privacy_policy_url();

																if( $privacy_policy_link ):
															?>
															<div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-right footer-copyright__right">
																<a href="<?php echo $privacy_policy_link; ?>" target="_blank">Политика конфиденциальности
																</a>
															</div>
															<?php 
																endif;
															?>

														</div>

														<div class="footer-author">
															<div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-center">
																Разработка сайта: <a href="http://anastasia-pavlova.ru" target="_blank">AP
																</a>
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
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
  

<?php //get_template_part('template-parts/side-menu'); ?>

 <?php get_template_part('template-parts/back-totop'); ?>

 <?php get_template_part('template-parts/widget-call'); ?>

 <?php get_template_part('template-parts/modals'); ?>


<?php wp_footer(); ?>

</body>
</html>
