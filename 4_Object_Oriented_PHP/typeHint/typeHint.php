<?php

function total (array $arr) {
	echo "<table>";
	foreach ($arr as $k => $v) {
		echo "<tr><td>$k</td><td>$v</td></tr>";
	}
	echo "</table>";
}

$arr = Array(1, 2, 3);
$num = 1;
// print_r( total($arr) );
print_r( total($num) );