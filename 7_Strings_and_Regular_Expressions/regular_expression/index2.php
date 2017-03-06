<?php

/*
Bài 02: Kiểm tra định dạng ngày tháng năm.
Hãy kiểm tra một chuỗi có đúng định dạng ngày tháng năm hay không dd/mm/yyyy. Lưu ý là đối với ngày thì có thể từ 1 -> 31.
*/

if ( isset($_REQUEST['checkNumberMobile']) ) {
	$num = $_REQUEST['numMobile'];
	echo $num;
	$partern = '/[1-31]/[1-12]/[1-9]{2}/';
	if ( preg_match($partern, $num) ) {
		echo 'TRUE';
	} else {
		echo 'FALSE';
	}
}


?>

<form action="#" method="get">
	<i>Nhap vao chuoi ngay thang theo dinh dang: dd/mm/yy</i><br>
	<input type="text" name="numMobile">
	<input type="submit" name="checkNumberMobile" value="CHECK NOW">
</form>

