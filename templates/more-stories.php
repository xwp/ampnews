<?php
/**
 * More stories component.
 *
 * @package AMPNews
 */

$max_shown  = 3;
$current_id = get_the_ID();

$stories = new WP_Query( array(
	'posts_per_page'      => $max_shown + 1,
	'post_type'           => get_post_type(),
	'ignore_sticky_posts' => true,
) );

if ( $stories->have_posts() ) : ?>

	<div class="wrap__item wrap__item--heading">
		<h3 class="heading heading--widget"><?php esc_html_e( 'More Stories', 'ampnews' ); ?></h3>
	</div>

	<?php if ( class_exists( 'Jetpack_Subscriptions_Widget' ) ) : ?>
		<div class="wrap__item wrap__item--widget">
			<?php
			the_widget( 'Jetpack_Subscriptions_Widget', array(
				'title'                 => esc_html__( 'Must Read', 'ampnews' ),
				'subscribe_text'        => esc_html__( '5 stories you cannot afford to miss, straight your inbox.', 'ampnews' ),
				'subscribe_placeholder' => esc_html__( 'Email', 'ampnews' ),
				'subscribe_button'      => esc_html__( 'Add', 'ampnews' ),
				'success_message'       => esc_html__( 'Successfully subscribed!', 'ampnews' ),
			) );
			?>
		</div>
	<?php endif; ?>

	<amp-live-list id="more-stories" class="live-list" data-poll-interval="<?php echo esc_attr( AMPCONF_LIVE_LIST_POLL_INTERVAL ); ?>" data-max-items-per-page="<?php echo esc_attr( $max_shown ); ?>">
		<div update class="live-list__button">
			<button class="button" on="tap:more-stories.update"><?php esc_html_e( 'Load Newer Stories', 'ampnews' ); ?></button>
		</div>

		<div items>
			<?php

			$shown = 0;
			while ( $stories->have_posts() && $shown < $max_shown ) :
				$stories->the_post();

				// Skip current post, if needed.
				if ( get_the_ID() === $current_id ) {
					continue;
				}
				?>

				<div id="more-stories__<?php echo esc_attr( get_the_ID() ); ?>" data-sort-time="<?php echo esc_attr( get_the_date( 'U' ) ); ?>" data-update-time="<?php echo esc_attr( get_the_modified_time( 'U' ) ); ?>">
					<?php get_template_part( 'templates/entry/slim' ); ?>
				</div>
				<?php $shown++; ?>
			<?php endwhile; ?>
		</div>
	</amp-live-list>

	<?php

	wp_reset_postdata();

endif; // End if().
