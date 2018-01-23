<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AMPConf
 */

?>

<footer class="wrap wrap--full-width wrap--footer">
	<nav class="wrap__item wrap__item--footer-menu">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_id'        => false,
					'depth'          => 1,
				)
			);
		?>
	</nav>

	<p class="wrap__item wrap__item--footer-copyright">
		<?php printf( '&copy; %s', esc_html( date( 'Y' ) ) ); ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</p>
</footer>

<?php wp_footer(); ?>

</body>
</html>
