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
        <!-- <img src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/blog-post-img-35.jpg"
					alt="s"> -->
        <?php
						the_post_thumbnail();
					?>
      </div>
      <div class="mkdf-title-wrapper">
        <div class="mkdf-title-inner">
          <div class="mkdf-grid">
            <h1 class="page-title">
              <?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'karjala_event' ), '<span>' . get_search_query() . '</span>' );
							?>
            </h1>
          </div>
        </div>
      </div>
    </div>

    <div class="mkdf-container-inner clearfix">
      <div class="mkdf-grid-row">
        <div class="mkdf-page-content-holder mkdf-grid-col-12">

          <div class="mkdf-search-page-holder">


            <?php if ( have_posts() ) : ?>




            <?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
						?>


            <?
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

							?>


            <?

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

          </div>

        </div>
      </div>
    </div>

  </div>
</div>





<?php
//get_sidebar();
get_footer();