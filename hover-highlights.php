<?php
/**
 * Plugin Name: Hover Highlights - Editor highlighting
 * Plugin URI: https://github.com/sybrew/hover-highlights
 * Description: Adds highlighting on hover and a distraction-free experience on focus for the Gutenberg/Block Editor.
 * Version: 1.0.0
 * Author: Sybre Waaijer
 * Author URI: https://cyberwire.nl/
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package Hover_Highlights
 */

namespace Hover_Highlights;

\defined( 'ABSPATH' ) or exit;

\add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\output_hover_style' );
/**
 * Outputs the CSS style for the hover highlight effect in the Block Editor.
 *
 * @since 1.0.0
 */
function output_hover_style() {
	echo <<<'HTML'
<style>
	.wp-block:hover:not(:has(:focus),:focus) {
		outline: 1px dashed #1e1e1e;
		box-shadow: 0 0 2px #e1e1e1
	}
</style>
HTML;
}
