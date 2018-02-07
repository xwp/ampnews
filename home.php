<?php
/**
 * The home template file
 *
 * This template is specific to the blog index page, which could be the site
 * root or an alternate page, depending on your Homepage Settings.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMPConf
 */

get_header(); ?>

	<?php
	// Only show the feature and subfeatures when not paged.
	if ( ! is_paged() && have_posts() ) :
		?>
		<amp-live-list id="ampconf-featured-articles-list" data-poll-interval="15000" data-max-items-per-page="3">
			<button class="button" update on="tap:ampconf-articles-list.update,ampconf-featured-articles-list.update"><?php esc_html_e( 'Load Newer Articles', 'ampconf' ); ?></button>
			<div items class="wrap wrap--triple-feature">
				<?php
				// Show the first three posts with specific entry templates.
				for ( $i = 0; have_posts() && $i < 3; $i++ ) { // phpcs:ignore Generic.CodeAnalysis.ForLoopWithTestFunctionCall.NotAllowed
					the_post();

					if ( 0 === $i ) {
						get_template_part( 'templates/entry/featured' );
					} else {
						get_template_part( 'templates/entry/default' );
					}
				}
				?>
			</div>
		</amp-live-list>
	<?php endif; ?>

	<div class="wrap">
		<main class="wrap__item wrap__item--blog wrap__item--blog--primary">
			<?php if ( have_posts() ) : ?>

				<?php if ( ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<amp-live-list id="ampconf-articles-list" data-poll-interval="15000" data-max-items-per-page="<?php echo esc_attr( get_option( 'posts_per_page' ) ); ?>">
					<div items>
						<?php
						while ( have_posts() ) :
							the_post();
							get_template_part( 'templates/entry/slim' );
						endwhile;
						?>
					</div>

					<button class="button" update on="tap:ampconf-articles-list.update<?php echo esc_attr( ( ! is_paged() ) ? ',ampconf-featured-articles-list.update' : '' ); ?>"><?php esc_html_e( 'Load Newer Articles', 'ampconf' ); ?></button>

					<div pagination></div>
				</amp-live-list>
			<?php else : ?>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php get_template_part( 'templates/entry/none' ); ?>
				</div>
			<?php endif; ?>

			<?php the_posts_pagination(); ?>
		</main>

		<?php get_sidebar(); ?>
	</div><!-- .wrap -->

<?php
get_footer();
