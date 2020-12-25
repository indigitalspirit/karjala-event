<?php
/*
Template Name: Походы
Template Post Type: page
*/
get_header();
?>


<?php
    $tr_main__title= get_field("tr-main_title");
    $tr_slider= get_field("tr-slider");
    

    // $tr_trips = get_field("tr-trips");


    // $tr_adv__title= get_field("tr-adv__title");
    // $tr_advs= get_field("tr-advs");


    // $tr_service__title = get_field("tr-service__title");
    // $tr_service__text = get_field("tr-service__text");
    // $tr_service__slider = get_field("tr-service__slider");


    // $tr_video__title = get_field("tr-video__title"); 
    // $tr_video__link = get_field("tr-video__link");


  // $tr_reviews__title = get_field("tr-reviews__title");
  // $tr_reviews = get_field("tr-reviews");
  

    // $tr_slider= get_field("tr-slider");
    // $tr_slider= get_field("tr-slider");


    // $tr_reviews__title = get_field("tr-reviews__title");
    // $tr_reviews = get_field("tr-reviews");


    // $tr_mailform__img = get_field("tr-mailform__img");
    // $tr_mailform__title = get_field("tr-mailform__title");
    // $tr_mailform__descr = get_field("tr-mailform__descr");
    // $tr_mailform__shortcode = get_field("tr-mailform__shortcode");
    // $tr_mailform__descr_2 = get_field("tr-mailform__descr_2");
    // $tr_mailform__btn_text = get_field("tr-mailform_btn-text");
    // $tr_mailform__btn_link = get_field("tr-mailform_btn-link");

    
    // $tr_shop__title = get_field("tr-shop__title");
    // $tr_shop__slider = get_field("tr-shop__slider");


    // $tr_blog__title = get_field("tr-blog__title");
    // $tr_blog__item_slug_1 = get_field("tr-blog__item-slug_1");
    // $tr_blog__item_slug_2 = get_field("tr-blog__item-slug_2");
    // $tr_blog__item_slug_3 = get_field("tr-blog__item-slug_3");
    // $tr_blog__btn_text = get_field("tr-blog__btn-text");
    // $tr_blog__btn_link = get_field("tr-blog__btn-link");


    // $tr_form__title = get_field("tr-form__title");
    // $tr_form__shortcode = get_field("tr-form__shortcode");



    $default_blocks_order = array();

    $default_blocks_order['trips_trips'] = get_field("trips_trips");
    $default_blocks_order['trips_services'] = get_field("trips_services");
    $default_blocks_order['trips_adv'] = get_field("trips_adv");
    $default_blocks_order['trips_video'] = get_field("trips_video");
    $default_blocks_order['trips_reviews'] = get_field("trips_reviews");
    $default_blocks_order['trips_maillist'] = get_field("trips_maillist");
    $default_blocks_order['trips_shop'] = get_field("trips_shop");
    $default_blocks_order['trips_blog'] = get_field("trips_blog");
    $default_blocks_order['trips_form'] = get_field("trips_form");

    //var_dump($default_blocks_order);

    //if ( function_exists( ' karjala_event_switch_page_blocks_order' ) ) {

      $blocks_order = array();

      $blocks_order =  karjala_event_switch_page_blocks_order($default_blocks_order);

      

    //} 

    //echo 'try try try try';

    //var_dump($default_blocks_order);

    //var_dump($blocks_order);

?>


<div class="mkdf-content">
  <div class="mkdf-content-inner">
    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner trips">
        <div class="mkdf-grid-row">

          <div class="mkdf-page-content-holder mkdf-grid-col-12">


            <?php if( !empty($tr_main__title) ) { ?>
            <!-- top-slider-row -->
            <div class="vc_row wpb_row vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                  <h1 class="mkdf-st-title">
                    <?php the_title(); ?>
                  </h1>

                

                   
                    <?php if( !empty(  $tr_slider ) ): ?>
                    <div class="trips-page__slider-wrapper">

                      <div class="trips-page__slider">
                        <?php 
                          foreach( $tr_slider as $tr_slider__item ) {
                            $item_title = $tr_slider__item['item-title'];
                            $item_subtitle = $tr_slider__item['item-subtitle'];
                            $item_advs__array = $tr_slider__item['item-advs'];
                            $item_btns_array = $tr_slider__item['item-btns'];
                            $item_img = $tr_slider__item['item-img'];
                          
                            if( !empty($item_img) && $item_title ) { 
                        ?>

                        <div class="trips-page__slider-item" style="background: url(<?php echo $item_img["url"]; ?>) center no-repeat; background-size:cover;">

                          <!-- <div class="trips-page__slider-img">
                            <img src="<?php echo $item_img; ?>" alt="<?php echo $item_title; ?>"> 
                          </div> -->


                          <div class="trips-page__slider-descr-wrapper">
                            <div class="trips-page__slider-descr">
                             
                              <h2 class="trips-page__slider-title">
                                <?php echo $item_title; ?>
                                
                              </h2>
                              <p class="trips-page__slider-descr">
                                <?php echo $item_subtitle; ?>                              
                              </p>

                              <?php if( !empty( $item_advs__array ) ):?>
                              <div class="trips-page__slider-icons">
                                <?php 
                                  foreach ( $item_advs__array as $advs_item ) {

                                    
                                    // if ( $advs_item['adv_icon_svg'] ) {
                                    //   $advs_item_icon_link = $advs_item['adv_icon_svg'];

                                    // }
                                    if ( $advs_item['adv_icon_png'] ) {

                                      $advs_item_icon_link = $advs_item['adv_icon_png'];

                                    }

                                  
                                ?>
                                <div class="slider-icons__item">

                                  <?php if ( $advs_item_icon_link ): ?>
                                  <div class="slider-icons__item-icon">
                                    <img src="<?php echo $advs_item_icon_link["url"]; ?>" alt="<?php echo $advs_item_icon_link["alt"]; ?>">
                                  </div>
                                  <?php endif; ?>

                                  <?php if ( $advs_item['adv_text'] ): ?>
                                  <div class="slider-icons__item-text"><?php echo $advs_item['adv_text']; ?></div>
                                  <?php endif; ?>

                                </div>
                                <?php } ?>
                              </div>
                              <?php endif; ?>

                              <div class="trips-page__slider-btns">
                                <?php if( !empty( $item_btns_array['item_btn_1'] ) ) {  ?>
                                <a href="<?php echo $item_btns_array['item_btn_1']['btn_link']; ?>"
                                  class="mkdf-btn trips-page__slider-btn cta-modal-form__btn" target="_blank">
                                  <span class="mkdf-btn-text">
                                  <?php echo $item_btns_array['item_btn_1']['btn_text']; ?>
                                  </span>
                                </a>
                                <?php } ?>

                                <?php if( !empty( $item_btns_array['item_btn_2'] ) ) {  ?>
                                <a download href="<?php echo $item_btns_array['item_btn_2']['btn_link']; ?>"
                                  class="mkdf-btn trips-page__slider-btn cta-modal-form__btn">
                                  <span class="mkdf-btn-text">
                                  <?php echo $item_btns_array['item_btn_2']['btn_text']; ?>
                                  </span>
                                </a>
                                <?php } ?>
                              </div>
                              

                             

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
                    <?php endif; ?>


                    <!-- </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- ./top-slider-row -->
            <?php                        
              }
            ?>



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