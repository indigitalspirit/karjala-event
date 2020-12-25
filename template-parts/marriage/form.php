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

  $mg_form__title = get_field("mg-form__title", $args['page_id']);
  $mg_form__shortcode = get_field("mg-form__shortcode", $args['page_id']);

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;
?>


<?php if( $mg_form__title ) { ?>
<!-- ФОРМА ЗАЯВКИ -->
<div class="mkdf-elements-holder mkdf-one-column mkdf-responsive-mode-768 common-padding trips-page__block_form">
  <div class="mkdf-row-grid-section">

    <div class="mkdf-eh-item">
      <div class="mkdf-eh-item-inner">
        <div class="mkdf-eh-item-content mkdf-eh-custom-1418">
          <div class="mkdf-section-title-holder trips-page__block__content-wrapper">
            <div class="mkdf-st-inner">
              <div class="mkdf-eh-item-content mkdf-eh-custom-6229">
                <div class="mkdf-section-title-holder mkdf-st-highlight">
                  <div class="mkdf-st-inner">

                    <h2 class="mkdf-st-title">
                      <?php echo $mg_form__title; ?>

                    </h2>

                  </div>

                </div>

                <?php if( $mg_form__shortcode ): ?>
                <div role="form" class="wpcf7 common__form common__form_big">

                  <?php echo do_shortcode($mg_form__shortcode); ?>
                </div>
                <?php endif; ?>

              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>

</div>
<?php } ?>