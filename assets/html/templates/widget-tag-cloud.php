<?php
/**
 * AMP News static widget tag cloud template.
 *
 * @package AMPNews
 */

/**
 * Dev note:
 *
 * Since an inline CSS in not allowed in the AMP pages and also adding a set of predefined
 * classes to the global stylesheet is not practical (`$smallest`, `$largest` and `$unit`
 * are configurable) I'm suggesting another approach.
 *
 * I think generating a set of classes based on the current configuration passed to the
 * `wp_generate_tag_cloud()` and then inlining it right after the regular main stylesheet
 * should do the job.
 *
 * E.g.:
 * I've added `tag-link-size-X` classes to each `tag-cloud-link`. The supplementary CSS code
 * in the page head could look like this:
 * ```
 * .tag-link-size-X { font-size: Xpx; }
 * ```
 * where `px` are replaced with the `$unit`.
 */

// @codingStandardsIgnoreStart
?>

<section id="tag_cloud-1" class="widget widget_tag_cloud"><h2 class="widget-title">Test Tag Widget, With Count</h2>
	<div class="tagcloud">
		<a href="category.php#development=1"
		   class="tag-cloud-link tag-link-43 tag-link-position-1 tag-link-size-8"
		   aria-label="8BIT (1 item)">8BIT<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-44 tag-link-position-2 tag-link-size-10"
		   aria-label="Articles (1 item)">Articles<span
					class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-45 tag-link-position-3 tag-link-size-8"
		   aria-label="dowork (1 item)">dowork<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-46 tag-link-position-4 tag-link-size-12"
		   aria-label="Fail (1 item)">Fail<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-47 tag-link-position-5 tag-link-size-18"
		   aria-label="FTW (1 item)">FTW<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-48 tag-link-position-6 tag-link-size-36"
		   aria-label="Fun (1 item)">Fun<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-49 tag-link-position-7 tag-link-size-11"
		   aria-label="Love (1 item)">Love<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-50 tag-link-position-8 tag-link-size-8"
		   aria-label="Mothership (1 item)">Mothership<span
					class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-51 tag-link-position-9 tag-link-size-9"
		   aria-label="Must Read (1 item)">Must Read<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-52 tag-link-position-10 tag-link-size-8"
		   aria-label="Nailed It (1 item)">Nailed It<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-53 tag-link-position-11 tag-link-size-24"
		   aria-label="Pictures (1 item)">Pictures<span
					class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-54 tag-link-position-12 tag-link-size-12"
		   aria-label="Success (1 item)">Success<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-55 tag-link-position-13 tag-link-size-8"
		   aria-label="Swagger (1 item)">Swagger<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-56 tag-link-position-14 tag-link-size-28"
		   aria-label="Tags (1 item)">Tags<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-57 tag-link-position-15 tag-link-size-16"
		   aria-label="Unseen (1 item)">Unseen<span class="tag-link-count"> (1)</span></a>
		<a href="category.php#development=1" class="tag-cloud-link tag-link-58 tag-link-position-16 tag-link-size-10"
		   aria-label="WordPress (1 item)">WordPress<span class="tag-link-count"> (1)</span></a>
	</div>
</section>
