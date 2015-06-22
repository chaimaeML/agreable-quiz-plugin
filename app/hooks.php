<?php

/** @var  \Herbert\Framework\Application $container */

use SLM_QuizPlugin\Hooks\TimberLoaderPaths;
use SLM_QuizPlugin\Hooks\SLMPluginEnqueue;

if(class_exists('SLM_QuizPlugin\Hooks\TimberLoaderPaths')){
  (new TimberLoaderPaths)->init();
}

if(class_exists('SLM_QuizPlugin\Hooks\SLMPluginEnqueue')){
  (new SLMPluginEnqueue)->init();
}


