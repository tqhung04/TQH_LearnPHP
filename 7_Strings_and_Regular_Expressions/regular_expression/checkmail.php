<?php

if ( isset($_REQUEST['check']) ) {
	$mail = $_REQUEST['mail'];
	echo $mail . '<br>';
	
	if ( filter_var($mail, FILTER_VALIDATE_EMAIL) ) {
		echo 'Chuẩn định dạng mail.';
	} else {
		echo 'Không chuẩn định dạng mail.';
	}
}

?>


<form action="#" method="get">
	<input type="text" name="mail">
	<input type="submit" name="check">
</form>
