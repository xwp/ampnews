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
			<div class="wrap__item wrap__item--heading">
				<h3 class="heading heading--widget"><?php esc_html_e( 'More Stories', 'ampconf' ); ?></h3>
			</div>

			<?php // TODO: Create loop of recent posts, cached. ?>
			<div class="wrap__item">
				<?php get_template_part( 'templates/entry/slim' ); ?>
			</div>

			<div class="wrap__item wrap__item--heading">
				<h3 class="heading heading--widget"><?php esc_html_e( 'Comments', 'ampconf' ); ?></h3>
			</div>

			<div class="wrap__item">
				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>
		</div>
		<?php
	endwhile;
	?>

<?php
get_footer();
