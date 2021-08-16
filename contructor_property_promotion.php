<?php 
//used in the past but no more now
class Animal {
	private $name;

	public function __construct($name){
		$this->name = $name;
	}
	public function run() {
		echo "$this->name is running.";
	}
}
$animal = new Animal("Giraffe");
$animal->run();


echo "<br>";
//constuctor property promotion
class Fruit 
{
	public function __construct(private $name) {
		//
	}
	public function color()
	{
		echo "$this->name has a light yellow color.";
	}
}
$fruit = new Fruit("pineapple");
$fruit->color();



