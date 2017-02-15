<?php 
/*
	1. Hiểu được giao thức HTTP là gì, nguyên tắc hoạt động.
	2. Hiểu được cấu trúc của HTTP Request và HTTP Response và mối liên quan giữa chúng với PHP.
	3. Hiểu được cách thức hoạt động của client (browser) và server (web server)
	4. Phân biệt được sự khác nhau giữa HTTP và HTTPS

	____________________________________________________________________________________
	1. Hiểu được giao thức HTTP là gì, nguyên tắc hoạt động
		- HTTP là HyperText Transfer Protocol (giao thức truyền tải siêu văn bản). Đây là một giao thức thuộc tầng ỨNG DỤNG trong bộ các giao thức TCP/IP (bộ giao thức cho phép kết nối các hệ thống mạng không đồng nhất).
		- Nguyên tắc hoạt động: HTTP hoạt động theo mô hình Client-Server. Các máy tính đóng vai trò là máy khách (client), sau 1 thao tác nào đó -> client gửi request đến server -> đợi server respone lại kết quả. Việc trao đổi như vậy giữa client-server thông qua giao thức và HTTP là 1 trong những giao thức đó.
	2. Hiểu được cấu trúc của HTTP Request và HTTP Response và mối liên quan giữa chúng với PHP
*/
?>	
	<form action="respone.php" method="post">
		<input type="text" name="txt_username">
		<button value="Submit">Submit</button>
	</form>