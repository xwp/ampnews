<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AMPConf
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
				<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'ampconf' ), '<span>' . get_search_query() . '</span>' );
				?>
				</h1>
			</header><!-- .page-header -->

			<?php get_template_part( 'template-parts/the-loop', 'search' ); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
