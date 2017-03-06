<?php

/*
Bài 01: Kiểm tra định dạng của thẻ cào điện thoại.
Hãy viết chuỗi Regex kiểm tra định dạng của thẻ cào điện thoại với cấu trúc như sau: xxxx-xxxx, trong đó x là các số từ [0-9]
*/
	
if ( isset($_REQUEST['checkNumberMobile']) ) {
	$num = $_REQUEST['numMobile'];
	echo $num;
	// $partern = '/[0-9]{4}-[0-9]{4}/';
	$partern = '/((0[1-9])|([1-2][0-9])|30|31)\/((0[1-9])|11|12)\/[0-9]{4}/';
	if ( preg_match($partern, $num) ) {
		echo 'TRUE';
	} else {
		echo 'FALSE';
	}
}


?>

<form action="#" method="get">
	<input type="text" name="numMobile">
	<input type="submit" name="checkNumberMobile">
</form>

