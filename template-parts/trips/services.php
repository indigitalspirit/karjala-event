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

  $tr_service__title = get_field("tr-service__title", $args['page_id'] );
  $tr_service__text = get_field("tr-service__text", $args['page_id'] );
  $tr_service__slider = get_field("tr-service__slider", $args['page_id'] );
  //var_dump($cr_types );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
  return;
endif;

?>

<?php if( $tr_service__title ) { ?>
<!-- Мы знаем ... -->
<div class="mkdf-row-grid-section-wrapper bg_aquarell common-padding trips-page__block_we-know">
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
      <div class="wpb_column vc_column_container vc_col-sm-12">

        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
              <div class="mkdf-st-inner">
                <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                <h2 class="mkdf-st-title">
                  <?php echo $tr_service__title; ?>
                </h2>
              </div>
            </div>
          </div>
        </div>


        <div class="vc_column-inner">

          <div class="wpb_wrapper">
            <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">

              <?php if( $tr_service__text ): ?>
              <div class="mkdf-eh-item">
                <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-6011">
                    <div class="mkdf-section-title-holder mkdf-st-highlight">
                      <div class="mkdf-st-inner">

                        <div class="mkdf-st-text">
                          <?php echo $tr_service__text; ?>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <?php if( !empty($tr_service__slider) ): ?>
              <div class="mkdf-eh-item">
                <div class="we-know-slider__wrapper">
                  <div class="we-know-slider">
                    <?php 
                      foreach( $tr_service__slider as $tr_service__slider__item ) {

                        if( $tr_service__slider__item["url"] ):
                      
                      
                    ?>
                    <div class="we-know-slider__item">
                      <img src="<?php echo $tr_service__slider__item["url"];?>" class="attachment-full size-full image__animation-tranform"
                        alt="<?php echo $tr_service__slider__item["alt"];?>">
                    </div>
                    <?php 
                        endif;
                      }

                    ?>


                  </div>
                  <div class="common-slider-arrows we-know-slider__arrows">
                    <div class="common-slider-arrow-left we-know-slider__arrows_arrow-left">
                      <img class="arrow-white"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                        alt="назад">
                      <img class="arrow-green"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>"
                        alt="back">
                    </div>
                    <div class="common-slider-arrow-right we-know-slider__arrows_arrow-right">
                      <img class="arrow-white"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                        alt="вперед">
                      <img class="arrow-green"
                        src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>"
                        alt="forward">
                    </div>
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
<?php } ?>