<?php
/**
 * AMPNews static page template.
 *
 * @package AMPNews
 */

// @codingStandardsIgnoreStart
?>
<!doctype html>
<html ⚡>
	<head>
		<?php include 'templates/head-common.php'; ?>
		<title>AMP WordPress Theme Static Page Template</title>
		<link rel="canonical" href="page.html">
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
			<div class="wrap__item wrap__item--full-width">

				<?php include 'templates/entry--full--page.php'; ?>

			</div>
		</div>
	</body>
</html>
