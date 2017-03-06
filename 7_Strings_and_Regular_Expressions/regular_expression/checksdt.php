<?php

if ( isset($_REQUEST['check']) ) {
	$sdt = $_REQUEST['sdt'];
	echo $sdt . '<br>';
	
	preg_match('/[0-9]{4}/', $sdt, $matches);
	echo '<pre>';
	print_r($matches);
	echo '</pre>';

	switch ($matches[0]) {
		case '0165':
			echo 'Viettle dayo~';
			break;
		case '0123':
			echo 'Vinaphone dayo~';
			break;
		default:
			echo 'Không thuộc nhà mạng nào dayo~';
	}
}

?>


<form action="#" method="get">
	<input type="number" name="sdt">
	<input type="submit" name="check">
</form>
