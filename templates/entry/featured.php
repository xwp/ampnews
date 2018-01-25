<?php
/**
 * Featured entry template.
 *
 * @package AMPConf
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry entry--featured' ); ?>>
	<figure class="entry__thumbnail">
		<a href="single.php#development=1">
			<amp-img class="entry__image"
					 alt="Post title"
					 src="https://placehold.it/320x192"
					 width="375"
					 height="225"
					 layout="responsive"
					 media="(max-width: 767px)"
					 srcset="https://placehold.it/320x192 320w,
					    https://placehold.it/375x225 375w, https://placehold.it/768x461 768w"
					 sizes="100vw">
			</amp-img>
			<amp-img class="entry__image"
					 alt="Post title"
					 src="https://placehold.it/320x192"
					 width="1040"
					 height="400"
					 layout="responsive"
					 media="(min-width: 768px)"
					 srcset="https://placehold.it/768x295 768w,
					    https://placehold.it/1040x400 1040w"
					 sizes="(max-width: 1023px) 100vw,
					    (max-width: 1039px) calc( 100vw - 40px ),
					    (max-width: 1079px) 1000px,
					    1040px">
			</amp-img>
		</a>
	</figure><!-- .entry__thumbnail -->

	<header class="entry__header">
		<?php get_template_part( 'templates/entry/meta/date.php' ); ?>
		<?php the_title( '<h2 class="entry__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p><?php the_excerpt(); ?></p>
		<p class="entry__link-more">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="more-link">
				<?php
				printf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Read more<span class="screen-reader-text"> "%s"</span>', 'ampconf' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
				?>
			</a>
		</p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php get_template_part( 'templates/entry/meta/date' ); ?>
		<?php get_template_part( 'templates/entry/meta/byline' ); ?>
		<?php get_template_part( 'templates/entry/meta/category' ); ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
