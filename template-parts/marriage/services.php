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

  $mg_marriage__title = get_field("mg-marriage__title", $args['page_id'] );
  $mg_marriage__text = get_field("mg-marriage__text", $args['page_id'] );
  $mg_marriage__link = get_field("mg-marriage__link", $args['page_id'] );


  //var_dump($cr_types );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
  return;
endif;

?>

<?php if( $mg_marriage__title ) { ?>
<!-- marrige services -->
<div class="mkdf-row-grid-section-wrapper common-padding marriage-page__block-services">
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
      <div class="wpb_column vc_column_container vc_col-sm-12">

        <div class="vc_column-inner">

          <div class="wpb_wrapper">


            <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024">

              <div class="mkdf-eh-item marriage-page__block-services-left">
                <?php echo $mg_marriage__link; ?>


              </div>

              <div class="mkdf-eh-item marriage-page__block-services-right">
                <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-6011">





                    <div class="mkdf-section-title-holder mkdf-st-highlight">
                      <div class="mkdf-st-inner">

                        <h2 class="mkdf-st-title marriage-page__block-services-title">
                          <?php echo $mg_marriage__title; ?>
                        </h2>

                        <div class="mkdf-st-text marriage-page__block-services-txt"
                          >
                          <?php echo $mg_marriage__text; ?>
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
</div>
<!-- ./marrige services -->
<?php } ?>