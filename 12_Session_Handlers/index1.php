<?php

/*
	1. Hiểu được bản chất Session là gì? Nguyên lý hoạt động của Session
	2. Biết được những config có liên quan trong php.ini khi làm việc với Session
	3. Biết cách làm việc với Session, tạo/hủy Session
	4. Biết cách encode/decode Session data.
	5. Biết cách tạo Custom Session Handler
	_________________________________________________________________________________

	1.
	- Session là được hiểu là 1 phiên làm việc trong đó người sử dụng giao tiếp với 1 ứng dụng. 
	- Session bắt đầu khi người sử dụng truy cập vào ứng dụng lần đầu tiên, và kết thúc khi người sử dụng thoát khỏi ứng dụng.
	- Mỗi session sẽ có Session ID riêng biệt và chứa 1 số thông tin nhất định của người dùng.
	- Session ID được client lưu trữ trong cookie và gửi kèm theo mỗi request đến server

	2. http://php.net/manual/en/session.configuration.php
	3. Tham khảo mục: 3_cac_khai_niem_co_ban/3.4_Variables
	4. 
*/
	echo session_save_path() . "<br>";

	session_save_path("session_data");

	session_start();

	echo session_id();

	$_SESSION["product_code"] = 2222;
	$_SESSION["logged_in"] = "yes";
	$enc_session = session_encode();
	print "<b>Encoded Session Data:<br/></b>";
	print $enc_session . "<br/><br/>";


	session_decode($enc_session);
	// printing Reloaded $_SESSION
	print "<b>Reloaded SESSION Array:<br/></b>";
	print "<pre>";
	print_r($_SESSION);
	print "</pre>";

	// 5

	// 1. Đăng ký Custom Session Handler
    session_set_save_handler("open","close","read","write","destroy","garbage");
    // 2. Tạo bộ kiểm soát lưu trữ session

   	/*
		CREATE TABLE session (
			session_id CHAR(32) NOT NULL,
			session_data TEXT NOT NULL,
			session_lastaccesstime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (session_id)
		);
   	*/

	// 3. Mở Session :
        function open( $path, $name ){
            $db = new PDO ("mysql:host=PHPBasic;dbname=db_test","root","");
            $sql = "INSERT INTO session SET session_id = ".$db->quote($sessionId).
                         ",session_data = '' ON DUPLICATE KEY UPDATE session_lastaccesstime = NOW()";
            $db->query($sql);
        }

    // 4. Đọc:
        function read( $sessionId ) {
            $db = new PDO ("mysql:host=PHPBasic;dbname=db_test","root","");
            $sql = "SELECT session_data FROM session WHERE session_id = ".
                         $db->quote($sessionId);
            $result = $db->query($sql);
            $data = $result->fetchColumn();
            $result->closeCursor();
           
            return $data;
        }

    // 5. Ghi:
		function write( $sessionId, $data ) {
			$db = new PDO ("mysql:host=PHPBasic;dbname=db_test","root","");
			$sql = "INSERT INTO session SET session_id = ".$db->quote($sessionId).
			", session_data = ".$db->quote($data)." ON DUPLICATE KEY UPDATE
			session_data = ".$db->quote($data);
			$db->query($sql);
		}

	//6. Đóng:
		function close(){
	        $sessionId = session_id();
	        // thêm action nếu có
	    }

	// 7. Hủy:
	    function destroy($sessionId) {
	        $db = new PDO ("mysql:host=PHPBasic;dbname=db_test","root","");
	        $sql = "DELETE FROM session WHERE session_id = ".$db->quote($sessionId);
	        $db->query($sql);
	        setcookie(session_name(),"",time()-3600);
	    }

	// 8. Dọn session
        function gc( $lifetime ){
            $db = new PDO("mysql:host=myhost; dbname=mydb", "myuser","mypassword");
            $sql = "DELETE FROM session WHERE session_lastaccesstime < DATE_SUB (NOW(),INTERVAL".
                     $lifetime."SECOND)";
            $db->query($sql);
        }