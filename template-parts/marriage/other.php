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

  $tr_service__title = get_field("tr-service__title", $args['page_id'] );
  $tr_service__text = get_field("tr-service__text", $args['page_id'] );
  $tr_service__slider = get_field("tr-service__slider", $args['page_id'] );
  //var_dump($cr_types );

  $mg_tent__title = get_field("mg-tent__title", $args['page_id'] );
  $mg_tent__text = get_field("mg-tent__text", $args['page_id'] );
  $mg_tent__link = get_field("mg-tent__link", $args['page_id'] );
  $mg_tent__btn_link = get_field("mg-tent__btn_link", $args['page_id'] );
  $mg_tent__btn_text = get_field("mg-tent__btn_text", $args['page_id'] );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
  return;
endif;

?>


<?php if( $mg_tent__title ) { ?>
<!-- other services -->
<div class="mkdf-row-grid-section-wrapper common-padding marriage-page__block-services">
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
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

                        <div class="mkdf-st-text marriage-page__block-services-txt"
                          >
                          <?php echo $mg_tent__text; ?>
                        </div>


                        <a href="<?php echo $mg_tent__btn_link; ?>"
                          class="mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
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