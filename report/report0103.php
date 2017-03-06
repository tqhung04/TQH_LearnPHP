<?php

/*
- Tính che giấu thông tin:
	+ dữ liệu không được truy cập trực tiếp mà phải thông qua các hàm bên trong class
- Tính đa hình: 
	+ tại từng thời điểm đối tượng sẽ có các hình thái khác nhau trong những hoàn cảnh khác nhau.
*/

interface A {
	function say ();
}
interface B {
	function say ();
}

class C implements A {
	function say() {
		echo "Hello";
	}
}

C::say();
