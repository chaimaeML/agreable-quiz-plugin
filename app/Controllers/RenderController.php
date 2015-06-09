<?php namespace SLM_QuizPlugin\Controllers;

use Herbert\Framework\Models\PostMeta;

class RenderController {

    public function render($postId){

        $context = \Timber::get_context();
        $context['quiz'] = \Timber::get_post($postId);

        // With herbert. No Timber/Twig helpers.
        // $html = herbert('Twig_Environment')->render('@SLM_QuizPlugin/template.twig', $context);
        // With Timber. Wrong view diectory. Looking in theme.
        $html = \Timber::render( 'template.twig', $context, true);

        return $html;
    }
}
