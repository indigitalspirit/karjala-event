<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package karjala-event
 */

get_header();
?>

<!-- <main id="primary" class="site-main single"> -->
<div class="mkdf-content">
  <div class="mkdf-content-inner">


    <!-- BLOG POST TOP -->
    <div
      class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top"  <?php $thumb = get_the_post_thumbnail_url(); if( $thumb ) { ?> style="background: url(<?php echo $thumb; ?>) center no-repeat;background-size:cover;"<?php } ?>>
      
      <div class="mkdf-title-wrapper">
        <div class="mkdf-title-inner">
          <div class="mkdf-grid">
            <h1 class="mkdf-page-title entry-title">
              <?php the_title(); ?>
             
            </h1>
            <div class="breadcrumbs">
              <?php if ( function_exists( 'karjala_event_breadcrumbs' ) ) karjala_event_breadcrumbs(); ?>jyt
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner">

        <div class="mkdf-container-inner clearfix">
          <div class="mkdf-grid-row mkdf-content-has-sidebar mkdf-grid-large-gutter">

            <!-- blog-content -->
            <div class="mkdf-page-content-holder mkdf-grid-col-9">
              <div class="mkdf-blog-holder mkdf-blog-single mkdf-blog-single-standard">

                <?php
										while ( have_posts() ) :
											the_post();

											// get_template_part( 'template-parts/content-post');
											get_template_part( 'template-parts/content', 'post');
								?>

                <div class="mkdf-blog-single-navigation">
                  <div class="mkdf-blog-single-navigation-inner clearfix">
                    
                    <?php
												// the_post_navigation(
												// 	array(
												// 		'prev_text' => '<span class="nav-subtitle mkdf-blog-single-prev">' . esc_html__( 'Previous:', 'karjala_event' ) . '</span> <span class="nav-title">%title</span>',
												// 		'next_text' => '<span class="nav-subtitle mkdf-blog-single-next">' . esc_html__( 'Next:', 'karjala_event' ) . '</span> <span class="nav-title">%title</span>',
												// 	)
                        // );
                        
                        $prev_post = get_adjacent_post(false, '', true);
                       
                        //echo $prev_thumbnail_url;//get_previous_post_link( '%link', $prev_thumbnail );

                        $next_post = get_next_post();
                        $next_thumbnail_url = get_the_post_thumbnail_url( $next_post->ID , 'thumbnail');
                        // $nextThumbnail = get_the_post_thumbnail( $next_post->ID );
                        // previous_post_link( '%link', $nextThumbnail );

                        if( $prev_post || $next_post):
                          if( (!empty($prev_post) ) ):
                            $prev_thumbnail_url = get_the_post_thumbnail_url( $prev_post->ID , 'thumbnail');
                            $prev_link = get_permalink($prev_post->ID);
                            //$prev_title = $prev_post->post_title; 

                      ?>

                          <a class="mkdf-blog-single-prev" href="<?php echo $prev_link; ?>">
                            <span class="mkdf-blog-single-nav-mark ion-ios-arrow-thin-left"></span> 
                            <span class="mkdf-blog-single-nav-label">Предыдущий пост</span>
                            <div class="mkdf-blog-single-nav-thumbnail">
                              
                              <?php if($prev_thumbnail_url): ?>
                                <img width="87" height="40" src="<?php echo $prev_thumbnail_url; ?>" class="attachment-wanderland_post_thumb_size size-wanderland_post_thumb_size wp-post-image" alt="назад">
                              <?php endif; ?>
                            </div>
                          </a>

                      <?php
                          endif;
                          if( (!empty($next_post) ) ):
                            $next_thumbnail_url = get_the_post_thumbnail_url( $next_post->ID , 'thumbnail');
                            $next_link = get_permalink($next_post->ID);
                            //$prev_title = $prev_post->post_title; 

                      ?>

                          <a class="mkdf-blog-single-next" href="<?php echo $next_link; ?>">
                            <span class="mkdf-blog-single-nav-mark ion-ios-arrow-thin-right"></span> 
                            <span class="mkdf-blog-single-nav-label">Следующий пост</span>
                            <div class="mkdf-blog-single-nav-thumbnail">
                              <?php if($next_thumbnail_url): ?>
                              <img width="87" height="40" src="<?php echo $next_thumbnail_url; ?>" class="attachment-wanderland_post_thumb_size size-wanderland_post_thumb_size wp-post-image" alt="вперед">
                              <?php endif; ?>
                            </div>
                          </a>


                        


                      <?php
                          
                        endif;

                      endif;

                
										?>

                  </div>
                </div>


                <?php 
                    // If comments are open or we have at least one comment, load up the comment template.
                    //CLOSE COMMENTS
                    // if ( comments_open() || get_comments_number() ) :
                    //   comments_template();
                      
                    // endif;
                
                  endwhile; // End of the loop.
                ?>

              </div>
            </div>
            <!-- ./blog-content -->

            <?php
								get_sidebar('blog');
						?>


          </div>
        </div>


      </div>
    </div>

  </div>
</div>




<!-- </main> -->
<!-- #main -->

<?php

get_footer();