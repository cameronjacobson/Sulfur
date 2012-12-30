<?php
    
namespace Sulfur;

class SulfurContext
{
	public $request;
	public $query;
	public $config;

	public function __construct(){
		
	}

	public function clear(){
		$this->config = null;
		$this->request = null;
		$this->query = null;
	}
}
