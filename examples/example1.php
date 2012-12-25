<?php

include('../vendor/autoload.php');
use Sulfur\Sulfur;

$sulfur = new Sulfur([
	'template_path'=>__DIR__.'/templates',
	'cache_path'=>__DIR__.'/cache'
]);

echo $sulfur
	->hello(['name'=>'blah'])
	->dump('MARKBLAH')
	->render();
