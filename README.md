# Grunt Task

[![Latest Stable Version](https://poser.pugx.org/soy-php/grunt-task/v/stable)](https://packagist.org/packages/soy-php/grunt-task) [![Total Downloads](https://poser.pugx.org/soy-php/grunt-task/downloads)](https://packagist.org/packages/soy-php/grunt-task) [![Latest Unstable Version](https://poser.pugx.org/soy-php/grunt-task/v/unstable)](https://packagist.org/packages/soy-php/grunt-task) [![License](https://poser.pugx.org/soy-php/grunt-task/license)](https://packagist.org/packages/soy-php/grunt-task)

## Introduction
This is a [grunt](http://gruntjs.com/) task for Soy

## Usage
Include `soy-php/grunt-task` in your project with composer:

```sh
$ composer require soy-php/grunt-task
```

Then in your recipe you can use the task as follows:

```php
<?php

$recipe = new \Soy\Recipe();

$recipe->component('default', function (\Soy\Task\GruntTask $gruntTask) {
    $gruntTask
        ->setTask('scss')
        ->run();
});

return $recipe;
```
