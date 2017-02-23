<?php
/*
1. Hiểu được namespace là gì? Tại sao cần sử dụng.
	- namespace: dùng để định danh 1 lớp
	- lý do cấn sử dụng: ví như như ta có 1 file php chứa 1 class ABC, ta include 1 file php khác trong đó cũng có 1 class ABC, vậy chương trình sẽ nhận class ABC nào?

2. Biết cách khai báo namespace, cách sử dụng các class thuộc namespace khác.
	- Namespace có thể sử dụng để định danh cho 1 LỚP, 1 HẰNG hoặc 1 HÀM. Và khi sử dụng thì namespace phải đứng trên mọi thẻ. Nghĩa là trên namespace không được có khoảng trắng hoặc HTML.
*/

namespace Demo;
require("user.php"); 

class User {
	function __construct () {
		echo __CLASS__;
	}	
}

$a = new User;

echo "<br>";

// use Application\UserLib; ->Error
use Application\UserLib as PHP;

$b = new PHP\User;

echo "<br>";

echo "<br>";

echo PI;
echo PHP\PI;


