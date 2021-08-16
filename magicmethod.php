<?php
// class Math
// {
// 	public function __call($name,$args) {
// 		echo "Method $name doesn't exit";
// 	}

// 	public function __callStatic($name, $args) {
// 		echo "Static method $name doesn't exitsts";
// 	}

// }

// $obj = new Math;
// $obj->add();
// echo "<br>";
// Math::add();

///------------------- __invoke magic
// class Math 
// {
// 	public function __invoke() {
// 		echo "This is not a function";
// 	}
// }

// $obj = new Math;
// $obj();

//------------------------ get and set 
// class Math
// {
// 	private $PI = 3.14;

// 	public function __get($name)
// 	{
// 		echo "Cannot get $name";
// 	}

// 	public function __set($name,$value)
// 	{
// 		echo "Cannot set $name with $value";
// 	}
// }

// $obj = new Math;
// echo $obj->PI;
// $obj->PI = 3.142;

//------------------------ __toString()

class Math
{
	private $PI = 3.14;

	public function __toString()
	{
		return "PI = $this->PI";
	}
}

$obj = new Math;
echo $obj;