<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMPConf
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

<div id="comments" class="comments-area">

	<?php /* @todo Set initial class names based on have_comments() */ ?>
	<h2 class="comments-title">
		<?php
		$comment_count = get_comments_number();
		if ( '1' === $comment_count ) {
			printf(
				/* translators: 1: title. */
				esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'ampconf' ),
				'<span>' . get_the_title() . '</span>'
			);
		} else {
			printf( // WPCS: XSS OK.
				/* translators: 1: comment count number, 2: title. */
				esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'ampconf' ) ),
				number_format_i18n( $comment_count ),
				'<span>' . get_the_title() . '</span>'
			);
		}
		?>
	</h2><!-- .comments-title -->

	<amp-live-list id="amp-live-comments-list-<?php the_ID(); ?>" layout="container" data-poll-interval="15000" data-max-items-per-page="<?php echo esc_attr( get_option( 'page_comments' ) ? get_option( 'comments_per_page' ) : 10000 ); ?>">
		<div update>
			<button update on="tap:amp-live-comments-list-<?php the_ID(); ?>.update"><?php esc_html_e( 'You have updates', 'ampconf' ); ?></button>
		</div>
		<ol items class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->
		<nav pagination>
			<?php the_comments_navigation(); ?>
		</nav>
	</amp-live-list>

	<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ampconf' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
