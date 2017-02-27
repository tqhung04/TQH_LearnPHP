<?php

/*
	1. Nắm được các kiểu dữ liệu thông dụng trong Mysql
	2. Nắm được các câu lệnh truy vấn trong Mysql, sự khác nhau giữa các loại Join
	3. Hiểu được nguyên lý của việc indexing, full-text search, query caching, replication
	4. Biết được cách sử dụng các tools như: mysql command line, phpMyAdmin
	5. Biết được các storage engine là gì và sự khác nhau giữa chúng

	___________________________________________________________________________________
	1. Nắm được các kiểu dữ liệu thông dụng trong Mysql
		1. Kiểu dữ liệu số (Numeric Data Types)
			TINYINT		Kích thước rất nhỏ
			SMALLINT	Kích thước nhỏ
			MEDIUMINT	Kích thước vừa
			INT			Kích thước chuẩn
			BIGINT		Kích thước lớn
			DECIMAL		Số cố định
			FLOAT		Số có dấu chấm động
			DOUBLE		Số có dấu chấm động lớn hơn
			BIT			Kiểu BIT
		2. Kiểu chuỗi (String)
			CHAR		Có chiều dài cố định và không ở dạng nhị phân
			VARCHAR		Có chiều dài và ta phải xác định chiều dài cho nó, không ở dạng nhị phần
			BINARY		Chuỗi nhị phân có độ dài cố định
			VARBINARY	Chuỗi nhị phân có độ dài thay đổi
			TINYBLOB	BLOB rất nhỏ
			BLOB		BLOB nhỏ
			MEDIUMBLOB	BLOB vừa
			LONGBLOB	BLOB lớn
			TINYTEXT	Chuỗi không nhị phân rất nhỏ
			TEXT		Chuỗi không nhị phân nhỏ
			MEDIUMTEXT	Chuỗi không nhị phân trung bình
			LONGTEXT	Chuỗi không nhị phân lớn
			ENUM		enumeration
			SET			Bộ
		3. Kiểu ngày tháng (Date and Date time)
			DATE		Kiểu ngày tháng, định dạng YYYY-MM-DD
			TIME		Kiểu thời gian, định dạng HH:MM:SS
			DATETIME	Kiểu ngày tháng có thời gian, định dạng YYYY-MM-DD HH:MM:SS
			TIMESTAMP	Kiểu ngày tháng có thời gian, định dạng YYYY-MM-DD HH:MM:SS
						Giá trị này sẽ được chuyển đổi từ múi giờ hiện tại sang UTC trong khi lưu trữ, và sẽ chuyển trở lại múi giờ hiện tại khi lấy dữ liệu ra.
			YEAR	Kiểu năm, định dạng YYYY
		4. Các loại dữ liệu không gian (Spatial)
			GEOMETRY				Giá trị không gian của bất kì loại nào
			POINT	 				Một cặp điểm tọa độ X:Y
			LINESTRING				Một đường cong
			POLYGON					Một đa giác
			GEOMETRYCOLLECTION		Một dãy các GEOMETRY
			MULTILINESTRING			Một dãy các đường cong
			MULTIPOINT				Một day các điểm
			MULTIPOLYGON			Một dãy các đa giác

	2. Nắm được các câu lệnh truy vấn trong Mysql, sự khác nhau giữa các loại Join
		1. Câu lệnh SELECT .... FROM
			SELECT danh_sach_cac_cot
			FROM ten_bang
			WHERE dieu_kien_loc
			LIKE (lọc dữ liệu gần giống với chuỗi cần tìm) 
				WHERE tieu_de LIKE '%php%'
			IN (Lọc dữ liệu nằm trong danh sách)
				WHERE ma IN(3,4,7,9)
			BETWEEN (Lọc dữ liệu nằm giữa hai giá trị) 
				WHERE ngay_tao BETWEEN '2015:1:1' AND '2015:12:31'
			GROUP BY
				SELECT danh_sach_cac_cot
				FROM ten_bang
				[WHERE dieu_kien_loc]
				GROUP BY danh_sach_cot_can_nhom
				HAVING dieu_kien_loc_sau_khi_nhom
					SELECT cd.ma as ma_chu_de,cd.ten as ten_chu_de,count(bv.ma) as so_luong
					FROM bai_viet bv,chu_de cd
					WHERE bv.ma_chu_de = cd.ma
					GROUP BY bv.ma_chu_de
					HAVING COUNT(bv.ma) >10
			ORDER BY
				SELECT ma,tieu_de,tom_tat,ngay_dang
				FROM bai_viet
				ORDER BY ngay_dang DESC
			LIMIT
				SELECT ma,tieu_de,tom_tat,ngay_dang
				FROM bai_viet
				ORDER BY ngay_dang DESC
				LIMIT 0,5
		2. Truy vấn con
			- Truy vấn con phải nằm trong dấu ngoặc đơn ()
			- Truy vấn con chỉ được tham chiếu đến 1 cột hoặc một biểu thức.
			- vd:
				SELECT ma,tieu_de,tom_tat,ngay
				FROM bai_viet
				WHERE ngay = (SELECT MAX(ngay) FROM bai_viet)
		3. Câu lệnh INSERT INTO
			INSERT INTO Ten_bang [(Danh sách các cột)]
			VALUES (Danh sách các giá trị)
		4. Câu lệnh UPDATE
			UPDATE Tên_Bảng
			SET Tên_cột = Giá_trị
			WHERE Điều_kiện_cập_nhật
		5. Câu lệnh DELETE
			DELETE FROM tên_bảng
			WHERE Điều_kiện_xóa

	* Phân biệt các loại JOIN:
		INNER JOIN: trả về các hàng khi có sự so khớp từ 2 bảng
		LEFT JOIN: trả về tất cả hàng từ bảng bên trái, ngay cả khi không có so khớp nào trong bảng bên trái
		RIGHT JOIN: trả về tất cả hàng từ bảng bên phải, ngay cả khi không có so khớp nào trong bảng bên trái
		FULL JOIN: trả về tất cả hàng từ 2 bảng, ngay cả khi không có so khớp nào trong 2 bảng

	3. Hiểu được nguyên lý của việc indexing, full-text search, query caching, replication
		- indexing:
			+ Index trong SQL cũng giống như mục lục của những quyển sách, giúp SQL Server xác định chính xác nơi dữ liệu được lưu trữ.
			+ Cho phép SQL tìm thấy dữ liệu mà không cần phải quét toàn bộ Table
		- full-text search:
			+ Nếu search bằng LIKE:
				~ Không chính xác: 
				~ Tốc độ truy vấn chậm, ‘%keyword%’ không dùng index -> scan toàn bộ dữ liệu từ đầu đến cuối
				~ Vấn đề với tìm kiếm tiếng Việt có dấu và không dấu
			+ FTS hiện tại chỉ có trên storage engine MyISAM và đã có trên InnoDB (>=5.6 beta).
			+ Có 2 chế độ tìm kiếm:
				~ BOOLEAN MODE: không có default sorting, và trong chế độ này thì ta có thể qui định từ khóa nào sẽ xuất hiện, và từ khóa nào không xuất hiện trong kết quả trả về
				~ NATURAL LANGUAGE MODE:  tìm kiếm những kết quả thích hợp (relavance) hơn là chính xác keyword được tìm.
		- query caching
			+ dùng để tăng tốc độ website
			+ cache lại kết quả của các lần query vào bộ nhớm RAM
			+ các thông số cài đặt
				query_cache_type = 1
				query_cache_size = 256M
				query_cache_limit = 2M
				query_cache_type : enable or disable tính năng query cache (enable = 1 ; disable = 0)
				query_cache_size : lượng RAM dành cho việc cache query result.
				query_cache_limit: dung lượng tối đa của một query result mà mình cho phép cache.

		- replication
			+ Replication là một tập các giả pháp cho phép sao chép, phân phối dữ liệu và đối tượng CSDL từ một CSDL này đến CSDL khác, sau đó đồng bộ giữa hai CSDL với nhau.
			+ Sao chép và phân phối dữ liệu trên nhiều Server khác nhau
			+ Phân phối bản sao dữ liệu theo lịch trình nhất định.
			+ Phân phối dữ liệu vừa thay đổi trên nhiều Server khác nhau.
			+ Cho phép nhiều người dùng và nhiều Server kết hợp dữ liệukhacs nhau một cách thống nhất mà không sợ mất dữ liệu.
			+ Xây dựng CSDL sử dụng cho những ứng dụng trực tuyến hay ngoại tuyến
			+ Xây dụng ứng dụng Web khi người dùng cần trình bày một số lượng lớn dữ liệu
			+ Các loại Replication:
				1. Snapshot Replication
					Các tùy chọn có trong loại nay cho phép ban lọc dữ liệu sẽ dược nhân rộng và subscribers có thể lam thay đổi chúng để nhân rộng những thay đổi này Publisher cung với các subscribers khác.
				2. Transactionnal replication
					Đối với Transaction Replication, nếu dữ liệu do Publissher thay đổi trong khi nhân rộng thì các chuyển tác riêng lẻ được nắm giữ và nhân bản đến Subcriber.
				3. Merge Replication
					Cho phép nhiều server làm việc độc lập (online hay ofline ) và hợp nhất dữ liệu thay đổi từ nhiều vùng khác nhau và một vùng thành viên và thống nhất dữ liệu sau đó. Đầu tiên dược áp dụng cho subscribers sau đó SQL 2000 sẽ theo dõi những thay đổi dựu liệu publisher và subscribers Dữ liệu được đồng bộ hóa giữa các server với nhau theo một lịch trình cụ thể .

	4. Biết được cách sử dụng các tools như: mysql command line, phpMyAdmin
		- mysql command line
			+ login
				mysql -u root -p
			+ Tạo database mới
				create database db_name;
			+ Chọn CSDL để làm việc
				use db_name;
			+ SHOW DATABASES;
			+ SHOW TABLES;
			+ SHOW TABLE STATUS
			......

	5. Biết được các storage engine là gì và sự khác nhau giữa chúng
		- Storage Engine thực chất là cách MySQL lưu trữ dữ liệu trên đĩa cứng
		- Các loại Storage Engine
			- MyISAM
				+ được tối ưu hóa tốc độ nén
				+ kích thước của MyISAM có thẻ lên tới 256TB
				+ các bảng như tin tức, chuyên mục tin tức, sản phẩm, ... thì chúng ta sử dụng kiểu MyISAM để tốc độ truy vấn nó nhanh hơn
				+ các phiên bản bé hơn 5.5 thì MyISAM là kiểu bảng mặc định khi bạn tạo mới một table, kể từ bản 5.5 trở đi thì mặc định nó sẽ lấy kiểu InnoDB.
			- InnoDB
				+ có đầy đủ các tính năng ACID-compliant và transaction và nó cũng được tối ưu hóa cho tính perormance
				+ Bảng InnorDB hỗ trợ khóa ngoại (Foreign Key), commit, rollback trong transaction
				+ Kích thước của InnoDB có thể lên tới 64TB, con số này khá nhỏ so với bảng MyISAM
			- MERGE
			- MEMORY (HEAP)
			- ARCHIVE
			- CSV
			- FEDERATED
*/