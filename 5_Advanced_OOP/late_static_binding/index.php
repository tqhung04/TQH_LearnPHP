<?php

class A {
	protected static $name = "A";
	public function getName () {
		return static::$name;
		// return self::$name;
	}
}

class B extends A {
	protected static $name = "B";
}

$b = new B;
echo $b -> getName();
