<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$table = "Reviews";
	$prodArray = array("Ram Rod", "Rocket", "Devishly Prada");

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	foreach ($prodArray as $pa) {

	  $result = mysql_query("SELECT * FROM Reviews WHERE productName='$pa'") or die(mysql_error());
	  $avg = mysql_query("SELECT AVG(rating) FROM Reviews WHERE productName='$pa'") or die(mysql_error());
	  $a = mysql_fetch_array($avg);
	  
	  echo 
	    "<div class=\"card-panel addMargin-side col s5-5 grey lighten-4 \" >" .
	        "<div><h5>".$pa."</h5></div>" .
	         "<div class=\"row\">";
	            echo "<p class=\"col s1\">0</p><div class=\"range-field col s10\"><input type=\"range\" id=\"slider\" min=\"1\" max=\"5\"value=\"".
	                $a['AVG(rating)']."\" disabled=\"disabled\"/></div><p class=\"col s1\">5</p>" ;
	          
	  echo "</div>" .
	  "<div class=\"subreviews\">";
	  
	  while ($r = mysql_fetch_assoc($result)) {
	    echo 
	      "<div class=\"card-panel row allreviews-userreviews grey lighten-3\">" .
	        "<p class=\"review-title col s4\">".$r['username']."</p>" .
	        "<p class\"col s1\">0</p>".
	        "<div class=\"range-field col s6 subrating\"><input type=\"range\" id=\"slider\" min=\"1\" max=\"5\"value=\"".
	                $r['rating']."\" disabled=\"disabled\"/></div>" .
	        "<p class\"col s1\">5</p>".
	        "<p class=\"col s12\">".$r['review']."</p>" .
	      "</div>";
	  }
	    
	    echo "</div></div>";
	    
	}
	mysql_close();