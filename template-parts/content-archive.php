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
		<?php if( get_the_post_thumbnail() ): ?>
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
		<?php endif; ?>

		<div class="mkdf-post-text">
			<div class="mkdf-post-text-inner">

				<div class="mkdf-post-info-top">
					<div class="mkdf-post-info-date entry-date published updated">
					<?php
						karjala_event_posted_on();
				
					?>
						<!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a itemprop="url"
							href="">
							October 11, 2019 </a>
						<meta itemprop="interactionCount" content="UserComments: 0"> -->
					</div>
					<div class="mkdf-post-info-author">
					<?php
		
					karjala_event_posted_by();
					?>
						<!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_pencil "></span> <a itemprop="author"
							class="mkdf-post-info-author-link"
							href="">
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
								class="mkdf-btn mkdf-btn-medium mkdf-btn-solid"> 
								<span class="mkdf-btn-text">Читать</span> 
								
							</a> 
						</div>

					</div>
					<div class="mkdf-post-info-bottom-right">
						<div class="mkdf-blog-share">
							<div class="mkdf-social-share-holder mkdf-list">
							<ul>
									<li class="">
										<a href="#" onclick="Share.vkontakte('<?php echo get_the_permalink(); ?>','<?php echo get_the_title(); ?>','<?php echo get_the_post_thumbnail_url(); ?>','<?php echo get_the_excerpt(); ?>')"> 
											<span class="mkdf-social-network-icon vk">
												<img src="<?php echo get_template_directory_uri() . '/img/vk.svg'; ?>" alt="Vk">
											</span>	
										</a>								
									</li>
									<li class="">
										<a onclick="Share.facebook('<?php echo get_the_permalink(); ?>')"> 
											<span class="mkdf-social-network-icon social_facebook"></span>
										</a>									
									</li>							
									<li class="">
										<a onclick="Share.twitter('<?php echo get_the_permalink(); ?>','<?php echo get_the_title(); ?>')"> 
											<span class="mkdf-social-network-icon vk">
												<img src="<?php echo get_template_directory_uri() . '/img/twitter.svg'; ?>" alt="Twitter">
											</span>
										</a>
									</li>
									<li class="">
										<a onclick="Share.pinterest('<?php echo get_the_permalink(); ?>','<?php echo get_the_title(); ?>','<?php echo get_the_post_thumbnail_url(); ?>','<?php echo get_the_excerpt(); ?>')">
											<span class="mkdf-social-network-icon social_pinterest"></span>
										</a>
									</li>
								</ul>

								<script>
									/*** SOCIAL MEDIA SHARING  */

									Share = {
										vkontakte: function(purl, ptitle, pimg, text) {
											url  = 'http://vkontakte.ru/share.php?';
											url += 'url='          + encodeURIComponent(purl);
											url += '&title='       + encodeURIComponent(ptitle);
											url += '&description=' + encodeURIComponent(text);
											url += '&image='       + encodeURIComponent(pimg);
											url += '&noparse=true';
											Share.popup(url);
										},
										
										facebook: function(purl) {
											url  = 'http://www.facebook.com/sharer.php?';
											url += 'u='       + encodeURIComponent(purl);
											Share.popup(url);
										},

										twitter: function(purl, ptitle) {
											url  = 'http://twitter.com/share?';
											url += 'text='      + encodeURIComponent(ptitle);
											url += '&url='      + encodeURIComponent(purl);
											url += '&counturl=' + encodeURIComponent(purl);
											Share.popup(url);
										},
										
										pinterest: function(purl, ptitle, pimg, text) {
											url  = 'https://pinterest.com/pin/create/button/?';
											url += 'url='          + encodeURIComponent(purl);
											url += '&title='       + encodeURIComponent(ptitle);
											url += '&description=' + encodeURIComponent(text);
											url += '&media='    + encodeURIComponent(pimg);
											Share.popup(url)
										},

										popup: function(url) {
											window.open(url,'','toolbar=0,status=0,width=626,height=436');
										}
									};

								</script>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->