<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( '_WP_Editors' ) )
    require( ABSPATH . WPINC . '/class-wp-editor.php' );

function coco_shortcodes_tinymce_translation() {
    $strings = array(
    	'column'			=> __('Column', 'cocoshortcodes'),
        'column_add'		=> __('Add a column', 'cocoshortcodes'),
        'column_howto'		=> __('How to add a column process', 'cocoshortcodes'),
        'column_size'		=> __('Size', 'cocoshortcodes'),
        'column_position'	=> __('Position', 'cocoshortcodes'),
        'column_first'		=> __('First', 'cocoshortcodes'),
        'column_middle'		=> __('Middle', 'cocoshortcodes'),
        'column_last'		=> __('Last', 'cocoshortcodes'),
        'column_content'	=> __('Content', 'cocoshortcodes'),

    );
    $locale = _WP_Editors::$mce_locale;
    $translated = 'tinyMCE.addI18n("' . $locale . '.coco_shortcodes_tinymce", ' . json_encode( $strings ) . ");\n";

     return $translated;
}

$strings = coco_shortcodes_tinymce_translation();