<?php 

class A {

	function meeting () {
		echo "Im A";
	}

	function show () {
		// $this->meeting();
		// self::meeting();
	}

}

class B extends A {

	function meeting () {
		echo "Im B";
	}
}

$b = new B;
$b->show();
