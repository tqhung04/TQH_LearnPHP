<?php 
	// ------------ LESSION -------------
	// 1. Embed PHP code into web pages. 
	// 2. Comment code using the various methodologies borrowed from the Unix shell scripting, C, and C++ languages. 
	// 3. Output data to the browser using the echo(), print(), printf(), and sprintf() statements. 
	// 4. Use PHP’s data types, variables, operators, and statements to create sophisticated scripts
	// 5. Take advantage of key control structures and statements, including if-else- elseif, while, foreach, include, require, break, continue, and declare. 
?>
	<!-- Practice
		1. Embed PHP code into web pages. 
			1.1 Default Syntax -->
			<h1>Tranning PHP Basic</h1>
			<?php
				echo "<p>Ganbattekudasai</p>"
			?>
			<!-- 1.2 Default Syntax -->
			<?php
				print "Hello Word."; 
			?>
			<!-- 1.3 Script are removed -->
			<script language="php">
				print "Script PHP.";
				echo "<p>Ganbattekudasai</p>" 
			</script>
			<!-- 1.4 ASP Style are removed -->
			<%     
				print "This is another PHP example."; 
			%> 
			<!-- 1.5 Embedding Multiple Code Blocks  -->


		<!-- 2. Commenting Your Code  -->
			<!-- 2.1 Single-Line C++ Syntax  -->
			<?php 
				// This is comment
			?>
			<!-- 2.2 Shell Syntax  -->
			<?php     
				# Title: My first PHP script     
				# Author: Jason Gilmore
				echo "Shell Syntax."; 
			?>
			<!-- 2.3 Multiple-Line C Syntax  -->
			<?php
				/*
					Mutiple
					Line
					C
					Syntax
				*/
			?>

		<!-- 3. Output data to the browser using the echo(), print(), printf(), and sprintf() statements. -->
			<!-- 3.1 The print() Statement -->
				<?php 
					print("<p>I love the summertime.</p>");
				?>
			<!-- 3.2 The echo() Statement  -->
				<?php 
					$_a = 1;
					echo $_a;
					echo ("hi");
					echo $_arr;
				?>
			<!-- 3.3 The printf() Statement  -->
				<?php 
					printf("%d", 1);
					printf("%d", 1);
				?>
			<!-- 3.4 The sprintf() Statement  has been removed-->
				<?php 
					echo "<br>";
					$cost = sprintf("$%.2f", 43.2); // $cost = $43.20 
				?>

		<!-- 4. PHP’s Supported Data Types  -->
			<!-- Boolean -->
			<!-- Integer -->
			<!-- Float -->
			<!-- String -->
			<!-- Array -->
			<!-- Object -->
				<?php 
					class Appliance {    
						private $_power;    
							function setPower($status) {       
								$this->_power = $status;    
							}
						}
					$blender = new Appliance;
					$blender->setPower("on");
				?>
			<!-- Converting Between Data Types Using Type Casting -->
				<?php 
					$a1 = 1;
					echo gettype($a1);
					$a2 = (string) $a1;
					echo gettype($a2);
					// 
					$model = "Toyota"; 
					$obj = (object) $model;  
					print $obj->scalar;
				?>
				

			<!-- Adapting Data Types with Type Juggling -->
				<?php 
					$A12 = 3;		//vail
					// $A1&2 = 3; 	invail

					echo $A12;
				?>

			<!-- Variables  -->
				<?php 
					// $color • $Color • $COLOR -> no relation
					$sum = 12 + "15";
					echo $sum;

					$value1 = "Hello";     
					$value2 = &$value1;

				?>
		 		<!-- Global Variables  -->
		 		<?php 
			 		function exm () {
			 			global $somevar;
			 			// ord(string)
			 			$GLOBALS["somevar"]++; 
			 		}
		 		?>
		 		<!-- Superglobal Variables  -->
		