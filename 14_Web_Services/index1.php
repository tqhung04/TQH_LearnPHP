<?php 

/*
	1. Hiểu được khái niệm Web service. Tại sao cần sử dụng Web service
	2. Hiểu được nguyên lý hoạt động giữa các ứng dụng sử dụng web service
	3. Biết được các định dạng trao đổi dữ liệu thường dùng khi làm việc với web service
	_________________________________________________________________________-
	1. Khái niệm:
	- Web service là một hệ thống phần mềm được thiết kế để hỗ trợ khả năng tương tác giữa các ứng dụng trên các thiết bị khác nhau thông qua mạng Internet
	- Tại sao cần sử dụng  webservice?
		+ giúp client và server tương tác với nhau ngay cả trên những nền tảng khác nhau.
		+ khả năng tái sử dụng cao
		+ tạo mối quan hệ tương tác lẫn nhau và mềm dẻo giữa các thành phần trong hệ thống
		+ thúc đẩy tích hợp, giảm sự phức tạp của hệ thống
	2. Nguyên lý hoạt động giữa các ứng dụng sử dụng web service
		- UDDI được sử dụng để đăng ký và khám phá Web service đã được miêu tả cụ thể trong WSDL. Giao tác UDDI sử dụng SOAP hoặc REST để nói chuyện với UDDI server, sau đó các ứng dụng SOAP hay REST yêu cầu một Web service. Các thông điệp SOAP được gửi đi chính xác bởi HTTP và TCP/IP.
	3. Các định dạng trao đổi dữ liệu thường dùng khi làm việc với web service:
		- Json
		- Xml
*/