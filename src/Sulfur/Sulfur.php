<?php

namespace Sulfur;

use Sulfur\Twig\Extension;

class Sulfur
{
	public $loader;
	public $twig;
	protected $template;

	public function __construct(){
		$this->loader = new \Twig_Loader_Filesystem(__DIR__.'/TEMPLATES');
		$this->twig = new \Twig_Environment($this->loader,[
			'cache' => __DIR__.'/CACHE'
		]);
		$this->twig->addExtension(new Extension());
	}

	public function hello($args){
		$this->template = $this->twig->render('hello', $args);
		return $this;
	}

	public function dump($mark){
		echo '<<<<<<<<<< '.$mark.' >>>>>>>>>>'.PHP_EOL;
		echo $this->template;
		echo '<<<<<<<<<< END '.$mark.' >>>>>>>>>>'.PHP_EOL;
		return $this;
	}

	public function render(){
		return $this->template;
	}
}
