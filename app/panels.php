<?php namespace AgreableQuizPlugin;

use AgreableQuizPlugin\Helper;
// $ns = Helper::get('agreable_namespace');
$ns = 'agreable_quiz';

/*
 * Although we're in the Herbert panel file, we're not using any built in
 * panel functionality because you have to write you're own HTML forms and
 * logic. We're using ACF instead but seems sensible to leave ACF logic in
 * here (??).
 */

acf_add_options_sub_page(array(
  'page_title'  => 'Style Settings',
  'menu_title'  => 'Quiz Settings',
  'parent_slug' => 'edit.php?post_type=quiz',
));

// Constructed using (lowercased and hyphenated) 'menu_title' from above.
$options_page_name = 'acf-options-quiz-settings';

if( function_exists('register_field_group') ):

register_field_group(array (
  'key' => 'group_'.$ns.'_plugin',
  'title' => 'Display Settings',
  'fields' => array (
    array (
      'key' => $ns.'_plugin_button_bg_colour',
      'label' => 'Button Background',
      'name' => $ns.'_button_bg_colour',
      'prefix' => '',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50%',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#ff00ff',
    ),
    array (
      'key' => $ns.'_plugin_button_bg_colour_hover',
      'label' => 'Button Background Hover',
      'name' => $ns.'_button_bg_colour_hover',
      'prefix' => '',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50%',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#000',
    ),
    array (
      'key' => $ns.'_plugin_button_text_colour',
      'label' => 'Button Text',
      'name' => $ns.'_button_text_colour',
      'prefix' => '',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50%',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#ffffff',
    ),
    array (
      'key' => $ns.'_plugin_button_text_colour_hover',
      'label' => 'Button Text Hover',
      'name' => $ns.'_button_text_colour_hover',
      'prefix' => '',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50%',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#ffffff',
    ),
    array (
      'key' => $ns.'_plugin_share_bg_colour',
      'label' => 'Share Background',
      'name' => $ns.'_share_bg_colour',
      'prefix' => '',
      'type' => 'color_picker',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '#000',
    ),
    array (
      'key' => $ns.'_plugin_primary_font_family',
      'label' => 'Primary Font Family',
      'name' => $ns.'_primary_font_family',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50%',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => $ns.'_plugin_secondary_font_family',
      'label' => 'Secondary Font Family',
      'name' => $ns.'_secondary_font_family',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '50%',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => $ns.'_plugin_extra_css',
      'label' => 'Extra CSS',
      'name' => $ns.'_free_text_css',
      'prefix' => '',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => $ns.'_plugin_facebook_app_id',
      'label' => 'Facebook App ID',
      'name' => $ns.'_facebook_app_id',
      'prefix' => '',
      'type' => 'text',
      'instructions' => 'If not present then plugin will use JavaScript variable \'FB_APP_ID\' which is set in parent theme. ',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => $options_page_name,
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
));

endif;
