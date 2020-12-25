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

		<?php if( get_the_post_thumbnail() ): ?>
		<div class="mkdf-post-image">
			
			<?php karjala_event_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<div class="mkdf-post-title-area ">
			<div class="mkdf-post-title-area-inner">
				<h5 class="mkdf-post-title entry-title">
				<?php the_title(); ?>
				</h5>
				<p class="mkdf-post-excerpt">
					<?php the_excerpt(); ?>
				</p>
				<a href="<?php echo get_the_permalink(); ?>" title="<?php the_title(); ?>" class="mkdf-btn mkdf-btn-medium mkdf-btn-solid">
					Открыть
				</a>
			</div>
		</div>
	</div>
</article>
<!-- #post-<?php the_ID(); ?> -->
