<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Products";

	// Create connection
	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$id = $_POST['id'];
	$name = $_POST['name'];
  	$material = $_POST['material'];
  	$price = $_POST['price'];
  	$quantity = $_POST['quantity'];
  	$description = $_POST['description'];

	if ($name != ''){
		mysql_query("UPDATE $table SET name = '$name' WHERE id = '$id' ") or die(mysql_error());
	}
	if ($material != ''){
		mysql_query("UPDATE $table SET material = '$material' WHERE id = '$id' ") or die(mysql_error());
	}
	if ($price != ''){
		mysql_query("UPDATE $table SET price = '$price' WHERE id = '$id' ") or die(mysql_error());
	}
	if ($quantity != ''){
		mysql_query("UPDATE $table SET quantity = '$quantity' WHERE id = '$id' ") or die(mysql_error());
	}
	if ($description != ''){
		mysql_query("UPDATE $table SET description = '$description' WHERE id = '$id' ") or die(mysql_error());
	}

	mysql_close();

	header('Location: /~anthonjb/product_page.php');