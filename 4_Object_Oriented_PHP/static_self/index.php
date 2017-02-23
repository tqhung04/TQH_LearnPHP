<?php

class A {

	public static $name = "ABCDEF";
	function who () {
		echo __CLASS__;
	}
	function test () {
		// static::who();		//-> B
		self::who();		//-> A
	}
}

class B extends A {
	function who () {
		echo __CLASS__;
	}
}

echo A::$name;
// B::test();

// $b = new B;
// $b->test();