<?php

/*
	- Regular Expression : biểu thức chính quy dùng để xử lý chuỗi nâng cao
	- Cú pháp: 
				preg_match($pattern, $subject, $matches)

		+ $pattern là chuỗi Regular Expression Pattern
		+ $subject là chuỗi nguồn mà chúng ta muốn so khớp với $pattern
		+ $matches là danh sách kết quả trả về đúng khi so khớp $pattern và $subject



1. '/abc/'		: kiểm tra có tồn tại chuỗi 'abc' hay không (có thể chỉ 1 phần của chuối subject)
2. '/^abc$/'	: so sánh từ đầu đến cuối của chuỗ	i subject
3. '/[a-z]/'	: kiểm tra chuỗi subject có chữ in thường 	: k
4. '/[A-Z]/'	: kiểm tra chuỗi subject có chữ in hoa k
5. '/[a-zA-Z0-9]/'	: Pattern là số, ký tự in hoa hoặc in thường
6. /^[a-z]{5,10}$/	: kiểm tra là chữ in thường dài từ 5 đến 10 ký tự
*/

$partern = '/[A-Z]/';
$subject = 'qưc A';
if (preg_match($partern, $subject)){
    echo 'Chuỗi regex so khớp';
}

$partern = '/[a-zA-Z0-9]/';
$subject = '!';
if (preg_match($partern, $subject)){
    echo 'Chuỗi regex so khớp';
}

$partern = '/^[a-z]{5,10}$/';
$subject = 'addww';
if (preg_match($partern, $subject)){
    echo 'Chuỗi regex so khớp';
}

