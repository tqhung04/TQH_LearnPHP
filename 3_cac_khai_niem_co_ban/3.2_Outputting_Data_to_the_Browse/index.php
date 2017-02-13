<?php
/*
	1. Hiểu được cách thức code PHP chạy và output kết quả cho trình duyệt
	2. Nắm được các phương pháp comment trong code PHP, ý nghĩa các thẻ đóng/mở trong code PHP
	3. Nắm được các phướng pháp để output thông tin ra trình duyệt, sự khác nhau giữa các hàm print(), echo(), printf(), sprintf(), var_dump()

	______________________________________________________________________________

	1. Hiểu được cách thức code PHP chạy và output kết quả cho trình duyệt
	2. Nắm được các phương pháp comment trong code PHP, ý nghĩa các thẻ đóng/mở trong code PHP
	3. Nắm được các phướng pháp để output thông tin ra trình duyệt, sự khác nhau giữa các hàm print(), echo(), printf(), sprintf(), var_dump()
		3.1 print() */
		print("Hello"); //->Hello
		$a = 1;
		$b = 2;
		print "$a + $b"; //->1 + 2
		$arr = [1, 2];
		print "array is $arr[0]"; //array is 1
		print "array is {$arr[0]}"; //array is 1
		print "My name is: \"Hung\" "; //->My name is: "Hung"
		print "My name is: \'Hung\' "; //->My name is: \'Hung\'
		print "a is $a"; //->a is 1
		print 'a is $a'; //->a is $a
		// print "toi", "la", "Hung"; -> just one string
		($a) ? print 'true' : print 'false';
		print $arr;
		print <<<END
HELLO $a
END;
		$show = print "Hi"; //->Hi
		print gettype($show); //->integer
		// 3.2 echo()
		echo "<br>";
		echo $a, $b;
		// ($a) ? echo 'true' : echo 'false'; -> error
		echo "toi", "la", "Hung";
		echo $arr;

		// 3.3 printf()
		echo "<br>";

		printf("asd");
		printf($arr);
		printf($a);
		printf("%d", $a);

		// 3.4 sprintf()
		echo "<br>";
		print sprintf("Hello Sprintf");

		// 3.5 var_dump()
		echo "<br>";
		var_dump($arr);
		var_dump($a);
		var_dump("Hello var_dump");


