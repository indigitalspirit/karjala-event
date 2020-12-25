<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>


<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
?>
<div class="mkdf-comment-holder clearfix" id="comments">
	<div class="mkdf-comment-holder-inner">
	
		<h4 class="mkdf-comments-title">
		<?php
			$karjala_event_comment_count = get_comments_number();

			echo 'Комментарии (' . $karjala_event_comment_count . ')';
			// if ( '1' === $karjala_event_comment_count ) {
			// 	printf(
			// 		/* translators: 1: title. */
			// 		esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'karjala_event' ),
			// 		'<span>' . wp_kses_post( get_the_title() ) . '</span>'
			// 	);
			// } else {
			// 	printf( 
			// 		/* translators: 1: comment count number, 2: title. */
			// 		esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $karjala_event_comment_count, 'comments title', 'karjala_event' ) ),
			// 		number_format_i18n( $karjala_event_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			// 		'<span>' . wp_kses_post( get_the_title() ) . '</span>'
			// 	);
			// }
			?>
		</h4>
		<div class="mkdf-comments">

	

			<ul class="mkdf-comment-list">
			<?php
				wp_list_comments(
					array(
						'style'      => 'ul',
						'short_ping' => true,
						'avatar_size' => 80,
					)
				);
				?>
		
			</ul>

			<?php 
			
				the_comments_navigation(); 

				if ( ! comments_open() ) :
					?>
					<p class="no-comments">
						Комментарии отключены
					</p>
					<?php
				endif;
			
			?>


		</div>
		
	</div>
</div>
<?php 
	endif; // Check for have_comments().
?>


<div class="mkdf-comment-form">
	<div class="comment-respond">

	<?php 
		comment_form();
	?>
	

	</div>
</div>



<!-- <div id="comments" class="comments-area"> -->

	<?php
	// You can start editing here -- including this comment!
	// if ( have_comments() ) :
	// 	?>
	 	<!-- <h2 class="comments-title"> -->
	 		<?php
	// 		$karjala_event_comment_count = get_comments_number();
	// 		if ( '1' === $karjala_event_comment_count ) {
	// 			printf(
	// 				/* translators: 1: title. */
	// 				esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'karjala_event' ),
	// 				'<span>' . wp_kses_post( get_the_title() ) . '</span>'
	// 			);
	// 		} else {
	// 			printf( 
	// 				/* translators: 1: comment count number, 2: title. */
	// 				esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $karjala_event_comment_count, 'comments title', 'karjala_event' ) ),
	// 				number_format_i18n( $karjala_event_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	// 				'<span>' . wp_kses_post( get_the_title() ) . '</span>'
	// 			);
	// 		}
	// 		?>
	 	<!-- </h2> -->
		
		 <?php 
		 	//CLOSE COMMENTS
			 //the_comments_navigation(); 
			?>

	 	<!-- <ol class="comment-list"> -->
	 		<?php
	// 		wp_list_comments(
	// 			array(
	// 				'style'      => 'ol',
	// 				'short_ping' => true,
	// 			)
	// 		);
	// 		?>
	 	<!-- </ol> -->

	 	<?php
	// 	the_comments_navigation();

	// 	// If comments are closed and there are comments, let's leave a little note, shall we?
	// 	if ( ! comments_open() ) :
	// 		?>
	 		<!-- <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'karjala_event' ); ?></p> -->
			<?php
	// 	endif;

	// endif; // Check for have_comments().

	// comment_form();
	?>

<!-- </div> -->
<!-- #comments -->
