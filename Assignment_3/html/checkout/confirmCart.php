<?php

	include "../includes/connect.php";

	$username = $_SESSION['username'];
	$userCart = "Cart_". $username;
	$transactionId;
	$cart = mysql_query("SELECT * FROM $userCart;");


	$tidQuery = mysql_query("SELECT Max(transactionId) as max FROM Transaction WHERE username='$username';");
	$tid = mysql_fetch_assoc($tidQuery);
	$transactionId = $tid['max'] + 1;

	while($r = mysql_fetch_assoc($cart)) {
		$pid = $r['pid'];
		$q = $r['quantity'];
		//insert order into transaction table
		$query =  mysql_query("INSERT INTO Transaction VALUES($transactionId, $pid, $q, '$username', CURTIME(), CURDATE(), '1');");

		//get the number of products in stick
		$query2 = mysql_query("SELECT quantity FROM Products WHERE id='$pid';");
		$getQuantity = mysql_fetch_assoc($query2);
		$prodQuant = $getQuantity['quantity'];
		//subtract the in stock amount by what the user is buying
		$newQuant = ($prodQuant - $q);
		//update product table with the new quantity
		$query3 = mysql_query("UPDATE Products SET quantity='$newQuant' WHERE id='$pid';");
	}

	// //drop the cart table after order
	$dropCart = mysql_query("DROP TABLE $userCart;");

	echo "Thank you! :)";