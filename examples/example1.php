<?php

include(dirname(__DIR__).'/vendor/autoload.php');
use Sulfur\Sulfur;

$sulfur = new Sulfur();

echo $sulfur
	->hello(['name'=>'blah'])
	->dump('MARKBLAH')
	->render();
