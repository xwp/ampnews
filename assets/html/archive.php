<?php
/**
 * AMPNews static archive template.
 *
 * @package AMPNews
 */

// @codingStandardsIgnoreStart
?>
<!doctype html>
<html ⚡>
	<head>
		<?php include 'templates/head-common.php'; ?>
		<title>AMP WordPress Theme Static Archive Template</title>
		<link rel="canonical" href="archive.html">
		<style amp-custom>
			<?php include 'templates/site-css.php'; ?>
		</style>
	</head>
	<body>
		<?php
		$has_separator = true;
		include 'templates/site-header.php';
		unset( $has_separator );
		?>

		<div class="wrap">
			<!-- START: Page heading -->
			<div class="wrap__item wrap__item--page-heading">
				<h1 class="heading heading--h1">October 2017</h1>
			</div>
			<!-- END: Page heading -->

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
