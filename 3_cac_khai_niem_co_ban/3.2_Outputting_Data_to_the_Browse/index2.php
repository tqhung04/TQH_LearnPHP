<?php 

function fibo($n){  
		    static $n1 = 0;
		    static $n2 = 1;

		    if ( $n > 0 ) {  
				$n3 = $n1 + $n2;  
				$n1 = $n2;  
				$n2 = $n3;  
				echo $n3 . " ";
				fibo( $n-1 );  
		    }  
		}  
		fibo(10);