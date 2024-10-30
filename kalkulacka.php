<?php
/**
 * Plugin Name: Kalkulačka odchodu do důchodu
 * Plugin URI: 
 * Description: Během chvíle vypočítá věk, ve kterém půjdete do důchodu i konkrétní den.
 * Version: 0.1
 * Author: Internet Info, s.r.o.
 * Author URI: http://www.iinfo.cz/
 */


if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}


define( 'KALKULACKA_ODCHODU_DO_DUCHODU_VERSION', '0.1' );

define( 'KALKULACKA_ODCHODU_DO_DUCHODU_REQUIRED_WP_VERSION', '4.2' );

define( 'KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN', __FILE__ );

define( 'KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN_DIR', untrailingslashit( dirname( KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN ) ) );

define( 'KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN_URL', untrailingslashit( plugins_url( '', KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN ) ) );

require_once KALKULACKA_ODCHODU_DO_DUCHODU_PLUGIN_DIR . '/settings.php';
