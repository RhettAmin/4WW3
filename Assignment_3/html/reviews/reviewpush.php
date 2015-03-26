<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Reviews";

	// Create connection
	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$productname = $_POST['productname'];
	$rating = $_POST['rating'];
  	$review = $_POST['reviewtext'];

	$num_rows = mysql_num_rows(mysql_query("SELECT * FROM $table"));
	$num_rows = $num_rows + 1;

  	$query = "INSERT INTO $table(username,productName,rating,review) 
			VALUES ('Mike','$productname', '$rating', '$review');";

	mysql_query($query) or die(mysql_error());

	mysql_close();

	header('Location: /~aminr4/A3/html/reviews/');