<?php
/**
 * AMPNews static category template.
 *
 * @package AMPNews
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
		<?php
		$has_separator = true;
		include 'templates/site-header.php';
		unset( $has_separator );
		?>

		<div class="wrap">
			<!-- START: Page heading -->
			<div class="wrap__item wrap__item--page-heading">
				<h1 class="heading heading--h1">Sports</h1>
			</div>
			<!-- END: Page heading -->

			<!-- START: Category menu -->
			<nav class="wrap__item wrap__item--sub-menu">
				<ul class="menu menu--horizontal">
					<li class="menu-item"><a href="category.php#development=1">Odds</a></li>
					<li class="menu-item"><a href="category.php#development=1">Betting</a></li>
					<li class="menu-item"><a href="category.php#development=1">NFL</a></li>
					<li class="menu-item"><a href="category.php#development=1">College Football</a></li>
					<li class="menu-item"><a href="category.php#development=1">Soccer</a></li>
				</ul>
			</nav>
			<!-- END: Category menu -->

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
				<div class="wrap__subitem wrap__subitem--blog wrap__subitem--no-separator">
					<?php include 'templates/sidebar.php'; ?>
				</div>
			</div>
			<!-- END: Blog layout -->

		</div>

	</body>
</html>
