<?php
	
/*
	1. Nắm được các khái niệm, tính chất cơ bản của lập trình hướng đối tượng và biết cách áp dụng (tính kế thừa, tính che giấu thông tin, tính trừu tượng, tính đa hình)
	2. Nắm được cách viết và khởi tạo 1 class, cách khai báo thuộc tính, các phương thức trong class, cách gọi hàm từ class cha
	3. Nắm được khái niệm constructor, destructor
	4. Phân biệt được các từ khóa static, self, this
	5. Biết cách sử dụng autoload các class, type hinting
	6. Biết được các hàm trợ giúp trong việc quản lý và sử dụng các class. Ví dụ: class_alias(), class_exist(), get_class(), get_class_methods()...
	7. Biết được cách áp dụng interface, abstract class vào các bài toán cụ thể
	8. Không còn code theo kiểu hướng thủ tục, biết cách tổ chức code theo các class

	// 1. Nắm được các khái niệm, tính chất cơ bản của lập trình hướng đối tượng và biết cách áp dụng (tính kế thừa, tính che giấu thông tin, tính trừu tượng, tính đa hình)
	- Lập trình hướng đối tượng: là lập trình hỗ trợ công nghệ đối tượng (OOP) giúp:
		+ tăng năng suất, đơn giản hóa xây dựng và bảo trì phần mềm
		+ tập trung vào các đối tượng giống như trong thực tế
	- Tính chất của lập trình HĐT
		+ Tính kế thừa: lớp cha có thể chia sẻ DỮ LIỆU và PHƯƠNG THỨC cho lớp con -> lớp con không phải định nghĩa lại những logic chung -> giúp chương trình ngắn gọn.
		+ Tính che giấu thông tin (đóng gói): không cho bên ngoài biết được bên trong đối tượng đó có những gì hay được cài đặt như thế nào. Nếu muốn thay đổi bên trong đối tượng cần được sự chấp nhận từ đối tượng đó thông qua 3 mức độ truy cập là PUBLIC, PROTECTED và PRIVATE
		+ Tính trừu tượng: giúp giảm sự phức tạp thông qua việc tập trung vào các đặc điểm trọng yếu hơn là đi sâu vào chi tiết. (lập trình viên chỉ cần quan tâm đến mục đích của phương thức là gì)
		+ Tính đa hình: Là kỹ thuật cho phép thay đổi nội dung cùng 1 hàm trong hai lớp cha và con, hay nói cách khác là viết lại hàm ở lớp cha trong lớp con.
	
	// 2. Nắm được cách viết và khởi tạo 1 class, cách khai báo thuộc tính, các phương thức trong class, cách gọi hàm từ class cha */

		class User {
			var $name;
			protected $email;
			private $password;

			function __construct ($mes) {
				echo $mes;
			}
			function getPassword () {
				return $this->password;
			}
			function setPassWord ($password) {
				$this->password = $password;
			}
			function meeting () {
				echo "Hello " . $this->name;
				echo "<br>";
				echo $this->email;
			}
			function register () {
				echo $name;
			}
			function login () {
			}
		}

		$user01 = new User("Lớp User đã được khởi tạo");
		$user01 -> name = "Tran Quang Hung";
		$user01 -> meeting();
		$user01 -> setPassword("123456");
		echo $user01 -> getPassword();
		// $user01 -> email = "hidol@gmail.com";

		// Cách gọi hàm từ class cha
		class Admin extends User {
			var $role;

			// function Admin () {
			// 	echo "Lớp Admin đã được khởi tạo.";
			// }
			function createUser () {
				parent::meeting();
			}

			function setEmail ($email) {
				$this->email = $email;
			}

		}
		$admin01 = new Admin();
		$admin01 -> name = "Admin";
		$admin01 -> createUser();
		// $admin01 -> email = "admin@gmail.com";
		$admin01 -> setEmail("admin@gmail.com");
		$admin01 -> meeting();

		/*
			3. Nắm được khái niệm constructor, destructor
				+ constructor (hàm khởi tạo): luôn luôn được gọi tới khi khởi tạo 1 đối tượng
				+ 2 cách khai báo:
					function __construct () {}
					OR
					function tenClass () {}
				+ destructor (hàm hủy): Hàm hủy là hàm tự động gọi sau khi đối tượng bị hủy, nó thường được sử dụng để giải phóng bộ nhớ chương trình
				+ khai báo:
					function __destructor () {}

		*/ 

		/* 4. Phân biệt được các từ khóa static, self, this
			- self: 
				+ truy cập đến chính class CHỨA NÓ
				+ để gọi static function & tham chiếu đến các thuộc tính static
				+ có thể dùng trong các hàm static
				+ sử dụng sẽ ngăn chặn tính đa hình
			- this: 
				+ để tham chiếu đến đối tượng (object) HIỆN TẠI
				+ để gọi non-static function
				+ không nên dùng để gọi các thuộc tính static
				+ không thể sử dụng trong hàm static
		*/

		/*	7. Biết được cách áp dụng interface, abstract class vào các bài toán cụ thể
		- Lớp abstract: là lớp định nghĩa các phương thức mà từ đó các lớp con sẽ OVERWRITE lên nó.
			+ phải có từ khóa abstract ở trước tên class
			+ có thể có thuộc tính nhưng thuộc tính không được khai báo là abstract
			+ nếu hàm được khai báo abstract chỉ được khai báo chứ không được định nghĩa
			+ không thể khởi tạo đối tượng mới của lớp abstract
			+ không thể khai báo private với các hàm trong lớp abstract, 
			+ Lớp kế thừa từ lớp Abstract phải Rewrite lại tất cả các hàm Abstract trong lớp Abstract, nếu không sẽ bị báo sai
		*/

		abstract class BaseClass {
			private $a;
			// abstract public $name;
			abstract protected function Hello ();
			// abstract private function Hi ();
			abstract public function Hi ();

			public function Konichiha () {
				
			}
			public function Ba () {
			}
		}
		interface B {

		}

		class A extends BaseClass implements B{
			function Hello () {}
			function Hi () {}	
		}

		


		/*
			Sự khác nhau giữa interface và class abstract 
			- interface không phải là 1 lớp cụ thể mà là 1 khuôn mẫu để cho 1 đối tượng implement nó.
			- các method trong interface không cần khai báo với từ khóa abstract vì interface mặc định gán abstract cho các method
			- interface là đa kế thừa còn abstract là đơn kế thừa
			- những class implement từ interface sẽ override toàn bộ các method của interface đó còn với abstract thì sẽ chỉ override những method khai báo abstract.
		*/






	