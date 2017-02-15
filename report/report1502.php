<?php

/*
1. Các method. API resfult
	GET (SELECT): Trả về một Resource hoặc một danh sách Resource.
	POST (CREATE): Tạo mới một Resource.
	PUT (UPDATE): Cập nhật thông tin cho Resource.
	PATCH (UPDATE): Cập nhật một thành phần, thuộc tính của Resouce.
	DELETE (DELETE): Xoá một Resource.
	HEAD – Trả về thông tin chung của một hoặc danh sách Resource.
	OPTIONS – Trả về thông tin mà người dùng được phép với Resource.

2. tìm hiểu thẻ đóng php, tại sao nên k nến có, nếu có thì trong TH nào sẽ bị lỗi -> xử lý lỗi?
	Ví dụ trong file 'closetag'
	- khi thực thi file b.php những đoạn code sau thẻ đóng ?> của file a.php sẽ được output trước khi hàm header được thực thi -> có thể tạo lỗi headers already sent.
	- trình duyệt sẽ chấp nhận output đó là header chứ không phải header mình đã define, sau đó sẽ không thể bổ sung header hay cookie nữa.
3. khi nào nên sử dụng biến static? nguyên nhân bị chậm?
	- dùng biến static khi muốn lưu lại giá trị của biến đó khi hàm kết thúc
	- nguyên nhân bị chậm: dùng nhiều biến static sẽ gây tốn nhiều RAM để lưu nên app có thể tốn RAM (hoặc thiếu RAM khi chạy -> app chạy chậm vì nó sẽ phải dùng RAM ảo (cache lại trên ổ cứng)
	
4. từ phiên bản PHP bao nhiêu thì khai báo đc $a = [1, 2];?
	Phiên bản 5.4
*/

