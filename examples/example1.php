<?php

include(dirname(__DIR__).'/vendor/autoload.php');
use Sulfur\Sulfur;

$sulfur = new Sulfur();

echo $sulfur
	->hello(['name'=>'blah'])
	->dump('MARKBLAH')
	->render();

echo (number_format(memory_get_usage(true)/1024/1024,2)).'M'.PHP_EOL;
