<?php
/**
 * AMPConf static site-header template.
 *
 * @package AMPConf
 */

?>

<header class="wrap wrap--header wrap--header__menu-hidden" [class]="mobileMenu ? 'wrap wrap--header' : 'wrap wrap--header wrap--header__menu-hidden'">

	<div class="wrap__item wrap__item--branding">
		<h1 class="wrap__item--branding-title"><a href>Brand</a></h1>
		<p class="wrap__item--branding-description">Previewing Another WordPress Blog</p>
		<button class="wrap__item--menu-toggle" on="tap:AMP.setState( { mobileMenu: ! mobileMenu } )"></button>
	</div>

	<nav class="wrap__item wrap__item--menu">
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
			<li class="menu-item menu-item-search-form">
				<form method="GET" action="https://example.com/search" target="_top">
					<input type="search" placeholder="Search">
					<button name="submit"></button>
				</form>
			</li>
		</ul>
	</nav>
</header>
