<?php namespace SLM_QuizPlugin\Controllers;

use Herbert\Framework\Http;

class PanelController {

    public function settings(Http $http){

        if ( $http->has('quiz_primary_colour') ){
            $primary_colour = $this->plugin->http->get('quiz_primary_colour');
            update_option('quiz_primary_colour', $primary_colour);
        }

        if ( $http->has('quiz_secondary_colour') ){
            $secondary_colour = $this->plugin->http->get('quiz_secondary_colour');
            update_option('quiz_secondary_colour', $secondary_colour);
        }

        if ( $http->has('quiz_override_css') ){
            $override_css = $this->plugin->http->get('quiz_override_css');
            update_option('quiz_override_css', $override_css);
        }

        if ( $http->has('quiz_font_family') ){
            $font_family = $this->plugin->http->get('quiz_font_family');
            update_option('quiz_font_family', $font_family);
        }

        return view('@SLM_QuizPlugin/panel-settings.twig', [
            'primary_colour'    => get_option('quiz_primary_colour'),
            'secondary_colour'  => get_option('quiz_secondary_colour'),
            'font_family'       => get_option('quiz_font_family'),
            'override_css'      => get_option('quiz_override_css'),
        ]);
    }


}
