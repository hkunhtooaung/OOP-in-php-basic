<?php 
interface Animal
{
	public function move();
	//this is abstract method
}
class Dog implements Animal
{
	public function move() 
	{
		echo "The dog is running.";
	}
}
class fish implements Animal
{
	public function move()
	{
		echo "The fish is swimming";
	}
}

function app(Animal $obj)
{
	$obj->move();
}
app(new Dog);
echo "<br>";
app(new fish);

//--------------------------------------------------------
interface marmal
{
	public function move();
}
interface Livestock
{
	public function isFriendly();
}

class Cow implements marmal, Livestock
{
	public function move() 
	{
		echo "the cow is walking";
	}
	public function isFriendly()
	{
		return true;
	}
}

function ability($obj)
{
	echo "<br>";
	$obj->move();
	echo "<br>";
	echo $obj->isFriendly();
}
ability(new Cow);