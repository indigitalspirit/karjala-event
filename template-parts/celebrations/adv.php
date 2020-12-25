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

  $cb_adv__title= get_field("cb-adv__title", $args['page_id'] );
  $cb_advs= get_field("cb-advs", $args['page_id'] );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( $cb_advs ) { ?>
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
                        <h1 class="mkdf-st-title">
                          <?php echo $cb_adv__title; ?>
                        </h1>
                      </div>
                    </div>
                  </div>
                </div>

                <?php if( !empty( $cb_advs ) ) { ?>
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                    <div
                      class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
                      <div class="mkdf-dcl-inner mkdf-outer-space clearfix">

                        <?php 
                          foreach( $cb_advs as $cb_advs__item ) {

                            $item_title = $cb_advs__item['item-title'];
                            $item_icon = $cb_advs__item['item-icon'];
                          
                          
                        ?>
                        <?php if( $item_title || $item_icon["url"] ): ?>
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