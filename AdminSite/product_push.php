<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Products";

	// Create connection
	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$name = $_POST['name'];
	$id = $_POST['id'];
  	$material = $_POST['material'];
  	$price = $_POST['price'];
  	$quantity = $_POST['quantity'];
  	$description = $_POST['description'];

	$num_rows = mysql_num_rows(mysql_query("SELECT * FROM $table"));
	$num_rows = $num_rows + 1;

  	$query = "INSERT INTO $table(id, name, material, price, quantity, description) 
			VALUES ('$id', '$name', '$material', '$price', '$quantity', '$description');";

	mysql_query($query) or die(mysql_error());

	mysql_close();

	header('Location: /~anthonjb/product_page.php');