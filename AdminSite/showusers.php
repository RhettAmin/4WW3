<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());
	
	mysql_select_db("$db") or die(mysql_error());

	$users = mysql_query("SELECT * FROM Users") or die(mysql_error());

	while ($u = mysql_fetch_assoc($users)){
		echo "<div class=\"card-panel addMargin-side col s5-5 grey lighten-4 \">" .
			 "<div>".
			 	"<p>Username: ".$u['username']."</p>".
			 	"<p>Email: ".$u['email']."</p>".
			 	"<p>Password: ".$u['password']."</p>".
			 	"<p>First Name: ".$u['fName']."</p>".
			 	"<p>Last Name: ".$u['lName']."</p>".
			 	"<p>Phone Number: ".$u['phone']."</p>".
			 	"<p>Unit: ".$u['unit']."</p>".
			 	"<p>House Number: ".$u['houseNumber']."</p>".
			 	"<p>Street: ".$u['street']."</p>".
			 	"<p>City: ".$u['city']."</p>".
			 	"<p>Province: ".$u['province']."</p>".
			 	"<p>Postal Code: ".$u['postalCode']."</p>".
			 	"<p>Credit Card Number: ".$u['creditCard']."</p>".
			 "</div></div>";
	}
mysql_close();