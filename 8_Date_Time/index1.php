<?php

// Biết được cách thao tác với ngày tháng trong PHP: so sánh, cộng/trừ ngày tháng, format định dạng..

// 1. Xem danh sách timezone:
	// $timezone = DateTimeZone::listIdentifiers() ;
	// foreach ($timezone as $item){
	//     echo $item . '<br/>';
	// }
	// Thiết lập timezone:
	// date_default_timezone_set('Tên Time Zone');

// 2. So sánh
$ngayhomnay = date("Y-m-d"); //Lấy thời gian hiện tại 
$ngaysosanh = "1995-08-20"; // Năm/Tháng/Ngày

// var_dump(strtotime($ngaysosanh));

if ( strtotime($ngaysosanh) < strtotime($ngayhomnay) ) {
	echo "Its too late..";
}

// 3. Cộng , Trừ
// mktime ($hour, $minute, $second, $month, $day , $year);
// In ra ngày mai
$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
echo date('d/m/Y', $tomorrow);
echo "<br>";

/* 4. Format định dạng:
date ($format, $timestamp = 'time()')
	$format là định dạng mà hàm này sẽ trả về
	$timestamp là thời gian truyền vào (kiểu INT), mặc định nó sẽ lấy thời gian hiện tại (chính là hàm time())
		d: trả về ngày tháng (số)
		D: trả về ngày của tháng (tiếng Anh)
		m: trả về tháng của năm (số)
		M: Trả về tháng của năm (tiếng Anh)
		y: trả trả về năm (2 số cuối của năm)
		Y: trả về năm đầy đủ 4 số
		H: trả về số giờ (kiểu 24h)
		h: trả về số giờ (kiểu 6h)
		i: trả về số phút
		s: trả về số giây
*/
echo date('d/m/Y - H:i:s');
echo "<br>";
echo date('\B\â\y \g\i\ờ \l\à H \g\i\ờ');
echo "<br>";
