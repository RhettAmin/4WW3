<!doctype html>
<html lang="en">
  <?php include"../includes/head.php";?>

  <body class="grey lighten-4">
    <i id="toggle-sidemenu" class="medium green-text text-lighten-2">☰</i>
    <a id="toTheMoon" class="to-the-moon btn-floating btn-large waves-effect waves-light red" href="#"><i class="mdi-hardware-keyboard-arrow-up"></i></a>


    <!--************* Main *************-->
    <main>
    	<section id="giraffe-landscape" class="grey lighten-1 z-depth-1">
       		<img src="/~aminr4/A3/images/gleash_landscape.jpg"> 
      	</section>

      	<section class="card-panel container catalogue-card">
        	<h4><strong>Catalogue</strong></h4>
			<p>Your Cart</p>
			<table>
		        <thead>
		          <tr>
		              <th>Product Name</th>
		              <th>Price</th>
		              <th>Quantity</th>
		              <th>In Stock</th>
		          </tr>
		        </thead>

		        <tbody>
					<?php 
						$servername = "mysqlsrv2.cas.mcmaster.ca";
						$username = "woodmjm";
						$password = "1138343";
						$db = "woodmjm_db";

						// Create connection
						mysql_connect("$servername", "$username", "$password") or die(mysql_error());

						mysql_select_db("$db") or die(mysql_error());

						session_start();

					 	$userCart = "Cart_" . $_SESSION['username'];
						$cart = mysql_query("SELECT * FROM $userCart;");
						while ($c = mysql_fetch_assoc($cart)) {
							$id = $c['pid'];
							$query = mysql_query("SELECT * FROM Products WHERE id=$id;");
							$r = mysql_fetch_assoc($query);

							echo 
					    		"<div class=\"card-panel col s4\">" .
					    			"<div class=\"row\">" .
						    			"<div class=\"col s8\">" .
						    				"<p><h5>" . $r['name'] . "</h5></p>" .
						    				"<label>" . $r['material'] . "</label>" .
						    				"<p>" . $r['description'] . "</p>" .
						    			"</div>" .
						    			"<div class=\"col s4\">".
						    				"<p>Price: $".$r['price']."</p>" .
						    				"<p>QT: <input type=\"number\" value=\"" . $c['quantity'] . "\"></p>" .
						    			"</div>" .
						    		"</div>" .
					    		"</div>";
					    	echo 
								"<tr>" .
									"<td>" . $r['name'] . "</td>"
									"<td>$" . $r['price'] . "</td>"
									"<td>" . $c['quantity'] . "</td>"
									"<td>" . $r['quantity'] . "</td>"
								"</tr>"
							        
						}
					?>
				</tbody>
			</table>

		</section>
    </main>

    <?php include "../includes/sidemenu.php" ?>

    <!--************* Footer *************-->
    <?php include "../includes/footer.php" ?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/materialize.min.js"></script>
    <script type="text/javascript" src="/~aminr4/A3/js/sidemenu_toggle.js"></script>
  </body>
</html>


