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

  $mg_cases__title = get_field("mg-cases__title", $args['page_id'] );
  $mg_cases = get_field("mg-cases", $args['page_id'] );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
  return;
endif;

?>

<?php if( $mg_cases__title ) { ?>
<!-- cases ... -->
<div class="mkdf-row-grid-section-wrapper bg_aquarell common-padding marriage-page__block_cases">
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
      <div class="wpb_column vc_column_container vc_col-sm-12">

        <div class="vc_column-inner">

          <div class="wpb_wrapper">
            <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
              >
              <div class="mkdf-st-inner">

                <h2 class="mkdf-st-title">
                  <?php echo $mg_cases__title; ?>
                </h2>
              </div>
            </div>

            <?php if( !empty($mg_cases) ) { ?>
            <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">



              <div class="cases-slider__wrapper">

                <div class="cases-slider">

                  <?php 
                    foreach( $mg_cases as $mg_cases__item ) {

                      $block_title = $mg_cases__item['block-title'];
                      $block_descr = $mg_cases__item['block-descr'];
                      $block_img = $mg_cases__item['block-img'];
                    
                    
                  ?>

                  <?php if($block_title): ?>

                  <div class="cases-slider__item">
                    <div class="cases-slider__img">
                      <img src="<?php echo $block_img["url"]; ?>" class="attachment-full size-full image__animation-tranform"
                        alt="<?php echo $block_img["alt"]; ?>">
                    </div>

                    <div class="cases-slider__descr">

                      <h3 class="cases-slider__descr-name">
                        <?php echo $block_title; ?>
                      </h3>


                      <div class="cases-slider__text">

                        <div class="mkdf-post-excerpt">
                          <?php echo $block_descr; ?>
                        </div>

                      </div>


                    </div>
                  </div>

                  <?php endif; 
                    }
                  ?>



                </div>

                <div class="common-slider-arrows slider-arrows cases-slider__arrows">
                  <div class="common-slider-arrow-left slider-arrow__left cases-slider__arrows_arrow-left">
                    <img class="arrow-white"
                      src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>"
                      alt="назад">
                    <img class="arrow-green"
                      src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>"
                      alt="back">
                  </div>
                  <div
                    class="common-slider-arrow-right slider-arrow__right cases-slider__arrows_arrow-right">
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
<!-- ./cases ... -->
<?php } ?>