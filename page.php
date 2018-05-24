<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMPNews
 */

get_header(); ?>

	<?php
	while ( have_posts() ) :
		the_post();

		?>
		<div class="wrap">
			<div class="wrap__item wrap__item--full-width">
				<amp-live-list id="ampnews-live-page-<?php the_ID(); ?>" class="live-list" data-poll-interval="<?php echo esc_attr( AMPNEWS_LIVE_LIST_POLL_INTERVAL ); ?>" data-max-items-per-page="1">
					<div update class="live-list__button">
						<button class="button" on="tap:ampnews-live-page-<?php the_ID(); ?>.update"><?php esc_html_e( 'Load updates!', 'ampnews' ); ?></button>
					</div>
					<div items>
						<?php get_template_part( 'templates/entry/full', 'page' ); ?>
					</div>
				</amp-live-list>
			</div>
		</div>
		<?php

	endwhile;
	?>

<?php
get_footer();
