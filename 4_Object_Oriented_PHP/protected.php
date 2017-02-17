<?php

class User {
	protected $_name;

	function show () {
		echo $this->_name;
	}

}

class Admin extends User {
	function setName ($name) {
		$this->_name = $name;
	}
	function show () {
		echo $this->_name;
	}
}

// $user01 = new User;
// $user01->_name = "User01";
// $user01->show();

$admin01 = new Admin;
$admin01->setName("Admin01");
$admin01->show();