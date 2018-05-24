<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AMPNews
 */

get_header(); ?>

	<div class="wrap">
		<header class="wrap__item wrap__item--page-heading">
			<h1 class="heading heading--h1"><?php esc_html_e( '404 &mdash; Page not found', 'ampnews' ); ?></h1>
		</header>

		<main class="wrap__item wrap__item--blog wrap__item--blog--primary">
			<div class="wrap__subitem wrap__subitem--blog">
				<?php get_template_part( 'templates/entry/none' ); ?>
			</div>
		</main>

		<?php get_sidebar(); ?>
	</div><!-- .wrap -->

<?php
get_footer();
