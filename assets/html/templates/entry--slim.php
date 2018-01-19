<?php
/**
 * AMPConf static slim entry template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<article class="entry entry--slim">
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
					    (max-width: 1023px) calc( 66.667vw - 40px ),
					    240px">
			</amp-img>
		</a>
	</figure><!-- .entry__thumbnail -->

	<header class="entry__header">
		<?php include 'entry__meta--date.php'; ?>
		<h3 class="entry__title">
			<a href="single.php#development=1" rel="bookmark">The eight African elections to watch out for in 2018</a>
		</h3>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p>For many African countries, 2017 was the beginning of a new era. Long-term rulers departed in...</p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php include 'entry__meta--byline.php'; ?>
		<?php include 'entry__meta--category.php'; ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
