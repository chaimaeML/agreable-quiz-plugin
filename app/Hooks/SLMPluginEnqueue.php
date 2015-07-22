<?php namespace AgreableQuizPlugin\Hooks;

use AgreableQuizPlugin\Controllers\RenderController;

class SLMPluginEnqueue {

  public function init() {
    \add_action('agreable_quiz_plugin_enqueue', array($this, 'enqueue'));
  }

  public function enqueue($paths){
    $r = new RenderController();
    $r->enqueue();
  }

}
