<?php

class A {
	public static $temp = 0;

	function show () {
		self::$temp += 1;
		echo self::$temp;

		// A::$temp += 1;
		// echo A::$temp;

		// $this->temp += 1;
		// echo $this->temp;
	}
}

$a = new A;
$a->show();

$b = new A;
$b->show();
