<?php
/**
 * Plugin Name: Hover Highlights - Editor highlighting
 * Plugin URI: https://github.com/sybrew/hover-highlights
 * Description: Adds highlighting on hover and a distraction-free experience on focus for the Gutenberg/Block Editor.
 * Version: 1.1.0
 * Author: Sybre Waaijer
 * Author URI: https://cyberwire.nl/
 * License: GPLv3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Requires at least: 5.8
 * Requires PHP: 7.3.0
 *
 * @package Hover_Highlights
 */

namespace Hover_Highlights;

\defined( 'ABSPATH' ) or exit;

/**
 * Hover Highlights plugin
 * Copyright (C) 2023 - 2025 Sybre Waaijer, CyberWire B.V. (https://cyberwire.nl/)
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

\add_filter( 'block_editor_settings_all', __NAMESPACE__ . '\\add_hover_style' );
/**
 * Outputs the CSS style for the hover highlight effect in the Block Editor.
 *
 * @since 1.0.0
 * @since 1.1.0 Now returns the modified editor settings instead of echoing the CSS.
 *
 * @param array $editor_settings An array containing the current Editor settings.
 * @return array Modified editor settings with the added custom CSS style.
 */
function add_hover_style( $editor_settings ) {

	$editor_settings['styles'][] = [
		'css' => <<<'CSS'
			.wp-block:hover:not(:has(:focus),:focus) {
				outline: 1px dashed #1e1e1e;
				box-shadow: 0 0 2px #e1e1e1
			}
		CSS,
	];

	return $editor_settings;
}
