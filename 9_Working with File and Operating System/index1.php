<?php

/*
1. Biết cách thao tác với file và directory trong PHP như: tạo mới/xóa/kiểm tra file/directory có tồn tại hay không?
2. Biết cách chạy các chương trình của hệ điều hành thông qua PHP
*/


/* MỞ FILE - ĐÓNG FILE
_________________
	r 	Read only
	r+ 	Read + Write
	w 	Write only
	w+ 	Write + Read. Nếu file này tồn tại thì nội dung cũ sẽ bị xóa đi và ghi lại nội dung mới, còn nếu file chưa tồn tại thì nó tạo file mới
	a 	Mở dưới dạng append dữ liệu, chỉ có write và nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới
	a+ 	Mở dưới dạng append dữ liệu, bao gồm write và read. Nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới
	b 	Mở dưới dạng chế độ binary
*/
	// $path = 'data.txt';
	// $fp = @fopen($path, "r");
	// // Kiểm tra file mở thành công không
	// if (!$fp) {
	//     echo 'Mở file không thành công';
	// }
	// else{
	//     echo 'Mở file thành công';
	//     fclose($fp);
	// }
	// echo "<br>";

/* ĐỌC FILE
________________
Có 3 cách đọc file:
- Cách 1: đọc từng ký tự: 	fgetc($fp)
- Cách 2: đọc từng dòng: 	fgets($fp)
- Cách 3: đọc hết file: 	fread($fp, $size)
*/

// Cách 1: đọc từng ký tự:
	// echo "<br>Đọc từng ký tự <br>";
	// if (!$fp) {
	//     echo 'Mở file không thành công';
	// }
	// else {
	//     // Lặp qua từng ký tự để đọc
	//     while(!feof($fp))
	//     {
	//         echo fgetc($fp);
	//     }
	// }

// Cách 2: đọc từng dòng
	// echo "<br>Đọc từng dòng <br>";
	// if (!$fp) {
	//     echo 'Mở file không thành công';
	// }
	// else {
	//     // Lặp qua từng dòng để đọc
	//     while(!feof($fp))
	//     {
	//         echo fgets($fp);
	//     }
	// }

// Cách 3: đọc hết file
	// if (!$fp) {
	//     echo 'Mở file không thành công';
	// }
	// else {
	//     // Đọc file và trả về nội dung
	//     $data = fread($fp, filesize($path));
	//     // echo $data;
	//     echo nl2br($data);
	// }

// Cách 4: file_get_contents($file)

/* GHI FILE
_________________________
	C1: fwrite($fp, $content)
	C2: file_put_contents($file, $content);
*/
	// $file = 'data.txt';
	// $current = file_get_contents($file);
	// $current .= "John Smith\n";
	// file_put_contents($file, $current);

	// echo file_get_contents($file);


/*
_________________________
1. Kiểm tra file có tồn tại hay không: 				file_exists($path)	
2. Kiểm tra file có được cấp quyền ghi không: 		is_writable ($path)
3. Đổi tên file: 									rename($path1, $path2)
4. Copy file:										copy($source, $dest)
5. Xóa file:										unlink($path)
6. Kiểm tra một đường dẫn folder có tồn tại không:	is_dir($filename)
7. Tạo một folder mới:								mkdir($path)
8. Trả về thư mục hiện tại đang làm việc:			getcwd();
*/

// if ( file_exists("db/data.txt") ) {
// 	echo "File tồn tại";
// }

// copy("db/data.txt", "db/data_copy.txt");

// unlink("db/data_copy.txt");

// if (is_dir("../8_Date_Time")) {
// 	echo "Đường dẫn tồn tại";
// 	mkdir("../8_Date_Time/Test mkdir()");
// } else {
// 	echo "Đường dẫn không tồn tại";
// }

// echo getcwd();