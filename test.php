<?php  

// Adding float values

//$x = (int)((0.1 + 0.7) * 10);

//echo "\n PHP_INT_SIZE=".PHP_INT_SIZE;
//echo "\n PHP_INT_MIN=".PHP_INT_MIN;
//echo "\n PHP_INT_MAX=".PHP_INT_MAX;
//echo "\n X=".$x;

//$a = 'foo';
//$$a['bar'] = 'Murky code';
// this assert passes
//assert($$a['bar'] === $foo['bar']);
//var_dump($foo);



//$x = 2;
//$y = 4;
//$z = 6;


//if($z > $y > $x) {
//    echo “true”;
//}else{
//    echo “false”;
//}

interface Human {

	public function getName();

}

class Me implements Human {
	private $name = "Sayed";
	public function getName()
	{
		echo $this->name;
	}

}

$obj = new Me();

$obj->getName();
