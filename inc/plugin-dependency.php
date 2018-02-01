<?php
/**
 * AMP plugin dependency.
 *
 * @since 0.1
 * @package AMPConf
 */

/**
 * AMP Plugin dependency notice.
 *
 * @since 0.1
 */
function ampconf_plugin_dependency_notice() {
	$filepath = 'amp/amp.php';
	$updates  = get_site_transient( 'update_plugins' );

	// Don't display notice on the installer screen.
	if ( 'update' === get_current_screen()->base ) {
		return;
	}

	if ( ! array_key_exists( $filepath, get_plugins() ) ) {
		$slug    = 'amp';
		$path    = 'update.php';
		$button  = __( 'Install', 'default' );
		$message = __( 'The AMPConf theme requires the AMP plugin to be installed to render fully valid AMP. But it will still function without it.', 'ampconf' );
		$params  = array(
			'action'   => 'install-plugin',
			'plugin'   => $slug,
			'_wpnonce' => wp_create_nonce( "install-plugin_{$slug}" ),
		);
	} elseif ( ! is_plugin_active( $filepath ) ) {
		$path    = 'plugins.php';
		$button  = __( 'Activate', 'default' );
		$message = __( 'The AMPConf theme requires the AMP plugin to be activated to render fully valid AMP. But it will still function without it.', 'ampconf' );
		$params  = array(
			'action'   => 'activate',
			'plugin'   => $filepath,
			'_wpnonce' => wp_create_nonce( "activate-plugin_{$filepath}" ),
		);
	} elseif ( isset( $updates->response[ $filepath ]->new_version ) ) {
		$path    = 'update.php';
		$button  = __( 'Update', 'default' );
		$message = __( 'A new version of the AMP plugin is available, please upgrade.', 'ampconf' );
		$params  = array(
			'action'   => 'upgrade-plugin',
			'plugin'   => $filepath,
			'_wpnonce' => wp_create_nonce( "upgrade-plugin_{$filepath}" ),
		);
	}

	if ( isset( $message ) ) {
		?>
		<div class="notice notice-warning">
			<p><?php echo esc_html( $message ); ?></p>
			<p>
				<a href="<?php echo esc_url( add_query_arg( $params, self_admin_url( $path ) ) ); ?>" class="button button-primary"><?php echo esc_html( $button ); ?></a>
			</p>
		</div>
		<?php
	}
}
add_action( 'admin_notices', 'ampconf_plugin_dependency_notice' );
