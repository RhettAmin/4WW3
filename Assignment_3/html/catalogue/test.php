<?php 

	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$prodArray = array("Anaconda", "Blue Wave", "Classic Ropey", "Fisher", "Monkey Fist", 
		"Ocean Breeze", "OJ Gleash", "Old Duster", "Purple Haze", "Ram Rod", "Red Rocket", "Restrainer", 
		"Silverado", "The Patriot");

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$result = mysql_query("SELECT * FROM Products WHERE name='Ram Rod'") or die(mysql_error());
	
	echo "test";

	while ($r = mysql_fetch_assoc($result)) {
	   echo $r['name'];
	}



	mysql_close();