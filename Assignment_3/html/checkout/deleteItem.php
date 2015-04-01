<?php

	include "../includes/connect.php";

	$id = $_POST['id'];
	$userCart = "Cart_".$_SESSION['username'];

	$query1 = mysql_query("DELETE FROM $userCart WHERE pid='$id'");

	echo "Item Removed From Cart";