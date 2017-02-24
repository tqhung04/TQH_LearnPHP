<?php

/*
	1. Hiểu được thế nào là HTML Form, Form được sử dụng để làm gì?
	2. Phân biệt được sự khác nhau giữa các method POST/GET
	3. Biết cách validate dữ liệu được gửi lên từ form
	_______________________________________________________________
	1. Hiểu được thế nào là HTML Form, Form được sử dụng để làm gì?
		- form là 1 tag của HTML: <form></form>
		- sử dụng để thu thập thông tin

	3. Biết cách validate dữ liệu được gửi lên từ form
*/
?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = test_input($_POST["txtUsername"]);
		$email = test_input($_POST["txtEmail"]);
		$password = test_input($_POST["pasPw"]);
	}

	function test_input ($data) {
		$data = trim($data);			// xóa khoảng trống đầu cuối
		$data = stripslashes($data); 	// bỏ tất cả ký tự \
		$data = htmlspecialchars($data);// ngăn chặn định dạng html
		return $data;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="" method="POST">
		<label>Email</label>
		<input type="text" name="txtEmail"><br>
		<label>Username</label>
		<input type="text" name="txtUsername"><br>
		<label>Password</label>
		<input type="password" name="pasPw"><br>
		<input type="submit" name="subRegister">
	</form>

	<?php
		echo $username;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $password;
	?>
</body>
</html>