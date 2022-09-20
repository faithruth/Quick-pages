<?php
/**
 * Things that need to happen on the initial plugin install.
 *
 * @package QuickPages.
 */

/**
 * Things that need to happen on the initial plugin install.
 */
class QuickPagesInit {

	/**
	 * Initialize the class functions.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'init', array( $this, 'load_textdomain' ) );
	}

	/**
	 * Add languages path to load the translations.
	 *
	 * @return void
	 */
	public function load_textdomain() {
		load_plugin_textdomain( 'quick-pages', false, QUICK_PAGES_BASENAME . '/languages' );
	}

}


$quick_pages_init = new QuickPagesInit();
$quick_pages_init->register();
