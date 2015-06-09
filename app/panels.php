<?php namespace SLM_QuizPlugin;

/** @var \Herbert\Framework\Panel $panel */

$panel->add([
    'type'   => 'wp-sub-panel',
    'parent' => 'edit.php?post_type=quiz',
    'as'     => 'quizSubpanel',
    'title'  => 'Quiz Settings',
    'slug'   => 'quiz-settings',
    'uses'   => __NAMESPACE__ . '\Controllers\PanelController@settings'
]);
