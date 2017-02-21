<?php

class A {
	function who () {
		echo __CLASS__;
	}
	function test () {
		static::who();
		// $this->who();
		// self::who();
	}
}

class B extends A {
	function who () {
		echo __CLASS__;
	}
}

// B::test();

$b = new B;
$b->test();