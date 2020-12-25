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

  $mg_shop__title = get_field("mg-shop__title", $args['page_id']);
  $mg_shop__slider = get_field("mg-shop__slider", $args['page_id']);

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;
?>

<?php if( $mg_shop__title ) { ?>
<!-- МАГАЗИН -->
<div class="vc_row wpb_row vc_row-fluid vc_custom_1579107555274 vc_row-has-fill common-padding trips-page__block_shop">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1579085340244">
          <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                  <div class="mkdf-st-inner">
                    
                    <h2 class="mkdf-st-title trips-page__block_shop-title">
                      <?php echo $mg_shop__title; ?>
                    </h2>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php if( !empty( $mg_shop__slider ) ) { ?>
        <div class="mkdf-row-grid-section-wrapper">
          <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                    <div
                      class="mkdf-pl-holder mkdf-grid-list mkdf-disable-bottom-space mkdf-standard-layout mkdf-five-columns mkdf-no-space mkdf-info-below-image">
                      <div class="mkdf-pl-outer mkdf-outer-space">

                        <div class="shop-slider__wrapper">
                          <div class="shop-slider">

                            <?php 
                              foreach( $mg_shop__slider as $mg_shop__slider__item ) {

                                $item_img = $mg_shop__slider__item['item_img'];
                                $item_title = $mg_shop__slider__item['item_title'];
                                
                              
                            ?>
                            <?php if( $item_img || $item_title): ?>

                            <div class="shop-slider__item">
                              <div class="mkdf-pli">
                                <div class="mkdf-pli-inner">
                                  <div class="mkdf-pli-image">
                                    <div class="mkdf-mark-wrapper">
                                    </div>
                                    <a href="<?php get_site_url() . '/magazin'?>">
                                      <img src="<?php echo $item_img["url"]; ?>"
                                      class="attachment-woocommerce_single size-woocommerce_single wp-post-image image__animation-tranform"
                                      alt="<?php echo $item_img["alt"]; ?>">
                                    </a>
                                    
                                  </div>

                                </div>
                                <div class="mkdf-pli-text-wrapper">

                                <a href="<?php get_site_url() . '/magazin'?>">
                                  <h3 class="entry-title mkdf-pli-title">
                                    <span>
                                      <?php echo $item_title; ?>
                                    </span>
                                  </h3>
                                </a>
                                
                                </div>
                              </div>

                            </div>

                            <?php endif; ?>

                            <?php 
                                }
                              ?>

                          </div>
                          <div class="common-slider-arrows slider-arrows shop-slider__arrows">
                            <div
                              class="common-slider-arrow-left slider-arrow__left shop-slider__arrows_arrow-left">
                              <img class="arrow-white"
                                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>"
                                alt="назад">
                              <img class="arrow-green"
                                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>"
                                alt="back">

                            </div>
                            <div
                              class="common-slider-arrow-right slider-arrow__right shop-slider__arrows_arrow-right">
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
<?php } ?>