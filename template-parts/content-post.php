<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mkdf-post-content">
		<div class="mkdf-post-text">
			<div class="mkdf-post-text-inner">
			<?php
			

				if ( 'post' === get_post_type() ) :
					?>
					<div class="mkdf-post-info-top">
						<div itemprop="dateCreated" class="mkdf-post-info-date entry-date published updated">
							<!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a href="https://wanderland.qodeinteractive.com/2019/10/">
								October 11, 2019 </a>
							<meta itemprop="interactionCount" content="UserComments: 3"> -->
							<span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span>
							<?php
								the_date();
								//karjala_event_posted_on();
								//karjala_event_posted_by();
							?>
						</div>
					</div>
			<?php endif; ?>
				
				<div class="mkdf-post-text-main">
					<?php the_content(); ?>
				</div>

				<div class="mkdf-post-info-bottom clearfix">
					<div class="mkdf-post-info-bottom-left">
						<div class="mkdf-tags-holder">
							<div class="mkdf-tags">
								<?php
									$posttags = get_the_tags();
									if( $posttags ){
										foreach( $posttags as $posttag ){
									
											$posttag_link = get_tag_link($posttag->term_id);
											$posttag_name = $posttag->name; 

								?>
								<!-- <a href="https://wanderland.qodeinteractive.com/tag/adventure/" rel="tag">Adventure</a>, 
								<a href="https://wanderland.qodeinteractive.com/tag/explore/" rel="tag">Explore</a>, <a href="https://wanderland.qodeinteractive.com/tag/guides/" rel="tag">Guides</a>  -->
								<a href="<?php echo $posttag_link;?>">
									<?php echo $posttag_name;?>
								</a>  

								<?php 
										}
									}
								?>
							</div>
						</div>
					</div>
					<!-- TODO SHARE -->
					<!-- <div class="mkdf-post-info-bottom-right">
						<div class="mkdf-blog-share">
							<div class="mkdf-social-share-holder mkdf-list">
								<ul>
									<li class="mkdf-facebook-share">
										<a class="mkdf-share-link" href="#">
											<span class="mkdf-social-network-icon social_facebook"></span>
										</a>
									</li>
									<li class="mkdf-twitter-share">
										<a class="mkdf-share-link" href="#">
											<span class="mkdf-social-network-icon social_twitter"></span>
										</a>
									</li>
									<li class="mkdf-tumblr-share">
										<a class="mkdf-share-link" href="#">
											<span class="mkdf-social-network-icon social_tumblr"></span>
										</a>
									</li>
									<li class="mkdf-pinterest-share">
										<a class="mkdf-share-link" href="#">
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
</article><!-- #post-<?php the_ID(); ?> -->

