<?php
	/*
		1. Nắm được cách khai báo 1 function
		2. Nắm được cách khai báo hàm trả về giá trị và hàm không trả về giá trị
		3. Nắm được cách khai báo hàm truyền tham số theo giá trị và khai báo hàm truyền tham số theo tham chiếu, hiểu được sự khác nhau giữa việc truyền tham số theo giá trị và theo tham chiếu
		4. Biết cách khai báo hàm sử dụng tham số mặc định
		5. Biết được cách trả về nhiều giá trị sử dụng từ khóa list
		6. Hiểu được khái niệm đệ quy và cách dùng đệ quy
	*/

		function fn1 () {
			function fn1_1 () {
				echo "Hello Im fn1_1";
			}
		}

		fn1();
		echo "<br>";
		fn1_1();

		// 3. Nắm được cách khai báo hàm truyền tham số theo giá trị và khai báo hàm truyền tham số theo tham chiếu, hiểu được sự khác nhau giữa việc truyền tham số theo giá trị và theo tham chiếu
		echo "<br>";
		$a = 2;
		function x3 (&$a) {
			$a = $a * 3;
			return $a;
		}
		echo x3($a);
		echo $a;

		// 4. Biết cách khai báo hàm sử dụng tham số mặc định
		echo "<br>";
		$a = $b = $c = 1;
		function total ($a, $b = 10, $c = 10) {
			return $a + $b + $c;
		}

		var_dump(total(1, null, 2));

		// 5. Biết được cách trả về nhiều giá trị sử dụng từ khóa list
		$arr = array(1, 2, 3);
		list($i, ,$i1) = $arr;
		var_dump($i, $i1);
		echo "<br>";

		// 6. Hiểu được khái niệm đệ quy và cách dùng đệ quy (in ra dãy số fibonacy)
		function fibo($n){  
		    static $n1 = 0;
		    static $n2 = 1;

		    if ( $n > 0 ) {  
				$n3 = $n1 + $n2;  
				$n1 = $n2;  
				$n2 = $n3;  
				echo $n3 . " ";
				fibo( $n-1 );  
		    }  
		}  
		fibo(10);
?>