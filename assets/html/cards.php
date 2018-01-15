<?php
/**
 * AMPConf static article cards templates.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart
?>
<!doctype html>
<html ⚡>
	<head>
		<meta charset="utf-8">
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<title>AMP WordPress Theme Article Cards Set</title>
		<link rel="canonical" href="index.html">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<style amp-custom>
			<?php
			ob_start();
			require '../dist/css/main.css';
			$style = ob_get_clean();
			$style = str_replace( '@charset "UTF-8";', '', $style );
			echo $style;
			?>
		</style>
	</head>
		<body>
		<div class="container">

			<?php include 'templates/entry--featured.php'; ?>
			<?php include 'templates/entry--default.php'; ?>
			<?php include 'templates/entry--default.php'; ?>
			<?php include 'templates/entry--slim.php'; ?>
			<?php include 'templates/entry--slim.php'; ?>

		</div>
	</body>
</html>
