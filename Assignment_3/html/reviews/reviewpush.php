<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Reviews";

	// Create connection
	$conn = new mysqli_connect("$servername", "$username", "$password", "$db");
	if ($conn->mysqli_connect_errno) { die("Connection failed: " . $conn->connect_error); }

	$productname = $_POST['productname'];
	$rating = $_POST['rating'];
  	$review = $_POST['reviewtext'];

  	$query = "INSERT INTO $table(username,productName,rating,review) 
			 VALUES ('Mike','$productname', '$rating', '$review');";

	mysqli_query($conn,$query);

	//mysql_query($query) or die(mysql_error());

	//mysql_close();

	mysqli_close($conn);

	header("Location: /~aminr4/A3/html/reviews/");

