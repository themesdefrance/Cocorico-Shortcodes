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

// Load Styles
function coco_shortcodes_load_style() {
	wp_enqueue_style( 'coco-social', plugins_url( '/style.css', __FILE__ ), false, '1.0.0', 'screen' );
}
add_action( 'wp_enqueue_scripts', 'coco_shortcodes_load_style' );

// Load translations
function coco_shortcodes_load_textdomain() {
	$domain = 'cocoshortcodes';
	$locale = apply_filters( 'plugin_locale', get_locale(), $domain );
	
	load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
	load_plugin_textdomain( $domain, FALSE, basename( dirname( __FILE__ ) ) . '/lang/' );
}
add_action( 'init', 'coco_shortcodes_load_textdomain' );

// Load Styles
function coco_social_load_style() {
	wp_enqueue_style( 'coco-social', plugins_url( '/style.css', __FILE__ ), false, null, 'screen' );
}
add_action( 'wp_enqueue_scripts', 'coco_social_load_style' );

// Shortcodes Script Loading
if (!function_exists('coco_shortcodes_enqueue')){
	function coco_shortcodes_enqueue(){

		wp_register_script('coco_shortcodes', plugins_url('/js/cocorico-shortcodes.js' , __FILE__) , array('jquery'), null , true);
		wp_enqueue_script('coco_shortcodes');
	}
}
add_action('wp_enqueue_scripts', 'coco_shortcodes_enqueue');

// Add the TinyMCE Menu Button
if(!function_exists('coco_shortcodes_add_tinymce')){
	function coco_shortcodes_add_tinymce() {
		global $typenow;
		if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return ;
		
	    add_filter( 'mce_external_plugins', 'coco_shortcodes_add_tinymce_plugin' );
	    // Add button to line 1 form WP TinyMCE
	    add_filter( 'mce_buttons', 'coco_shortcodes_add_tinymce_button' );
	}
}
add_action( 'admin_head', 'coco_shortcodes_add_tinymce' );

// Load TinyMCE plugin
if(!function_exists('coco_shortcodes_add_tinymce_plugin')){
	function coco_shortcodes_add_tinymce_plugin( $plugin_array ) {
	
	    $plugin_array['coco_shortcode_drop'] = plugins_url('/js/editor-plugin.js' , __FILE__) ;
	    return $plugin_array;
	}
}

// Create shortcode button
if(!function_exists('coco_shortcodes_add_tinymce_button')){
	function coco_shortcodes_add_tinymce_button( $buttons ) {
	
	    array_push( $buttons, 'coco_shortcodes_button' );
	    return $buttons;
	}
}


///////////////////
// Shortcodes
///////////////////


// Column generator
if(!function_exists('coco_shortcodes_column')){
	function coco_shortcodes_column($atts, $content = null) {
		
		extract(shortcode_atts(array(
			__('size', 'cocoshortcodes') => '',
			__('position', 'cocoshortcodes') => ''
		), $atts));
		
		$size = ${__('size', 'cocoshortcodes')};
		$position = ${__('position', 'cocoshortcodes')};
		
		$classes = 'cs_column cs_' . $size;
		
		switch($position){
			case 'first' :
				$classes .= ' cs_column_first';
			break;
			case 'middle' :
				$classes .= ' cs_column_middle';
			break;
			case 'last' :
				$classes .= ' cs_column_last';
			break;
			default:
				$classes .= '';
		}
		
		$res = '<div class="'.$classes.'">';
		$res .= do_shortcode(wpautop($content));
		$res .= '</div>';
		
		$res .= ($position == 'last' ? '<div class="cs_clear"></div>' : '');
		
		return $res;
	}
	
	add_shortcode(__('cocorico_column','cocoshortcodes'), 'coco_shortcodes_column');
}



















