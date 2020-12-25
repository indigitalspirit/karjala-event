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

  $tr_adv__title= get_field("tr-adv__title", $args['page_id'] );
  $tr_advs= get_field("tr-advs", $args['page_id'] );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( $tr_advs ) { ?>
<!-- icons -->
<div class="vc_row wpb_row vc_row-fluid common-padding trips-page__icons-blog">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="mkdf-row-grid-section-wrapper">
          <div class="mkdf-row-grid-section">
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
              <div class="wpb_column vc_column_container vc_col-sm-12">

                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                    <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                      <div class="mkdf-st-inner">
                        <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                        <h2 class="mkdf-st-title">
                          <?php echo $tr_adv__title; ?>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>

                <?php if( !empty( $tr_advs ) ) { ?>
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                    <div
                      class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
                      <div class="mkdf-dcl-inner mkdf-outer-space clearfix">

                        <?php 
                          foreach( $tr_advs as $tr_advs__item ) {

                            $item_title = $tr_advs__item['item-title'];
                            $item_icon = $tr_advs__item['item-icon'];
                          
                          
                        ?>
                        <?php if( $item_title || !empty($item_icon) ): ?>
                        <article class="mkdf-dcl-item mkdf-item-space icons-set__block">
                          <div class="mkdf-dcl-item-inner">
                            <div class="mkdf-dcli-image">
                              <img src="<?php echo $item_icon["url"]; ?>" class="attachment-full size-full image__animation-tranform"
                                alt="<?php echo $item_icon["alt"]; ?>">

                              <span class="mkdf-dcl-highlight">

                                <span class="mkdf-active-hover-middle"></span>

                              </span>

                            </div>
                            <div class="mkdf-dcli-text-holder">
                              <div class="mkdf-dcli-text-wrapper">
                                <div class="mkdf-dcli-text">

                                  <h3 class="mkdf-dcli-title entry-title">
                                    <?php echo $item_title; ?>
                                  </h3>
                                </div>
                              </div>
                            </div>

                          </div>
                        </article>
                        <?php endif; ?>

                        <?php 

                          }

                          ?>

                      </div>
                    </div>
                  </div>
                </div>
                <?php } 
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ./icons -->
<?php } ?>