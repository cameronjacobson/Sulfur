<?php
    
namespace Sulfur;

class SulfurContext
{
	public $host;
	public $port;
	public $mapping;
	public $index;
	public $request;
	public $query;

	public function __construct(){
		
	}

	public function clear(){
		$this->host = null;
		$this->port = null;
		$this->mapping = null;
		$this->index = null;
		$this->request = null;
		$this->query = null;
	}
}
