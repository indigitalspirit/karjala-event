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

  $tr_trips = get_field("tr-trips", $args['page_id'] );


else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( !empty( $tr_trips) ) { ?>
<!-- trips ... -->
  <?php 

  $block_position_counter = 0;

  foreach( $tr_trips as $tr_trip ) {
    if( !empty( $tr_trip ) ) {
      $block_position_counter = $block_position_counter + 1;
      

      $item_title = $tr_trip['item-title'];
      $item_descr = $tr_trip['item-descr'];
      $item_btn_text = $tr_trip['item-btn_text'];
      $item_btn_link = $tr_trip['item-btn_link'];
      $item_slider_array = $tr_trip['item-slider'];


  ?>
  
  <?php if( $item_title ): ?>
  <div class="mkdf-row-grid-section-wrapper bg_aquarell common-padding trips-page__block_trips ">
    <div class="mkdf-row-grid-section">
      <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
        <div class="wpb_column vc_column_container vc_col-sm-12">

          <?php if( $item_title ): ?>
          <div class="vc_column-inner">
            <div class="wpb_wrapper">
              <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                <div class="mkdf-st-inner">
                  
                  <h2 class="mkdf-st-title">
                    <?php echo $item_title; ?>
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>


          <div class="vc_column-inner">

            <div class="wpb_wrapper">
              <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">

              <?php if( ( $block_position_counter % 2 ) ): ?>

                
                <?php if( !empty($item_slider_array) ): ?>
                <div class="mkdf-eh-item">
                  <div class="trips-type-slider<?php echo '_' . $block_position_counter; ?>__wrapper">
                    <div class="trips-type-slider<?php echo '_' . $block_position_counter; ?>">
                      <?php 
                        foreach( $item_slider_array as $item_slider_array__item ) {

                          if( $item_slider_array__item["url"] ):
                        
                        
                      ?>
                      <div class="trips-type-slider<?php echo '_' . $block_position_counter; ?>__item">
                        <img src="<?php echo $item_slider_array__item["url"];?>" class="attachment-full size-full image__animation-tranform"
                          alt="<?php echo $item_slider_array__item["alt"];?>">
                      </div>
                      <?php 
                          endif;
                        }

                      ?>


                    </div>
                    <div class="common-slider-arrows trips-type-slider<?php echo '_' . $block_position_counter; ?>__arrows">
                      <div class="common-slider-arrow-left trips-type-slider<?php echo '_' . $block_position_counter; ?>__arrows_arrow-left">
                        <img class="arrow-white"
                          src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                          alt="назад">
                        <img class="arrow-green"
                          src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>"
                          alt="back">
                      </div>
                      <div class="common-slider-arrow-right trips-type-slider<?php echo '_' . $block_position_counter; ?>__arrows_arrow-right">
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

                <?php if( $item_descr ): ?>
                <div class="mkdf-eh-item">
                  <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-6011">
                      <div class="mkdf-section-title-holder mkdf-st-highlight">
                        <div class="mkdf-st-inner">

                          <div class="mkdf-st-text">
                            <?php echo $item_descr; ?>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>


              <?php else: ?>

                <?php if( $item_descr ): ?>
                <div class="mkdf-eh-item">
                  <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-6011">
                      <div class="mkdf-section-title-holder mkdf-st-highlight">
                        <div class="mkdf-st-inner">

                          <div class="mkdf-st-text">
                            <?php echo $item_descr; ?>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
                <?php if( !empty($tr_service__slider) ): ?>
                <div class="mkdf-eh-item">
                  <div class="trips-type-slider<?php echo '_' . $block_position_counter; ?>__wrapper">
                    <div class="trips-type-slider<?php echo '_' . $block_position_counter; ?>">
                      <?php 
                        foreach( $item_slider_array as $item_slider_array__item ) {

                          if( $item_slider_array__item["url"] ):
                        
                        
                      ?>
                      <div class="trips-type-slider<?php echo '_' . $block_position_counter; ?>__item">
                        <img src="<?php echo $item_slider_array__item["url"];?>" class="attachment-full size-full image__animation-tranform"
                          alt="<?php echo $item_slider_array__item["alt"];?>">
                      </div>
                      <?php 
                          endif;
                        }

                      ?>


                    </div>
                    <div class="common-slider-arrows trips-type-slider<?php echo '_' . $block_position_counter; ?>__arrows">
                      <div class="common-slider-arrow-left trips-type-slider<?php echo '_' . $block_position_counter; ?>__arrows_arrow-left">
                        <img class="arrow-white"
                          src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                          alt="назад">
                        <img class="arrow-green"
                          src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>"
                          alt="back">
                      </div>
                      <div class="common-slider-arrow-right trips-type-slider<?php echo '_' . $block_position_counter; ?>__arrows_arrow-right">
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

              <?php endif; ?>

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php 
    }
  } 
  ?>
<?php } ?>