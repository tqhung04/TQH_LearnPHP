<?php

class A {
	function __construct () {
		$a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
	}

	function __construct1 ($a) {
		echo "Construct with $a para.";
	}

	function __construct2 ($a, $b) {
		echo "Construct with $a $b para.";
	}

	function __destruct () {
		echo "Destruct function";
	}
}

$a = new A("Cat");
$a = new A("Cat", "Dog");
// $a = new A("Cat", "Dog", "Chicken");