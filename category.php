<?php
/**
 * The template for displaying category archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMPConf
 */

$category = get_category( get_query_var( 'cat' ) );
$cat_id   = $category->cat_ID;

$subcats = get_categories( array(
	'child_of' => $cat_id,
) );

get_header(); ?>

	<div class="wrap">
		<?php if ( have_posts() ) : ?>
			<header class="wrap__item wrap__item--page-heading">
				<?php the_archive_title( '<h1 class="heading heading--h1">', '</h1>' ); ?>
			</header>

			<?php if ( ! empty( $subcats ) ) : ?>
				<nav class="wrap__item wrap__item--sub-menu">
					<ul class="menu menu--horizontal">
						<?php foreach ( $subcats as $cat ) : ?>
							<li class="menu-item"><a href="<?php echo esc_url( get_term_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</nav>
			<?php endif; ?>
		<?php endif; ?>

		<main class="wrap__item wrap__item--blog wrap__item--blog--primary">
			<?php
			if ( have_posts() ) :

				?>
				<amp-live-list id="ampconf-posts-list" data-poll-interval="15000" data-max-items-per-page="<?php echo esc_attr( get_option( 'posts_per_page' ) ); ?>">
					<button update on="tap:ampconf-posts-list.update" class="button"><?php esc_html_e( 'Click for updates!', 'ampconf' ); ?></button>
					<div items>
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							get_template_part( 'templates/entry/slim' );
						endwhile;
						?>
					</div>
					<div pagination></div>
				</amp-live-list>
				<?php

			else :

				?>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php get_template_part( 'templates/entry/none' ); ?>
				</div>
				<?php

			endif;

			the_posts_pagination();
			?>
		</main>

		<?php get_sidebar(); ?>
	</div><!-- .wrap -->

<?php
get_footer();
