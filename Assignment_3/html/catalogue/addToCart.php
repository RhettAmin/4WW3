<?php 

	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	session_start();

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

	// $c = mysql_query("SELECT COUNT(pid) AS counter FROM $userCart pid=$id;"));
	// echo $c;
	// if ($check == 1) {
	// 	print "Item already added to Cart";
	// } else {
	// 	$add = mysql_query("INSERT INTO $userCart VALUES('$id',1)");
	// 	print "Item added to Cart";
	// }
	

	