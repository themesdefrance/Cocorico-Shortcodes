<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// Column Shortcode generator
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

// Message Shortcode generator
if (!function_exists('coco_shortcodes_message')){
	function coco_shortcodes_message($atts, $content = null){
		
		extract(shortcode_atts(array(
			_x('type', 'shortcode attribute name', 'cocoshortcodes') => '',
		), $atts));
		
		$type = ${_x('type', 'shortcode attribute name', 'cocoshortcodes')};
		
		$classes = 'cs_message ';
		
		switch($type){
			case _x('info', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_message_info';
			break;
			case _x('alert', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_message_alert';
			break;
			case _x('error', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_message_error';
			break;
			case _x('success', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= 'cs_message_success';
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

// Button Shortcode generator
if (!function_exists('coco_shortcodes_button')){
	function coco_shortcodes_button($atts){
		
		extract(shortcode_atts(array(
			_x('url', 'shortcode attribute name', 'cocoshortcodes') => 'https://www.themesdefrance.fr',
			_x('target', 'shortcode attribute name', 'cocoshortcodes') => '',
			_x('label', 'shortcode attribute name', 'cocoshortcodes') => _x('Button', 'shortcode attribute value', 'cocoshortcodes'),
			_x('size', 'shortcode attribute name', 'cocoshortcodes') => _x('medium', 'shortcode attribute value', 'cocoshortcodes'),
			_x('align', 'shortcode attribute name', 'cocoshortcodes') => _x('left', 'shortcode attribute value', 'cocoshortcodes'),
			_x('color', 'shortcode attribute name', 'cocoshortcodes') => ''
		), $atts));
		
		$url 	= ${_x('url', 'shortcode attribute name', 'cocoshortcodes')};
		$target = ${_x('target', 'shortcode attribute name', 'cocoshortcodes')};
		$label 	= ${_x('label', 'shortcode attribute name', 'cocoshortcodes')};
		$size 	= ${_x('size', 'shortcode attribute name', 'cocoshortcodes')};
		$align 	= ${_x('align', 'shortcode attribute name', 'cocoshortcodes')};
		$color 	= ${_x('color', 'shortcode attribute name', 'cocoshortcodes')};
		
		$target = ($target == '_blank' ? ' target="_blank" ' : '');
		
		$classes = 'cs_button';
		
		switch($size){
			case _x('small', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_small';
			break;
			case _x('medium', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_medium';
			break;
			case _x('large', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_large';
			break;
			default :
			 	$classes .= ' cs_button_medium';
		}
		
		switch($align){
			case _x('left', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_left';
			break;
			case _x('center', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_center';
			break;
			case _x('right', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_right';
			break;
			default :
			 	$classes .= ' cs_button_left';
		}
		
		switch($color){
			case _x('purple', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_purple';
			break;
			case _x('blue', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_blue';
			break;
			case _x('turquoise', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_turquoise';
			break;
			case _x('green', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_green';
			break;
			case _x('yellow', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_yellow';
			break;
			case _x('orange', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_orange';
			break;
			case _x('red', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_red';
			break;
			case _x('pink', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_pink';
			break;
			case _x('grey', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_grey';
			break;
			case _x('nightblue', 'shortcode attribute value', 'cocoshortcodes') :
				$classes .= ' cs_button_nightblue';
			break;
			default :
			 	$classes .= ' cs_button_grey';
		}
		
		$res = '<a href="' . $url . '" class="' . $classes . '"' . $target . '>';
		$res .= $label;
		$res .= '</a>';
		
		return $res;
	}
}

function coco_shortcodes_register(){
   add_shortcode(_x('cocorico_column', 'shortcode name', 'cocoshortcodes'), 'coco_shortcodes_column');
   add_shortcode(_x('cocorico_message', 'shortcode name', 'cocoshortcodes'), 'coco_shortcodes_message');
   add_shortcode(_x('cocorico_button', 'shortcode name', 'cocoshortcodes'), 'coco_shortcodes_button');
}
add_action( 'init', 'coco_shortcodes_register');


