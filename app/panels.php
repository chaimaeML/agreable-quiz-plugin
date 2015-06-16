<?php namespace SLM_QuizPlugin;

/*
 * Although we're in the Herbert panel file, we're not using any built in
 * panel functionality because you have to write you're own HTML forms and
 * logic. We're using ACF instead but seems sensible to leave ACF logic in
 * here (??).
 */

acf_add_options_sub_page(array(
  'page_title'  => 'Quiz Style Settings',
  'menu_title'  => 'Quiz Settings',
  'parent_slug' => 'edit.php?post_type=quiz',
));

if( function_exists('register_field_group') ):

register_field_group(array (
  'key' => 'group_quiz_plugin',
  'title' => 'Display Settings',
  'fields' => array (
    array (
      'key' => 'quiz_plugin_field_quiz_primary_color',
      'label' => 'Primary Colour',
      'name' => 'quiz_primary_colour',
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
      'key' => 'quiz_plugin_field_quiz_secondary_plugin',
      'label' => 'Secondary Colour',
      'name' => 'quiz_secondary_colour',
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
      'key' => 'quiz_plugin_field_quiz_font_family',
      'label' => 'Font Family',
      'name' => 'quiz_font_family',
      'prefix' => '',
      'type' => 'text',
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
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'quiz_plugin_field_quiz_extra_css',
      'label' => 'Extra CSS',
      'name' => 'quiz_extra_css',
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
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options-quiz-settings',
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
