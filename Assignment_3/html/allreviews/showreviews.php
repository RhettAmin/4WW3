<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Reviews";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$result = mysql_query("SELECT * FROM Reviews WHERE productName='Ram Rod'") or die(mysql_error());

	echo "<div class='col s4'>
		<p class='review-title'>Ram Rod</p>
		<p>Total Rating goes here</p>
        <p>Polyester</p>
        <p>$199.99</p>
      	</div>
      	<div class='col s8 subreviews'>";

	while($row = mysql_fetch_assoc($result)) {   //Creates a loop to loop through results
		//$row['index'] the index here is a field name
		echo "<div class=\"card-panel grey lighten-1\">" .
		"<p>".$row['username']."</p>" .  
		"<div class='range-field col s4'>
		<input type='range' id='slider' min='1' max='5' value='"
			+ $row['rating'] + "' disabled='disabled'/></div>" .
		"<p>".$row['review']."</p>" .
		"</div>";  
	}

mysql_close();