<?php
	session_start();
	session_destroy();
	echo 'Logout Successful';
	echo"
	<html>
		<head>
			<meta http-equiv='refresh' content='1; url=./index.php'> 
		</head>
	</html>
	";

?>