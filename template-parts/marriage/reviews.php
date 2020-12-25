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

  $mg_reviews__title = get_field("mg-reviews__title", $args['page_id']);
  $mg_reviews = get_field("mg-reviews", $args['page_id']);

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( $mg_reviews__title ) { ?>
<!-- ОТЗЫВЫ -->
<div class="mkdf-row-grid-section-wrapper common-padding trips-page__block_reviews">
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">

      <!--  -->
      <div class="wpb_column vc_column_container vc_col-sm-12">

        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
              <div class="mkdf-st-inner">
                <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                <h2 class="mkdf-st-title">
                  <?php echo $mg_reviews__title; ?>
                </h2>

              </div>
            </div>
          </div>
        </div>

        <?php if( !empty($mg_reviews) ) { ?>
        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="mkdf-elements-holder mkdf-one-column  mkdf-responsive-mode-768">
              <div class="mkdf-eh-item">
                <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-6938">
                    <div
                      class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-normal-space mkdf-bl-pag-no-pagination">
                      <div class="mkdf-bl-wrapper mkdf-outer-space">

                        <div class="reviews-slider__wrapper">

                          <div class="reviews-slider">
                            <?php 
                              foreach( $mg_reviews as $mg_review__item ) {

                                $item_img = $mg_review__item['item-img'];
                                $item_name = $mg_review__item['item-name'];
                                $item_regalias = $mg_review__item['item-regalias'];
                                $item_text = $mg_review__item['item-text'];
                              
                              
                            ?>
                            <?php if($item_img["url"] || $item_text): ?>

                            <div class="reviews-slider__item">
                              <?php if( $item_img ): ?>
                              <div class="reviews-slider__img">
                                <img src="<?php echo $item_img["url"]; ?>" class="attachment-full size-full image__animation-tranform"
                                  alt="<?php echo $item_img["alt"]; ?>">
                              </div>
                              <?php endif; ?>

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

                          <div class="common-slider-arrows slider-arrows reviews-slider__arrows">
                            <div
                              class="common-slider-arrow-left slider-arrow__left reviews-slider__arrows_arrow-left">
                              <img class="arrow-white"
                                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>"
                                alt="назад">
                              <img class="arrow-green"
                                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>"
                                alt="back">
                            </div>
                            <div
                              class="common-slider-arrow-right slider-arrow__right reviews-slider__arrows_arrow-right">
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
            </div>
          </div>
        </div>
        <?php } ?>



      </div>



    </div>
  </div>
</div>
<!-- ./ОТЗЫВЫ -->
<?php } ?>