<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package AMPConf
 */

if ( ! function_exists( 'ampconf_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function ampconf_posted_on() {
		$time_string = '<time class="entry__date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry__date published" datetime="%1$s">%2$s</time><time class="screen-reader-text updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			wp_kses(
				/* translators: %s: post date. */
				_x( '<span class="screen-reader-text">Posted on</span> %s', 'post date', 'ampconf' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'ampconf_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function ampconf_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'ampconf' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'ampconf' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'ampconf' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'ampconf' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'ampconf' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'ampconf' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'ampconf_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 */
	function ampconf_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		// TODO: Create custom markup for ampconf's specific image sizes.
	}
endif;

if ( ! function_exists( 'ampconf_branding_tag' ) ) :
	/**
	 * Outputs the branding in header as h1 or p, depending on the current view.
	 */
	function ampconf_branding_tag() {
		echo esc_html( ( is_front_page() && is_home() ) ? 'h1' : 'p' );
	}
endif;

/**
 * Filter the featured image for AMP.
 *
 * There is a problem with the AMP sanitizer that is not properly converting img into amp-img,
 * so this is a workaround to preempt the sanitizer.
 *
 * @see get_the_post_thumbnail()
 *
 * @param string $html The post thumbnail HTML.
 * @return string Amplified HTML.
 */
function ampconf_filter_post_thumbnail_html( $html ) {
	if ( is_amp_endpoint() ) {
		$html = str_replace( '<img ', '<amp-img ', $html ) . '</amp-img>';
	}
	return $html;
}
if ( function_exists( 'is_amp_endpoint' ) ) {
	add_filter( 'post_thumbnail_html', 'ampconf_filter_post_thumbnail_html' );
}

/**
 * Filter the custom logo image for AMP.
 *
 * There is a problem with the AMP sanitizer that is not properly converting img into amp-img,
 * so this is a workaround to preempt the sanitizer.
 *
 * @see get_custom_logo()
 *
 * @param string $html The custom logo HTML.
 * @return string Amplified HTML.
 */
function ampconf_filter_get_custom_logo( $html ) {
	if ( is_amp_endpoint() ) {
		$html = str_replace( '<img ', '<amp-img ', $html ) . '</amp-img>';
	}
	return $html;
}
if ( function_exists( 'is_amp_endpoint' ) ) {
	add_filter( 'get_custom_logo', 'ampconf_filter_get_custom_logo' );
}
