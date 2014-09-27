<?php
/*
Plugin Name: Cocorico Shortcodes
Plugin URI: https://www.themesdefrance.fr/plugins/coco-shortcodes
Description: Add some shortcodes to enhance your theme
Version: 1.0.0
Author: Themes de France
Author URI: https://www.themesdefrance.fr
Text Domain: cocoshortcodes
Domain Path: /lang/
License: GPL v3

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// Load translations
function coco_shortcodes_load_textdomain() {
	$domain = 'cocoshortcodes';
	$locale = apply_filters( 'plugin_locale', get_locale(), $domain );
	
	load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
	load_plugin_textdomain( $domain, FALSE, basename( dirname( __FILE__ ) ) . '/lang/' );
}
add_action( 'init', 'coco_shortcodes_load_textdomain' );

// Load Styles
if (!function_exists('coco_shortcodes_load_style')){
	function coco_shortcodes_load_style() {
		wp_enqueue_style( 'coco-shortcodes', plugins_url( '/style.css', __FILE__ ), false, null, 'screen' );
	}
}
add_action( 'wp_enqueue_scripts', 'coco_shortcodes_load_style' );

// Shortcodes Script Loading
if (!function_exists('coco_shortcodes_enqueue')){
	function coco_shortcodes_enqueue(){

		wp_register_script('coco_shortcodes', plugins_url('/js/cocorico-shortcodes.js' , __FILE__) , array('jquery'), null , true);
		wp_enqueue_script('coco_shortcodes');
	}
}
add_action('wp_enqueue_scripts', 'coco_shortcodes_enqueue');

// Load TinyMce Button
require_once('admin/cocorico-shortcodes-editor.php');

// Load the magic :)
require_once('cocorico-shortcodes-library.php');



















