<?php namespace AgreableQuizPlugin;
/** @var \Herbert\Framework\Router $router */

$router->get([
  'as'   => 'quiz',
  'uri'  => '/quiz/{slug}/embed',
  'uses' => __NAMESPACE__ . '\Controllers\RenderController@embed'
]);

$router->get([
  'as'   => 'quiz_preview',
  'uri'  => '/quiz/{slug}/preview',
  'uses' => __NAMESPACE__ . '\Controllers\RenderController@preview'
]);

