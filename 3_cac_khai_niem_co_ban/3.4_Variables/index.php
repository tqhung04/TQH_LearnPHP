<?php
/*
	1. Nắm được cách khai báo biến, gán giá trị cho biến
	2. Phân biệt được giữa gán theo giá trị và gán theo tham chiếu
	3. Hiểu được về phạm vi của các biến, phân biệt được sự khác nhau của các phạm vi.
	4. Hiểu được khái niệm Static variable
	5. Hiểu được khái niệm superglobal variable và các biến superglobal hay dùng: $_POST, $_GET, $_REQUESt, $_SESSION, $_COOKIE, $_SERVER, $_ENV
	6. Biết cách sử dụng Variable Variables"
	
	_________________________________________________________________________
	2. Phân biệt được giữa gán theo giá trị và gán theo tham chiếu
*/
	$a = 1;
	$b = &$a;
	$b = 2;
	var_dump($a);
	var_dump($b);

	// 3. Hiểu được về phạm vi của các biến, phân biệt được sự khác nhau của các phạm vi.
		// 3.1 Biến cục bộ (local)
		function show_local () {
			$x = 3;
		}
		var_dump($x);
		// 3.1 Biến toàn cục (global): không được sử dụng bên trong hàm
		$y1 = 10;
		$y2 = 10;
		function show_global () {
			var_dump($y1); //->null

			global $y2;
			var_dump($y2); //->10
		}
		show_global();
		// 3.1 Biến tĩnh (static)
		function show_static () {
			static $z = 1;
			echo $z;
			$z += 1;
		}
		show_static();
		show_static();
		show_static();
		echo "<br>";
		// 5. Hiểu được khái niệm superglobal variable và các biến superglobal hay dùng: $_POST, $_GET, $_REQUESt, $_SESSION, $_COOKIE, $_SERVER, $_ENV (biến cung cấp môi trường cho script)
		echo $_SERVER['PHP_SELF'] . "<br>";
		echo $_SERVER['SERVER_ADDR'] . "<br>"; 	
		echo $_SERVER['SERVER_NAME'] . "<br>" ;	
		echo $_SERVER['SERVER_SOFTWARE'] . "<br>" ;
		echo $_SERVER['SERVER_PROTOCOL'] . "<br>" ;	
		echo $_SERVER['REQUEST_METHOD'] . "<br>" ;	
		echo $_SERVER['SCRIPT_FILENAME'] . "<br>" ;
		echo $_SERVER['DOCUMENT_ROOT'] . "<br>";	
		echo $_SERVER["HTTP_ACCEPT"] . "<br>"	;
		echo $_SERVER["HTTP_USER_AGENT"] . "<br>";
		// 
		if ($_REQUEST['txt_username']) {
			$name = $_REQUEST['txt_username'];
			echo "Hi, $name";
		}

		echo $_GET['a'];
		echo $_GET['b'];
?>

	<form action="" method="post">
		<input type="text" name="txt_username">
		<button value="Submit">Submit</button>
	</form>

	<!-- 6. Biết cách sử dụng Variable Variables" -->
	<?php 
		$metting = "Hello";
		$$metting = "World";
		$$$metting = "Beautiful";
		$$$$metting = "Life";
		echo "$metting  ${$metting}";
		// echo "$metting  $$metting";
		echo "${${$metting}}";
	?>