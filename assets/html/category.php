<?php
/**
 * AMPConf static category template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<!doctype html>
<html ⚡>
	<head>
		<?php include 'templates/head-common.php'; ?>
		<title>AMP WordPress Theme Static Category Template</title>
		<link rel="canonical" href="category.html">
		<style amp-custom>
			<?php include 'templates/site-css.php'; ?>
		</style>
	</head>
	<body>
		<?php include 'templates/site-header.php'; ?>

		<div class="wrap">

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
				<div class="wrap__subitem wrap__subitem--blog">
					<?php include 'templates/entry--slim.php'; ?>
				</div>
			</div>
			<div class="wrap__item wrap__item--blog wrap__item--blog--secondary">
				<div class="wrap__subitem wrap__subitem--blog wrap__subitem--no-separator">
					<?php include 'templates/sidebar.php'; ?>
				</div>
			</div>
			<!-- END: Blog layout -->

		</div>

	</body>
</html>
