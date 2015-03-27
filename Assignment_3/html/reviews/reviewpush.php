<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Reviews";

	// Create connection
	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$productname = mysql_real_escape_string($_POST['productname']);
	$rating = mysql_real_escape_string($_POST['rating']);
  	$review = mysql_real_escape_string($_POST['reviewtext']);

  	$query = "INSERT INTO $table(username,productName,rating,review) 
			VALUES ('Mexican Barack Obama','$productname', '$rating', '$review');";

	mysql_query($query) or die(mysql_error());

	mysql_close();

	header('Location: /~aminr4/A3/html/reviews/');