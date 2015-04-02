<?php 

	include "../includes/connect.php";

	$userCart = "Cart_" . $_SESSION['username'];

	$checkTable = mysql_query("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME='$userCart'");

	//CREATE table if it doesnt exist
	if (mysql_fetch_assoc($checkTable) == 0) {
		$createCart = mysql_query("CREATE TABLE $userCart(pid int UNIQUE, quantity int);");
	}

	$id = $_POST['id'];

	$c = mysql_query("SELECT pid FROM $userCart WHERE pid=$id;");

	if(mysql_num_rows($c) > 0) {
		echo "Item already added to the Cart";
	} else {
		$add = mysql_query("INSERT INTO $userCart VALUES('$id',1)");
		echo "Item added to Cart";
	}


	