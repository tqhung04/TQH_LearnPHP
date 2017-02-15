<?php 
/*
	1. Nằm được tổng quát về PHP (lịch sử, các phiên bản)
		- PHP/FI 2.0 được phát triển từ một sản phẩm có tên là PHP/FI, sản phẩm này được viết bằng C
		- PHP 3.0: 
			+ được Andi Gutmans và Zeev Suraski tạo ra năm 1997
			+ chú trọng vào việc phát triển các ứng dụng thương mai điện tử
			+ cung cấp cho người dùng cuối một cơ sở hạ tầng chặt chẽ dùng cho nhiều cơ sở dữ liệu, giao thức và API khác nhau
			+ cho phép người dùng có thể mở rộng theo module
			-> điều này làm cho PHP3 thành công hơn so với PHP2.
		- PHP 4:
			+ được công bố năm 2000
			+ đem đến nhiều chức năng mới:
				. khắc phục khả năng mở rộng vẫn còn yếu kém từ PHP 3
				. hỗ trợ hướng đối tượng
				. hỗ trợ xử lý session
				. khả năng mã hóa
				. hỗ trợ ISAPI: giúp người dùng sử dụng PHP kết hợp với IIS Webserver của MS
				. Hỗ trợ Java native: phiên bản 4 cung cấp sự hỗ trợ cho liên kết với các đối tượng Java từ một ứng dụng PHP
				. tích hợp Regular Expression
				. nhiều cách xử lý thông tin người dùng nhập vào hơn
			-> số lượng lập trình viên và website sử dụng PHP tăng đột biến
		- PHP 5:
			+ được công bố năm 2014 sau 1 chuỗi khá dài các bản kiểm tra thử như: Beta 4, RC1, RC2, RC3.
			+ đem đến nhiều chức năng mới:
				. cải thiện đáng kể khả năng hướng đối tượng: hàm khởi tạo, hàm hủy, cloning object, lớp trừu tượng, phạm vi biến, giao diện và cách xử lý đối tượng
			-> thời kỳ đỉnh cao trong lịch sử của PHP, theo Netcraft có gần 19 triệu domain cài đặt PHP
		- PHP 5.3: mặc dù chỉ là bản mở rộng nhưng nó là sự nâng cấp đáng kể của PHP 5 như: namespace, closure, Late static binding, hàm lambda, trình điều khiển MySql mới và 1 số những cú pháp mới.
		- PHP 6:
			+ 	PHP 6 = PHP 5 + Unicode? tuy nhiên vấn đề giải quyết unicode trong phiên bản này đã thất bại gây ra nhiều lỗi phức tạp -> họ quyết định chuyển qua bản php 7
		- PHP 7:
			http://php.net/manual/en/migration70.new-features.php
	2. Biết được PHP là gì và có thể làm gì
		- PHP (Hypertext Preprocessor) là ngôn ngữ script trên server được thiết kế để dễ dàng xây dựng các trang Web động. Mã PHP có thể thực thi trên Webserver để tạo ra mã HTML và xuất ra trình duyệt web theo yêu cầu của người sử dụng.
		- PHP có thể làm gì?
			+ Quản lý nội dung động, database, session, v..v..
		    + PHP thực hiện các hàm hệ thống, ví dụ: từ các file trên một hệ thống, nó có thể tạo, mở, đọc, ghi và đóng chúng.
		    + PHP có thể xử lý các form, ví dụ: thu thập dữ liệu từ form, lưu dữ liệu vào một file, thông qua email bạn có thể gửi dữ liệu, trả về dữ liệu tới người dùng.
		    + Bạn có thể thêm, xóa, sửa đổi các phần tử bên trong Database của bạn thông qua PHP.
		    + Truy cập các biến Cookie và thiết lập Cookie.
		    + Sử dụng PHP, bạn có thể hạn chế người dùng truy cập vào một số trang trong Website của bạn.
		    + Nó có thể mật mã hóa dữ liệu.
	3. Hiểu rõ đặc trưng của PHP với các ngôn ngữ khác
		+ Mã nguồn mở
	    + Chuyên dùng cho Web
	    + Phổ biến: hơn 70% trang web đang dùng PHP
	    + Cộng đồng lớn
	    + Nhiều tài liệu
	    + Dễ dàng học
	    + Bảo mật khá tốt
*/