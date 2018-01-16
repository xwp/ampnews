<!doctype html>
<html ⚡>
	<head>
		<meta charset="utf-8">
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<title>AMP WordPress Theme</title>
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
		<header class="module module--black-background module-header">
			<div class="container">
				<ul class="menu">
					<li class="menu-item"><a href>News</a></li>
					<li class="menu-item menu-item--has-dropdown">
						<a href>Sports</a>
						<ul class="submenu">
							<li class="menu-item"><a href>Odds</a></li>
							<li class="menu-item"><a href>Betting</a></li>
							<li class="menu-item"><a href>NFL</a></li>
							<li class="menu-item"><a href>College Football</a></li>
							<li class="menu-item"><a href>Soccer</a></li>
						</ul>
					</li>
					<li class="menu-item"><a href>Entertainment</a></li>
					<li class="menu-item"><a href>Tech</a></li>
					<li class="menu-item"><a href>Gaming</a></li>
					<li class="menu-item"><a href>Shopping</a></li>
				</ul>
			</div>
		</header>
	</body>
</html>
