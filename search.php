<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package karjala-event
 */

get_header();
?>

<div class="mkdf-content">
  <div class="mkdf-content-inner">



    <!-- BLOG TOP -->
    <div
      class="mkdf-title-holder mkdf-standard-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-responsive-disabled blog-page__block_top">
      <div class="mkdf-title-image">
        
      </div>
      <div class="mkdf-title-wrapper">
        <div class="mkdf-title-inner">
          <div class="mkdf-grid">
            <h1 class="page-title">
              Результаты поиска по запросу 
              <?php
							echo '"' . get_search_query() . '":';
							?>
            </h1>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="mkdf-container-inner clearfix search-result">
      <div class="mkdf-grid-row">
        <div class="mkdf-page-content-holder mkdf-grid-col-12">

          <div class="mkdf-search-page-holder"> -->

    <div class="mkdf-full-width">
      <div class="mkdf-full-width-inner">

        <div class="mkdf-container-inner clearfix">
          <div class="mkdf-grid-row mkdf-content-has-sidebar mkdf-grid-large-gutter">

          <div class="mkdf-page-content-holder mkdf-grid-col-9  search-result">
            <div class="mkdf-blog-holder mkdf-blog-single mkdf-blog-single-standard">



            <?php if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
					
								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */

								get_template_part( 'template-parts/content', 'search' );

							endwhile;
						
						?>

            <!-- ./SMTH FOUND -->


            <?

							the_posts_navigation();


						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
            ?>

            </div>
          </div>

          <?php
              get_sidebar('blog');
          ?>


          </div>
        </div>

      </div>
    </div>


            


          <!-- </div>

        </div>
      </div>
    </div> -->

  </div>
</div>





<?php
//get_sidebar();
get_footer();