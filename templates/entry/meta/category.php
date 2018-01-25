<?php
/**
 * Entry category partial.
 *
 * @package AMPConf
 */

/* translators: used between list items, there is a space after the comma */
$categories_list = get_the_category_list( esc_html__( ', ', 'ampconf' ) );

// No cats? Bail. - meow.
if ( ! $categories_list ) {
	return;
}
?>
<span class="entry__meta entry__meta--category">
	<span class="screen-reader-text"><?php esc_html_e( 'Categories:', 'ampconf' ); ?></span>
	<?php
	echo wp_kses(
		$categories_list,
		array(
			'a' => array(
				'href' => array(),
				'rel'  => array(),
			),
		)
	);
	?>
</span>
