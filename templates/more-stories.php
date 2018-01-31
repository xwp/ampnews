<?php
/**
 * More stories component.
 *
 * @package AMPConf
 */

$current_id = get_the_ID();

$stories = new WP_Query( array(
	'posts_per_page' => 3,
	'post_type'      => get_post_type(),
) );

if ( $stories->have_posts() ) : ?>

	<div class="wrap__item wrap__item--heading">
		<h3 class="heading heading--widget"><?php esc_html_e( 'More Stories', 'ampconf' ); ?></h3>
	</div>

	<?php if ( class_exists( 'Jetpack_Subscriptions_Widget' ) ) : ?>
		<div class="wrap__item wrap__item--widget">
			<?php
			the_widget( 'Jetpack_Subscriptions_Widget', array(
				'title'                 => esc_html__( 'Must Read', 'ampconf' ),
				'subscribe_text'        => esc_html__( '5 stories you cannot afford to miss, straight your inbox.', 'ampconf' ),
				'subscribe_placeholder' => esc_html__( 'Email', 'ampconf' ),
				'subscribe_button'      => esc_html__( 'Add', 'ampconf' ),
				'success_message'       => esc_html__( 'Successfully subscribed!', 'ampconf' ),
			) );
			?>
		</div>
	<?php endif; ?>

	<amp-live-list id="more-stories" data-poll-interval="15000" data-max-items-per-page="3">
		<button update on="tap:more-stories.update">
			<?php esc_html_e( 'Click for more stories!', 'ampconf' ); ?>
		</button>

		<div items>
			<?php
			while ( $stories->have_posts() ) :
				$stories->the_post();

				// Skip current post, if needed.
				if ( get_the_ID() === $current_id ) {
					continue;
				}

			?>

				<div class="wrap__item">
					<?php get_template_part( 'templates/entry/slim' ); ?>
				</div>

			<?php endwhile; ?>
		</div>
	</amp-live-list>

	<?php

	wp_reset_postdata();

endif; // End if().