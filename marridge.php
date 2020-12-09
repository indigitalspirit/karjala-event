<?php
/*
Template Name: Свадьбы
Template Post Type: page
*/
get_header();
?>


<?php
  
    $mg_main__title = get_field("mg-main__title");
    $mg_main__img = get_field("mg-main__img");
    $mg_main__icons = get_field("mg-main__icons");
    $mg_main__btn_1 = get_field("mg-main__btn_1");
    $mg_main__btn_2 = get_field("mg-main__btn_2");


    $mg_marriage__title = get_field("mg-marriage__title");
    $mg_marriage__text = get_field("mg-marriage__text");
    $mg_marriage__link = get_field("mg-marriage__link");


    $mg_cases__title = get_field("mg-cases__title");
    $mg_cases = get_field("mg-cases");


    $mg_reviews__title = get_field("mg-reviews__title");
    $mg_reviews = get_field("mg-reviews");


    $mg_about__title = get_field("mg-about__title");
    $mg_about__descr = get_field("mg-about__descr");
    $mg_about__slider = get_field("mg-about__slider");


    $mg_tent__title = get_field("mg-tent__title");
    $mg_tent__text = get_field("mg-tent__text");
    $mg_tent__link = get_field("mg-tent__link");
    $mg_tent__btn_link = get_field("mg-tent__btn_link");
    $mg_tent__btn_text = get_field("mg-tent__btn_text");


    $mg_mailform__img = get_field("mg-mailform__img");
    $mg_mailform__title = get_field("mg-mailform__title");
    $mg_mailform__descr = get_field("mg-mailform__descr");
    $mg_mailform__shortcode = get_field("mg-mailform__shortcode");
    $mg_mailform__descr_2 = get_field("mg-mailform__descr_2");
    $mg_mailform__btn = get_field("mg-mailform__btn");


    $mg_shop__title = get_field("mg-shop__title");
    $mg_shop__slider = get_field("mg-shop__slider");


    $mg_blog__title = get_field("mg-blog__title");
    $mg_blog__item_slug_1 = get_field("mg-blog__item-slug_1");
    $mg_blog__item_slug_2 = get_field("mg-blog__item-slug_2");
    $mg_blog__item_slug_3 = get_field("mg-blog__item-slug_3");
    $mg_blog__btn_text = get_field("mg-blog__btn-text");
    $mg_blog__btn_link = get_field("mg-blog__btn-link");

    $mg_form__title = get_field("mg-form__title");
    $mg_form__shortcode = get_field("mg-form__shortcode");


  ?>

<div class="mkdf-content">
  <div class="mkdf-content-inner">


    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner marridge">
        <div class="mkdf-grid-row">

          <div class="mkdf-page-content-holder mkdf-grid-col-12">

            <?php if( $mg_main__title ) { ?>
            <!-- top-block -->
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 marriage-page__top"
                  <?php if( $mg_main__img ): ?>style="background: url(<?php echo $mg_main__img; ?>) center center no-repeat;background-size: cover;"
                  <?php endif; ?>>

                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt=""
                    class="top-block__top-bg">
                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt=""
                    class="top-block__bottom-bg">



                  <div class="mkdf-section-title-holder ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="">
                          <div class="mkdf-section-title-holder ">
                            <div class="mkdf-st-inner">
                              <h2 class="mkdf-st-title marriage-page__top-title">
                                <?php echo $mg_main__title; ?>
                              </h2>
                              <div class="marriage-page__top-icons-set">

                                <?php if( !empty($mg_main__icons) ) { ?>

                                <?php 
																		foreach( $mg_main__icons as $mg_main__icon ) {
																			$icon_img = $mg_main__icon['item_icon'];
																			$icon_text = $mg_main__icon['item_text'];
																		
																	    if($icon_img && $icon_text){ 
                                    ?>

                                <div class="marriage-page__top-icon">

                                  <span>
                                    <img src="<?php echo $icon_img; ?>" alt="<?php echo $icon_text; ?>">
                                  </span>
                                  <p><?php echo $icon_text; ?></p>

                                </div>

                                <?php 
                                      } 

                                    }
                                  }


																?>



                              </div>
                              <div class="marriage-page__top-btns">
                                <?php if( $mg_main__btn_1['cr-btn_text'] && $mg_main__btn_1['cr-btn_link'] ) { ?>

                                <a href="<?php echo $mg_main__btn_1['cr-btn_link']; ?>"
                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-consult__btn marriage-page__top-btn">
                                  <span class="mkdf-btn-text">
                                    <?php echo $mg_main__btn_1['cr-btn_text']; ?>
                                  </span>

                                </a>

                                <?php } ?>

                                <?php if( $mg_main__btn_2['cr-btn_text'] && $mg_main__btn_2['cr-btn_link'] ) { ?>

                                <a download
                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-form marriage-page__top-btn">
                                  <span class="mkdf-btn-text">
                                    <?php echo $mg_main__btn_2['cr-btn_text']; ?>
                                  </span>

                                </a>
                                <?php } ?>

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
            <!-- ./top-block -->
            <?php } ?>


            <?php if( $mg_marriage__title ) { ?>
            <!-- marrige services -->
            <div class="mkdf-row-grid-section-wrapper marriage-page__block-services">
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1575627713204 vc_row-has-fill">
                  <div class="wpb_column vc_column_container vc_col-sm-12">

                    <div class="vc_column-inner">

                      <div class="wpb_wrapper">


                        <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">

                          <div class="mkdf-eh-item marriage-page__block-services-left">
                            <?php echo $mg_marriage__link; ?>


                          </div>

                          <div class="mkdf-eh-item marriage-page__block-services-right">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6011">





                                <div class="mkdf-section-title-holder mkdf-st-highlight">
                                  <div class="mkdf-st-inner">

                                    <h2 class="mkdf-st-title marriage-page__block-services-title">
                                      <?php echo $mg_marriage__title; ?>
                                    </h2>

                                    <p class="mkdf-st-text marriage-page__block-services-txt"
                                     >
                                      <?php echo $mg_marriage__text; ?>
                                    </p>

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
            </div>
            <!-- ./marrige services -->
            <?php } ?>


            <?php if( $mg_cases__title ) { ?>
            <!-- cases ... -->
            <div class="mkdf-row-grid-section-wrapper bg_aquarell marriage-page__block_cases">
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1575627713204 vc_row-has-fill">
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
                                  <img src="<?php echo $block_img; ?>" class="attachment-full size-full"
                                    alt="<?php echo $block_title; ?>">
                                </div>

                                <div class="cases-slider__descr">

                                  <div class="cases-slider__descr-name">
                                    <?php echo $block_title; ?>
                                  </div>


                                  <div class="cases-slider__text">

                                    <p class="mkdf-post-excerpt">
                                      <?php echo $block_descr; ?>
                                    </p>

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


            <?php if( $mg_reviews__title ) { ?>
            <!-- ОТЗЫВЫ -->
            <div class="mkdf-row-grid-section-wrapper trips-page__block_reviews">
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
                                        <?php if($item_img || $item_text): ?>

                                        <div class="reviews-slider__item">
                                          <div class="reviews-slider__img">
                                            <img src="<?php echo $item_img; ?>" class="attachment-full size-full"
                                              alt="<?php echo $item_name; ?>">
                                          </div>

                                          <div class="reviews-slider__descr">

                                            <div class="reviews-slider__descr-name">


                                              <?php echo $item_name; ?>
                                            </div>

                                            <div class="reviews-slider__descr-author">

                                              <?php echo $item_regalias; ?>
                                            </div>

                                            <div class="reviews-slider__text">

                                              <p class="mkdf-post-excerpt">
                                                <?php echo $item_text; ?> </p>

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


            <?php if( $mg_about__title ) { ?>
            <!-- about ... -->
            <div class="mkdf-row-grid-section-wrapper bg_aquarell trips-page__block_we-know">
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1575627713204 vc_row-has-fill">
                  <div class="wpb_column vc_column_container vc_col-sm-12">

                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                          <div class="mkdf-st-inner">
                            <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                            <h2 class="mkdf-st-title">
                              <?php echo $mg_about__title; ?>
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="vc_column-inner">

                      <div class="wpb_wrapper">
                        <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">
                          <div class="mkdf-eh-item">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6011">
                                <div class="mkdf-section-title-holder mkdf-st-highlight">
                                  <div class="mkdf-st-inner">

                                    <p class="mkdf-st-text">
                                      <?php echo $mg_about__descr; ?>
                                    </p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <?php if( !empty($mg_about__slider) ) { ?>
                          <div class="mkdf-eh-item">
                            <div class="we-know-slider__wrapper">
                              <div class="we-know-slider">
                                <?php 
                                  foreach( $mg_about__slider as $about_slider__item ) {
                                  
                                ?>
                                <?php if( $about_slider__item ): ?>
                                <div class="we-know-slider__item">
                                  <img src="<?php echo $about_slider__item; ?>"
                                    alt="<?php echo $about_slider__item; ?>">
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
            <!-- ./about ... -->
            <?php } ?>


            <?php if( $mg_tent__title ) { ?>
            <!-- other services -->
            <div class="mkdf-row-grid-section-wrapper marriage-page__block-services">
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1575627713204 vc_row-has-fill">
                  <div class="wpb_column vc_column_container vc_col-sm-12">

                    <div class="vc_column-inner">

                      <div class="wpb_wrapper">


                        <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">

                          <div class="mkdf-eh-item marriage-page__block-services-left">
                            <?php echo $mg_tent__link; ?>


                          </div>

                          <div class="mkdf-eh-item marriage-page__block-services-right">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6011">


                                <div class="mkdf-section-title-holder mkdf-st-highlight">
                                  <div class="mkdf-st-inner">

                                    <h2 class="mkdf-st-title marriage-page__block-services-title">
                                      <?php echo $mg_tent__title; ?>
                                    </h2>

                                    <p class="mkdf-st-text marriage-page__block-services-txt"
                                     >
                                      <?php echo $mg_tent__text; ?>
                                    </p>


                                    <a href="<?php echo $mg_tent__btn_link; ?>"
                                      class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
                                      <span class="mkdf-btn-text">
                                        <?php echo $mg_tent__btn_text; ?>
                                      </span>
                                    </a>

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
            </div>
            <?php } ?>



            <?php if( $mg_mailform__title ) { ?>
            <!-- РАССЫЛКА -->
            <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill bg_aquarell trips-page__block_maillist">

              <!-- section-container -->
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">



                        <div class="mkdf-pl-outer mkdf-outer-space">

                          <!-- content -->
                          <div
                            class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024 trips-page__block_maillist-wrapper">

                            <div class="mkdf-eh-item trips-page__block_maillist-img">
                              <div class="mkdf-eh-item-inner">
                                <div class="mkdf-eh-item-content mkdf-eh-custom-6959">
                                  <div class="mkdf-single-image-holder">
                                    <div class="mkdf-si-inner">
                                      <img src="<?php echo $mg_mailform__img; ?>"
                                        alt="<?php echo $mg_mailform__title; ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="mkdf-eh-item trips-page__block_maillist-text">
                              <div class="mkdf-eh-item-inner">
                                <div class="mkdf-eh-item-content mkdf-eh-custom-3422">

                                  <div class="mkdf-section-title-holder mkdf-st-highlight">
                                    <div class="mkdf-st-inner">
                                      <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                      <h3 class="mkdf-st-title">
                                        <?php echo $mg_mailform__title; ?>
                                      </h3>

                                      <p class="mkdf-st-text">
                                        <?php echo $mg_mailform__descr; ?>
                                      </p>
                                    </div>
                                  </div>



                                  <?php if( $mg_mailform__shortcode ): ?>
                                  <div role="form" class="wpcf7">
                                    <?php 
                                                  $mg_mailform__shortcode = "'" . $mg_mailform__shortcode . "'";
                                                
                                                  echo do_shortcode($mg_mailform__shortcode); 
                                                ?>
                                  </div>
                                  <?php endif; ?>



                                  <div class="trips-page__block_maillist-text-bottom">


                                    <p class="mkdf-st-text">
                                      <?php echo $mg_mailform__descr_2; ?>
                                    </p>

                                    <a href="#"
                                      class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
                                      <span class="mkdf-btn-text">
                                        <?php echo $mg_mailform__btn; ?>
                                      </span>
                                    </a>


                                  </div>

                                </div>
                              </div>
                            </div>

                          </div>
                          <!-- ./content -->



                        </div>

                        <!-- </div> -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ./section-container -->

            </div>
            <?php } ?>


            <?php if( $mg_shop__title ) { ?>
            <!-- МАГАЗИН -->
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1579107555274 vc_row-has-fill trips-page__block_shop">
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
                                                <img src="<?php echo $item_img; ?>"
                                                  class="attachment-woocommerce_single size-woocommerce_single wp-post-image"
                                                  alt="<?php echo $item_title; ?>">
                                                <img class="mkdf-product-hover-image" alt="a"
                                                  src="<?php echo 'https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-18.png';?>">
                                              </div>

                                            </div>
                                            <div class="mkdf-pli-text-wrapper">

                                              <h6 class="entry-title mkdf-pli-title">
                                                <span>
                                                  <?php echo $item_title; ?>
                                                </span>
                                              </h6>

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


            <?php if( $mg_blog__title ) { ?>
            <!-- БЛОГ -->
            <div class="mkdf-row-grid-section-wrapper trips-page__block_blog">
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1571996104789">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1572440552355">
                          <div
                            class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-1 vc_col-md-10 vc_col-sm-offset-0">
                            <div class="vc_column-inner">
                              <div class="wpb_wrapper">
                                <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                                  <div class="mkdf-st-inner">
                                    <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                    <h2 class="mkdf-st-title">
                                      <?php echo $mg_blog__title; ?>
                                    </h2>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-normal-space mkdf-bl-pag-load-more">
                          <div class="mkdf-bl-wrapper mkdf-outer-space">
                            <ul class="mkdf-blog-list">
                              <?php if( $mg_blog__item_slug_1 ): ?>
                                <?php //echo $mg_blog__item_slug_1; ?>
                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $mg_blog__item_slug_1,
                                    'post_type'   => 'post',
                                    'post_status' => 'publish',
                                    'numberposts' => 1
                                  );
                                  $the_posts = get_posts($args);

                                  foreach( $the_posts as $post ){
                                    setup_postdata($post);
                                      // формат вывода the_title() ...
                                  
                                  
                                  
                                ?>
                              <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                                <div class="mkdf-bli-inner">
                                  <div class="mkdf-bli-wrapper">
                                    <div class="mkdf-post-image mkdf-tilt-trigger">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" class="mkdf-tilt-target">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                          class="attachment-full size-full wp-post-image image__animation-tranform"
                                          alt="<?php the_title(); ?>">
                                      </a>
                                    </div>
                                    <?php 
                                      $posttags = get_the_tags();
                                      if( $posttags ){
                                      
                                        $posttag_link = get_tag_link($posttags[0]->term_id);
                                        $posttag_name = $posttags[0]->name;

                                    ?>
                                    <div class="mkdf-post-info-category mkdf-st-highlight">        
                                      <a href="<?php echo $posttag_link;?>">
                                        <?php echo $posttag_name;?>
                                      </a>  
                                    </div>

                                    <?php 
                                      }
                                    ?>
                                  </div>
                                  <div class="mkdf-bli-content">
                                    <div class="mkdf-bli-info">
                                      <div class="mkdf-post-info-date entry-date published updated">
                                        <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span>
                                        <?php the_date(); ?>
                                        <!-- <a href="<?php //echo $mp_history__title; ?>">
                                          <?php //echo $mp_history__title; ?>
                                        </a>
                                        <meta content="UserComments: 0"> -->
                                      </div>
                                    </div>
                                    <h5 class="entry-title mkdf-post-title">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                      </a>
                                    </h5>

                                  </div>
                                </div>
                              </li>
                              <?php 
                                }
                              endif;
                              ?>

                              <?php if( $mg_blog__item_slug_1 ): ?>
                                <?php //echo $mg_blog__item_slug_1; ?>
                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $mg_blog__item_slug_1,
                                    'post_type'   => 'post',
                                    'post_status' => 'publish',
                                    'numberposts' => 1
                                  );
                                  $the_posts = get_posts($args);

                                  foreach( $the_posts as $post ){
                                    setup_postdata($post);
                                      // формат вывода the_title() ...
                                  
                                  
                                  
                                ?>
                              <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                                <div class="mkdf-bli-inner">
                                  <div class="mkdf-bli-wrapper">
                                    <div class="mkdf-post-image mkdf-tilt-trigger">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" class="mkdf-tilt-target">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                          class="attachment-full size-full wp-post-image image__animation-tranform"
                                          alt="<?php the_title(); ?>">
                                      </a>
                                    </div>
                                    <?php 
                                      $posttags = get_the_tags();
                                      if( $posttags ){
                                      
                                        $posttag_link = get_tag_link($posttags[0]->term_id);
                                        $posttag_name = $posttags[0]->name;

                                    ?>
                                    <div class="mkdf-post-info-category mkdf-st-highlight">        
                                      <a href="<?php echo $posttag_link;?>">
                                        <?php echo $posttag_name;?>
                                      </a>  
                                    </div>

                                    <?php 
                                      }
                                    ?>
                                  </div>
                                  <div class="mkdf-bli-content">
                                    <div class="mkdf-bli-info">
                                      <div class="mkdf-post-info-date entry-date published updated">
                                        <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span>
                                        <?php the_date(); ?>
                                        <!-- <a href="<?php //echo $mp_history__title; ?>">
                                          <?php //echo $mp_history__title; ?>
                                        </a>
                                        <meta content="UserComments: 0"> -->
                                      </div>
                                    </div>
                                    <h5 class="entry-title mkdf-post-title">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                      </a>
                                    </h5>

                                  </div>
                                </div>
                              </li>
                              <?php 
                                }
                              endif;
                              ?>

                              <?php if( $mg_blog__item_slug_1 ): ?>
                                <?php //echo $mg_blog__item_slug_1; ?>

                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $mg_blog__item_slug_1,
                                    'post_type'   => 'post',
                                    'post_status' => 'publish',
                                    'numberposts' => 1
                                  );
                                  $the_posts = get_posts($args);

                                  foreach( $the_posts as $post ){
                                    setup_postdata($post);
                                      // формат вывода the_title() ...
                                  
                                  
                                  
                                ?>
                              <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                                <div class="mkdf-bli-inner">
                                  <div class="mkdf-bli-wrapper">
                                    <div class="mkdf-post-image mkdf-tilt-trigger">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" class="mkdf-tilt-target">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                          class="attachment-full size-full wp-post-image image__animation-tranform"
                                          alt="<?php the_title(); ?>">
                                      </a>
                                    </div>
                                    <?php 
                                      $posttags = get_the_tags();
                                      if( $posttags ){
                                      
                                        $posttag_link = get_tag_link($posttags[0]->term_id);
                                        $posttag_name = $posttags[0]->name;

                                    ?>
                                    <div class="mkdf-post-info-category mkdf-st-highlight">        
                                      <a href="<?php echo $posttag_link;?>">
                                        <?php echo $posttag_name;?>
                                      </a>  
                                    </div>

                                    <?php 
                                      }
                                    ?>
                                  </div>
                                  <div class="mkdf-bli-content">
                                    <div class="mkdf-bli-info">
                                      <div class="mkdf-post-info-date entry-date published updated">
                                        <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span>
                                        <?php the_date(); ?>
                                        <!-- <a href="<?php //echo $mp_history__title; ?>">
                                          <?php //echo $mp_history__title; ?>
                                        </a>
                                        <meta content="UserComments: 0"> -->
                                      </div>
                                    </div>
                                    <h5 class="entry-title mkdf-post-title">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                      </a>
                                    </h5>

                                  </div>
                                </div>
                              </li>
                              <?php 
                                }
                              endif;
                              ?>

                            </ul>
                          </div>

                          <div class="mkdf-blog-pag-load-more">
                            <a href="<?php echo $mg_blog__btn_link; ?>"
                              class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon">
                              <span class="mkdf-btn-text"><?php echo $mg_blog__btn_text; ?>
                              </span>
                              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17 17"
                                style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <g>
                                  <path d="M15,1.9"></path>
                                  <line x1="1.7" y1="15.3" x2="15" y2="1.9"></line>
                                  <line x1="16" y1="1.9" x2="15" y2="1.9"></line>
                                  <line x1="15" y1="1.9" x2="1" y2="1.9"></line>
                                  <path d="M15,1.9"></path>
                                  <line x1="15" y1="16" x2="15" y2="1.9"></line>
                                </g>
                              </svg>
                              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17 17"
                                style="enable-background:new 0 0 17 17;" xml:space="preserve">
                                <g>
                                  <path d="M15,1.9"></path>
                                  <line x1="1.7" y1="15.3" x2="15" y2="1.9"></line>
                                  <line x1="16" y1="1.9" x2="15" y2="1.9"></line>
                                  <line x1="15" y1="1.9" x2="1" y2="1.9"></line>
                                  <path d="M15,1.9"></path>
                                  <line x1="15" y1="16" x2="15" y2="1.9"></line>
                                </g>
                              </svg>
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>


            <?php if( $mg_form__title ) { ?>
            <!-- ФОРМА ЗАЯВКИ -->
            <div class="mkdf-elements-holder mkdf-one-column  mkdf-responsive-mode-768 trips-page__block_form">
              <div class="mkdf-row-grid-section">

                <div class="mkdf-eh-item">
                  <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-1418">
                      <div class="mkdf-section-title-holder trips-page__block__content-wrapper">
                        <div class="mkdf-st-inner">
                          <div class="mkdf-eh-item-content mkdf-eh-custom-6229">
                            <div class="mkdf-section-title-holder mkdf-st-highlight">
                              <div class="mkdf-st-inner">

                                <h3 class="mkdf-st-title">
                                  <?php echo $mg_form__title; ?>

                                </h3>

                              </div>

                            </div>

                            <?php if( $mg_form__shortcode ): ?>
                            <div role="form" class="wpcf7 common__form common__form_big">

                              <?php echo do_shortcode($mg_form__shortcode); ?>
                            </div>
                            <?php endif; ?>

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


<?php 
get_footer(); 