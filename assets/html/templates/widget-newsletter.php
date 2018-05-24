<?php
/**
 * AMPNews static widget newsletter sign-up template.
 *
 * @package AMPNews
 */

// @codingStandardsIgnoreStart
?>

<section id="newsletter-1" class="widget widget_newsletter">
	<h2 class="widget-title">Must Read</h2>
	<p>5 stories you can't afford to miss, every Saturday in your inbox.</p>
	<form
			method="get"
			class="newsletter-form"
			action="https://ampconf.local/"
			target="_top">
		<label>
			<span class="screen-reader-text">Sign up for a weekly newsletter:</span>
			<input type="email" class="newsletter-field" placeholder="Email" value="" name="email" />
		</label>
		<input type="submit" class="newsletter-submit" value="Add" />
	</form>
</section>
