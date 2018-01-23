<?php
/**
 * No content template.
 *
 * @package AMPConf
 */

?>

<section class="entry entry--slim">
	<header class="entry__header">
		<h3 class="entry__title">
			<?php esc_html_e( 'Nothing Found', 'ampconf' ); ?>
		</h3>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
		?>

			<p>
			<?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ampconf' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?>
			</p>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'ampconf' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>
	</div><!-- .entry__summary -->
</section><!-- .entry -->
