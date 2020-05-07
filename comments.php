<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package charis-2020
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
<!-- Anchor needs offset, swap to JS -->
<section id="reviews" class="comments">
	<div id="comments" class="container comments-area">
		<div class="columns is-centered">
			<div class="column is-two-thirds">

			
		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) :
			?>
			<h2 class="title is-2 has-text-centered comments-title">
				<?php
				$charis_2020_comment_count = get_comments_number();
				if ( '1' === $charis_2020_comment_count ) {
					printf(
						/* translators: 1: title. */
						esc_html__( 'One review for &ldquo;%1$s&rdquo;', 'charis-2020' ),
						'<span>' . wp_kses_post( get_the_title() ) . '</span>'
					);
				} else {
					printf( 
						/* translators: 1: comment count number, 2: title. */
						esc_html( _nx( '%1$s review on &ldquo;%2$s&rdquo;', '%1$s reviews on &ldquo;%2$s&rdquo;', $charis_2020_comment_count, 'reviews title', 'charis-2020' ) ),
						number_format_i18n( $charis_2020_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						'<span>' . wp_kses_post( get_the_title() ) . '</span>'
					);
				}
				?>
			</h2><!-- .comments-title -->

			<?php the_comments_navigation(); ?>

			<ol class="comment-list">
				<?php
				wp_list_comments(
					array(
						'style'      => 'ol',
						'short_ping' => true,
						'callback' => 'custom_format_comment_listing',
					)
				);
				?>
			</ol><!-- .comment-list -->

			<?php
			the_comments_navigation();

			// If comments are closed and there are comments, let's leave a little note, shall we?
			if ( ! comments_open() ) :
				?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'charis-2020' ); ?></p>
				<?php
			endif;

		endif; // Check for have_comments().

		$commenter = wp_get_current_commenter();
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );

		$fields = array(
			
			'author' => '<div class="field">
				<div class="control has-icons-left">
					<input id="author" class="input" name="author" type="text" placeholder="Your Name" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' />
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
					</div>
				</div>',

			'email' => '<div class="field">
				<div class="control has-icons-left">
					<input id="email" class="input" name="email" type="text" placeholder="Email Address" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' />
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
					</div>
				</div>',

			
		);

		$args = array(
			'fields' => apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field' => '<div class="field"><textarea id="comment" class="textarea" name="comment" placeholder="Enter your review here" aria-required="true"></textarea></div>',
			'label_submit' => 'Submit Review',
			'class_submit' => 'button is-secondary',
			'title_reply_before' => '<h3 class="title is-3 has-text-centered comment-reply-title">',
			'title_reply_after' => '</h3>',
			'title_reply'       => __( 'Leave a Review' ),
			'title_reply_to'    => __( 'Leave a Review for %s' ),
			'cancel_reply_link' => __( 'Cancel Review' ),
		);
		
		comment_form($args);
		
		?>
			</div>
		</div>
	</div><!-- #comments -->
</section>
