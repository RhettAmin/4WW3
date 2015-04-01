<?php

	include "../includes/connect.php";

	$id = $_POST['id'];
	$quant = $_POST['quantity'];
	$userCart = "Cart_".$_SESSION['username'];

	if ($quant == 0) {
		$sql = mysql_query("DELETE FROM $userCart WHERE pid='$id'");
		echo "Item Removed From Cart";
	}
	else {
		//get product quantity
		$query1 = mysql_query("SELECT quantity FROM Products WHERE id='$id'");
		$prodQuantity = mysql_fetch_assoc($query1);
		//echo $prodQuantity['quantity'];

		$pQuantity = $prodQuantity['quantity'];
		//echo $pQuantity;
		if ($quant > $pQuantity) {
			echo "Can't buy more than what's in stock!";
		} else {
			$query2 = mysql_query("UPDATE $userCart SET quantity='$quant' WHERE pid=$id");
			echo "Cart has been updated";
		}
	}

