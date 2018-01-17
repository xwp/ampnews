<?php
/**
 * AMPConf static full entry template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<article class="entry entry--featured">
	<figure class="entry__thumbnail">
		<a href="#">
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
			<a href="#" rel="bookmark">Carrie Underwood Says Her Face Is 'Not Quite Looking the Same' After Fall</a>
		</h2>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<p>The photo shows Carrie Underwood and Below Deck star, Adrienne Gang. The two women bumped into each other at
			a gym, and Gang shared a photo that that she had someone take of her and the country star after their
			workout.</p>
		<p>This picture is now being scrutinized. Here’s why.</p>
		<p>In November, Underwood revealed that she fell on the front stairs of her home. Not only did she end up
			breaking her wrist in the fall, but she also hurt her face and needed surgery. In a recent post on her fan
			page, Underwood revealed that she needed 40-50 stitches in her face and that her facial injury was a lot
			more serious than she had initially let on.</p>
		<p>“There is also another part of the story that I haven’t been ready to talk about since I have still been
			living it and there has been much uncertainty as to how things will end up. It’s crazy how a freak random
			accident can change your life,” she wrote in a blog post, according to Entertainment Tonight. “In addition
			to breaking my wrist, I somehow managed to injure my face as well. I’ll spare you the gruesome details, but
			when I came out of surgery the night of my fall, the doctor told [Underwood’s husband] Mike that he had put
			between 40 and 50 stitches in,” she added.</p>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php include 'entry__meta--date.php'; ?>
		<?php include 'entry__meta--byline.php'; ?>
		<?php include 'entry__meta--category.php'; ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
