<?php

if ( ! defined( 'ABSPATH' ) ) exit;

// Shortcode Column generator
if(!function_exists('coco_shortcodes_column')){
	function coco_shortcodes_column($atts, $content = null) {
		
		extract(shortcode_atts(array(
			__('size', 'cocoshortcodes') => '',
			__('position', 'cocoshortcodes') => ''
		), $atts));
		
		$size = ${__('size', 'cocoshortcodes')};
		$position = ${__('position', 'cocoshortcodes')};
		
		$classes = 'cs_column ';
		
		switch($size){
			case __('one_half', 'cocoshortcodes') :
				$classes .= 'cs_one_half';
			break;
			case __('one_third', 'cocoshortcodes') :
				$classes .= 'cs_one_third';
			break;
			case __('two_thirds', 'cocoshortcodes') :
				$classes .= 'cs_two_thirds';
			break;
			case __('one_fourth', 'cocoshortcodes') :
				$classes .= 'cs_one_fourth';
			break;
			case __('three_fourths', 'cocoshortcodes') :
				$classes .= 'cs_three_fourths';
			break;
			default :
			 	$classes .= '';
		}
		
		switch($position){
			case __('first', 'cocoshortcodes') :
				$classes .= ' cs_column_first';
			break;
			case __('middle', 'cocoshortcodes') :
				$classes .= ' cs_column_middle';
			break;
			case __('last', 'cocoshortcodes') :
				$classes .= ' cs_column_last';
			break;
			default:
				$classes .= '';
		}
		
		$res = '<div class="'.$classes.'">';
		$res .= do_shortcode(wpautop($content));
		$res .= '</div>';
		
		$res .= ($position == __('last', 'cocoshortcodes') ? '<div class="cs_clear"></div>' : '');
		
		return $res;
	}
}

function coco_shortcodes_register(){
   add_shortcode(__('cocorico_column', 'cocoshortcodes'), 'coco_shortcodes_column');
}
add_action( 'init', 'coco_shortcodes_register');
