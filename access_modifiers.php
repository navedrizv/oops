<?php

// Check the access modifier scope in class

class Property 
{
	protected $foo = 10; // can be accessed from child class.
	public $bar = 20; // can't be accessed from child class.
	
	// can't be accessed from child class
	private $ownerName;
	private $area;
	private $price;
	private $address;

	public function __construct($ownerName, $area, $price, $address)
	{
		$this->ownerName = $ownerName;
		$this->area = $area;
		$this->price = $price;
		$this->address = $address;
	} 


	public function getPropertyDetail()
	{
		return "Owner = ". $this->ownerName . "\n Area =  " . $this->area . "\n Price = " . $this->price . "\n Address = ". $this->address;
	}

}

class Flat extends Property
{
	private $carpetArea;
	private $maintainence;

	public function __construct($ownerName, $area, $price, $address, $carpetArea, $maintainence)
	{
		$this->carpetArea = $carpetArea;
		$this->maintainence = $maintainence;
		parent::__construct($ownerName, $area, $price, $address);
	}

	// Accessing protected member in the derviced class
	public function getFoo()
	{
		echo "\n  Protected Foo from child class = " . $this->foo;
	}
}


$obj = new Flat("Sayed Rizvi", "550 sq.ft", "Rs.85,00,000", "Ghatkopar", "550 sq.ft", "Rs. 1200");

echo $obj->getPropertyDetail();
echo $obj->getFoo();
echo "\n Public bar from outside class" . $obj->bar;