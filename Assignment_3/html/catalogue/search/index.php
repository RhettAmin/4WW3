<!doctype html>
<html lang="en">
  <?php include "/~aminr4/A3/html/includes/head.php" ?>

  <body class="grey lighten-4">
    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>
    <i id="goToCartPage" class="medium mdi-action-shopping-cart green-text text-lighten-2 goToCartPage"></i>
    <a id="toTheMoon" class="to-the-moon btn-floating btn-large waves-effect waves-light red" href="#"><i class="mdi-hardware-keyboard-arrow-up"></i></a>


    <!--************* Main *************-->
    <main>
    	  <section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
        	<img src="/~aminr4/A3/images/gleash_landscape.jpg"> 

      	</section>
        <!--*********************** CATALOGUE ITEMS *****************************************--> 
        <section class="card-panel container catalogue-card">
			<h4><strong>Catalogue</strong></h4>

			<!--************* SEARCH *************-->
			<?php include "searchbar.php" ?>

			<?php 

				$servername = "mysqlsrv2.cas.mcmaster.ca";
				$username = "woodmjm";
				$password = "1138343";
				$db = "woodmjm_db";

				mysql_connect("$servername", "$username", "$password") or die(mysql_error());

				mysql_select_db("$db") or die(mysql_error());

				if (!isset($_POST['search'])) {
					header('Location: /~aminr4/A3/html/catalogue/');
				}
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
			?>

	</main>

    <?php include "/~aminr4/A3/html/includes/sidemenu.php" ?>

    <!--************* Footer *************-->
    <?php include "/~aminr4/A3/html/includes/footer.php" ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/materialize.min.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/sidemenu_toggle.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/catalogue.js"></script>
  </body>
</html>