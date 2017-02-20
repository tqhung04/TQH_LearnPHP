<?php

class Animal {

	public static $name;

	function meeting () {
		echo "Hello Im Animal";
	}
	function show () {
		// self::meeting();
		$this->meeting();
	}

	public static function changeName () {
		// $this->name = "Animal"; -> Error
		self::$name = "Animal";
	}

}

class Cat extends Animal {
	function meeting () {
		echo "Hello Im Cat";
	}
}

$cat = new Cat;
$cat -> show();

$animal = new Animal;
$animal -> changeName();