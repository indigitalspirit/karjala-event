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
    // $cr_service__text = get_field("cr-service__text");
    // $cr_service__slider = get_field("cr-service__slider");
  

    // $cr_types__title = get_field("cr-types__title");
    // $cr_types = get_field("cr-types");


    // $cr_adv__title = get_field("cr-adv__title");
    // $cr_advs = get_field("cr-advs");


    // $cr_video__title = get_field("cr-video__title");
    // $cr_video__link = get_field("cr-video__link");


    // $cr_reviews__title = get_field("cr-reviews__title");
    // $cr_reviews = get_field("cr-reviews");


    // $cr_mailform__img = get_field("cr-mailform__img");
    // $cr_mailform__title = get_field("cr-mailform__title");
    // $cr_mailform__descr = get_field("cr-mailform__descr");
    // $cr_mailform__shortcode = get_field("cr-mailform__shortcode");
    // $cr_mailform__descr_2 = get_field("cr-mailform__descr_2");
    // $cr_mailform__btn_text = get_field("cr-mailform_btn-text");
    // $cr_mailform__btn_link = get_field("cr-mailform_btn-link");

    
    // $cr_shop__title = get_field("cr-shop__title");
    // $cr_shop__slider = get_field("cr-shop__slider");


    // $cr_blog__title = get_field("cr-blog__title");
    // $cr_blog__item_slug_1 = get_field("cr-blog__item-slug_1");
    // $cr_blog__item_slug_2 = get_field("cr-blog__item-slug_2");
    // $cr_blog__item_slug_3 = get_field("cr-blog__item-slug_3");
    // $cr_blog__btn_text = get_field("cr-blog__btn-text");
    // $cr_blog__btn_link = get_field("cr-blog__btn-link");


    // $cr_form__title = get_field("cr-form__title");
    // $cr_form__shortcode = get_field("cr-form__shortcode");


    $default_blocks_order = array();

    $default_blocks_order['order_services'] = get_field("order_services");
    $default_blocks_order['order_corporates'] = get_field("order_corporates");
    $default_blocks_order['order_adv'] = get_field("order_adv");
    $default_blocks_order['order_video'] = get_field("order_video");
    $default_blocks_order['order_reviews'] = get_field("order_reviews");
    $default_blocks_order['order_maillist'] = get_field("order_maillist");
    $default_blocks_order['order_shop'] = get_field("order_shop");
    $default_blocks_order['order_blog'] = get_field("order_blog");
    $default_blocks_order['order_form'] = get_field("order_form");

    //var_dump($default_blocks_order);

    //if ( function_exists( ' karjala_event_switch_page_blocks_order' ) ) {

      $blocks_order = array();

      $blocks_order =  karjala_event_switch_page_blocks_order($default_blocks_order);

    //} 
 

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

                      $karjala_event_social_3_field = get_option('karjala_event_social_3_field');
                      $karjala_event_social_3_icon = get_option('karjala_event_social_3_icon');

                      $karjala_event_social_4_field = get_option('karjala_event_social_4_field');
                      $karjala_event_social_4_icon = get_option('karjala_event_social_4_icon');

                      $karjala_event_social_5_field = get_option('karjala_event_social_5_field');
                      $karjala_event_social_5_icon = get_option('karjala_event_social_5_icon');

                      $karjala_event_social_6_field = get_option('karjala_event_social_6_field');
                      $karjala_event_social_6_icon = get_option('karjala_event_social_6_icon');


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
                        if( $karjala_event_social_3_field && $karjala_event_social_3_icon ):
                      ?>

                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                        href="<?php echo $karjala_event_social_3_field;?>" target="_blank">
                        <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_3_icon;?>" alt="<?php echo $karjala_event_social_3_field;?>">
                      </a>

                      <?php 
                        endif;
                        if( $karjala_event_social_4_field && $karjala_event_social_4_icon ):
                      ?>

                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                        href="<?php echo $karjala_event_social_4_field;?>" target="_blank">
                        <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_4_icon;?>" alt="<?php echo $karjala_event_social_4_field;?>">
                      </a>
                      <?php 
                        endif;
                        if( $karjala_event_social_5_field && $karjala_event_social_5_icon ):
                      ?>
                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                        href="<?php echo $karjala_event_social_5_field;?>" target="_blank">
                        <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_5_icon;?>" alt="<?php echo $karjala_event_social_5_field;?>">
                      </a>
                      <?php 
                        endif;
                        if( $karjala_event_social_6_field && $karjala_event_social_6_icon ):
                      ?>
                      <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover top-bar__social"
                        href="<?php echo $karjala_event_social_6_field;?>" target="_blank">
                        <img class="mkdf-social-icon-widget  top-bar__social-icon" src="<?php echo $karjala_event_social_6_icon;?>" alt="<?php echo $karjala_event_social_6_field;?>">
                      </a>
                      <?php 
                        endif;
                        
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

                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="рамка 1"
                    class="top-block__top-bg">
                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="рамка 2"
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
                              <ul class="corporate-page__top-icons-set ">

                                <?php if( !empty($cr_main__icons) ) { ?>

                                <?php 
																		foreach( $cr_main__icons as $cr_main__icon ) {
																			$icon_img = $cr_main__icon['icons-item_icon'];
																			$icon_text = $cr_main__icon['icons-item_text'];
																		
																	    if($icon_img && $icon_text){ ?>

                                <li class="corporate-page__top-icon">

                                <?php 
                                  // global $wpdb;
                                  // $query = "SELECT meta_id FROM {$wpdb->postmeta} WHERE meta_value LIKE '%/$filename'";
                              
                                  // if ( $wpdb->get_var($query) ){
                                  //     return $wpdb->get_var($query);
                                  // }
                                      //var_dump($icon_img);

                                ?>

                                  <span><img src="<?php echo $icon_img["url"]; ?>" alt="<?php echo $icon_img["alt"]; ?>"></span>
                                  <div><?php echo $icon_text; ?></div>

                                </li>

                                <?php 
                                      } 

                                    }
                                  }


																?>


                              </ul>

                              <div class="corporate-page__top-btns ">

                                <?php if( $cr_main__btn_1['cr-btn_text'] && $cr_main__btn_1['cr-btn_link'] ) { ?>
                                <a href="<?php echo $cr_main__btn_1['cr-btn_link']; ?>"
                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-consult__btn corporate-page__top-btn">
                                  <span class="mkdf-btn-text">
                                    <?php echo $cr_main__btn_1['cr-btn_text']; ?>
                                  </span>

                                </a>

                                <?php } ?>

                                <?php if( $cr_main__btn_2['cr-btn_text'] && $cr_main__btn_2['cr-btn_link'] ) { ?>
                                <a download href="<?php echo $cr_main__btn_2['cr-btn_link'];?>"
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


            
            <?php 
              
              // get_template_part( 'template-parts/corporates/description', '', [ 'page_id' => $page_id ] ); 
              // get_template_part( 'template-parts/corporates/services', '', [ 'page_id' => $page_id ] ); 
              // get_template_part( 'template-parts/corporates/adv', '', [ 'page_id' => $page_id ] );
              // get_template_part( 'template-parts/corporates/video', '', [ 'page_id' => $page_id ] );
              // get_template_part( 'template-parts/corporates/reviews', '', [ 'page_id' => $page_id ] );
              
              // get_template_part( 'template-parts/corporates/mailform', '', [ 'page_id' => $page_id ] );
              // get_template_part( 'template-parts/corporates/shop', '', [ 'page_id' => $page_id ] );
              // get_template_part( 'template-parts/corporates/blog', '', [ 'page_id' => $page_id ] );
              // get_template_part( 'template-parts/corporates/form', '', [ 'page_id' => $page_id ] );
              $page_id = get_the_ID();


              if ( function_exists( 'karjala_event_place_new_blocks_order' ) ) {
                karjala_event_place_new_blocks_order($blocks_order, $page_id);
              }
              //place_new_blocks_order($blocks_order, $page_id);

            ?>


            

            

<?php
get_footer('corporate'); 