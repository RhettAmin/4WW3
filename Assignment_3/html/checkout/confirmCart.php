<?php

	include "../includes/connect.php";

	$username = $_SESSION['username'];
	$userCart = "Cart_". $username;
	$transactionId;
	$cart = mysql_query("SELECT * FROM $userCart;");
	$tidQuery = mysql_query("SELECT transactionId FROM Transaction WHERE username='$username';");
	while ($tid = mysql_fetch_assoc($tidQueryd)) {
		$t = $tid['transactionId'];
		echo $t;
		if($t > $transactionId) {
			$transactionId = $t;
		}
		
		
	}
	
	echo "tid: ". $transactionId;
	

	// while($r = mysql_fetch_assoc($cart)) {
	// 	$pid = $r['pid'];
	// 	$q = $r['quantity'];
	// 	$query =  mysql_query("INSERT INTO Transaction VALUES($transactionId, $pid, $q, '$username', CURTIME(), CURDATE(), '1');");
	// }

	// $dropCart = mysql_query("DROP TABLE $userCart;");

	// echo "Thank you! :)";