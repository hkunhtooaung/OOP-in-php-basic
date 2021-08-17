<?php 
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
		echo "<h1 style='color: red;'>This is $this->name and he has $this->color color.</h1>";
	}
}

$dog = new Dog('Bobby', 'Brown');
$dog->profile();