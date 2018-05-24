<?php
/**
 * AMPNews social share bar.
 *
 * @package AMPNews
 */

// @todo Integrate with Jetpack sharing extension.
?>

<div class="social-share">
	<span class="social-share__title"><?php esc_html_e( 'Share', 'ampconf' ); ?></span>
	<div class="social-share__buttons">
		<amp-social-share type="facebook" data-param-app_id="" width="32" height="32"></amp-social-share>
		<amp-social-share type="gplus" width="32" height="32"></amp-social-share>
		<amp-social-share type="twitter" width="32" height="32"></amp-social-share>
	</div>
</div>
