<?php 
	/*
		1. Cài đặt được PHP, Apache, MySQL.
		2. Thiết lập được môi trường phát triển, làm quen được với các IDE thường sử dụng (recommend Netbeans khi làm việc và sublime text khi study).
		3. Biết cách cấu hình VirtualHost trong Apache và các cấu hình khác trong php.ini
			- 1 số hàm trong file php.ini
				+ disable_functions(): vô hiệu hóa 1 số hàm
				+ expose_php() : ẩn thông tin PHP trên HTTP -> On or Off
				+ max_execution_time: tăng time thực thi 1 file PHP
				+ memory_limit: bộ nhớ tối đa cho việc xử lý kịch bản PHP
				+ error_reporting: chi tiết list report : 
					http://php.net/manual/en/errorfunc.constants.php
				+ display_errors: hiển thị lỗi ra ngoài website
				+ log_errors : ghi các lỗi ra file log
				+ file_uploads: thiết lập upload file
				+ upload_max_filesize

		4. Biết cách sử dụng Xdebug để debug app trong Netbeans"
	*/
		echo "Hello";
		
		phpinfo();
?>