<?php namespace SLM_QuizPlugin\Controllers;

use Herbert\Framework\Http;

class PanelController {

    public function settings(Http $http){

        if ( $http->has('quiz_primary_colour') ){
            $primary_colour = $http->get('quiz_primary_colour');
            if(substr($primary_colour, 0, 1) === '#'){
              $primary_colour = substr($primary_colour, 1);
            }
            update_option('quiz_primary_colour', $primary_colour);
        } else {
          update_option('quiz_primary_colour', "");
        }

        if ( $http->has('quiz_secondary_colour') ){
            $secondary_colour = $http->get('quiz_secondary_colour');
            if(substr($secondary_colour, 0, 1) === '#'){
              $secondary_colour = substr($secondary_colour, 1);
            }
            update_option('quiz_secondary_colour', $secondary_colour);
        } else {
          update_option('quiz_secondary_colour', "");
        }

        if ( $http->has('quiz_extra_css') ){
            $extra_css = $http->get('quiz_extra_css');
            update_option('quiz_extra_css', $extra_css);
        } else {
          update_option('quiz_extra_css', "");
        }

        if ( $http->has('quiz_font_family') ){
            $font_family = $http->get('quiz_font_family');
            update_option('quiz_font_family', $font_family);
        } else {
          update_option('quiz_font_family', "");
        }


        return view('@SLM_QuizPlugin/panel-settings.twig', [
            'primary_colour'    => get_option('quiz_primary_colour'),
            'secondary_colour'  => get_option('quiz_secondary_colour'),
            'font_family'       => get_option('quiz_font_family'),
            'extra_css'         => get_option('quiz_extra_css'),
        ]);
    }


}
