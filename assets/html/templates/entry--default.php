<?php
/**
 * AMP News static default entry template.
 *
 * @package AMPNews
 */

// @codingStandardsIgnoreStart
?>
<article class="entry">
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
		<?php include 'entry__meta--date.php'; ?>
		<h3 class="entry__title">
			<a href="single.php#development=1" rel="bookmark">Carrie Underwood Says Her Face Is 'Not Quite Looking the Same' After Fall</a>
		</h3>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p>The photo shows Carrie Underwood and Below Deck star, Adrienne Gang. The two women bumped into each
			other at a gym, and Gang shared a photo that that she had someone take of her and the country star
			after their workout...</p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php include 'entry__meta--byline.php'; ?>
		<?php include 'entry__meta--category.php'; ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
