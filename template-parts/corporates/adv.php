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

  $cr_adv__title = get_field("cr-adv__title", $args['page_id'] );
  $cr_advs = get_field("cr-advs", $args['page_id'] );

else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;


if( $cr_adv__title ) { ?>
<!-- icons -->
<div class="vc_row wpb_row vc_row-fluid corporate-icons__block">
  <div class="mkdf-eh-item-inner">
    <div class="mkdf-eh-item-content mkdf-eh-custom-1418 corporate-block_wrapper">

      <div class="mkdf-section-title-holder">
        <div class="mkdf-st-inner">
          <div class="mkdf-eh-item-content mkdf-eh-custom-6229">

            <!-- content -->
            <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align"
              >
              <div class="mkdf-st-inner">

                <h2 class="mkdf-st-title corporate-icons__block-title">
                  <?php echo $cr_adv__title; ?>
                </h2>

              </div>
            </div>

            <?php if( !empty($cr_advs) ) { ?>
            <div
              class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
              <div class="mkdf-dcl-inner mkdf-outer-space clearfix">

                <?php 
                  foreach( $cr_advs as $cr_advs__item ) {

                    $item_title = $cr_advs__item['item-title'];
                    $item_icon = $cr_advs__item['item-icon'];
                  
                  
                ?>

                <?php if( $item_title || !empty( $item_icon ) ): ?>
                <article class="mkdf-dcl-item mkdf-item-space corporate-icons__block-item">
                  <div class="mkdf-dcl-item-inner">
                    <?php if( !empty( $item_icon ) ): ?>
                    <div class="mkdf-dcli-image">
                      <img src="<?php echo $item_icon["url"]; ?>" class="attachment-full size-full image__animation-tranform"
                        alt="<?php echo $item_icon["alt"]; ?>">

                      <span class="mkdf-dcl-highlight">

                        <span class="mkdf-active-hover-middle"></span>

                      </span>

                    </div>
                    <?php endif; ?>

                    <?php if( $item_title ): ?>
                    <div class="mkdf-dcli-text-holder">
                      <div class="mkdf-dcli-text-wrapper">
                        <div class="mkdf-dcli-text">
                          
                          <h3 class="mkdf-dcli-title entry-title">
                            <?php echo $item_title; ?>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <?php endif; ?>

                  </div>
                </article>
                <?php endif; ?>


                <?php
                  }

              ?>





              </div>
            </div>
            <?php } ?>



          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php } ?>