<?php
/**
 * Add custom pages, post and cpts.
 *
 * @package QuickPages.
 */

/**
 * Add custom pages, post and cpts.
 */
class Pages {

	/**
	 * Initialize the class functions.
	 *
	 * @return void
	 */
	public function register() {
		add_action( 'admin_head', [ $this, 'quick_pages_button' ] );
	}

	/**
	 * Add languages path to load the translations.
	 *
	 * @return void
	 */
	public function quick_pages_button() {
		global $current_screen;
		// Not our post type, exit earlier
		// You can remove this if condition if you don't have any specific post type to restrict to.
		if ( empty( $current_screen->post_type ) ) {
			return;
		}

		wp_enqueue_script( 'quick-pages', QUICK_PAGES_URL . '/assets/build/js/main.js', array( 'jquery' ), QUICK_PAGES_VERSION, true );
	}

}


$pages = new Pages();
$pages->register();
