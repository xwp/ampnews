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
	</figure><!-- .entry__thumbnail -->

	<header class="entry__header">
		<?php include 'entry__meta--date.php'; ?>
		<h1 class="entry__title">
			Carrie Underwood Says Her Face Is 'Not Quite Looking the Same' After Fall
		</h1>
	</header><!-- .entry__header -->

	<div class="entry__content">

		<p>The goal of this new editor is to make adding rich content to WordPress simple and enjoyable. This whole
			post is composed of <em>pieces of content</em>—somewhat similar to LEGO bricks—that you can move around
			and interact with. Move your cursor around and you'll notice the different blocks light up with outlines
			and arrows. Press the arrows to reposition blocks quickly, without fearing about losing things in the
			process of copying and pasting.</p>
		<section class="wp-block-cover-image has-background-dim alignwide">
			<h2>Of Mountains &amp; Printing Presses</h2>
		</section>
		<p>What you are reading now is a <strong>text block</strong>, the most basic block of all. The text block
			has its own controls to be moved freely around the post…</p>
		<p class="amp-wp-inline-256659ade2cf5854eb8a79d0057ffb1c">… like this one, which is right aligned.</p>
		<p>Headings are separate blocks as well, which helps with the outline and organization of your content.</p>
		<h1>Heading 1</h1>
		<p>Headings are separate blocks as well, which helps with the outline and organization of your content.</p>
		<h2>Heading 2</h2>
		<p>Headings are separate blocks as well, which helps with the outline and organization of your content.</p>
		<h3>Heading 3</h3>
		<p>Headings are separate blocks as well, which helps with the outline and organization of your content.</p>
		<h4>Heading 4</h4>
		<p>Headings are separate blocks as well, which helps with the outline and organization of your content.</p>
		<h5>Heading 5</h5>
		<p>Headings are separate blocks as well, which helps with the outline and organization of your content.</p>
		<h6>Heading 6</h6>
		<p>Headings are separate blocks as well, which helps with the outline and organization of your content.</p>
		<h2>A Picture is worth a Thousand Words</h2>
		<p>Handling images and media with the utmost care is a primary focus of the new editor. Hopefully, you'll
			find aspects of adding captions or going full-width with your pictures much easier and robust than
			before.</p>
		<figure class="wp-block-image aligncenter">
			<!-- Dev Note: `amp-img` example for `aligncenter` image (`sizes` in particular) -->
			<amp-img
					src="https://cldup.com/cXyG__fTLN.jpg"
					alt="Beautiful landscape"
					width="2256"
					height="1506"
					layout="responsive"
					sizes="(max-width: 767px) 100vw,
					   (max-width: 909px) calc(100vw - 220px),
					   690px">
			</amp-img>
			<figcaption>Give it a try. Press the "wide" button on the image toolbar.</figcaption>
		</figure>
		<p>Try selecting and removing or editing the caption, now you don't have to be careful about selecting the
			image or other text by mistake and ruining the presentation.</p>
		<h2>The <em>Inserter</em> Tool</h2>
		<p>Imagine everything that WordPress can do is available to you quickly and in the same place on the
			interface. No need to figure out HTML tags, classes, or remember complicated shortcode syntax. That's
			the spirit behind the inserter—the <code>(+)</code> button you'll see around the editor—which allows you
			to browse all available content blocks and add them into your post. Plugins and themes are able to
			register their own, opening up all sort of possibilities for rich editing and publishing.</p>
		<p>Go give it a try, you may discover things WordPress can already add into your posts that you didn't know
			about. Here's a short list of what you can currently find there:</p>
		<ul>
			<li>Text &amp; Headings</li>
			<li>Images &amp; Videos</li>
			<li>Galleries</li>
			<li>Embeds, like YouTube, Tweets, or other WordPress posts.</li>
			<li>Layout blocks, like Buttons, Hero Images, Separators, etc.</li>
			<li>And <em>Lists</em> like this one of course 🙂</li>
		</ul>
		<hr class="wp-block-separator"/>
		<h2>Visual Editing</h2>
		<p>A huge benefit of blocks is that you can edit them in place and manipulate your content directly. Instead
			of having fields for editing things like the source of a quote, or the text of a button, you can
			directly change the content. Try editing the following quote:</p>
		<blockquote class="wp-block-pullquote alignnone">
			<p>The editor will endeavour to create a new page and post building experience that makes writing rich
				posts effortless, and has “blocks” to make it easy what today might take shortcodes, custom HTML, or
				“mystery meat” embed discovery.</p><cite>Matt Mullenweg, 2017</cite></blockquote>
		<p>The information corresponding to the source of the quote is a separate text field, similar to captions
			under images, so the structure of the quote is protected even if you select, modify, or remove the
			source. It's always easy to add it back.</p>
		<p>Blocks can be anything you need. For instance, you may want to add a subdued quote as part of the
			composition of your text, or you may prefer to display a giant stylized one. All of these options are
			available in the inserter.</p>
		<div class="wp-block-gallery alignnone columns-2 is-cropped">
			<figure class="blocks-gallery-image">
				<amp-img src="https://cldup.com/n0g6ME5VKC.jpg" alt="" width="2274" height="1446" layout="responsive"></amp-img>
			</figure>
			<figure class="blocks-gallery-image">
				<amp-img src="https://cldup.com/ZjESfxPI3R.jpg" alt="" width="1944" height="1191" layout="responsive"></amp-img>
			</figure>
			<figure class="blocks-gallery-image">
				<amp-img src="https://cldup.com/EKNF8xD2UM.jpg" alt="" width="1974" height="1316" layout="responsive"></amp-img>
			</figure>
		</div>
		<p>You can change the amount of columns in your galleries by dragging a slider in the block inspector in the
			sidebar.</p>
		<h2>Media Rich</h2>
		<p>If you combine the new <strong>wide</strong> and <strong>full-wide</strong> alignments with galleries,
			you can create a very media rich layout, very quickly:</p>
		<figure class="wp-block-image alignfull">
			<!-- Dev Note: `amp-img` example for `alignfull` image (`sizes` in particular) -->
			<amp-img
					src="https://cldup.com/8lhI-gKnI2.jpg"
					alt="Accessibility is important don't forget image alt attribute"
					width="1122"
					height="750"
					layout="responsive"
					sizes="(max-width: 1080px) 100vw,
					   1040px">
			</amp-img>
			<figcaption>Give it a try. Press the "wide" button on the image toolbar.</figcaption>
		</figure>
		<p>Sure, the full-wide image can be pretty big. But sometimes the image is worth it.</p>
		<div class="wp-block-gallery alignwide columns-2 is-cropped">
			<figure class="blocks-gallery-image">
				<amp-img src="https://cldup.com/_rSwtEeDGD.jpg" alt="" width="1944" height="1296" layout="responsive"></amp-img>
			</figure>
			<figure class="blocks-gallery-image">
				<amp-img src="https://cldup.com/L-cC3qX2DN.jpg" alt="" width="1944" height="1215" layout="responsive"></amp-img>
			</figure>
		</div>
		<p>The above is a gallery with just two images. It's an easier way to create visually appealing layouts,
			without having to deal with floats. You can also easily convert the gallery back to individual images
			again, by using the block switcher.</p>
		<p>Any block can opt into these alignments. The embed block has them also, and is responsive out of the
			box:</p>
		<figure class="wp-block-embed alignwide">
			<amp-vimeo data-videoid="22439234" layout="responsive" width="640" height="360"></amp-vimeo>
		</figure>
		<p>You can build any block you like, static or dynamic, decorative or plain. Here's a pullquote block:</p>
		<blockquote class="wp-block-quote">
			<p>Code is Poetry</p><cite>The WordPress community</cite></blockquote>
		<p class="amp-wp-inline-2f0158eb062d1ac553a7edcb8a744628"><em>If you want to learn more about how to build
				additional blocks, or if you are interested in helping with the project, head over to the <a
						href="https://github.com/WordPress/gutenberg">GitHub repository</a>.</em></p>
		<div class="wp-block-button aligncenter">
			<a class="wp-block-button__link" href="https://github.com/WordPress/gutenberg">Help build Gutenberg</a>
		</div>
		<div class="wp-block-button alignleft">
			<a class="wp-block-button__link" href="https://github.com/WordPress/gutenberg">Help build Gutenberg</a>
		</div>
		<div class="wp-block-button alignright">
			<a class="wp-block-button__link" href="https://github.com/WordPress/gutenberg">Help build Gutenberg</a>
		</div>
		<hr class="wp-block-separator"/>
		<p class="amp-wp-inline-2f0158eb062d1ac553a7edcb8a744628">Thanks for testing Gutenberg!</p>
		<p class="amp-wp-inline-2f0158eb062d1ac553a7edcb8a744628">
			<amp-img class="emoji amp-wp-unknown-size amp-wp-enforced-sizes" alt="👋"
					 src="https://s.w.org/images/core/emoji/2.3/svg/1f44b.svg" width="600" height="400"
					 sizes="(min-width: 600px) 600px, 100vw"></amp-img>
		</p>

	</div><!-- .entry__content -->

	<footer class="entry__footer">
		<?php include 'entry__meta--date.php'; ?>
		<?php include 'entry__meta--byline.php'; ?>
		<?php include 'entry__meta--category.php'; ?>
	</footer><!-- .entry__footer -->
</article><!-- .entry -->
