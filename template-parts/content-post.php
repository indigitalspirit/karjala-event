<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>

<article id="post-<?php the_ID(); ?>"
	class="post-<?php the_ID(); ?> post type-post status-publish format-standard has-post-thumbnail hentry category-trips tag-adventure tag-explore tag-guides">
	<div class="mkdf-post-content">
		<div class="mkdf-post-text">
			<div class="mkdf-post-text-inner">
				<div class="mkdf-post-info-top">

					<!-- date -->
					<div class="mkdf-post-info-date entry-date published updated">
						<span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a itemprop="url"
							href="https://wanderland.qodeinteractive.com/2019/10/">
							October 11, 2019 </a>
						<meta itemprop="interactionCount" content="UserComments: 3">
					</div>
					<!-- ./date -->

				</div>

				<div class="mkdf-post-text-main">
				
					<?php the_title( '<h1 class="entry-title mkdf-post-title">', '</h1>' ); ?>

						<div class="vc_row wpb_row vc_row-fluid">
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="wpb_text_column wpb_content_element ">
											<div class="wpb_wrapper">
												<?php
													the_content();
												?>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
				</div>

				<!-- tags -->
				<div class="mkdf-post-info-bottom clearfix">
					<div class="mkdf-post-info-bottom-left">
						<div class="mkdf-tags-holder">
							<div class="mkdf-tags">
								<a href="https://wanderland.qodeinteractive.com/tag/adventure/" rel="tag">Adventure</a>, <a
									href="https://wanderland.qodeinteractive.com/tag/explore/" rel="tag">Explore</a>, <a
									href="https://wanderland.qodeinteractive.com/tag/guides/" rel="tag">Guides</a> </div>
						</div>
					</div>
					<div class="mkdf-post-info-bottom-right">
						<div class="mkdf-blog-share">
							<div class="mkdf-social-share-holder mkdf-list">
								<ul>
									<li class="mkdf-facebook-share">
										<a itemprop="url" class="mkdf-share-link" href="#">
											<span class="mkdf-social-network-icon social_facebook"></span>
										</a>
									</li>
									<li class="mkdf-twitter-share">
										<a itemprop="url" class="mkdf-share-link" href="#">
											<span class="mkdf-social-network-icon social_twitter"></span>
										</a>
									</li>
									<li class="mkdf-tumblr-share">
										<a itemprop="url" class="mkdf-share-link" href="#">
											<span class="mkdf-social-network-icon social_tumblr"></span>
										</a>
									</li>
									<li class="mkdf-pinterest-share">
										<a itemprop="url" class="mkdf-share-link" href="#"
											>
											<span class="mkdf-social-network-icon social_pinterest"></span>
										</a>
									</li>
								</ul>
								<p class="mkdf-social-title">Share</p>
							</div>
						</div>
					</div>
				</div>
				<!-- ./tags -->
			</div>
		</div>
	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->

