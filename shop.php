<?php
/*
Template Name: Магазин
Template Post Type: page
*/
get_header();
?>

	
	<?php
    $sp_categories = get_field("sp-categories");
    $sp_main__img = get_field("sp-main__img");
    $sp_products = get_field("sp-products");
    //item_1_title
    //item_1_img


    $sp_form__title  = get_field("sp-form__title");
    $sp_form__shortcode  = get_field("sp-form__shortcode");
    
  ?>
  
  <div class="mkdf-content">
    <div class="mkdf-content-inner">

      <!-- BLOG TOP -->
      <div
        class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top"
        style="">
        <div class="mkdf-title-image">
        <?php if( $sp_main__img ): ?>
          <img src="<?php echo $sp_main__img; ?>"
            alt="<?php echo $sp_main__img; ?>">
        <?php endif; ?>
          
        </div>
        <div class="mkdf-title-wrapper" style="">
          <div class="mkdf-title-inner">
            <div class="mkdf-grid">
              <h2 class="mkdf-page-title entry-title">
                <?php the_title(); ?>
            </h2>
            </div>
          </div>
        </div>
      </div>


      <div class="mkdf-full-width">
        <div class="mkdf-full-width-inner">
          <div class="mkdf-grid-row">

            <div class="mkdf-page-content-holder mkdf-grid-col-12">

            <!-- TABS SHOP -->
            <div class="vc_row wpb_row vc_row-fluid shop-tab">
              <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                    <div class="mkdf-row-grid-section-wrapper ">
                      <div class="mkdf-row-grid-section">
                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                          <div class="wpb_column vc_column_container vc_col-sm-12">

                            <div class="vc_column-inner">
                              <div class="wpb_wrapper">
                                <div
                                  class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
                                  <div class="mkdf-dcl-inner mkdf-outer-space clearfix">

                                    <!-- filter links -->
                                    <div class="shop-tab__filtering filtering">
                                      <span data-filter="all" class="active">Все</span>
                                      <?php 
                                        $all_cats = array();
                                        
                                        $result = array();
                                        foreach( $sp_products as $sp_product ) {
                                          $sp_cats = explode( " ", $sp_product["product_categories"] );
                                          $result = array_merge($all_cats, $sp_cats);
                                          $all_cats = $result;
                                          //if( !empty($value) && ( strpos($key, 'cat_name') !== false) ):
                                          }

                                        $product_cats = array_unique( $all_cats );
                                        
                                        foreach( $product_cats as $product_cat ) {
                                          if( $product_cat ):

                                      ?>
                                      <span data-filter="<?php echo $product_cat;?>"><?php echo $product_cat;?></span>

                                      <?php 
                                          endif;
                                        }
                                        
                                      ?>
                                      
                                    </div>

                                    <?php 
                                      //foreach( $sp_products as $sp_product ) {
                                        // $sp_cats = explode( " ", $sp_product["product_categories"] );
                                        // $result = array_merge($all_cats, $sp_cats);
                                        // $all_cats = $result;
                                        // //if( !empty($value) && ( strpos($key, 'cat_name') !== false) ):
                                        // }

                                        foreach( $product_cats as $product_cat ) {
                                          if( $product_cat ):
                                    ?>

                                    <!-- category -->
                                    <div class="shop-tab__gallery-wrapper active" data-cat="<?php echo $product_cat;?>">

                                      <div class="shop-tab__gallery-title">
                                        <div class="mkdf-pli">
                                          
                                          <div class="mkdf-pli-text-wrapper">
                                            
                                            <h2 class="entry-title mkdf-pli-title">
                                            <?php echo $product_cat; ?>
                                            </h2>
                                            
                                          </div>

                                        </div>
                                      </div>
                                    
                                      <!-- gallery -->
                                      <div class="shop-tab__gallery gallery text-center">
                                        <?php 
                                          foreach( $sp_products as $sp_product ) {
                                            $product_name = $sp_product["product_name"];
                                            $product_img = $sp_product["product_img"];
                                            $product_categories = $sp_product["product_categories"];

                                            if( $product_name && $product_img && ( strpos($product_categories, $product_cat) !== false)  ):
                                            
                                        ?>

                                        <div class="shop-tab__gallery-item items <?php echo $product_categories;?>">
                                          <div class="mkdf-pli">
                                            <div class="mkdf-pli-inner">
                                              <div class="mkdf-pli-image">
                                                <div class="mkdf-mark-wrapper">
                                                </div>
                                                <img class="mkdf-product-hover-image" alt="<?php echo $product_name;?>"
                                                  src="<?php echo $product_img;?>">
                                              </div>
                                              <!-- <a class="mkdf-pli-link" href="#" title="<?php $product_name;?>"></a> -->
                                            </div>
                                            <div class="mkdf-pli-text-wrapper">
                                              
                                              <h6 class="entry-title mkdf-pli-title">
                                                <a href="#"><?php echo $product_name;?></a>
                                              </h6>
                                              
                                            </div>
                                          </div>
                                        </div>

                                        <?php 
                                          endif;
                                          }
                                        ?>

                                        

                                      </div>

                                    </div>


                                    <?php
                                        endif;
                                      }
                                    ?>

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


              <!-- TABS SHOP OLD -->
              <!-- <div class="vc_row wpb_row vc_row-fluid shop-tab">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                      <div class="mkdf-row-grid-section-wrapper ">
                        <div class="mkdf-row-grid-section">
                          <div class="vc_row wpb_row vc_inner vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">

                              <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                  <div
                                    class="mkdf-destination-category-list-holder mkdf-grid-list mkdf-six-columns mkdf-normal-space">
                                    <div class="mkdf-dcl-inner mkdf-outer-space clearfix">

                                      
                                      <div class="shop-tab__filtering filtering">
                                        <span data-filter="all" class="active">Все</span>
                                        <?php 
                                          foreach( $sp_categories as $key => $value ) {
                                            //var_dump($value);
                                            if( !empty($value) && ( strpos($key, 'cat_name') !== false) ):
                                        ?>
                                        <span data-filter="<?php echo $key;?>"><?php echo $value;?></span>

                                        <?php 
                                            endif;
                                          }
                                        ?>
                                        
                                      </div>

                                      <?php 
                                        foreach( $sp_categories as $key => $value ) {
                                          //var_dump($value);
                                          if( !empty($value) ) {
                                            
                                      ?>

                                     
                                      <div class="shop-tab__gallery-wrapper active" data-cat="cat1">

                                      <?php 
                                        $current_cat = '';
                                        if( strpos($key, 'cat_name') !== false ) {
                                      ?>
                                        <div class="shop-tab__gallery-title">
                                          <div class="mkdf-pli">
                                            
                                            <div class="mkdf-pli-text-wrapper">
                                              
                                              <h2 itemprop="name" class="entry-title mkdf-pli-title">
                                                <?php echo $value; ?>
                                              </h2>
                                              
                                            </div>

                                          </div>
                                        </div>
                                      <?php 
                                        }
                                        else {

                                        
                                      ?>

                                        
                                        <div class="shop-tab__gallery gallery text-center">
    
                                          

                                          <?php 
                                          foreach( $value as $subcategory ) {
                                              //var_dump($subcategory);
                                              if( $subcategory["item_title"] || $subcategory["item_img"] ):
                                          ?>
                                          <div class="shop-tab__gallery-item items cat1 cat2">
                                            <div class="mkdf-pli">
                                              <div class="mkdf-pli-inner">
                                                <div class="mkdf-pli-image">
                                                  <div class="mkdf-mark-wrapper">
                                                  </div>
                                                  <img class="mkdf-product-hover-image" alt="<?php echo $subcategory ["item_title"];?>"
                                                    src="<?php echo $subcategory ["item_img"];?>">
                                                </div>
                                                
                                                <a class="mkdf-pli-link" itemprop="url"
                                                  href="#" title="<?php echo $subcategory ["item_title"];?>"></a>
                                              </div>
                                              <div class="mkdf-pli-text-wrapper">
                                                
                                                <h6 class="entry-title mkdf-pli-title">
                                                  <a href="#"><?php echo $subcategory ["item_title"];?></a>
                                                </h6>
                                                
                                              </div>
                                            </div>
                                          </div>
                                          <?php 
                                            endif;
                                            }
                                          ?>

                                          

                                        </div>

                                      <?php 
                                        }
                                      ?>

                                      </div>

                                      <?php
                                            }
                                          }
                                        //}
                                      ?>

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
              </div> -->

              
    
              <?php if( $sp_form__title ) { ?>
              <!-- ФОРМА ЗАЯВКИ -->
              <div class="mkdf-elements-holder mkdf-one-column  mkdf-responsive-mode-768 trips-page__block_form">
                <div class="mkdf-eh-item">
                  <div class="mkdf-eh-item-inner">
                    <div class="mkdf-eh-item-content mkdf-eh-custom-1418" style="padding: 80px 8% 22px 8%">
                      <div class="mkdf-section-title-holder trips-page__block__content-wrapper " style="text-align: center">
                        <div class="mkdf-st-inner">
                          <div class="mkdf-eh-item-content mkdf-eh-custom-6229" style="">
                            <div class="mkdf-section-title-holder   mkdf-st-highlight" style="text-align: center">
                              <div class="mkdf-st-inner">
                            
                                <h3 class="mkdf-st-title">
                                  <?php echo $sp_form__title; ?>
                                </h3>
                            
                              </div>
                            </div>
                            
                            <?php if( $sp_form__shortcode ): ?>	
                              <div role="form" class="wpcf7 common__form common__form_big">
                      
                              <?php echo do_shortcode($sp_form__shortcode); ?>
                            </div>
                            <?php endif; ?>

                          </div>
                        </div>

                      </div>

                    </div>
                  </div>

                </div>
              </div>
              <?php } ?>


          
            
          </div>
        </div>
      </div>

    </div>
  </div>
                  






<?php 
get_footer(); 