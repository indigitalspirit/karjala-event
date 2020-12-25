<?php
/*
Template Name: Праздники
Template Post Type: page
*/
get_header();
?>


<?php
    //  $cb_slider= get_field("cb-slider");


    //  $cb_adv__title= get_field("cb-adv__title");
    //  $cb_advs= get_field("cb-advs");


    //  $cb_service__title = get_field("cb-service__title");
    //  $cb_service__text = get_field("cb-service__text");
    //  $cb_service__slider = get_field("cb-service__slider");


    //  $cb_video__title = get_field("cb-video__title"); 
    //  $cb_video__link = get_field("cb-video__link");


    // $cb_reviews__title = get_field("cb-reviews__title");
    // $cb_reviews = get_field("cb-reviews");
    

    //  $cb_slider= get_field("cb-slider");
    //  $cb_slider= get_field("cb-slider");
 
 
    //  $cb_reviews__title = get_field("cb-reviews__title");
    //  $cb_reviews = get_field("cb-reviews");
 
 
    //  $cb_mailform__img = get_field("cb-mailform__img");
    //  $cb_mailform__title = get_field("cb-mailform__title");
    //  $cb_mailform__descr = get_field("cb-mailform__descr");
    //  $cb_mailform__shortcode = get_field("cb-mailform__shortcode");
    //  $cb_mailform__descr_2 = get_field("cb-mailform__descr_2");
    //  $cb_mailform__btn_text = get_field("cb-mailform_btn-text");
    //  $cb_mailform__btn_link = get_field("cb-mailform_btn-link");
     
 
    //  $cb_shop__title = get_field("cb-shop__title");
    //  $cb_shop__slider = get_field("cb-shop__slider");
 
 
    //  $cb_blog__title = get_field("cb-blog__title");
    //  $cb_blog__item_slug_1 = get_field("cb-blog__item-slug_1");
    //  $cb_blog__item_slug_2 = get_field("cb-blog__item-slug_2");
    //  $cb_blog__item_slug_3 = get_field("cb-blog__item-slug_3");
    //  $cb_blog__btn_text = get_field("cb-blog__btn-text");
    //  $cb_blog__btn_link = get_field("cb-blog__btn-link");
 
 
    //  $cb_form__title = get_field("cb-form__title");
    //  $cb_form__shortcode = get_field("cb-form__shortcode");
    

    $default_blocks_order = array();

    $default_blocks_order['celebrations_main'] = get_field("celebrations_main");
    $default_blocks_order['celebrations_services'] = get_field("celebrations_services");
    $default_blocks_order['celebrations_adv'] = get_field("celebrations_adv");
    $default_blocks_order['celebrations_video'] = get_field("celebrations_video");
    $default_blocks_order['celebrations_reviews'] = get_field("celebrations_reviews");
    $default_blocks_order['celebrations_maillist'] = get_field("celebrations_maillist");
    $default_blocks_order['celebrations_shop'] = get_field("celebrations_shop");
    $default_blocks_order['celebrations_blog'] = get_field("celebrations_blog");
    $default_blocks_order['celebrations_form'] = get_field("celebrations_form");

    //var_dump($default_blocks_order);

    //if ( function_exists( ' karjala_event_switch_page_blocks_order' ) ) {

      $blocks_order = array();

      $blocks_order =  karjala_event_switch_page_blocks_order($default_blocks_order);
		
  ?>


<div class="mkdf-content">
  <div class="mkdf-content-inner">
    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner trips celebrations">
        <div class="mkdf-grid-row">

          <div class="mkdf-page-content-holder mkdf-grid-col-12">


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