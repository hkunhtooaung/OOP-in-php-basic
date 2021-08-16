<?php 	

class Drink
{
	private $name;
	private $price;
	public function __construct($name, $price) 
	{
		$this->name = $name;
		$this->price = $price;
	}
	public function getName() 
	{
		echo "$this->name";
	}
	public function getPrice() 
	{
		echo "$this->price";
	}
	function destruct() {

	}
}

$drink = new Drink('juice', '1000');
$drink->getName();
$drink->getPrice();

?>