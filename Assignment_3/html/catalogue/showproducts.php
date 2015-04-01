<?php
	include "../includes/connect.php";

	echo 
	 	"<form action=\"../checkout/\" method=\"post\">" .
	 	"<div class=\"row\">" .
		"<button type=\"submit\" id=\"submitCart\" class=\"waves-effect waves-light btn-large goToCartPage green lighten-2\"><i class=\"mdi-action-shopping-cart right\"></i>Checkout</button>";

	$result = mysql_query("SELECT * FROM Products") or die(mysql_error());

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
									"<p class=\"col s2 raise\">$" . $r['price'] . "</p>" ;
									if($r['quantity'] != 0) {
										echo "<i id=\"". $r['id'] ."\" class=\"col s2 offset-s8 small mdi-action-add-shopping-cart addToCart raise\"></i>";
									}
									
		                      	echo "</div>" .
		                    "</div>" .

                  		"</div>" .
                	"</div>" .
            	 "</div>" . 
           "</div>";
	}
	echo "</div></form>";

	mysql_close();