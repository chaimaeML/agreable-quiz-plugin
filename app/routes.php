<?php namespace AgreableQuizPlugin;
/** @var \Herbert\Framework\Router $router */

$router->get([
  'as'   => 'quiz',
  'uri'  => '/quiz/{slug}/embed',
  'uses' => __NAMESPACE__ . '\Controllers\RenderController@embed'
]);
