<?php 

/*
	Biết được các đặc điểm của OOP không được PHP hỗ trợ như:
	- Method overloading
	- Operator overloading
	- Multiple inheritance
*/

	// Method overloading

	class Math {
		// Dien tich hinh vuong
		function acreage ($a) {
			return $a * $a;
		}
		// function acreage($a, $b) {
		// 	return $a * $b;
		// }
	}

	$hvuong = new Math;
	echo "Diện tích hình vuông: " . $hvuong -> acreage(2);
	$hchunhat = new Math;
	echo "Diện tích hình chữ nhật: " . $hchunhat -> acreage(2, 3);

	class A {}
	class B {}
	class C extends A {}
	// class C extends B {}

