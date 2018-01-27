<?php
/**
 * Default entry template.
 *
 * @package AMPConf
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<figure class="entry__thumbnail">
		<a href="single.php#development=1">
			<amp-img class="entry__image"
					 alt="Post title"
					 src="https://placehold.it/335x225"
					 width="335"
					 height="225"
					 layout="responsive"
					 srcset="https://placehold.it/280x188 320w,
					    https://placehold.it/335x225 375w,
					    https://placehold.it/727x508 727w"
					 sizes="(max-width: 767px) calc( 100vw - 40px ),
					    (max-width: 1079px) calc( 50vw - 35px ),
					    505px">
			</amp-img>
		</a>
	</figure><!-- .entry__thumbnail -->

	<header class="entry__header">
		<?php get_template_part( 'templates/entry/meta/date' ); ?>
		<?php the_title( '<h3 class="entry__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p><?php the_excerpt(); ?></p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php get_template_part( 'templates/entry/meta/byline' ); ?>
		<?php get_template_part( 'templates/entry/meta/category' ); ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
