<?php
$widget_config = array (
    'key' => 'widget_quiz',
    'name' => 'quiz',
    'label' => 'Quiz',
    'display' => 'block',
    'sub_fields' => array (
        array (
            'key' => 'widget_quiz_quiz_post',
            'label' => 'Select a Quiz',
            'name' => 'quiz_post',
            'prefix' => '',
            'type' => 'post_object',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array (
                0 => 'quiz',
            ),
            'taxonomy' => '',
            'allow_null' => 0,
            'multiple' => 0,
            'return_format' => 'object',
            'ui' => 1,
        ),
    ),
    'min' => '',
    'max' => '',
);

$widget_config["content-types"] = array('post'); // section, article
$widget_config["content-sizes"] = array('main'); // main, main-full-bleed, sidebar
