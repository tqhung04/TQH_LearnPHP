<?php

/*
	1. Biết cách khai báo string, cách thức PHP làm việc với string
	2. Biết các hàm để thao tác với string: strlen(), strpos(), trim(), strcmp()…
	3. Hiểu được khái niệm regular expression và biết cách sử dụng cơ bản
*/

$str = "Hello World .";

// 1. strlen(): chiều dài của chuối
echo strlen($str);
echo "<br>";

/* 2.
- Hàm str_word_count(string $string [, int $format = 0 [, string $charlist ]]) : đếm tổng số từ có trong chuỗi
- string: chỉ định chuỗi để kiểm tra
- format: chỉ định kiểu giá trị trả về của hàm str_word_count(). Các giá trị này có thể là:
	0 - Mặc định - trả về số lượng từ đếm được
	1 - Trả về một mảng chứa các từ trong chuỗi
	2 - Trả về một mảng với key là vị trí của từ trong chuỗi và value là từ trong chuỗi
- charlist: chỉ định các ký tự đặc biệt sẽ được xem như một từ trong chuỗi 
*/
print_r( str_word_count($str, 0) );
echo "<br>";
print_r( str_word_count($str, 1) );
echo "<br>";
print_r( str_word_count($str, 2) );
echo "<br>";

// 3. Hàm strpos($string, $needle): Tìm vị trí của chuỗi $needle trong chuỗi $string, kết quả trả về vị trí đầu tiên của $needle nếu tìm thấy và false nếu không tìm thấy.
echo strpos($str, "World");
echo "<br>";
var_dump( strpos($str, "asd") );
echo "<br>";

/* 4. Trim
	- Hàm trim($string, $character); Xóa ký tự $character nằm ở đầu và cuối chuỗi $str, nếu ta không nhập $character thì mặc định nó hiểu là xóa khoảng trắng.
	- Hàm ltrim($string, $character): Tương tự như trim nhưng chỉ xóa bên trái
	- Hàm rtrim($string, $character): Tương tự như trim nhưng chỉ xóa bên phải
*/

$str = "             Hello Trim";
echo $str;
echo "<br>";
echo "Trim: " . trim($str);
echo "<br>";

// 5. strcmp(): so sánh chuỗi, trả về 0 nếu 2 chuỗi giống nhau, -1 nếu 2 chuỗi khác nhau
$str1 = "Hello";
$str2 = "Hello1";
var_dump( strcmp($str1, $str2) );
echo "<br>";

// 6. substr( string $string , int $start [, int $length ] ): cắt ra một phần của chuỗi từ vị trí start một đoạn được chỉ định bằng tham số length
	$str = "Hello World";
	echo "Substr: " . substr($str, 2);
	echo "<br>";
	echo "Substr: " . substr($str, -3, 5);
	echo "<br>";

/* 7. 
	- Hàm strtoupper(string): viết hoa hết
	- Hàm strtolower(string): viết thường hết
	- Hàm ucfirst(string): đổi chữ in ký tự đầu tiên của chuỗi.
	- Hàm ucwords(string): đổi chữ in ký tự đầu tiên của mỗi từ trong chuỗi.
*/
	$str = "i Am a big Man.";
	echo strtoupper($str);
	echo "<br>";
	echo ucfirst($str);
	echo "<br>";
	echo ucwords($str);