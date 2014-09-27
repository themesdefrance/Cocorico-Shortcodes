<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( '_WP_Editors' ) )
    require( ABSPATH . WPINC . '/class-wp-editor.php' );

function coco_shortcodes_tinymce_translation() {
    $strings = array(
    	// Column shortcode strings
    	'column'				=> _x('Column', 'tinymce button label', 'cocoshortcodes'),
        'column_add'			=> _x('Add a column', 'tinymce popup title', 'cocoshortcodes'),
        'column_size'			=> _x('Size', 'tinymce popup attribute label', 'cocoshortcodes'),
        'column_size_att'		=> _x('size', 'shortcode attribute name', 'cocoshortcodes'),
        'column_one_half'		=> _x('one_half', 'shortcode attribute value', 'cocoshortcodes'),
        'column_one_third'		=> _x('one_third', 'shortcode attribute value', 'cocoshortcodes'),
        'column_two_thirds'		=> _x('two_thirds', 'shortcode attribute value', 'cocoshortcodes'),
        'column_one_fourth'		=> _x('one_fourth', 'shortcode attribute value', 'cocoshortcodes'),
        'column_three_fourths'	=> _x('three_fourths', 'shortcode attribute value', 'cocoshortcodes'),
        'column_position'		=> _x('Position', 'tinymce popup attribute label', 'cocoshortcodes'),
        'column_position_att'	=> _x('position', 'shortcode attribute name', 'cocoshortcodes'),
        'column_first'			=> _x('First', 'tinymce popup select label', 'cocoshortcodes'),
        'column_first_value'	=> _x('first', 'shortcode attribute value', 'cocoshortcodes'),
        'column_middle'			=> _x('Middle', 'tinymce popup select label', 'cocoshortcodes'),
        'column_middle_value'	=> _x('middle', 'shortcode attribute value', 'cocoshortcodes'),
        'column_last'			=> _x('Last', 'tinymce popup select label', 'cocoshortcodes'),
        'column_last_value'		=> _x('last', 'shortcode attribute value', 'cocoshortcodes'),
        'column_content'		=> _x('Content', 'tinymce popup input label', 'cocoshortcodes'),
        'column_shortcode'		=> _x('cocorico_column', 'shortcode name', 'cocoshortcodes'),
        // Column shortcode strings
        'message'				=> _x('Message box', 'tinymce button label', 'cocoshortcodes'),
        'message_add'			=> _x('Add a message box', 'tinymce popup title', 'cocoshortcodes'),
        'message_type'			=> _x('Type', 'tinymce popup attribute label', 'cocoshortcodes'),
        'message_type_att'		=> _x('type', 'shortcode attribute name', 'cocoshortcodes'),
        'message_info'			=> _x('Info', 'tinymce popup select label', 'cocoshortcodes'),
        'message_info_value'	=> _x('info', 'shortcode attribute value', 'cocoshortcodes'),
        'message_alert'			=> _x('Alert', 'tinymce popup select label', 'cocoshortcodes'),
        'message_alert_value'	=> _x('alert', 'shortcode attribute value', 'cocoshortcodes'),
        'message_error'			=> _x('Error', 'tinymce popup select label', 'cocoshortcodes'),
        'message_error_value'	=> _x('error', 'shortcode attribute value', 'cocoshortcodes'),
        'message_success'		=> _x('Success', 'tinymce popup select label', 'cocoshortcodes'),
        'message_success_value'	=> _x('success', 'shortcode attribute value', 'cocoshortcodes'),
        'message_content'		=> _x('Content', 'tinymce popup input label', 'cocoshortcodes'),
        'message_shortcode'		=> _x('cocorico_message', 'shortcode name', 'cocoshortcodes'),
        

    );
    $locale = _WP_Editors::$mce_locale;
    $translated = 'tinyMCE.addI18n("' . $locale . '.coco_shortcodes_tinymce", ' . json_encode( $strings ) . ");\n";

     return $translated;
}

$strings = coco_shortcodes_tinymce_translation();