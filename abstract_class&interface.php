<?php 

// abstract class Animal 
// {
// 	public abstract function talk();

// 	public function run() {
// 		echo "Running...";
// 	}

// }

// class Dog extends Animal
// {
// 	//
// }

//------------------interface----------------------
//example
// class Dog
// {
// 	public function run() {
// 		echo "The dog is running..";
// 	}
// }

// class Fish
// {
// 	public function swim() {
// 		echo "The fish is swimming";
// 	}
// }

// function app(Dog $obj) {
// 	$obj->run();
// }

// app(new Dog);
// app(new fish);

interface Animal
{
	public function move();
}

class Dog implements Animal
{
	public function move() {
		echo "The dog is moving..";
	}
}
class Fish implements Animal
{
	public function move() {
		echo "The fish is swimming...";
	}
}

function app(Animal $obj) {
	$obj->move();
}
app(new Dog);
app(new Fish);