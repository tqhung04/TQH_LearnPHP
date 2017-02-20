<?php

/*
1. Hiểu được khái niệm thừa kế trong PHP
2. Biết cách sử dụng tính kế thừa trong PHP để tái sử dụng code
3. Biết được cách gọi các hàm thuộc class cha
4. Hiểu được khái niệm Late Static Binding"
*/

class User {
	function meeting () {
		echo "Hello ";
	}
}

class Admin extends User {
	function gioiThieu () {
		parent::meeting();
		echo "Im Admin";
	}
}

$admin01 = new Admin;
$admin01->gioiThieu();
echo "<br>";
$admin01->meeting();
