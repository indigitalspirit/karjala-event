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

		<footer class="mkdf-page-footer  mkdf-light-footer">
			<div class="mkdf-footer-top-holder">
				<div class="mkdf-footer-top-inner mkdf-grid">
					<div class="mkdf-grid-row mkdf-footer-top-alignment-left">
						<?php if ( is_active_sidebar('footer-logo') ) : ?>
							<div class="mkdf-column-content mkdf-grid-col-3">
						
							
								<?php dynamic_sidebar('footer-logo'); ?>	
									
							</div>
						<?php endif; ?>	
						
						<div class="mkdf-column-content mkdf-grid-col-9">
							<div id="custom_html-2" class="widget_text widget mkdf-footer-column-2 widget_custom_html">
								<div class="textwidget custom-html-widget">
									<div class="mkdf-section-title-holder   mkdf-st-highlight" style="margin-top:15px">
										<div class="mkdf-st-inner">
										<?php 
											$thezis = get_option('karjala_event_thezis_field');

											if( $thezis ):
										
										?>
											<p class="mkdf-st-text mkdf-text-highlight"
												style="font-family: Crimson text;font-style: italic;font-size: 25px;line-height: 30px;font-weight: 400;">
												<?php echo $thezis; ?>
											</p>
										<?php endif;?>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mkdf-footer-middle-holder">
				<div class="mkdf-footer-middle-inner mkdf-grid">
					<div class="mkdf-grid-row mkdf-footer-middle-alignment-left">

						<div class="mkdf-column-content mkdf-grid-col-3">
							<div id="text-4" class="widget mkdf-footer-column-1 widget_text">
								<div class="mkdf-widget-title-holder">
									<h4 class="mkdf-widget-title">
										<?php bloginfo('name'); ?>
									</h4>
								</div>
								<div class="textwidget">
									<p style="line-height: 23px; max-width: 90%;">
										<?php bloginfo( 'description' ); ?>
									</p>
								</div>
							</div>
						</div>

						<div class="mkdf-column-content mkdf-grid-col-3">
							<div class="widget mkdf-blog-list-widget">
								<div class="mkdf-widget-title-holder">
									<h4 class="mkdf-widget-title" style="margin-bottom: 16px">Мы в соцсетях</h4>
								</div>
								<div
									class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-minimal mkdf-one-columns mkdf-disable-bottom-space mkdf-normal-space mkdf-bl-pag-no-pagination ">
									
										<div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">
										<?php 
											$vk = get_option('karjala_event_vk_field');

											$instagram = get_option('karjala_event_instagram_field');
										
											if( $vk ):
										?>
											
											<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" href="<?php echo $vk;?>" target="_blank">
												<span class="mkdf-social-icon-widget ion-social-instagram"></span> 
											</a>
										<?php 
											endif;
											if( $instagram ):
										?>
											<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" href="<?php echo $instagram;?>" target="_blank">
												<span class="mkdf-social-icon-widget ion-social-twitter"></span> 
											</a>

										<?php 
											endif;
											
										?>
										
										</div>
									
								</div>
							</div>
						</div>

						<?php if ( is_active_sidebar('footer-left') ) : ?>
						<div class="mkdf-column-content mkdf-grid-col-2">
							
								<?php dynamic_sidebar('footer-left'); ?>	
									
						</div>
						<?php endif; ?>	

						<?php if ( is_active_sidebar('footer-center') ) : ?>
						<div class="mkdf-column-content mkdf-grid-col-2">
							
								<?php dynamic_sidebar('footer-center'); ?>	
								
						</div>
						<?php endif; ?>	

						<?php if ( is_active_sidebar('footer-right') ) : ?>
						<div class="mkdf-column-content mkdf-grid-col-2">
							
								<?php dynamic_sidebar('footer-right'); ?>	
							
						</div>
						<?php endif; ?>	


					</div>
				</div>
			</div>
			<div class="mkdf-footer-bottom-holder">
				<div class="mkdf-footer-bottom-inner mkdf-grid">
					<div class="mkdf-grid-row ">
						<?php
							$privacy_policy_link = get_privacy_policy_url();

							if( $privacy_policy_link ):
						?>
						<div class="mkdf-grid-col-6">
							<div class="widget mkdf-footer-bottom-column-2 widget_text">
								<div class="textwidget">
									<p>
										<a href="<?php echo $privacy_policy_link; ?>" target="_blank">Политика конфиденциальности
										</a>
									</p>
								</div>
								
							</div>
						</div>
						<?php 
							endif;
						?>
						<div class="mkdf-grid-col-6">
							<div id="text-5" class="widget mkdf-footer-bottom-column-2 widget_text">
								<div class="textwidget">
									<p>
										<span style="color: #999999;">Karjalaevent.ru  </span> &copy; 2020 | 
										Разработка сайта: <a href="http://anastasia-pavlova.ru" target="_blank">AP
										
											<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'karjala_event' ) ); ?>">
												<?php
												/* translators: %s: CMS name, i.e. WordPress. */
												printf( esc_html__( 'Proudly powered by %s', 'karjala_event' ), 'WordPress' );
												?>
											</a> -->

											<!-- <?php
												/* translators: 1: Theme name, 2: Theme author. */
												printf( esc_html__( 'Theme: %1$s by %2$s.', 'karjala_event' ), 'karjala_event', '<a href="https://anastasia-pavlova.com/">Anastasia Pavlova</a>' );
												?> 
											-->
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>
	<!-- ./mkdf-wrapper-inner (header) -->
</div>
<!-- mkdf-wrapper (header) -->
  
<?php //get_template_part('template-parts/side-menu'); ?>

 <?php get_template_part('template-parts/back-totop'); ?>

 <?php get_template_part('template-parts/widget-call'); ?>

 <?php get_template_part('template-parts/modals'); ?>



<?php wp_footer(); ?>

</body>
</html>
