<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());
	
	mysql_select_db("$db") or die(mysql_error());

	$products = mysql_query("SELECT * FROM Products") or die(mysql_error());

	while ($p = mysql_fetch_assoc($products)){
		echo "<div class=\"card-panel addMargin-side col s5-5 grey lighten-4 \">" .
			 "<div>".
			 	"<h5>".$p['name']."</h5>".
			 	"<p>Product ID: ".$p['id']."</p>".
			 	"<p>Material: ".$p['material']."</p>".
			 	"<p>Price: ".$p['price']."</p>".
			 	"<p>Quantity: ".$p['quantity']."</p>".
			 	"<p>Description: ".$p['description']."</p>".
			 "</div></div>";
	}
mysql_close();