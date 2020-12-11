<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>

<li class="mkdf-bl-item mkdf-item-space corporate-blog__item" id="post-<?php the_ID(); ?>">
	<div class="mkdf-bli-inner">
		<div class="mkdf-bli-wrapper">
			<?php $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
				if( $thumbnail_id ):
			?>
			<div class="mkdf-post-image mkdf-tilt-trigger">
				<a href="<?php the_permalink(); ?>"
					title="<?php the_title(); ?>" class="mkdf-tilt-target">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>"
						class="attachment-full size-full wp-post-image image__animation-tranform"
						alt="<?php 
									//var_dump( get_post_meta( get_the_ID() )  );
									$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
									$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 

									if( $alt ){ 
										echo $alt;
									} else {
										the_title();
									}
								?>">
				</a>
			</div>
			<?php 
				endif;
			?>
			
			<?php 
				$posttags = get_the_tags();
				if( $posttags ){
				
					$posttag_link = get_tag_link($posttags[0]->term_id);
					$posttag_name = $posttags[0]->name;

			?>
			<div class="mkdf-post-info-category mkdf-st-highlight">        
				<a href="<?php echo $posttag_link;?>">
					<?php echo $posttag_name;?>
				</a>  
			</div>

			<?php 
				}
			?>
		</div>
		<div class="mkdf-bli-content">
			<div class="mkdf-bli-info">
				<div class="mkdf-post-info-date entry-date published updated">
					<span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span>
					<?php the_date(); ?>
					<!-- <a href="<?php //echo $mp_history__title; ?>">
						<?php //echo $mp_history__title; ?>
					</a>
					<meta content="UserComments: 0"> -->
				</div>
			</div>
			<h5 class="entry-title mkdf-post-title">
				<a href="<?php the_permalink(); ?>"
					title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h5>

		</div>
	</div>
</li>

<!-- #post-<?php the_ID(); ?> -->