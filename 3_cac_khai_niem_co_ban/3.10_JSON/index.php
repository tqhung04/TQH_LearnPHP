<?php
/*
	1. Hiểu được định dạng JSON là gì, được dùng để làm gì
	2. Biết sử dụng các hàm của PHP để làm việc với JSON
	3. Biết cách convert dữ liệu sang kiểu JSON

	_______________________________________________________
	1. Hiểu được định dạng JSON là gì, được dùng để làm gì
		- JSON: Javascript Object Notation
		- là một dạng dữ liệu tuân theo một quy luật nhất định mà hầu hết các ngôn ngữ lập trình hiện nay đều có thể đọc được
		- dùng để các ứng dụng trao đổi dữ liệu với nhau 

	2. Biết sử dụng các hàm của PHP để làm việc với JSON
*/
	$arr = array(
		'username' => 'Hidol Pla',
		'password' => '123456'
	);

	// json_encode() -> chuyển Array or Object -> JSON
	var_dump($arr);
	echo "<br>";
	// Dạng Mảng
	var_dump(json_encode($arr, true));
	echo "<br>";
	// Dạng Object
	var_dump(json_encode($arr));
	echo "<br>";
	// json_decode() -> chuyển Json -> Array or Object
	$json_string = json_encode($arr);

	$arr = json_decode($json_string); //-> Object
	var_dump($arr);
	echo "<br>";
	$arr = json_decode($json_string, true); //-> Array
	var_dump($arr);
