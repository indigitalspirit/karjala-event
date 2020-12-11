<?php
/*
Template Name: Корпоративы
Template Post Type: page
*/
get_header('corporate');
?>


<?php
    $cr_main__title = get_field("cr-main__title");
    
    $cr_main__img = get_field("cr-main__img");

    $cr_main__icons = get_field("cr-main__icons");
  
    $cr_main__btn_1 = get_field("cr-main__btn_1");
  
    $cr_main__btn_2 = get_field("cr-main__btn_2");
  
    //$cr_service__title = get_field("cr-service__title");
  
    $cr_service__text = get_field("cr-service__text");
  
    $cr_service__slider = get_field("cr-service__slider");
  


    $cr_types__title = get_field("cr-types__title");

    $cr_types = get_field("cr-types");



    $cr_adv__title = get_field("cr-adv__title");

    $cr_advs = get_field("cr-advs");



    $cr_video__title = get_field("cr-video__title");

    $cr_video__link = get_field("cr-video__link");




    $cr_reviews__title = get_field("cr-reviews__title");

    $cr_reviews = get_field("cr-reviews");




    $cr_mailform__img = get_field("cr-mailform__img");

    $cr_mailform__title = get_field("cr-mailform__title");

    $cr_mailform__descr = get_field("cr-mailform__descr");

    $cr_mailform__shortcode = get_field("cr-mailform__shortcode");

    $cr_mailform__descr_2 = get_field("cr-mailform__descr_2");

    $cr_mailform__btn = get_field("cr-mailform__btn");

    

    $cr_shop__title = get_field("cr-shop__title");

    $cr_shop__slider = get_field("cr-shop__slider");



    $cr_blog__title = get_field("cr-blog__title");


    $cr_blog__item_slug_1 = get_field("cr-blog__item-slug_1");

    $cr_blog__item_slug_2 = get_field("cr-blog__item-slug_2");

    $cr_blog__item_slug_3 = get_field("cr-blog__item-slug_3");

    $cr_blog__btn_text = get_field("cr-blog__btn-text");

    $cr_blog__btn_link = get_field("cr-blog__btn-link");



    $cr_form__title = get_field("cr-form__title");

    $cr_form__shortcode = get_field("cr-form__shortcode");

		
?>

<div class="mkdf-content">
  <div class="mkdf-content-inner">
    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner corporates">
        <div class="mkdf-grid-row">
          <div class="mkdf-page-content-holder mkdf-grid-col-12">

            <!-- top-bar -->
            <div class="mkdf-top-bar top-bar">
              <div class="mkdf-vertical-align-containers">
                <div class="mkdf-position-left">
                  <div class="mkdf-position-left-inner">
                    <?php 
                      $phone = get_option('karjala_event_phone_field');
                      if( $phone ) {
                    ?>
                    <a class="mkdf-icon-widget-holder top-bar__phone" href="tel:<?php echo str_replace(" ", "", $phone); ?>"
                      target="_blank">
                      <span class="mkdf-icon-element ion-android-call top-bar__phone-icon"></span>
                      <span class="mkdf-icon-text top-bar__phone-text">
                        <?php echo $phone; ?>
                      </span>
                    </a>
                    <?php 
                      }

                    ?>
                    <?php 
                      $email = get_option('karjala_event_mail_field');

                      if( $email ) {
                    
                    ?>
                    <a class="mkdf-icon-widget-holder top-bar__email" href="mailto:<?php echo trim($email); ?>"
                      target="_blank">
                      <span class="mkdf-icon-element ion-ios-email-outline top-bar__email-icon"></span>
                      <span class="mkdf-icon-text top-bar__email-text">
                        <?php echo $email; ?>
                      </span>
                    </a>
                    <?php 
                      }
                      
                    ?>
                  </div>
                </div>
                <div class="mkdf-position-right">
                  <div class="mkdf-position-right-inner">
                    <?php 
                      $vk = get_option('karjala_event_vk_field');

                      $instagram = get_option('karjala_event_instagram_field');

                    ?>
                    <div class="widget mkdf-social-icons-group-widget mkdf-light-skin text-align-left">
                      <?php 
                        if( $vk ) {
                      ?>
                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                        href="<?php echo $vk;?>" target="_blank">
                        <span class="mkdf-social-icon-widget ion-social-instagram top-bar__social-icon"></span>
                      </a>
                      <?php 
                        }
                        if( $instagram ) {
                      ?>
                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                        href="<?php echo $instagram;?>" target="_blank">
                        <span class="mkdf-social-icon-widget ion-social-twitter top-bar__social-icon"></span>
                      </a>
                      <?php 
                        }
                        
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>


            <?php if( $cr_main__title ) { ?>
            <!-- top-block -->
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-page__top"
                  <?php if( $cr_main__img ): ?>style="background: url(<?php echo $cr_main__img; ?>) center center no-repeat;background-size: cover;"
                  <?php endif; ?>>

                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="sh1"
                    class="top-block__top-bg">
                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="sh2"
                    class="top-block__bottom-bg">



                  <div class="mkdf-section-title-holder">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="">
                          <div class="mkdf-section-title-holder">
                            <div class="mkdf-st-inner">
                              <h1 class="mkdf-st-title corporate-page__top-title">
                                <?php echo $cr_main__title; ?> </h1>
                              <ul class="corporate-page__top-icons-set">

                                <?php if( !empty($cr_main__icons) ) { ?>

                                <?php 
																		foreach( $cr_main__icons as $cr_main__icon ) {
																			$icon_img = $cr_main__icon['icons-item_icon'];
																			$icon_text = $cr_main__icon['icons-item_text'];
																		
																	    if($icon_img && $icon_text){ ?>

                                <li class="corporate-page__top-icon">

                                  <span><?php echo $icon_img; ?></span>
                                  <div><?php echo $icon_text; ?></div>

                                </li>

                                <?php 
                                      } 

                                    }
                                  }


																?>


                              </ul>

                              <div class="corporate-page__top-btns">

                                <?php if( $cr_main__btn_1['cr-btn_text'] && $cr_main__btn_1['cr-btn_link'] ) { ?>
                                <a href="<?php echo $cr_main__btn_1['cr-btn_link']; ?>"
                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-consult__btn corporate-page__top-btn">
                                  <span class="mkdf-btn-text">
                                    <?php echo $cr_main__btn_1['cr-btn_text']; ?>
                                  </span>

                                </a>

                                <?php } ?>

                                <?php if( $cr_main__btn_2['cr-btn_text'] && $cr_main__btn_2['cr-btn_link'] ) { ?>
                                <a download
                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-form corporate-page__top-btn">
                                  <span class="mkdf-btn-text">
                                    <?php echo $cr_main__btn_2['cr-btn_text']; ?>
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


            <?php if( $cr_service__text ) { ?>
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
                                  <img src="<?php echo $service_slider__item; ?>"
                                    alt="<?php echo $service_slider__item; ?>">
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


            <?php if( $cr_types__title ) { ?>
            <!-- corporate services -->
            <div class="vc_row wpb_row vc_row-fluid corporate-services__block">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                  <div class="mkdf-section-title-holder">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
                         >
                          <div class="mkdf-st-inner">
                            <h2 class="mkdf-st-title corporate-services__block-title">
                              <?php echo $cr_types__title; ?>
                            </h2>

                          </div>
                        </div>


                        <?php if( !empty($cr_service__slider) ) { ?>
                        <div
                          class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-normal-space mkdf-bl-pag-load-more">

                          <div class="mkdf-bl-wrapper">

                            <div class="corporate-services__block-items">


                              <?php 
                              foreach( $cr_types as $cr_types__item ) {

                                $item_title = $cr_types__item['item-title'];
                                $item_btn_text = $cr_types__item['item-btn_text'];
                                $item_btn_link = $cr_types__item['item-btn_link'];
                                $item_img = $cr_types__item['item-img'];
                                
                              
                            ?>

                              <?php if( $item_img || $item_title ): ?>
                              <div class="corporate-services__block-item block-item_1"
                                style="background:url(<?php if( $item_img ) {echo $item_img;} ?>);background-size: cover;">


                                <div class="corporate-services__block-item-descr-wrapper">
                                  <div class="corporate-services__block-item-descr">
                                    <?php if( $item_title ): ?>
                                    <h3 class="corporate-services__block-item-title">
                                      <?php echo $item_title; ?>
                                    </h3>
                                    <?php endif; ?>

                                    <?php if( $item_btn_text ): ?>
                                    <a href="<?php if( $item_btn_link ){echo $item_btn_link; } else {echo '#'; }?>"
                                      class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn">
                                      <?php echo $item_btn_text; ?>
                                    </a>
                                    <?php endif; ?>
                                  </div>
                                </div>
                              </div>
                              <?php endif; ?>



                              <?php 
                                }
                              ?>


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
            <!-- ./corporate services -->
            <?php } ?>


            <?php if( $cr_adv__title ) { ?>
            <!-- icons -->
            <div class="vc_row wpb_row vc_row-fluid corporate-icons__block">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                  <div class="mkdf-section-title-holder">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
                         >
                          <div class="mkdf-st-inner">

                            <h2 class="mkdf-st-title corporate-icons__block-title">
                              <?php echo $cr_adv__title; ?>
                            </h2>

                          </div>
                        </div>

                        <?php if( !empty($cr_advs) ) { ?>
                        <div
                          class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
                          <div class="mkdf-dcl-inner mkdf-outer-space clearfix">

                            <?php 
                              foreach( $cr_advs as $cr_advs__item ) {

                                $item_title = $cr_advs__item['item-title'];
                                $item_icon = $cr_advs__item['item-icon'];
                              
                              
                            ?>

                            <?php if( $item_title || $item_icon ): ?>
                            <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                              <div class="mkdf-dcl-item-inner">
                                <?php if( $item_icon ): ?>
                                <div class="mkdf-dcli-image">
                                  <img src="<?php echo $item_icon; ?>" class="attachment-full size-full"
                                    alt="<?php if( $item_title ){echo $item_title;} else {echo 'alt';}; ?>">

                                  <span class="mkdf-dcl-highlight">

                                    <span class="mkdf-active-hover-middle"></span>

                                  </span>

                                </div>
                                <?php endif; ?>

                                <?php if( $item_title ): ?>
                                <div class="mkdf-dcli-text-holder">
                                  <div class="mkdf-dcli-text-wrapper">
                                    <div class="mkdf-dcli-text">
                                      
                                      <h3 class="mkdf-dcli-title entry-title">
                                        <?php echo $item_title; ?>
                                      </h3>
                                    </div>
                                  </div>
                                </div>
                                <?php endif; ?>

                              </div>
                            </article>
                            <?php endif; ?>


                            <?php
                              }

                          ?>





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


            <?php if( $cr_video__title ) { ?>
            <!-- video -->
            <div class="vc_row wpb_row vc_row-fluid corporate-video__block">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                  <div class="mkdf-section-title-holder">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
                         >
                          <div class="mkdf-st-inner">
                            <h2 class="mkdf-st-title corporate-video__block-title">
                              <?php echo $cr_video__title; ?>
                            </h2>

                            <div class="">

                              <?php echo $cr_video__link; ?>
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


            <?php if( $cr_reviews__title ) { ?>
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

                                      <?php if($item_img || $item_text): ?>
                                      <div class="reviews-slider__item">
                                        <div class="reviews-slider__img">
                                          <img src="<?php echo $item_img; ?>" class="attachment-full size-full"
                                            alt="<?php echo $item_name; ?>">
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


            <?php if( $cr_mailform__title ) { ?>
            <!-- maillist -->
            <div class="vc_row wpb_row vc_row-fluid corporate-maillist__block">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                  <div class="mkdf-section-title-holder">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div
                          class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024 trips-page__block_maillist-wrapper corporate-maillist__block-wrapper">

                          <div class="mkdf-eh-item corporate-maillist__block-img">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6959">
                                <div class="mkdf-single-image-holder">
                                  <div class="mkdf-si-inner">
                                    <img src="<?php echo $cr_mailform__img; ?>"
                                      alt="<?php echo $cr_mailform__title; ?>"> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mkdf-eh-item corporate-maillist__block-text">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-3422">

                                <div class="mkdf-section-title-holder mkdf-st-highlight">
                                  <div class="mkdf-st-inner">
                                    <h2 class="mkdf-st-title">
                                      <?php echo $cr_mailform__title; ?>
                                    </h2>


                                    <div class="mkdf-st-text corporate-maillist__block-text-par"
                                      >
                                      <?php echo $cr_mailform__descr; ?>
                                    </div>
                                  </div>
                                </div>

                                <?php if( $cr_mailform__shortcode ): ?>
                                <div role="form" class="wpcf7 corporate-maillist__block-form">
                                  <?php 
                                      $cr_mailform__shortcode = "'" . $cr_mailform__shortcode . "'";
                                    
                                      echo do_shortcode($cr_mailform__shortcode); 
                                    ?>



                                  <!-- <div role="form" class="wpcf7 common__form" id="wpcf7-f1433-p1182-o1">
                                    
                                    
                                  </div> -->

                                </div>
                                <?php endif; ?>




                                <div class="corporate-maillist__block-bottomtext">


                                  <div class="mkdf-st-text corporate-maillist__block-text-par"
                                    >
                                    <?php echo $cr_mailform__descr_2; ?>
                                  </div>

                                  <a href="#"
                                    class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
                                    <span class="mkdf-btn-text">
                                      <?php echo $cr_mailform__btn; ?>
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
            <?php } ?>


            <?php if( $cr_shop__title ) { ?>
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
                                          src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-18.png">
                                      </div>

                                      <!-- <a class="mkdf-pli-link" href="#" title="Shoes"></a> -->
                                    </div>
                                    <div class="mkdf-pli-text-wrapper">

                                      <h3 class="entry-title mkdf-pli-title">
                                        <span><?php echo $item_title; ?></span>
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
            <?php } ?>


            <?php if( $cr_blog__title ) { ?>
            <!-- blog -->
            <div class="vc_row wpb_row vc_row-fluid corporate-blog__block">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                  <div class="mkdf-section-title-holder">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
                         >
                          <div class="mkdf-st-inner">
                            <h2 class="mkdf-st-title">
                              <?php echo $cr_blog__title; ?>
                            </h2>
                          </div>
                        </div>

                        <div
                          class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-normal-space mkdf-bl-pag-load-more">
                          <div class="mkdf-bl-wrapper mkdf-outer-space">
                            <ul class="mkdf-blog-list">

                              <?php if( $cr_blog__item_slug_1 ): ?>
                                <?php //echo $cr_blog__item_slug_1; ?>
                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $cr_blog__item_slug_1,
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

                              <?php if( $cr_blog__item_slug_2 ): ?>
                                <?php //echo $cr_blog__item_slug_2; ?>
                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $cr_blog__item_slug_2,
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

                              <?php if( $cr_blog__item_slug_3 ): ?>
                                <?php //echo $cr_blog__item_slug_3; ?>

                                <?php
                                  //$the_slug = 'my_slug';
                                  $args = array(
                                    'name'        => $cr_blog__item_slug_3,
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
                            <a href="<?php echo $cr_blog__btn_link; ?>"
                              class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon">
                              <span class="mkdf-btn-text"><?php echo $cr_blog__btn_text; ?>
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


            <?php if( $cr_form__title ) { ?>
            <!-- form -->
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                  <div class="mkdf-section-title-holder">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->

                        <div class="mkdf-section-title-holder mkdf-st-highlight">
                          <div class="mkdf-st-inner">
                            <h2 class="mkdf-st-title">
                              <?php echo $cr_form__title; ?>
                            </h2>


                          </div>

                        </div>

                        <?php if( $cr_form__shortcode ): ?>
                        <div role="form" class="wpcf7 common__form common__form_big">

                          <?php echo do_shortcode($cr_form__shortcode); ?>
                        </div>
                        <?php endif; ?>



                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <?php } ?>
            <?php
get_footer('corporate'); 