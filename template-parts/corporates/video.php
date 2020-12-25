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

  $cr_video__title = get_field("cr-video__title", $args['page_id'] );
  $cr_video__link = get_field("cr-video__link", $args['page_id'] );
  
else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;


if( $cr_video__title ) { ?>
<!-- video -->
<div class="vc_row wpb_row vc_row-fluid corporate-video__block">
  <div class="mkdf-eh-item-inner">
    <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

      <div class="mkdf-section-title-holder">
        <div class="mkdf-st-inner">
          <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

            <!-- content -->
            <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
              >
              <div class="mkdf-st-inner">
                <h2 class="mkdf-st-title corporate-video__block-title">
                  <?php echo $cr_video__title; ?>
                </h2>

                <div class="corporate-video__block-video">

                  <?php echo $cr_video__link; ?>
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