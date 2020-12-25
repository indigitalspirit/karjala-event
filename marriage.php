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


    // $mg_marriage__title = get_field("mg-marriage__title");
    // $mg_marriage__text = get_field("mg-marriage__text");
    // $mg_marriage__link = get_field("mg-marriage__link");


    // $mg_cases__title = get_field("mg-cases__title");
    // $mg_cases = get_field("mg-cases");


    // $mg_reviews__title = get_field("mg-reviews__title");
    // $mg_reviews = get_field("mg-reviews");


    // $mg_about__title = get_field("mg-about__title");
    // $mg_about__descr = get_field("mg-about__descr");
    // $mg_about__slider = get_field("mg-about__slider");


    // $mg_tent__title = get_field("mg-tent__title");
    // $mg_tent__text = get_field("mg-tent__text");
    // $mg_tent__link = get_field("mg-tent__link");
    // $mg_tent__btn_link = get_field("mg-tent__btn_link");
    // $mg_tent__btn_text = get_field("mg-tent__btn_text");


    // $mg_mailform__img = get_field("mg-mailform__img");
    // $mg_mailform__title = get_field("mg-mailform__title");
    // $mg_mailform__descr = get_field("mg-mailform__descr");
    // $mg_mailform__shortcode = get_field("mg-mailform__shortcode");
    // $mg_mailform__descr_2 = get_field("mg-mailform__descr_2");
    // $mg_mailform__btn_text = get_field("mg-mailform_btn-text");
    // $mg_mailform__btn_link = get_field("mg-mailform_btn-link");


    // $mg_shop__title = get_field("mg-shop__title");
    // $mg_shop__slider = get_field("mg-shop__slider");


    // $mg_blog__title = get_field("mg-blog__title");
    // $mg_blog__item_slug_1 = get_field("mg-blog__item-slug_1");
    // $mg_blog__item_slug_2 = get_field("mg-blog__item-slug_2");
    // $mg_blog__item_slug_3 = get_field("mg-blog__item-slug_3");
    // $mg_blog__btn_text = get_field("mg-blog__btn-text");
    // $mg_blog__btn_link = get_field("mg-blog__btn-link");

    // $mg_form__title = get_field("mg-form__title");
    // $mg_form__shortcode = get_field("mg-form__shortcode");


    

    $default_blocks_order = array();

    $default_blocks_order['marriage_other'] = get_field("marriage_other");
    $default_blocks_order['marriage_services'] = get_field("marriage_services");
    $default_blocks_order['marriage_about'] = get_field("marriage_about");
    $default_blocks_order['marriage_cases'] = get_field("marriage_cases");
    $default_blocks_order['marriage_reviews'] = get_field("marriage_reviews");
    $default_blocks_order['marriage_maillist'] = get_field("marriage_maillist");
    $default_blocks_order['marriage_shop'] = get_field("marriage_shop");
    $default_blocks_order['marriage_blog'] = get_field("marriage_blog");
    $default_blocks_order['marriage_form'] = get_field("marriage_form");

    //var_dump($default_blocks_order);

    //if ( function_exists( ' karjala_event_switch_page_blocks_order' ) ) {

      $blocks_order = array();

      $blocks_order =  karjala_event_switch_page_blocks_order($default_blocks_order);


  ?>

<div class="mkdf-content">
  <div class="mkdf-content-inner">


    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner marriage">
        <div class="mkdf-grid-row">

          <div class="mkdf-page-content-holder mkdf-grid-col-12">

            <?php if( $mg_main__title ) { ?>
            <!-- top-block -->
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="mkdf-eh-item-inner">
                <div class="mkdf-eh-item-content mkdf-eh-custom-1418 marriage-page__top"
                  <?php if( $mg_main__img ): ?>style="background: url(<?php echo $mg_main__img; ?>) center center no-repeat;background-size: cover;"
                  <?php endif; ?>>

                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="рамка-1"
                    class="top-block__top-bg">
                  <img src="<?php echo get_template_directory_uri() . '/img/bg-top-white-sharp.png'; ?>" alt="рамка-2"
                    class="top-block__bottom-bg">



                  <div class="mkdf-section-title-holder ">
                    <div class="mkdf-st-inner">
                      <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

                        <!-- content -->
                        <div class="">
                          <div class="mkdf-section-title-holder ">
                            <div class="mkdf-st-inner">
                              <h1 class="mkdf-st-title marriage-page__top-title">
                                <?php echo $mg_main__title; ?>
                              </h1>
                              <ul class="marriage-page__top-icons-set ">

                                <?php if( !empty($mg_main__icons) ) { ?>

                                <?php 
																		foreach( $mg_main__icons as $mg_main__icon ) {
																			$icon_img = $mg_main__icon['item_icon'];
																			$icon_text = $mg_main__icon['item_text'];
																		
																	    if($icon_img["url"] && $icon_text){ 
                                    ?>

                                <li class="marriage-page__top-icon">

                                  <span>
                                    <img src="<?php echo $icon_img["url"]; ?>" alt="<?php echo $icon_img["alt"]; ?>">
                                  </span>
                                  <div><?php echo $icon_text; ?></div>

                                </li>

                                <?php 
                                      } 

                                    }
                                  }


																?>



                                </ul>
                              <div class="marriage-page__top-btns">
                                <?php if( $mg_main__btn_1['mg-btn_text'] && $mg_main__btn_1['mg-btn_link'] ) { ?>

                                <a href="<?php echo $mg_main__btn_1['mg-btn_link']; ?>"
                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-consult__btn marriage-page__top-btn">
                                  <span class="mkdf-btn-text">
                                    <?php echo $mg_main__btn_1['mg-btn_text']; ?>
                                  </span>

                                </a>

                                <?php } ?>

                                <?php if( $mg_main__btn_2['mg-btn_text'] && $mg_main__btn_2['mg-btn_link'] ) { ?>

                                <a download href="<?php echo $mg_main__btn_2['mg-btn_link'];?>" 
                                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon cta-modal-form marriage-page__top-btn">
                                  <span class="mkdf-btn-text">
                                    <?php echo $mg_main__btn_2['mg-btn_text']; ?>
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


     

            



          </div>
        </div>
      </div>

    </div>

  </div>
</div>


<?php 
get_footer(); 