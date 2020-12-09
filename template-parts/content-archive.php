<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>


<article id="post-<?php the_ID(); ?>" class="mkdf-post-has-media post-506 post type-post status-publish format-standard has-post-thumbnail hentry category-trips tag-adventure tag-explore tag-guides">
	<div class="mkdf-post-content">
		<div class="mkdf-post-heading">
			<div class="mkdf-post-image">
				<?php karjala_event_post_thumbnail(); ?>
				<!-- <a itemprop="url" href="<?php echo get_the_permalink();?>"
					title="Everyday urban concrete jungle">
					<img width="1300" height="671"
						src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/blog-post-img-33.jpg"
						class="attachment-full size-full wp-post-image" alt="a" > </a> -->
			</div>
			<div class="mkdf-post-info-category mkdf-st-highlight">
				<a href="https://wanderland.qodeinteractive.com/category/trips/" rel="category tag">Trips</a> <span
					class="mkdf-st-highlight">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
						y="0px" viewBox="0 0 15.7 30" style="enable-background:new 0 0 15.7 30;" xml:space="preserve"
						class="mkdf-active-hover-left">
						<polygon class="st0"
							points="2.6,1 0.7,3.3 2,5.8 2.3,7.6 2.9,8.7 4.4,10.5 3.9,10.8 4.4,11.9 4.4,12.8 4.1,13.8 3.3,14.7 3.9,15.8 4.4,16.8 4,17.5 3.5,18.1 2.2,20.2 3.4,21.5 4.2,24.1 3.4,25.4 2.5,27.4 2.5,27.8 3.2,28.3 4.1,28.5 4.9,29 14.8,29 14.8,1 ">
						</polygon>
					</svg> <span class="mkdf-active-hover-middle"></span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
						y="0px" viewBox="0 0 13.3 30" style="enable-background:new 0 0 13.3 30;" xml:space="preserve"
						class="mkdf-active-hover-right">
						<polygon class="st0"
							points="10,1 10.2,2.1 10.6,2.9 10.6,3.3 10.8,3.7 10.8,4.3 11,5 11,5.7 11,6.3 10.5,6.7 10.8,7.3 11,7.8 	11.6,8.3 11.6,8.6 11.5,8.9 11.6,9.9 11.6,10.5 12.4,11.6 12.1,12 12.4,12.2 11.8,12.8 11.4,13.5 11.6,13.7 11.9,13.7 12,13.9 11.5,15.1 10.8,16 9.1,17.7 9.7,18.2 9.3,19 9.7,19.8 9.6,20.6 9.7,21.5 9.6,21.9 9.6,22.3 10.1,22.8 9.6,23.6 9.7,24 9.7,24.2 9.9,24.4 9.5,24.7 9.3,25.4 9.3,25.9 8.8,26.2 8.5,27.1 8.8,27.8 9.4,28.6 7.8,29 0.9,29 0.9,1 ">
						</polygon>
					</svg> </span>
			</div>

		</div>

		<div class="mkdf-post-text">
			<div class="mkdf-post-text-inner">

				<div class="mkdf-post-info-top">
					<div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
					<?php
						karjala_event_posted_on();
				
					?>
						<!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a itemprop="url"
							href="https://wanderland.qodeinteractive.com/2019/10/">
							October 11, 2019 </a>
						<meta itemprop="interactionCount" content="UserComments: 0"> -->
					</div>
					<div class="mkdf-post-info-author">
					<?php
		
					karjala_event_posted_by();
					?>
						<!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_pencil "></span> <a itemprop="author"
							class="mkdf-post-info-author-link"
							href="https://wanderland.qodeinteractive.com/author/alisa-michaels/">
							<span class="mkdf-post-info-author-text">
								by </span>
							Alisa Michaels </a> -->
					</div>
				</div>

				<div class="mkdf-post-text-main">
					<h3 class="entry-title mkdf-post-title">
						<a href="<?php echo get_the_permalink();?>"
							title="<?php the_title();?>">
							<?php the_title();?> </a>
					</h3>
					<div class="mkdf-post-excerpt-holder">
						<p itemprop="description" class="mkdf-post-excerpt">
						<?php the_excerpt();?> 
					 </p>
					</div>
				</div>

				<div class="mkdf-post-info-bottom clearfix">
					<div class="mkdf-post-info-bottom-left">

						<div class="mkdf-post-read-more-button">
							<a href="<?php echo get_the_permalink();?>"
								target="_self"
								class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-svg-icon mkdf-blog-list-button"> 
								<span class="mkdf-btn-text">Читать</span> 
								<svg version="1.1" id="Layer_1"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									viewBox="0 0 17 17" style="enable-background:new 0 0 17 17;" xml:space="preserve">
									<g>
										<path d="M15,1.9"></path>
										<line x1="1.7" y1="15.3" x2="15" y2="1.9"></line>
										<line x1="16" y1="1.9" x2="15" y2="1.9"></line>
										<line x1="15" y1="1.9" x2="1" y2="1.9"></line>
										<path d="M15,1.9"></path>
										<line x1="15" y1="16" x2="15" y2="1.9"></line>
									</g>
								</svg> 
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 17 17"
									style="enable-background:new 0 0 17 17;" xml:space="preserve">
									<g>
										<path d="M15,1.9"></path>
										<line x1="1.7" y1="15.3" x2="15" y2="1.9"></line>
										<line x1="16" y1="1.9" x2="15" y2="1.9"></line>
										<line x1="15" y1="1.9" x2="1" y2="1.9"></line>
										<path d="M15,1.9"></path>
										<line x1="15" y1="16" x2="15" y2="1.9"></line>
									</g>
								</svg> 
							</a> 
						</div>

					</div>
					<div class="mkdf-post-info-bottom-right">
						<div class="mkdf-blog-share">
							<div class="mkdf-social-share-holder mkdf-list">
								<ul>
									<li class="mkdf-facebook-share">
										<a itemprop="url" class="mkdf-share-link" href="#"
											>
											<span class="mkdf-social-network-icon social_facebook"></span>
										</a>
									</li>
									<li class="mkdf-twitter-share">
										<a itemprop="url" class="mkdf-share-link" href="#"
											>
											<span class="mkdf-social-network-icon social_twitter"></span>
										</a>
									</li>
									<li class="mkdf-tumblr-share">
										<a itemprop="url" class="mkdf-share-link" href="#"
											>
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

			</div>
		</div>

	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->