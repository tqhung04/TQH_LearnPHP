<?php 
	/*
	1 Create arrays 
	2 Output arrays 
	3 Test for an array 
	4 Add and remove array elements 
	5 Locate array elements 
	6 Traverse arrays 
	7 Determine array size and element uniqueness 
	8 Sort arrays 
	9 Merge, slice, splice, and dissect arrays 
	*/

	// 1. Create arrays
		$state[] = 0;
		$state[1] = 1;
		echo $state[0];

		$languages = array("English", "Gaelic", "Spanish");
		// or
		$languages = array(	"Spain" => "Spanish",
							"Ireland" => "Gaelic",                    
							"United States" => "English"); 

		// list()
		$heros = array('Seven', 'Roshan', 'Pick');
		list($a, $b, $c) = $heros;
		echo $a . $b;
		// range()
		$die = range(1, 6);
		$even = range(0, 20, 2); //0 2 4 ... 20
		$letters = range("A", "F"); 

	// 2. Outputting an Array
		foreach ($heros AS $hero) {     
			echo "$hero <br />"; 
		}

		$customers = array(); 
		$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999"); 
		$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999"); 
		$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");  
		foreach ($customers AS $customer) {  
			vprintf("<p>Name: %s<br />E-mail: %s<br />Phone: %s</p>", $customer); 
		}
		print_r($heros);
		echo "<br>";
		$stateCapitals = print_r($heros, TRUE);

	// 4 Add and remove array elements 
		// 4.1 Adding a Value to the Front of an Array 
		$states = array("Ohio", "New York"); 
		array_unshift($states, "California", "Texas"); 
		// 4.2 Adding a Value to the End of an Array 
		array_push($states, "Ha Noi", "Sai Gon");
		// 4.3 Removing a Value from the Front of an Array
		$state = array_shift($states);
		// 4.4 Removing a Value from the End of an Array 
		$state = array_pop($states);
		print_r($state);

	// 5. Locate array elements 
		// 5.1 Searching an Array 
		if ( in_array("Ha Noi", $states) ) {
			echo "Welcome to Ha Noi";
		}

		if ( array_key_exists("0", $states) ) {
			echo "Welcome to Ohio";
		}

		$temp = array_search("Ha Noi", $states);
		echo $temp;

		$keys = array_keys($states);

	// 6. 
		$fruits = array("apple", "orange", "banana"); 
		$fruit = next($fruits); // returns "orange" 
		echo $fruit;
		// reset($fruits);
		// end($fruits)
		// current($fruits)
		$fruit = next($fruits); // returns "banana"  
		echo $fruit;

	// 8. Sort arrays
		// Reversing Array Element Order 	-> array_reverse()
		// Flipping Array Keys and Values  	-> array_flip()
		// Sorting in Array 				-> sort(); asort();

	// 9. Merge, combine, slice, splice, and dissect arrays 
		// merge
		$face = array("J", "Q", "K", "A"); 
		$numbered = array("2", "3", "4", "5", "6", "7", "8", "9"); 
		$cards = array_merge($face, $numbered);
		print_r($cards);
		// combine
		$cards1 = array_combine($face,$numbered); 
		print_r($cards);
		// slice
		$subset = array_slice($numbered, 2, -2); 
		print_r($subset);
		// splice
		// dissect
?>