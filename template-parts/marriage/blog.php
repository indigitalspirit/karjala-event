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

  $mg_blog__title = get_field("mg-blog__title", $args['page_id']);
  $mg_blog__item_slug_1 = get_field("mg-blog__item-slug_1", $args['page_id']);
  $mg_blog__item_slug_2 = get_field("mg-blog__item-slug_2", $args['page_id']);
  $mg_blog__item_slug_3 = get_field("mg-blog__item-slug_3", $args['page_id']);
  $mg_blog__btn_text = get_field("mg-blog__btn-text", $args['page_id']);
  $mg_blog__btn_link = get_field("mg-blog__btn-link", $args['page_id']);


else:
  echo 'ОШИБКА ВЫВОДА ШАБЛОНА';
endif;

?>

<?php if( $mg_blog__title ) { ?>
<!-- БЛОГ -->
<div class="mkdf-row-grid-section-wrapper common-padding trips-page__block_blog">
  <div class="mkdf-row-grid-section">
    <div class="vc_row wpb_row vc_row-fluid">
      <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
          <div class="wpb_wrapper">
            <div class="vc_row wpb_row vc_inner vc_row-fluid">
              <div
                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6 vc_col-md-offset-1 vc_col-md-10 vc_col-sm-offset-0">
                <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                    <div class="mkdf-section-title-holder mkdf-st-highlight mkdf-center-align">
                      <div class="mkdf-st-inner">
                        <!-- <span class="mkdf-st-tagline">Lorem ipsum dolor</span> -->
                        <h2 class="mkdf-st-title">
                          <?php echo $mg_blog__title; ?>
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-normal-space mkdf-bl-pag-load-more">
              <div class="mkdf-bl-wrapper mkdf-outer-space">
                <ul class="mkdf-blog-list">
                  <?php if( $mg_blog__item_slug_1 ): 
                      $args = array(
                        'name'        => $mg_blog__item_slug_1,
                        'post_type'   => 'post',
                        'post_status' => 'publish',
                        'numberposts' => 1
                      );
                      $the_posts = get_posts($args);

                      foreach( $the_posts as $post ){
                        setup_postdata($post);
                          // формат вывода the_title() ...
                      
                      
                      
                    ?>
                  <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                    <div class="mkdf-bli-inner">
                      <div class="mkdf-bli-wrapper">
                        <div class="mkdf-post-image mkdf-tilt-trigger">
                          <a href="<?php the_permalink(); ?>"
                            title="<?php the_title(); ?>" class="mkdf-tilt-target">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                              class="attachment-full size-full wp-post-image image__animation-tranform"
                              alt="<?php 
                                //var_dump( get_post_meta( get_the_ID() )  );
                                $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 

                                if( $alt ){ 
                                  echo $alt;
                                } else {
                                  the_title();
                                }
                              ?>">
                          </a>
                        </div>
                        <?php 
                          $posttags = get_the_tags();
                          if( $posttags ){
                          
                            $posttag_link = get_tag_link($posttags[0]->term_id);
                            $posttag_name = $posttags[0]->name;

                        ?>
                        <div class="mkdf-post-info-category mkdf-st-highlight">        
                          <a href="<?php echo $posttag_link;?>">
                            <?php echo $posttag_name;?>
                          </a>  
                        </div>

                        <?php 
                          }
                        ?>
                      </div>
                      <div class="mkdf-bli-content">
                        <div class="mkdf-bli-info">
                          <div class="mkdf-post-info-date entry-date published updated">
                            <!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span> -->
                            <?php //the_date(); ?>
                            <!-- <a href="<?php //echo $mp_history__title; ?>">
                              <?php //echo $mp_history__title; ?>
                            </a>
                            <meta content="UserComments: 0"> -->

                            <?php 
                            karjala_event_posted_on(); 
                            karjala_event_posted_by(); 
                          
                          ?>
                          </div>
                        </div>
                        <h3 class="entry-title mkdf-post-title">
                          <a href="<?php the_permalink(); ?>"
                            title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </h3>

                      </div>
                    </div>
                  </li>
                  <?php 
                    }
                  endif;
                  ?>

                  <?php if( $mg_blog__item_slug_2 ): 
                      $args = array(
                        'name'        => $mg_blog__item_slug_2,
                        'post_type'   => 'post',
                        'post_status' => 'publish',
                        'numberposts' => 1
                      );
                      $the_posts = get_posts($args);

                      foreach( $the_posts as $post ){
                        setup_postdata($post);
                          // формат вывода the_title() ...
                      
                      
                      
                    ?>
                  <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                    <div class="mkdf-bli-inner">
                      <div class="mkdf-bli-wrapper">
                        <div class="mkdf-post-image mkdf-tilt-trigger">
                          <a href="<?php the_permalink(); ?>"
                            title="<?php the_title(); ?>" class="mkdf-tilt-target">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                              class="attachment-full size-full wp-post-image image__animation-tranform"
                              alt="<?php 
                                //var_dump( get_post_meta( get_the_ID() )  );
                                $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 

                                if( $alt ){ 
                                  echo $alt;
                                } else {
                                  the_title();
                                }
                              ?>">
                          </a>
                        </div>
                        <?php 
                          $posttags = get_the_tags();
                          if( $posttags ){
                          
                            $posttag_link = get_tag_link($posttags[0]->term_id);
                            $posttag_name = $posttags[0]->name;

                        ?>
                        <div class="mkdf-post-info-category mkdf-st-highlight">        
                          <a href="<?php echo $posttag_link;?>">
                            <?php echo $posttag_name;?>
                          </a>  
                        </div>

                        <?php 
                          }
                        ?>
                      </div>
                      <div class="mkdf-bli-content">
                        <div class="mkdf-bli-info">
                          <div class="mkdf-post-info-date entry-date published updated">
                            <!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span> -->
                            <?php //the_date(); ?>

                            <?php 
                            karjala_event_posted_on(); 
                            karjala_event_posted_by(); 
                          
                          ?>
                            <!-- <a href="<?php //echo $mp_history__title; ?>">
                              <?php //echo $mp_history__title; ?>
                            </a>
                            <meta content="UserComments: 0"> -->
                          </div>
                        </div>
                        <h3 class="entry-title mkdf-post-title">
                          <a href="<?php the_permalink(); ?>"
                            title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </h3>

                      </div>
                    </div>
                  </li>
                  <?php 
                    }
                  endif;
                  ?>

                  <?php if( $mg_blog__item_slug_3 ): 
                      $args = array(
                        'name'        => $mg_blog__item_slug_3,
                        'post_type'   => 'post',
                        'post_status' => 'publish',
                        'numberposts' => 1
                      );
                      $the_posts = get_posts($args);

                      foreach( $the_posts as $post ){
                        setup_postdata($post);
                          // формат вывода the_title() ...
                      
                      
                      
                    ?>
                  <li class="mkdf-bl-item mkdf-item-space corporate-blog__item">
                    <div class="mkdf-bli-inner">
                      <div class="mkdf-bli-wrapper">
                        <div class="mkdf-post-image mkdf-tilt-trigger">
                          <a href="<?php the_permalink(); ?>"
                            title="<?php the_title(); ?>" class="mkdf-tilt-target">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                              class="attachment-full size-full wp-post-image image__animation-tranform"
                              alt="<?php 
                                //var_dump( get_post_meta( get_the_ID() )  );
                                $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
                                $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 

                                if( $alt ){ 
                                  echo $alt;
                                } else {
                                  the_title();
                                }
                              ?>">
                          </a>
                        </div>
                        <?php 
                          $posttags = get_the_tags();
                          if( $posttags ){
                          
                            $posttag_link = get_tag_link($posttags[0]->term_id);
                            $posttag_name = $posttags[0]->name;

                        ?>
                        <div class="mkdf-post-info-category mkdf-st-highlight">        
                          <a href="<?php echo $posttag_link;?>">
                            <?php echo $posttag_name;?>
                          </a>  
                        </div>

                        <?php 
                          }
                        ?>
                      </div>
                      <div class="mkdf-bli-content">
                        <div class="mkdf-bli-info">
                          <div class="mkdf-post-info-date entry-date published updated">
                            <!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span> -->
                            <?php 
                            karjala_event_posted_on(); 
                            karjala_event_posted_by(); 
                          
                          ?>
                            <?php //the_date(); ?>
                            <!-- <a href="<?php //echo $mp_history__title; ?>">
                              <?php //echo $mp_history__title; ?>
                            </a>
                            <meta content="UserComments: 0"> -->
                          </div>
                        </div>
                        <h3 class="entry-title mkdf-post-title">
                          <a href="<?php the_permalink(); ?>"
                            title="<?php the_title(); ?>">
                            <?php the_title(); ?>
                          </a>
                        </h3>

                      </div>
                    </div>
                  </li>
                  <?php 
                    }
                  endif;
                  ?>

                </ul>
              </div>

              <div class="mkdf-blog-pag-load-more">
                <a href="<?php echo $mg_blog__btn_link; ?>"
                  class="mkdf-btn mkdf-btn-medium mkdf-btn-solid mkdf-btn-svg-icon">
                  <span class="mkdf-btn-text"><?php echo $mg_blog__btn_text; ?>
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
<?php } ?>