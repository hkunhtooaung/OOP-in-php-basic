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

//----------------------------------------------------------------------
final class Animal
{
	public function run()
	{
		echo "Animal is running..";
	}
}
class Dog extends Aniaml 
{
	//
}

//ERROR : may not inherit from final class

//-----------------------------------------------
abstract class Animal
{
	public function abstract function talk();
	public function run()
		{
			echo "Running...";
		}
}

class Dog extends Animal
{
	//
}

//Error: abstract method must be
//declared or implement the remaning