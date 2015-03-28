<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";
	$prodArray = array("Anaconda", "Blue Wave", "Classic Ropey", "Devilishly Prada", "Fisher", "Monkey Fist", 
		"Ocean Breeze", "OJ Gleash", "Old Duster", "Purple Haze", "Ram Rod", "Red Rocket", 
		"Restrainer", "Silverado", "The Patriot");

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	
	
	echo "<div class=\"row\">";

	foreach ($prodArray as $pa) {
		$result = mysql_query("SELECT * FROM Products WHERE name='$pa'") or die(mysql_error());

		while ($r = mysql_fetch_assoc($result)) {

		   echo
				"<div class=\"col s4 catalogue-items\">" .
	            	"<div class=\"row\">" .
	                	"<div class=\"col s12\">" .
	                		"<div class=\"card\">" .
	                    
	                    		"<div class=\"product-image\">" .
									"<img class=\"materialboxed catalogue-images\" src=\"" . $r['imagePath'] . "\" data-caption=\"Ram Rod\">" .
									//"<div class=\"ribbon-wrap\"><div class=\"ribbon-red\">SOLD OUT</div></div>"
			                    "</div>" .
	                    
	                    "<div class=\"card-content card-content-box blue-grey lighten-5\">" .
							"<section class=\"card-title card-title-text black-text title\">" .
								"<p>" . $r['name']  . "</p>" .
							"</section>" .
							"<label>" . $r['material']  . "</label>" .
							"<p>" . $r['description']  . "</p>" .
	                    "</div>" .

	                    "<div class=\"card-action card-details blue-grey lighten-4\">" .
	                    	"<div class=\"row card-details\">" .
								"<p class=\"col s2\">" . $r['price']  . "</p>" .
								"<input class=\"col s2 offset-s5 prod-num\" type=\"text\">" .
								"<i id=\"addToCart\" class=\"small mdi-action-add-shopping-cart col s3\"></i>" .
	                      	"</div>" .
	                    "</div>" .

	                  "</div>" .
	                "</div>" .
	             "</div>" . 
	            "</div>";

		}

	}

	echo "</div>";

	mysql_close();