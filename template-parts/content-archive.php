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
				
			</div>
			<?php 
				$posttags = get_the_tags();
				if( $posttags ){
				
					$posttag_link = get_tag_link($posttags[0]->term_id);
					$posttag_name = $posttags[0]->name;

			?>
			<div class="mkdf-post-info-category mkdf-st-highlight">

				<a href="<?php echo $posttag_link;?>" rel="category tag">
					<?php echo $posttag_name;?>
				</a> 
			</div>
			<?php 
				}
			?>

		</div>

		<div class="mkdf-post-text">
			<div class="mkdf-post-text-inner">

				<div class="mkdf-post-info-top">
					<div class="mkdf-post-info-date entry-date published updated">
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
						<div class="mkdf-post-excerpt">
						<?php the_excerpt();?> 
					 </div>
					</div>
				</div>

				<div class="mkdf-post-info-bottom clearfix">
					<div class="mkdf-post-info-bottom-left">

						<div class="mkdf-post-read-more-button">
							<a href="<?php echo get_the_permalink();?>"
								target="_self"
								class="mkdf-btn mkdf-btn-medium mkdf-btn-simple mkdf-btn-svg-icon mkdf-blog-list-button"> 
								<span class="mkdf-btn-text">Читать</span> 
								
							</a> 
						</div>

					</div>
					<!-- <div class="mkdf-post-info-bottom-right">
						<div class="mkdf-blog-share">
							<div class="mkdf-social-share-holder mkdf-list">
								<ul>
									<li class="mkdf-facebook-share">
										<a class="mkdf-share-link" href="#"
											>
											<span class="mkdf-social-network-icon social_facebook"></span>
										</a>
									</li>
									<li class="mkdf-twitter-share">
										<a class="mkdf-share-link" href="#"
											>
											<span class="mkdf-social-network-icon social_twitter"></span>
										</a>
									</li>
									<li class="mkdf-tumblr-share">
										<a class="mkdf-share-link" href="#"
											>
											<span class="mkdf-social-network-icon social_tumblr"></span>
										</a>
									</li>
									<li class="mkdf-pinterest-share">
										<a class="mkdf-share-link" href="#"
											>
											<span class="mkdf-social-network-icon social_pinterest"></span>
										</a>
									</li>
								</ul>
								<p class="mkdf-social-title">Share</p>
							</div>
						</div>
					</div> -->
				</div>

			</div>
		</div>

	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->