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

		<!-- bottom-bar -->
		<div class="mkdf-top-bar bottom-bar">

			<div class="mkdf-vertical-align-containers">
				<div class="mkdf-position-left">
					<div class="mkdf-position-left-inner">
						<p>
							<span>Karjalaevent.ru  </span> &copy; <?php echo date("Y"); ?> | 
							Разработка сайта: <a href="http://anastasia-pavlova.ru" target="_blank">AP
							</a>
						</p>
						
					</div>
				</div>
				<div class="mkdf-position-right">
					<div class="mkdf-position-right-inner">
						<div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">
							
							<a href="/privacy-policy" target="_blank">Политика конфиденциальности
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- ./bottom-bar -->

	</div>
</div>
  
 <?php get_template_part('template-parts/side-menu'); ?>

 <?php get_template_part('template-parts/back-totop'); ?>

 <?php get_template_part('template-parts/widget-call'); ?>

 <?php get_template_part('template-parts/modals'); ?>

 
<?php wp_footer(); ?>

</body>
</html>
