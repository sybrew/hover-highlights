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
 * Requires at least: 5.0
 * Requires PHP: 7.3.0
 *
 * @package Hover_Highlights
 */

namespace Hover_Highlights;

\defined( 'ABSPATH' ) or exit;

/**
 * Hover Highlights plugin
 * Copyright (C) 2023 Sybre Waaijer, CyberWire B.V. (https://cyberwire.nl/)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License version 3 as published
 * by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

\add_action( 'admin_footer', __NAMESPACE__ . '\\output_hover_style' );
/**
 * Outputs the CSS style for the hover highlight effect in the Block Editor.
 *
 * @since 1.0.0
 */
function output_hover_style() {

	if ( ! \get_current_screen()->is_block_editor() ) return;

	echo <<<'HTML'
		<style id=hover-highlights-inline-css>
			.wp-block:hover:not(:has(:focus),:focus) {
				outline: 1px dashed #1e1e1e;
				box-shadow: 0 0 2px #e1e1e1
			}
		</style>
	HTML;
}
