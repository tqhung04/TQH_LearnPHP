<?php
/*
	1. Biết được mysqli là gì?
	2. Biết được cách thức thao tác với database sử dụng thư viện mysqli
	3. Hiểu transaction là gì và biết cách làm việc với transaction bằng mysqli
	______________________________________________________________________
	- là thư viện mà PHP cung cấp để kết nối với cơ sở dữ liệu

*/

// $conn = mysqli_connect('localhost', 'root', '', 'phpbasic') or die ('Không thể kết nối tới database');
// $sql = "SELECT * FROM test";
// $result = mysqli_query($conn, $sql);

// if ( !$result ) {
//     die ('Câu truy vấn bị sai');
// }
// while ($row = mysqli_fetch_assoc( $result) ) {
//     print_r($row);
// }

/*
	3. Hiểu transaction là gì và biết cách làm việc với transaction bằng mysqli
		- Transaction (giao dịch) là một nhóm, có thứ tự, các hoạt động thao tác trên cơ sở dữ liệu, nhưng được xem như một đơn vị thao tác duy nhất.
		- Sử dụng Transaction
			
*/

$conn = mysqli_connect('localhost', 'root', '', 'phpbasic') or die ('Không thể kết nối tới database');
try {
	$conn->begin_transaction();

	$conn->query("INSERT INTO test (demo) VALUES ('AAAA')");
	$conn->query("INSERT INTO test (demo) VALUES ('BBBB')");

	$conn->commit();
} catch (Exception $e) {
	$mysqli->rollback();
}

$conn->close();
