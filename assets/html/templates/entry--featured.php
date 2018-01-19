<?php
/**
 * AMPConf static featured entry template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<article class="entry entry--featured">
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
		<?php include 'entry__meta--date.php'; ?>
		<h2 class="entry__title">
			<a href="single.php#development=1" rel="bookmark">Carrie Underwood Says Her Face Is 'Not Quite Looking the Same' After Fall</a>
		</h2>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p>The photo shows Carrie Underwood and Below Deck star, Adrienne Gang. The two women bumped into each
			other at a gym, and Gang shared a photo that that she had someone take of her and the country star
			after their workout...</p>
		<p class="entry__link-more">
			<a href="single.php#development=1" class="more-link">
				Read more
				<span class="screen-reader-text"> on "Carrie Underwood Says Her Face Is 'Not Quite Looking the Same' After Fall"</span>
			</a>
		</p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php include 'entry__meta--date.php'; ?>
		<?php include 'entry__meta--byline.php'; ?>
		<?php include 'entry__meta--category.php'; ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
