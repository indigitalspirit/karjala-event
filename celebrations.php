<?php
/*
Template Name: Праздник
Template Post Type: page
*/
get_header();
?>


<?php
     $cb_slider= get_field("cb-slider");


     $cb_adv__title= get_field("cb-adv__title");

     $cb_advs= get_field("cb-advs");


     $cb_service__title = get_field("cb-service__title");

     $cb_service__text = get_field("cb-service__text");

     $cb_service__slider = get_field("cb-service__slider");



     $cb_video__title = get_field("cb-video__title"); 

     $cb_video__link = get_field("cb-video__link");



    $cb_reviews__title = get_field("cb-reviews__title");
    $cb_reviews = get_field("cb-reviews");
    

     $cb_slider= get_field("cb-slider");

     $cb_slider= get_field("cb-slider");
 
 
     $cb_reviews__title = get_field("cb-reviews__title");
 
     $cb_reviews = get_field("cb-reviews");
 
 
 
 
     $cb_mailform__img = get_field("cb-mailform__img");
 
     $cb_mailform__title = get_field("cb-mailform__title");
 
     $cb_mailform__descr = get_field("cb-mailform__descr");
 
     $cb_mailform__shortcode = get_field("cb-mailform__shortcode");
 
     $cb_mailform__descr_2 = get_field("cb-mailform__descr_2");
 
     $cb_mailform__btn = get_field("cb-mailform__btn");
 
     
 
     $cb_shop__title = get_field("cb-shop__title");
 
     $cb_shop__slider = get_field("cb-shop__slider");
 
 
 
     $cb_blog__title = get_field("cb-blog__title");
 
 
     $cb_blog__item_slug_1 = get_field("cb-blog__item-slug_1");
 
     $cb_blog__item_slug_2 = get_field("cb-blog__item-slug_2");
 
     $cb_blog__item_slug_3 = get_field("cb-blog__item-slug_3");
 
     $cb_blog__btn_text = get_field("cb-blog__btn-text");
 
     $cb_blog__btn_link = get_field("cb-blog__btn-link");
 
 
 
     $cb_form__title = get_field("cb-form__title");
 
     $cb_form__shortcode = get_field("cb-form__shortcode");
 
     
 
 
 
		
  ?>


<div class="mkdf-content">
  <div class="mkdf-content-inner">
    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner trips celebrations">
        <div class="mkdf-grid-row">

          <div class="mkdf-page-content-holder mkdf-grid-col-12">


            <?php if( !empty($cb_slider) ) { ?>
            <!-- slider-row -->
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">

                    <!-- <div class="mkdf-blog-slider-holder mkdf-bs-carousel-centered"> -->


                    <div class="trips-page__slider-wrapper">

                      <div class="trips-page__slider">
                        <?php 
                                foreach( $cb_slider as $cb_slider__item ) {
                                  $item_title = $cb_slider__item['item-title'];
                                  $item_descr = $tr_slider__item['item-descr'];
                                  $item_btn_text = $cb_slider__item['item-btn_text'];
                                  $item_btn_link = $cb_slider__item['item-btn_link'];
                                  $item_img = $cb_slider__item['item-img'];
                                
                                  if($item_img && $item_title){ 
                            ?>

                        <div class="trips-page__slider-item">

                          <div class="trips-page__slider-img">
                            <img src="<?php echo $item_img; ?>" alt="<?php echo $item_title; ?>">
                          </div>


                          <div class="trips-page__slider-destr-wrapper">
                            <div class="trips-page__slider-destr">
                              <h2 class="trips-page__slider-title">
                                <?php echo $item_title; ?>
                              </h2>
                              <div class="trips-page__slider-subtitle">
                                <?php echo $item_descr; ?>
                              </div>
                              <a href="<?php echo $item_btn_link; ?>"
                                class="mkdf-btn trips-page__slider-btn cta-modal-form__btn">
                                <span class="mkdf-btn-text">
                                  <?php echo $item_btn_text; ?>
                                </span>
                              </a>
                            </div>
                          </div>


                        </div>

                        <?php                        
                                  }
                                }
                              ?>

                      </div>

                      <div class="common-slider-arrows trips-page__slider-arrows">
                        <div class="common-slider-arrow-left trips-page__slider-arrow-left">
                          <img class="arrow-white"
                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                            alt="назад">
                          <img class="arrow-green"
                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>" alt="back">
                        </div>

                        <div class="common-slider-arrow-right trips-page__slider-arrow-right">
                          <img class="arrow-white"
                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                            alt="вперед">
                          <img class="arrow-green"
                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>"
                            alt="forward">

                        </div>

                      </div>

                    </div>


                    <!-- </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- ./slider-row -->
            <?php                        
                }
              ?>


            <?php if( $cb_advs ) { ?>
            <!-- icons -->
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1579265695115">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                    <div class="mkdf-row-grid-section-wrapper">
                      <div class="mkdf-row-grid-section">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                          <div class="wpb_column vc_column_container vc_col-sm-12">

                            <div class="vc_column-inner">
                              <div class="wpb_wrapper">
                                <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                                  <div class="mkdf-st-inner">
                                    <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                    <h2 class="mkdf-st-title">
                                      <?php echo $cb_adv__title; ?>
                                    </h2>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <?php if( !empty( $cb_advs ) ) { ?>
                            <div class="vc_column-inner">
                              <div class="wpb_wrapper">
                                <div
                                  class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
                                  <div class="mkdf-dcl-inner mkdf-outer-space clearfix">

                                    <?php 
                                      foreach( $cb_advs as $cb_advs__item ) {

                                        $item_title = $cb_advs__item['item-title'];
                                        $item_icon = $cb_advs__item['item-icon'];
                                      
                                      
                                    ?>
                                    <?php if( $item_title || $item_icon ): ?>
                                    <article class="mkdf-dcl-item mkdf-item-space icons-set__block">
                                      <div class="mkdf-dcl-item-inner">
                                        <div class="mkdf-dcli-image">
                                          <img src="<?php echo $item_icon; ?>" class="attachment-full size-full"
                                            alt="<?php echo $item_title; ?>">

                                          <span class="mkdf-dcl-highlight">

                                            <span class="mkdf-active-hover-middle"></span>

                                          </span>

                                        </div>
                                        <div class="mkdf-dcli-text-holder">
                                          <div class="mkdf-dcli-text-wrapper">
                                            <div class="mkdf-dcli-text">

                                              <h3 class="mkdf-dcli-title entry-title">
                                                <?php echo $item_title; ?>
                                              </h3>
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                    </article>
                                    <?php endif; ?>

                                    <?php 

                                      }

                                      ?>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php } 
                              ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ./icons -->
            <?php } ?>


            <?php if( $cb_advs ) { ?>
            <!-- Мы знаем ... -->
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
                              <?php echo $cb_service__title; ?>
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="vc_column-inner">

                      <div class="wpb_wrapper">
                        <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">

                          <?php if( $cb_service__text ): ?>
                          <div class="mkdf-eh-item">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6011">
                                <div class="mkdf-section-title-holder mkdf-st-highlight">
                                  <div class="mkdf-st-inner">

                                    <div class="mkdf-st-text">
                                      <?php echo $cb_service__text; ?>
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php endif; ?>
                          <?php if( !empty($cb_service__slider) ): ?>
                          <div class="mkdf-eh-item">
                            <div class="we-know-slider__wrapper">
                              <div class="we-know-slider">
                                <?php 
                                  foreach( $cb_service__slider as $cb_service__slider__item ) {

                                    if( $cb_service__slider__item ):
                                  
                                  
                                ?>
                                <div class="we-know-slider__item">
                                  <img src="<?php echo $cb_service__slider__item;?>" class="attachment-full size-full"
                                    alt="<?php echo $cb_service__slider__item;?>">
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


            <?php if( $cb_video__title ) { ?>
            <!-- Крутое видео ... -->
            <div class="mkdf-row-grid-section-wrapper trips-page__block_video">
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
                  <div class="wpb_column vc_column_container vc_col-sm-12">

                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                          <div class="mkdf-st-inner">
                            <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                            <h2 class="mkdf-st-title custom-title">
                              <?php echo $cb_video__title; ?>
                            </h2>
                            <div class="">
                              <?php echo $cb_video__link; ?>
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

            <?php if( $cb_reviews__title ) { ?>
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
                              <?php echo $cb_reviews__title; ?>
                            </h2>

                          </div>
                        </div>
                      </div>
                    </div>

                    <?php if( !empty($cb_reviews) ) { ?>
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">
                        <div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768">
                          <div class="mkdf-eh-item">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6938">
                                <div
                                  class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-normal-space mkdf-bl-pag-no-pagination">
                                  <div class="mkdf-bl-wrapper mkdf-outer-space">


                                    <div class="reviews-slider__wrapper">

                                      <div class="reviews-slider">
                                        <?php 
                                        foreach( $cb_reviews as $cb_review__item ) {

                                          $item_img = $cb_review__item['item-img'];
                                          $item_name = $cb_review__item['item-name'];
                                          $item_regalias = $cb_review__item['item-regalias'];
                                          $item_text = $cb_review__item['item-text'];
                                        
                                        
                                      ?>

                                        <?php if($item_img || $item_text): ?>

                                        <div class="reviews-slider__item">
                                          <div class="reviews-slider__img">
                                            <img src="<?php echo $item_img; ?>" class="attachment-full size-full"
                                              alt="<?php echo $item_name; ?>">
                                          </div>

                                          <div class="reviews-slider__destr">

                                            <h3 class="reviews-slider__destr-name">


                                              <?php echo $item_name; ?>
                                            </h3>

                                            <h4 class="reviews-slider__destr-author">


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
                                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                                            alt="назад">
                                          <img class="arrow-green"
                                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>"
                                            alt="back">
                                        </div>
                                        <div
                                          class="common-slider-arrow-right slider-arrow__right reviews-slider__arrows_arrow-right">
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


            <?php if( $cb_mailform__title ) { ?>
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
                                      <img src="<?php echo $cb_mailform__img; ?>"
                                        alt="<?php echo $cb_mailform__title; ?>"> </div>
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
                                      <h2 class="mkdf-st-title">
                                        <?php echo $cb_mailform__title; ?>
                                      </h2>

                                      <div class="mkdf-st-text">
                                        <?php echo $cb_mailform__descr; ?>
                                      </div>
                                    </div>
                                  </div>


                                  <?php if( $cb_mailform__shortcode ): ?>
                                  <div role="form" class="wpcf7">
                                    <?php 
                                                  $cb_mailform__shortcode = "'" . $cb_mailform__shortcode . "'";
                                                
                                                  echo do_shortcode($cb_mailform__shortcode); 
                                                ?>
                                  </div>
                                  <?php endif; ?>



                                  <div class="trips-page__block_maillist-text-bottom">


                                    <div class="mkdf-st-text">
                                      <?php echo $cb_mailform__descr_2; ?>
                                    </div>

                                    <a href="#"
                                      class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
                                      <span class="mkdf-btn-text">

                                        <?php echo $cb_mailform__btn; ?>
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


            <?php if( $cb_shop__title ) { ?>
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
                                <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                                <h2 class="mkdf-st-title">
                                  <?php echo $cb_shop__title; ?>
                                </h2>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php if( !empty( $cb_shop__slider ) ) { ?>
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
                                          foreach( $cb_shop__slider as $cb_shop__slider__item ) {

                                            $item_img = $cb_shop__slider__item['item_img'];
                                            $item_title = $cb_shop__slider__item['item_title'];
                                            
                                          
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

                                              <h3 class="entry-title mkdf-pli-title">
                                                <span>
                                                  <?php echo $item_title; ?>
                                                </span>
                                              </h3>

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
                                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                                            alt="назад">
                                          <img class="arrow-green"
                                            src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>"
                                            alt="back">

                                        </div>
                                        <div
                                          class="common-slider-arrow-right slider-arrow__right shop-slider__arrows_arrow-right">
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


            <?php if( $cb_blog__title ) { ?>
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
                                      <?php echo $cb_blog__title; ?>
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
                              <?php if( $cb_blog__item_slug_1 ): ?>
                                <?php //echo $cb_blog__item_slug_1; ?>
                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $cb_blog__item_slug_1,
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
                                  <?php $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                                    if( $thumbnail_id ):
                                    ?>
                                    <div class="mkdf-post-image mkdf-tilt-trigger">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" class="mkdf-tilt-target">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                          class="attachment-full size-full wp-post-image image__animation-tranform"
                                          alt="<?php 
                                            //var_dump( get_post_meta( get_the_ID() )  );
                                            
                                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 

                                            if( $alt ){ 
                                              echo $alt;
                                            } else {
                                              the_title();
                                            }
                                          ?>">
                                      </a>
                                    </div>
                                    <?php 
                                    endif;
                                    ?>
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
                                    <h3 class="entry-title mkdf-post-title">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                      </a>
                                    </h3>

                                  </div>
                                </div>
                              </li>
                              <?php 
                                }
                              endif;
                              ?>

                              <?php if( $cb_blog__item_slug_1 ): ?>
                                <?php //echo $cb_blog__item_slug_1; ?>
                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $cb_blog__item_slug_1,
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
                                  <?php $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                                    if( $thumbnail_id ):
                                    ?>
                                    <div class="mkdf-post-image mkdf-tilt-trigger">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" class="mkdf-tilt-target">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                          class="attachment-full size-full wp-post-image image__animation-tranform"
                                          alt="<?php 
                                            //var_dump( get_post_meta( get_the_ID() )  );
                                            
                                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 

                                            if( $alt ){ 
                                              echo $alt;
                                            } else {
                                              the_title();
                                            }
                                          ?>">
                                      </a>
                                    </div>
                                    <?php 
                                    endif;
                                    ?>
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
                                    <h3 class="entry-title mkdf-post-title">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                      </a>
                                    </h3>

                                  </div>
                                </div>
                              </li>
                              <?php 
                                }
                              endif;
                              ?>

                              <?php if( $cb_blog__item_slug_1 ): ?>
                                <?php //echo $cb_blog__item_slug_1; ?>

                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $cb_blog__item_slug_1,
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
                                  <?php $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                                    if( $thumbnail_id ):
                                    ?>
                                    <div class="mkdf-post-image mkdf-tilt-trigger">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>" class="mkdf-tilt-target">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                                          class="attachment-full size-full wp-post-image image__animation-tranform"
                                          alt="<?php 
                                            //var_dump( get_post_meta( get_the_ID() )  );
                                            
                                            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 

                                            if( $alt ){ 
                                              echo $alt;
                                            } else {
                                              the_title();
                                            }
                                          ?>">
                                      </a>
                                    </div>
                                    <?php 
                                    endif;
                                    ?>
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
                                    <h3 class="entry-title mkdf-post-title">
                                      <a href="<?php the_permalink(); ?>"
                                        title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                      </a>
                                    </h3>

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
                            <a href="<?php echo $cb_blog__btn_link ?>"
                              class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon">
                              <span class="mkdf-btn-text"><?php echo $cb_blog__btn_text; ?>
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
            <?php } ?>


            <?php if( $cb_form__title ) { ?>
            <!-- ФОРМА ЗАЯВКИ -->
            <div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768 trips-page__block_form">
              <div class="mkdf-eh-item">
                <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-1418">
                    <div class="mkdf-section-title-holder trips-page__block__content-wrapper">
                      <div class="mkdf-st-inner">
                        <div class="mkdf-eh-item-content mkdf-eh-custom-6229">
                          <div class="mkdf-section-title-holder mkdf-st-highlight">
                            <div class="mkdf-st-inner">

                              <h2 class="mkdf-st-title">
                                <?php echo $cb_form__title; ?>
                              </h2>

                            </div>

                          </div>

                          <?php if( $cb_form__shortcode ): ?>
                          <div role="form" class="wpcf7 common__form common__form_big">

                            <?php echo do_shortcode($cb_form__shortcode); ?>
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



          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php 
get_footer(); 