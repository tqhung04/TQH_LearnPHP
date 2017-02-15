<?php 
/*
1. Nắm được các loại toán tử và cách sử dụng
2. Nắm được thứ tự ưu tiên thực hiện các toán tử
3. Biết cách kết hợp các toán tử sử dụng dấu ngoặc
4. Nắm được các loại toán tử khả dụng cho từng loại dữ liệu. String có những toán tử nào, Array có những toán tử nào, Boolean có những kiểu dữ liệu nào..."
*/
	$a = 1;
	$total = $a + ($b = 5 + 6);
	echo $total; //->12

	// Biểu thức + - * /
	// Toán từ quan hệ > >= < <= == !=
	// Toán tử luận lý || && !
	$a = 100;
	$b = 200;
	$tong = $a + $b;
	$check = ($a < $b) && ($tong > 200);
	var_dump($check); //->true

	// Độ ưu tiên của toán tử luận lý: NOT -> AND -> OR
	$a = ( 7 > 5 &&  !(-5 > 1) || 10 == 10 );
	var_dump($a);
	// Độ ưu tiên của các toán tử
	/*
		Một ngôi: - ++ -- : phải sang trái
		Hai ngôi: ^ * / % : trái sang phải
				  =		  : phải sang trái
	*/
	
	// Toán tử với string
		$str = "Hello";
		$str .= "World";
		echo $str;
		echo "<br>";
		$e = 1 . 2; //-> String: 12
		$e1 = 1.2;  //-> Number : 1.2
		$e2 = 1+2;  //-> Nuber: 3
		var_dump($e, $e1, $e2);
		echo "<br>";
		echo 'a'.	//-> ax
		$c = 'x';
		echo "<br>";

	/* Toán tử với array
	*/
		$a = array(1 ,2, 3);
		$b = array(4 ,5, 6, 7);
		$c = $a + $b;
		print_r($c);
		$c = $b + $a;
		print_r($c);
		$c = $a += $b;
		print_r($c);
		$c = $a - $b;
		print_r($c);

		// echo "<br>";
		// $arr2 = array();
		// $arr2[1] = 2;
		// $arr2[0] = 1;
		// // $arr2[3] = 3;

		// $arr1 = [1, 2];
		// var_dump( $arr1 == $arr2 );
		// var_dump( $arr1 === $arr2 );
		
		// echo "<br>";

		// $a = array(5=>7, 2, 3);
		// var_dump($a);
		// echo "<br>";

		// $a = [1, 5, 100];
		// $b = [2, 1, 1];
		// var_dump($a > $b);
		// var_dump($b > $a);

		
 ?>