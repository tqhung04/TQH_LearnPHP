<?php
    /*

    ~ try - Một chức năng ngoại lệ phải nằm trong một khối "try". Nếu trường hợp ngoại lệ không kích hoạt, mã sẽ tiếp tục như bình thường.
    ~ throw - Đây là cách kích hoạt một ngoại lệ.
    ~ catch - lấy ra một ngoại lệ và tạo ra một đối tượng có chứa các thông tin ngoại lệ.
    */

    /*
    Nên dùng khi :
        - Getting data from another source (eg. curl)
        - Getting data from files
        - DB-Exceptions
    */

    /*
        + getMessage() - lấy chuỗi thông báo của ngoại lệ
        + getCode() - lấy mã ngoại lệ
        + getfile() - lấy tên file nguồn
        + getline() - lấy dòng gây ra lỗi
        + getTrace() - lấy dấu vết lỗi
        + getTraceAsString() - lấy chuỗi dấu vết
    */

    
    function checkNum ($num) {
        if ( $num > 5 ) {
            throw new Exception("Gia tri phai nho hon 5");
        }
    }

    try {
        checkNum(8);
    }
    catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    finally {
        echo "End Try Catch";
    }

?>