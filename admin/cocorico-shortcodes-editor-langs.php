<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( '_WP_Editors' ) )
    require( ABSPATH . WPINC . '/class-wp-editor.php' );

function coco_shortcodes_tinymce_translation() {
    $strings = array(
    	'column'				=> __('Column', 'cocoshortcodes'),
        'column_add'			=> __('Add a column', 'cocoshortcodes'),
        'column_howto'			=> __('How to add a column process', 'cocoshortcodes'),
        'column_size'			=> __('Size', 'cocoshortcodes'),
        'column_size_att'		=> __('size', 'cocoshortcodes'),
        'column_one_half'		=> __('one_half', 'cocoshortcodes'),
        'column_one_third'		=> __('one_third', 'cocoshortcodes'),
        'column_two_thirds'		=> __('two_thirds', 'cocoshortcodes'),
        'column_one_fourth'		=> __('one_fourth', 'cocoshortcodes'),
        'column_three_fourths'	=> __('three_fourths', 'cocoshortcodes'),
        'column_position'		=> __('Position', 'cocoshortcodes'),
        'column_position_att'	=> __('position', 'cocoshortcodes'),
        'column_first'			=> __('First', 'cocoshortcodes'),
        'column_first_value'	=> __('first', 'cocoshortcodes'),
        'column_middle'			=> __('Middle', 'cocoshortcodes'),
        'column_middle_value'	=> __('middle', 'cocoshortcodes'),
        'column_last'			=> __('Last', 'cocoshortcodes'),
        'column_last_value'		=> __('last', 'cocoshortcodes'),
        'column_content'		=> __('Content', 'cocoshortcodes'),
        'column_shortcode'		=> __('cocorico_column', 'cocoshortcodes')

    );
    $locale = _WP_Editors::$mce_locale;
    $translated = 'tinyMCE.addI18n("' . $locale . '.coco_shortcodes_tinymce", ' . json_encode( $strings ) . ");\n";

     return $translated;
}

$strings = coco_shortcodes_tinymce_translation();