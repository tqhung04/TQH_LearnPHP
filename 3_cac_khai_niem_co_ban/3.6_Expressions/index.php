<?php 
/*
"1. Nắm được các loại toán tử và cách sử dụng
2. Nắm được thứ tự ưu tiên thực hiện các toán tử
3. Biết cách kết hợp các toán tử sử dụng dấu ngoặc
4. Nắm được các loại toán tử khả dụng cho từng loại dữ liệu. String có những toán tử nào, Array có những toán tử nào, Boolean có những kiểu dữ liệu nào..."
*/
	$a = 1;
	$total = $a + ($b = 5 + 6);
	echo $total;
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
	/* Toán tử với array
		$a + $b 	
		$a == $b 	
		$a === $b 	
		$a != $b 	
		$a <> $b 	
		$a !== $b
	*/
		$a = array(1 ,2, 3);
		$b = array(2 ,1);
		$c = $a + $b;
		print_r($c);
		$c = $b + $a;
		print_r($c);
		$c = $a += $b;
		print_r($c);

		$b = array(1 ,2, 3);
		if ($a == $b) {
			echo '$a = $b';
		}
		else {
			echo '$a != $b';
		}

		$arr2 = array();
		$arr2[0] = 1;
		$arr2[1] = 2;

		$arr1 = array();
		$arr1[0] = 1;
		$arr1[1] = 2;
		$arr1[3] = 2;

		if ($arr1 == $arr2) {
			echo 'TRUE';
		}
		else {
			echo 'FALSE';
		}

		if ($arr1 === $arr2) {
			echo 'TRUE';
		}
		else {
			echo 'FALSE';
		}
 ?>