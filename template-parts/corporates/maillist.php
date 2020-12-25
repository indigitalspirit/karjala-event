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
  $cr_mailform__img = get_field("cr-mailform__img", $args['page_id'] );
  $cr_mailform__title = get_field("cr-mailform__title", $args['page_id'] );
  $cr_mailform__descr = get_field("cr-mailform__descr", $args['page_id'] );
  $cr_mailform__shortcode = get_field("cr-mailform__shortcode", $args['page_id'] );
  $cr_mailform__descr_2 = get_field("cr-mailform__descr_2", $args['page_id'] );
  $cr_mailform__btn_text = get_field("cr-mailform_btn-text", $args['page_id'] );
  $cr_mailform__btn_link = get_field("cr-mailform_btn-link", $args['page_id'] );
  
else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;


if( $cr_mailform__title ) { 
  
  ?>
<!-- maillist -->
<div class="vc_row wpb_row vc_row-fluid corporate-maillist__block">
  <div class="mkdf-eh-item-inner">
    <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

      <div class="mkdf-section-title-holder">
        <div class="mkdf-st-inner">
          <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

            <!-- content -->
            <div class="mkdf-elements-holder mkdf-two-columns mkdf-responsive-mode-1024 trips-page__block_maillist-wrapper corporate-maillist__block-wrapper">

              <div class="mkdf-eh-item corporate-maillist__block-img">
                <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-6959">
                    <div class="mkdf-single-image-holder">
                      <div class="mkdf-si-inner">
                        <img src="<?php echo $cr_mailform__img["url"]; ?>"
                          alt="<?php echo $cr_mailform__img["alt"]; ?>" class=" image__animation-tranform"> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mkdf-eh-item corporate-maillist__block-text">
                <div class="mkdf-eh-item-inner">
                  <div class="mkdf-eh-item-content mkdf-eh-custom-3422">

                    <div class="mkdf-section-title-holder mkdf-st-highlight">
                      <div class="mkdf-st-inner">
                        <h2 class="mkdf-st-title">
                          <?php echo $cr_mailform__title; ?>
                        </h2>


                        <div class="mkdf-st-text corporate-maillist__block-text-par"
                          >
                          <?php echo $cr_mailform__descr; ?>
                        </div>
                      </div>
                    </div>

                    <?php if( $cr_mailform__shortcode ): ?>
                    <div role="form" class="wpcf7 corporate-maillist__block-form">
                      <?php 
                          //$cr_mailform__shortcode = "'" . $cr_mailform__shortcode . "'";
                        
                          echo do_shortcode($cr_mailform__shortcode); 
                        ?>



                      <!-- <div role="form" class="wpcf7 common__form" id="wpcf7-f1433-p1182-o1">
                        
                        
                      </div> -->

                    </div>
                    <?php endif; ?>




                    <div class="corporate-maillist__block-bottomtext">


                      <div class="mkdf-st-text corporate-maillist__block-text-par"
                        >
                        <?php echo $cr_mailform__descr_2; ?>
                      </div>

                      <a href="<?php echo $cr_mailform__btn_link; ?>"
                        class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">
                        <span class="mkdf-btn-text">
                          <?php echo $cr_mailform__btn_text; ?>
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
<!-- ./maillist -->