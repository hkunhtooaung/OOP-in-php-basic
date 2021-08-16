<?php 

class Drink {
	var $name = 'milk';
	var $price = 1000;

	function setName($name) {
		$this->name = $name;
	}
	function getName() {
		echo $this->name;
	}

	function setPrice($price) {
		$this->price = $price;
	}
	function getPrice() {
		echo $this->price;
	}
}

$someDrink = new Drink();
$someDrink->setName('coconut');
$someDrink->getName();
echo "<br>";
$someDrink->setPrice(2000);
$someDrink->getPrice();
?>