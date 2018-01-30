<?php
/**
 * No entry template.
 *
 * @package AMPConf
 */

?>

<section class="entry entry--none">
	<?php if ( ! is_404() ) : ?>
		<header class="entry__header">
			<h3 class="entry__title">
				<?php esc_html_e( 'No Content Found', 'ampconf' ); ?>
			</h3>
		</header><!-- .entry__header -->
	<?php endif; ?>

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
			<p>
			<?php
			printf(
				wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'It looks like nothing was found at this location. Return <a href="%1$s">home</a>, use the sidebar to find what you’re looking for, or try a search below.', 'ampconf' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				),
				esc_url( home_url( '/' ) )
			);
			?>
			</p>

			<?php

				get_search_form();
		endif;
		?>
	</div><!-- .entry__summary -->
</section><!-- .entry -->
