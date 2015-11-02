<?php

$recipe = new \Soy\Recipe();

$recipe->component('grunt', function (\Soy\Grunt\GruntTask $gruntTask) {
    $gruntTask
        ->setBinary('grunt')
        ->setTask('scss')
        ->setVerbose(true)
        ->run();
});

$recipe->component('default', null, ['grunt']);

return $recipe;
