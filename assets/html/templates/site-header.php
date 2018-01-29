<?php
/**
 * AMPConf static site-header template.
 *
 * @package AMPConf
 */

?>

<header class="wrap wrap--header wrap--header__menu-hidden" [class]="mobileMenu ? 'wrap wrap--header' : 'wrap wrap--header wrap--header__menu-hidden'">

	<?php $wrap_item_modifier = isset( $has_separator ) ? '' : 'wrap__item--no-separator'; ?>
	<div class="wrap__item wrap__item--branding <?php echo $wrap_item_modifier; ?>">
		<h1 class="wrap__item--branding-title"><a href="home.php#development=1">Brand</a></h1>
		<p class="wrap__item--branding-description">Previewing Another WordPress Blog</p>
		<button class="wrap__item--menu-toggle" on="tap:AMP.setState( { mobileMenu: ! mobileMenu } )"></button>
	</div>

	<nav class="wrap__item wrap__item--menu">
		<ul class="menu">
			<li class="menu-item"><a href="category.php#development=1">News</a></li>
			<li class="menu-item menu-item-has-children">
				<a href="category.php#development=1">Sports</a>
				<ul class="sub-menu">
					<li class="menu-item"><a href="category.php#development=1">Odds</a></li>
					<li class="menu-item"><a href="category.php#development=1">Betting</a></li>
					<li class="menu-item"><a href="category.php#development=1">NFL</a></li>
					<li class="menu-item"><a href="category.php#development=1">College Football</a></li>
					<li class="menu-item"><a href="category.php#development=1">Soccer</a></li>
					<li class="menu-item menu-item-has-children">
						<a href="category.php#development=1">More Sports</a>
						<ul class="sub-menu">
							<li class="menu-item"><a href="category.php#development=1">Volleyball</a></li>
							<li class="menu-item"><a href="category.php#development=1">Tennis</a></li>
							<li class="menu-item menu-item-has-children">
								<a href="category.php#development=1">Even More</a>
								<ul class="sub-menu">
									<li class="menu-item"><a href="category.php#development=1">Frisbee</a></li>
									<li class="menu-item"><a href="category.php#development=1">Golf</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="menu-item"><a href="category.php#development=1">Entertainment</a></li>
			<li class="menu-item"><a href="category.php#development=1">Tech</a></li>
			<li class="menu-item"><a href="category.php#development=1">Gaming</a></li>
			<li class="menu-item"><a href="category.php#development=1">Shopping</a></li>
			<li class="menu-item menu-item-search-form">
			</li>
		</ul>
		<div class="wrap__item--search">
			<form method="GET" action="https://example.com/search" target="_top">
				<input type="search" placeholder="Search">
				<button name="submit"></button>
			</form>
		</div>
	</nav>
</header>
