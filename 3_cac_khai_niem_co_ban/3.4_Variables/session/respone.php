<?php 
	session_start();

	echo $_SESSION["name"];
?>
<a href="endSession.php">Click here to end session</a>