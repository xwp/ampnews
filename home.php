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

	<div class="wrap__item wrap__item--full-width">
		<?php get_template_part( 'templates/entry/featured' ); ?>
	</div>

	<div class="wrap__item wrap__item--half wrap__item--half--primary">
		<?php get_template_part( 'templates/entry/default' ); ?>
	</div>
	<div class="wrap__item wrap__item--half wrap__item--half--secondary">
		<?php get_template_part( 'templates/entry/default' ); ?>
	</div>

	<main class="wrap__item wrap__item--blog wrap__item--blog--primary">
		<?php
		if ( have_posts() ) :

			if ( ! is_front_page() ) :
			?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

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
