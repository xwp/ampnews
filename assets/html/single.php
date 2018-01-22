<?php
/**
 * AMPConf static single template.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<!doctype html>
<html ⚡>
	<head>
		<?php include 'templates/head-common.php'; ?>
		<title>AMP WordPress Theme Static Single Template</title>
		<link rel="canonical" href="single.html">
	</head>
	<body>
		<?php include 'templates/site-header.php'; ?>

		<div class="wrap">
			<div class="wrap__item wrap__item--full-width">

				<?php include 'templates/entry--full.php'; ?>

			</div>
		</div>
		<div class="wrap wrap--single">
			<div class="wrap__item wrap__item--heading">
				<h3 class="heading heading--widget">More Stories</h3>
			</div>
			<div class="wrap__item">
				<?php include 'templates/entry--slim.php'; ?>
			</div>
			<div class="wrap__item">
				<?php include 'templates/entry--slim.php'; ?>
			</div>
			<div class="wrap__item">
				<?php include 'templates/entry--slim.php'; ?>
			</div>
			<div class="wrap__item wrap__item--no-separator">
				<?php include 'templates/entry--slim.php'; ?>
			</div>

			<div class="wrap__item wrap__item--heading">
				<h3 class="heading heading--widget">Comments</h3>
			</div>
			<div class="wrap__item">
				Comment goes here.
			</div>
		</div>

	</body>
</html>
