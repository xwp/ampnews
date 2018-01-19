<?php
/**
 * AMPConf static widget media audio template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>

<div id="media_audio-1" class="widget widget_media_audio">
	<h2 class="widget-title">Test Audio Widget: With Loop, Preload</h2>
	<?php
	/**
	 * Dev note
	 *
	 * Even though AMP reference says `preload` attribute is allowed, I was getting
	 * validation error whenever it was present in the `amp-audio` tag.
	 *
	 * @see https://www.ampproject.org/docs/reference/components/amp-audio
	 */
	?>
	<amp-audio
			class="wp-audio-shortcode"
			id="audio-903-1"
			width="auto"
			height="50"
			loop
			controls>
		<source type="audio/mpeg" src="https://open.live.bbc.co.uk/mediaselector/5/redir/version/2.0/mediaset/audio-nondrm-download/proto/http/vpid/p05tnfn8.mp3">
		<div fallback>
			<a href="https://open.live.bbc.co.uk/mediaselector/5/redir/version/2.0/mediaset/audio-nondrm-download/proto/http/vpid/p05tnfn8.mp3">
				https://open.live.bbc.co.uk/mediaselector/5/redir/version/2.0/mediaset/audio-nondrm-download/proto/http/vpid/p05tnfn8.mp3
			</a>
		</div>
	</amp-audio>
</div>
