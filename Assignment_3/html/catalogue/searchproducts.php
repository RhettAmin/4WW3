<?php 

	$servername = "mysqlsrv2.cas.mcmaster.ca";
	$username = "woodmjm";
	$password = "1138343";
	$db = "woodmjm_db";

	mysql_connect("$servername", "$username", "$password") or die(mysql_error());

	mysql_select_db("$db") or die(mysql_error());

	$search = $_POST['search'];

	$query = mysql_query("SELECT * FROM Products WHERE 
		name LIKE '%$search%' OR 
		material LIKE '%$search%' OR
		price LIKE '%$search%' OR
		description LIKE '%$search%'
		");

	echo "<div class=\"row\">";
	while ($r = mysql_fetch_assoc($query)) {

		echo
			"<div class=\"col s4 catalogue-items\">" .
		    	"<div class=\"row\">" .
		        	"<div class=\"col s12\">" .
		        		"<div class=\"card\">" .
		            
		            		"<div class=\"product-image\">";
		            			if(empty($r['imagePath'])) {
		            				echo "<img class=\"materialboxed  catalogue-images\"  
									src=\"../../images/ina.jpg\" data-caption=\"" . $r['name'] . "\" alt=\"Image Not Available\">";
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
	echo "</div>"; 

	mysql_close();