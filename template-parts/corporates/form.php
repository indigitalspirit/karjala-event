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

  $cr_form__title = get_field("cr-form__title", $args['page_id'] );
  $cr_form__shortcode = get_field("cr-form__shortcode", $args['page_id'] );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;


if( $cr_form__title ) { ?>
<!-- form -->
<div class="vc_row wpb_row vc_row-fluid">
  <div class="mkdf-eh-item-inner">
    <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

      <div class="mkdf-section-title-holder">
        <div class="mkdf-st-inner">
          <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

            <!-- content -->

            <div class="mkdf-section-title-holder mkdf-st-highlight">
              <div class="mkdf-st-inner">
                <h2 class="mkdf-st-title">
                  <?php echo $cr_form__title; ?>
                </h2>


              </div>

            </div>

            <?php if( $cr_form__shortcode ): ?>
            <div role="form" class="wpcf7 common__form common__form_big">

              <?php echo do_shortcode($cr_form__shortcode); ?>
            </div>
            <?php endif; ?>



          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php } ?>