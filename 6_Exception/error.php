<?php 
include "base.php";
// ini_set('display_errors', true);
// error_reporting(E_ERROR);
 ?>
 
<!DOCTYPE html>
<html>
<head>
<title>Bài 7 - Error</title>
</head>
 
<body>
 
<?php
 
//Lỗi notice biến bar chưa được khai báo khi gán cho biến foo
$foo = $bar;
 
//Lỗi warning khi lấy một số chia cho 0
echo 105/0;
 
//Lỗi fatal(nghiêm trọng) khi gọi một hàm chưa được khai báo
echo myFunction();
 
?>
 
</body>
</html>