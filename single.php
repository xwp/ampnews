<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AMPConf
 */

get_header(); ?>

	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<div class="wrap">
			<main class="wrap__item wrap__item--full-width">
				<?php get_template_part( 'templates/entry/full' ); ?>
			</main>
		</div>

		<div class="wrap wrap--single">
			<?php get_template_part( 'templates/more-stories' ); ?>

			<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		</div>
		<?php
	endwhile;
	?>

<?php
get_footer();
