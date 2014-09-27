<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// Shortcode Column generator
if(!function_exists('coco_shortcodes_column')){
	function coco_shortcodes_column($atts, $content = null) {
		
		extract(shortcode_atts(array(
			_x('size', 'shortcode attribute name', 'cocoshortcodes') => '',
			_x('position', 'shortcode attribute name', 'cocoshortcodes') => ''
		), $atts));
		
		$size = ${_x('size', 'shortcode attribute name', 'cocoshortcodes')};
		$position = ${_x('position', 'shortcode attribute name', 'cocoshortcodes')};
		
		$classes = 'cs_column ';
		
		switch($size){
			case _x('one_half', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_one_half';
			break;
			case _x('one_third', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_one_third';
			break;
			case _x('two_thirds', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_two_thirds';
			break;
			case _x('one_fourth', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_one_fourth';
			break;
			case _x('three_fourths', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_three_fourths';
			break;
			default :
			 	$classes .= '';
		}
		
		switch($position){
			case _x('first', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_column_first';
			break;
			case _x('middle', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_column_middle';
			break;
			case _x('last', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_column_last';
			break;
			default:
				$classes .= '';
		}
		
		$res = '<div class="'.$classes.'">';
		$res .= do_shortcode(wpautop($content));
		$res .= '</div>';
		
		$res .= ($position == _x('last', 'shortcode attribute name', 'cocoshortcodes') ? '<div class="cs_clear"></div>' : '');
		
		return $res;
	}
}

// Shortcode Message generator
if (!function_exists('coco_shortcodes_message')){
	function coco_shortcodes_message($atts, $content = null){
		
		extract(shortcode_atts(array(
			_x('type', 'shortcode attribute name', 'cocoshortcodes') => '',
		), $atts));
		
		$type = ${_x('type', 'shortcode attribute name', 'cocoshortcodes')};
		
		$classes = 'cs_message ';
		
		switch($type){
			case _x('info', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_info';
			break;
			case _x('alert', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_alert';
			break;
			case _x('error', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_error';
			break;
			case _x('success', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_success';
			break;
			default :
			 	$classes .= '';
		}
		
		$res = '<div class="'.$classes.'">';
		$res .= do_shortcode(wpautop($content));
		$res .= '</div>';
		return $res;
	}
}

function coco_shortcodes_register(){
   add_shortcode(_x('cocorico_column', 'shortcode name', 'cocoshortcodes'), 'coco_shortcodes_column');
   add_shortcode(_x('cocorico_message', 'shortcode name', 'cocoshortcodes'), 'coco_shortcodes_message');
}
add_action( 'init', 'coco_shortcodes_register');


