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
		<a href="#">
			<amp-img alt="Post title"
			         src="https://placehold.it/375x225"
			         width="375"
			         height="225"
			         layout="responsive">
			</amp-img>
		</a>
	</figure><!-- .entry__thumbnail -->

	<header class="entry__header">
		<?php include 'entry__meta--date.php'; ?>
		<h2 class="entry__title">
			<a href="#" rel="bookmark">Carrie Underwood Says Her Face Is 'Not Quite Looking the Same' After Fall</a>
		</h2>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p>The photo shows Carrie Underwood and Below Deck star, Adrienne Gang. The two women bumped into each
			other at a gym, and Gang shared a photo that that she had someone take of her and the country star
			after their workout...</p>
		<p class="entry__link-more">
			<a href="#" class="more-link">
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
