<?php 

class Animal
{
	protected $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
}
class Dog extends Animal
{
	private $color;
	public function __construct($name, $color)
	{
		parent::__construct($name);
		$this->color = $color;
	}
	public function profile()
	{
		echo "$this->name has $this->color color.";
	}
}
$dog = new Dog('Bobby', 'Brown');
$dog->profile();

Using constructor property promotion method
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

