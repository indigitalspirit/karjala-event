<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>

<article id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?> destination-item type-destination-item status-publish has-post-thumbnail hentry destination-category-low-budget">
	<div class="mkdf-post-content">
		<div class="mkdf-post-image">
			<?php karjala_event_post_thumbnail(); ?>
			<!-- <a itemprop="url" href="https://wanderland.qodeinteractive.com/destination-item/india-2/" title="India">
				<img width="150" height="150" src="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/p4-destination-img-02-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="s" loading="lazy" srcset="https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/p4-destination-img-02-150x150.jpg 150w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/p4-destination-img-02-650x650.jpg 650w, https://wanderland.qodeinteractive.com/wp-content/uploads/2019/10/p4-destination-img-02-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"> 
			</a> -->
		</div>
		<div class="mkdf-post-title-area ">
			<div class="mkdf-post-title-area-inner">
				<h5 class="mkdf-post-title entry-title">
				<a href="<?php echo get_the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
				</h5>
				<p class="mkdf-post-excerpt">
					<?php the_excerpt(); ?>
				</p>
			</div>
		</div>
	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->
