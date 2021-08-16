<?php  
class obj {
	const name = 'Mg Mg';

	function constFunctin() {
		echo self::name;
	}

	static $age = 22;

	static function staticFunction() {
		echo static::$age;
	}
}

echo obj::name;
$obj = new obj();
$obj->constFunctin();

echo obj::$age;
obj::staticFunction();
?>
