<?php
/**
 * AMPNews static widget media video template.
 *
 * @package AMPNews
 */

// @codingStandardsIgnoreStart
?>

<section id="media_video-1" class="widget widget_media_video">
	<h2 class="widget-title">Test Video Widget: With Loop, Preload</h2>
	<div class="wp-video">
		<amp-video
				class="wp-video-shortcode"
				id="video-903-2"
				width="480"
				height="270"
				layout="responsive"
				preload="metadata"
				poster="https://placehold.it/480x270"
				loop
				controls>
			<source type="video/mp4" src="https://ampbyexample.com/video/tokyo.mp4">
			<div fallback>
				<a href="https://ampbyexample.com/video/tokyo.mp4">
					https://ampbyexample.com/video/tokyo.mp4
				</a>
			</div>
		</amp-video>
	</div>
</section>
