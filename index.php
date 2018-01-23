<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AMPConf
 */

get_header(); ?>

	<main class="wrap__item wrap__item--blog wrap__item--blog--primary">
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				?>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php get_template_part( 'templates/entry/slim' ); ?>
				</div>
				<?php

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</main>

<?php
get_sidebar();
get_footer();
