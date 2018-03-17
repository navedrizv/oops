<?php

// Function overloading with magic methods

class Overloading
{
	private $data = [];
	
	public function __call($name, $args) {

	}

	public function __set($name, $value) {
		$this->data[$name] = $value;
	}

	public function __get($name) {
		return $this->data[$name];
	}
}

$obj = new Overloading();

$obj->a = 10;

var_dump($obj->a);


$obj->add(10,10);

