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

    



  
    // $;
  
    // $;
  
    // $;
  
    // $;
  
    // $;
  
    // $;
		
?>

<div class="mkdf-content">
  <div class="mkdf-content-inner">
    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner">
        <div class="mkdf-grid-row">
          <div class="mkdf-page-content-holder mkdf-grid-col-12">

            <!-- top-bar -->
            <div class="mkdf-top-bar top-bar" style="">
              <div class="mkdf-vertical-align-containers">
                <div class="mkdf-position-left">
                  <div class="mkdf-position-left-inner">
                    <?php 
                      $phone = get_option('karjala_event_phone_field');
                      if( $phone ) {
                    ?>
                    <a class="mkdf-icon-widget-holder top-bar__phone" href="tel:<?php echo trim($phone); ?>"
                      target="_blank">
                      <span class="mkdf-icon-element ion-android-call top-bar__phone-icon" style=""></span>
                      <span class="mkdf-icon-text top-bar__phone-text" style="">
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
                      target="_blank" style="">
                      <span class="mkdf-icon-element ion-ios-email-outline top-bar__email-icon" style=""></span>
                      <span class="mkdf-icon-text top-bar__email-text" style="">
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
                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social" style=""
                        href="<?php echo $vk;?>" target="_blank">
                        <span class="mkdf-social-icon-widget ion-social-instagram top-bar__social-icon"></span>
                      </a>
                      <?php 
                        }
                        if( $instagram ) {
                      ?>
                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social" style=""
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
            <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-page__top" <?php if( $cr_main__img ): ?>style="background: url(<?php echo $cr_main__img; ?>) center center no-repeat;background-size: cover;"<?php endif; ?>>

                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="" class="top-block__top-bg">
                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="" class="top-block__bottom-bg">



                  <div class="mkdf-section-title-holder  " style="text-align: left">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229" style="">

                        <!-- content -->
                        <div class="">
                          <div class="mkdf-section-title-holder  " style="text-align: left">
                            <div class="mkdf-st-inner">
                              <h2 class="mkdf-st-title corporate-page__top-title">
                                <?php echo $cr_main__title; ?> </h2>
                              <div class="corporate-page__top-icons-set">

                              <?php if( !empty($cr_main__icons) ) { ?>

                                <?php 
																		foreach( $cr_main__icons as $cr_main__icon ) {
																			$icon_img = $cr_main__icon['icons-item_icon'];
																			$icon_text = $cr_main__icon['icons-item_text'];
																		
																	    if($icon_img && $icon_text){ ?>

                                <div class="corporate-page__top-icon">

                                  <span><?php echo $icon_img; ?></span>
                                  <p><?php echo $icon_text; ?></p>

                                </div>

                                <?php 
                                      } 

                                    }
                                  }


																?>


                              </div>

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
                                <a download class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-form corporate-page__top-btn">
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
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper" style="">

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->

                        <div class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 ">

                          <div class="mkdf-eh-item    ">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6011" style="">
                                <div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: left">
                                  <div class="mkdf-st-inner">

                                    <p class="mkdf-st-text we-know__block-text">
                                      <?php echo $cr_service__text; ?>
                                    </p>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <?php if( !empty($cr_service__slider) ) { ?>

                          <div class="mkdf-eh-item    ">

                            <div class="we-know-slider__wrapper">
                              <div class="we-know-slider">

                              <?php 
                                foreach( $cr_service__slider as $service_slider__item ) {
                                
                              ?>

                              <?php if( $service_slider__item ): ?>
                                <div class="we-know-slider__item">
                                  <img src="<?php echo $service_slider__item; ?>" alt="<?php echo $service_slider__item; ?>">
                                </div>
                              <?php endif; ?>

                              <?php 
                                }
                              ?>

                              </div>

                              <div class="common-slider-arrows we-know-slider__arrows">
                                <div class="common-slider-arrow-left we-know-slider__arrows_arrow-left">
                                  <img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="назад">
                                  <img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="back">
                                </div>
                                <div class="common-slider-arrow-right we-know-slider__arrows_arrow-right">
                                 <img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="вперед">
                                  <img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="forward">

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
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper" style="">

                  <div class="mkdf-section-title-holder  " style="text-align: left">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229" style="">

                        <!-- content -->
                        <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align"
                          style="text-align: center">
                          <div class="mkdf-st-inner">
                            <h2 class="mkdf-st-title corporate-services__block-title">
                            <?php echo $cr_types__title; ?>
                            </h2>
                           
                          </div>
                        </div>


                        <?php if( !empty($cr_service__slider) ) { ?>
                        <div
                          class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns  mkdf-normal-space mkdf-bl-pag-load-more ">

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
                              <div class="corporate-services__block-item block-item_1" style="background:url(<?php if( $item_img ) {echo $item_img;} ?>);background-size: cover;">


                                <div class="corporate-services__block-item-descr-wrapper">
                                  <div class="corporate-services__block-item-descr">
                                    <?php if( $item_title ): ?>
                                    <div class="corporate-services__block-item-title">
                                      <?php echo $item_title; ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if( $item_btn_text ): ?>
                                      <a href="<?php if( $item_btn_link ){echo $item_btn_link; } else {echo '#'; }?>" class="mkdf-btn cta-modal-form__btn corporate-services__block-item-btn">
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

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align"
                          style="text-align: center">
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


                            <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
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

                                      <h6 class="mkdf-dcli-title entry-title">
                                        <?php echo $item_title; ?>
                                      </h6>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </article>


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

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align"
                          style="text-align: center">
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

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align"
                          style="text-align: center">
                          <div class="mkdf-st-inner">
                          <h2 class="mkdf-st-title corporate-reviews__block-title">
                            <?php echo $cr_reviews__title; ?>
                          </h2>
                            

                          </div>
                        </div>

                        <?php if( !empty($cr_reviews) ) { ?>

                        <div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 ">
                          <div class="mkdf-eh-item">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6938">
                                <div
                                  class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-two-columns mkdf-disable-bottom-space mkdf-normal-space mkdf-bl-pag-no-pagination ">

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

                                          <div class="reviews-slider__descr-name">


                                            <?php echo $item_name; ?>
                                          </div>

                                          <div class="reviews-slider__descr-author">


                                            <?php echo $item_regalias; ?>
                                          </div>

                                          <div class="reviews-slider__text">

                                            <p itemprop="description" class="mkdf-post-excerpt">
                                              <?php echo $item_text; ?> </p>

                                          </div>


                                        </div>
                                      </div>
                                    <?php endif; ?>

                                      <?php
                                          }

                                      ?>



                                    </div>


                                    <div class="slider-arrows common-slider-arrows  reviews-slider__arrows">
                                      <div
                                        class="slider-arrow__left common-slider-arrow-left reviews-slider__arrows_arrow-left">
                                        <img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="назад">
                                        <img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="back">
                                      </div>
                                      <div
                                        class="slider-arrow__right common-slider-arrow-right  reviews-slider__arrows_arrow-right">
                                       <img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="вперед">
                                        <img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="forward">
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
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418  corporate-block_wrapper">

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div
                          class="mkdf-elements-holder   mkdf-two-columns  mkdf-responsive-mode-1024 trips-page__block_maillist-wrapper corporate-maillist__block-wrapper">

                          <div class="mkdf-eh-item corporate-maillist__block-img">
                            <div class="mkdf-eh-item-inner">
                              <div class="mkdf-eh-item-content mkdf-eh-custom-6959">
                                <div class="mkdf-single-image-holder   ">
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

                                <div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: left">
                                  <div class="mkdf-st-inner">
                                  <h3 class="mkdf-st-title">
                                  <?php echo $cr_mailform__title; ?>
                                  </h3>
                                    

                                    <p class="mkdf-st-text corporate-maillist__block-text-par"
                                      style="font-size: 18px;line-height: 26px">
                                      <?php echo $cr_mailform__descr; ?>
                                    </p>
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


                                  <p class="mkdf-st-text corporate-maillist__block-text-par"
                                    style="font-size: 18px;line-height: 26px">
                                    <?php echo $cr_mailform__descr_2; ?>
                                  </p>

                                  <a href="#" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
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

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->

                        <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align"
                          style="text-align: center">
                          <div class="mkdf-st-inner">
                            <h2 class="mkdf-st-title corporate-shop__block-title">
                              <?php echo $cr_shop__title; ?> 
                            </h2>
                           
                          </div>
                        </div>


                        
                        <?php if( !empty( $cr_shop__slider ) ) { ?>
                        <div
                          class="mkdf-pl-holder mkdf-grid-list mkdf-disable-bottom-space mkdf-standard-layout mkdf-five-columns mkdf-no-space mkdf-info-below-image ">
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
                                          <img class="mkdf-product-hover-image" alt="a" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/shop-img-18.png">
                                      </div>
                                      
                                      <!-- <a class="mkdf-pli-link" href="#" title="Shoes"></a> -->
                                    </div>
                                    <div class="mkdf-pli-text-wrapper">

                                      <h6 itemprop="name" class="entry-title mkdf-pli-title">
                                        <span><?php echo $item_title; ?></span>
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
                                <div class="common-slider-arrow-left slider-arrow__left shop-slider__arrows_arrow-left">
                                  <img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="назад">
                                  <img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="back">


                                </div>
                                <div
                                  class="common-slider-arrow-right slider-arrow__right shop-slider__arrows_arrow-right">
                                 <img class="arrow-white" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg'; ?>" alt="вперед">
                                  <img class="arrow-green" src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg'; ?>" alt="forward">


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

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="mkdf-section-title-holder   mkdf-st-highlight mkdf-center-align"
                          style="text-align: center">
                          <div class="mkdf-st-inner">
                          <h2 class="mkdf-st-title">
                            <?php echo $cr_blog__title; ?>
                            </h2>
                          </div>
                        </div>

                        <div
                          class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns  mkdf-normal-space mkdf-bl-pag-load-more ">
                          <div class="mkdf-bl-wrapper mkdf-outer-space">
                            <ul class="mkdf-blog-list">

                            <?php if( $cr_blog__item_slug_1 ) { ?>
                              <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                                <div class="mkdf-bli-inner">
                                  <div class="mkdf-bli-wrapper">
                                    <div class="mkdf-post-image mkdf-tilt-trigger">
                                      <a href="<?php //echo $mp_history__title; ?>"
                                        title="<?php //echo $mp_history__title; ?>"
                                        class="mkdf-tilt-target">
                                        <img src="<?php //echo $mp_history__title; ?>"
                                          class="attachment-full size-full wp-post-image image__animation-tranform"
                                          alt="<?php //echo $mp_history__title; ?>"> 
                                      </a>
                                    </div>
                                    <div class="mkdf-post-info-category mkdf-st-highlight">
                                      <a href="<?php //echo $mp_history__title; ?>"
                                        rel="category tag">
                                        <?php //echo $mp_history__title; ?>
                                      </a> 
                                      <span class="mkdf-st-highlight">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                          viewBox="0 0 15.7 30" style="enable-background:new 0 0 15.7 30;"
                                          xml:space="preserve" class="mkdf-active-hover-left">
                                          <polygon class="st0"
                                            points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
                                          </polygon>
                                        </svg> 
                                        <span class="mkdf-active-hover-middle"></span>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                          xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                          viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;"
                                          xml:space="preserve" class="mkdf-active-hover-right">
                                          <polygon class="st0"
                                            points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
                                          </polygon>
                                        </svg> 
                                      </span>
                                    </div>
                                  </div>
                                  <div class="mkdf-bli-content">
                                    <div class="mkdf-bli-info">
                                      <div class="mkdf-post-info-date entry-date published updated">
                                        <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span>
                                        <a href="<?php //echo $mp_history__title; ?>">
                                          <?php //echo $mp_history__title; ?> 
                                        </a>
                                        <meta content="UserComments: 0">
                                      </div>
                                    </div>
                                    <h5 class="entry-title mkdf-post-title">
                                      <a href="<?php //echo $mp_history__title; ?>"
                                        title="<?php //echo $mp_history__title; ?>">
                                        <?php //echo $mp_history__title; ?> 
                                      </a>
                                    </h5>
                                    
                                  </div>
                                </div>
                              </li>
                            <?php } ?>

                            <?php //if( $cr_blog__item_slug_2 ) { ?>
                              
                            <?php //} ?>

                            <?php //if( $cr_blog__item_slug_3 ) { ?>
                              
                            <?php //} ?>

                            </ul>
                          </div>
                         
                          <div class="mkdf-blog-pag-load-more">
                            <a href="<?php echo $cr_blog__btn_link; ?>"
                              class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon"> 
                              <span
                                class="mkdf-btn-text"><?php echo $cr_blog__btn_text; ?>
                              </span> 
                              <svg version="1.1"
                              id="Layer_1" xmlns="http://www.w3.org/2000/svg"
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


            <?php if( $cr_form__title ) { ?>
            <!-- form -->
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

                  <div class="mkdf-section-title-holder  ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->

                        <div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: center">
                          <div class="mkdf-st-inner">
                          <h3 class="mkdf-st-title">
                          <?php echo $cr_form__title; ?>
                                  </h3>
                            

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