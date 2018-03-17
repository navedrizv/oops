<?php


// Customer interface which defines the behaviour to be implemented when creating a customer class
// 
interface ICustomer {
	public function addCustomer();

	public function getCustomer();

	public function removeCustomer();

	public function updateCustomer(); 
}

abstract class CustomerAbstract {
	protected $customerName;
	protected $customerTel;
	protected static $customerRecord = [];

	public function __construct($cName, $cTel){
		$this->customerName = $cName;
		$this->customerTel = $cTel;
	}

	abstract public function addCustomer();
	abstract public function getCustomer();	
}

// Implements the behaviours of interface
class Customer extends CustomerAbstract{
	

	// public function __construct($cName, $cTel){
	// 	$this->customerName = $cName;
	// 	$this->customerTel = $cTel;
	// }

	public function addCustomer(){
		array_push(
			parent::$customerRecord, 
			array(
				"Name" => $this->customerName,
				"Tel" => $this->customerTel
			)
		);
	}

	public function getCustomer(){
		return self::$customerRecord;
	}

	public function removeCustomer(){
		echo "Class - ". __CLASS__;
	}

	public function updateCustomer(){
	
	}

	// public function __toString(){
	// 	return $this->customerRecord;
	// }
}

$obj1 = new Customer("Reliance", "9798789789");
// $obj2 = new Customer("Tata", "234234234");

// echo $obj;

$obj1->addCustomer();
// $obj2->addCustomer();

var_dump($obj1);
// var_dump($obj2);

// $obj1->removeCustomer();
// print_r($obj2->getCustomer());
// 
// self::getCustomer();
