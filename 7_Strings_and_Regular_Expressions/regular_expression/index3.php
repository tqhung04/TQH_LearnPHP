<?php

/*
Bài 04: Kiểm tra định dạng mật khẩu khi đăng ký.
Hãy kiểm tra mật khẩu của người dùng khi đăng ký vì như vậy sẽ an toàn hơn.  Yêu cầu:

    Mật khẩu ít nhất 8 ký tự
    Phải có chữ hoa, chữ thường, số và 1 ký tự đặc biệt
*/
if ( isset($_REQUEST['check']) ) {
	$num = $_REQUEST['numMobile'];
	echo $num;
	// $partern = '/[0-9]{4}-[0-9]{4}/';
	$partern = '';
	if ( preg_match($partern, $num) ) {
		echo 'TRUE';
	} else {
		echo 'FALSE';
	}
}

?>


<form action="#" method="get">
	<input type="password" name="numMobile">
	<input type="submit" name="check">
</form>
