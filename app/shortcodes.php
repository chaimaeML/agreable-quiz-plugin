<?php namespace SLM_QuizPlugin;

/** @var \Herbert\Framework\Shortcode $shortcode */


$shortcode->add(
  'SLM_QuizPluginRenderQuiz',
  'SLM_QuizPlugin::renderQuiz',
  [
    'id' => 'postId'
  ]
);
