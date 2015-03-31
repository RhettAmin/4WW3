<?php
	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	echo 
	 	"<form id=\"testForm\" >" .
	 	"<div class=\"row\">" .
		"<button id=\"submitcat\" class=\"waves-effect waves-light btn-large goToCartPage green lighten-2\">Checkout</button>";

	$result = mysql_query("SELECT * FROM Products LIMIT 5") or die(mysql_error());
	
	
	while ($r = mysql_fetch_assoc($result)) {
	   echo
			"<div class=\"col s4 catalogue-items\">" .
            	"<div class=\"row\">" .
                	"<div class=\"col s12\">" .
                		"<div class=\"card\">" .
                    
                    		"<div class=\"product-image\">";
                    			if(empty($r['imagePath'])) {
                    				echo "<img class=\"materialboxed  catalogue-images\"  
									src=\"/~aminr4/A3/images/ina.jpg\" data-caption=\"" . $r['name'] . "\" alt=\"Image Not Available\">";
                    			} else {
                    				echo "<img class=\"materialboxed  catalogue-images\"  
									src=\"" . $r['imagePath'] . "\" data-caption=\"" . $r['name'] . "\" alt=\"Image Not Available\">";
                    			}
								
								if ($r['quantity'] == '0') {
									echo "<div class=\"ribbon-wrap\"><div class=\"ribbon-red\">SOLD OUT</div></div>";
								}
								
		                    echo "</div>" .
                    
		                    "<div class=\"card-content card-content-box blue-grey lighten-5\">" .
								"<section class=\"card-title card-title-text black-text title\">" .
									"<p class=\"centerstuff\">" . $r['name'] . "</p>" .
								"</section>" .
								"<label>" . $r['material'] . "</label>" .
								"<p class=\"centerstuff\">" . $r['description'] . "</p>" .
		                    "</div>" .

		                    "<div class=\"card-action card-details blue-grey lighten-4\">" .
		                    	"<div class=\"row card-details\">" .
									"<p class=\"col s2\">$" . $r['price'] . "</p>" .
									"<p class=\"col s2 offset-s4\">Quantity:</p>" .
									"<input type=\"text\" class=\"col s2 offset-s2 prod-num\" name=\"" . $r['id'] . "\">" .
		                      	"</div>" .
		                    "</div>" .

                  		"</div>" .
                	"</div>" .
            	 "</div>" . 
           "</div>";
	}
	echo "</div></form>";

	mysql_close();