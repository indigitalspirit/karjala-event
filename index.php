<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

get_header();

if( is_home() ):
?>

<div class="mkdf-content">
  <div class="mkdf-content-inner">
    <?php 
            $blog_main_img = get_field("blog_main_img");
            
          ?>

    <!-- BLOG-page TOP -->
    <div
      class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top"
      <?php if( $blog_main_img ){ ?> style="background-image: url(<?php echo $blog_main_img; ?>);background-size:cover;"
      <?php }?>>

      <div class="mkdf-title-wrapper">
        <div class="mkdf-title-inner">
          <div class="mkdf-grid">
            <h1 class="mkdf-page-title entry-title">
            
              <?php single_post_title(); ?> 
            </h1>
            <div class="breadcrumbs">
              
            <?php if ( function_exists( 'karjala_event_breadcrumbs' ) ) karjala_event_breadcrumbs(); ?>
            </div>

            
          </div>
        </div>
      </div>
    </div>

		


    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner">
        <div class="mkdf-grid-row">

          <div class="mkdf-page-content-holder mkdf-grid-col-12">

            <!-- БЛОГ -->
            <div class="mkdf-row-grid-section-wrapper trips-page__block_blog">
              <div class="mkdf-row-grid-section">
                <div class="vc_row wpb_row vc_row-fluid vc_custom_1571996104789">
                  <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                      <div class="wpb_wrapper">

											<?php

												if( have_posts() ):
													
											?>

                        

                        <div
                          class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-normal-space mkdf-bl-pag-load-more">
                          
                          <div class="mkdf-bl-wrapper mkdf-outer-space">


                            <ul class="">

															<?php 
															//$posts_counter = 0;
															// $page = (get_query_var('page')) ? get_query_var('page') : 1;

															// $args = array(
															
															// 		'posts_per_page' => 6,
															// 		'paged' => $page
															// );

															// query_posts( $args );
															while( have_posts() ): 
																the_post();

																get_template_part( 'template-parts/content', 'blog' );
																//$posts_counter = $posts_counter + 1;

																//the_title();
															endwhile;
															
															?>
                          
                            </ul>

                          </div>


                          

                        </div>

                        <div class="mkdf-blog-list-holder mkdf-grid-list mkdf-bl-standard mkdf-three-columns mkdf-normal-space mkdf-bl-pag-load-more">

                          <?php 
                            if( get_previous_posts_link() || get_next_posts_link() ) {
                          ?>
                          <!-- PAGINATION BLOG -->
                          <div class="blog-page__pagination">
                            <div class="mkdf-blog-pagination">
                              <ul>
                              <li class="mkdf-pag-number">
                              <?php previous_posts_link('<< Предыдущая страница', 0); ?>
                                </li>
                                <li class="mkdf-pag-number">
                                <?php next_posts_link('Следующая страница >>', 0); ?>
                                </li>
                                
                              </ul>
                            </div>
                          </div>
                          <?php 
                            }
                          ?>

                        </div>

												<?php 
													else: 
														get_template_part( 'template-parts/content', 'none' );

													endif;
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

<? 
else:
?>

<!-- <main id="primary" class="site-main">



		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				INDEX

				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main> -->
<!-- #main -->

<? 
endif;
?>


<?php
//get_sidebar();
get_footer();