<?php
/**
 * AMPConf static home page template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<!doctype html>
<html ⚡>
	<head>
		<?php include 'templates/head-common.php'; ?>
		<title>AMP WordPress Theme Static Home Page Template</title>
		<link rel="canonical" href="home.html">
		<style amp-custom>
			<?php include 'templates/site-css.php'; ?>
		</style>
	</head>
	<body>
		<?php include 'templates/site-header.php'; ?>

		<div class="wrap">

			<!-- START: Featured post -->
			<div class="wrap__item wrap__item--full-width">
				<?php include 'templates/entry--featured.php'; ?>
			</div>
			<!-- END: Featured post -->

			<!-- START: Homepage two-pack -->
			<div class="wrap__item wrap__item--half wrap__item--half--primary">
				<?php include 'templates/entry--default.php'; ?>
			</div>
			<div class="wrap__item wrap__item--half wrap__item--half--secondary">
				<?php include 'templates/entry--default.php'; ?>
			</div>
			<!-- END: Homepage two-pack -->

			<!-- START: Blog layout -->
			<div class="wrap__item wrap__item--blog wrap__item--blog--primary">
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--widget">
					<?php include 'templates/widget-newsletter.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--widget">
					<amp-img
							src="https://placehold.it/300x250"
							alt="Dev note: this is an ad placeholder"
							width="300"
							height="250"
							layout="fixed">
					</amp-img>
				</div>
				<div class="wrap__subitem wrap__subitem--blog wrap__subitem--no-separator">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
				<div class="wrap__subitem wrap__subitem--blog wrap__subitem--no-separator">
					<a href="#" class="button">Load more stories</a>
				</div>
			</div>
			<div class="wrap__item wrap__item--blog wrap__item--blog--secondary">
				<aside class="wrap__subitem wrap__subitem--blog wrap__subitem--no-separator">
					<?php include 'templates/sidebar.php'; ?>
				</aside>
			</div>
			<!-- END: Blog layout -->

		</div>

	</body>
</html>
