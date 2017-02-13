<?php 
	// ------------ LESSION -------------
	// 1. Invoking a Function 
	// 2. Creating a Function 
	// 3. Passing Arguments by Value
	// 4. Passing Arguments by Reference 
	// 5. Default Argument Values 
	// 6. Using Type Hinting 
	// 7. Returning Values from a Function 
	// 8. Recursive Functions 
	// 9. Function Libraries 
	
	// ------------ PRACTICE -------------
	// 1. Invoking a Function
		// 1.1 
		$value = pow(5, 3);
		echo $value;
		echo "<br>";
		// 1.2
		echo pow(5, 3);
		echo "<br>";
		// 1.3
		echo "5 ^ 3 = ".pow(5,3)."";  
		echo "<br>";
		// 1.4
		printf("5 ^ 3 =  %d", pow(5,3)); 

	// 2. Creating a Function 
		// 2.1 Creating a function with param
		function fn1 ($a) {
			echo "Param is " .$a;
		}
		// 2.2 Creating a function without param
		function fn2 () {
			echo "Function without param";
		}

	// 3. Passing Arguments by Value 
		$price = 100;
		$tax = 2;
		function calcSalesTax($price, $tax) {     
			$total = $price + ($price * $tax);      
			echo "Total cost: $total"; 
		}
		echo "<br>";

	// 4. Passing Arguments by Reference 
		 $cost = 20.99;     
		 $tax = 0.0575;  
	    function calculateCost(&$cost, $tax) {         
	    	$cost = $cost + ($cost * $tax);  
	        $tax += 4;     
	    }     
	    calculateCost($cost, $tax);     
	    printf("Tax is %01.2f%% ", $tax*100);     
	    printf("Cost is: $%01.2f", $cost);
	    echo "<br>";
	    // $cost has been changed.

	// 5. Default Argument Values 
	    function calcSalesTax5($price, $tax=.0675) {    
	    	$total = $price + ($price * $tax);    
	    	echo "Total cost: $total"; 
	    }
	    calcSalesTax5(10000);
	    echo "<br>";

	// 6. Using Type Hinting 

	// 7. Returning Values from a Function 
	    // 7.1 The return Statement
	    function calcSalesTax6($price, $tax=.05) {
	        return $price + ($price * $tax); 
	    }
	    echo calcSalesTax6(10000);
	    echo "<br>";
		// 7.2 Returning Multiple Values 
		function retrieveUserProfile() {         
			$user[] = "Jason Gilmore";         
			$user[] = "jason@example.com";         
			$user[] = "English";         
			return $user;     
		}  
		list($name, $email, $language) = retrieveUserProfile();   
		echo "Name: $name, email: $email, language: $language"; 
		echo "<br>";

	// 8. Recursive Functions 
		function tinhtong($n){
		    if ($n == 1){ return $n; }
		    return $n + tinhtong($n-1);
		}
		echo tinhtong(100);
		echo "<br>";

	// 9. Function Libraries 
		require_once("taxation.library.php");
		total_lib();
?>