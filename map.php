<?php
/*
Template Name: Карта сайта
Template Post Type: page
*/
get_header();
?>


<?php
		//Screen 1 ACF fields
	

		//Screen 2 ACF fields
		
  ?>


<div class="mkdf-content">
  <div class="mkdf-content-inner">

    <?php 
    $karjala_event_map_field = get_option('karjala_event_map_field');
    ?>

    <!-- BLOG TOP -->
    <div
      class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top" <?php if( $karjala_event_map_field ){ echo 'style="background: url(' . $karjala_event_map_field . ') center, no-repeat;background-size:cover;"'; } ?>>
      
      <div class="mkdf-title-wrapper">
        <div class="mkdf-title-inner">
          <div class="mkdf-grid">
            <h1 class="mkdf-page-title entry-title">Карта сайта</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="mkdf-container-inner clearfix map-page">
      <div class="mkdf-grid-row">
        <div class="mkdf-page-content-holder mkdf-grid-col-12">


          <!-- MAP CONTENT -->
          <div class="mkdf-content-page">

            <article id="post-1167" class="map-page__items">

              <div class="mkdf-post-content">

                <?php 
                  $map_pages = get_pages(['post_type' => 'page']);

                  if( $map_pages ):
                ?>

                <div class="map-page__top-pages">
                    
                  
                  <?php
                    foreach( $map_pages as $page ) {
                      //echo $page->ID . '<br>'; 
                      
                  ?>

                  <div class="map-page__top-pages-item">
                    <h2 class="mkdf-post-title entry-title">
                      <a href="<?php echo get_page_link( $page->ID ); ?>" title="<?php echo  $page->post_title; ?>"><?php echo  $page->post_title; ?></a>
                    </h2>

                    <?php
                      $map_page_children = get_pages( array( 'child_of' => $page->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

                      if( $map_page_children > 0): 
                    ?>

                    <ul class="top-pages-item__children">
                  
                    <?php
                      foreach( $map_page_children as $map_page_child ) {      
                        $child_content = $map_page_child->post_content;

                        // пропустим страницу без контента
                        if ( ! $child_content ) continue;

                        $child_content = apply_filters( 'the_content', $child_content );

                        ?>

                      <li>
                        <a href="<?php echo get_page_link( $map_page_child->ID ); ?>" title="<?php echo $map_page_child->post_title; ?>">
                          <h3><?php echo $map_page_child->post_title; ?></h3>
                        </a>
                      </li>
                  
                    <?php
                      }
                    ?>

                    </ul>

                    <?php
                      endif;
                    ?>

                  </div>   

                  <?php
                    }
                  ?>
    
                </div>

                <?php
                  endif;
                ?>

              </div>

            </article>

          </div>


        </div>
      </div>
    </div>

  </div>
</div>




<?php 
get_footer(); 