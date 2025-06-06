=== Hover Highlights - Editor highlighting ===
Contributors: Cybr
Donate link: https://github.com/sponsors/sybrew
Tags: blocks, accessibility, a11y, Gutenberg, Block Editor
Requires at least: 5.0
Tested up to: 6.8
Requires PHP: 7.3.0
Stable tag: 1.1.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Adds highlighting on hover with a distraction-free experience for the Gutenberg/Block Editor.

== Description ==

Hover Highlights is a simple WordPress plugin that adds a subtle highlight effect to the Gutenberg/Block Editor. When you hover over a block, it gets highlighted with a dashed outline and a box-shadow. The highlight disappears when you focus on the block to reduce distraction.

This plugin is ideal for content creators who want to visually distinguish individual blocks within the Block Editor.

_The code and this readme are mostly written by ChatGPT._

== Installation ==

1. Upload the `hover-highlights` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why doesn't the highlight show up? =

The highlight effect only appears when you hover over a block. If you're not seeing the highlight, try moving your mouse over a block.

= Is this plugin compatible with other Block Editor plugins? =

Yes, this plugin should work with most other Block Editor plugins.

== Changelog ==

= 1.1.0 =

* Fixed an issue where styles were outputted outside the intended scope, which caused the browser to enter in quirks mode.
* Added support for Full Site Editing (FSE).
* Now requires WordPress 5.8 or higher, instead of 5.0.

= 1.0.0 =

* Initial release
