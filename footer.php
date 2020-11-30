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
						<div class="mkdf-column-content mkdf-grid-col-3">
							<div id="custom_html-3" class="widget_text widget mkdf-footer-column-1 widget_custom_html">
								<div class="textwidget custom-html-widget">
									<?php the_custom_logo(); ?>
								</div>
							</div>
						</div>
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
									<h6 class="mkdf-widget-title">
										<?php bloginfo('name'); ?>
									</h6>
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
									<h6 class="mkdf-widget-title" style="margin-bottom: 16px">Мы в соцсетях</h6>
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

						<?php if ( is_active_sidebar('footer-1') ) : ?>
						<div class="mkdf-column-content mkdf-grid-col-2">
							
								<?php dynamic_sidebar('footer-1'); ?>	
									
						</div>
						<?php endif; ?>	

						<?php if ( is_active_sidebar('footer-2') ) : ?>
						<div class="mkdf-column-content mkdf-grid-col-2">
							
								<?php dynamic_sidebar('footer-2'); ?>	
								
						</div>
						<?php endif; ?>	

						<?php if ( is_active_sidebar('footer-3') ) : ?>
						<div class="mkdf-column-content mkdf-grid-col-2">
							
								<?php dynamic_sidebar('footer-3'); ?>	
							
						</div>
						<?php endif; ?>	


					</div>
				</div>
			</div>
			<div class="mkdf-footer-bottom-holder">
				<div class="mkdf-footer-bottom-inner mkdf-grid">
					<div class="mkdf-grid-row ">
						<div class="mkdf-grid-col-6">
							<div class="widget mkdf-footer-bottom-column-2 widget_text">
								<div class="textwidget">
									<p>
										<a href="/privacy-policy" target="_blank">Политика конфиденциальности
										</a>
									</p>
								</div>
								
							</div>
						</div>
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
</div>
  
<section class="mkdf-side-menu">
	<a class="mkdf-close-side-menu mkdf-close-side-menu-predefined" href="#">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 32.5 16.9" style="enable-background:new 0 0 32.5 16.9;" xml:space="preserve">
			<style type="text/css">
				.closest0 {
					fill: none;
					stroke: #000000;
					stroke-width: 2;
					stroke-miterlimit: 10;
				}
			</style>
			<line class="closest0" x1="1.8" y1="2" x2="30.8" y2="15" />
			<line class="closest0" x1="1.8" y1="15" x2="30.8" y2="2" />
		</svg> </a>
	<div class="mkdf-side-menu-wrapper">
		<div id="custom_html-4" class="widget_text widget mkdf-sidearea widget_custom_html">
			<div class="textwidget custom-html-widget"><a href="index.html"> <img
						src="img/logo/logo-svg.svg" alt="alt"
						style="max-width: 144px;" /></a>
			</div>
		</div>
		<div class="widget mkdf-separator-widget">
			<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
				<div class="mkdf-separator" style="border-style: solid;margin-top: 2px"></div>
			</div>
		</div>
		<div id="text-8" class="widget mkdf-sidearea widget_text">
			<div class="textwidget">
				<p style="font-size: 18px; line-height: 26px; color: #878787;">Lorem ipsum dolor sit amet, consectetur
					adipisicing elit sed.</p>
			</div>
		</div>
		<div class="widget mkdf-separator-widget">
			<div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
				<div class="mkdf-separator" style="border-style: solid;margin-top: 2px"></div>
			</div>
		</div>
		<div id="mkdf_instagram_widget-4" class="widget mkdf-sidearea widget_mkdf_instagram_widget"></div>
	</div>
	<div class="mkdf-side-area-bottom">
		<div class="widget mkdf-social-icons-group-widget text-align-center">
			<div class="mkdf-widget-title-holder">
				<h5 class="mkdf-widget-title">Follow us on</h5>
			</div> <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b"
				style="color: #878787;" href="https://www.instagram.com/qodeinteractive/" target="_blank">
				<span class="mkdf-social-icon-widget ion-social-instagram"></span> </a>
			<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b" style="color: #878787;"
				href="https://twitter.com/qodeinteractive/" target="_blank">
				<span class="mkdf-social-icon-widget ion-social-twitter"></span> </a>
			<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b" style="color: #878787;"
				href="https://www.facebook.com/QodeInteractive/" target="_blank">
				<span class="mkdf-social-icon-widget ion-social-facebook"></span> </a>
			<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover" data-hover-color="#59815b" style="color: #878787;"
				href="https://www.youtube.com/QodeInteractiveVideos" target="_blank">
				<span class="mkdf-social-icon-widget ion-social-youtube"></span> </a>
		</div>
	</div>
</section>


<a id='mkdf-back-to-top' href='#'>
	<span class="mkdf-icon-stack">
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 22.3 22.3" style="enable-background:new 0 0 22.3 22.3;" xml:space="preserve">
			<g>
				<path d="M10.8,2" />
				<line x1="10.8" y1="20.9" x2="10.8" y2="2" />
				<line x1="11.5" y1="1.3" x2="10.8" y2="2" />
				<line x1="10.8" y1="2" x2="0.9" y2="11.9" />
				<path d="M10.8,2" />
				<line x1="20.7" y1="12" x2="10.8" y2="2" />
			</g>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 22.3 22.3" style="enable-background:new 0 0 22.3 22.3;" xml:space="preserve">
			<g>
				<path d="M10.8,2" />
				<line x1="10.8" y1="20.9" x2="10.8" y2="2" />
				<line x1="11.5" y1="1.3" x2="10.8" y2="2" />
				<line x1="10.8" y1="2" x2="0.9" y2="11.9" />
				<path d="M10.8,2" />
				<line x1="20.7" y1="12" x2="10.8" y2="2" />
			</g>
		</svg>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 12">
			<path
				d="M1.5 10.1C1.1 9.5.9 8.7.9 7.6V4.4c0-1.1.2-1.9.6-2.5C2 1.3 2.7 1 3.7 1c1 0 1.7.2 2.1.7s.6 1.2.6 2.1v.6H4.6v-.7c0-.4-.1-.8-.2-1s-.3-.3-.6-.3c-.4 0-.6.1-.7.4-.1.2-.2.6-.2 1v4.3c0 .5.1.8.2 1 .1.2.4.4.7.4.3 0 .6-.1.7-.4.1-.3.2-.6.2-1.1V7h-.9V5.9h2.7v5H5.3l-.2-.9c-.3.7-.8 1-1.6 1-.9 0-1.6-.3-2-.9zM9 10.2c-.4-.6-.6-1.4-.6-2.4V4.2c0-1 .2-1.8.7-2.4.4-.5 1.1-.8 2.1-.8s1.8.3 2.2.8c.4.5.7 1.3.7 2.4v3.6c0 1-.2 1.8-.7 2.4-.4.5-1.1.8-2.2.8-1 0-1.7-.3-2.2-.8zm2.9-1c.1-.2.2-.5.2-.9V3.7c0-.4-.1-.7-.2-.9-.1-.2-.3-.3-.7-.3s-.6.1-.7.3c-.1.2-.2.5-.2.9v4.6c0 .4.1.7.2.9.1.2.3.3.7.3.4.1.6-.1.7-.3z" />
			</svg>
	</span>
</a>


<a href="#" target="_blank" class="" id="widget-call" rel="noopener noreferrer">
  <span class="mkdf-icon-element ion-android-call" id="widget-call__icon"></span>
</a>


<div class="cta-overlay" id="cta-overlay"></div>

<div class="cta-modal" id="cta-modal-form">
	<div class="cta-modal__close-btn" id="cta-modal-form__close-btn">
		<i class="fa fa-times" title="окно"></i>
	</div>
	<div class="section-spacer-bt-50 common__form">
		<div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: center">
		<div class="mkdf-st-inner">

			<h3 class="mkdf-st-title">
				Оставьте <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
					<span class="mkdf-st-highlight-title" style="color: #59815b">заявку</span> !
					<span class="mkdf-st-highlight">

						<span class="mkdf-active-hover-middle"></span>

					</span>
				</span> </h3>
				<p>
					Мы перезвоним вам и уточним детали!
				</p>

		</div>
	</div>

	<div class="vc_empty_space" style="height: 27px"><span class="vc_empty_space_inner"></span></div>

	<div role="form" class="wpcf7" id="wpcf7-f1433-p1182-o1 common__form" lang="en-US" dir="ltr">
		
		<form class="wpcf7-form init cf7_custom_style_1">

			<div class="contact-us">
				<!-- <span class="wpcf7-form-control-wrap your-name"> -->
				<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Имя">
				<!-- </span> -->
				<!-- <span class="wpcf7-form-control-wrap your-email"> -->
				<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Телефон">
				<!-- </span> -->
				<button type="submit" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">
					<span class="mkdf-btn-text">Отправить</span>
				</button>
				<span class="mkdf-btn-text form-caption">
					Нажимая на кнопку "Отправить", вы соглашаетесь с <a href="/privacy-policy">Политикой конфиденциальности</a>
				</span>
				<span class="ajax-loader"></span>
			</div>
			<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
		</form>
	</div>


	</div>
	
</div>

<div class="cta-modal" id="cta-modal-consult">
	<div class="cta-modal__close-btn" id="cta-modal-consult__close-btn">
		<i class="fa fa-times" title="окно"></i>
	</div>
	<div class="section-spacer-bt-50 common__form">
		<div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: center">
		<div class="mkdf-st-inner">

			<h3 class="mkdf-st-title">
				Закажите <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
					<span class="mkdf-st-highlight-title" style="color: #59815b">консультацию</span> !
					<span class="mkdf-st-highlight">

						<span class="mkdf-active-hover-middle"></span>

					</span>
				</span> </h3>
				<p>
					Мы перезвоним вам и уточним детали!
				</p>

		</div>
	</div>

	<div class="vc_empty_space" style="height: 27px"><span class="vc_empty_space_inner"></span></div>

	<div role="form" class="wpcf7" id="wpcf7-f1433-p1182-o1 common__form" lang="en-US" dir="ltr">
		
		<form class="wpcf7-form init cf7_custom_style_1">

			<div class="contact-us">
				<!-- <span class="wpcf7-form-control-wrap your-name"> -->
				<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Имя">
				<!-- </span> -->
				<!-- <span class="wpcf7-form-control-wrap your-email"> -->
				<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Телефон">
				<!-- </span> -->
				<button type="submit" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">
					<span class="mkdf-btn-text">Заказать звонок</span>
				</button>
				<span class="mkdf-btn-text form-caption">
					Нажимая на кнопку "Заказать звонок", вы соглашаетесь с <a href="/privacy-policy">Политикой конфиденциальности</a>
				</span>
				<span class="ajax-loader"></span>
			</div>
			<div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
		</form>
	</div>

	</div>
</div>




	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
		
			<span class="sep"> | </span>
				
		</div>
	</footer> -->
	<!-- #colophon -->




<?php wp_footer(); ?>

</body>
</html>
