<?php

/*
	1. Hiểu được cookie là gì? Cơ chế hoạt động của cookie.
	2. Nắm được cách sử dụng cookie

	_______________________________________________________

	- Cookie là một đoạn văn bản ghi thông tin được tạo ra và lưu trên trình duyệt của máy người dùng
	- PHP có thể truy xuất được đến cookie từ trình duyệt (trình duyệt phải hỗ trợ)
	- Cookie sẽ không bị mất khi đóng ứng dụng (tuy thuộc vào thời gian sống của cookie): mặc định 15' nếu k có sự thay đổi cookie sẽ bị xóa.

*/

	setcookie('username', 'tqhung04', time() + 3600);

	if (isset($_COOKIE['username'])) {
		echo $_COOKIE['username'];
	}

	// setcookie('username', '', time() - 3600);


