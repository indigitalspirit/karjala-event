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

  $cb_mailform__img = get_field("cb-mailform__img", $args['page_id'] );
  $cb_mailform__title = get_field("cb-mailform__title", $args['page_id'] );
  $cb_mailform__descr = get_field("cb-mailform__descr", $args['page_id'] );
  $cb_mailform__shortcode = get_field("cb-mailform__shortcode", $args['page_id'] );
  $cb_mailform__descr_2 = get_field("cb-mailform__descr_2", $args['page_id'] );
  $cb_mailform__btn_text = get_field("cb-mailform_btn-text", $args['page_id'] );
  $cb_mailform__btn_link = get_field("cb-mailform_btn-link", $args['page_id'] );
  
else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( $cb_mailform__title ) { ?>
<!-- РАССЫЛКА -->
<div class="vc_row wpb_row vc_row-fluid vc_row-has-fill bg_aquarell common-padding trips-page__block_maillist">

  <!-- section-container -->
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_inner vc_row-fluid">
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
          <div class="wpb_wrapper">



            <div class="mkdf-pl-outer mkdf-outer-space">

              <!-- content -->
              <div
                class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024 trips-page__block_maillist-wrapper">

                <div class="mkdf-eh-item trips-page__block_maillist-img">
                  <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-6959">
                      <div class="mkdf-single-image-holder">
                        <div class="mkdf-si-inner">
                          <img src="<?php echo $cb_mailform__img["url"]; ?>"
                            alt="<?php echo $cb_mailform__img["alt"]; ?>" class=" image__animation-tranform"> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mkdf-eh-item trips-page__block_maillist-text">
                  <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-3422">

                      <div class="mkdf-section-title-holder mkdf-st-highlight">
                        <div class="mkdf-st-inner">
                          <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                          <h2 class="mkdf-st-title">
                            <?php echo $cb_mailform__title; ?>
                          </h2>

                          <div class="mkdf-st-text">
                            <?php echo $cb_mailform__descr; ?>
                          </div>
                        </div>
                      </div>


                      <?php if( $cb_mailform__shortcode ): ?>
                      <div role="form" class="wpcf7">
                        <?php 
                                      // $cb_mailform__shortcode = "'" . $cb_mailform__shortcode . "'";
                                    
                                      echo do_shortcode($cb_mailform__shortcode); 
                                    ?>
                      </div>
                      <?php endif; ?>



                      <div class="trips-page__block_maillist-text-bottom">


                        <div class="mkdf-st-text">
                          <?php echo $cb_mailform__descr_2; ?>
                        </div>

                        <a href="<?php echo $cb_mailform__btn_link; ?>"
                          class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid cta-modal-consult__btn">
                          <span class="mkdf-btn-text">

                            <?php echo $cb_mailform__btn_text; ?>
                          </span>
                        </a>


                      </div>

                    </div>
                  </div>
                </div>

              </div>
              <!-- ./content -->



            </div>

            <!-- </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ./section-container -->

</div>
<?php } ?>