<?php 	
class Drink
{
	public $name;
	public $price;
	public function __construct($name,$price)
	{
		$this->name = $name;
		$this->price = $price;
	}
	public function setName($name) 
	{
		$this->name = $name;
	}
	public function getName()
	{
		return "This is $this->name";
	}
	public function setPrice($price)
	{
		$this->price = $price;
	}
	public function getPrice()
	{
		return "This is $this->price";
	}
}

class Drink1 extends Drink
{

}

$drink = new Drink1('juice', 1000);
$drink->setName('banana juice');
echo $drink->getName();
echo "<br>";
$drink->getName('3000');
echo $drink->getPrice();

//------------------//
class Animal
{
	public function __construct(protected $name) 
	{
		
	}
}
class Dog extends Animal 
{
	public function bark()
	{
		echo "$this->name :: woof.. woof..";
	}
}
echo "<br>";
$dog = new Dog('Bobby');
$dog->bark();
//------------------//

// class Animal
// {
// 	protected $name;
// 	//final mean u cannot overriede this __construct function
// 	final public function __construct($name) {
// 		$this->name = $name;
// 	}

// }

// class Dog extends Animal
// {
// 	private $color;

// 	public function __construct($name,$color) {
// 		parent::__construct($name);
// 		$this->color = $color;
// 	}
// 	public function profile() {
// 		echo "$this->name has $this->color color.";
// 	}
// }

// $bobby = new Dog("Bobby", "Brown");
// $bobby->profile();
