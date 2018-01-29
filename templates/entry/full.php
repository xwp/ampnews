<?php
/**
 * Full entry template.
 *
 * @package AMPConf
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--featured' ); ?>>
	<figure class="entry__thumbnail">
		<a href="<?php esc_url( the_permalink() ); ?>">
			<?php the_post_thumbnail( 'ampconf-375x225' ); ?>
			<?php the_post_thumbnail( 'ampconf-1040x400' ); ?>
		</a>
	</figure><!-- .entry__thumbnail -->

	<header class="entry__header">
		<?php get_template_part( 'templates/entry/meta/date.php' ); ?>
		<?php the_title( '<h2 class="entry__title">', '</h2>' ); ?>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p><?php the_content(); ?></p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php get_template_part( 'templates/entry/meta/date' ); ?>
		<?php get_template_part( 'templates/entry/meta/byline' ); ?>
		<?php get_template_part( 'templates/entry/meta/category' ); ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
