<?php
/**
 * Plugin Name: Quick Pages
 * Plugin URI: https://github.com/faithruth/quick-pages
 * Author: Imokol Faith Ruth
 * Author URI: https://github.com/faithruth
 * Description: Create posts, pages and cpts with out redirecting to editor page.
 * Version: 1.0.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: quick-pages
 *
 *
 * @package QuickPages.
 */

// add basic plugin security.
defined( 'ABSPATH' ) || die;

if ( ! defined( 'QUICK_PAGES_FILE' ) ) {
	define( 'QUICK_PAGES_FILE', __FILE__ );
}
if ( ! defined( 'QUICK_PAGES_VERSION' ) ) {
	define( 'QUICK_PAGES_VERSION', get_file_data( __FILE__, array( 'Version' ) ) );
}
if ( ! defined( 'QUICK_PAGES_DIR' ) ) {
	define( 'QUICK_PAGES_DIR', dirname( __FILE__ ) );
}
if ( ! defined( 'QUICK_PAGES_PATH' ) ) {
	define( 'QUICK_PAGES_PATH', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'QUICK_PAGES_URL' ) ) {
	define( 'QUICK_PAGES_URL', plugin_dir_url( __FILE__ ) );
}
if ( ! defined( 'QUICK_PAGES_BASENAME' ) ) {
	define( 'QUICK_PAGES_BASENAME', plugin_basename( __FILE__ ) );
}

// Require once the project specific functions.
if ( file_exists( dirname( __FILE__ ) . '/helpers/functions.php' ) ) {
	require_once dirname( __FILE__ ) . '/helpers/functions.php';
}
// Do the initial plugin stuff on activation.
require_once dirname( __FILE__ ) . '/includes/class-plugin-initial-setup.php';
require_once dirname( __FILE__ ) . '/includes/class-pages.php';
