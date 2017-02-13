<?php 
	/*
		1. Biết cách khai báo hằng
		2. Nắm được sự khác nhau giữa kiểu khai báo sử dụng hàm define() và từ khóa const
		____________________________

		
		1. Biết cách khai báo hằng
			- khi khai báo hằng, không cần $
			- có thể được định nghĩa và truy cập bất cứ đâu, không liên quan đến quy tắc phạm vi biến
			- 1 hằng đã được định nghĩa sẽ không thay đổi hoặc hủy đi được nữa.
			- 2 cách khai báo hằng: 
				1.1 const()
				1.2 define()
			- phân biệt:
				+ const chỉ được khai báo ở phạm vi ngoài cùng
				+ define không khai báo được trong class còn const thì được
	*/
				define('pi', 3.14);
				define('pi', 1232);
				const meeting = "Hello";
				echo pi;
				function show () {
					echo pi;
					echo meeting;
				}
				show();

				define("CONSTANT", "Hello world.");
				define("CONSTAnT", "Hello world123.");
				echo CONSTANT; // outputs "Hello world."
				echo CONSTAnT; 
				echo constant; // outputs "Constant" and issues a notice.

				define('Heros', array('Roshan', 'Seven'));
				var_dump(Heros);

				if (1 == 1) {
					define('a1', 'Ofcourse'); 
				}
				if (1 == 1) {
					// const a2 = 'Of course'; -> Error
				}
				// -> const chỉ được khai báo ở phạm vi ngoài cùng
				
				define('total', 3 * 4);
				var_dump(total) ;
				const total_const = 3 * 4;
				var_dump(total_const);

				class student {
					const show = 'Hi';
					// define('show_define', 'Hello');
					// -> define không khai báo được trong class còn const thì được
				}

?>