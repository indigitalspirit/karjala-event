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


    <!-- BLOG TOP -->
    <div
      class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top">
      <div class="mkdf-title-image">
        <!-- <img src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/blog-post-img-35.jpg"
						alt="s"> -->
        <?php karjala_event_post_thumbnail(); ?>
      </div>
      <div class="mkdf-title-wrapper">
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

        <div class="mkdf-container-inner clearfix">
          <div class="mkdf-grid-row mkdf-content-has-sidebar mkdf-grid-large-gutter">

            <!-- blog-content -->
            <div class="mkdf-page-content-holder mkdf-grid-col-9">
              <div class="mkdf-blog-holder mkdf-blog-single mkdf-blog-single-standard">

                <?php
										while ( have_posts() ) :
											the_post();

											// get_template_part( 'template-parts/content-post');
											get_template_part( 'template-parts/content');
								?>

                <div class="mkdf-blog-single-navigation">
                  <div class="mkdf-blog-single-navigation-inner clearfix">
                    

                    <?php
												the_post_navigation(
													array(
														'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'karjala_event' ) . '</span> <span class="nav-title">%title</span>',
														'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'karjala_event' ) . '</span> <span class="nav-title">%title</span>',
													)
												);
										?>

                  </div>
                </div>



                <?php 
											// If comments are open or we have at least one comment, load up the comment template.
											if ( comments_open() || get_comments_number() ) :
												comments_template();
											endif;
									
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