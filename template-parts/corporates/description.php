<?php
/**
 * Template part for displaying page block
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>

<?php 
   

?>


<?php 

if( $args['page_id'] ):
  $cr_service__title = get_field("cr-service__title", $args['page_id'] );
  $cr_service__text = get_field("cr-service__text", $args['page_id'] );
  $cr_service__slider = get_field("cr-service__slider", $args['page_id'] );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА DESCRIPTION';
endif;


if( $cr_service__text ) { 
  
  ?>
<!-- we know -->
<div class="vc_row wpb_row vc_row-fluid we-know__block">
  <div class="mkdf-eh-item-inner">
    <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

      <div class="mkdf-section-title-holder">
        <div class="mkdf-st-inner">
          <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

            <!-- content -->

            <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">

              <div class="mkdf-eh-item">
                <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-6011">
                    <div class="mkdf-section-title-holder mkdf-st-highlight">
                      <div class="mkdf-st-inner">

                        <div class="mkdf-st-text we-know__block-text">
                      
                          <?php echo $cr_service__text; ?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php if( !empty($cr_service__slider) ) { ?>

              <div class="mkdf-eh-item">

                <div class="we-know-slider__wrapper">
                  <div class="we-know-slider">

                    <?php 
                    foreach( $cr_service__slider as $service_slider__item ) {
                    
                  ?>

                    <?php if( $service_slider__item ): ?>
                    <div class="we-know-slider__item">
                      <img src="<?php echo $service_slider__item["url"]; ?>"
                        alt="<?php echo $service_slider__item["alt"]; ?>" class=" image__animation-tranform">
                    </div>
                    <?php endif; ?>

                    <?php 
                    }
                  ?>

                  </div>

                  <div class="common-slider-arrows we-know-slider__arrows">
                    <div class="common-slider-arrow-left we-know-slider__arrows_arrow-left">
                      <img class="arrow-white"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>"
                        alt="назад">
                      <img class="arrow-green"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>"
                        alt="back">
                    </div>
                    <div class="common-slider-arrow-right we-know-slider__arrows_arrow-right">
                      <img class="arrow-white"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>"
                        alt="вперед">
                      <img class="arrow-green"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>"
                        alt="forward">

                    </div>
                  </div>

                </div>

              </div>

              <?php } ?>

            </div>


          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- ./we know -->
<?php } ?>