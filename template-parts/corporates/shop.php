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

  $cr_shop__title = get_field("cr-shop__title", $args['page_id']);
  $cr_shop__slider = get_field("cr-shop__slider", $args['page_id']);

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;


if( $cr_shop__title ) { ?>
<!-- shop -->
<div class="vc_row wpb_row vc_row-fluid corporate-shop__block">
  <div class="mkdf-eh-item-inner">
    <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

      <div class="mkdf-section-title-holder">
        <div class="mkdf-st-inner">
          <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

            <!-- content -->

            <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
              >
              <div class="mkdf-st-inner">
                <h2 class="mkdf-st-title corporate-shop__block-title">
                  <?php echo $cr_shop__title; ?>
                </h2>

              </div>
            </div>



            <?php if( !empty( $cr_shop__slider ) ) { ?>
            <div
              class="mkdf-pl-holder mkdf-grid-list mkdf-disable-bottom-space mkdf-standard-layout mkdf-five-columns mkdf-no-space mkdf-info-below-image">
              <div class="mkdf-pl-outer mkdf-outer-space">

                <div class="shop-slider__wrapper">
                  <div class="shop-slider">
                    <?php 
                    foreach( $cr_shop__slider as $cr_shop__slider__item ) {

                      $item_img = $cr_shop__slider__item['item_img'];
                      $item_title = $cr_shop__slider__item['item_title'];
                      
                    
                  ?>
                    <?php if( $item_img["url"] || $item_title): ?>
                    <div class="shop-slider__item">
                      <div class="mkdf-pli">
                        <div class="mkdf-pli-inner">
                          <div class="mkdf-pli-image">
                            <div class="mkdf-mark-wrapper">
                            </div>
                            <a href="<?php get_site_url() . '/magazin'?>">
                              <img src="<?php echo $item_img["url"];?>"
                              class="attachment-woocommerce_single size-woocommerce_single wp-post-image image__animation-tranform"
                              alt="<?php echo $item_img["alt"];?>">
                            </a>
                          </div>

                          
                        </div>
                        <div class="mkdf-pli-text-wrapper">

                        <a href="<?php get_site_url() . '/magazin'?>">
                          <h3 class="entry-title mkdf-pli-title">
                            <span><?php echo $item_title; ?></span>
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
                    <div class="common-slider-arrow-left slider-arrow__left shop-slider__arrows_arrow-left">
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
            <?php } ?>



          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- ./shop -->
<?php } ?>