<?php namespace AgreableQuizPlugin\Controllers;

use AgreableQuizPlugin\Helper;

class RenderController {

  /*
   * Output CSS, JS inline and outputs markup using Timber.
   */
  public function embed($slug){

    $post = get_posts("name=$slug&post_type=quiz");

    $context = \Timber::get_context();
    $context['quiz'] = new \TimberPost($post[0]);

    $this->inline_css();
    $views = trailingslashit(Helper::get('views')['AgreableQuizPlugin']);
	  \Timber::render("$views/widgets/quiz_plugin/template.twig", $context);
    $this->inline_js();

  }

  /*
   * Enqueue scripts rather than render immediately. Used by widget iterator
   * to ensure that this is output in the footer after the themes app.js, which
   * will contain dependencies such as Backbone and jQuery.
   *
   * Due to using in the embed CMS context we now output Backbone and jquery into
   * the built JavaScript file so it contains all dependencies. Therefore we
   * could just output app.js here. Not doing that right now though.
   */
  public function enqueue_js(){

    // Enqueue scripts.
    wp_enqueue_script( 'agreable_quiz_script', Helper::assetUrl('app.js'), array(), '1.0.0', true );
  }

  /*
   * Output built CSS into a <style> tag inline.
   */
  public function inline_css(){

    /*
     * @AgreableQuizPlugin is a Twig namespace which Herbert generates from
     * values in herbert.config.php.
     * @see http://twig.sensiolabs.org/doc/api.html#loaders
     *
     * Using get_field() which is an ACF function to retrieve theme
     * specific options affecting the style of the quiz.
     * ACF definitions for Panel are in app/panels.php.
     */

    $ns = Helper::get('agreable_namespace');
    echo view('@AgreableQuizPlugin/styles.twig', [
        'common_css_path'   => Helper::asset('styles.css'),
        'plugin_settings_property_primary_colour'      => get_field($ns.'_plugin_settings_property_primary_colour', 'option'),
        'plugin_settings_property_secondary_colour'    => get_field($ns.'_plugin_settings_property_secondary_colour', 'option'),
        'plugin_settings_property_font_family'         => get_field($ns.'_plugin_settings_property_font_family', 'option'),
        'plugin_settings_free_text'                    => get_field($ns.'_plugin_settings_free_text_css', 'option'),
    ])->getBody();
  }

  /*
   * Output build JS into a <script> tag inline.
   */
  public function inline_js(){

    echo view('@AgreableQuizPlugin/scripts.twig', [
        'js_path'   => Helper::asset('app.js'),
    ])->getBody();

  }

}
