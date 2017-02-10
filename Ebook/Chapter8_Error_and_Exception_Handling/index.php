<!-- 
	1. die()
 -->
<?php 
	if (!file_exists("/tmp/test.txt")) {
		die("Không tìm thấy file này!!!");
	} else {
		$file=fopen("/tmp/test.txt","r");
		print "Mở file thành công!!!";
	}
	// phần code ....
?>