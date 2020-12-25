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

  $cb_video__title = get_field("cb-video__title", $args['page_id'] ); 
  $cb_video__link = get_field("cb-video__link", $args['page_id'] );
  
else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( $cb_video__title ) { ?>
<!-- Крутое видео ... -->
<div class="mkdf-row-grid-section-wrapper common-padding trips-page__block_video">
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid vc_row-has-fill">
      <div class="wpb_column vc_column_container vc_col-sm-12">

        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
              <div class="mkdf-st-inner">
                <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                <h2 class="mkdf-st-title custom-title">
                  <?php echo $cb_video__title; ?>
                </h2>
                <div class="">
                  <?php echo $cb_video__link; ?>
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