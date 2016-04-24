<?php

/**
 * A library for adding an attachment field to an admin meta box
 */

require_once( __DIR__ . "/vendor/autoload.php" );

/**
 * Load all the plugin files and initialize appropriately
 *
 * @return void
 */
if ( !function_exists('attachment_helper_load') ) { // play nice
	function attachment_helper_load() {
		if ( defined('DOING_AJAX') && DOING_AJAX ) {
			\AttachmentHelper\Ajax_Handler::init();
		}
	}

	attachment_helper_load();
}
