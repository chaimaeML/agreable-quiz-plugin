<?php namespace SLM_QuizPlugin\Controllers;

use Herbert\Framework\Models\PostMeta;
use SLM_QuizPlugin\Helper;

class RenderController {

  public function enqueue($postId){
    wp_enqueue_script( 'slm_quiz_script', Helper::assetUrl('app.js'), array(), '0.1.0', true );
    wp_enqueue_style( 'slm_quiz_styles', Helper::assetUrl('styles.css'));
  }

  public function render($postId){
    $context = \Timber::get_context();
    $context['quiz'] = \Timber::get_post($postId);

    wp_enqueue_script( 'slm_quiz_script', Helper::assetUrl('app.js'), array(), '0.1.0', true );
    wp_enqueue_style( 'slm_quiz_styles', Helper::assetUrl('styles.css'));

    \Timber::render('widgets/quiz_plugin/quiz.twig', $context);
  }

}
