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