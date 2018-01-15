<?php
/**
 * Custom Meta Box Boilerplate Plugin
 *
 * @package     ChristophHerr\TeamMemberBiographies
 * @author      christophherr
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Custom Meta Box Boilerplate
 * Plugin URI:  https://github.com/christophherr/custom-meta-box
 * Description: Custom Meta Box Boilerplate
 * Version:     1.0.0
 * Author:      christophherr
 * Author URI:  https://www.christophherr.com
 * Text Domain: custom-meta-box
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace ChristophHerr\CustomMetaBox;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

/**
 * Setup the plugin's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$plugin_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
	}

	define( 'CUSTOM_META_BOX_URL', $plugin_url );
	define( 'CUSTOM_META_BOX_DIR', plugin_dir_path( __FILE__ ) );
}

/**
 * Launch the plugin
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_constants();
	require CUSTOM_META_BOX_DIR . 'src/subtitle-metabox.php';
	require CUSTOM_META_BOX_DIR . 'src/portfolio-metabox.php';
	require CUSTOM_META_BOX_DIR . 'src/output.php';
}
launch();
