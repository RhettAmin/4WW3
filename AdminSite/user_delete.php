<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());
	
	mysql_select_db("$db") or die(mysql_error());

	$user = $_POST['username'];

	mysql_query("DELETE FROM Users WHERE username = '$user' ") or die(mysql_error());

	mysql_close();

	header('Location: /~anthonjb/user_page.php');