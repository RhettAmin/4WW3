<?php
	$_SESSION['logged'] = false;
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$Users = "Users";

	// Create connection
	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

  	$username = $_POST['username'];
	$password = $_POST['password'];



  	$query = "SELECT password FROM Users WHERE username= '$username' AND password= '$password';";

	$queryResult = mysql_query($query);
	if (mysql_num_rows($queryResult) == 1){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['logged'] = true;
		echo"GOOD";
		echo"
		<html>
			<head>
				<meta http-equiv='refresh' content='1; url=../index.php'> 
			</head>
		</html>
		";
	}else{
		echo"Mismatched login credentials";
		echo"
		<html>
			<head>
				<meta http-equiv='refresh' content='1; url=../login'> 
			</head>
		</html>
		";
	}


	mysql_close();

?>