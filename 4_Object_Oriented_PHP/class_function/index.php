<?php

class User {
	private $__password;
	protected $_email;
	public $name;


	public function show () {
		return get_class($this);
	}
}

// class_exists(classname); -> kiem tra class co ton tai k
var_dump(class_exists('User'));

// get_class(obj); -> tra ve ten class
$a = new User;
echo $a->show();
echo get_class($a);

// get_class_methods(obj) -> tra ve mang gom ten cac phuong thuc cua class
var_dump( get_class_methods($a) );

// get_class_vars(classname) -> tra ve mang gom ten cac thuoc tinh cua class -> chi ap dung vs public
var_dump( get_class_vars('User') );

// class_alias(); 
// -> thay đổi tên lớp
// -> làm tên lớp ngắn hơn
// -> di chuyển class đến các namespaces khác
class A {

}
class_alias('A', 'B');

$a = new A;
$b = new B;

var_dump( $a == $b);
var_dump( $a === $b);
var_dump($a instanceof $b);
var_dump($b instanceof $a);




