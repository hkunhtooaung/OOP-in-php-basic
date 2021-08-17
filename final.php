<?php 
class Animal 
{
	final public function run()
	{
		echo "Animal is running";
	}
}
class Dog extends Animal
{
	public function run()
	{
		echo "This function override the run method from animal.";
	}
}

$name = new Dog;
$name->run();

//ERROR :: Cannot override final method Animal::run()