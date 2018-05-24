<?php
/**
 * Entry byline partial.
 *
 * @package AMPNews
 */

?>
<span class="entry__meta entry__meta--byline">
	<?php
	printf(
		/* translators: %s: post author. */
		esc_html_x( 'by %s', 'post author', 'ampnews' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	?>
</span>
