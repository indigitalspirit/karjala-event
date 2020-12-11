<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

get_header();
?>
<div class="mkdf-content">
  <div class="mkdf-content-inner">

		<?php 
			$blog_main_img = get_option("karjala_event_blog_field");
			
		?>


    <!-- BLOG TOP -->
    <div class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top" <?php if( $blog_main_img ) { ?> style="background: url(<?php echo $blog_main_img; ?>) center no-repeat;background-size:cover;"<?php } ?>>
     
      <div class="mkdf-title-wrapper">
        <div class="mkdf-title-inner">
          <div class="mkdf-grid">
            <h2 class="mkdf-page-title entry-title">
              <?php
							the_archive_title();
							//the_archive_description( '<div class="archive-description">', '</div>' );
							?>
              
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
              <div class="mkdf-blog-holder mkdf-blog-standard mkdf-blog-pagination-standard">
                <div class="mkdf-blog-holder-inner">
                  <?php if ( have_posts() ) : ?>

                  <?php
											/* Start the Loop */
											while ( have_posts() ) :
												the_post();

												/*
												* Include the Post-Type-specific template for the content.
												* If you want to override this in a child theme, then include a file
												* called content-___.php (where ___ is the Post Type name) and that will be used instead.
												*/
												get_template_part( 'template-parts/content', 'archive' );

											endwhile;

										?>



                  <div class="mkdf-blog-pagination">
                    <?php 

												the_posts_navigation();

											?>

                    <!-- <ul>
												<li class="mkdf-pag-number mkdf-pag-active">
													<a href="#">1</a>
												</li>
												<li class="mkdf-pag-number">
													<a itemprop="url" href="https://wanderland.qodeinteractive.com/right-sidebar/page/2/">2</a>
												</li>
												<li class="mkdf-pag-number">
													<a itemprop="url" href="https://wanderland.qodeinteractive.com/right-sidebar/page/3/">3</a>
												</li>
												<li class="mkdf-pag-number">
													<a itemprop="url" href="https://wanderland.qodeinteractive.com/right-sidebar/page/4/">4</a>
												</li>
												<li class="mkdf-pag-next">
													<a itemprop="url" href="https://wanderland.qodeinteractive.com/right-sidebar/page/2/">
														<span class="arrow_carrot-right"></span>
													</a>
												</li>
												<li class="mkdf-pag-last">
													<a itemprop="url" href="https://wanderland.qodeinteractive.com/right-sidebar/page/17/">
														<span class="arrow_carrot-2right"></span>
													</a>
												</li>
											</ul> -->
                  </div>

                  <!-- <div class="mkdf-blog-pagination-wp">
										</div> -->


                  <?php 

											//the_posts_navigation();

										else :

											get_template_part( 'template-parts/content', 'none' );

										endif;
										?>
                </div>



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



<?php
get_footer();