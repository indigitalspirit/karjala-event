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
  $cr_reviews__title = get_field("cr-reviews__title", $args['page_id']);
  $cr_reviews = get_field("cr-reviews", $args['page_id']);
else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;


if( $cr_reviews__title ) { ?>
  <!-- reviews -->
  <div class="vc_row wpb_row vc_row-fluid corporate-reviews__block">
    <div class="mkdf-eh-item-inner">
      <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

        <div class="mkdf-section-title-holder">
          <div class="mkdf-st-inner">
            <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

              <!-- content -->
              <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
                >
                <div class="mkdf-st-inner">
                  <h2 class="mkdf-st-title corporate-reviews__block-title">
                    <?php echo $cr_reviews__title; ?>
                  </h2>


                </div>
              </div>

              <?php if( !empty($cr_reviews) ) { ?>

              <div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
                <div class="mkdf-eh-item">
                  <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-6938">
                      <div
                        class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-normal-space mkdf-bl-pag-no-pagination">

                        <div class="reviews-slider__wrapper">

                          <div class="reviews-slider">

                            <?php 
                            foreach( $cr_reviews as $cr_review__item ) {

                              $item_img = $cr_review__item['item-img'];
                              $item_name = $cr_review__item['item-name'];
                              $item_regalias = $cr_review__item['item-regalias'];
                              $item_text = $cr_review__item['item-text'];
                            
                            
                          ?>

                            <?php if( !empty($item_img) || $item_text): ?>
                            <div class="reviews-slider__item">
                              <div class="reviews-slider__img">
                                <img src="<?php echo $item_img["url"]; ?>" class="attachment-full size-full image__animation-tranform"
                                  alt="<?php echo $item_img["alt"]; ?>">
                              </div>

                              <div class="reviews-slider__descr">

                                <h3 class="reviews-slider__descr-name">


                                  <?php echo $item_name; ?>
                                </h3>

                                <h4 class="reviews-slider__descr-author">


                                  <?php echo $item_regalias; ?>
                                </h4>

                                <div class="reviews-slider__text">

                                  <div class="mkdf-post-excerpt">
                                    <?php echo $item_text; ?> 
                                  </div>

                                </div>


                              </div>
                            </div>
                            <?php endif; ?>

                            <?php
                                }

                            ?>



                          </div>


                          <div class="slider-arrows common-slider-arrows reviews-slider__arrows">
                            <div
                              class="slider-arrow__left common-slider-arrow-left reviews-slider__arrows_arrow-left">
                              <img class="arrow-white"
                                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>"
                                alt="назад">
                              <img class="arrow-green"
                                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>"
                                alt="back">
                            </div>
                            <div
                              class="slider-arrow__right common-slider-arrow-right  reviews-slider__arrows_arrow-right">
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
  <?php } ?>