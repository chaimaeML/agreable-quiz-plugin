<?php namespace SLM_QuizPlugin\Controllers;

use Herbert\Framework\Models\PostMeta;
use SLM_QuizPlugin\Helper;

class RenderController {

  public function enqueue($postId){

    // Enqueue scripts.
    wp_enqueue_script( 'slm_quiz_script', Helper::assetUrl('app.js'), array(), '0.1.0', true );

    /*
     * @SLM_QuizPlugin is a Twig namespace which Herbert generates.
     * We can use this with Herbert rendering as we're using for the
     * styles.twig tpl but can't use that for Timber. Timber doesn't use
     * namespacing. Instead we have added the  Herbert config['views']
     * array to Timbers path. (@see app/hooks/timber_loader_paths.php).
     */
    echo view('@SLM_QuizPlugin/widgets/quiz_plugin/styles.twig', [
        'primary_colour'    => get_option('quiz_primary_colour'),
        'secondary_colour'  => get_option('quiz_secondary_colour'),
        'font_family'       => get_option('quiz_font_family'),
        'extra_css'         => get_option('quiz_extra_css'),
    ])->getBody();
  }

}
