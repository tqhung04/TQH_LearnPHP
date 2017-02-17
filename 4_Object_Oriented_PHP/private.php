<?php

class A {
	public $name;
	protected $_email;
	private $__password = "12345678";

	function setPassword ($password) {
		$this->__password = $password;
	}
	function getPassword () {
		return $this->__password;
	}
}

class B extends A {
	function show () {
		// echo $this->__password;
		$this->setPassword("555");
		echo $this->getPassword();
	}
}

$a = new A;
$a->setPassword("123456");
echo $a->getPassword();

$b = new B;
$b->show();
