<?php
/**
 * AMPConf static site-header template.
 *
 * @package AMPConf
 */

?>

<header class="module module-header">
	<div class="module-header--branding">
		<div class="container">
			<h1 class="module-header--branding-title"><a href>Brand</a></h1>
			<p class="module-header--branding-description">Previewing Another WordPress Blog</p>
			<span class="module-header--menu-toggle"></span>
		</div>
	</div>

	<nav class="module-header--menu">
		<div class="container">
			<ul class="menu">
				<li class="menu-item"><a href>News</a></li>
				<li class="menu-item menu-item-has-children">
					<a href>Sports</a>
					<ul class="sub-menu">
						<li class="menu-item"><a href>Odds</a></li>
						<li class="menu-item"><a href>Betting</a></li>
						<li class="menu-item"><a href>NFL</a></li>
						<li class="menu-item"><a href>College Football</a></li>
						<li class="menu-item"><a href>Soccer</a></li>
						<li class="menu-item menu-item-has-children">
							<a href>More Sports</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href>Volleyball</a></li>
								<li class="menu-item"><a href>Tennis</a></li>
								<li class="menu-item menu-item-has-children">
									<a href>Even More</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href>Frisbee</a></li>
										<li class="menu-item"><a href>Golf</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="menu-item"><a href>Entertainment</a></li>
				<li class="menu-item"><a href>Tech</a></li>
				<li class="menu-item"><a href>Gaming</a></li>
				<li class="menu-item"><a href>Shopping</a></li>
			</ul>

			<form class="module-header--search-form">
				<input type="search" placeholder="Search">
				<button name="submit"></button>
			</form>
		</div>
	</nav>
</header>
