<?php

$recipe = new \Soy\Recipe();

$recipe->component('default', function (\Soy\Grunt\RunTask $gruntTask) {
    $gruntTask
        ->setBinary('grunt')
        ->setTask('scss')
        ->setVerbose(true)
        ->run();
});

return $recipe;
