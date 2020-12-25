<?php
/**
 * Template part for displaying modal windows content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>


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
					<span class="mkdf-st-highlight-title" style="color: #49706c">заявку</span> !
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

	<div role="form" class="wpcf7 common__form">
		
		<?php echo do_shortcode('[contact-form-7 id="2050" title="Форма заявки (модальное окно)"]'); ?>

	</div>


	</div>
	
</div>

<div class="cta-modal" id="cta-modal-consult">
	<div class="cta-modal__close-btn" id="cta-modal-consult__close-btn">
		<i class="fa fa-times" title="окно"></i>
	</div>
	<div class="common__form">
		<div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: center">
		<div class="mkdf-st-inner">

			<h3 class="mkdf-st-title">
				Закажите <span class="mkdf-st-highlight-title-holder" style="color: #f2f1e7">
					<span class="mkdf-st-highlight-title" style="color: #49706c">консультацию</span> !
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

	<div role="form" class="wpcf7 common__form">
		
		<?php echo do_shortcode('[contact-form-7 id="2049" title="Форма заказа консультации (модальное окно)"]'); ?>
	
	</div>

	</div>
</div>

