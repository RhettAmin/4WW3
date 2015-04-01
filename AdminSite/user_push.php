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

	$num_rows = mysql_num_rows(mysql_query("SELECT * FROM $table"));
	$num_rows = $num_rows + 1;

  	$query = "INSERT INTO $table(username, email, password, fName, lName, phone, unit, houseNumber, street, city, province, postalCode, creditCard) 
			VALUES ('$username', '$email', '$password', '$fName', '$lName', '$phone', '$unit', '$houseNumber', '$street', '$city', '$province', '$postalCode', '$creditCard');";

	mysql_query($query) or die(mysql_error());

	mysql_close();

	header('Location: /~anthonjb/user_page.php');