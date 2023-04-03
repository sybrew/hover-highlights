<?php
/**
 * Plugin Name: Hover Highlights - Editor highlighting
 * Plugin URI: https://github.com/sybrew/hover-highlights
 * Description: Adds custom CSS to the Gutenberg editor to highlight blocks on hover and focus.
 * Version: 1.0.0
 * Author: Sybre Waaijer
 * Author URI: https://cyberwire.nl/
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Enqueues the CSS stylesheet for the plugin.
 *
 * @since 1.0.0
 */
function hover_highlights_output_focus_style() {
	echo <<<'CSS'
<style>
	.wp-block:hover:not(:has(:focus),:focus) {
		outline: 1px dashed #1e1e1e;
		box-shadow: 0 0 2px #e1e1e1;
	}
</style>
CSS;
}
add_action( 'enqueue_block_editor_assets', 'hover_highlights_output_focus_style' );
