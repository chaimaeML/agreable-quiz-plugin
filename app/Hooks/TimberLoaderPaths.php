<?php namespace AgreableQuizPlugin\Hooks;

use AgreableQuizPlugin\Helper;

/*
 * Makes Timber aware of our plugin's templates/views.
 *
 * This plugin contains the twig template that will be rendered through the
 * theme. The theme will use Twig+Timber to render. Soooooo, we wait for
 * timber's action `timber/loader/paths` to be called and make Timber aware
 * of our plugin's templates/view paths.
 *
 * @author Gareth Foote
 */
class TimberLoaderPaths {

  public function init() {
    \add_filter('timber/loader/paths', array($this, 'addPaths'), 10);
  }

  public function addPaths($paths){
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

}
