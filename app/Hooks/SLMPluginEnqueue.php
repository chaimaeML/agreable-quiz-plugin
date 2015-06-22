<?php namespace SLM_QuizPlugin\Hooks;

use SLM_QuizPlugin\Controllers\RenderController;

class SLMPluginEnqueue {

  public function init() {
    \add_action('slm_quiz_plugin_enqueue', array($this, 'enqueue'));
  }

  public function enqueue($paths){
    $r = new RenderController();
    $r->enqueue();
  }

}
