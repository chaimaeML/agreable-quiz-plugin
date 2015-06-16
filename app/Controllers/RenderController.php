<?php namespace SLM_QuizPlugin\Controllers;

use SLM_QuizPlugin\Helper;

class RenderController {

  public function enqueue($postId){

    // Enqueue scripts.
    wp_enqueue_script( 'slm_quiz_script', Helper::assetUrl('app.js'), array(), '0.1.0', true );

    /*
     * @SLM_QuizPlugin is a Twig namespace which Herbert generates from
     * values in herbert.config.php.
     * @see http://twig.sensiolabs.org/doc/api.html#loaders
     *
     * Using get_field() which is an ACF function to retrieve theme
     * specific options affecting the style of the quiz.
     * ACF definitions for Panel are in app/panels.php.
     */
    
    echo view('@SLM_QuizPlugin/styles.twig', [
        'common_css_path'   => Helper::asset('styles.css'),
        'primary_colour'    => get_field('quiz_primary_colour', 'option'),
        'secondary_colour'  => get_field('quiz_secondary_colour', 'option'),
        'font_family'       => get_field('quiz_font_family', 'option'),
        'extra_css'         => get_field('quiz_extra_css', 'option'),
    ])->getBody();
  }

}
