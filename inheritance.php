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
// class Animal
// {
// 	public function __construct(protected $name) 
// 	{
		
// 	}
// }
// class Dog extends Animal 
// {
// 	public function bark()
// 	{
// 		echo "$this->name :: woof.. woof..";
// 	}
// }
// echo "<br>";
// $dog = new Dog('Bobby');
// $dog->bark();
//------------------//

class Animal
{
	public function __construct(protected $name)
	{

	}
}
class Dog extends Animal
{
	public function __construct($name, private $color)
	{
		parent::__construct($name);
	}
	public function profile()
	{
		echo "The color of $this->name is $this->color";
	}
}
echo "<br>";
$bobby = new Dog('Bobby', 'white');
$bobby->profile();
// so if we dont want to override the constructor in the inherientence we use final
class Animal
{
	final public function run()
	{
		echo "Animal are running";
	}
}
class Dog extends Animal
{
	public function run()
	{
		echo "the dog is running";
	}
}

//ERROR CANNOT OVERRIDE FINAL METHOD

final class Animal {
	//
}

class Dog extends Animal {
	//
}
//ERROR mAY NOT INGEIT FROM FINAL CLASS
