<?php 

/*
1. Nắm được các kiểu dữ liệu mà PHP support, cách khai báo, cách sử dụng từng kiểu dữ liệu, các phép toán làm việc trên từng kiểu dữ liệu
2. Phân biệt được các kiểu dữ liệu vô hướng (scalar data types) và kiểu phức hợp (compound data types)
3. Cách thức convert các kiểu dữ liệu và cách thức kiểm tra kiểu dữ liệu của biến

__________________________________________________
1. Nắm được các kiểu dữ liệu mà PHP support, cách khai báo, cách sử dụng từng kiểu dữ liệu, các phép toán làm việc trên từng kiểu dữ liệu
*/	
	// 1.1 booleans
	$bool = TRUE;
	var_dump($bool);
	
	// Integers
	$a = '123'; 
	$b = 123; 
	$c = $a + $b;
	var_dump(is_int($c));
	var_dump(is_int($a));

	$f = "32a2";
	$g = $a + $f;
	var_dump($g);

	// Floating point numbers
	$i = 12;
	$i1 = (float) $i;
	$i2 = (double) $i;
	var_dump($i1);
	var_dump($i2);
	// Strings
	// Arrays
	$arr1 = array(1, 2);

	$arr2 = array(
		0 => 1,
		1 => 2
	);

	$arr3 = array();
	$arr3[0] = 1;
	$arr3[1] = 2;

	$arr4 = array();
	$arr4[] = 1;
	$arr[] = 2;

	
	// Objects
	class meeting {
		public $name;
		private $price;

		function __construct($name, $price){
            $this->name = $name;
            $this->price = $price;
        }
		function hello () {
			return $this->name . ' saying hello';
		}
		function goodbye () {
			return $this->name . ' saying goodbye';
		}
	}
	$say = new meeting("Tqhung04", 10);
	echo $say->hello();
	// NULL
	// Resources

// 3. Cách thức convert các kiểu dữ liệu và cách thức kiểm tra kiểu dữ liệu của biến
	$int = 4;
	$str_type = (string) $int;
	$array_type = (array) $int;
	var_dump($str_type);
	var_dump($array_type);

	if ( is_string($str_type) ) {
		echo "This is string.";
	} else {
		echo "This is not a string.";
	}

