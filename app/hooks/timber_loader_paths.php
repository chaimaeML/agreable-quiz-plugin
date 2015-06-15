<?php

/** @var  \Herbert\Framework\Application $container */

use SLM_QuizPlugin\Helper;

// Called when Timber gets Twig loader.
add_filter('timber/loader/paths', 'addPaths');
// @see https://github.com/jarednova/timber/blob/master/lib/timber-loader.php#L225

// Just before the file is rendered. Can bypass file selection here.
// add_filter('timber_render_file', 'add_paths');
// @see https://github.com/jarednova/timber/blob/master/timber.php#L285

// Passes an instance of Twig just before rendering but after tpl selection.
// add_filter('twig_apply_filters', 'update_twig_loader');
// @see https://github.com/jarednova/timber/blob/master/timber.php#L307


/*
 * use with Timber filter 'timber/loader/paths' to add Herbert views to array
 * @param $paths array
 * @return $paths array
 */
function addPaths($paths){
  // Get views specified in herbert.
  $namespaces = Helper::get('views');
  foreach ($namespaces as $namespace => $views){
    foreach ((array) $views as $view){
      // Add to timber $paths array.
      array_unshift($paths, $view);
    }
  }
  return $paths;
}
