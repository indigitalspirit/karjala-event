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
  $cr_types__title = get_field("cr-types__title", $args['page_id'] );
  $cr_types = get_field("cr-types", $args['page_id'] );
  //var_dump($cr_types );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
  return;
endif;


if( $cr_types__title ) { 
?>
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


              <?php if( !empty($cr_types) ) { ?>
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