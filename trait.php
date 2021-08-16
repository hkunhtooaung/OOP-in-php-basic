<?php
trait trait1 {
	function msg1() {
		echo "This is trait 1";
	}
}
trait trait2 {
	function msg2() {
		echo "This is trait 2";
	}
}

class usetrait {
	use trait1;
	use trait2;
}

$trait = new usetrait();
$trait->msg1();
$trait->msg2();

//-----------------------------------

trait Math
{
	public function add($a,$b) {
		echo $a + $b;
	}
}

trait Area
{
	private static $PI = 3.14;

	public function circle($r)
	{
		echo static::$PI * $r * $r;
	}
}

class Caculator
{
	use Math;
	use Area;
}

$calc = new Caculator;
echo "<br>";
$calc->add(1,2);
echo "<br>";
$calc->circle(5);
