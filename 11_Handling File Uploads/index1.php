<?php
/*
	1. Biết cách cấu hình php.ini để làm việc với file upload, tăng giảm giới hạn upload
	2. Hiểu được nguyên lý (cách thức) file được upload
	3. Biết cách tạo form upload, lưu trữ, xử lý file sau khi upload (lưu trữ, di chuyển, đổi tên, đọc ghi file..)
*/

	if (isset($_POST['uploadclick'])) {
        if (!isset($_FILES['avatar'])) {
            echo 'File Upload Bị Lỗi';
        } else {
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'images/' . $_FILES['avatar']['name']);
            $oldname = 'images/' . $_FILES['avatar']['name'];
            $newname = 'images/' . 'changeName.png';
            rename($oldname , $newname);
            echo 'File Uploaded';
        }
    } else {
        echo 'Bạn chưa chọn file upload';
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
        <input type="file" name="avatar"/>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form>
</body>
</html>