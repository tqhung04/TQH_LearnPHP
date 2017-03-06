<?php
/*
	1. Hiểu được MVC là gì, ý nghĩa của các thành phần trong mô hình MVC
	2. Hiểu được vai trò của từng thành phần trong MVC
	3. Có thể tự xây dựng 1 ứng dụng PHP theo đúng mô hình MVC

	____________________________________________________________
	1. Hiểu được MVC là gì, ý nghĩa của các thành phần trong mô hình MVC
		- MVC: Mô hình MVC (Model - View - Controller) là một kiến trúc phần mềm hay mô hình thiết kế được sử dụng trong kỹ thuật phần mềm. Nó giúp cho các developer tách ứng dụng của họ ra 3 thành phần khác nhau Model, View và Controller. Mỗi thành phần có một nhiệm vụ riêng biệt và độc lập với các thành phần khác.
	2. Ý nghĩa các thành phần
		- Model:
			có nhiệm vụ thao tác với cơ sở dữ liệu, chứa tất cả các hàm hay phương thức truy vấn trực tiếp với CSDL và Controller sẽ thông qua các hàm đó để lấy dữ liêu rồi gửi qua View
		- View: 
			tiếp nhận dữ liệu từ controller và hiển thị nội dung sang các đoạn mã html
		- Controller: 
			đóng vai trò trung gian giữa Model và View, tiếp nhận yêu cầu từ client sau đó gọi đúng model tương ứng và gửi data qua View
*/	
