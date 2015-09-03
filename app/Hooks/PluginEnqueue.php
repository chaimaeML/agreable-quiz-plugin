<?php namespace AgreableQuizPlugin\Hooks;

use AgreableQuizPlugin\Controllers\RenderController;

/*
 * Handles plugin asset rendering when asked to do so through Agreable
 * Theme's widget iterator.
 *
 * When a quiz is rendered as part of the Agreable App Theme the widget
 * iterator will call `do_action()` with an argument specific to this plugin.
 * This hook will wait for this action before enqueuing and/or rendering
 * plugin assets.
 *
 * @author Gareth Foote
 */

class PluginEnqueue {

  public function init() {
    \add_action('agreable_quiz_plugin_enqueue', array($this, 'plugin_assets'), 10, 0);
  }

  public function plugin_assets(){
    $r = new RenderController();
    // JavaScript is enqueued (instead of rendered inline) so that it is called
    // after it's dependencies (jQuery & Backbone). We presume that Agreable
    // Theme has already enqueued these.
    $r->enqueue_js();
    // CSS can be rendered inline just before the markup.
    $r->inline_css();
  }

}
