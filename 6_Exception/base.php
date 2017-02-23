<?php

/*
1. Biết cách config để có thể hiển thị/ẩn các message lỗi, config các level lỗi được hiển thị
2. Biết cách log thông tin lỗi
3. Hiểu được khái niệm Exception và Exception Handling
4. Biết cách sử dụng try catch để bắt lỗi
*/

/* error_reporting(level)
E_ERROR			1		Các lỗi thời gian chạy(runtime error) nghiêm trọng. Đoạn mã buộc phải dừng thực thi.
E_WARNING		2		Các lỗi cảnh báo, không nghiêm trọng. Đoạn mã vẫn tiếp tục thực thi.
E_PARSE			4		Các lỗi phân tích trong thời gian biên dịch nghiêm trọng.
E_NOTICE		8		Các lỗi thông báo không nghiêm trọng.
E_USER_NOTICE	1024	Các lỗi thông báo không nghiêm trọng do người lập trình tự ấn định.
E_USER_WARNING	512		Các lỗi cảnh báo không nghiêm trọng do người lập trình tự ấn định.
E_USER_ERROR	256		Các lỗi thời gian chạy nghiêm trọng do người lập trình tự ấn định.
E_STRICT		2048	Các thông báo lỗi không nghiêm trọng.
E_ALL			8191	Hiển thị tất cả các loại lỗi
*/

/*
Tự định nghĩa: 

function myErrorHandler($level,$msg,$file,$line,$context) 

set_error_handler("myErrorHandler")

*/
function myErrorHandler($level,$msg,$file,$line,$context) {
	error_log("Xảy ra lỗi: [$level] $msg tại dòng $line thuộc file $file.\n", 3, "error.log");
	echo "<p><b>Xảy ra lỗi:</b> [$level] $msg tại dòng $line thuộc file $file</p>";
}

set_error_handler("myErrorHandler");
