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
        // Button shortcode strings
        'button'				=> _x('Button', 'tinymce button label', 'cocoshortcodes'),
        'button_add'			=> _x('Add a button', 'tinymce popup title', 'cocoshortcodes'),
        'button_url'			=> _x('URL', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_label'			=> _x('Label', 'tinymce popup attribute label', 'cocoshortcodes'),
        
        'button_link_target'	=> _x('URL Target', 'tinymce popup select label', 'cocoshortcodes'),
        'button_link_same'		=> _x('Auto', 'shortcode attribute value', 'cocoshortcodes'),
        'button_link_same_value'=> '',
        'button_link_other'		=> _x('New window', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_link_other_value'=> _x('_blank', 'tinymce popup select label', 'cocoshortcodes'),
        
        'button_style_label'	=> _x('Styling', 'shortcode attribute value', 'cocoshortcodes'),
        
        'button_size'			=> _x('Size', 'tinymce popup select label', 'cocoshortcodes'),
        'button_small'			=> _x('Small', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_small_value'	=> _x('small', 'tinymce popup select label', 'cocoshortcodes'),
        'button_medium'			=> _x('Medium', 'shortcode attribute value', 'cocoshortcodes'),
        'button_medium_value'	=> _x('medium', 'tinymce popup select label', 'cocoshortcodes'),
        'button_large'			=> _x('Large', 'tinymce popup select label', 'cocoshortcodes'),
        'button_large_value'	=> _x('large', 'shortcode attribute value', 'cocoshortcodes'),
        
        'button_align'			=> _x('Alignment', 'tinymce popup select label', 'cocoshortcodes'),
        'button_alignright'		=> _x('Right', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_alignright_value'=> _x('right', 'tinymce popup select label', 'cocoshortcodes'),
        'button_aligncenter'	=> _x('Center', 'shortcode attribute value', 'cocoshortcodes'),
        'button_aligncenter_value'=> _x('center', 'tinymce popup select label', 'cocoshortcodes'),
        'button_alignleft'		=> _x('Left', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_alignleft_value'=> _x('left', 'tinymce popup select label', 'cocoshortcodes'),
        
        'button_color'			=> _x('Color', 'shortcode attribute value', 'cocoshortcodes'),
        'button_grey'			=> _x('Grey', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_grey_value'		=> _x('grey', 'tinymce popup select label', 'cocoshortcodes'),
        'button_purple'			=> _x('Purple', 'tinymce popup select label', 'cocoshortcodes'),
        'button_purple_value'	=> _x('purple', 'shortcode attribute value', 'cocoshortcodes'),
        'button_blue'			=> _x('Blue', 'tinymce popup select label', 'cocoshortcodes'),
        'button_blue_value'		=> _x('blue', 'tinymce popup select label', 'cocoshortcodes'),
        'button_turquoise'		=> _x('Turquoise', 'shortcode attribute value', 'cocoshortcodes'),
        'button_turquoise_value'=> _x('turquoise', 'tinymce popup select label', 'cocoshortcodes'),
        'button_green'			=> _x('Green', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_green_value'	=> _x('green', 'tinymce popup select label', 'cocoshortcodes'),
        'button_yellow'			=> _x('Yellow', 'shortcode attribute value', 'cocoshortcodes'),
        'button_yellow_value'	=> _x('yellow', 'tinymce popup select label', 'cocoshortcodes'),
        'button_orange'			=> _x('Orange', 'tinymce popup attribute label', 'cocoshortcodes'),
        'button_orange_value'	=> _x('orange', 'tinymce popup select label', 'cocoshortcodes'),
        'button_red'			=> _x('Red', 'shortcode attribute value', 'cocoshortcodes'),
        'button_red_value'		=> _x('red', 'tinymce popup select label', 'cocoshortcodes'),
        'button_pink'			=> _x('Pink', 'shortcode attribute value', 'cocoshortcodes'),
        'button_pink_value'		=> _x('pink', 'tinymce popup select label', 'cocoshortcodes'),
        'button_nightblue'		=> _x('Night Blue', 'shortcode attribute value', 'cocoshortcodes'),
        'button_nightblue_value'=> _x('nightblue', 'tinymce popup select label', 'cocoshortcodes'),
        
        'button_url_att'		=> _x('url', 'shortcode attribute value', 'cocoshortcodes'),
        'button_target_att'		=> _x('target', 'tinymce popup select label', 'cocoshortcodes'),
        'button_size_att'		=> _x('size', 'shortcode attribute value', 'cocoshortcodes'),
        'button_align_att'		=> _x('align', 'tinymce popup select label', 'cocoshortcodes'),
        'button_color_att'		=> _x('color', 'shortcode attribute value', 'cocoshortcodes'),
        
        'button_shortcode'		=> _x('cocorico_button', 'tinymce popup select label', 'cocoshortcodes'),

    );
    $locale = _WP_Editors::$mce_locale;
    $translated = 'tinyMCE.addI18n("' . $locale . '.coco_shortcodes_tinymce", ' . json_encode( $strings ) . ");\n";

     return $translated;
}

$strings = coco_shortcodes_tinymce_translation();