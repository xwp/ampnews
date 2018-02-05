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

	<div id="page" class="" [class]="ampConf.mobileMenu ? 'no-scroll' : ''">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ampconf' ); ?></a>

		<header class="site-header" [class]="ampConf.mobileMenu ? 'site-header is-menu-expanded' : 'site-header'">

			<div class="site-header__branding">
				<<?php ampconf_branding_tag(); ?> class="site-header__title">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
				</<?php ampconf_branding_tag(); ?>>

				<?php if ( $description || is_customize_preview() ) : ?>
					<p class="site-header__description"><?php echo esc_html( $description ); ?></p>
				<?php endif; ?>

				<button
						class="site-header__menu-toggle"
						on="tap:AMP.setState( { ampConf: { mobileMenu: ! ampConf.mobileMenu } } )"
						aria-controls="primary-menu"
						aria-expanded="false">
					<span class="screen-reader-text"><?php esc_html_e( 'Open menu', 'ampconf' ); ?></span>
				</button>

			</div>

			<nav class="site-header__nav">
				<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header',
							'menu_id'         => 'primary-menu',
							'menu_class'      => 'menu menu--header',
							'container_class' => 'site-header__menu',
						)
					);
				?>

				<div class="site-header__search">
					<?php get_search_form(); ?>
				</div>
			</nav>
		</header>

		<div id="content">
