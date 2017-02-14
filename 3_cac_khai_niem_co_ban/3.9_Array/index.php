<?php
	
/*
	1. Hiểu được khái niệm mảng là gì? Nắm được cách khai báo 1 mảng, in dữ liệu từ mảng ra trình duyệt
	2. Nắm được các hàm để thêm/xóa giá trị trong mảng, các hàm để sắp xếp mảng, xác định vị trí, thành phần trong mảng
	3. Cách gộp mảng, cắt mảng và nối mảng
	4. Biết được 1 số hàm hữu ích khác để thao tác với mảng: array_keys(), array_values(), array_flip(), array_rand()...

	________________________________________________________________________________________________
	1. Hiểu được khái niệm mảng là gì? Nắm được cách khai báo 1 mảng, in dữ liệu từ mảng ra trình duyệt
		- Mang la 1 kieu du lieu trong php cho phep lưu nhieu gia tri con ben trong
		- Khai bao 1 mang co 4 cach:
*/
		$a1 = array(1 , 2);
		$a11 = [1, 2];

		$a2 = array(
			'0' => 1,
			null => 2,
			2 => 3,
			false => 5,
			true => 6,
		);
		$a2[] = 4;

		$a3 = array();
		$a3[] = 1;
		$a3[] = 2;

		$a4 = array();
		$a4[0] = 1;
		$a4[1] = 2;

		// Xuat mang:
		var_dump($a2);
		echo "<br>";
		print_r($a2);
		echo "<br>";
		foreach ($a2 as $key => $a) {
			echo $key . "=>" . $a . "<br>";
		}

		// 2. Nắm được các hàm để thêm/xóa giá trị trong mảng, các hàm để sắp xếp mảng, xác định vị trí, thành phần trong mảng
		$a = [1, 2];
		// Thêm giá trị vào mảng
			// C1:
			$a[] = 3;
			$a[10] = 10;
			$a[] = 11;
			// C2: thêm vào CUỐI mảng:
			array_push($a, 'push1', 'push2');
			// C3: thêm vào ĐẦU mảng
			array_unshift($a, 'unshift1', 'unshift2');
			// C4: thêm vào VỊ TRÍ XÁC ĐỊNH của mảng
			array_splice($a, 3, 1, "splice");
		print_r($a);
		echo "<br>";

		// Xóa giá trị của mảng
			// C1: xóa 1 giá trị
				unset($a[0]);
			// C2: xóa 1 hoặc nhiều giá trị từ vị trí xác định, số lượng phần tử cần xóa
				array_splice($a, 1, 2);
			// C3: xóa những phần tử có giá trị xác định
				$newarr1 = array_diff($a, ["push1", "push2"]);
			// C4: xóa những phần tử có vị trị xác định
				$newarr2 = array_diff_key($a, ['0', '1']);
			print_r($a);
			echo "<br>";
			print_r($newarr1);
			echo "<br>";
			print_r($newarr2);
			echo "<br>";

		// Sắp xếp mảng
			/*
			    sort() 		-> tăng dần
			    rsort() 	-> giảm dần
			    asort() 	-> tăng dần theo value của mảng
			    ksort() 	-> tăng dần theo key của mảng
			    arsort() 	-> giảm dần theo value của mảng 
			    krsort() 	-> giảm dần theo key của mảng
			*/

			$a1 = array(
				'A' => 1,
				'D' => 4,
				'C' => 3,
				'B' => 9,
			);
			print_r($a1);
			echo "<br>";

			asort($a1);
			print_r($a1);
			echo "<br>";

			ksort($a1);
			print_r($a1);
			echo "<br>";

			$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
			sort($fruits);
			foreach ($fruits as $key => $value) {
				echo $key . '=>' . $value . '  ';
			}
			echo "<br>";

			$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
			asort($fruits);
			foreach ($fruits as $key => $value) {
				echo $key . '=>' . $value . '  ';
			}

			// Xác định vị trí, thành phần trong mảng
			$arr = array('1', 2, 'hello');
			$arr['hero'] = 'Roshan';
				// array_search: trả về key 
					echo (array_search("hello", $arr)); //->2
					echo "<br>";
				// in_array -> tim theo value -> true or false
					if ( in_array('hello', $arr) )
						echo 'Co phan tu hello trong mang';
						echo "<br>";
				// array_key_exists -> tim theo key -> true or  false
					var_dump( array_key_exists('hero', $arr) );




			

