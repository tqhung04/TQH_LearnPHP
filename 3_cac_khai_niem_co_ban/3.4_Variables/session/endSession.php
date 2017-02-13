<?php 
	session_destroy();

	echo var_dump($_SESSION["name"]);
?>