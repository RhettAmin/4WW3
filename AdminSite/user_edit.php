<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Users";

	// Create connection
	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$username = $_POST['username'];
	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$fName = $_POST['fName'];
  	$lName = $_POST['lName'];
  	$phone = $_POST['phone'];
  	$unit = $_POST['unit'];
  	$houseNumber = $_POST['houseNumber'];
  	$street = $_POST['street'];
  	$city = $_POST['city'];
  	$province = $_POST['province'];
  	$postalCode = $_POST['postalCode'];
  	$creditCard = $_POST['creditCard'];

	if ($email != ''){
		mysql_query("UPDATE $table SET email = '$email' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($password != ''){
		mysql_query("UPDATE $table SET password = '$password' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($fName != ''){
		mysql_query("UPDATE $table SET fName = '$fName' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($lName != ''){
		mysql_query("UPDATE $table SET lName = '$lName' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($phone != ''){
		mysql_query("UPDATE $table SET phone = '$phone' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($unit != ''){
		mysql_query("UPDATE $table SET unit = '$unit' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($houseNumber != ''){
		mysql_query("UPDATE $table SET houseNumber = '$houseNumber' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($street != ''){
		mysql_query("UPDATE $table SET street = '$street' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($city != ''){
		mysql_query("UPDATE $table SET city = '$city' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($province != ''){
		mysql_query("UPDATE $table SET province = '$province' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($postalCode != ''){
		mysql_query("UPDATE $table SET postalCode = '$postalCode' WHERE username = '$username' ") or die(mysql_error());
	}
	if ($creditCard != ''){
		mysql_query("UPDATE $table SET creditCard = '$creditCard' WHERE username = '$username' ") or die(mysql_error());
	}


	mysql_close();

	header('Location: /~anthonjb/user_page.php');