<?php

class A {
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

B::test();

// $b = new B;
// $b->test();