<?php

class A {
	function who () {
		echo __CLASS__;
	}
	function test () {
		static::who();
	}
}

class B extends A {
	function who () {
		echo __CLASS__;
	}
}

B::test();