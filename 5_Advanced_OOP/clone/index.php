<?php

class Cat {
	function setName ($name) {
		$this->name = $name;
	}
	function setGender ($gender) {
		$this->gender = $gender;
	}
	function setAge ($age) {
		$this->age = $age;
	}
	function showInfo () {
		echo "This is {$this->name} - {$this->gender} - {$this->age}";
	}
}

$cat1 = new Cat;
$cat1 -> setName("Neko");
$cat1 -> setGender("Male");
$cat1 -> setAge(4);

// Without clone
$cat2 = $cat1;
$cat2 -> setName("Suka");
$cat2 -> setGender("Female");
$cat2 -> setAge(2);

$cat1 -> showInfo();
echo "<br>";
$cat2 -> showInfo();
echo "<br>";
// -> dữ liệu của cat1 đã bị cat2 ghi đè lên

$cat3 = new Cat;
$cat3 -> setName("Chihiro");
$cat3 -> setGender("Male");
$cat3 -> setAge(10);
$cat3 -> showInfo();
echo "<br>";

//With clone
$cat4 = clone $cat3;

$cat4 -> setName("Nashikao");
$cat4 -> setGender("Male");
$cat4 -> setAge(3);
$cat4 -> showInfo();
