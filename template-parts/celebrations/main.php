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

if( $args['page_id'] ):

  $cb_slider= get_field("cb-slider", $args['page_id'] );


else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( !empty($cb_slider) ) { ?>
<!-- slider-row -->
<div class="vc_row wpb_row vc_row-fluid common-padding">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">

        <!-- <div class="mkdf-blog-slider-holder mkdf-bs-carousel-centered"> -->


        <div class="celebrations-page__slider-wrapper">

          <div class="celebrations-page__slider">
            <?php 
              foreach( $cb_slider as $cb_slider__item ) {
                $item_title = $cb_slider__item['item-title'];
                $item_descr = $cb_slider__item['item-descr'];
                $item_btn_text = $cb_slider__item['item-btn_text'];
                $item_btn_link = $cb_slider__item['item-btn_link'];
                $item_img = $cb_slider__item['item-img'];
              
                if($item_img["url"] && $item_title){ 
            ?>

            <div class="celebrations-page__slider-item">

              <div class="celebrations-page__slider-img">
                <img src="<?php echo $item_img["url"]; ?>" alt="<?php echo $item_img["alt"]; ?>" class=" image__animation-tranform">
              </div>


              <div class="celebrations-page__slider-descr-wrapper">
                <div class="celebrations-page__slider-descr">
                  <h2 class="celebrations-page__slider-title">
                    <?php echo $item_title; ?>
                  </h2>
                  <div class="celebrations-page__slider-subtitle">
                    <?php echo $item_descr; ?>
                  </div>
                  <a href="<?php echo $item_btn_link; ?>"
                    class="mkdf-btn celebrations-page__slider-btn cta-modal-form__btn">
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

          <div class="common-slider-arrows celebrations-page__slider-arrows">
            <div class="common-slider-arrow-left celebrations-page__slider-arrow-left">
              <img class="arrow-white"
                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-white.svg';?>"
                alt="назад">
              <img class="arrow-green"
                src="<?php echo get_template_directory_uri() . '/img/slider/arrow-green.svg';?>" alt="back">
            </div>

            <div class="common-slider-arrow-right celebrations-page__slider-arrow-right">
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