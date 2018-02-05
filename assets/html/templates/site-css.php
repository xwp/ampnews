<?php
/**
 * AMPConf site global CSS.
 *
 * @package AMPConf
 */

// @codingStandardsIgnoreStart

ob_start();
require '../dist/css/main.css';
$style = ob_get_clean();
$style = str_replace( '@charset "UTF-8";', '', $style );
echo $style;
