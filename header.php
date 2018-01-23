<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMPConf
 */

$description = get_bloginfo( 'description', 'display' );
?>
<!doctype html>
<html amp <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ampconf' ); ?></a>

	<header class="wrap wrap--header wrap--header__menu-hidden" [class]="mobileMenu ? 'wrap wrap--header' : 'wrap wrap--header wrap--header__menu-hidden'">

		<div class="wrap__item wrap__item--branding">
			<<?php ampconf_branding_tag(); ?> class="wrap__item--branding-title">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php endif; ?>
			</<?php ampconf_branding_tag(); ?>>

			<?php if ( $description || is_customize_preview() ) : ?>
				<p class="wrap__item--branding-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>

			<button class="wrap__item--menu-toggle" on="tap:AMP.setState( { mobileMenu: ! mobileMenu } )" aria-controls="primary-menu" aria-expanded="false"></button>
		</div>

		<nav class="wrap__item wrap__item--menu">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'header',
						'menu_id'        => false,
					)
				);
			?>

			<div class="wrap__item--search">
				<?php get_search_form(); ?>
			</div>
		</nav>
	</header>

	<div id="content" class="wrap">
