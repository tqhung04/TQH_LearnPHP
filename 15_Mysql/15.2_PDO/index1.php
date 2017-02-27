<?php

try {
    // Kết nối
    $conn = new PDO("mysql:host=localhost;dbname=phpbasic", 'root', '');
    // Thiết lập exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Bắt đầu transaction
    $conn->beginTransaction();
     
    // Thực thi từng câu truy vấn
    $conn->exec("INSERT INTO test (demo) 
        VALUES ('hello')");
    $conn->exec("INSERT INTO test (demo) 
        VALUES ('hi')");
 
    // Nếu mọi thứ thành công thì commit
    $conn->commit();
     
    echo "Thao tác thành công";
} 
catch (PDOException $e) {
    // Nếu xuất hiện lỗi thì rollback lại các thao tác
    $conn->rollback();
    echo "Lỗi: " . $e->getMessage();
}
 
$conn = null;